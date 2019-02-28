<?php require_once("../../config.php"); ?>

<?php

    if(isset($_GET['id'])) {

    $query = query("DELETE FROM photos WHERE photo_id = " . escape_string($_GET['id']) . " ");
    confirm($query);
    
    set_message("Photo Deleted");

    redirect("../../../admin/index.php?pictures");

    } // if end
    else {

        redirect("../../../admin/index.php?pictures");

    } // else end


?>