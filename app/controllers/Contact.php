<?php

namespace App\Controllers;

use App\core\Controller;

class Contact
{
  use Controller;

  public function index()
  {
    $this->view('contact');
  }
}
