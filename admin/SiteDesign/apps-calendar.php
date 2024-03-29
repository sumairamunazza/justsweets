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

        <!--calendar css-->
        <link href="../plugins/fullcalendar/css/fullcalendar.min.css" rel="stylesheet" />

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
                            <div class="col-lg-12">

                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <a href="#" data-toggle="modal" data-target="#add-category" class="btn btn-lg btn-custom btn-block waves-effect m-t-20 waves-light">
                                                <i class="fi-circle-plus"></i> Create New Event
                                            </a>
                                            <div id="external-events" class="m-t-20">
                                                <br>
                                                <p class="text-muted">Drag and drop your event or click in the calendar</p>
                                                <div class="external-event bg-success" data-class="bg-success">
                                                    <i class="mdi mdi-checkbox-blank-circle mr-2 vertical-middle"></i>New Theme Release
                                                </div>
                                                <div class="external-event bg-info" data-class="bg-info">
                                                    <i class="mdi mdi-checkbox-blank-circle mr-2 vertical-middle"></i>My Event
                                                </div>
                                                <div class="external-event bg-warning" data-class="bg-warning">
                                                    <i class="mdi mdi-checkbox-blank-circle mr-2 vertical-middle"></i>Meet manager
                                                </div>
                                                <div class="external-event bg-purple" data-class="bg-purple">
                                                    <i class="mdi mdi-checkbox-blank-circle mr-2 vertical-middle"></i>Create New theme
                                                </div>
                                            </div>

                                            <!-- checkbox -->
                                            <div class="checkbox checkbox-primary mt-3">
                                                <input type="checkbox" id="drop-remove">
                                                <label for="drop-remove">
                                                    Remove after drop
                                                </label>
                                            </div>

                                            <div class="mt-5 d-none d-xl-block">
                                                <h5 class="text-center">How It Works ?</h5>

                                                <ul class="pl-3">
                                                    <li class="text-muted mb-3">
                                                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                                    </li>
                                                    <li class="text-muted mb-3">
                                                        Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.
                                                    </li>
                                                    <li class="text-muted mb-3">
                                                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> <!-- end col-->
                                        <div class="col-lg-9">
                                            <div id="calendar"></div>
                                        </div> <!-- end col -->
                                    </div>  <!-- end row -->
                                </div>

                                <!-- BEGIN MODAL -->
                                <div class="modal fade" id="event-modal" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header text-center border-bottom-0 d-block">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title">Add New Event</h4>
                                            </div>
                                            <div class="modal-body">

                                            </div>
                                            <div class="modal-footer border-0 pt-0">
                                                <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                                                <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Add Category -->
                                <div class="modal fade" id="add-category" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header text-center border-bottom-0 d-block">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title mt-2">Add a category</h4>
                                            </div>
                                            <div class="modal-body p-4">
                                                <form role="form">
                                                    <div class="form-group">
                                                        <label class="control-label">Category Name</label>
                                                        <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Choose Category Color</label>
                                                        <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                            <option value="success">Success</option>
                                                            <option value="danger">Danger</option>
                                                            <option value="info">Info</option>
                                                            <option value="pink">Pink</option>
                                                            <option value="primary">Primary</option>
                                                            <option value="warning">Warning</option>
                                                            <option value="inverse">Inverse</option>
                                                        </select>
                                                    </div>

                                                </form>

                                                <div class="text-right">
                                                    <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-custom ml-1 waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END MODAL -->
                            </div>
                            <!-- end col-12 -->
                        </div> <!-- end row -->

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

        <!-- Jquery-Ui -->
        <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>

        <!-- SCRIPTS -->
        <script src="../plugins/moment/moment.js"></script>
        <script src='../plugins/fullcalendar/js/fullcalendar.min.js'></script>
        <script src="assets/pages/jquery.calendar.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>