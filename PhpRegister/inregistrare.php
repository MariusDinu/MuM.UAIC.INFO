<?php

include '../PhpRegister/connect.php';
function inregistrare(){
    
     $email_value=$_POST['email'];
     $user_value=$_POST['username'];
     $pass_value=$_POST['password'];
     $passConfirm_value=$_POST['confirmPassword'];
     $country=$_POST['country'];

      $baza= new BD();
      $sql = "INSERT INTO register(Email,UserName,UserPassword,ConfirmUserPassword,Country,Admin) values (:email,:username,:pass,:passConfirm,:country,:admin)";
      $cerere = $baza::obtine_conexiune()->prepare($sql);
      return $cerere->execute([
   'email' => $email_value,
   'username' => $user_value,
   'pass'=> $pass_value,
   'passConfirm'=>$passConfirm_value,
   'country'=>$country,
   'admin'=>0]);
}
 
 inregistrare();
?>
<a onclick="fillRegister()">
<?php 
echo 'Inregistrarea a reusit!'; 

  ?>
 </a>
 
