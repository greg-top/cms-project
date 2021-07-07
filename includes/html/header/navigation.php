<?php
    require 'includes/db.php';
?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Start Bootstrap</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
            <?php
            // make global $connection as the variable is in different file
            global $connection;
            //prepare SQL query to retrieve all data from categories table
            $query = "SELECT cat_title FROM categories";
            // get data from categories table
            $selectCategories = mysqli_query($connection, $query);

            //create links
            while($row = mysqli_fetch_assoc($selectCategories)): ?>
               <li>
                   <a href="#"><?php echo $row['cat_title'];?></a>
               </li>
            <?php endwhile; ?>
            ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
