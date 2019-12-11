<?php
/*---
[  author ] ;- Muhammed alaraby
[  Date   ] ;- 19/10/19
[  Info   ] ;- Home page  Side bar
----*/
?>

<!-- ------------------------------------------------------------------------------- -->

<!-- Blog Sidebar Widgets Column -->
<div class="col-md-4">

<!-- Blog Search Well ---------------------------------------------------------------->
<div class="well">
    <h4>Blog Search</h4>
    <!-- GET DATA FROM SEARCH ENGINE -->
    <?php
    
    if(isset($_POST['submit'])){
        $search = $_POST['search'];
        
        // Search query
        $query= "SELECT  * FROM posts WHERE post_title LIKE '%".$search."%'";
        $search_query = $database->getQuery($query);
        if(!$search_query){
            die("Trying again in another time".mysqli_error($databas->databaseConnection));
        }
        
        // Get the number of rows
        $count =  mysqli_num_rows($search_query);
        if($count == 0){
           echo '<h1>NO  RESULTS</h1>';
        }
    
    } else {
      //  echo '<h1>NO  RESULTS</h1>';    
    }
    
    
    ?>




    <!-- [ SEARCH FORM] -->
    <form action="" method="post">
    <div class="input-group">
        <input type="text" name="search" class="form-control">
        <span class="input-group-btn">
            <button class="btn btn-default" name="submit" type="submit">
                <span class="glyphicon glyphicon-search"></span>
        </button>
        </span>
    </div>
     <!-- /.input-group -->
    </form>
    <!-- End-form-->
</div>


<!-- Blog Categories Well---------------------------------------------------------------------- -->
<div class="well">
    <h4>Blog Categories</h4>
    <div class="row">
        <div class="col-lg-6">
            <ul class="list-unstyled">
                <li><a href="#">Category Name</a>
                </li>
                <li><a href="#">Category Name</a>
                </li>
                <li><a href="#">Category Name</a>
                </li>
                <li><a href="#">Category Name</a>
                </li>
            </ul>
        </div>
        <!-- /.col-lg-6 -->
        <div class="col-lg-6">
            <ul class="list-unstyled">
                <li><a href="#">Category Name</a>
                </li>
                <li><a href="#">Category Name</a>
                </li>
                <li><a href="#">Category Name</a>
                </li>
                <li><a href="#">Category Name</a>
                </li>
            </ul>
        </div>
        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
</div>

<!-- Side Widget Well -->
<div class="well">
    <h4>Side Widget Well</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
</div>

</div>

</div>
<!-- /.row -->

<hr>