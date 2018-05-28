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
                                <li>
                                    <p class="title" style="color: black; font-size: 20px;">Hi, <?php $username = $this->session->userdata('username'); print_r($username); ?></p>
                                </li><span style="display:inline-block; width: YOURWIDTH;"></span>
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
                        <a href="<?php echo base_url() ?>salesDelivery" class="btn btn-primary navbar-btn pull-left">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h3 class="title"><center>Archived Purchase Orders</center></h3>
                                </div>
                                 <div class="card-content">
    <?php
        $error = $this->session->flashdata('error');
        $success = $this->session->flashdata('success');
        if(!empty($error)){
            ?>
            <div class="alert alert-danger" style="; margin: 0px; text-align: center; opacity: 0.8; width:50%">
                <strong><?php echo $error; ?></strong> 
            </div>
      <?php } else if(!empty($success)){ ?>
            <div class="alert alert-success" style="margin: 0px; text-align: center;  opacity: 0.8; width:50%">
                <strong><?php echo $success; ?></strong> 
            </div>
      <?php } ?> 
    <table id="fresh-datatables" class="display hover order-column cell-border" cellspacing="0" width="100%">
        <thead>
            <th><b class="pull-left">Purchase Order No.</b></th>
            <th><b class="pull-left">Client</b></th>
            <th><b class="pull-left">Item Code</b></th>
            <th><b class="pull-center">Coffee Blend</b></th>
            <th><b class="pull-left">Quantity</b></th>
            <th><b class="pull-left">Unit Price</b></th>
            <th><b class="pull-left">Gross Amount</b></th>
            <th><b class="pull-left">Purchase Date</b></th>
            <th><b class="pull-left">Remarks</b></th>
            <th class="disabled-sorting"><b class="pull-left">Action</b></th>
        </thead>
        <tbody>
            <?php
                foreach($cancel['get_cancel_list'] as $row1)
                {

            ?>
            <tr>
                <td><?php echo $row1->contractPO_id; ?></td>
                <td><?php echo $row1->client_company; ?></td>
                <td><?php echo $row1->blend_id; ?></td>
                <td><?php echo "$row1->blend/ $row1->package_type/ $row1->package_size g"; ?></td>
                <td><?php echo $row1->contractPO_qty; ?></td>
                <td>Php <?php echo number_format($row1->blend_price,2); ?></td>
                <td><?php
                        $price = $row1->blend_price;
                        $qty = $row1->contractPO_qty;
                        $amount = $price * $qty;
                        echo 'Php '.number_format($amount,2);
                     ?>
                </td>
                <td><?php echo $row1->contractPO_date; ?></td>
                <td><?php 
                $roast = $row1->roast;
                if ($roast == "Yes") {
                                    echo "Roasted";
                                    }                    

                 ?></td>
                <td><?php
                       
                        echo '
                           <a class="btn btn-success btn-xs" style="margin-top: 0px" data-toggle="modal" data-target="#undo'.$row1->contractPO_id.'"> Retrieve</a>
                        ';
                    ?>
                <!-- modal for retrievde -->

                <div class="modal fade" id="undo<?php echo $row1->contractPO_id;?>" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="panel-title" id="contactLabel"><center>Retrieve Purchase Order</center></h4>
                            </div>
                            <form action="<?php echo base_url(); ?>SalesDelivery/retDel" method="post" accept-charset="utf-8">
                                <div class="modal-body" style="padding: 5px;">
                                   <h3>Are you sure to retrieve Purchase Order no. <?php echo $row1->contractPO_id ?>?</h3>
                                    <label>Admin Password:</label><br>
                                    <input class="form-control" type="password" name="password" value="" required>
                                   <input class="form-control" type="hidden" name="po_ret" value="<?php echo $row1->contractPO_id; ?>" required>
                                    <div class="panel-footer" align="center">
                                        <button type="submit" class="btn btn-success">Yes</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>    
                </td>
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
    <!--<footer class="footer navbar navbar-fixed-bottom">
                <div class="container-fluid">
                    <div class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>, made with love by
                        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
                    </div>
                </div>
            </footer>-->
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
        scrollCollapse: true,

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
