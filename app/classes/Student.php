<?php
namespace App\classes;
class Student
{
    public $result = [];

    public function __construct($data)
    {
        $this->result = $data;
    }

    public function index()
  {
    header('Location: pages/index.php');

    return $this->result;
  }
}