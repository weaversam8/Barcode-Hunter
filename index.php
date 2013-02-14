<html>
<head>
<meta charset="utf-8">
<title>Barcode-Hunter</title>
<link href="styles/style.css" rel="stylesheet" type="text/css">
<link href="styles/forms.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="wrapper">
  <div id="tabContainer">
    <div class="tabs">
      <ul>
        <li id="tabHeader_1">Login</li>
        <li id="tabHeader_2">Register</li>
      </ul>
    </div>
    <div class="tabscontent">
      <div class="tabpage" id="tabpage_1">
        <h2>Login</h2>
        <form action="login.php">
<fieldset>
<legend>Login</legend>
<p><label for="user">Username</label> <input type="text" id="user" /></p>
<p><label for="pass">Password</label> <input type="password" id="pass" /><br /></p>
<p class="submit"><input type="submit" value="Submit" /></p>
</fieldset>
</form>
      </div>
      <div class="tabpage" id="tabpage_2">
        <h2>Register</h2>
        <form action="register.php">
<fieldset>
<legend>Register</legend>
<p><label for="name">Name</label> <input type="text" id="name" /></p>
<p><label for="e-mail">E-mail</label> <input type="text" id="e-mail" /><br /></p>
<p><label for="pass">Password</label> <input type="pass" id="pass" /><br /></p>
<p><label for="cpass">Confirm</label> <input type="pass" id="cpass" /><br /></p>
<p class="submit"><input type="submit" value="Submit" /></p>
</fieldset>
</form></div>      
    </div>
  </div>
<script src="tabs.js"></script>
</body>
</html>