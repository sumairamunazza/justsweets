<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Highdmin - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Modal -->
        <link href="../plugins/custombox/css/custombox.min.css" rel="stylesheet">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <?php
            include("sidebar.php");
            ?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                <!-- Top Bar Start -->
 <?php
 include("topbar.php");
 ?>
<!--Top Bar End-->


                <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-4">
                                <a href="#custom-modal" class="btn btn-custom waves-effect waves-light mb-4" data-animation="fadein" data-plugin="custommodal"
                                   data-overlaySpeed="200" data-overlayColor="#36404a"><i class="mdi mdi-plus"></i> Add Member</a>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-4">
                                <div class="text-center card-box">

                                    <div class="member-card pt-2 pb-2">
                                        <div class="thumb-lg member-thumb m-b-10 mx-auto">
                                            <img src="assets/images/users/avatar-2.jpg" class="rounded-circle img-thumbnail" alt="profile-image">
                                        </div>

                                        <div class="">
                                            <h4 class="m-b-5">Freddie J. Plourde</h4>
                                            <p class="text-muted">@Founder <span> | </span> <span> <a href="#" class="text-pink">websitename.com</a> </span></p>
                                        </div>

                                        <ul class="social-links list-inline m-t-20">
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                                            </li>
                                        </ul>

                                        <button type="button" class="btn btn-primary m-t-20 btn-rounded btn-bordered waves-effect w-md waves-light">Message Now</button>

                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="mt-3">
                                                        <h4 class="m-b-5">2563</h4>
                                                        <p class="mb-0 text-muted">Wallets Balance</p>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mt-3">
                                                        <h4 class="m-b-5">6952</h4>
                                                        <p class="mb-0 text-muted">Income amounts</p>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mt-3">
                                                        <h4 class="m-b-5">1125</h4>
                                                        <p class="mb-0 text-muted">Total Transactions</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div> <!-- end col -->

                            <div class="col-md-4">
                                <div class="text-center card-box">

                                    <div class="member-card pt-2 pb-2">
                                        <div class="thumb-lg member-thumb m-b-10 mx-auto">
                                            <img src="assets/images/users/avatar-3.jpg" class="rounded-circle img-thumbnail" alt="profile-image">
                                        </div>

                                        <div class="">
                                            <h4 class="m-b-5">Julie L. Arsenault</h4>
                                            <p class="text-muted">@@Programmer <span> | </span> <span> <a href="#" class="text-pink">websitename.com</a> </span></p>
                                        </div>

                                        <ul class="social-links list-inline m-t-20">
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                                            </li>
                                        </ul>

                                        <button type="button" class="btn btn-primary m-t-20 btn-rounded btn-bordered waves-effect w-md waves-light">Message Now</button>

                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="mt-3">
                                                        <h4 class="m-b-5">8471</h4>
                                                        <p class="mb-0 text-muted">Wallets Balance</p>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mt-3">
                                                        <h4 class="m-b-5">8512</h4>
                                                        <p class="mb-0 text-muted">Income amounts</p>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mt-3">
                                                        <h4 class="m-b-5">4751</h4>
                                                        <p class="mb-0 text-muted">Total Transactions</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div> <!-- end col -->

                            <div class="col-md-4">
                                <div class="text-center card-box">

                                    <div class="member-card pt-2 pb-2">
                                        <div class="thumb-lg member-thumb m-b-10 mx-auto">
                                            <img src="assets/images/users/avatar-4.jpg" class="rounded-circle img-thumbnail" alt="profile-image">
                                        </div>

                                        <div class="">
                                            <h4 class="m-b-5">Christopher Gallardo</h4>
                                            <p class="text-muted">@Webdesigner <span> | </span> <span> <a href="#" class="text-pink">websitename.com</a> </span></p>
                                        </div>

                                        <ul class="social-links list-inline m-t-20">
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                                            </li>
                                        </ul>

                                        <button type="button" class="btn btn-primary m-t-20 btn-rounded btn-bordered waves-effect w-md waves-light">Message Now</button>

                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="mt-3">
                                                        <h4 class="m-b-5">1021</h4>
                                                        <p class="mb-0 text-muted">Wallets Balance</p>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mt-3">
                                                        <h4 class="m-b-5">4562</h4>
                                                        <p class="mb-0 text-muted">Income amounts</p>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mt-3">
                                                        <h4 class="m-b-5">3621</h4>
                                                        <p class="mb-0 text-muted">Total Transactions</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->



                        <div class="row">
                            <div class="col-md-4">
                                <div class="text-center card-box">

                                    <div class="member-card pt-2 pb-2">
                                        <div class="thumb-lg member-thumb m-b-10 mx-auto">
                                            <img src="assets/images/users/avatar-5.jpg" class="rounded-circle img-thumbnail" alt="profile-image">
                                        </div>

                                        <div class="">
                                            <h4 class="m-b-5">Joseph M. Rohr</h4>
                                            <p class="text-muted">@Webdesigner <span> | </span> <span> <a href="#" class="text-pink">websitename.com</a> </span></p>
                                        </div>

                                        <ul class="social-links list-inline m-t-20">
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                                            </li>
                                        </ul>

                                        <button type="button" class="btn btn-primary m-t-20 btn-rounded btn-bordered waves-effect w-md waves-light">Message Now</button>

                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="mt-3">
                                                        <h4 class="m-b-5">7845</h4>
                                                        <p class="mb-0 text-muted">Wallets Balance</p>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mt-3">
                                                        <h4 class="m-b-5">1254</h4>
                                                        <p class="mb-0 text-muted">Income amounts</p>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mt-3">
                                                        <h4 class="m-b-5">5846</h4>
                                                        <p class="mb-0 text-muted">Total Transactions</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div> <!-- end col -->

                            <div class="col-md-4">
                                <div class="text-center card-box">

                                    <div class="member-card pt-2 pb-2">
                                        <div class="thumb-lg member-thumb m-b-10 mx-auto">
                                            <img src="assets/images/users/avatar-6.jpg" class="rounded-circle img-thumbnail" alt="profile-image">
                                        </div>

                                        <div class="">
                                            <h4 class="m-b-5">Mark K. Horne</h4>
                                            <p class="text-muted">@Director <span> | </span> <span> <a href="#" class="text-pink">websitename.com</a> </span></p>
                                        </div>

                                        <ul class="social-links list-inline m-t-20">
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                                            </li>
                                        </ul>

                                        <button type="button" class="btn btn-primary m-t-20 btn-rounded btn-bordered waves-effect w-md waves-light">Message Now</button>

                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="mt-3">
                                                        <h4 class="m-b-5">4851</h4>
                                                        <p class="mb-0 text-muted">Wallets Balance</p>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mt-3">
                                                        <h4 class="m-b-5">10250</h4>
                                                        <p class="mb-0 text-muted">Income amounts</p>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mt-3">
                                                        <h4 class="m-b-5">895</h4>
                                                        <p class="mb-0 text-muted">Total Transactions</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div> <!-- end col -->

                            <div class="col-md-4">
                                <div class="text-center card-box">

                                    <div class="member-card pt-2 pb-2">
                                        <div class="thumb-lg member-thumb m-b-10 mx-auto">
                                            <img src="assets/images/users/avatar-7.jpg" class="rounded-circle img-thumbnail" alt="profile-image">
                                        </div>

                                        <div class="">
                                            <h4 class="m-b-5">James M. Fonville</h4>
                                            <p class="text-muted">@Manager <span> | </span> <span> <a href="#" class="text-pink">websitename.com</a> </span></p>
                                        </div>

                                        <ul class="social-links list-inline m-t-20">
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                                            </li>
                                        </ul>

                                        <button type="button" class="btn btn-primary m-t-20 btn-rounded btn-bordered waves-effect w-md waves-light">Message Now</button>

                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="mt-3">
                                                        <h4 class="m-b-5">4560</h4>
                                                        <p class="mb-0 text-muted">Wallets Balance</p>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mt-3">
                                                        <h4 class="m-b-5">12350</h4>
                                                        <p class="mb-0 text-muted">Income amounts</p>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mt-3">
                                                        <h4 class="m-b-5">742</h4>
                                                        <p class="mb-0 text-muted">Total Transactions</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-4">
                                <div class="text-center card-box">

                                    <div class="member-card pt-2 pb-2">
                                        <div class="thumb-lg member-thumb m-b-10 mx-auto">
                                            <img src="assets/images/users/avatar-8.jpg" class="rounded-circle img-thumbnail" alt="profile-image">
                                        </div>

                                        <div class="">
                                            <h4 class="m-b-5">Jade M. Walker</h4>
                                            <p class="text-muted">@Webdeveloper <span> | </span> <span> <a href="#" class="text-pink">websitename.com</a> </span></p>
                                        </div>

                                        <ul class="social-links list-inline m-t-20">
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                                            </li>
                                        </ul>

                                        <button type="button" class="btn btn-primary m-t-20 btn-rounded btn-bordered waves-effect w-md waves-light">Message Now</button>

                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="mt-3">
                                                        <h4 class="m-b-5">3520</h4>
                                                        <p class="mb-0 text-muted">Wallets Balance</p>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mt-3">
                                                        <h4 class="m-b-5">4587</h4>
                                                        <p class="mb-0 text-muted">Income amounts</p>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mt-3">
                                                        <h4 class="m-b-5">423</h4>
                                                        <p class="mb-0 text-muted">Total Transactions</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div> <!-- end col -->

                            <div class="col-md-4">
                                <div class="text-center card-box">

                                    <div class="member-card pt-2 pb-2">
                                        <div class="thumb-lg member-thumb m-b-10 mx-auto">
                                            <img src="assets/images/users/avatar-9.jpg" class="rounded-circle img-thumbnail" alt="profile-image">
                                        </div>

                                        <div class="">
                                            <h4 class="m-b-5">Mathias L. Lassen</h4>
                                            <p class="text-muted">@Webdesigner <span> | </span> <span> <a href="#" class="text-pink">websitename.com</a> </span></p>
                                        </div>

                                        <ul class="social-links list-inline m-t-20">
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                                            </li>
                                        </ul>

                                        <button type="button" class="btn btn-primary m-t-20 btn-rounded btn-bordered waves-effect w-md waves-light">Message Now</button>

                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="mt-3">
                                                        <h4 class="m-b-5">7851</h4>
                                                        <p class="mb-0 text-muted">Wallets Balance</p>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mt-3">
                                                        <h4 class="m-b-5">10020</h4>
                                                        <p class="mb-0 text-muted">Income amounts</p>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mt-3">
                                                        <h4 class="m-b-5">1036</h4>
                                                        <p class="mb-0 text-muted">Total Transactions</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div> <!-- end col -->

                            <div class="col-md-4">
                                <div class="text-center card-box">

                                    <div class="member-card pt-2 pb-2">
                                        <div class="thumb-lg member-thumb m-b-10 mx-auto">
                                            <img src="assets/images/users/avatar-10.jpg" class="rounded-circle img-thumbnail" alt="profile-image">
                                        </div>

                                        <div class="">
                                            <h4 class="m-b-5">Alfred M. Bach</h4>
                                            <p class="text-muted">@Manager <span> | </span> <span> <a href="#" class="text-pink">websitename.com</a> </span></p>
                                        </div>

                                        <ul class="social-links list-inline m-t-20">
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                                            </li>
                                        </ul>

                                        <button type="button" class="btn btn-primary m-t-20 btn-rounded btn-bordered waves-effect w-md waves-light">Message Now</button>

                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="mt-3">
                                                        <h4 class="m-b-5">7421</h4>
                                                        <p class="mb-0 text-muted">Wallets Balance</p>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mt-3">
                                                        <h4 class="m-b-5">14754</h4>
                                                        <p class="mb-0 text-muted">Income amounts</p>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mt-3">
                                                        <h4 class="m-b-5">11525</h4>
                                                        <p class="mb-0 text-muted">Total Transactions</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-12">
                                <div class="text-right">
                                    <ul class="pagination pagination-split mt-0 pull-right">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">«</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">»</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2018 © Highdmin. - Coderthemes.com
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


        <!-- Modal -->
        <div id="custom-modal" class="modal-demo">
            <button type="button" class="close" onclick="Custombox.close();">
                <span>&times;</span><span class="sr-only">Close</span>
            </button>
            <h4 class="custom-modal-title">Add Members</h4>
            <div class="custom-modal-text text-left">
                <form role="form">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="position">Position</label>
                        <input type="text" class="form-control" id="position" placeholder="Enter position">
                    </div>
                    <div class="form-group">
                        <label for="company">Company</label>
                        <input type="text" class="form-control" id="company" placeholder="Enter company">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-success waves-effect waves-light">Save</button>
                        <button type="button" class="btn btn-danger waves-effect waves-light m-l-10" onclick="Custombox.close();">Cancel</button>
                    </div>
                </form>
            </div>
        </div>



        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>


        <!-- Modal-Effect -->
        <script src="../plugins/custombox/js/custombox.min.js"></script>
        <script src="../plugins/custombox/js/legacy.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>