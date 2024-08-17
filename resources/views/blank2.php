<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

    <?php include "includes/head.php";?>
    <title>Media | Bombay Hospital</title>
    <style>
    .booklet {
        text-align: center;
        justify-content: center;
        padding: 15px;
        border: 2px solid #d4ebfd;
        border-radius: 5px;
        box-shadow: rgb(100 100 111 / 20%) 0px 7px 29px 0px;
        min-height: 380px;
        bottom: 20px;
        margin-bottom: 20px;
    }

    .booklet h4 {
        font-size: 20px;
        color: #d60a15;
        font-weight: 500;
    }

    .booklet .fa-file {
        display: none;
    }

    /*.booklet img{*/
    /*    height: 251px;*/
    /*    width: 334px;*/
    /*}*/

    ul.tabs {
        margin: 0px;
        padding: 0px;
        list-style: none;
        display: flex;
        justify-content: space-evenly;
    }

    ul.tabs li {
        background: #184a74 !important;
        color: #fff;
        display: inline-block;
        padding: 20px 15px;
        cursor: pointer;
        text-align: center;
        transition: 0.3s ease all;
        width: 25%;
        font-size: 20px;
        border: 1px solid #ccf2ff;
        border-radius: 5px;
    }

    ul.tabs li.current {
        background: #d60a15 !important;
    }

    @media only screen and (max-width: 767px) {
        ul.tabs li {
            width: 49%;
        }

        .top-4 {
            margin-top: 20px !important;
        }
    }
    </style>
</head>

