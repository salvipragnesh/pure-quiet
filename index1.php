<html>
<head>
<title>PHP</title>
</head>
<body>
<form action="" method="post">

<input type="text" name="firstname" placeholder="First Name" />

<input type="text" name="lastname" placeholder="Last Name" />

<input type="submit" name="submit" />
</form>
</body>
</html>

<?php
if(isset($_POST['firstname']))
{
$data = $_POST['firstname'];
$file1 = fopen('newfile.txt','a');
fwrite($file1,$data);
fclose($file1); 
}
?>
