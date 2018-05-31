<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Deliveries</title>
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
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <style>
    /*
        td.highlight {
            background-color: whitesmoke !important;
        }
*/

    .table thead,
    thead th {
        text-align: center;
        font-size: 100%;
    }

    .table tbody,
    tbody td {
        text-align: center;
    }
    .select-pane {
        display: none;
    }
    .no-border{
        border: none !important;
        border-bottom: none !important;
    }
    
    .panel-primary>.panel-heading{color:#fff !important;background-color:#9c27b0 !important;border-color:#9c27b0 !important}
    .panel-primary{ border-color:#9c27b0 !important}

    </style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-0.jpg">
            <div class="logo">
                <img src="../assets/img/logo.png" alt="image1" width="250px" height="150px">
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="<?php echo base_url(); ?>salesDashboard">
                            <i class="glyphicon glyphicon-tasks"></i><i class="material-icons pull-right select-pane" style="color:red !important"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>salesSellProduct">
                            <i class="glyphicon glyphicon-shopping-cart"></i>
                            <p>Sell Products</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>salesClients">
                             <i class="glyphicon glyphicon-user"></i>
                            <p>Clients</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>salesReturns">
                           <i class="glyphicon glyphicon-indent-right"></i>
                            <p>Returns</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url(); ?>salesDelivery">
                            <i class="glyphicon glyphicon-bed"></i>
                            <p>Deliveries</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>salesReceivables">
                             <i class="glyphicon glyphicon-credit-card"></i>
                            <p>Receivables</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>salesCollections">
                           <i class="glyphicon glyphicon-inbox"></i>
                            <p>Collections</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>salesReport">
                            <i class="glyphicon glyphicon-signal"></i>
                            <p>Sales Summary</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
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
                                        <a href="<?php echo base_url(); ?>salesUserProfile">User Profile</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>salesChangePassword">Change Password</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>salesActivityLogs">Activity Logs</a>
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
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-nav-tabs">
                                <div class="card-header" data-background-color="purple">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <span class="nav-tabs-title">Transaction:</span>
                                            <ul class="nav nav-tabs" data-tabs="tabs" id="myTab">
                                                <li class="active">
                                                    <a href="#purchaseorder" data-toggle="tab">
                                                        Pending Deliveries
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#deliveries" data-toggle="tab">
                                                        Delivered Items
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#payment" data-toggle="tab">
                                                      Transaction History                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                 <div class="card-content">
                                    <div class="tab-content">

<div class="tab-pane active" id="purchaseorder">
    <a href="<?php echo base_url(); ?>salesDelivery/salesArchivedPO"><button class="pull-right">Archived Purchase Order</button></a>
    <?php
        $error = $this->session->flashdata('error');
        $success = $this->session->flashdata('success');
        if(!empty($error)){
            ?>
            <div class="alert alert-danger" style="margin: 0px; text-align: center; opacity: 0.8; width:50%;">
                <strong><?php echo $error; ?></strong> 
            </div>
      <?php } else if(!empty($success)){ ?>
            <div class="alert alert-success" style="margin: 0px; text-align: center; opacity: 0.8; width:50%">
                <strong><?php echo $success; ?></strong> 
            </div>
      <?php } ?> 
    <table id="" class="display hover order-column cell-border" cellspacing="0" width="100%">
        <thead>
            <th><b class="pull-left">Purchase Date</b></th>
            <th><b class="pull-left">Purchase Order No.</b></th>
            
            <th><b class="pull-left">Client</b></th>
            <th><b class="pull-left">Item Code</b></th>
            <th><b class="pull-center">Coffee Blend</b></th>
            <th><b class="pull-left">Quantity</b></th>
            <th><b class="pull-left">Unit Price</b></th>
            <th><b class="pull-left">Gross Amount</b></th>
            
            <th><b class="pull-left">Remarks</b></th>
            <th class="disabled-sorting" width="20%"><b class="pull-center">Actions</b></th>
            <th class="hidden"></th>
        </thead>
        <tbody>
            <?php
                foreach($data1['get_delivery_list'] as $row1)
                {

            ?>
            <tr>
                <td><?php echo $row1->contractPO_date; ?></td>
                <td><?php echo $row1->contractPO_id; ?></td>
                
                <td><?php echo $row1->client_company; ?></td>
                <td><?php echo $row1->blend_id; ?></td>
                <td><?php echo "$row1->blend/ $row1->package_type/ $row1->package_size g"; ?></td>
                <td><?php echo $row1->contractPO_qty; ?> bags</td>
                <td>Php <?php echo number_format($row1->blend_price,2); ?></td>
                <td><?php
                        $price = $row1->blend_price;
                        $qty = $row1->contractPO_qty;
                        $amount = $price * $qty;
                        echo 'Php '.number_format($amount,2);
                     ?>
                </td>
                
                <td><?php 
                          $date_roasted = $row1->date_roasted;
                          $roast = $row1->roast;
                          if($roast == 'Yes'){
                            echo  'roasted on '.$date_roasted. ', ';
                            }else{
                                echo '';
                            }
                            echo $row1->delivery_stat;
                 ?>
                    
                </td>
                <td><?php
                        $dbStat = $row1->delivery_stat;
                        $roast = $row1->roast;

                        if ($dbStat != 'delivered' && $roast == 'Yes') {
                            echo '
                           <button type="button" data-toggle="modal" class="btn btn-secondary btn-xs" data-target="#roast'.$row1->contractPO_id.'"" title="roast order" disabled><span class="glyphicon glyphicon-fire" style="color:red"></span></button>
                        ';
                            echo '
                           <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#deliver'.$row1->contractPO_id.'" title="deliver order"><span class="glyphicon glyphicon-ok-sign" style="color:black"></span> </button>
                        ';

                        } else if ($dbStat != 'delivered' && $roast == 'No') {
                            echo '
                           <button type="button" data-toggle="modal" class="btn btn-secondary btn-xs" data-target="#roast'.$row1->contractPO_id.'"" title="roast order"><span class="glyphicon glyphicon-fire" style="color:red"></span></button>
                        ';
                            echo '
                           <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#deliver'.$row1->contractPO_id.'" title="deliver order" disabled><span class="glyphicon glyphicon-ok-sign" style="color:black"></span> </button>
                        ';
                        }

                        if ($dbStat == 'partial delivery') {
                        echo '
                           <button data-toggle="modal" class="btn btn-warning btn-xs" data-target="#undo'.$row1->contractPO_id.'" title="archive order" disabled><span class="glyphicon glyphicon-remove-sign" style="color:black"></span> </button>
                        ';
                        } else if ($dbStat == 'pending delivery') {
                        echo '
                           <button data-toggle="modal" class="btn btn-warning btn-xs" data-target="#undo'.$row1->contractPO_id.'" title="archive order"><span class="glyphicon glyphicon-remove-sign" style="color:black"></span> </button>
                        ';
                        }
                    ?>

                <!-- modal for roast -->

                <div class="modal fade" id="roast<?php echo $row1->contractPO_id;?>" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="panel-title" id="contactLabel"><center>Roast Purchase Order</center></h4>
                            </div>
                            <form action="<?php echo base_url(); ?>SalesDelivery/roastDel" method="post" accept-charset="utf-8">
                                <div class="modal-body" style="padding: 5px;">
                                    <h3 style="font-weight: bold; ">Purchase Order No. <?php echo $row1->contractPO_id ?></h3>
                                   <h3>Was <?php echo $row1->blend ?> already roasted ?</h3>
                                   <input class="form-control" type="hidden" name="po_roast" value="<?php echo $row1->contractPO_id; ?>" required>
                                   <input class="form-control"  type="hidden" name="po_date" value="<?php echo $row1->contractPO_date; ?>" required><br>
                                    <label class=" control">Date Roasted :</label>
                                   <input class="form-control" class="no-border" name="dateNow" max="<?php echo date("Y-m-d");?>"  value="<?php echo date("Y-m-d");?>" type="date" required />
                                   <input class="form-control" type="hidden" name="po_qty" value="<?php echo $row1->contractPO_qty; ?>" required>
                                   <input class="form-control" type="hidden" name="po_blend" value="<?php echo $row1->blend_id; ?>" required>
                                    <div class="panel-footer" align="pull-right">
                                        <button type="submit" class="btn btn-success">Yes</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>    

                </td>

                <td style="border-color:white; background-color:white">
                <!-- modal for undo -->

                <div class="modal fade" id="undo<?php echo $row1->contractPO_id;?>" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="panel-title" id="contactLabel"><center>Archive Purchase Order</center></h4>
                            </div>
                            <form action="<?php echo base_url(); ?>SalesDelivery/undoDel" method="post" accept-charset="utf-8">
                                <div class="modal-body" style="padding: 5px;">
                                   <h3>Are you sure to archive Purchase Order no. <?php echo $row1->contractPO_id ?>?</h3>
                                    <label>Admin Password:</label><br>
                                    <input class="form-control" type="password" name="password" value="" required>
                                   <input class="form-control" type="hidden" name="po_undo" value="<?php echo $row1->contractPO_id; ?>" required>
                                    <div class="panel-footer" align="center">
                                        <button type="submit" class="btn btn-success">Yes</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div> 
                </td>

                <!--modal for pending delivery-->
                <div class="modal fade" id="deliver<?php echo $row1->contractPO_id;?>" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h3 class="panel-title" id="contactLabel"><center>Delivery for <?php echo $row1->client_company ?></center></h3>
                            </div>
                            <form action="<?php echo base_url(); ?>SalesDelivery/insert" method="post" accept-charset="utf-8">
                                <div class="modal-body" style="padding: 5px;">
                                    <div class="row">
                                <p><center><b>Purchase Date: <?php echo $row1->contractPO_date ?></b></center></p>

                                        <div class="col-lg-7">
                                             <div class="form-group">
                                                <label class="col-md-5 control">PO No. :</label>
                                                <div class="col-md-7">
                                                    <p><b><?php echo $row1->contractPO_id;
                                                    ?></b></p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 control">Coffee Blend :</label>
                                                <div class="col-md-7">
                                                    <p><b><?php echo $row1->blend;
                                                    ?></b></p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 control">Size :</label>
                                                <div class="col-md-5">
                                                    <p><b><?php echo number_format($row1->package_size);
                                                    ?> g</b></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label class="col-md-5 control">Quantity :</label>
                                                    <div class="col-md-6">
                                                        <p><b><?php echo $row1->contractPO_qty; ?> bags</b></p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-5 control">Unit Price :</label>
                                                    <div class="col-md-7">
                                                        <p><b>Php <?php echo number_format($row1->blend_price,2); ?></b></p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-5 control">Gross Amount :</label>
                                                    <div class="col-md-5">
                                                        <p><b><?php echo 'Php '.number_format($amount,2); ?></b></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-md-6 control">Delivery Receipt No :</label>
                                                <div class="col-md-6">
                                                    <input id="" name="client_dr" type="text" class="form-control" required="">
                                                    <input class="form-control" type="hidden" name="po_id" value="<?php echo $row1->contractPO_id; ?>" required>
                                                    <input class="form-control" type="hidden" name="blend" value="<?php echo $row1->blend; ?>" required>
                                                    <input class="form-control" type="hidden" name="pack_size" value="<?php echo $row1->package_size; ?>" required>
                                                    <input class="form-control" type="hidden" name="client_balance" value="<?php echo $amount; ?>" required>
                                                    <input class="form-control" type="hidden" name="blend_price" value="<?php echo $row1->blend_price; ?>" required>
                                                    <input class="form-control" type="hidden" name="client_id" value="<?php echo $row1->client_id; ?>" required>
                                                    <input class="form-control" type="hidden" name="client_company" value="<?php echo $row1->client_company; ?>" required>
                                                    <input class="form-control" type="hidden" name="full_qty" value="<?php echo $row1->contractPO_qty; ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-md-6 control">Delivery Date :</label>
                                                <div class="col-md-6">
                                                    <input class="form-control" name="delivery_date" placeholder="Date" max="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>" type="date" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-md-6 control">Sales Invoice No. :</label>
                                                <div class="col-md-6">
                                                    <input id="" name="invoice" type="text" class="form-control" required>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-md-6 control">Received by :</label>
                                                <div class="col-md-6">
                                                    <input id="" name="receive_by" type="text" class="form-control" required="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="col-md-5 control">Remaining quantity to be delivered:</label>
                                                <div class="col-md-2">
                                                    <input id="" name="delivered_qty" type="number" value="<?php
                                                    $full_delivery = $row1->contractPO_qty;
                                                    $delivered_qty = $row1->delivered_qty;
                                                    $diff = $full_delivery - $delivered_qty;
                                                    echo $diff;
                                                    ?>" class="form-control" min="1" max="<?php echo $diff ?>" required>
                                                </div>
                                                <div  class="col-md-2">
                                                    <p>bags</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer" align="center">
                                        <button type="submit" class="btn btn-success">Save Delivery</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>  
            </tr>
 
            <?php
                }
            ?>
        </tbody>
    </table>
</div>
<div class="tab-pane" id="deliveries">
    <table id="" class="display hover order-column cell-border" cellspacing="0" width="100%">
        <thead>
            
            <th><b class="pull-left">Purchase Order No.</b></th>
            <th><b class="pull-left">Receipt No.</b></th>
            <th><b class="pull-left">Client</b></th>
            <th><b class="pull-left">Coffee Blend</b></th>
            <th><b class="pull-left">Delivery Date</b></th>
            <th><b class="pull-left">Quantity Delivered</b></th>
            <th><b class="pull-left">Total Amount</b></th>
            <th><b>Received By</b></th>
            <th><b>Remarks</b></th>
            <th width="70%">Actions</th>
        </thead>
        <tbody>
            <?php
                foreach($data2['get_delivered'] as $row2)
                {
            ?>
            <tr>
                
                <td><?php echo $row2->contractPO_id; ?></td>
                <td><?php echo $row2->client_dr.'-'.$row2->client_invoice; ?></td>
                
                <td><?php echo $row2->client_company; ?></td>
                <td><?php echo "$row2->blend/ $row2->package_type/ $row2->package_size g/ "; ?>
                    <?php
                        $price = $row2->blend_price;
                        echo 'Php '.number_format($price,2);
                     ?>
                </td>
                <td><?php echo $row2->client_deliverDate; ?></td>
                <td><?php echo $row2->deliver_quantity; ?> bags</td>
                <td>Php                     
                    <?php
                        $price = $row2->blend_price;
                        $qty = $row2->deliver_quantity;
                        $amount = $price * $qty;
                        echo 'Php '.number_format($amount,2);
                     ?></td>
                <td><?php echo $row2->client_receive; ?></td>
                <td>
                    <?php 
                        if ($row2->coff_returnQty == 0 && $row2->resolved == 'No') {
                            echo "";
                        } else if ($row2->coff_returnQty > 0 && $row2->resolved == 'No'){
                            echo 'returned '.$row2->coff_returnQty.' bag/s';
                        } else if ($row2->coff_returnQty == 0 && $row2->resolved == 'Yes') {
                            echo "returns has been resolved";
                        }
                     ?>
                    
            
                </td>
                <td><button type="button" title="pay order" class="btn btn-success btn-xs" data-toggle="modal" data-target="#pay<?php echo $row2->client_deliveryID; ?>" <?php
                        $payment_remarks = $row2->payment_remarks;
                        if ($payment_remarks == 'paid') {
                            echo "disabled";
                        }

                     ?>><span class="glyphicon glyphicon-shopping-cart"></span></button>
                    <button type="button" title="return order" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#return<?php echo $row2->client_deliveryID;?>" <?php
                        $resolved = $row2->resolved;
                        $return = $row2->return;
                        if ($resolved == 'Yes' || $resolved == 'No') {
                            echo "disabled";
                        }

                     ?>><span class="glyphicon glyphicon-arrow-left"></button>

       <!--              <button type="button" title="edit" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#edit<?php echo $row2->client_deliveryID;?>"><span class="glyphicon glyphicon-edit"></button>    -->
                </td>
                <!-- modal edit -->
                <div class="modal fade" id="edit<?php echo $row2->client_deliveryID; ?>" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title" id="contactLabel"><center>Edit Delivered Item</center> </h4>
                            </div>
                            <div class="modal-body" style="padding: 5px;">
                                <div class="card-block">
                                     <form action="<?php echo base_url(); ?>SalesDelivery/insert1" method="post" accept-charset="utf-8">
                                        <div class="modal-body" style="padding: 5px;">
                                                                     <h3><center><?php echo $row2->client_company; ?></center></h3>

                                            <div class="row">
                                                <div class="col-lg-12" style="padding-bottom: 20px;">
                                                    <div class="form-group label-floating">
                                                        <div class="form-group">

                                                          <div class="row">
                                                              <div class="col-lg-6">
                                                                   <div class="form-group">
                                                                      <label class="col-md-6 control">DR/SI No.:</label>
                                                                      <div class="col-md-6">
                                                                          <p><b><?php echo $row2->client_dr.' / '.$row2->client_invoice;
                                                                          ?></b></p>
                                                                      </div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                      <label class="col-md-6 control">Delivery Date:</label>
                                                                      <div class="col-md-5">
                                                                          <p><b><?php echo $row2->client_deliverDate;
                                                                          ?></b></p>
                                                                      </div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                      <label class="col-md-6 control">Quantity :</label>
                                                                      <div class="col-md-6">
                                                                          <p><b><?php echo $row2->deliver_quantity; ?></b></p>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                            </div>
                                                              <div class="row">
                                                                  <div class="col-lg-6">
                                                                      <div class="form-group">
                                                                          <label class="col-md-5 control">Coffee Blend</label>
                                                                          <div class="col-md-7">
                                                                              <p><b><?php echo "$row2->blend/ $row2->package_type/ $row2->package_size g"; ?></b></p>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          <hr>
                                                            <div class="row">
                                                                <div class="col-md-6">

                                                                    <div class="form-group">
                                                                        <label class="col-md-6 control">Date Returned:</label>
                                                                        <input class="col-md-6 control no-border" type="date" name="date_returned" value="<?php echo date("Y-m-d");?>" data-validate="required" message="A Date of Purchase is recquired! min="<?=date('Y-m-d')?>" max="<?=date('Y-m-d',strtotime(date('Y-m-d')))?>"">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">

                                                                    <div class="form-group">
                                                                        <label class="col-md-6 control">Quantity Returned:</label>
                                                                                                            <div class="col-md-6">
                                                                        <input class="form-control" type="number" name="qty_returned" min="1" max="<?php
                                                                        $fulqty = $row2->deliver_quantity;
                                                                        $retqty = $row2->coff_returnQty;
                                                                        $retdif = $fulqty - $retqty;
                                                                        echo $retdif;

                                                                        ?>" required="" oninput="validity.valid||(value='');" >
                                                                                                            </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="col-md-6 control">Remarks:</label>
                                                                                                            <div class="col-md-6">
                                                                        <input class="form-control col-md-3" type="text" name="remarks" required="">
                                                                         <input name="deliveryID" type="hidden" class="form-control" value="<?php echo $row2->client_deliveryID; ?>" >
                                                                        <input name="client_dr" type="hidden" class="form-control" value="<?php echo $row2->client_dr; ?>" >
                                                                        <input name="blend_id" type="hidden" class="form-control" value="<?php echo $row2->blend_id; ?>" >
                                                                        <input class="form-control" type="hidden" name="client_company" value="<?php echo $row2->client_company; ?>" required>

                                                                                                            </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <center>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-success">Save</button>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal coffee returns -->
                <div class="modal fade" id="return<?php echo $row2->client_deliveryID; ?>" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title" id="contactLabel"><center>Return Delivered Items</center> </h4>
                            </div>
                            <div class="modal-body" style="padding: 5px;">
                                <div class="card-block">
                                     <form action="<?php echo base_url(); ?>SalesDelivery/insert1" method="post" accept-charset="utf-8">
                                        <div class="modal-body" style="padding: 5px;">
                                                                     <h3><center><?php echo $row2->client_company; ?></center></h3>

                                            <div class="row">
                                                <div class="col-lg-12" style="padding-bottom: 20px;">
                                                    <div class="form-group label-floating">
                                                        <div class="form-group">

                                                          <div class="row">
                                                              <div class="col-lg-6">
                                                                   <div class="form-group">
                                                                      <label class="col-md-6 control">DR/SI No.:</label>
                                                                      <div class="col-md-6">
                                                                          <p><b><?php echo $row2->client_dr.' / '.$row2->client_invoice;
                                                                          ?></b></p>
                                                                      </div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                      <label class="col-md-6 control">Delivery Date:</label>
                                                                      <div class="col-md-6">
                                                                          <p><b><?php echo $row2->client_deliverDate;
                                                                          ?></b></p>
                                                                      </div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                      <label class="col-md-6 control">Quantity :</label>
                                                                      <div class="col-md-6">
                                                                          <p><b><?php echo $row2->deliver_quantity; ?> bags</b></p>
                                                                      </div>
                                                                      <div>
                                                                          
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                            </div>
                                                              <div class="row">
                                                                  <div class="col-lg-6">
                                                                      <div class="form-group">
                                                                          <label class="col-md-4 control">Coffee Blend</label>
                                                                          <div class="col-md-8">
                                                                              <p><b><?php echo "$row2->blend/ $row2->package_type/ $row2->package_size g"; ?></b></p>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          <hr>
                                                            <div class="row">
                                                                <div class="col-md-6">

                                                                    <div class="form-group">
                                                                        <label class="col-md-5 control">Date Returned:</label>
                                                                        <input class="col-md-7 control no-border" type="date" name="date_returned" value="<?php echo date("Y-m-d");?>" data-validate="required" message="A Date of Purchase is recquired! min="<?=date('Y-m-d')?>" max="<?=date('Y-m-d',strtotime(date('Y-m-d')))?>"">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">

                                                                    <div class="form-group">
                                                                        <label class="col-md-6 control">Quantity Returned:</label>
                                                                          <div class="col-md-4">
                                                                            <input class="form-control" type="number" name="qty_returned" min="1" max="<?php
                                                                            $fulqty = $row2->deliver_quantity;
                                                                            $retqty = $row2->coff_returnQty;
                                                                            $retdif = $fulqty - $retqty;
                                                                            echo $retdif;

                                                                            ?>" required="" oninput="validity.valid||(value='');" >
                                                                          </div>
                                                                          <div class="col-md-2">
                                                                              <p>bags</p>
                                                                          </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="col-md-6 control">Remarks:</label>
                                                                                                            <div class="col-md-6">
                                                                        <input class="form-control col-md-3" type="text" name="remarks" required="">
                                                                         <input name="deliveryID" type="hidden" class="form-control" value="<?php echo $row2->client_deliveryID; ?>" >
                                                                        <input name="client_dr" type="hidden" class="form-control" value="<?php echo $row2->client_dr; ?>" >
                                                                        <input name="blend_id" type="hidden" class="form-control" value="<?php echo $row2->blend_id; ?>" >
                                                                        <input class="form-control" type="hidden" name="client_company" value="<?php echo $row2->client_company; ?>" required>

                                                                                                            </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <center>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-success">Save</button>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- modal of unpaid -->
                <div class="modal fade" id="pay<?php echo $row2->client_deliveryID ?>" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title" id="contactLabel"><center><?php echo $row2->client_company; ?>'s Payment</center> </h4>
                            </div>
                            <div class="modal-body" style="padding: 5px;">
                                <div class="card-block">
                                    <form action="<?php echo base_url(); ?>SalesDelivery/insert2" method="post" accept-charset="utf-8">
                                        <div class="modal-body" style="padding: 5px;">
                                            <p><center><b>Purchase Order No. <?php echo $row2->contractPO_id ?> / <?php echo $row2->client_dr ?> - <?php echo $row2->client_invoice ?></b></center></p>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 20px;">
                                                    <div class="form-group label-floating">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-md-8">
                                                                    <div class="form-group label-floating">
                                                                        <label for="email">Payment Date:</label>
                                                                        <input class="form-control" type="date" name="date_paid" max="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>" required>
                                                                        <input class="form-control" type="hidden" name="deliver_id" value="<?php echo $row2->client_deliveryID; ?>" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group label-floating">
                                                                        <label for="email">Collection Receipt No.:</label>
                                                                        <input class="form-control" type="text" name="cr" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-8">
                                                                    <div class="form-group label-floating">
                                                                        <label>Remaining Balance (Php):</label>
                                                                        <input class="form-control" type="number" name="amount" value="<?php
                                                                            $rem_amount = $amount - $row2->amount_paid;
                                                                            echo $rem_amount;

                                                                        ; ?>" min=1 max="<?php echo $rem_amount; ?>" required>
                                                                        <input type="hidden" name="client_company" value="<?php echo $row2->client_company ?>">
                                                                        <input class="form-control" type="hidden" name="total_amount" value="<?php echo $amount; ?>" min=1 max="<?php echo $amount; ?>">

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group label-floating">
                                                                        <label>Withheld (Php):</label>
                                                                        <input class="form-control" type="number" min="0" max="<?php $val = $amount*.1;
                                                                        echo $val; ?>" name="withheld">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group label-floating">
                                                                        <label>Remarks:</label>
                                                                        <input class="form-control" type="text" name="remarkspay">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group label-floating">
                                                                        <label>Mode of Payment:</label>
                                                                        <select class="form-control" name="mod">
                                                                            <option>Cash on Delivery</option>
                                                                            <option>Bank deposit</option>
                                                                            <option>Cheque</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <center>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-success">Save</button>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</div>
<div class="tab-pane" id="payment">
    <br>
    <table id="" class="display hover order-column cell-border" cellspacing="0" width="100%">
        <thead>
            <th><b class="pull-left">Payment Date</b></th>
            <th><b class="pull-left">Collection No.</b></th>
            <th><b class="pull-left">Delivery Receipt No.</b></th>
            <th><b class="pull-left">Client</b></th>
            <th><b class="pull-left">Mode of Payment</b></th>
            
            <th><b class="pull-left">Amount</b></th>
            <th><b class="pull-left">Gross Amount</b></th>
            <th><b class="pull-left">Withheld</b></th>
            <th><b class="pull-left">Remarks</b></th>
        </thead>
        <tbody>
            <?php
                foreach($data3['get_paid'] as $row)
                {
            ?>
            <tr>
                <td><?php echo $row->paid_date; ?></td>
                <td><?php echo $row->collection_no; ?></td>
                <td><?php echo $row->client_dr; ?></td>
                <td><?php echo $row->client_company; ?></td>
                <td><?php echo $row->payment_mode; ?></td>
                
                <td><?php echo 'Php '.number_format($row->paid_amount,2); ?></td>
                <td><?php echo 'Php '.number_format($row->client_balance,2); ?></td>
                <td><?php echo 'Php '.number_format($row->withheld,2); ?></td>
                <td><?php echo $row->payment_remarks; ?></td>
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
                </div>
            </div>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="../assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="../assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="../assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="../assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="../assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function() {

    $('table.display').DataTable( {

      // "columnDefs": [
      //   { "orderable": false, "targets": 0 }
      // ]
      "ordering": false
    } );

    $('#datePicker')
        .datepicker({
            format: 'mm/dd/yyyy'
        })
        .on('changeDate', function(e) {
            $('#eventForm').formValidation('revalidateField', 'date');
        });
});


</script>

<script type="text/javascript">
$(document).on('change', 'select.nav', function() {
    var $this = this;
    var target = $this.value;
    $('div.select-pane').hide();
    $('div[id="' + target + '"]').show();
})

$(document).on('click', '.series-select', function() {
    var $this = this;
    var txt = $this.text + '<span class="caret"></span>';
    $($this).closest('li.dropdown').find('a.dropdown-toggle').php(txt);


})
</script>

<script type="text/javascript">
$(document).ready(function(){
    $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
        localStorage.setItem('activeTab', $(e.target).attr('href'));
    });
    var activeTab = localStorage.getItem('activeTab');
    if(activeTab){
        $('#myTab a[href="' + activeTab + '"]').tab('show');
    }
});
</script>

</html>
