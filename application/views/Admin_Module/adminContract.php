<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Contract</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/jquery.dataTable.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-datepicker3.min.css" rel="stylesheet">
    <!--  Material Dashboard CSS    -->
    <link href="<?php echo base_url(); ?>assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url(); ?>assets/css/demo.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/responsive.bootstrap.min.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

 <style>
        
    .table thead,
    thead th {
        text-align: center;
        font-size: 120%;
    }

    input[type=checkbox].toggle-switch {
        appearance: none;
        -moz-appearance: none;
        -webkit-appearance: none;
        width: 4em;
        height: 2em;
        border-radius: 2em;
        background-color: #ddd;
        outline: 0;
        cursor: pointer;
        transition: background-color 0.09s ease-in-out;
        position: relative;
    }

    input[type=checkbox].toggle-switch:checked {
        background-color: #3af;
    }

    input[type=checkbox].toggle-switch::after {
        content: '';
        width: 2em;
        height: 2em;
        background-color: white;
        border-radius: 2em;
        position: absolute;
        transform: scale(0.7);
        left: 0;
        transition: left 0.09s ease-in-out;
        box-shadow: 0 0.1em rgba(0, 0, 0, 0.5);
    }

    input[type=checkbox].toggle-switch:checked::after {
        left: 2em;
    }
    .navbar {
        background-color: chartreuse;
    }

.pagination>.active>a,
.pagination>.active>a:focus,
.pagination>.active>a:hover,
.pagination>.active>span,
.pagination>.active>span:focus,
.pagination>.active>span:hover {
    background-color: #4caf50;
    border-color: #9c27b0;
    color: #FFFFFF;
    box-shadow: 0 4px 5px 0 rgba(156, 39, 176, 0.14), 0 1px 10px 0 rgba(156, 39, 176, 0.12), 0 2px 4px -1px rgba(156, 39, 176, 0.2);
}

.page-header {
    height: 60vh;
    background-position: center center;
    background-size: cover;
    margin: 0;
    padding: 0;
    border: 0;
    border-bottom-left-radius: 6px;
    border-bottom-right-radius: 6px;
}

a {
    color: #4caf50;
}

a:hover,
a:focus {
    color: #4caf50;
    text-decoration: none;
}

