<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login Page</title>
      <link rel='stylesheet' href='style.css' type='text/css'>
</head>
<body>
      
      <div class="main">
            <div class="register">
                  <h2>Login Here</h2>
                  <form id='register' action='login_fun.php' method='POST'>
                        

                        <label>Mail: </label>
                        <br>
                        <input type='text' name='c_mail' id='mail' placeholder='Enter Your Mail Address' required>
                        <br><br>

                        <label>Password : </label>
                        <br>
                        <input type='password' name='c_password' id='password' placeholder='Enter Your Password' required >
                        <br><br>

                        <input type='submit' value='Login' name='submit' id='submit'>
                        
                        <br><br>
                       
                        <p> Not Registered? <a href = "registrationPage.php"> Click Here </a> </p>
            </div>

      </div>

</body>
</html>