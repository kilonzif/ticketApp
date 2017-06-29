<!Doctype>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	< ?php
session_start();
if(session_destroy())
{
header("Location: login.php");
}
?>
</body>
</html>