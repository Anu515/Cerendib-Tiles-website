<?php
try{
  $db=new mysqli("localhost","root","","elite_decor_db");

}catch(exception $exc){
  echo $exc -> getTraceAsString();
  }
  if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email']) &&  isset($_POST['msg']))
  {

    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $msg=$_POST['msg'];


    $is_insert=$db -> query("INSERT INTO `contact`(`name`, `phone`, `email`, `msg`) VALUES ('$name',' $phone','$email','$msg')");

    if($is_insert == TRUE){
      echo "<center><h2> Thanks, your request submitted</h2></center>";
      exit();
    }
    else{
      echo "<center><h2> Error</h2></center>";
       exit();
    }


  }
?>








