<?php
/*---
[  author ] ;- Muhammed alaraby
[  Date   ] ;- 19/10/19
[  Info   ] ;- Home page  contents
----*/
?>

<!-- ------------------------------------------------------------------------------- -->
 <!-- Page Content -->
 <div class="container">

<div class="row">


<?php include_once '../app/bootstrap.php'; ?>
    <?php 
   
   
    //make the slq query
    $query = "SELECT * FROM posts";
    
    $select_all_post_query = $database->getQuery($query);

    while($row= mysqli_fetch_assoc($select_all_post_query)){
        $post_title = $row['post_title'];
        $post_author = $row['post_author'];
        $post_date = $row['post_date'];
        $post_image = $row['post_image'];
        $post_content = $row['post_content'];
    }

    ?>



    
        <!-- Third Blog Post -->
        <h2>
            <a href="#"><?php echo $post_title;?> </a>
        </h2>
        <p class="lead">
            by <a href="index.php"><?php echo $post_author; ?></a>
        </p>
        <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date;?> at 10:45 PM</p>
        <hr>
        <img class="img-responsive" src="http://placehold.it/900x300" alt="">
        <hr>
        <p><?php echo $post_content; ?></p>
        <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

        <hr>

        <!-- Pager -->
        <ul class="pager">
            <li class="previous">
                <a href="#">&larr; Older</a>
            </li>
            <li class="next">
                <a href="#">Newer &rarr;</a>
            </li>
        </ul>

    </div>