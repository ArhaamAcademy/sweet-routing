<?php 

if(isset($_REQUEST['id'])) {
	
	$id = $_REQUEST['id'];
    //echo $id;
	
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
    <h1>Article page</h1>

    <a href="<?php base(); ?>home">Home</a>
    <a href="<?php base(); ?>about">About</a>
    <a href="<?php base(); ?>profile">Profile</a>
    <!--<img src="<?php //base(); ?>123.JPG" alt="">-->
    <?php
    
    if($id == 1){
        ?>
        
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis reprehenderit, eum tempore repellendus officiis. Ea ex, quis voluptatibus facilis illo, quos labore a dolor neque odit in qui consectetur architecto? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt odit laboriosam ipsam modi suscipit magni aliquid vel perferendis, cupiditate vero aliquam voluptates officia consequuntur, ea corporis mollitia vitae sunt iste!</p>
        <a href="home" class="btn btn-primary">Back To Home</a>
        <?php
        
    }elseif($id == 2){
        
        ?>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis reprehenderit, eum tempore repellendus officiis. Ea ex, quis voluptatibus facilis illo, quos labore a dolor neque odit in qui consectetur architecto? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, iusto ducimus dignissimos rem eius libero veniam quos est asperiores animi nulla nihil, ipsum illo voluptatem at doloribus non fugiat nisi qui, vitae quae maxime neque molestiae. Soluta aut commodi earum quis voluptatibus numquam dignissimos, possimus nemo eveniet suscipit consectetur magni. Lorem ipsum dolor sit amet, consectetur adipisicing elit. At iste dolore voluptatum autem atque eos, eligendi ullam officia quisquam, ab magnam dignissimos amet dolor perspiciatis optio omnis laborum magni! Tempora praesentium quod, laboriosam, quia, vitae ea, nostrum quae nisi ut saepe repudiandae. Repudiandae cumque culpa praesentium nobis consequatur laboriosam tempora.</p>
            <a href="home" class="btn btn-primary">Back To Home</a>
            <?php
    
    }else{
        ?>
        <p>
            facilis illo, quos labore a dolor neque odit in qui consectetur architecto? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque illo autem laborum quos modi commodi, tempora odio voluptate aliquid ad corporis fugit ducimus quia beatae vero at obcaecati numquam corrupti aut culpa necessitatibus est. Quod id laborum mollitia tenetur possimus quo tempore, temporibus vel non aperiam quas ratione debitis, porro sapiente. Dolore natus obcaecati quos, ipsam sit asperiores reiciendis mollitia eos, laboriosam fugiat, culpa animi earum. Nam provident praesentium, inventore, enim quibusdam temporibus iure magnam molestiae, illum aliquam laborum exercitationem aut quisquam amet libero delectus eius animi ut hic assumenda sint tenetur? In illo molestias error, soluta perspiciatis voluptates voluptatem! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum soluta atque voluptates, consequuntur cupiditate mollitia autem numquam labore est laudantium, error at impedit debitis libero veritatis? Vitae ratione cumque vero provident nobis, eius, obcaecati rem veniam beatae voluptatem porro totam reprehenderit quia corporis cupiditate incidunt et impedit. Perferendis sapiente veritatis odio debitis adipisci harum cumque non consequuntur, fuga nobis doloribus perspiciatis. Deleniti laboriosam debitis est consequuntur earum optio sequi perferendis consequatur aut! Illum reiciendis sed, minus vitae maxime molestiae sequi ab, blanditiis quisquam optio cupiditate neque recusandae modi voluptate quam aliquid repellat officiis ex hic nisi ut, ipsum exercitationem amet.</p>
        <a href="home" class="btn btn-primary">Back To Home</a>
                <?php
        
    }
    
    ?>

</body>

</html>
