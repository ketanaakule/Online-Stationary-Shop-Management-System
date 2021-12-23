<?php
session_start();

if(isset($_SESSION['c_mail']) && isset($_SESSION['c_password'])){

}else{
      header("location: ../loginPage.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Online Stationary Shop</title>
</head>
<body>
      <center>
            <h2> Welcome To Online Stationary Shop <?php echo $_SESSION['c_mail']; ?> <a href = "logout.php"> Logout </a></h2>
      <table border = "1" width = '500'>
            <caption><h2>All Stationary Items</h2><caption>
            <tr>
            <th>Item ID</th>
	      <th>Name</th>
	      <th>Price</th>
            </tr>

            <?php
             $con = mysqli_connect("localhost","root","","online_stationary_shop");
             $select = "SELECT * FROM stationary_items";

             $run = mysqli_query($con, $select);

             if(mysqli_num_rows($run)>0){

                  while($data = mysqli_fetch_array($run)){
                        
                        $id = $data['id'];
                        $s_name = $data['s_name'];
                        $s_price = $data['s_price'];
                  
            ?>
            <tr>
            <td><?php echo $id;?></td>
	      <td><?php echo $s_name;?></td>
	      <td><?php echo $s_price;?></td>
            </tr>
            <?php }} ?>


</table>      

</center>
</body>
</html>