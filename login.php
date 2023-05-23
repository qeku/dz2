<?php
	define("DB_SERVER", "localhost");
	define("DB_USER", "root");
	define("DB_PASS", "");
	define("DB_NAME", "autoriz");

	
	session_start();
	?>
 
	<?php
	$db = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
	if(isset($_SESSION["session_username"])){

	}

	if(isset($_POST["login"])){

	if(!empty($_POST['username']) && !empty($_POST['password'])) {
	$username=htmlspecialchars($_POST['username']);
	$password=htmlspecialchars($_POST['password']);
	$query = mysqli_query($db,"SELECT * FROM users WHERE username = '".$_POST['username']."' and password = '".$_POST['password']."'");
	$numrows = mysqli_num_rows($query);
	if($numrows!=0){
    while($row = mysqli_fetch_assoc($query)){
	$dbusername=$row['username'];
  $dbpassword=$row['password'];	
  echo $dbusername;
 }
  if($dbusername && $password == $dbpassword){
	 $_SESSION['session_username']=$username;	 
   header("Location: intropage.php");
	}
	} else {
	
	echo  "Неверный логин или пароль!";
 }
	} else {
    $message = "All fields are required!";
	}
	}
	?><html lang="en">
	<head>
<meta charset="utf-8">
<title> </title>
<link href="style.css" media="screen" rel="stylesheet">
<link href= 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head> 
<body>
<div class="container mlogin">
<div id="login">
<h1>Вход</h1>
<form action="" id="loginform" method="post"name="loginform">
<p><label for="user_login">Имя пользователя<br>
<input class="input" id="username" name="username"size="20"
type="text" value=""></label></p>
<p><label for="user_pass">Пароль<br>
 <input class="input" id="password" name="password"size="20"
  type="password" value=""></label></p> 
	<p class="submit"><input class="button" name="login"type= "submit" value="Войти"></p>
	<p class="regtext">Еще не зарегистрированы?<a href= "register.php">Регистрация</a>!</p>

   </form>
 </div>
  </div>
<footer>

</footer>
</body>
</html>