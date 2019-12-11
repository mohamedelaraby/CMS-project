
 <?php

// Select the image
$image_query = "SELECT * FROM posts WHERE id =  ?";

$select_all_images = $database->getQuery($image_query);
while($row= mysqli_fetch_assoc($select_all_images)){
   // specify header with content type,
    // you can do header("Content-type: image/jpg"); for jpg,
    // header("Content-type: image/gif"); for gif, etc.
    header("Content-type: image/jpg");
    
    //display the image data
     $row['post_image'];
    
}

?>