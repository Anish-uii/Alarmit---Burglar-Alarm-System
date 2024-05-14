<?php

namespace App\Controllers;

class Detect
{
  public function index()
  {
    if (isset($_SESSION['registered']) && $_SESSION['registered'] == true) {
      $command = "python3 ../app/core/face-detect/app.py 2>&1";
      exec($command, $output, $return_var);
      echo "Return code: $return_var<br>";
      echo "Output of Python script: <br>";
      print_r($output);
    } else {
      echo "<script>window.location.href ='/';</script>";
    }
  }
}
