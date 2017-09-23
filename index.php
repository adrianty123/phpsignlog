<!DOCTYPE html>
<html>
<style>
body
{
	background-repeat: no-repeat;
}
#loginform
{
	position: aboslute;
	margin-top: 250px;
	margin-left: 320px;
}

#signupform
{
	position:absolute;
	margin-left: 320px;
}

.text
{
	font-family: algerian;
	font-size: 25px;
	color: white;
	text-shadow: 0 0 8px black;
}
.button
{
	background-color: violet	;
    border: none;
    color: white;
    padding: 15px 32px;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 12px;
}
</style>
<head>
	<title>Login and Signup</title>
</head>
<body background="galaxy.jpg">
	<form method="post" action="login.php">
	<p id="loginform">
	<class="text">
	<a class="text">Log In</a>
	<br>
		<a class="text">Username:</a><input type="text" name="txtuname" />
		<a class="text">Password:</a><input type="password" name="txtpword">
		<a class="button"><input type="submit" name="login" value="LOGIN"></a>
	</p>
	</form>

	<br><br>

	<form method="post" action="signup.php">
	<p id=signupform>
	<a class="text">Log In</a>
	<br>
		<a class="text">Username:</a><input type="text" name="txtuname" />
		<a class="text">Password:</a><input type="password" name="txtpword">
		<a class="button"><input type="submit" name="signup" value="SIGNUP"></a>
	</p>
	</form>
</body>
</html>