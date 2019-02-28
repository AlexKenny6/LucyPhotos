<?php require_once("resources/config.php");  ?>

<?php include(TEMPLATE_FRONT . DS . "header.php");  ?>
        
    <header class="header">
        <div class="header__text-box">
            <h1 class="heading-primary">
                <span class="heading-primary--main">Lucy Photos</span>
                <span class="heading-primary--sub">Brightening your day with adorable dog pics</span>
            </h1>
            <a href="thePictures.php" class="btn btn--white btn--animated">Discover The Pictures!</a>
        </div>
    </header>
    

    <main>
        <section class="section-about">
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">About Lucy</h2>
            </div>

            <div class="row">
                <div class="col-1-of-2">
                  <h3>Lucy is a 7-year-old Havanese dog. This type of dog breed originates from Cuba and is a fun/lovable dog.
                      She is fun to be around and is very playful. As you can see from the photos that will be put on this website, she is very photogenic!
                      It seems to be that whenever someone takes a photo, she is in the perfect position.
                      One of the best things about taking her pictures is seeing the whites of her eyes when she turns her head, it is very cute.</h3>
                </div>
                <div class="col-1-of-2">
                  <h3>Since the day the Kenny family got her, she has been full of joy and energy. 
                      When she runs around her tail goes backwards and straightens out. 
                      It would be fun to watch this happen and you could see how happy she was by looking in her eyes. 
                      If she wasn’t running around, then she would be sleeping. She loves to sleep and enjoy her rest. 
                      You will find her on several pillows because it has to be comfortable.</h3>
                </div>
            </div>
        </section>

        <section class="section-features">
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">Here are some pictures</h2>
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
        <br><br>
        <br><br><br>
    </main>
    
<?php include(TEMPLATE_FRONT . DS . "footer.php");  ?>
