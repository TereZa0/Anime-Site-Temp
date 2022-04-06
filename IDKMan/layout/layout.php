</html>
<!doctype html>
<html lang="en">

<head>
    <!-- data source -->
    <?php
    require_once('../temp/source.php');
    date_default_timezone_set("Asia/Jakarta");
    session_start();
    ?>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="../CustomComponent/comp.css">
    <!-- <link rel="ico" href="https://raw.githubusercontent.com/TereZa0/discord-theme/main/sf-head-removebg-preview.png"> -->

    <!-- Custom JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>
        <?php if (isset($TPL->title)) {
            echo $TPL->title;
        } ?>
        | Puskesmas Securai
    </title>
    <?php
    // if (isset($TPL->headcontent)) {
    //     include $TPL->headcontent;
    // } 
    ?>
</head>

<body>
    <!-- <div class="container-fluid" style="padding: 0; margin-bottom: 50px;"> -->
    <?php
    include('navbar.php');
    if (isset($TPL->bodycontent)) {
        include $TPL->bodycontent;
    }
    ?>
    <!-- </div> -->
    <footer class="mt-5 sticky-bottom" style="max-width: 100%;background-color: #FF0000;">
        
        <div class="row" style="max-width: fit-content;margin-left: 40%;padding-top: 15px;">
            <p style="color: white;">
                © Copyright 2022 | All Rights Reserved
            </p>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
    -->
</body>

</html>