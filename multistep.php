<?php
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="multistep";
  $conn=new mysqli($servername,$username,$password,$dbname);
  if ($conn->connect_error)
   {
  	die("connection fail");
  }
  $name= $_POST['name'];
  $mobile= $_POST['mobile'];
  $email= $_POST['email'];
  $city= $_POST['city'];
  $income= $_POST['income'];
  $age= $_POST['age'];
  $yourgender= $_POST['gender'];
  $maritalstatus= $_POST['maritalstatus'];

  $sql="INSERT INTO multistep_form (name,mobile,email,city,income,age,gender,maritalstatus) VALUE ('$name','$mobile','$email','$city','$income','$age','$gender','$maritalstatus')";
  if ($conn->query($sql)==true) {
  	echo "new record added";
  }
  else{
  	echo "error in this code";
  }
  $conn->close();
?>