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

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <style>
    .table thead,
    thead th {
        text-align: center;
        font-size: 140%;
    }

    .table tbody,
    tbody td {
        text-align: right;
    }
    
    .panel-primary>.panel-heading{color:#fff !important;background-color:#9c27b0 !important;border-color:#9c27b0 !important}
    .panel-primary{ border-color:#9c27b0 !important}
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-0.jpg">
            <div class="logo">
                <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="image1" width="250px" height="150px">
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
                    <li class="active">
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
                <?php $id = $this->input->get('id'); ?>
                <a href="<?php echo base_url() ?>salesClients/salesClientsInfo?id=<?php echo $id ?>" class="btn btn-primary navbar-btn pull-left">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h3 class="title"><center>Contract</center></h3>
                                </div>
                                <div class="col-xs-4">
                                    <div class="card card-profile">
                                        <div class="content">
                                            <?php
                                                foreach($data1['cli_det'] as $row)
                                                {
                                                    
                                            ?>
                                            <h3 class="card-title"><?php echo $row->client_company; ?></h3>
                                            <h6 class="category text-gray"><?php echo $row->client_fname; ?> <?php echo $row->client_lname; ?> - <?php echo $row->client_position; ?></h6>
                                            <table align="center">
                                                <tbody>
                                                    <tr>
                                                        <td><b>Address: </b></td>
                                                        <td align="left"> <?php echo $row->client_address; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Tel: </b></td>
                                                        <td align="left"> <?php echo $row->client_contact; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Email: </b></td>
                                                        <td align="left"> <?php echo $row->client_email; ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <?php
                                                }
                                            ?>
                                            <br>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="card card-profile">
                                        <div class="content">
                                            <table class="card-content" cellspacing="0" width="80%" align="left">
                                                <h6 class="card-title">Coffee Details</h6>
                                                <tbody>
                                                <?php
                                                    foreach($data2["cli_coff"] as $row)
                                                    {
                                                        
                                                ?>   
                                                    <tr>
                                                        <td><b>Client Type:</b></td>
                                                        <td><?php echo $row->client_type; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Date Started</b></td>
                                                        <td><?php echo $row->date_started; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Date of Expiration</b></td>
                                                        <td><?php echo $row->date_expiration; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Coffee Blend:</b></td>
                                                        <td><?php echo $row->blend; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Bag:</b></td>
                                                        <td><?php echo $row->package_type; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Size:</b></td>
                                                        <td><?php echo number_format($row->package_size); ?> g</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Quantity:</b></td>
                                                        <td><?php echo $row->required_qty; ?> bags</td>
                                                    </tr>
                                                    <?php 
                                                        }
                                                     ?>
                                                </tbody>
                                            </table>
                                            <br>
                                            <br>
                                            <table class="card-content" cellspacing="0" width="50%" align="center">
                                            </table>
                                            <br>
                                            <br>
                                            <br>
                                        </div>
                                    </div>
                                </div>

                                    <?php
                                        foreach($data3["cli_mach"] as $row)
                                        {
                                            
                                    ?> 
                                <div class="col-xs-4">
                                    <div class="card card-profile">
                                        <div class="content">
                                            <table class="card-content" cellspacing="0" width="90%" align="center">
                                                <h6 class="card-title">Machine Specifications</h6>
                                                <tbody>
                                            
                                                    <tr>
                                                        <td><b>Tagging No.:</b></td>
                                                        <td><?php echo $row->mach_serial; ?></td>
                                                    </tr> 
                                                    <tr>
                                                        <td><b>Brewer:</b></td>
                                                        <td><?php echo $row->brewer; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Quantity:</b></td>
                                                        <td><?php echo $row->mach_qty; ?> unit/s</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Type:</b></td>
                                                        <td><?php echo $row->brewer_type; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Price:</b></td>
                                                        <td>Php <?php echo number_format($row->unitPrice,2); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Remarks:</b></td>
                                                        <td><?php echo $row->remarks; ?></td>
                                                    </tr>
                                                    <tr>
                                                    <?php
                                                    $t = 'Received';
                                                    $remarks = $row->remarks;

                                                    if ($t == $remarks) {
                                                        echo '<td colspan="2"><button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#return'.$row->mach_salesID.'">Return</button></td>';
                                                    }
                                                    ?>
                <!-- modal machine returns -->
                <div class="modal fade" id="return<?php echo $row->mach_salesID; ?>" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title" id="contactLabel"><center>Return Delivered Item/s</center> </h4>
                            </div>
                            <div class="modal-body" style="padding: 5px;">
                                <div class="card-block">
                                     <form action="<?php echo base_url(); ?>salesClients/return_machine" method="post" accept-charset="utf-8">
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
                                                        <p><b>Php <?php echo number_format($row->unitPrice,2); ?></b></p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-6 control">Total Amount: </label>
                                                    <div class="col-md-3">
                                                        <?php $price = $row->unitPrice;
                                                              $qty = $row->mach_qty;
                                                        ?>
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
                                                                        <input class="form-control col-md-3" type="date" name="date_returned" value="<?php echo date("Y-m-d");?>" max="<?php echo date("Y-m-d");?>" required="">
                                                                        <input type="hidden" name="mach_id" value="<?php echo $row->mach_id; ?>" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">

                                                                    <div class="form-group">
                                                                        <label class="col-md-7 control">Quantity Returned:</label>
                                                                        <input class="form-control col-md-3" type="number" name="qty_returned" min="1" max="<?php echo $row->mach_qty;?>" required="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
        
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 control">Remarks:</label>
                                                                        <input class="form-control col-md-3" type="text" name="remarks" required="">
                                                                         <input name="serial" type="hidden" class="form-control" value="<?php echo $row->mach_serial; ?>" >
                                                                         <input name="client_id" type="hidden" class="form-control" value="<?php 
                                                                            $cli_id = $_GET['id'];
                                                                            echo $cli_id;
                                                                         ; ?>
                                                                         " >
                                                                         <input name="cli_id" type="hidden" class="form-control" value="<?php echo $row->client_id; ?>
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
                                                    
                                                </tbody>
                                            </table>
                                            <br>
                                            <br>
                                            <table class="card-content" cellspacing="0" width="50%" align="center">
                                            </table>
                                            <br>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                    }
                                 ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
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
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
});

$('table tbody tr  td').on('click', function() {
    $("#myModal").modal("show");
    $("#txtfname").val($(this).closest('tr').children()[0].textContent);
    $("#txtlname").val($(this).closest('tr').children()[1].textContent);
});
$('#datePicker')
    .datepicker({
        format: 'mm/dd/yyyy'
    })
    .on('changeDate', function(e) {
        // Revalidate the date field
        $('#eventForm').formValidation('revalidateField', 'date');
    });

$('#eventForm').formValidation({
    framework: 'bootstrap',
    icon: {
        valid: 'glyphicon glyphicon-ok',
        invalid: 'glyphicon glyphicon-remove',
        validating: 'glyphicon glyphicon-refresh'
    },
    fields: {
        name: {
            validators: {
                notEmpty: {
                    message: 'The name is required'
                }
            }
        },
        date: {
            validators: {
                notEmpty: {
                    message: 'The date is required'
                },
                date: {
                    format: 'MM/DD/YYYY',
                    message: 'The date is not a valid'
                }
            }
        }
    }
});
</script>

</html>