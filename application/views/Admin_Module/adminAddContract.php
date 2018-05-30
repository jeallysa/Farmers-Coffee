<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>New Contract</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="<?php echo base_url(); ?>assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url(); ?>assets/css/demo.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/responsive.bootstrap.min.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url(); ?>assets/css/jquery-editable-select.min.css" rel="stylesheet">
</head>
<style>
.title {
    font-size: large;
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
            <?php 
                $cli_id = $this->input->get('p');
                $query = $this->db->query("SELECT * FROM contracted_client WHERE client_id = '".$cli_id."';");

                foreach($query->result() AS $row){
             ?>
             <!-- EDIT -->
            <div class="modal fade" id="edit<?php echo $row->client_id; ?>" tabindex="1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
            <?php } ?>
                <div class="modal-dialog modal-lg">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign" ></span> Edit Contract Information</h4>
                        </div>
                        <form action="AdminAddContract/update" method="post" accept-charset="utf-8">
                                        <div class="modal-body" style="padding: 5px;">
                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                     <div class="form-group label-floating">
                                                        <label for="email">Client</label> 
                                                        <?php
                                                            $cli_id = $this->input->get('p'); 
                                                            $query = $this->db->query("SELECT * FROM contracted_client WHERE client_id = '".$cli_id."';");
                                                            foreach($query->result() AS $row){
                                                        ?>
                                                        <input class="form-control" type="text" name="client" value="<?php echo $row->client_company?>" disabled>
                                                        <input class="form-control" type="hidden" name="client_company" value="<?php echo $row->client_id?>">
                                                        <?php
                                                            }
                                                        ?>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="row">
                                                <?php
                                                    $cli_id = $this->input->get('p');
                                                    $query_dates = $this->db->query("SELECT * FROM contract WHERE client_id = '".$cli_id."';");
                                                    foreach($query_dates->result() AS $row){

                                                ?>
                                                <div class="col-md-6 form-group">
                                                    <div class="form-group label-floating">
                                                        <label for="email">Date Started</label>

                                                        <input class="form-control" name="date_started" type="date" class="no-border" value="<?php echo $row->date_started?>" data-validate="required" message="Date of Purchase is recquired!" max="<?php echo date("Y-m-d") ?>"  required >
                                                    </div>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <div class="form-group label-floating">                                            
                                                        <label for="email">Date Expiration</label>
                                                        <input class="form-control" name="date_expiration" type="date" class="no-border" value="<?php echo $row->date_expiration?>" data-validate="required" message="Date of Purchase is recquired!"  required>
                                                    </div>
                                                </div>
                                                <?php
                                                    }
                                                ?>
                                            </div>
                                        
                                            <div class="row">
                                                <?php
                                                    $cli_id = $this->input->get('p'); 
                                                    $query = $this->db->query("SELECT * FROM contract WHERE client_id = '".$cli_id."' ;");
                                                    
                                                    foreach($query->result() AS $row){
                                                ?>
                                                 <div class="col-md-6 form-group">
                                                       <div class="form-group label-floating">
                                                        <label for="email">Blends</label>
                                                        <select  class="form-control" name="contract_blend" required pattern="[a-zA-Z][a-zA-Z\s]*" required title="Blends should only countain letters">
                                                <option disabled selected value></option>
                                                <?php 
                                                    $query_blend = $this->db->query("SELECT blend_id, blend FROM coffee_blend WHERE blend_id NOT IN (SELECT blend_id FROM contract) AND blend_type = 'Client' UNION SELECT contract.blend_id, blend FROM contract JOIN coffee_blend ON contract.blend_id = coffee_blend.blend_id WHERE client_id = '".$cli_id."' ORDER by 1;");
                                                    foreach($query_blend->result() as $row2)
                                                    { 
                                                        if($row2->blend_id == $row->blend_id){
                                                        echo '<option value="'.$row2->blend_id.'" selected>'.$row2->blend.'</option>';
                                                        }else{
                                                                echo '<option value="'.$row2->blend_id.'">'.$row2->blend.'</option>';
                                                            }
                                                    }
                                                 ?>
                                            </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6 form-group">
                                                    <div class="form-group label-floating">
                                                        <label for="email">Blends Required Quantity (bags)</label>
                                                        <input class="form-control" type="number" name="contract_bqty" min="0" oninput="validity.valid||(value='');"  value="<?php echo $row->required_qty?>" >
                                                    </div>
                                                </div>

                                                <?php 
                                                    }
                                                 ?>
                                                
                                            </div>
                                            <?php
                                                $id = $this->input->get('p');
                                                $type = $this->db->query("SELECT * FROM contracted_client WHERE client_id = '".$id."'")->row()->client_type;
                                                if ($type == "Coffee Service"){
                                            ?>
                                            
                                            <div class="row">
                                                
                                                        <?php
                                                            $cli_id = $this->input->get('p'); 
                                                            $query = $this->db->query("SELECT * FROM contract INNER JOIN machine ON contract.mach_id = machine.mach_id where client_id = '".$cli_id."' ;");
                                                            foreach($query->result() AS $row){   
                                                        ?> 
                                                       <div class="col-md-6 form-group">
                                                    <div class="form-group label-floating">
                                                        <label for="email">Machine</label>  
                                                         <select class="form-control" name="contract_machine" required pattern="[a-zA-Z][a-zA-Z\s]*" required title="Machine should only countain letters">
                                                            <option disabled selected value></option>
                                                            <?php 

                                                                foreach($data3['getMachine'] as $row2)
                                                                { 
                                                                    if($row->mach_id == $row2->mach_id){
                                                                    echo '<option value="'.$row2->mach_id.'" selected>'.$row2->brewer.'</option>';
                                                                        }else{
                                                                                 echo '<option value="'.$row2->mach_id.'">'.$row2->brewer.'</option>';
                                                                        }
                                                                }
                                                             ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                                 

                                                
                                                <div class="col-md-6 form-group">
                                                    <div class="form-group label-floating">
                                                        <label for="email">Machine Quantity (unit/s)</label>
                                                        <?php
                                                            $cli_id = $this->input->get('p'); 
                                                            $query = $this->db->query("SELECT * FROM contract INNER JOIN machine_out ON contract.client_id = machine_out.client_id where machine_out.status = 'rented' and  contract.client_id = '".$cli_id."';");
                                                            foreach($query->result() AS $row){   
                                                        ?> 
                                                        <input class="form-control" type="number" name="contract_mqty" value="<?php echo $row->mach_qty?>" min="0" oninput="validity.valid||(value='');" >
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <div class="form-group label-floating">
                                                        <label for="email">Machine Serial Number</label>
                                                        <?php
                                                            $cli_id = $this->input->get('p'); 
                                                            $query = $this->db->query("SELECT * FROM contract INNER JOIN machine_out ON contract.client_id = machine_out.client_id where machine_out.status = 'rented' and  contract.client_id = '".$cli_id."';");
                                                            foreach($query->result() AS $row){   
                                                        ?> 
                                                        <input class="form-control" type="text" name="contract_serial" value="<?php echo $row->mach_serial?>" >
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                           <?php }else{ ?>

                                            <div class="col-md-6 form-group">
                                                <div class="form-group label-floating">
                                                    <input class="form-control" type="hidden" name="contract_machine" value ="0" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <div class="form-group label-floating">
                                                    <input class="form-control" type="hidden" name="contract_mqty" min="0" value="0" data-validate="required" max="" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <div class="form-group label-floating">
                                                    <input class="form-control" type="hidden" name="contract_serial" min="0" value="0" data-validate="required" max="" required>
                                                </div>
                                            </div>

                                            <?php
                                                }
                                            ?>
                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <div class="panel-footer" align="right">
                                                        <input type="submit" class="btn btn-success" value="Save" style="float: right;" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </form>
                    </div>
                </div>
            </div>
            <?php 
            $cli_id = $this->input->get('p');
                $query = $this->db->query("SELECT * FROM contracted_client WHERE client_id = '".$cli_id."';");

                foreach($query->result() AS $row){
             ?>
             <!-- CREATE -->
            <div class="modal fade" id="create<?php echo $row->client_id; ?>" tabindex="1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign" ></span> Create Contract Information</h4>
                        </div>
                        <form action="AdminAddContract/insert" method="post" accept-charset="utf-8">
                                        <div class="modal-body" style="padding: 5px;">
                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                     <div class="form-group label-floating">
                                                        <label for="email">Client</label> 
                                                    
                                                        <input class="form-control" type="text" name="client" value="<?php echo $row->client_company?>" disabled>
                                                        <input class="form-control" type="hidden" name="client_company" value="<?php echo $row->client_id?>" required>
                <?php
                    }
                ?>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <div class="form-group label-floating">
                                                        <label for="email">Date Started</label>

                                                        <input class="form-control" name="date_started" type="date" class="no-border"  data-validate="required" message="Date of Purchase is required!"  max="<?php echo date("Y-m-d") ?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <div class="form-group label-floating">                                            
                                                        <label for="email">Date Expiration</label>
                                                        <input class="form-control" name="date_expiration" type="date" class="no-border"  data-validate="required" message="Date of Purchase is required!" required>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                            <div class="row">
                                                 <div class="col-md-6 form-group">
                                                       <div class="form-group label-floating">
                                                        <label for="email">Blends</label>
                                                        <select  class="form-control" name="contract_blend" required pattern="[a-zA-Z][a-zA-Z\s]*" required title="Blends should only countain letters">
                                                <option disabled selected value></option>
                                                <?php 
                                                    $query_blend = $this->db->query("SELECT blend_id AS id, blend FROM coffee_blend WHERE blend_id NOT IN (SELECT blend_id FROM contract) AND blend_type = 'Client' UNION SELECT blend_id AS id, blend FROM coffee_blend WHERE blend_id = '".$cli_id."';");
                                                    foreach($query_blend->result() as $row)
                                                    { 
                                                        
                                                        echo '<option value="'.$row->id.'">'.$row->blend.'</option>';
                                                    }
                                                 ?>
                                            </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6 form-group">
                                                    <div class="form-group label-floating">
                                                        <label for="email">Blends Required Quantity (bags)</label>
                                                        <input class="form-control" type="number" name="contract_bqty" min="0" oninput="validity.valid||(value='');" required >
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <?php
                                                $id = $this->input->get('p');
                                                $type = $this->db->query("SELECT * FROM contracted_client WHERE client_id = '".$id."'")->row()->client_type;
                                                if ($type == "Coffee Service"){
                                            ?>
                                            
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <div class="form-group label-floating">
                                                        <label for="email">Machine</label>  
                                                         <select class="form-control" name="contract_machine" required pattern="[a-zA-Z][a-zA-Z\s]*" required title="Machine should only countain letters">
                                                            <option disabled selected value></option>
                                                            <?php 

                                                                foreach($data3['getMachine'] as $row)
                                                                { 
                                                                    echo '<option value="'.$row->mach_id.'">'.$row->brewer.'</option>';
                                                                }
                                                             ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <div class="form-group label-floating">
                                                        <label for="email">Machine Quantity (unit/s)</label>
                                                        <input class="form-control" type="number" name="contract_mqty" min="0" oninput="validity.valid||(value='');" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <div class="form-group label-floating">
                                                        <label for="email">Machine Serial Number</label> 
                                                        <input class="form-control" type="text" name="contract_serial" required>
                                                    </div>
                                                </div>
                                            </div>
                                           <?php }else{ ?>

                                            <div class="col-md-6 form-group">
                                                <div class="form-group label-floating">
                                                    <input class="form-control" type="hidden" name="contract_machine" value ="0" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <div class="form-group label-floating">
                                                    <input class="form-control" type="hidden" name="contract_mqty" min="0" value="0" data-validate="required" max="" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <div class="form-group label-floating">
                                                    <input class="form-control" type="hidden" name="contract_serial" min="0" value="0" data-validate="required" max="" required>
                                                </div>
                                            </div>

                                            <?php
                                                }
                                            ?>
                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <div class="panel-footer" align="right">
                                                        <input type="submit" class="btn btn-success" value="Save" style="float: right;" />
                                                    </div>
                                                </div>
                                            </div>
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
                                        <div class="alert alert-danger" style="margin: 80px; text-align: center; ">
                                            <strong><?php echo $error; ?></strong> 
                                        </div>
                                  <?php } else if(!empty($success)){ ?>
                                        <div class="alert alert-success" style="margin: 80px; text-align: center; ">
                                            <strong><?php echo $success; ?></strong> 
                                        </div>
                                  <?php } ?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="green">
                                    <h4 class="title">Contract</h4>
                                </div>
                                <?php  
                                    $cli_id = $this->input->get('p');
                                    $query = $this->db->query("SELECT * FROM contracted_client WHERE client_id = '".$cli_id."';");

                                    foreach($query->result() AS $row){
                                        $blend = $this->db->query("SELECT * FROM contract where client_id = '".$cli_id."' ;")->num_rows();
                                        if($blend != 0) {     ?>
                                     <a href='#' class="btn btn-warning" style="margin-right: 20px; float: right;" data-toggle="modal" data-target="#edit<?php echo $row->client_id; ?>">Edit Contract</a>    
                                <?php } else { ?>
                                     <a href='#' class="btn btn-success" style="margin-right: 20px; float: right;" data-toggle="modal" data-target="#create<?php echo $row->client_id; ?>">Create Contract</a>    
                                <?php } 
                                }?>    
                                
                                
                               
                                 
                                <div class="card-content">
                                   <form action="AdminAddContract/insert" method="post" accept-charset="utf-8">
                                        <div class="modal-body" style="padding: 5px;">
                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                     <div class="form-group label-floating">
                                                        <label for="email">Client</label> 
                                                        <?php
                                                            $cli_id = $this->input->get('p'); 
                                                            $query = $this->db->query("SELECT * FROM contracted_client WHERE client_id = '".$cli_id."';");
                                                            foreach($query->result() AS $row){
                                                        ?>
                                                        <input class="form-control" type="text" name="client" value="<?php echo $row->client_company?>" disabled>
                                                        <input class="form-control" type="hidden" name="client_company" value="<?php echo $row->client_id?>">
                                                        <?php
                                                            }
                                                        ?>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="row">
                                                 <?php
                                                    $cli_id = $this->input->get('p');
                                                    $query_dates = $this->db->query("SELECT * FROM contract WHERE client_id = '".$cli_id."';");
                                                    foreach($query_dates->result() AS $row){

                                                ?>
                                                <div class="col-md-6 form-group">
                                                    <div class="form-group label-floating">
                                                        <?php
                                                            $cli_id = $this->input->get('p'); 
                                                            $query = $this->db->query("SELECT * FROM contract WHERE client_id = '".$cli_id."';");
                                                            foreach($query->result() AS $row){
                                                        ?>
                                                        <label for="email">Date Started</label>

                                                        <input class="form-control" name="date_started" type="date" class="no-border" value="<?php echo $row->date_started?>" data-validate="required" message="Date of Purchase is recquired!"  >

                                                    </div>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <div class="form-group label-floating">                                            
                                                        <label for="email">Date Expiration</label>
                                                        <input class="form-control" name="date_expiration" type="date" class="no-border" value="<?php echo $row->date_expiration?>" data-validate="required" message="Date of Purchase is recquired!"  >

                                                    </div>
                                                </div>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </div>
                                        
                                            <div class="row">
                                                <?php
                                                    $cli_id = $this->input->get('p'); 
                                                    $query = $this->db->query("SELECT * FROM contract INNER JOIN coffee_blend ON contract.blend_id = coffee_blend.blend_id where client_id = '".$cli_id."' ;");
                                                    
                                                    foreach($query->result() AS $row){
                                                ?>
                                                 <div class="col-md-6 form-group">
                                                       <div class="form-group label-floating">
                                                        <label for="email">Blends</label>
                                                            <input class="form-control" type="text" name="blends" value="<?php echo $row->blend?>" disabled>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6 form-group">
                                                    <div class="form-group label-floating">
                                                        <label for="email">Blends Required Quantity (bags)</label>
                                                        <input class="form-control" type="number" name="contract_bqty" min="0" oninput="validity.valid||(value='');"  value="<?php echo $row->required_qty?>" disabled>
                                                    </div>
                                                </div>

                                                <?php 
                                                    }
                                                 ?>
                                                
                                            </div>
                                            <?php
                                                $id = $this->input->get('p');
                                                $type = $this->db->query("SELECT * FROM contracted_client WHERE client_id = '".$id."'")->row()->client_type;
                                                if ($type == "Coffee Service"){
                                            ?>
                                            
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <div class="form-group label-floating">
                                                        <label for="email">Machine</label> 
                                                        <?php
                                                            $cli_id = $this->input->get('p'); 
                                                            $query = $this->db->query("SELECT * FROM contract INNER JOIN machine ON contract.mach_id = machine.mach_id where client_id = '".$cli_id."' ;");
                                                            foreach($query->result() AS $row){   
                                                        ?> 
                                                         <input class="form-control" type="text" name="sticker" value="<?php echo $row->brewer?>, <?php echo $row->brewer_type?>" disabled>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <div class="form-group label-floating">
                                                        <label for="email">Machine Quantity (unit/s)</label>
                                                        <?php
                                                            $cli_id = $this->input->get('p'); 
                                                            $query = $this->db->query("SELECT * FROM contract INNER JOIN machine_out ON contract.client_id = machine_out.client_id where machine_out.status = 'rented' and machine_out.contract_id IS NOT NULL and contract.client_id = '".$cli_id."';");
                                                            foreach($query->result() AS $row){   
                                                        ?> 
                                                        <input class="form-control" type="number" name="contract_mqty" min="0" oninput="validity.valid||(value='');"   value="<?php echo $row->mach_qty?>" disabled>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <div class="form-group label-floating">
                                                        <label for="email">Machine Serial Number</label>
                                                        <?php
                                                            $cli_id = $this->input->get('p'); 
                                                            $query = $this->db->query("SELECT * FROM contract INNER JOIN machine_out ON contract.client_id = machine_out.client_id where machine_out.status = 'rented' AND machine_out.contract_id IS NOT NULL and  contract.client_id = '".$cli_id."';");
                                                            foreach($query->result() AS $row){   
                                                        ?> 
                                                        <input class="form-control" type="text" name="contract_serial" value="<?php echo $row->mach_serial?>" disabled>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                           <?php }else{ ?>

                                            <div class="col-md-6 form-group">
                                                <div class="form-group label-floating">
                                                    <input class="form-control" type="hidden" name="contract_machine" value ="0" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <div class="form-group label-floating">
                                                    <input class="form-control" type="hidden" name="contract_mqty" min="0" value="0" data-validate="required" max="" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <div class="form-group label-floating">
                                                    <input class="form-control" type="hidden" name="contract_serial" min="0" value="0" data-validate="required" max="" required>
                                                </div>
                                            </div>

                                            <?php
                                                }
                                            ?>

                                        </div>
                                        
                                    </form>
                                </div>
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
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="<?php echo base_url(); ?>assets/js/chartist.min.js"></script>
<script>
    jQuery(document).ready(function($){
    $('#editBlends').editableSelect();
    $('#editStickers').editableSelect();
    });
</script>
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
<script src="<?php echo base_url(); ?>assets/js/jquery-editable-select.min.js"></script>
</html>