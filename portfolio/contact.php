<?php 
$username='root';
$password='';
$conn=new mysqli('localhost','root','','portfolio');
if(isset($_POST['prenom']) and isset($_POST['mail']) and isset($_POST['message']) and isset($_POST['envoyer'])){
 $login = $_POST['prenom'];
 $mail = $_POST['mail'];
 $sms=$_POST['message'];

 $sql= "INSERT INTO sms(prenom,mail,message) VALUES('$login','$mail','$sms')";
     if (!mysqli_query($conn,$sql)){
        echo"no inseré";
     }else{
        echo"inseré";
     }
}
else{
    echo"une variable est soite incorrecte soite nulle";
}
?>