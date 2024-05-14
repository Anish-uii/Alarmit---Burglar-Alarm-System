<?php

namespace App\Controllers;

use App\models\User;
use App\core\Controller;

class Welcome
{
    use User, Controller;
    public function index()
    {
        if (isset($_SESSION['registered']) && $_SESSION['registered'] == true) {
            $this->view('welcome');
        } else {
            echo "<script>window.location.href ='/';</script>";
        }
    }
}
