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
    
    $search = $_POST['search'];
    echo $search;
    
    ?>

    <!-- [ SEARCH FORM] -->
    <form action="index.php" method="POST">
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