<?php

$name="Muhammad Ferdiansyah";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>html</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/all.css">
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <!-- sidbar -->
            <div class="sidebar col-lg-4 border bg-light">
                <div class="d-flex flex-column m-5">
                    <img class="d-flex align-self-center" width="100" src="asset/image/logo7.png" alt="">
                </div>

                <div class="d-flex flex-column m-5">
                    <div class="d-flex align-self-center">
                        <p class="h2 text-dark" style="font-family:monospace;"><?php echo $name ?></p>
                    </div>
                </div>
            </div>

            <!-- content -->
            <div class="content col-lg-8 vh-100 p-0">
                <div class="d-flex flex-column">
                    <p class="h2 pt-4 pl-5">my ifst practice</p>

                    <section class="pl-5">
                        <p class="h2"><u>unit</u></p>
                        <?php include "inc/units.php";?>
                        <p class="lead"><?php echo celciusToFahrenheit(80); ?></p>
                    </section>

                    <section class="pl-5">
                        <p class="h2"><u>string</u></p>
                        <?php include "inc/string.php";?>
                        <p class="lead"><?php echo askName("muhammad ferdiansyah"); ?></p>
                    </section>
                </div>

                <div class="d-flex flex-column">
                    <p class="h2">my border</p>
                </div>

                <div class="d-flex flex-column position-absolute fixed-bottom">
                    <p class="font-weight-normal text-center">&copy; <?php echo "ferdiansyah\t"; echo "last modified:\t".date("F d Y H:i:s",getlastmod()); ?></p>
                </div>
            </div>

        </div>
    </div>



    <!-- optional javascripct -->
    <script src="asset/js/jquery.351.full.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/popper.js"></script>
</body>
</html>