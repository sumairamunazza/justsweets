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

        <!-- Toastr css -->
        <link href="../plugins/jquery-toastr/jquery.toast.min.css" rel="stylesheet" />

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

            <?php
            include("sidebar.php");
            ?>

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                <!-- Top Bar Start -->
               <?php
               include("topbar.php");
               ?>
                <!-- Top Bar End -->



                <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">

                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th style="min-width:50%;">Jquery Toast</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Info Example</td>
                                            <td>
                                                <button type="button" class="btn btn-info waves-effect waves-light btn-sm" id="toastr-one">Click me</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Warning Example</td>
                                            <td>
                                                <button type="button" class="btn btn-warning waves-effect waves-light btn-sm" id="toastr-two">Click me</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Success Example</td>
                                            <td>
                                                <button type="button" class="btn btn-success waves-effect waves-light btn-sm" id="toastr-three">Click me</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Danger Example</td>
                                            <td>
                                                <button type="button" class="btn btn-danger waves-light waves-effect btn-sm" id="toastr-four">Click me</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>The text can be an array</td>
                                            <td>
                                                <button type="button" class="btn btn-light waves-effect btn-sm" id="toastr-five">Click me</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Put some HTML in the text</td>
                                            <td>
                                                <button type="button" class="btn btn-light waves-effect btn-sm" id="toastr-six">Click me</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Making them sticky</td>
                                            <td>
                                                <button type="button" class="btn btn-light waves-effect btn-sm" id="toastr-seven">Click me</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Fade transitions</td>
                                            <td>
                                                <button type="button" class="btn btn-light waves-effect btn-sm" id="toastr-eight">Click me</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Slide up and down transitions</td>
                                            <td>
                                                <button type="button" class="btn btn-light waves-effect btn-sm" id="toastr-nine">Click me</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Simple show from and hide to corner transition</td>
                                            <td>
                                                <button type="button" class="btn btn-light waves-effect btn-sm" id="toastr-ten">Click me</button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Default Alert</h4>
                                    <p class="text-muted m-b-25 font-14"></p>

                                    <div class="alert alert-custom" role="alert">
                                        This is a <strong>custom</strong> alert—check it out!
                                    </div>
                                    <div class="alert alert-primary" role="alert">
                                        This is a <strong>primary</strong> alert—check it out!
                                    </div>
                                    <div class="alert alert-secondary" role="alert">
                                        This is a <strong>secondary</strong> alert—check it out!
                                    </div>
                                    <div class="alert alert-success" role="alert">
                                        This is a <strong>success</strong> alert—check it out!
                                    </div>
                                    <div class="alert alert-danger" role="alert">
                                        This is a <strong>danger</strong> alert—check it out!
                                    </div>
                                    <div class="alert alert-warning" role="alert">
                                        This is a <strong>warning</strong> alert—check it out!
                                    </div>
                                    <div class="alert alert-info" role="alert">
                                        This is a <strong>info</strong> alert—check it out!
                                    </div>
                                    <div class="alert alert-light" role="alert">
                                        This is a <strong>light</strong> alert—check it out!
                                    </div>
                                    <div class="alert alert-dark" role="alert">
                                        This is a <strong>dark</strong> alert—check it out!
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Dismissing Alerts</h4>
                                    <p class="text-muted m-b-25 font-14"></p>

                                    <div class="alert alert-custom alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        This is a custom alert—check it out!
                                    </div>

                                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        This is a primary alert—check it out!
                                    </div>
                                    <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        This is a secondary alert—check it out!
                                    </div>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        This is a success alert—check it out!
                                    </div>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        This is a danger alert—check it out!
                                    </div>
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        This is a warning alert—check it out!
                                    </div>
                                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        This is a info alert—check it out!
                                    </div>
                                    <div class="alert alert-light alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        This is a light alert—check it out!
                                    </div>
                                    <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        This is a dark alert—check it out!
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- end row -->

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Default Alert</h4>
                                    <p class="text-muted m-b-25 font-14"></p>

                                    <div class="alert alert-custom bg-custom text-white border-0" role="alert">
                                        This is a <strong>custom</strong> alert—check it out!
                                    </div>
                                    <div class="alert alert-primary bg-primary text-white border-0" role="alert">
                                        This is a <strong>primary</strong> alert—check it out!
                                    </div>
                                    <div class="alert alert-secondary bg-secondary text-white border-0" role="alert">
                                        This is a <strong>secondary</strong> alert—check it out!
                                    </div>
                                    <div class="alert alert-success bg-success text-white border-0" role="alert">
                                        This is a <strong>success</strong> alert—check it out!
                                    </div>
                                    <div class="alert alert-danger bg-danger text-white border-0" role="alert">
                                        This is a <strong>danger</strong> alert—check it out!
                                    </div>
                                    <div class="alert alert-warning bg-warning text-white border-0" role="alert">
                                        This is a <strong>warning</strong> alert—check it out!
                                    </div>
                                    <div class="alert alert-info bg-info text-white border-0" role="alert">
                                        This is a <strong>info</strong> alert—check it out!
                                    </div>
                                    <div class="alert alert-light bg-light text-dark border-0" role="alert">
                                        This is a <strong>light</strong> alert—check it out!
                                    </div>
                                    <div class="alert alert-dark bg-dark text-white border-0" role="alert">
                                        This is a <strong>dark</strong> alert—check it out!
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Dismissing Alerts</h4>
                                    <p class="text-muted m-b-25 font-14"></p>

                                    <div class="alert alert-custom alert-dismissible bg-custom text-white border-0 fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        This is a custom alert—check it out!
                                    </div>

                                    <div class="alert alert-primary alert-dismissible bg-primary text-white border-0 fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        This is a primary alert—check it out!
                                    </div>
                                    <div class="alert alert-secondary alert-dismissible bg-secondary text-white border-0 fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        This is a secondary alert—check it out!
                                    </div>
                                    <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        This is a success alert—check it out!
                                    </div>
                                    <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        This is a danger alert—check it out!
                                    </div>
                                    <div class="alert alert-warning alert-dismissible bg-warning text-white border-0 fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        This is a warning alert—check it out!
                                    </div>
                                    <div class="alert alert-info alert-dismissible bg-info text-white border-0 fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        This is a info alert—check it out!
                                    </div>
                                    <div class="alert alert-light alert-dismissible bg-light text-dark border-0 fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        This is a light alert—check it out!
                                    </div>
                                    <div class="alert alert-dark alert-dismissible bg-dark text-white border-0 fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        This is a dark alert—check it out!
                                    </div>
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



        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!-- Toastr js -->
        <script src="../plugins/jquery-toastr/jquery.toast.min.js" type="text/javascript"></script>
        <script src="assets/pages/jquery.toastr.js" type="text/javascript"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>