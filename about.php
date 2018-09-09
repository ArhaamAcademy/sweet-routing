
<?php 
//session_start();

//echo $_SESSION['id'];

if(isset($_REQUEST['id'])) {
	
	$id = $_REQUEST['id'];
    echo $id;
	
}else{
    
    $id = "";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>About</h1>
    <a href="<?php base(); ?>home">Home</a>
    <a href="<?php base(); ?>about">About</a>
    <a href="<?php base(); ?>profile">Profile</a>
    <!--<img src="<?php //base(); ?>123.JPG" alt="">-->
</body>
</html>