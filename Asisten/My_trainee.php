<?php
include 'koneksi.php';
error_reporting(E_ALL ^ E_NOTICE);
include 'session.php';
?>


<!doctype html>
<html class="no-js" lang="zxx">
<?php
include 'head.php';
?>


<body>
    <?php
    include 'sidebar.php';
    ?>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <?php
            include 'menu_header.php';
            include 'mode_mobile.php';
            ?>

            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">


                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">All Trainee</span>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contacts-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <?php
                    $data = mysqli_query($conn, "SELECT * FROM `traines` ");
                    foreach ($data as $row) :
                    ?>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
                            <div class="student-inner-std res-mg-b-30 mg-b-10">
                                <div class="student-img">
                                    <img src="img/traines/<?= $row['foto']; ?>" alt="" />
                                </div>
                                <br>
                                <div class="student-dtl">
                                    <h6><?= $row['name']; ?></h6>
                                    <p class="dp-ag"><b>Angkatan:</b> <?= $row['angkatan']; ?></p>
                                    <p class="dp"><b>Asal Lokalitas : </b><?= $row['lokalitas']; ?></p>
                                    <a href="edit-Trainee.php?nip=<?= $row['nip']; ?>" class="btn btn-warning">Edit</a>
                                    <a href="Trainee-profile.php?nip=<?= $row['nip']; ?>" class="btn btn-primary">View Profile</a>
                                    <br><br>
                                    <form action="qrcode.php" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" value="<?= $row['nip']; ?>" name="nip">
                                        <button type="submit" name="simpan" class="btn btn-success">Cetak Qr Code</button>
                                    </form>
                                </div>
                            </div>
                        </div>



                    <?php endforeach; ?>
                </div>
                <!-- <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="student-inner-std mg-t-30">
                            <div class="student-img">
                                <img src="img/student/1.jpg" alt="" />
                            </div>
                            <div class="student-dtl">
                                <h2>Alexam Angles</h2>
                                <p class="dp">Computer Science</p>
                                <p class="dp-ag"><b>Age:</b> 20 Years</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="student-inner-std mg-t-30">
                            <div class="student-img">
                                <img src="img/student/2.jpg" alt="" />
                            </div>
                            <div class="student-dtl">
                                <h2>Alexam Angles</h2>
                                <p class="dp">Computer Science</p>
                                <p class="dp-ag"><b>Age:</b> 20 Years</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="student-inner-std mg-t-30">
                            <div class="student-img">
                                <img src="img/student/3.jpg" alt="" />
                            </div>
                            <div class="student-dtl">
                                <h2>Alexam Angles</h2>
                                <p class="dp">Computer Science</p>
                                <p class="dp-ag"><b>Age:</b> 20 Years</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="student-inner-std mg-t-30">
                            <div class="student-img">
                                <img src="img/student/4.jpg" alt="" />
                            </div>
                            <div class="student-dtl">
                                <h2>Alexam Angles</h2>
                                <p class="dp">Computer Science</p>
                                <p class="dp-ag"><b>Age:</b> 20 Years</p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>

        </div>




        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018. All rights reserved. Template by </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="js/tawk-chat.js"></script>
</body>

</html>