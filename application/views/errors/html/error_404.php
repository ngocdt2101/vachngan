<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Trang không tồn tại</title>

    <?php
        $domain = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
        $domain .= "://" . $_SERVER['HTTP_HOST'];
        $domain .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
    ?>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo $domain ?>assets/frontend/img/story.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $domain ?>assets/frontend/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="<?php echo $domain ?>assets/frontend/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/frontend/css/all.min.css">

    <!-- Aos CSS -->
    <link rel="stylesheet" href="<?php echo $domain ?>assets/frontend/css/theme.css">

</head>

<body>
    <div class="mainwrapper error-page">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="error-wrap">

                            <div class="error-logo">
                                <a href="index.html"><img class="img-fluid" src="<?php echo $domain ?>assets/frontend/img/compact_logo.png" alt="img"></a>
                            </div>

                            <h2>Trang bạn truy cập không tồn tại</h2>
                            <div class="error-img">
                                <img class="img-fluid" src="<?php echo $domain ?>assets/frontend/img/404-error.jpg" alt="img">
                            </div>
                            <a href="<?php echo $domain ?>" class="btn btn-primary rounded-pill">Trở về trang chủ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo $domain ?>assets/frontend/js/jquery.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="<?php echo $domain ?>assets/frontend/js/bootstrap.min.js"></script>

    <!-- Aos -->
    <script src="<?php echo $domain ?>assets/frontend/js/jquery.fancybox.min.js"></script>

</body>

</html>