<?php require_once("resources/config.php");  ?>

<?php include(TEMPLATE_FRONT . DS . "header.php");  ?>

    <div class="containerOne">
        
        <?php    
        
        $query = query(" SELECT * FROM categories WHERE cat_id = " . escape_string($_GET['id']) ." ");
        confirm($query);

        while($row = fetch_array($query)): 

        ?>

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer u-center-text">
            <h1><?php echo $row['cat_title']; ?></h1>
            <p style="color:black">
            <?php echo $row['cat_description']; ?>
            </p>
        </header>
        <hr>
        <br><br>

        <div class="rowOne u-center-text">

           <?php 
           
            get_pictures_in_cat_page(); 
           
           ?>

        </div>

    </div>

    <?php endwhile; ?>

    <?php include(TEMPLATE_FRONT . DS . "footer.php");  ?>
