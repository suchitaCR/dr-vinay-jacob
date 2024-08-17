<!DOCTYPE html>
<html lang="en">

<head>
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


                <div class="tab-content tab-content2" id="magazine">
                    <div class="tabContent facebookcontainer tab1 tabActive">
                        <div class="row" id="gallery">
                            <div class="col-12 col-sm-6 col-lg-4 mt-2 top-4">
                                <a href="assets/images/Dengue-patient-recovers-after-4-day-coma.jpg"
                                    data-lightbox="image-set-1" data-title="Image 1">
                                    <img class="w-100" src="assets/images/Dengue-patient-recovers-after-4-day-coma.jpg"
                                        alt="">
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 mt-2 top-4">
                                <a href="assets/images/up-conference-2.jpg" data-lightbox="image-set-1"
                                    data-title="Image 1">
                                    <img class="w-100" src="assets/images/up-conference-2.jpg" alt="">
                                </a>
                            </div>
                            <!-- Add similar markup for other images -->
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
                                        <div id="carouselExample2" class="carousel slide" data-ride="carousel">
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
                                                    <a href="assets/images/Dengue-patient-recovers-after-4-day-coma.jpg"
                                                        data-lightbox="image-set-2" data-title="Image 1">
                                                        <img class="d-block w-100"
                                                            src="assets/images/Dengue-patient-recovers-after-4-day-coma.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="carousel-item">
                                                    <a href="assets/images/up-conference-2.jpg"
                                                        data-lightbox="image-set-2" data-title="Image 1">
                                                        <img class="d-block w-100"
                                                            src="assets/images/up-conference-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExample2" role="button"
                                                data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class a="carousel-control-next" href="#carouselExample2" role="button"
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