<body>
    <div class="wrapper">

        <?php include "includes/header.php";?>
        <!-- ========================
       page title 
    =========================== -->

        <section class="page-title page-title-layout1 bg-overlay">
            <div class="bg-img"><img src="assets/images/page-titles/1.jpg" alt="background"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                        <div class="breadcrumb flat">
                            <a href="index.php">Home</a>
                            <a href="#" class="active">Media</a>
                        </div>
                    </div><!-- /.col-xl-5 -->
                </div><!-- /.row -->
            </div>
        </section><!-- /.page-title -->

        <section>
            <div class="container">

                <ul class="tabs nav nav-justified showDesktop">
                    <li class="srch-li tab-link current nav-pill mt-2" href="news">
                        Newspaper
                    </li>
                    <li class="srch-li tab-link nav-pill mt-2" href="magazine">
                        Magazine
                    </li>
                </ul>
                <div class="tab-content tab-content2 current" id="news">


                    <div class="row" id="gallery" data-toggle="modal" data-target="#exampleModal">
                        <div class="col-12 col-sm-6 col-lg-4 mt-2 top-4">
                            <img class="w-100" src="assets/images/Dengue-patient-recovers-after-4-day-coma.jpg" alt=""
                                data-target="#carouselExample" data-slide-to="0">
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 mt-2 top-4">
                            <img class="w-100" src="assets/images/up-conference-2.jpg" alt=""
                                data-target="#carouselExample" data-slide-to="1">
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 mt-2 top-4">
                            <img class="w-100" src="assets/images/news.jpg" alt="" data-target="#carouselExample"
                                data-slide-to="2">
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 mt-2 top-4">
                            <img class="w-100" src="assets/images/comprehensive-cancer.jpg" alt=""
                                data-target="#carouselExample" data-slide-to="3">
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 mt-2 top-4">
                            <img class="w-100" src="assets/images/news-paper-3.png" alt=""
                                data-target="#carouselExample" data-slide-to="4">
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 mt-2 top-4">
                            <img class="w-100" src="assets/images/news-paper-7.png" alt=""
                                data-target="#carouselExample" data-slide-to="5">
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 mt-2 top-4">
                            <img class="w-100" src="assets/images/news-paper-5.png" alt=""
                                data-target="#carouselExample" data-slide-to="6">
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 mt-2 top-4">
                            <img class="w-100" src="assets/images/news-paper-6.png" alt=""
                                data-target="#carouselExample" data-slide-to="7">
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 mt-2 top-4">
                            <img class="w-100" src="assets/images/news-paper-4.png" alt=""
                                data-target="#carouselExample" data-slide-to="8">
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 mt-2 top-4">
                            <img class="w-100" src="assets/images/news-paper-8.png" alt=""
                                data-target="#carouselExample" data-slide-to="9">
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 mt-2 top-4">
                            <img class="w-100" src="assets/images/newspaper-9.jpg" alt="" data-target="#carouselExample"
                                data-slide-to="10">
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 mt-2 top-4">
                            <img class="w-100" src="assets/images/up-conference-4.jpg" alt=""
                                data-target="#carouselExample" data-slide-to="11">
                        </div>
                    </div>

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div id="carouselExample" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
                                            <li data-target="#carouselExample" data-slide-to="1"></li>
                                            <li data-target="#carouselExample" data-slide-to="2"></li>
                                            <li data-target="#carouselExample" data-slide-to="3"></li>
                                            <li data-target="#carouselExample" data-slide-to="4"></li>
                                            <li data-target="#carouselExample" data-slide-to="5"></li>
                                            <li data-target="#carouselExample" data-slide-to="6"></li>
                                            <li data-target="#carouselExample" data-slide-to="7"></li>
                                            <li data-target="#carouselExample" data-slide-to="8"></li>
                                            <li data-target="#carouselExample" data-slide-to="9"></li>
                                            <li data-target="#carouselExample" data-slide-to="10"></li>
                                            <li data-target="#carouselExample" data-slide-to="11"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100"
                                                    src="assets/images/Dengue-patient-recovers-after-4-day-coma.jpg"
                                                    alt="">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="assets/images/up-conference-2.jpg"
                                                    alt="">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="assets/images/news.jpg" alt="">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="assets/images/comprehensive-cancer.jpg"
                                                    alt="">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="assets/images/news-paper-3.png" alt="">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="assets/images/news-paper-7.png" alt="">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="assets/images/news-paper-5.png" alt="">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="assets/images/news-paper-6.png" alt="">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="assets/images/news-paper-4.png" alt="">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="assets/images/news-paper-8.png" alt="">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="assets/images/newspaper-9.jpg" alt="">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="assets/images/up-conference-4.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExample" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExample" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>


                 <div class="tab-content tab-content2" id="magazine">
                    <div class="tabContent facebookcontainer tab1 tabActive">
                        
                        <div class="row" id="gallery" data-toggle="modal" data-target="#exampleModal2">
                            <div class="col-12 col-sm-6 col-lg-4 mt-2 top-4">
                                <img class="w-100" src="assets/images/conference-3.jpg" alt=""
                                    data-target="#carouselExample2" data-slide-to="12">
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 mt-2 top-4">
                                <img class="w-100" src="assets/images/magazine-3.png" alt=""
                                    data-target="#carouselExample2" data-slide-to="13">
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 mt-2 top-4">
                                <img class="w-100" src="assets/images/magazine-4.png" alt=""
                                    data-target="#carouselExample2" data-slide-to="14">
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 mt-2 top-4">
                                <img class="w-100" src="assets/images/magazine-5.png" alt=""
                                    data-target="#carouselExample2" data-slide-to="15">
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 mt-2 top-4">
                                <img class="w-100" src="assets/images/magazine-6.png" alt=""
                                    data-target="#carouselExample2" data-slide-to="16">
                            </div>
                        </div>

                        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div id="carouselExample" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExample2" data-slide-to="12" class="active">
                                                </li>
                                                <li data-target="#carouselExample2" data-slide-to="13"></li>
                                                <li data-target="#carouselExample2" data-slide-to="14"></li>
                                                <li data-target="#carouselExample2" data-slide-to="15"></li>
                                                <li data-target="#carouselExample2" data-slide-to="16"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" src="assets/images/conference-3.jpg"
                                                        alt="">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="assets/images/magazine-3.png"
                                                        alt="">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="assets/images/magazine-4.png"
                                                        alt="">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="assets/images/magazine-5.png"
                                                        alt="">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="assets/images/magazine-6.png"
                                                        alt="">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExample2" role="button"
                                                data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExample2" role="button"
                                                data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </section>

        <?php include "includes/footer.php";?>
    </div><!-- /.wrapper -->
</body>

</html>