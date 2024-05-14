import cv2
import streamlit as st
from twilio.rest import Client
from playsound import playsound
import pygame

# Function to detect human faces using Haar Cascade
def detect_human(frame):
    face_cascade = cv2.CascadeClassifier(cv2.data.haarcascades + 'haarcascade_frontalface_default.xml')
    gray = cv2.cvtColor(frame, cv2.COLOR_BGR2GRAY)
    faces = face_cascade.detectMultiScale(gray, scaleFactor=1.1, minNeighbors=5, minSize=(30, 30))
    return len(faces) > 0

# Function to send message using Twilio
def send_message(account_sid, auth_token, twilio_phone_number, recipient_phone_number, message):
    if account_sid and auth_token and twilio_phone_number and recipient_phone_number:
        client = Client(account_sid, auth_token)
        message = client.messages.create(
            body=message,
            from_=twilio_phone_number,
            to=recipient_phone_number
        )
    else:
        st.error("Please enter Twilio details.")

# Function to initialize pygame mixer and play alarm sound
def play_alarm():
    pygame.mixer.init()
    alarm_sound = pygame.mixer.Sound("alarm.mp3")
    alarm_sound.play()
    return alarm_sound

# Function to stop alarm sound
def stop_alarm(alarm_sound):
    alarm_sound.stop()

# Main function
def run_detection():
    # Navbar
    st.markdown("""
    <style>
    .st-emotion-cache-13ln4jf{
        max-width: 100% !important;
        padding: 0;
        padding-top: 20px;
    }
    .st-emotion-cache-bm2z3a{ 
        background-image: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);   
    }
    .st-emotion-cache-1kyxreq{ 
        justify-content: center;
    }     
    .logout-btn{ 
                color: red;
                display: flex;
                align-items: center;
                padding: 10px 20px;
                margin-right: 100px; 
                width: 100px; 
                font-weight: bolder;
                font-size: 20px;
                text-decoration:none;
    }
    .logout-btn:hover{ 
                background-color: red;
                color: white;
                text-decoration:none;
    }
    </style>
    <div style="background-color:#FFF; padding: 0px; display: flex; justify-content: space-between;">
    <h1 style="color: #000;text-align:center; padding: 40px 20px;">Burglar System</h1>
    <a class ='logout-btn' href='?logout=true'>Logout</a>            
    </div>
    """, unsafe_allow_html=True)

    # About section in the navbar
    st.sidebar.markdown("""
    <div style="background-color:#2e86de;padding:5px;border-radius:10px;">
    <h2 style="color:white;text-align:center;">About</h2>
    <p style="color:white;text-align:center;">This project uses Haar Cascade for face detection to create a simple home surveillance system. When an intruder is detected, an alarm is sounded and a message is sent using Twilio.</p>
    </div>
    """, unsafe_allow_html=True)

    # Sidebar for Twilio configuration
    st.sidebar.header('Twilio Configuration (Optional)')
    account_sid = st.sidebar.text_input('Twilio Account SID')
    auth_token = st.sidebar.text_input('Twilio Auth Token', type='password')
    twilio_phone_number = st.sidebar.text_input('Twilio Phone Number')
    recipient_phone_number = st.sidebar.text_input('Recipient Phone Number')

    alarm_sound = None

    # Center-aligned container for buttons
    container = st.container()
    with container:
        st.write("")
        col0, col1, col2, col3 = st.columns([4, 2, 2, 4])

        if col1.button('Start Detection', key='start_button', help="Click to start detection", 
                       type='primary'):
            # Open webcam
            cap = cv2.VideoCapture(0)

            # Start detection loop
            while True:
                ret, frame = cap.read()
                if not ret:
                    break

                # Detect human faces
                if detect_human(frame):
                    # Alarm when human detected
                    st.warning("🚨 Intruder Detected!")
                    st.image(frame, channels="BGR", caption="Intruder Image")
                    # Send message
                    send_message(account_sid, auth_token, twilio_phone_number, recipient_phone_number, "🚨 Human Detected!")
                    # Play alarm
                    if alarm_sound is None:
                        alarm_sound = play_alarm()

            # Release resources
            cap.release()
            cv2.destroyAllWindows()

        if col2.button('Stop Detection', key='stop_button', help="Click to stop detection", 
                       type='primary'):
            if alarm_sound is not None:
                stop_alarm(alarm_sound)

    # Check for logout query parameter
    if st.query_params.get('logout'):
        st.experimental_rerun()
        st.stop()

if __name__ == "__main__":
    run_detection()
