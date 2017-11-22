<?php
if ($_POST['login'])
{
  mysql_connect("localhost","root","");
  mysql_select_db("sosmed");

  $qry=mysql_query("SELECT * FROM user WHERE nm_user='$_POST[usernem]' and password='$_POST[paswod]'");

  if (mysql_num_rows($qry)==1) {
    echo "lanjut kehalaman admin";
    exit;
  }
  else{
    echo "user/password tidak valid";
  }
}
?>
<form method="POST" action="">
user : <input type="text" name="usernem"/><br/>
password : <input type="password" name="paswod"/><br/>
<input type="submit" name="login" value="masuk"/>
</form>
