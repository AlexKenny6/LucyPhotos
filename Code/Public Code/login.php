<?php require_once("resources/config.php");  ?>

<?php include(TEMPLATE_FRONT . DS . "header.php");  ?>
    <section class="section-book">
        <div class="header__text-box">
            <h1 class="heading-primary">
                <span class="heading-primary--main">Log In</span>
            </h1>
            <a href="thePictures.php" class="btn btn--white btn--animated">Discover The Pictures!</a>
        </div>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>
        <h2 class="u-center-text bg-warning"><?php display_message(); ?></h2>
        <div class="row">
            <div class="form__form">
                <hr>
                <br>
                <br>
                <br>
                <center>
                    <form class="form" action="" method="post" enctype="multipart/form-data">

                        <?php login_user(); ?>

                        <div class="form_group">
                            <label for=""><h1>Username</h1><br><input type="text" name="username" class="form__input u-center-text"></label>
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="form_group">
                            <label for="password"><h1>Password</h1><br><input type="password" name="password" class="form__input u-center-text"></label>
                        </div>
                        <br><br><br>
                        <div class="form_group">
                            <input type="submit" name="submit" class="btn btn--green">
                        </div>
                    </form> 
                </center>
            </div>
        </div>
    </section>
    <br>
    <br> 
    <br>
    <br>
    <br>
    <br>
    <br>
<?php include(TEMPLATE_FRONT . DS . "footer.php");  ?>