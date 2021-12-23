<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Registration Page</title>
      <link rel='stylesheet' href='style.css' type='text/css'>
</head>

<body>
      
      <div class="main">
            <div class="register">
                  <h2>Register Here</h2>
                  <form id='register' action='registration_fun.php' method='POST' >
                        <label>Name: </label>
                        <br>
                        <input type='text' name='c_name' id='name' placeholder='Enter Your Name' required >
                        <br><br>

                        <label>Mail: </label>
                        <br>
                        <input type='text' name='c_mail' id='mail' placeholder='Enter Your Mail Address' required >
                        <br><br>

                        <label>Password : </label>
                        <br>
                        <input type='password' name='c_password' id='password' placeholder='Enter Your Password' required >
                        <br><br>

                        <label>Contact : </label>
                        <br>
                        <input type='number' name='c_contact' id='contact' placeholder='Enter Your Contact No'required >
                        <br><br>

                        <label>Address : </label>
                        <br>
                        <input type='text' name='c_address' id='address' placeholder='Enter Your Address' required>
                        <br><br>

                        <input type='submit' value='Submit' name='submit' id='submit'> 

                        <br><br>
                       
                        <p> Already Registered? <a href = "loginPage.php"> Click Here </a> </p>
            </div>

      </div>



</body>
</html>