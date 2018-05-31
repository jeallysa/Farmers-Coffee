<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Sell Products</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/jquery.dataTable.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-datepicker3.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/demo.css" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <style>
    /*
		td.highlight {
			background-color: whitesmoke !important;
		}
*/

    h3 {
        text-align: center !important;
    }

    .table thead,
    thead th {
        text-align: center;
        font-size: 140%;
    }

    .table tbody,
    tbody td {
        text-align: center;
    }
		.select-pane {
        display: none;
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
                    <li class="active">
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
                    <li >
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
							<div class="col-sm-12">
								<div class="card card-nav-tabs">
									<div class="card-header" data-background-color="purple">
                                        <ul class="nav nav-tabs" id="myTab">
                                            <li class="active"><a data-toggle="tab" href="#sell">Coffee</a></li>
                                            <li><a data-toggle="tab" href="#machine">Machine</a></li>
                                        </ul>
									</div>
									<div class="card-content">
										<div class="tab-content">
											<div class="tab-pane in active" id="sell">
                                                <a href="<?php echo base_url(); ?>salesMultipleOrders" class="btn btn-success btn-md" style="float: right">Add Sales</a>
                                                <?php if(isset($_SESSION['success'])){ ?>
                                                  <div class="alert alert-success"> <?php echo $_SESSION['success']; ?> </div>
                                                    <?php
                                                  } ?>
                                                <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
												 <table id="cosales" class="display table-striped table-hover cell-border" cellspacing="0" width="100%" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th><b>Purchase Order No.</b></th>
                                                        <th><b>Purchase Date</b></th>
														<th><b>Coffee</b></th>
														<th><b>Bag</b></th>
														<th><b>Size</b></th>
														<th><b>Qty</b></th>
														<th><b>Price</b></th>
                                                        <th><b>Total Amount</b></th>
                                                        <th><b>Remarks</b></th>
                                                        <th><b>Action</b></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                        foreach ($data1['sellCoffee'] as $row) {
                                                     ?>
                                                     <tr>
                                                         <td><?php echo $row->walkin_id; ?></td>
                                                         <td><?php echo $row->walkin_date; ?></td>
                                                         <td><?php echo $row->blend; ?></td>
                                                         <td><?php echo $row->package_type; ?></td>
                                                         <td><?php echo number_format($row->package_size); ?> g </td>
                                                         <td><?php echo $row->walkin_qty; ?> bag/s</td>
                                                         <td>Php <?php echo number_format($row->blend_price,2); ?></td>
                                                         <td><?php 
                                                                $price = $row->blend_price;
                                                                $qty = $row->walkin_qty;
                                                                echo 'Php '.number_format($price * $qty,2);
                                                             ?>
                                                        </td>
                                                         <td><?php 
                                                            if ($row->walkin_returns == 0 && $row->resolved == 'No') {
                                                                echo "";
                                                            } else if ($row->walkin_returns > 0 && $row->resolved == 'No'){
                                                                echo 'returned '.$row->walkin_returns.' bag/s';
                                                            } else if ($row->walkin_returns == 0 && $row->resolved == 'Yes') {
                                                                echo "returns has been resolved";
                                                            }
                                                         ?></td>
                                                         <td><button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#returnblend<?php echo $row->walkin_id; ?>" <?php 
                                                            $coff_remark = $row->resolved;
                                                            if ($coff_remark == 'Yes' || $coff_remark == 'No') {
                                                                echo "disabled";
                                                            }

                                                         ?>>Return</button>
                                          
                                                         </td>

                <!-- modal walkin returns -->
                <div class="modal fade" id="returnblend<?php echo $row->walkin_id; ?>" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title" id="contactLabel"><center>Return Coffee Blend</center> </h4>
                            </div>
                            <div class="modal-body" style="padding: 5px;">
                                <div class="card-block">
                                     <form action="<?php echo base_url(); ?>salesSellProduct/return_blend" method="post" accept-charset="utf-8"> 
                                        <div class="modal-body" style="padding: 5px;">
                                            <h3 class="pull-center"><?php echo $row->blend; ?></h3>
                                            
                                        <div class="row">
                                            <div class="col-lg-12" style="padding-bottom: 20px;">
                                                <div class="form-group label-floating">
                                                    <div class="form-group">

                                                    <div class="row">
                                                        <div class="col-lg-">
                                                             <div class="form-group">
                                                                <label class="col-md-4 control">Purchase Date: </label>
                                                                <div class="col-md-6">
                                                                    <p><b><?php echo $row->walkin_date;
                                                                    ?></b></p>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-4 control">Packaging: </label>
                                                                <div class="col-md-6">
                                                                    <p><b><?php echo $row->package_type.' / '.number_format($row->package_size).' g';
                                                                    ?></b></p>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-4 control">Quantity :</label>
                                                                <div class="col-md-6">
                                                                    <p><b><?php echo $row->walkin_qty; ?> bag/s</b></p>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-4 control">Price: </label>
                                                                <div class="col-md-3">
                                                                    <p><b>Php <?php echo number_format($price,2); ?></b></p>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-4 control">Total Amount: </label>
                                                                <div class="col-md-3">
                                                                    <p><b><?php echo 'Php ' .number_format($price * $qty, 2) ?></b></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-6">

                                                            <div class="form-group">
                                                                <label class="col-md-6 control">Date Returned:</label>
                                                                <input class="form-control col-md-12" type="date" name="date_blend_returned" value="<?php echo date("Y-m-d");?>" max="<?php echo date("Y-m-d");?>" required="">
                                                                <input type="hidden" name="blend_id" value="<?php echo $row->blend_id; ?>" required>
                                                                <input type="hidden" name="walkin_id" value="<?php echo $row->walkin_id; ?>" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">

                                                            <div class="form-group">
                                                                <label class="col-md-12 control">Quantity Returned:</label>
                                                                <input class="form-control col-md-5" type="number" name="blend_returned" min="1" max="<?php
                                                                    $retblend = $row->walkin_returns;
                                                                    $soldblend = $row->walkin_qty;
                                                                    $ret_mach = $soldblend - $retblend;
                                                                    echo $ret_mach;
                                                                 ?>" required="">
                                                                 <p class="col-md-2">bag/s</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="col-md-6 control">Remarks:</label>
                                                                <input class="form-control col-md-3" type="text" name="return_blend_remarks" required="">
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
											<div class="tab-pane" id="machine">
                                                <a href="<?php echo base_url(); ?>salesMachineOrders" class="btn btn-success btn-md" style="float: right">Add Sales</a>
												<table id="masales" class="display table-striped table-hover cell-border" cellspacing="0" width="100%">
													<thead>
                                                        <th><b>Purchase Order No.</b></th>
														<th><b>Serial No.</b></th>
														<th><b>Purchase Date</b></th>
														<th><b>Client</b></th>
														<th><b>Machine</b></th>
														<th><b>Sold Quantity</b></th>
                                                        <th><b>Unit Price</b></th>
                                                        <th><b>Total Amount</b></th>
                                                        <th><b>Action</b></th>
													</thead>
													<tbody>
                                                    <?php 
                                                        foreach ($data2['sellMachine'] as $row) {
                                                     ?>
                                                     <tr>
                                                         <td><?php echo $row->mach_salesID; ?></td>
                                                         <td><?php echo $row->mach_serial; ?></td>
                                                         <td><?php echo $row->date; ?></td>
                                                         <td><?php echo $row->client_company; ?></td>
                                                         <td><?php echo $row->brewer; ?></td>
                                                         <td><?php echo $row->mach_qty; ?> /unit</td>
                                                         <td>Php <?php echo number_format($row->unitPrice,2); ?></td>
                                                         <td><?php 
                                                                $price = $row->unitPrice;
                                                                $qty = $row->mach_qty;
                                                                echo 'Php' .number_format($price * $qty, 2);
                                                             ?>
                                                         </td>
                                                         <td><button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#return<?php echo $row->mach_salesID; ?>" <?php 
                                                            $mach_remark = $row->remarks; 
                                                            if ($mach_remark == 'Returned') {
                                                                echo "disabled";
                                                            }

                                                         ?>>Return</button>

                                                         </td>
                <!-- modal machine returns -->
                <div class="modal fade" id="return<?php echo $row->mach_salesID; ?>" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title" id="contactLabel"><center>Return Delivered Item/s</center> </h4>
                            </div>
                            <div class="modal-body" style="padding: 5px;">
                                <div class="card-block">
                                     <form action="<?php echo base_url(); ?>salesSellProduct/return_machine" method="post" accept-charset="utf-8">
                                        <div class="modal-body" style="padding: 5px;">
                            <h3 class="pull-center"><?php echo $row->client_company; ?></h3>
                                            
                                            <div class="row">
                                                <div class="col-lg-12" style="padding-bottom: 20px;">
                                                    <div class="form-group label-floating">
                                                        <div class="form-group">

                                    <div class="row">
                                        <div class="col-lg-6">
                                             <div class="form-group">
                                                <label class="col-md-5 control">Date Intalled: </label>
                                                <div class="col-md-7">
                                                    <p><b><?php echo $row->date;
                                                    ?></b></p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 control">Brewer: </label>
                                                <div class="col-md-5">
                                                    <p><b><?php echo $row->brewer;
                                                    ?></b></p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 control">Quantity :</label>
                                                <div class="col-md-7">
                                                    <p><b><?php echo $row->mach_qty; ?> unit/s</b></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="col-md-6 control">Machine Price: </label>
                                                    <div class="col-md-3">
                                                        <p><b>Php <?php echo number_format($price,2); ?></b></p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-6 control">Total Amount: </label>
                                                    <div class="col-md-3">
                                                        <p><b><?php echo 'Php' .number_format($price * $qty, 2) ?></b></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                                            <div class="row">
                                                                <div class="col-md-6">

                                                                    <div class="form-group">
                                                                        <label class="col-md-6 control">Date Returned:</label>
                                                                        <input class="form-control col-md-6" type="date" name="date_returned" value="<?php echo date("Y-m-d");?>" max="<?php echo date("Y-m-d");?>" required="">
                                                                        <input type="hidden" name="mach_id" value="<?php echo $row->mach_id; ?>" required>
                                                                        <input type="hidden" name="machine" value="<?php echo $row->brewer; ?>" required>
                                                                        <input type="hidden" name="machine_type" value="<?php echo $row->brewer_type; ?>" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">

                                                                    <div class="form-group">
                                                                        <label class="col-md-12 control">Quantity Returned:</label>
                                                                        <input class="form-control col-md-6" type="number" name="qty_returned" min="1" max="<?php echo $row->mach_qty;
                                                                         ?>" required="">
                                                                         <p>unit/s</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
        
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="col-md-6 control">Remarks:</label>
                                                                        <input class="form-control col-md-3" type="text" name="remarks" required="">
                                                                         <input name="serial" type="hidden" class="form-control" value="<?php echo $row->mach_serial; ?>" >
                                                                         <input name="client_id" type="hidden" class="form-control" value="<?php echo $row->client_id; ?>
                                                                         " >
                                                                         <input name="sales_id" type="hidden" class="form-control" value="<?php echo $row->mach_salesID; ?>
                                                                         " >
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
<script src="../assets/js/datepicker.js" type="text/javascript"></script>
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
    $('#cosales').DataTable({
        
    });
});
</script>
<script type="text/javascript">
$(document).ready(function() {
    $('#masales').DataTable({

    });
});
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
<script>


    $.fn.dataTableExt.afnFiltering.push(
        function(oSettings, aData, iDataIndex){
            var dateStart = parseDateValue($("#min").val());
            var dateEnd = parseDateValue($("#max").val());
            var evalDate= parseDateValue(aData[2]);

            if (evalDate >= dateStart && evalDate <= dateEnd) {
                return true;
            }
            else {
                return false;
            }
    });
    //Date Converter
    function parseDateValue(rawDate) {
        var month = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'];
        var dateArray = rawDate.split(" ");
        var parsedDate = dateArray[2] + month + dateArray[0];
        return parsedDate;
    }

    var oTable = $('#example').dataTable({
        "dom":' fBrtip',
        "lengthChange": false,
        "info":     false,
        buttons: [
            { "extend": 'print', "text":'<i class="fa fa-files-o"></i> Print',"className": 'btn btn-default btn-xs',
            orientation: 'landscape',
                        exportOptions: {
                         columns: ':visible'
                 
                        },
                    customize: function (doc) {
                        doc.defaultStyle.alignment = 'right';
                        doc.styles.tableHeader.alignment = 'center';
                        doc.pageMargins = [50,50,100,80];
                        doc.defaultStyle.fontSize = 10;
                        doc.styles.tableHeader.fontSize = 10;
                        doc.styles.title.fontSize = 12;
                         doc.content[1].table.widths = [ '10%', '10%', '11%', '14%', '14%', '10%', '10%', '10%', '12%', '13%', '11%'];}},
            { "extend": 'excel', "text":'<i class="fa fa-file-excel-o"></i> CSV',"className": 'btn btn-success btn-xs', "orientation": 'landscape' },
            { "extend": 'pdf', "text":'<i class="fa fa-file-pdf-o"></i> PDF',"className": 'btn btn-danger btn-xs', 
             "orientation": 'landscape'
            }
        ]
    });

    $('#min,#max').datepicker({
        format: "yyyy-mm-dd",
        weekStart: 1,
        daysOfWeekHighlighted: "0",
        autoclose: true,
        todayHighlight: true
    });

    // Event Listeners
    $("#min").datepicker().on( 'changeDate', function() {
        oTable.fnDraw();
    });
    $("#max").datepicker().on( 'changeDate', function() {
        oTable.fnDraw();
    });



</script>

<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable({
        "dom":' fBrtip',
        "lengthChange": false,
        "info":     true,
        buttons: [
            
            
            { "extend": 'excel', "text":'<i class="fa fa-file-excel-o"></i> CSV',"className": 'btn btn-success btn-xs',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5]
                }
            },
            
            { "extend": 'pdf', "text":'<i class="fa fa-file-pdf-o"></i> PDF',"className": 'btn btn-danger btn-xs',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5]
                }
            }
        ]
    });
});
</script>
</html>