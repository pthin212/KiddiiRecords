<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="200" />
    <title>Kiddii Records - Dashboard</title>
    <link rel="icon" href="/kiddiirecords.com/assets/img/logo/brand-logo-1.png">
    
    <!-- Lien ket cac file CSS-->
    <!-- general -->
    <link href="/kiddiirecords.com/back-end/css/general.css" type="text/css" rel="stylesheet" />
    <!-- header -->
    <link href="/kiddiirecords.com/back-end/css/header.css" type="text/css" rel="stylesheet" />
    <!-- nav-menu / sidebar-->
    <link href="/kiddiirecords.com/back-end/css/nav-menu.css" type="text/css" rel="stylesheet" />
    <!-- footer -->
    <link href="/kiddiirecords.com/back-end/css/footer.css" type="text/css" rel="stylesheet" />
    
    <!-- Lien ket thu vien CSS -->
    <?php
    include_once __DIR__ . '/layouts/styles.php';
    ?>

    <!-- Lien ket cac font -->
    <?php
    include_once __DIR__ . '/layouts/font.php';
    ?>
</head>
<body>
    <!-- Ket noi CSDL -->
    <?php
    include_once __DIR__ . '/dbconnect.php';
    ?>

    <!-- header -->
    <?php
    include_once __DIR__ . '/layouts/header.php';
    ?>

    <div class="container custom-container b-font">
        <div class="row pb-2">
            <!-- nav-menu -->
            <div class="col-2">
                <?php
                    include_once __DIR__ . '/layouts/sidebar.php';
                ?>
            </div>

            <!-- main area -->
            <div class="col-10 mt-2">
            </div>
        </div>
    </div>

    <?php
    include_once __DIR__ . '/layouts/footer.php';
    ?>
    <?php
    include_once __DIR__ . '/layouts/scripts.php';
    ?>

</body>
</html>