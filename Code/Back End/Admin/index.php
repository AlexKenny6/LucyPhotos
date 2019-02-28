<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_BACK . "/header.php"); ?>

<?php

    if(!isset($_SESSION['username'])) {

        redirect("../index.php");

    }

?>

        <div id="page-wrapper">

            <div class="container-fluid">

            <?php

            if($_SERVER['REQUEST_URI'] == "/admin/" || $_SERVER['REQUEST_URI'] == "/admin/index.php") {

                include(TEMPLATE_BACK . "/admin_content.php");

            } // if end

            if(isset($_GET['admin_content'])) {

                include(TEMPLATE_BACK . "/admin_content.php");

            } // if end

            if(isset($_GET['categories'])) {

                include(TEMPLATE_BACK . "/categories.php");

            }

            if(isset($_GET['pictures'])) {

                include(TEMPLATE_BACK . "/pictures.php");

            }

            if(isset($_GET['add_picture'])) {

                include(TEMPLATE_BACK . "/add_picture.php");

            }

            if(isset($_GET['edit_pictures'])) {

                include(TEMPLATE_BACK . "/edit_pictures.php");

            }

            if(isset($_GET['users'])) {

                include(TEMPLATE_BACK . "/users.php");

            }

            //if(isset($_GET['add_user'])) {

               // include(TEMPLATE_BACK . "/add_user.php");

            // }

            //if(isset($_GET['edit_user'])) {

                // include(TEMPLATE_BACK . "/edit_user.php");

            //}

            ?>
            </div>
        </div>

<?php include(TEMPLATE_BACK . "/footer.php"); ?>
