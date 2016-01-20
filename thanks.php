<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-eguiv="Content-Type"content="text/html;charset=UTL-8">
<title>thanks</title>
</head>
<body>

<?php
$dsn='mysql:dbname=phpkiso;host=localhost';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->query('SET NAMES utf8');

$nickname=$_POST['nickname'];
$email=$_POST['email'];
$goiken=$_POST['goiken'];

$nickname=htmlspecialchars($nickname);
$email=htmlspecialchars($email);
$goiken=htmlspecialchars($goiken);

echo $nickname;
echo '様<br />';
echo 'ご意見ありがとうございました<br />';
echo 'いただいたご意見『';
echo $goiken;
echo '』<br />';
echo $email;
echo 'にメールを送りましたのでご確認ください。';


$sql='INSERT INTO survey(nickname,email,goiken)VALUES("'.$nickname.'","'.$email.'","'.$goiken.'")';
$stmt=$dbh->prepare($sql);
$stmt->execute();

$dbh=null;
?>

</body>
</html>	
