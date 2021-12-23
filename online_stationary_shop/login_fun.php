<?php
      session_start();

      $con = mysqli_connect("localhost","root","","online_stationary_shop");

      if(isset($_POST['submit'])){

            $mail = $_POST['c_mail'];
            $password = $_POST['c_password'];

            $select = "SELECT c_mail, c_password FROM customer WHERE c_mail = '$mail' AND c_password = '$password' ";

            $run = mysqli_query($con, $select);

            if(mysqli_num_rows($run)>0){

                  while($data = mysqli_fetch_array($run)){
                        
                        $c_mail = $_SESSION['c_mail'] = $data['c_mail'];
                        $c_password = $_SESSION['c_password'] = $data['c_password'];


                  }
                  header("location: user/index.php");
            }
            else{
                  echo "No record found";
            }
      }

?>