.navbar .dropdown-menu li a:hover,
.navbar .dropdown-menu li a:focus,
.navbar .dropdown-menu li a:active,
.navbar.navbar-default .dropdown-menu li a:hover,
.navbar.navbar-default .dropdown-menu li a:focus,
.navbar.navbar-default .dropdown-menu li a:active {
    background-color: #4caf50;
    color: #FFFFFF;
    box-shadow: 0 12px 20px -10px rgba(156, 39, 176, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(156, 39, 176, 0.2);
}

.panel-primary>.panel-heading{color:#fff !important;background-color:#43a047 !important;border-color:#43a047 !important}
        .panel-primary{ border-color:#43a047 !important}

.form-group.is-focused .form-control {
    outline: none;
    background-image: linear-gradient(#43a047, #43a047), linear-gradient(#D2D2D2, #D2D2D2);
    background-size: 100% 2px, 100% 1px;
    box-shadow: none;
    transition-duration: 0.3s;
}    
.form-control, .form-group .form-control {
    border: 0;
    background-image: linear-gradient(#43a047, #43a047), linear-gradient(#D2D2D2, #D2D2D2);
    background-size: 0 2px, 100% 1px;
    background-repeat: no-repeat;
    background-position: center bottom, center calc(100% - 1px);
    background-color: transparent;
    transition: background 0s ease-out;
    float: none;
    box-shadow: none;
    border-radius: 0;
    font-weight: 400;
}

.dropdown-menu li a:hover,
.dropdown-menu li a:focus,
.dropdown-menu li a:active {
    background-color: #43a047;
    color: #FFFFFF;
}

.footer{
    z-index: 0;
}
</style>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="green" data-image="<?php echo base_url(); ?>assets/img/sidebar-0.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"
        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo ">
                <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="image1" width="250px" height="150px">
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="<?php echo base_url(); ?>adminDashboard">
                            <i class="glyphicon glyphicon-tasks"></i><i class="material-icons pull-right select-pane" style="color:red !important"></i>
                            
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>adminProductInventory">
                           <i class="glyphicon glyphicon-stats"></i>
                            <p>Inventory</p>
                        </a>
                    </li>
                    <li >
                        <a href="<?php echo base_url(); ?>adminAccounts">
                            <i class="glyphicon glyphicon-modal-window"></i>
                            <p>Accounts</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url(); ?>adminClients">
                           <i class="glyphicon glyphicon-user"></i>
                            <p>Clients</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>adminSupplier">
                           <i class="glyphicon glyphicon-bed"></i>
                            <p>Suppliers</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>adminSalesReport">
                            <i class="glyphicon glyphicon-book"></i>
                            <p>Reports</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"></a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                               <li id="nameheader">
                                    <?php $username = $this->session->userdata('username') ?>
                                
                                <?php
                                              $retrieveUserDetails ="SELECT * FROM jhcs.user WHERE username = '$username';" ;
                                              $query = $this->db->query($retrieveUserDetails);
                                              if ($query->num_rows() > 0) {
                                              foreach ($query->result() as $object) {
                                           echo '<p class="title">Hi, '  . $object->u_fname  . ' ' . $object->u_lname  . '</p>' ;
                                              }
                                            }
                                        ?>
                                </li>
                                 <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                         <i class="glyphicon glyphicon-user"></i>
                                        <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo base_url(); ?>adminUser">User Profile</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>adminChangePassword">Change Password</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>adminActivityLogs">Activity Logs</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('Login/logout');  ?>">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        
              <div class="modal fade" id="edit" tabindex="1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign" ></span> Edit Item Information</h4>
                                            </div>
                                            <form action="#" method="post" accept-charset="utf-8">
                                                  <div class="modal-body" style="padding-left: 100px;">
                                                      <h6><b>Coffee Details</b></h6>
                                                     <div class="form-group row">
                                                        <div for="example-number-input" class="col-2 col-form-label">
                                                            <label for="type">Date Started</label>
                                                            <input class="form-control" type="date" value="December 28, 2017" id="example-number-input" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div for="example-number-input" class="col-2 col-form-label">
                                                            <label for="type">Date Expiration</label>
                                                            <input class="form-control" type="date" value="December 28, 2017" id="example-number-input" required>
                                                        </div>
                                                    </div>
                                                        <div class="form-group row">
                                                        <div for="example-number-input" class="col-2 col-form-label">
                                                            <label for="type">Quantity</label>
                                                            <input class="form-control" type="number" value="300" id="example-number-input" min="0" oninput="validity.valid||(value='');" data-validate="required" max="" required>
                                                        </div>
                                                    </div>
                                                      <div class="form-group row">
                                                        <div for="example-number-input" class="col-2 col-form-label">
                                                            <label for="type">Size</label>
                                                            <input class="form-control" type="number" value="500g" id="example-number-input" min="0" oninput="validity.valid||(value='');" data-validate="required" max="" required>
                                                        </div>
                                                    </div>
                                                       <div class="col-md-6">
                                                            <label class="control-label">Coffee Blend</label>
                                                            <select class="form-control" name="Category" placeholder="Category" type="text" required required pattern="[a-zA-Z][a-zA-Z\s]*" required title="Coffee should only countain letters" required>
                                                                <option>Sumatra Night</option>
                                                                <option>Guatamela Rainforest</option>
                                                                <option>Cordillera Sunshine</option>
                                                                <option>Espresso</option>
                                                            </select>
                                                        </div>
                                                       <div class="col-md-6">
                                                            <label class="control-label">Bag</label>
                                                            <select class="form-control" name="Category" placeholder="Category" type="text" required required pattern="[a-zA-Z][a-zA-Z\s]*" required title="Bag should only countain letters" required>
                                                                <option>Clear</option>
                                                                <option>Brown</option>
                                                            </select>
                                                        </div>
                                                      
                                                       <p><h6><b>Machine:</b></h6>
                                                     <div class="form-group row">
                                                        <div for="example-number-input" class="col-2 col-form-label">
                                                            <label for="type">Brewer</label>
                                                            <input class="form-control" type="textarea" value="Saeco" id="example-number-input" required pattern="[a-zA-Z][a-zA-Z\s]*" required title="Brewer should only countain letters">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="panel-footer" style="margin-bottom:-14px;">
                                                            <input type="submit" class="btn btn-success" value="Add" style="float: right;" />
                                                            <!--<span class="glyphicon glyphicon-ok"></span>-->
                                                            <button style="float: right;" type="button" class="btn btn-default btn-close" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                      
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
        
           
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                         <div class="card-header " data-background-color="green">
                                <h4 class="title">Contract
                                    </h4>
                            </div>
                            <?php
                                $id = $this->input->get('p');
                            ?>
                        <div class="card-content table-responsive">
                              <a href="<?php echo base_url(); ?>adminAddContract?p=<?php echo $id; ?>" class="btn btn-success" data-original-title style="float: right"> Create New Contract</a>
                               <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%" style="font-size: 13px">
                                        <thead>
                                            <tr>
                                                <th><b>Client</b></th>
                                                <th><b>Date Started</b></th>
                                                <th><b>Date Expiration</b></th>

                                                <th><b>Coffee Blend</b></th>
                                                <th><b>Bag</b></th>
                                                <th><b>Size</b></th>
                                                <th><b>Coffee Required Quantity</b></th>
                                                <?php
                                                     $id = $this->input->get('p');
                                                    $type = $this->db->query("SELECT * FROM contracted_client WHERE client_id = '".$id."';")->row()->client_type;
                                                    if($type == "Coffee Service"){
                                                ?>
                                                <th><b>Machine</b></th>
                                                <th><b>Machine Required Quantity</b></th>
                                                <th><b>Machine Serial Number</b></th>
                                                <?php
                                                    }
                                                ?>
                                               <!-- <th class="disabled-sorting"><b>Edit</b></th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            
                                                <?php
                                                    if($fetch_data->num_rows() > 0){

                                                        foreach($fetch_data -> result() as $row)
                                                        {
                                                ?>
                                                <tr>
                                                <td><?php echo $row->client_company; ?></td>
                                                <td><?php echo $row->date_started; ?></td>
                                                  <td><?php echo $row->date_expiration; ?></td>

                                                <td><?php echo $row->blend; ?></td>
                                                <td><?php echo $row->package_type; ?></td>
                                                <td><?php echo $row->package_size; ?></td>
                                                 <td><?php echo $row->required_qty; ?></td>
                                                 <?php
                                                   
                                                    if($type == "Coffee Service"){
                                                 ?>
                                                    <td><?php echo $row->brewer; ?></td>
                                                    <td><?php echo $row->mach_qty; ?></td>
                                                    <td><?php echo $row->mach_serial; ?></td>
                                                <?php
                                                    }
                                                ?>

                                                <!--     <td>
                                                                <a class="btn btn-warning btn-sm" style="margin-top: 0px" data-toggle="modal" data-target="#edit<?php echo $row->contract_id; ?>">Edit</a>
                                                </td>
                                                    
                                                    
                                                    <div class="modal fade" id="edit<?php echo $row->contract_id; ?>" tabindex="1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="panel panel-primary">
                                                                    <div class="panel-heading">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                        <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign" ></span> Edit Contract Information</h4>
                                                                    </div>
                                                                    <form action="<?php echo base_url(); ?>AdminContract/update" method="post" accept-charset="utf-8">
                                                                          <div class="modal-body" style="padding: 5px;">
                                                                
                                                               
                                                                 <div class="row">
                                                                    <div class="col-md-6 form-group">
                                                                        <div class="form-group label-floating">
                                                                            <label for="email">Date Started</label>
                                                                            <input class="form-control" type="date" name="date_started" value="<?php echo $row->date_started; ?>" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 form-group">
                                                                        <div class="form-group label-floating">
                                                                            <label for="email">Date Expiration</label>
                                                                            <input class="form-control" type="date" name="date_started" value="<?php echo $row->date_expiration; ?>" required>
                                                                        </div>
                                                                    </div>
                                                                       <div class="col-md-6 form-group">
                                                                        <div class="form-group label-floating">
                                                                            <label for="email">Credit Term</label>
                                                                            <input class="form-control" value="<?php echo $row->credit_term; ?>" type="text" name="contract_term" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                               <div class="row">
                                                                    <div class="col-md-12 form-group">
                                                                        <div class="form-group label-floating">
                                                                            <input class="form-control" type="hidden" name="contract_id" value="<?php echo $row->contract_id; ?>" required>
                                                                        </div>
                                                                    </div>
                                                                              </div>
                                                                <div class="row">
                                                                     <div class="col-lg-6 form-group">
                                                                        <div class="form-group label-floating">
                                                                            <label for="email">Coffee Blend</label>
                                                                            <input class="form-control" value="<?php echo $row->blend; ?>" type="text" name="contract_blend" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3 form-group">
                                                                        <div class="form-group label-floating">
                                                                            <label for="email">Bag Size</label>
                                                                            <input class="form-control" value="<?php echo $row->package_size; ?>" type="number" name="contract_size" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 form-group">
                                                                        <div class="form-group label-floating">
                                                                            <label for="email">Packaging</label>
                                                                            <input class="form-control" value="<?php echo $row->package_type; ?>" type="text" name="contract_bag" required>
                                                                        </div>
                                                                    </div>
                                                                           <div class="col-md-6 form-group">
                                                                        <div class="form-group label-floating">
                                                                            <label for="email">Coffee Required Quantity</label>
                                                                            <input class="form-control" value="<?php echo $row->required_qty; ?>" type="number" name="contract_bqty" min="0" oninput="validity.valid||(value='');" data-validate="required" max="" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 form-group">
                                                                        <div class="form-group label-floating">
                                                                            <label for="email">Machine</label>
                                                                            <input class="form-control" value="<?php echo $row->brewer; ?>" type="text" name="contract_machine" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 form-group">
                                                                        <div class="form-group label-floating">
                                                                            <label for="email">Machine Required Quantity</label>
                                                                            <input class="form-control" value="<?php echo $row->mach_qty; ?>" type="number" name="contract_mqty" min="0" oninput="validity.valid||(value='');" data-validate="required" max="" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 form-group">
                                                                        <div class="form-group label-floating">
                                                                            <label for="email">Machine Serial Number</label>
                                                                            <input class="form-control" value="<?php echo $row->mach_serial; ?>" type="text" name="contract_serial" min="0" oninput="validity.valid||(value='');" data-validate="required" max="" required>
                                                                        </div>
                                                                    </div>
                                                             
                                                                 
                                                                    </div>
                                                            </div>
                                                                        <div class="panel-footer" style="margin-bottom:-14px;">
                                                                <input type="submit" class="btn btn-success" value="Update" />
                                                                <input type="reset" class="btn btn-danger" value="Clear" />
                                                                <button style="float: right;" type="button" class="btn btn-default btn-close" data-dismiss="modal">Close</button>
                                                            </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                            </tr>

                                            <?php
                                                    }

                                                }
                                                else{
                                                ?>
                                                    <tr>
                                                        <td colspan = 11 style = "text-align: center;"> <h3>No clients found</h3> </td>
                                                    </tr>
                                                <?php
                                                }

                                                ?>
                                            
                                   </tbody>
                                    </table>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
             <footer class="footer navbar navbar-fixed-bottom" >
                <div class="container">
                  <div class="copyright float-center">
                    <center>
                    &copy;
                    <a href="https://www.creative-tim.com" target="_blank">Creative Team</a>
                    <script>
                      document.write(new Date().getFullYear())
                    </script>, made with <i class="material-icons">favorite</i> by
                    Team Barako for John Hay Coffee Services Incorporation.
                </center>
                  </div>
                </div>
              </footer>
        </div>
</body>
<!--   Core JS Files   -->
<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/buttons.flash.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/buttons.Html5.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/buttons.print.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/jszip.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/pdfmake.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/vfs_fonts.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/datepicker.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="<?php echo base_url(); ?>assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="<?php echo base_url(); ?>assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="<?php echo base_url(); ?>assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="<?php echo base_url(); ?>assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url(); ?>assets/js/demo.js"></script>
<script src="<?php echo base_url(); ?>assets/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/responsive.bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable({
        "dom":' fBrtip',
        "lengthChange": false,
        "info":     false,
        buttons: [
            { "extend": 'print', "text":'<i class="fa fa-files-o"></i> Print',"className": 'btn btn-default btn-xs'},
            
            { "extend": 'excel', "text":'<i class="fa fa-file-excel-o"></i> CSV',"className": 'btn btn-success btn-xs'},
            
            { "extend": 'pdf', "text":'<i class="fa fa-file-pdf-o"></i> PDF',"className": 'btn btn-danger btn-xs'}
        ]
    });
});

$('table tbody tr  td').on('click', function() {
    $("#myModal").modal("show");
    $("#txtfname").val($(this).closest('tr').children()[0].textContent);
    $("#txtlname").val($(this).closest('tr').children()[1].textContent);
});
</script>
</html>
