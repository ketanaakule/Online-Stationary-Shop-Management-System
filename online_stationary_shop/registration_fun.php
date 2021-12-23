<?php
$con = mysqli_connect("localhost","root","","online_stationary_shop");

// if($con){
//       echo "Ok";
// }
// else{
//       echo "NO";
// }

if(isset($_POST['submit'])){

      $name =$_POST['c_name'];
      $mail =$_POST['c_mail'];
      $password =$_POST['c_password'];
      $contact =$_POST['c_contact'];
      $address =$_POST['c_address'];

      $insert = "INSERT INTO customer (c_name, c_mail, c_password, c_contact, c_address) 
      VALUES ('$name','$mail','$password', '$contact', '$address')";

      $run = mysqli_query($con, $insert);
      
      if($run){
            
            echo '<br><br><br><br><br>';
            echo "<center>";
            echo 'Your Data Inserted successfully';
            echo '<br><br>';
            echo '<a href = "loginPage.php"> Click Here to Login </a>';
            echo "</center>";
      }
      else{
            echo 'ERROR';
      }

}
else{
      echo "No action performed";
}
?>