<!DOCTYPE html>
<html lang="en">
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Site Metas -->
    <title>Kilbon | Doctor T Dental Clinic</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/logodrt.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/logodrt.png">
    <!-- Design fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">  -->
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- FontAwesome Icons core CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
    <!-- Responsive styles for this template -->
    <link href="css/responsive.css" rel="stylesheet">
    <!-- Colors for this template -->
    <link href="css/colors.css" rel="stylesheet">
    <!-- Version Garden CSS for this template -->
    <link href="css/version/garden.css" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />

    <!-- responsive -->
    <link href="css/responsive/kilbon-res.css" rel="stylesheet">

</head>
<body>

    <div id="wrapper">
        <?php 
            $current_file = basename(__FILE__,'.php');
            include 'header.php';
        ?>
        <section class="kilbon-banner">
            <div class="container">
                <img src="images/kilbon-banner.jpg" class="img-responsive">
            </div>
        </section>
        <section class="kilbon-banner-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <iframe class="video-width" src="https://www.youtube.com/embed/DRkbx_2ynOs?autoplay=1" frameborder="0" autoplay allowfullscreen> </iframe>
                    </div>
                </div>
            </div>
        </section>
        <section class="detail-teeth margin-top-20 padding-bottom-30" id="defaultopen">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="review-detail">
                            <img src="images/review.png" class="img-responsive">
                            <p>เมื่อทำเครื่องหมายในช่องนี้แสดงว่าข้าพเจ้าเต็มใจรับข้อมูลการจัดฟันด้วย Invisalign รวมถึงอีเมลเกี่ยวกับเคล็ดลับ</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="review-detail">
                            <img src="images/review.png" class="img-responsive">
                            <p>เมื่อทำเครื่องหมายในช่องนี้แสดงว่าข้าพเจ้าเต็มใจรับข้อมูลการจัดฟันด้วย Invisalign รวมถึงอีเมลเกี่ยวกับเคล็ดลับ</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="review-detail">
                            <img src="images/review.png" class="img-responsive">
                            <p>เมื่อทำเครื่องหมายในช่องนี้แสดงว่าข้าพเจ้าเต็มใจรับข้อมูลการจัดฟันด้วย Invisalign รวมถึงอีเมลเกี่ยวกับเคล็ดลับ</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="review-detail">
                            <img src="images/review.png" class="img-responsive">
                            <p>เมื่อทำเครื่องหมายในช่องนี้แสดงว่าข้าพเจ้าเต็มใจรับข้อมูลการจัดฟันด้วย Invisalign รวมถึงอีเมลเกี่ยวกับเคล็ดลับ</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <button class="button-showmore">Show more</button>
                    </div>
                </div>
            </div>
        </section>

        <div class="hr-non">
            <?php include 'top-footer.php'; ?>
        </div>
        <?php   
            include 'footer.php';
        ?>
    </div><!-- end wrapper -->

    <!-- Core JavaScript
    ================================================== -->
    <!-- <script src="js/jquery.min.js"></script> -->
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/script.js"></script>
    <script>
        $(function() {
            $('.popup-youtube').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false,
            });
        });
    </script>
</body>
</html>