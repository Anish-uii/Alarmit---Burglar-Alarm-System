<?php
namespace App\Controllers;

use App\models\User;
use App\core\Database;
use App\core\Controller;

class Landing
{
    use Database, User, Controller;

    public function index()
    {
        if (isset($_SESSION['registered']) && $_SESSION['registered'] == true) {
            echo "<script>window.location.href ='/welcome';</script>";
        } else {
            $this->view('landing');
        }
    }
}