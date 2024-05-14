<?php

namespace App\Controllers;

use App\core\Controller;

class About
{
  use Controller;

  public function index()
  {
    $this->view('about');
  }
}
