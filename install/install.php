<html>
<title>Welcome</title>
<style>
#form_login{
background-image:url('../images/debut_light/debut_light.png');
margin-top:50px;
margin-left:400px;
padding:20px;
width:170px;
border:2px solid;
border-radius:10px; 
border-color:#dedede;
}
</style>

<body>
<div id="form_login" align="center">
<h3 align="center">Instalasi ...</h1>
<form method="POST" action="install2.php">
Host <br/><input type="text" name="host"/><br/>
Username  <br/><input type="text" name="user"/><br/>
Password  <br/><input type="password" name="pass"/><br/>
database name <br/> <input type="text" name="db"/><br/>

<input type="submit" name="submit" value="next >"/>
</form>
</div>
</body>
</html>