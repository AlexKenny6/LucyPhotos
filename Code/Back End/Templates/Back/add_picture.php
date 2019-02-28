<div class="col-md-12">

    <div class="row">
        <h1 class="page-header">
            Add Picture
            <?php add_picture(); ?>
        </h1>
    </div> 
               
    <form action="" method="post" enctype="multipart/form-data">

        <div class="col-md-8">
            <div class="form-group">
                <label for="picture-title">Picture Title </label>
                <input type="text" name="photo_title" class="form-control">
            </div>

            <div class="form-group">
                <label for="picture-title">Picture Description</label>
                <textarea name="photo_description" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="picture-title">Picture Short Description</label>
                <textarea name="photo_short_description" id="" cols="30" rows="3" class="form-control"></textarea>
            </div>
        </div><!--Main Content-->

    <!-- SIDEBAR-->
    <aside id="admin_sidebar" class="col-md-4">
        <div class="form-group">
            <center>
                <input type="submit" name="publish" class="btn btn-primary btn-lg" value="Publish">
            </center>
        </div>


        <div class="form-group">
            <label for="picture-title">Picture Category</label>
            <hr>
            <select name="picture_category_id" id="" class="form-control">
                <?php show_categories_add_picture_page(); ?> 
            </select>
        </div>

        <div class="form-group">
            <label for="picture-title">Picture Image</label>
            <input type="file" name="file"> 
        </div>
    </aside><!--SIDEBAR-->
</form>

