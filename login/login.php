<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <link rel="stylesheet" href="css/styleLogin.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="bg"></div>

<form name = "login" method = "POST" action = "../function/run.php">
  <div class="form-field">
    <input type="email" name = "email" placeholder="Email / Username" required/>
  </div>
  
  <div class="form-field">
    <input type="password" name = "password" placeholder="Password" required/>                         </div>
  
  <div class="form-field">
    <button class="btn" type="submit" name = "login">Log in</button>
  </div>
</form>
<!-- partial -->
  
</body>
</html>
