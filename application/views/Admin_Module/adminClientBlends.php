<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Raw Coffee Inventory Stocks</title>
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
                    <li class="active">
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
                    <li>
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
                                <li>
                                    <p class="title">Hi, <?php $username = $this->session->userdata('username'); print_r($username); ?></p>
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
            <div class="modal fade" id="stock" tabindex="1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <form action="#" method="post" accept-charset="utf-8">
                            <div class="modal-body" style="padding-left: 100px;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label for="type">(Item Name)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-number-input" class="col-2 col-form-label">Reorder Level</label>
                                    <div class="col-10">
                                        <input class="form-control" type="number" value="1000" id="example-number-input">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="panel-footer" style="margin-bottom:-14px;" align="right">
                                        <input type="submit" class="btn btn-success" value="Add" style="float: right;" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
                                <div class="modal fade" id="newblend" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading" >
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign"></span> Add New Client Blend</h4>
                                            </div>
                                            <form action="#" method="post" accept-charset="utf-8">
                                                <div class="modal-body" style="padding: 5px;">
                                                    <div class="row">
                                                        <div class="col-md-6 form-group">
                                                            <div class="form-group label-floating">
                                                                <label for="email">Blend Name</label>
                                                                <input class="form-control" type="text" name="" placeholder="" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 form-group">
                                                            <div class="form-group label-floating">
                                                                
                                                                <label for="email">For Client</label>
                                                                <select class="form-control" name="supplier" required>
                                                                    <option value="">Mario's</option>
                                                                    <option value="">Le Chef</option>
                                                                    <option value="">Pizza Volante</option>
                                                                </select>                  
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4 form-group">
                                                            <div class="form-group label-floating">
                                                                <label for="email">Packaging</label>
                                                                <input class="form-control" type="text" name="" placeholder="" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 form-group">
                                                            <div class="form-group label-floating">
                                                                <label for="email">Size</label>
                                                                <input class="form-control" type="text" name="" placeholder="" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 form-group">
                                                            <div class="form-group label-floating">
                                                                <label for="email">Price/Unit</label>
                                                                <input class="form-control" type="text" name="" placeholder="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div id="field">
                                                        <div class="input" id="field1">
                                                            <div class="col-md-6">
                                                                <select class="form-control" name="coffee">
                                                                    <option value="">Guatemala Rainforest</option>
                                                                    <option value="">Cordillera Sunrise</option>
                                                                    <option value="">Sumatra Night</option>
                                                                    <option value="">Espresso</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input class="form-control" type="number" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <button id="b1" class="btn btn-success add-more " type="button">+</button>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                    </div>
                                                </div>
                                                <div class="panel-footer" style="margin-bottom:-14px;">
                                                    <input type="submit" class="btn btn-success" value="Add" />
                                                    <!--<span class="glyphicon glyphicon-ok"></span>-->
                                                    <input type="reset" class="btn btn-danger" value="Clear" />
                                                    <!--<span class="glyphicon glyphicon-remove"></span>-->
                                                    <button style="float: right;" type="button" class="btn btn-default btn-close" data-dismiss="modal">Close</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="updateblend" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading" >
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign"></span> Update Client Blend</h4>
                                            </div>
                                            <form action="#" method="post" accept-charset="utf-8">
                                                <div class="modal-body" style="padding: 5px;">
                                                    <div class="row">
                                                        <div class="col-md-6 form-group">
                                                            <div class="form-group label-floating">
                                                                <label for="email">Blend Name</label>
                                                                <input class="form-control" type="text" name="" placeholder="" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 form-group">
                                                            <div class="form-group label-floating">
                                                                
                                                                <label for="email">For Client</label>
                                                                <select class="form-control" name="supplier" required>
                                                                    <option value="">Mario's</option>
                                                                    <option value="">Le Chef</option>
                                                                    <option value="">Pizza Volante</option>
                                                                </select>                  
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4 form-group">
                                                            <div class="form-group label-floating">
                                                                <label for="email">Packaging</label>
                                                                <input class="form-control" type="text" name="" placeholder="" disabled="" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 form-group">
                                                            <div class="form-group label-floating">
                                                                <label for="email">Size</label>
                                                                <input class="form-control" type="text" name="" placeholder="" disabled="" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 form-group">
                                                            <div class="form-group label-floating">
                                                                <label for="email">Price/Unit</label>
                                                                <input class="form-control" type="text" name="" placeholder="" disabled="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div id="field">
                                                        <div class="input" id="field1">
                                                            <div class="col-md-6">
                                                                <select class="form-control" name="coffee">
                                                                    <option value="">Guatemala Rainforest</option>
                                                                    <option value="">Cordillera Sunrise</option>
                                                                    <option value="">Sumatra Night</option>
                                                                    <option value="">Espresso</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input class="form-control" type="number" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <button id="b1" class="btn btn-success add-more " type="button">+</button>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                    </div>
                                                </div>
                                                <div class="panel-footer" style="margin-bottom:-14px;">
                                                    <input type="submit" class="btn btn-success" value="Add" />
                                                    <!--<span class="glyphicon glyphicon-ok"></span>-->
                                                    <input type="reset" class="btn btn-danger" value="Clear" />
                                                    <!--<span class="glyphicon glyphicon-remove"></span>-->
                                                    <button style="float: right;" type="button" class="btn btn-default btn-close" data-dismiss="modal">Close</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
		<?php
                                    $error = $this->session->flashdata('error');
                                    $success = $this->session->flashdata('success');
                                    if(!empty($error)){
                                        ?>
                                        <div class="alert alert-danger" style="margin: 20px; text-align: center; ">
                                            <strong><?php echo $error; ?></strong> 
                                        </div>
                                  <?php } else if(!empty($success)){ ?>
                                        <div class="alert alert-success" style="margin: 20px; text-align: center; ">
                                            <strong><?php echo $success; ?></strong> 
                                        </div>
                                  <?php } ?> 
                                <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header" data-background-color="green">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <ul class="nav nav-tabs" data-tabs="tabs" data-background-color="green">
                                                <li class="">
                                                    <a href="<?php echo base_url(); ?>adminProductInventory">
                                                        Raw Coffee
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <span></span>
                                                <li>
                                                    <a href="<?php echo base_url(); ?>adminBlends">
                                                        Company Blends
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="active">
                                                    <a href="<?php echo base_url(); ?>adminClientBlends">
                                                        Client Blends
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <span></span>
                                                <li>
                                                    <a href="<?php echo base_url(); ?>adminPackaging">
                                                        Packaging
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <span></span>
                                                <li class="">
                                                    <a href="<?php echo base_url(); ?>adminStickers">
                                                        Stickers
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <span></span>
                                                <li class="">
                                                    <a href="<?php echo base_url(); ?>adminMachines">
                                                       Machines
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <a href="<?php echo base_url(); ?>AdminBlends/add_showClient" class="btn btn-success" style="float: right">Add New Blend</a>
                                     <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                        <thead>
                                            <th><b class="pull-left">Client Blend</b></th>
                                            <th><b class="pull-left">Size</b></th>

                                            <th><b class="pull-left">Packaging</b></th>

                                            <th><b class="pull-left">Price</b></th>
                                            <th><b class="pull-left">Quantity</b></th>
                                             <?php
                                                    $query_head = $this->db->query("SELECT CONCAT(raw_coffee, ' ', UCASE(LEFT(raw_type, 1)), SUBSTRING(raw_type, 2), ' ', '') AS type FROM raw_coffee WHERE raw_activation = 1");
 
                                                    if ($query_head->num_rows() > 0) {
                                                        foreach($query_head->result() AS $row) {
                                                ?>
                                                <th><b><?php echo $row->type; ?></b></th>
                                                <?php
                                                    }
                                                } else {
                                                    echo "0 results";
                                                }
                                                ?>
                                            
                                            <th><b class="pull-left">Action</b></th>
                                            <th><b class="pull-left">Activation</b></th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                 <?php
                                                    $qcount = $this->db->query('SELECT * FROM raw_coffee');

                                                    if($fetch_data_cb->num_rows() > 0){

                                                        foreach($fetch_data_cb -> result() as $row)
                                                        {
                                                ?>
												
                                                <td><?php echo $row->blend; ?></td>
                                                <td><?php echo $row->size; ?></td>
                                                <td><?php echo $row->package; ?></td>
                                                <td>Php <?php echo number_format($row->blend_price,2); ?></td>
                                                <td><?php echo $row->blend_qty; ?></td>

                                                
                                                <?php
                                                foreach ($qcount->result() as $row2){
                                                    $colname = "per" . $row2->raw_id?>
                                                        <td><?php echo $row->$colname; ?></td>
                                                <?php

                                                }
                                                
                                                ?>
                                               

                                                <!--
                                                <td>Blend A</td>
                                                <td>Guatamela - 30%</td>
                                                <td>250</td>
                                                <td>Clear</td>
                                                <td>350</td>
                                                </td>
                                                -->
                                                
                                                <td>
                                                    <a href="<?php echo base_url(); ?>AdminBlends/editclient_show?id=<?php echo $row->main_id;?>" class="btn btn-warning btn-sm" style="float: right">Edit</a>
                                                </td>
                                                <td>
                                                    <div class="onoffswitch">
                                                         <?php
                                                        if($row->blend_activation == 1){

                                                    ?>
                                                         <input type="checkbox" id="button<?php echo $row->main_id;?>" class="toggle-switch" data-toggle="modal" data-target="#deactivate<?php echo $row->main_id;?>" checked>
                                                    <?php
                                                        }else{

                                                    ?>

                                                        <input type="checkbox" id="button<?php echo $row->main_id;?>" class="toggle-switch" data-toggle="modal" data-target="#deactivate<?php echo $row->main_id;?>">
                                                    <?php
                                                        }

                                                    ?>
                                                    </div>
                                                </td>
                                                <div class="modal fade" id="deactivate<?php echo $row->main_id;?>" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="panel panel-primary">
                                                            <div class="panel-heading" >
                                                                <button type="button" class="close" data-dismiss="modal" onclick="document.getElementById('button<?php echo $row->main_id;?>').click()" aria-hidden="true">×</button>
                                                                <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-warning-sign"></span> Activation/Deactivation </h4>
                                                            </div>
                                                            <form action="<?php echo base_url(); ?>AdminClientBlends/activation" method="post" accept-charset="utf-8">
                                                                <div class="modal-body" style="padding: 5px;">
                                                                    <div class="row" style="text-align: center">
                                                                        <br>
                                                                        <h4> Are you sure you want to activate/deactivate this blend?</h4>
                                                                        <br>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12 form-group">
                                                                            <div class="form-group label-floating">
                                                                                <input class="form-control" type="hidden" name="deact_id" value="<?php echo $row->main_id; ?>" required>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel-footer" style="margin-bottom:-14px;">
                                                                    <input type="submit" class="btn btn-success" value="Yes" />
                                                                    <!--<span class="glyphicon glyphicon-ok"></span>-->
                                                                    
                                                                    <!--<span class="glyphicon glyphicon-remove"></span>-->
                                                                    <button type="button" class="btn btn-danger btn-close" onclick="document.getElementById('button<?php echo $row->main_id;?>').click()" data-dismiss="modal">No</button>
                                                                </div>
                                                                </form>
                                                        </div>
                                                    </div>
                                                </div>
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
<script src="<?php echo base_url(); ?>assets/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/responsive.bootstrap.min.js"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url(); ?>assets/js/demo.js"></script>
<script src="<?php echo base_url(); ?>assets/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/responsive.bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable({
        "dom":' fBrtip',
        "lengthChange": false,
        "info":     true,
        buttons: [
            
            
            { "extend": 'excel', "text":'<i class="fa fa-file-excel-o"></i> CSV',"className": 'btn btn-success btn-xs',
                exportOptions: {
                    columns: [':not(:nth-last-child(1)):not(:nth-last-child(2))']
                }
            },
            
            { "extend": 'pdf', "text":'<i class="fa fa-file-pdf-o"></i> PDF',"className": 'btn btn-danger btn-xs',
                exportOptions: {
                    columns: [':not(:nth-last-child(1)):not(:nth-last-child(2))']
                }
            }
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