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

        <!--Footable-->
        <link href="../plugins/footable/css/footable.core.css" rel="stylesheet">

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
                                    <h4 class="m-t-0 header-title">Filtering</h4>
                                    <p class="text-muted m-b-30 font-13">
                                        include filtering in your FooTable.
                                    </p>

                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-12 text-sm-center form-inline">
                                                <div class="form-group mr-2">
                                                    <select id="demo-foo-filter-status" class="custom-select">
                                                        <option value="">Show all</option>
                                                        <option value="active">Active</option>
                                                        <option value="disabled">Disabled</option>
                                                        <option value="suspended">Suspended</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <input id="demo-foo-search" type="text" placeholder="Search" class="form-control" autocomplete="on">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table id="demo-foo-filtering" class="table table-striped table-bordered toggle-circle m-b-0" data-page-size="7">
                                        <thead>
                                        <tr>
                                            <th data-toggle="true">First Name</th>
                                            <th>Last Name</th>
                                            <th data-hide="phone">Job Title</th>
                                            <th data-hide="phone, tablet">DOB</th>
                                            <th data-hide="phone, tablet">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Isidra</td>
                                            <td>Boudreaux</td>
                                            <td>Traffic Court Referee</td>
                                            <td>22 Jun 1972</td>
                                            <td><span class="badge label-table badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Shona</td>
                                            <td>Woldt</td>
                                            <td>Airline Transport Pilot</td>
                                            <td>3 Oct 1981</td>
                                            <td><span class="badge label-table badge-custom">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Granville</td>
                                            <td>Leonardo</td>
                                            <td>Business Services Sales Representative</td>
                                            <td>19 Apr 1969</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Easer</td>
                                            <td>Dragoo</td>
                                            <td>Drywall Stripper</td>
                                            <td>13 Dec 1977</td>
                                            <td><span class="badge label-table badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maple</td>
                                            <td>Halladay</td>
                                            <td>Aviation Tactical Readiness Officer</td>
                                            <td>30 Dec 1991</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maxine</td>
                                            <td><a href="#">Woldt</a></td>
                                            <td><a href="#">Business Services Sales Representative</a></td>
                                            <td>17 Oct 1987</td>
                                            <td><span class="badge label-table badge-custom">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lorraine</td>
                                            <td>Mcgaughy</td>
                                            <td>Hemodialysis Technician</td>
                                            <td>11 Nov 1983</td>
                                            <td><span class="badge label-table badge-custom">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lizzee</td>
                                            <td><a href="#">Goodlow</a></td>
                                            <td>Technical Services Librarian</td>
                                            <td>1 Nov 1961</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Judi</td>
                                            <td>Badgett</td>
                                            <td>Electrical Lineworker</td>
                                            <td>23 Jun 1981</td>
                                            <td><span class="badge label-table badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lauri</td>
                                            <td>Hyland</td>
                                            <td>Blackjack Supervisor</td>
                                            <td>15 Nov 1985</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Isidra</td>
                                            <td>Boudreaux</td>
                                            <td>Traffic Court Referee</td>
                                            <td>22 Jun 1972</td>
                                            <td><span class="badge label-table badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Shona</td>
                                            <td>Woldt</td>
                                            <td>Airline Transport Pilot</td>
                                            <td>3 Oct 1981</td>
                                            <td><span class="badge label-table badge-custom">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Granville</td>
                                            <td>Leonardo</td>
                                            <td>Business Services Sales Representative</td>
                                            <td>19 Apr 1969</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Easer</td>
                                            <td>Dragoo</td>
                                            <td>Drywall Stripper</td>
                                            <td>13 Dec 1977</td>
                                            <td><span class="badge label-table badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maple</td>
                                            <td>Halladay</td>
                                            <td>Aviation Tactical Readiness Officer</td>
                                            <td>30 Dec 1991</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maxine</td>
                                            <td><a href="#">Woldt</a></td>
                                            <td><a href="#">Business Services Sales Representative</a></td>
                                            <td>17 Oct 1987</td>
                                            <td><span class="badge label-table badge-custom">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lorraine</td>
                                            <td>Mcgaughy</td>
                                            <td>Hemodialysis Technician</td>
                                            <td>11 Nov 1983</td>
                                            <td><span class="badge label-table badge-custom">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lizzee</td>
                                            <td><a href="#">Goodlow</a></td>
                                            <td>Technical Services Librarian</td>
                                            <td>1 Nov 1961</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Judi</td>
                                            <td>Badgett</td>
                                            <td>Electrical Lineworker</td>
                                            <td>23 Jun 1981</td>
                                            <td><span class="badge label-table badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lauri</td>
                                            <td>Hyland</td>
                                            <td>Blackjack Supervisor</td>
                                            <td>15 Nov 1985</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Isidra</td>
                                            <td>Boudreaux</td>
                                            <td>Traffic Court Referee</td>
                                            <td>22 Jun 1972</td>
                                            <td><span class="badge label-table badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Shona</td>
                                            <td>Woldt</td>
                                            <td>Airline Transport Pilot</td>
                                            <td>3 Oct 1981</td>
                                            <td><span class="badge label-table badge-custom">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Granville</td>
                                            <td>Leonardo</td>
                                            <td>Business Services Sales Representative</td>
                                            <td>19 Apr 1969</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Easer</td>
                                            <td>Dragoo</td>
                                            <td>Drywall Stripper</td>
                                            <td>13 Dec 1977</td>
                                            <td><span class="badge label-table badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maple</td>
                                            <td>Halladay</td>
                                            <td>Aviation Tactical Readiness Officer</td>
                                            <td>30 Dec 1991</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maxine</td>
                                            <td><a href="#">Woldt</a></td>
                                            <td><a href="#">Business Services Sales Representative</a></td>
                                            <td>17 Oct 1987</td>
                                            <td><span class="badge label-table badge-custom">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lorraine</td>
                                            <td>Mcgaughy</td>
                                            <td>Hemodialysis Technician</td>
                                            <td>11 Nov 1983</td>
                                            <td><span class="badge label-table badge-custom">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lizzee</td>
                                            <td><a href="#">Goodlow</a></td>
                                            <td>Technical Services Librarian</td>
                                            <td>1 Nov 1961</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Judi</td>
                                            <td>Badgett</td>
                                            <td>Electrical Lineworker</td>
                                            <td>23 Jun 1981</td>
                                            <td><span class="badge label-table badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lauri</td>
                                            <td>Hyland</td>
                                            <td>Blackjack Supervisor</td>
                                            <td>15 Nov 1985</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr class="active">
                                            <td colspan="5">
                                                <div class="text-right">
                                                    <ul class="pagination pagination-split justify-content-end footable-pagination m-t-10 m-b-0"></ul>
                                                </div>
                                            </td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Add &amp; Remove Rows</h4>
                                    <p class="text-muted m-b-30 font-13">
                                        Add or remove rows from your FooTable.
                                    </p>

                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-12 text-sm-center form-inline">
                                                <div class="form-group mr-2">
                                                    <button id="demo-btn-addrow" class="btn btn-primary"><i class="mdi mdi-plus-circle mr-2"></i> Add New Row</button>
                                                </div>
                                                <div class="form-group">
                                                    <input id="demo-input-search2" type="text" placeholder="Search" class="form-control" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <table id="demo-foo-addrow" class="table table-striped table-bordered m-b-0 toggle-circle" data-page-size="7">
                                        <thead>
                                        <tr>
                                            <th data-sort-ignore="true" class="min-width"></th>
                                            <th data-sort-initial="true" data-toggle="true">First Name</th>
                                            <th>Last Name</th>
                                            <th data-hide="phone">Job Title</th>
                                            <th data-hide="phone, tablet">DOB</th>
                                            <th data-hide="phone, tablet">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-center"><button class="demo-delete-row btn btn-danger btn-sm btn-icon"><i class="fa fa-times"></i></button></td>
                                            <td>Isidra</td>
                                            <td>Boudreaux</td>
                                            <td>Traffic Court Referee</td>
                                            <td>22 Jun 1972</td>
                                            <td><span class="badge label-table badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><button class="demo-delete-row btn btn-danger btn-sm btn-icon"><i class="fa fa-times"></i></button></td>
                                            <td>Shona</td>
                                            <td>Woldt</td>
                                            <td>Airline Transport Pilot</td>
                                            <td>3 Oct 1981</td>
                                            <td><span class="badge label-table badge-custom">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><button class="demo-delete-row btn btn-danger btn-sm btn-icon"><i class="fa fa-times"></i></button></td>
                                            <td>Granville</td>
                                            <td>Leonardo</td>
                                            <td>Business Services Sales Representative</td>
                                            <td>19 Apr 1969</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><button class="demo-delete-row btn btn-danger btn-sm btn-icon"><i class="fa fa-times"></i></button></td>
                                            <td>Easer</td>
                                            <td>Dragoo</td>
                                            <td>Drywall Stripper</td>
                                            <td>13 Dec 1977</td>
                                            <td><span class="badge label-table badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><button class="demo-delete-row btn btn-danger btn-sm btn-icon"><i class="fa fa-times"></i></button></td>
                                            <td>Maple</td>
                                            <td>Halladay</td>
                                            <td>Aviation Tactical Readiness Officer</td>
                                            <td>30 Dec 1991</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><button class="demo-delete-row btn btn-danger btn-sm btn-icon"><i class="fa fa-times"></i></button></td>
                                            <td>Maxine</td>
                                            <td><a href="#">Woldt</a></td>
                                            <td><a href="#">Business Services Sales Representative</a></td>
                                            <td>17 Oct 1987</td>
                                            <td><span class="badge label-table badge-custom">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><button class="demo-delete-row btn btn-danger btn-sm btn-icon"><i class="fa fa-times"></i></button></td>
                                            <td>Lorraine</td>
                                            <td>Mcgaughy</td>
                                            <td>Hemodialysis Technician</td>
                                            <td>11 Nov 1983</td>
                                            <td><span class="badge label-table badge-custom">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><button class="demo-delete-row btn btn-danger btn-sm btn-icon"><i class="fa fa-times"></i></button></td>
                                            <td>Lizzee</td>
                                            <td><a href="#">Goodlow</a></td>
                                            <td>Technical Services Librarian</td>
                                            <td>1 Nov 1961</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><button class="demo-delete-row btn btn-danger btn-sm btn-icon"><i class="fa fa-times"></i></button></td>
                                            <td>Judi</td>
                                            <td>Badgett</td>
                                            <td>Electrical Lineworker</td>
                                            <td>23 Jun 1981</td>
                                            <td><span class="badge label-table badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><button class="demo-delete-row btn btn-danger btn-sm btn-icon"><i class="fa fa-times"></i></button></td>
                                            <td>Lauri</td>
                                            <td>Hyland</td>
                                            <td>Blackjack Supervisor</td>
                                            <td>15 Nov 1985</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr class="active">
                                            <td colspan="6">
                                                <div class="text-right">
                                                    <ul class="pagination pagination-split justify-content-end footable-pagination m-t-10"></ul>
                                                </div>
                                            </td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Triggers</h4>
                                    <p class="text-muted m-b-30 font-13">
                                        Trigger certain FooTable actions.
                                    </p>
                                    <table id="demo-foo-row-toggler" class="table table-bordered toggle-circle">
                                        <thead>
                                        <tr>
                                            <th data-toggle="true"> First Name </th>
                                            <th> Last Name </th>
                                            <th data-hide="phone"> Job Title </th>
                                            <th data-hide="all"> DOB </th>
                                            <th data-hide="all"> Status </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Isidra</td>
                                            <td>Boudreaux</td>
                                            <td>Traffic Court Referee</td>
                                            <td>22 Jun 1972</td>
                                            <td><span class="badge label-table badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Shona</td>
                                            <td>Woldt</td>
                                            <td>Airline Transport Pilot</td>
                                            <td>3 Oct 1981</td>
                                            <td><span class="badge label-table badge-custom">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Granville</td>
                                            <td>Leonardo</td>
                                            <td>Business Services Sales Representative</td>
                                            <td>19 Apr 1969</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Easer</td>
                                            <td>Dragoo</td>
                                            <td>Drywall Stripper</td>
                                            <td>13 Dec 1977</td>
                                            <td><span class="badge label-table badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maple</td>
                                            <td>Halladay</td>
                                            <td>Aviation Tactical Readiness Officer</td>
                                            <td>30 Dec 1991</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maxine</td>
                                            <td><a href="#">Woldt</a></td>
                                            <td><a href="#">Business Services Sales Representative</a></td>
                                            <td>17 Oct 1987</td>
                                            <td><span class="badge label-table badge-custom">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lorraine</td>
                                            <td>Mcgaughy</td>
                                            <td>Hemodialysis Technician</td>
                                            <td>11 Nov 1983</td>
                                            <td><span class="badge label-table badge-custom">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lizzee</td>
                                            <td><a href="#">Goodlow</a></td>
                                            <td>Technical Services Librarian</td>
                                            <td>1 Nov 1961</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Judi</td>
                                            <td>Badgett</td>
                                            <td>Electrical Lineworker</td>
                                            <td>23 Jun 1981</td>
                                            <td><span class="badge label-table badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lauri</td>
                                            <td>Hyland</td>
                                            <td>Blackjack Supervisor</td>
                                            <td>15 Nov 1985</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Isidra</td>
                                            <td>Boudreaux</td>
                                            <td>Traffic Court Referee</td>
                                            <td>22 Jun 1972</td>
                                            <td><span class="badge label-table badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Shona</td>
                                            <td>Woldt</td>
                                            <td>Airline Transport Pilot</td>
                                            <td>3 Oct 1981</td>
                                            <td><span class="badge label-table badge-custom">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Granville</td>
                                            <td>Leonardo</td>
                                            <td>Business Services Sales Representative</td>
                                            <td>19 Apr 1969</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Easer</td>
                                            <td>Dragoo</td>
                                            <td>Drywall Stripper</td>
                                            <td>13 Dec 1977</td>
                                            <td><span class="badge label-table badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maple</td>
                                            <td>Halladay</td>
                                            <td>Aviation Tactical Readiness Officer</td>
                                            <td>30 Dec 1991</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maxine</td>
                                            <td><a href="#">Woldt</a></td>
                                            <td><a href="#">Business Services Sales Representative</a></td>
                                            <td>17 Oct 1987</td>
                                            <td><span class="badge label-table badge-custom">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lorraine</td>
                                            <td>Mcgaughy</td>
                                            <td>Hemodialysis Technician</td>
                                            <td>11 Nov 1983</td>
                                            <td><span class="badge label-table badge-custom">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lizzee</td>
                                            <td><a href="#">Goodlow</a></td>
                                            <td>Technical Services Librarian</td>
                                            <td>1 Nov 1961</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Judi</td>
                                            <td>Badgett</td>
                                            <td>Electrical Lineworker</td>
                                            <td>23 Jun 1981</td>
                                            <td><span class="badge label-table badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lauri</td>
                                            <td>Hyland</td>
                                            <td>Blackjack Supervisor</td>
                                            <td>15 Nov 1985</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Isidra</td>
                                            <td>Boudreaux</td>
                                            <td>Traffic Court Referee</td>
                                            <td>22 Jun 1972</td>
                                            <td><span class="badge label-table badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Shona</td>
                                            <td>Woldt</td>
                                            <td>Airline Transport Pilot</td>
                                            <td>3 Oct 1981</td>
                                            <td><span class="badge label-table badge-custom">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Granville</td>
                                            <td>Leonardo</td>
                                            <td>Business Services Sales Representative</td>
                                            <td>19 Apr 1969</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Easer</td>
                                            <td>Dragoo</td>
                                            <td>Drywall Stripper</td>
                                            <td>13 Dec 1977</td>
                                            <td><span class="badge label-table badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maple</td>
                                            <td>Halladay</td>
                                            <td>Aviation Tactical Readiness Officer</td>
                                            <td>30 Dec 1991</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maxine</td>
                                            <td><a href="#">Woldt</a></td>
                                            <td><a href="#">Business Services Sales Representative</a></td>
                                            <td>17 Oct 1987</td>
                                            <td><span class="badge label-table badge-custom">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lorraine</td>
                                            <td>Mcgaughy</td>
                                            <td>Hemodialysis Technician</td>
                                            <td>11 Nov 1983</td>
                                            <td><span class="badge label-table badge-custom">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lizzee</td>
                                            <td><a href="#">Goodlow</a></td>
                                            <td>Technical Services Librarian</td>
                                            <td>1 Nov 1961</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Judi</td>
                                            <td>Badgett</td>
                                            <td>Electrical Lineworker</td>
                                            <td>23 Jun 1981</td>
                                            <td><span class="badge label-table badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lauri</td>
                                            <td>Hyland</td>
                                            <td>Blackjack Supervisor</td>
                                            <td>15 Nov 1985</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Pagination</h4>
                                    <p class="text-muted m-b-30 font-13">
                                        Include pagination in your FooTable.
                                    </p>

                                    <label class="form-inline mb-3">
                                        Show
                                        <select id="demo-show-entries" class="form-control form-control-sm ml-1 mr-1">
                                            <option value="5">5</option>
                                            <option value="10">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                        </select>
                                        entries
                                    </label>
                                    <table id="demo-foo-pagination" class="table m-b-0 table-bordered toggle-arrow-tiny" data-page-size="5">
                                        <thead>
                                        <tr>
                                            <th data-toggle="true"> First Name </th>
                                            <th> Last Name </th>
                                            <th data-hide="phone"> Job Title </th>
                                            <th data-hide="all"> DOB </th>
                                            <th data-hide="all"> Status </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Isidra</td>
                                            <td>Boudreaux</td>
                                            <td>Traffic Court Referee</td>
                                            <td>22 Jun 1972</td>
                                            <td><span class="badge label-table badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Shona</td>
                                            <td>Woldt</td>
                                            <td>Airline Transport Pilot</td>
                                            <td>3 Oct 1981</td>
                                            <td><span class="badge label-table badge-custom">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Granville</td>
                                            <td>Leonardo</td>
                                            <td>Business Services Sales Representative</td>
                                            <td>19 Apr 1969</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Easer</td>
                                            <td>Dragoo</td>
                                            <td>Drywall Stripper</td>
                                            <td>13 Dec 1977</td>
                                            <td><span class="badge label-table badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maple</td>
                                            <td>Halladay</td>
                                            <td>Aviation Tactical Readiness Officer</td>
                                            <td>30 Dec 1991</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maxine</td>
                                            <td><a href="#">Woldt</a></td>
                                            <td><a href="#">Business Services Sales Representative</a></td>
                                            <td>17 Oct 1987</td>
                                            <td><span class="badge label-table badge-custom">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lorraine</td>
                                            <td>Mcgaughy</td>
                                            <td>Hemodialysis Technician</td>
                                            <td>11 Nov 1983</td>
                                            <td><span class="badge label-table badge-custom">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lizzee</td>
                                            <td><a href="#">Goodlow</a></td>
                                            <td>Technical Services Librarian</td>
                                            <td>1 Nov 1961</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Judi</td>
                                            <td>Badgett</td>
                                            <td>Electrical Lineworker</td>
                                            <td>23 Jun 1981</td>
                                            <td><span class="badge label-table badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lauri</td>
                                            <td>Hyland</td>
                                            <td>Blackjack Supervisor</td>
                                            <td>15 Nov 1985</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Isidra</td>
                                            <td>Boudreaux</td>
                                            <td>Traffic Court Referee</td>
                                            <td>22 Jun 1972</td>
                                            <td><span class="badge label-table badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Shona</td>
                                            <td>Woldt</td>
                                            <td>Airline Transport Pilot</td>
                                            <td>3 Oct 1981</td>
                                            <td><span class="badge label-table badge-custom">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Granville</td>
                                            <td>Leonardo</td>
                                            <td>Business Services Sales Representative</td>
                                            <td>19 Apr 1969</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Easer</td>
                                            <td>Dragoo</td>
                                            <td>Drywall Stripper</td>
                                            <td>13 Dec 1977</td>
                                            <td><span class="badge label-table badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maple</td>
                                            <td>Halladay</td>
                                            <td>Aviation Tactical Readiness Officer</td>
                                            <td>30 Dec 1991</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maxine</td>
                                            <td><a href="#">Woldt</a></td>
                                            <td><a href="#">Business Services Sales Representative</a></td>
                                            <td>17 Oct 1987</td>
                                            <td><span class="badge label-table badge-custom">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lorraine</td>
                                            <td>Mcgaughy</td>
                                            <td>Hemodialysis Technician</td>
                                            <td>11 Nov 1983</td>
                                            <td><span class="badge label-table badge-custom">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lizzee</td>
                                            <td><a href="#">Goodlow</a></td>
                                            <td>Technical Services Librarian</td>
                                            <td>1 Nov 1961</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Judi</td>
                                            <td>Badgett</td>
                                            <td>Electrical Lineworker</td>
                                            <td>23 Jun 1981</td>
                                            <td><span class="badge label-table badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lauri</td>
                                            <td>Hyland</td>
                                            <td>Blackjack Supervisor</td>
                                            <td>15 Nov 1985</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Isidra</td>
                                            <td>Boudreaux</td>
                                            <td>Traffic Court Referee</td>
                                            <td>22 Jun 1972</td>
                                            <td><span class="badge label-table badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Shona</td>
                                            <td>Woldt</td>
                                            <td>Airline Transport Pilot</td>
                                            <td>3 Oct 1981</td>
                                            <td><span class="badge label-table badge-custom">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Granville</td>
                                            <td>Leonardo</td>
                                            <td>Business Services Sales Representative</td>
                                            <td>19 Apr 1969</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Easer</td>
                                            <td>Dragoo</td>
                                            <td>Drywall Stripper</td>
                                            <td>13 Dec 1977</td>
                                            <td><span class="badge label-table badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maple</td>
                                            <td>Halladay</td>
                                            <td>Aviation Tactical Readiness Officer</td>
                                            <td>30 Dec 1991</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maxine</td>
                                            <td><a href="#">Woldt</a></td>
                                            <td><a href="#">Business Services Sales Representative</a></td>
                                            <td>17 Oct 1987</td>
                                            <td><span class="badge label-table badge-custom">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lorraine</td>
                                            <td>Mcgaughy</td>
                                            <td>Hemodialysis Technician</td>
                                            <td>11 Nov 1983</td>
                                            <td><span class="badge label-table badge-custom">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lizzee</td>
                                            <td><a href="#">Goodlow</a></td>
                                            <td>Technical Services Librarian</td>
                                            <td>1 Nov 1961</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Judi</td>
                                            <td>Badgett</td>
                                            <td>Electrical Lineworker</td>
                                            <td>23 Jun 1981</td>
                                            <td><span class="badge label-table badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lauri</td>
                                            <td>Hyland</td>
                                            <td>Blackjack Supervisor</td>
                                            <td>15 Nov 1985</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr class="active">
                                            <td colspan="5">
                                                <div class="text-right">
                                                    <ul class="pagination pagination-split justify-content-end footable-pagination m-t-10"></ul>
                                                </div>
                                            </td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Accordion</h4>
                                    <p class="text-muted m-b-30 font-13">
                                        include accordion in your FooTable.
                                    </p>

                                    <table id="demo-foo-accordion" class="table table-colored m-b-0 toggle-arrow-tiny">
                                        <thead>
                                        <tr>
                                            <th data-toggle="true"> First Name </th>
                                            <th> Last Name </th>
                                            <th data-hide="phone"> Job Title </th>
                                            <th data-hide="all"> DOB </th>
                                            <th data-hide="all"> Status </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Isidra</td>
                                            <td>Boudreaux</td>
                                            <td>Traffic Court Referee</td>
                                            <td>22 Jun 1972</td>
                                            <td><span class="badge label-table badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Shona</td>
                                            <td>Woldt</td>
                                            <td>Airline Transport Pilot</td>
                                            <td>3 Oct 1981</td>
                                            <td><span class="badge label-table badge-custom">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Granville</td>
                                            <td>Leonardo</td>
                                            <td>Business Services Sales Representative</td>
                                            <td>19 Apr 1969</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Easer</td>
                                            <td>Dragoo</td>
                                            <td>Drywall Stripper</td>
                                            <td>13 Dec 1977</td>
                                            <td><span class="badge label-table badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maple</td>
                                            <td>Halladay</td>
                                            <td>Aviation Tactical Readiness Officer</td>
                                            <td>30 Dec 1991</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maxine</td>
                                            <td><a href="#">Woldt</a></td>
                                            <td><a href="#">Business Services Sales Representative</a></td>
                                            <td>17 Oct 1987</td>
                                            <td><span class="badge label-table badge-custom">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lorraine</td>
                                            <td>Mcgaughy</td>
                                            <td>Hemodialysis Technician</td>
                                            <td>11 Nov 1983</td>
                                            <td><span class="badge label-table badge-custom">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lizzee</td>
                                            <td><a href="#">Goodlow</a></td>
                                            <td>Technical Services Librarian</td>
                                            <td>1 Nov 1961</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Judi</td>
                                            <td>Badgett</td>
                                            <td>Electrical Lineworker</td>
                                            <td>23 Jun 1981</td>
                                            <td><span class="badge label-table badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lauri</td>
                                            <td>Hyland</td>
                                            <td>Blackjack Supervisor</td>
                                            <td>15 Nov 1985</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Isidra</td>
                                            <td>Boudreaux</td>
                                            <td>Traffic Court Referee</td>
                                            <td>22 Jun 1972</td>
                                            <td><span class="badge label-table badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Shona</td>
                                            <td>Woldt</td>
                                            <td>Airline Transport Pilot</td>
                                            <td>3 Oct 1981</td>
                                            <td><span class="badge label-table badge-custom">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Granville</td>
                                            <td>Leonardo</td>
                                            <td>Business Services Sales Representative</td>
                                            <td>19 Apr 1969</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Easer</td>
                                            <td>Dragoo</td>
                                            <td>Drywall Stripper</td>
                                            <td>13 Dec 1977</td>
                                            <td><span class="badge label-table badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maple</td>
                                            <td>Halladay</td>
                                            <td>Aviation Tactical Readiness Officer</td>
                                            <td>30 Dec 1991</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maxine</td>
                                            <td><a href="#">Woldt</a></td>
                                            <td><a href="#">Business Services Sales Representative</a></td>
                                            <td>17 Oct 1987</td>
                                            <td><span class="badge label-table badge-custom">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lorraine</td>
                                            <td>Mcgaughy</td>
                                            <td>Hemodialysis Technician</td>
                                            <td>11 Nov 1983</td>
                                            <td><span class="badge label-table badge-custom">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lizzee</td>
                                            <td><a href="#">Goodlow</a></td>
                                            <td>Technical Services Librarian</td>
                                            <td>1 Nov 1961</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Judi</td>
                                            <td>Badgett</td>
                                            <td>Electrical Lineworker</td>
                                            <td>23 Jun 1981</td>
                                            <td><span class="badge label-table badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lauri</td>
                                            <td>Hyland</td>
                                            <td>Blackjack Supervisor</td>
                                            <td>15 Nov 1985</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Isidra</td>
                                            <td>Boudreaux</td>
                                            <td>Traffic Court Referee</td>
                                            <td>22 Jun 1972</td>
                                            <td><span class="badge label-table badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Shona</td>
                                            <td>Woldt</td>
                                            <td>Airline Transport Pilot</td>
                                            <td>3 Oct 1981</td>
                                            <td><span class="badge label-table badge-custom">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Granville</td>
                                            <td>Leonardo</td>
                                            <td>Business Services Sales Representative</td>
                                            <td>19 Apr 1969</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Easer</td>
                                            <td>Dragoo</td>
                                            <td>Drywall Stripper</td>
                                            <td>13 Dec 1977</td>
                                            <td><span class="badge label-table badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maple</td>
                                            <td>Halladay</td>
                                            <td>Aviation Tactical Readiness Officer</td>
                                            <td>30 Dec 1991</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maxine</td>
                                            <td><a href="#">Woldt</a></td>
                                            <td><a href="#">Business Services Sales Representative</a></td>
                                            <td>17 Oct 1987</td>
                                            <td><span class="badge label-table badge-custom">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lorraine</td>
                                            <td>Mcgaughy</td>
                                            <td>Hemodialysis Technician</td>
                                            <td>11 Nov 1983</td>
                                            <td><span class="badge label-table badge-custom">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lizzee</td>
                                            <td><a href="#">Goodlow</a></td>
                                            <td>Technical Services Librarian</td>
                                            <td>1 Nov 1961</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Judi</td>
                                            <td>Badgett</td>
                                            <td>Electrical Lineworker</td>
                                            <td>23 Jun 1981</td>
                                            <td><span class="badge label-table badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lauri</td>
                                            <td>Hyland</td>
                                            <td>Blackjack Supervisor</td>
                                            <td>15 Nov 1985</td>
                                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                                        </tr>
                                        </tbody>

                                    </table>
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

        <!--FooTable-->
        <script src="../plugins/footable/js/footable.all.min.js"></script>
        <!--FooTable Example-->
        <script src="assets/pages/jquery.footable.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>