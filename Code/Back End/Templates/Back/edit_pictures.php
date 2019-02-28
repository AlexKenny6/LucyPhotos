
<?php

    if(isset($_GET['id'])) {

        $query = query("SELECT * FROM photos WHERE photo_id = " . escape_string($_GET['id']) . " ");
        confirm($query);

        while($row = fetch_array($query)) {

            $photo_title          =  escape_string($row['photo_title']);
            $photo_category_id    =  escape_string($row['photo_category_id']);
            $photo_description    =  escape_string($row['photo_description']);
            $photo_short_description      =  escape_string($row['photo_short_description']);
            $photo_image          =  escape_string($row['photo_image']);
            $photo_image          = display_image($row['photo_image']);

        } // while end

        
        update_picture();

    } // if end

?>

<div class="col-md-12">

    <div class="row">
        <h1 class="page-header">
            Edit Picture
            
        </h1>
    </div>
               
    <form action="" method="post" enctype="multipart/form-data">

        <div class="col-md-8">
            <div class="form-group">
                <label for="photo-title">Photo Title </label>
                <input type="text" name="photo_title" class="form-control" value="<?php echo $photo_title; ?>">
            </div>


            <div class="form-group">
                <label for="photo-title">Photo Description</label>
                <textarea name="photo_description" id="" cols="30" rows="10" class="form-control"><?php echo $photo_description; ?></textarea>
            </div>


            <div class="form-group">
                <label for="photo-title">Photo Short Description</label>
                <textarea name="photo_short_description" id="" cols="30" rows="3" class="form-control"><?php echo $photo_short_description; ?></textarea>
            </div>

        </div>

        <aside id="admin_sidebar" class="col-md-4">
            <div class="form-group">
                <center>
                    <input type="submit" name="update" class="btn btn-primary btn-lg" value="Update">
                </center>
            </div>

            <div class="form-group">
                <label for="photo-title">Photo Category</label>
                <hr>
                <select name="photo_category_id" id="" class="form-control">
                    <option value="<?php echo $photo_category_id; ?>"><?php echo show_picture_category_title($photo_category_id); ?></option>

                    <?php show_categories_add_picture_page(); ?> 
                </select>
            </div>

            <div class="form-group">
                <label for="photo-title">Photo Image</label>
                <input type="file" name="file"> <br>

                <img width="200" src="../../resources/<?php echo $photo_image; ?>" alt="">
            </div>
        </aside>
    </form>

