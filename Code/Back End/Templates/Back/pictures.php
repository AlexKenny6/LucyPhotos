<div class="row">
    <h1 class="page-header">
        All Pictures
    </h1>

    <h3 class="bg-success"><?php display_message(); ?></h3>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title (Click Photo to Edit)</th>
                <th>Category</th>
                <th>Delete Picture?</th>
            </tr>
        </thead>
        <tbody>
            <?php get_pictures_in_admin(); ?>
        </tbody>
    </table>
</div>
 
