<?php require_once("resources/config.php");  ?>

<?php include(TEMPLATE_FRONT . DS . "header.php");  ?>

    <header class="header">
        <div class="header__text-box">
            <h1 class="heading-primary">
                <span class="heading-primary--main">The Pictures!</span>
                <span class="heading-primary--sub">A large collection of photos of Lucy</span>
            </h1>
        </div>
    </header>
    <br>
    <br><br><br>  
        <div class="containerOne">
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">It's Picture Time</h2>
            </div>
            <div class="rowOne">
                <center>
                    <?php 
                        get_pictures();
                    ?>
                </center>
            </div>
        </div>
    <br>
    <br>
    <br>
    <br><br>
    <br>
    <br>
    <br>  
    <?php include(TEMPLATE_FRONT . DS . "footer.php");  ?>