<?php
class Connect {
private $con;
    public function __construct()
    {
        $this->con=mysqli_connect("localhost","root","","inventaireucp");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }else {
      echo "";
  }
}


    public function getCon()
    {
        return $this->con;
    }
}


