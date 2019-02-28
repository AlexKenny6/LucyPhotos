<!DOCTYPE html>
<html lang="en">

        <head>

            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">

            <title>Lucy Photos</title>
            <link href="css/style.css" rel="stylesheet">
            <!--<link href="css/bootstrap.css" rel="stylesheet">-->
            <link href="css/pictures.css" rel="stylesheet">
            <link href="css/items.css" rel="stylesheet">
            <link href="css/category.css" rel="stylesheet">
        </head>

    <body>
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