<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Add Stationary Items</title>
      <link rel='stylesheet' href='style.css' type='text/css'>
</head>
<body>
      <center>
      <div class="main">
            <div class="register">
                  <h2>Add Stationary Items</h2>
                  <form  action='' method='POST'>

                        <label>Item id: </label>
                        <br>
                        <input type='text' name='id'  placeholder='Enter Name'>
                        <br><br>

                        <label>Name: </label>
                        <br>
                        <input type='text' name='s_name'  placeholder='Enter Name'>
                        <br><br>

                        <label>Price: </label>
                        <br>
                        <input type='text' name='s_price'  placeholder='Enter Price'>
                        <br><br>

                        

                        <input type='submit' value='Submit' name='submit' id='submit'>
            </div>

      </div>
</center>

</body>
</html>

<?php
$con = mysqli_connect("localhost","root","","online_stationary_shop");
if(isset($_POST['submit'])){

      $id = $_POST['id'];
      $name = $_POST['s_name'];
      $price = $_POST['s_price']; 

      $insert = "INSERT INTO stationary_items (id, s_name, s_price) 
      VALUES ('$id','$name','$price')";

      $run = mysqli_query($con, $insert);
      
      if($run){
            echo 'Your Data Inserted successfully';
      }
      else{
            echo 'ERROR';
      }
}
?>