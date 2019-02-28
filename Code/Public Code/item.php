<?php require_once("resources/config.php");  ?>

<?php include(TEMPLATE_FRONT . DS . "header.php");  ?>


    <!-- Page Content -->
<div class="containerOne">

       <!-- Side Navigation -->
       <?php include(TEMPLATE_FRONT . DS . "side_nav.php");  ?>

        <?php    
        
        $query = query(" SELECT * FROM photos WHERE photo_id = " . escape_string($_GET['id']) . " ");
        confirm($query);

        while($row = fetch_array($query)): 

        ?>


    <div class="col-md-9">

        <!--Row For Image and Short Description-->

        <div class="rowOne">

            <div class="col-md-7">
                <img class="img-responsive" src="resources/<?php echo display_image($row['photo_image']); ?>" alt="">
                <br><br>
            </div>

            <div class="col-md-5">
                <div class="thumbnail">
                    <div class="caption-full">
                        <center><h4><?php echo $row['photo_title']; ?></h4></center>
                    </div>
                </div>
            </div>
        </div><!--Row For Image and Short Description-->

        <!--Row for Tab Panel-->

        <div class="rowOne">
            <div role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                </ul>
                <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active">
                            <br><br><br>
                            <!-- Big Description Below -->
                            <p style="color:black"><?php echo nl2br($row['photo_description']); ?></p>
                        </div>
                    </div>
            </div>
        </div><!--Row for Tab Panel-->

    </div><!-- col-md-9 ends here -->

    <?php endwhile; ?>

    


</div>
<br>
<br>
<br>
    <!-- /.container -->

    <section>
            <div class="u-center-text u-margin-bottom-small">
                <h2 class="heading-secondary">Suggested Pictures</h2>
            </div>
            <div class="row">
                <div class="col-1-of-4">
                    <?php 
                        suggested_pictures();
                    ?>
                </div>

                <div class="col-1-of-4">
                    <?php 
                        suggested_pictures();
                    ?>
                </div>

                <div class="col-1-of-4">
                    <?php 
                        suggested_pictures();
                    ?>
                </div>

                <div class="col-1-of-4">
                    <?php 
                        suggested_pictures();
                    ?>
                </div>
            </div>
        </section>
        <br>
        <br>
        <br>

<?php include(TEMPLATE_FRONT . DS . "footer.php");  ?>
