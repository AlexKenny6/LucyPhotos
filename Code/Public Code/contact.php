<?php require_once("resources/config.php");  ?>

<?php include(TEMPLATE_FRONT . DS . "header.php");  ?>
        
    <div class="navigation">
        <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

        <label for="navi-toggle" class="navigation__button">
            <span class="navigation__icon">&nbsp;</span>
        </label>

        <div class="navigation__background">&nbsp;</div>

        <nav class="navigation__nav">
            <ul class="navigation__list">
                <?php include(TEMPLATE_FRONT . DS . "top_nav.php");  ?>
            </ul>
        </nav>
    </div>


    <main>
        <section class="section-book">
            <div class="row">
                <div class="book">
                    <div class="book__form"> 
                        
                        <?php send_message(); ?>

                        <form action="" class="form" method="post" name="sentMessage" id="contactForm">
                            <div class="u-margin-bottom-medium">
                                <h2 class="heading-secondary">Contact Us!</h2>
                            </div>

                            <div class="form_group">
                                <input type="text" class="form__input" name="name" placeholder="Full Name" id="name" required name="name" data-validation-required-message="Please enter your name.">
                                <label for="name" class="form__label">Full Name</label>
                            </div>

                            <div class="form_group">
                                <input type="email" class="form__input" placeholder="Email Address" id="email" required name="email" data-validation-required-message="Please enter your email address.">
                                <label for="email" class="form__label">Email Address</label>
                            </div>

                            <div class="form__group">
                                <input type="text" class="form__input" id="subject" name="subject" placeholder="Your Subject *" required data-validation-required-message="Please enter your subject.">
                            </div>

                            <div class="form-group">
                                <textarea name="message" class="form__input" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                            </div>
                            <br><br>
                            <div class="form__group">
                                <button class="btn btn--green" id="submit" name="submit" type="submit">Send Message &rarr;</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
    </main>
    
<?php include(TEMPLATE_FRONT . DS . "footer.php");  ?>