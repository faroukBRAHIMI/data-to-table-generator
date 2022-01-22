<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    </head>
    <body id="body">
    <?php
    /**
     * @note app utils
     * @note require works in this case because we're calling the partial from 
     * @note root file
     * 
     */

    require 'Settings.php';
    require 'inc/Base.php';
    ?>
    <header class="container-fluid bg-light">
        <div class="row d-flex justify-content-center align-items-center" style="height: 50px;">
                <div>
                    <p class="mb-0 h3"><u>Data file to table generator</u></p>
                </div>
        </div>
    </header> 
