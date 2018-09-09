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
    <h1>Home page</h1>
    
    <a href="<?php base(); ?>home">Home</a>
    <a href="<?php base(); ?>about">About</a>
    <a href="<?php base(); ?>profile">Profile</a>
    <!--<img src="<?php //base(); ?>123.JPG" alt="">-->
    
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis reprehenderit, eum tempore repellendus officiis. Ea ex, quis voluptatibus facilis illo, quos labore a dolor neque odit in qui consectetur architecto?</p>
    <a href="article?id=1" class="btn btn-primary">Readmore</a>
    
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis reprehenderit, eum tempore repellendus officiis. Ea ex, quis voluptatibus facilis illo, quos labore a dolor neque odit in qui consectetur architecto?</p>
    <a href="article?id=2" class="btn btn-primary">Readmore</a>
    
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis reprehenderit, eum tempore repellendus officiis. Ea ex, quis voluptatibus facilis illo, quos labore a dolor neque odit in qui consectetur architecto?</p>
    <a href="article?id=3" class="btn btn-primary">Readmore</a>
</body>
</html>