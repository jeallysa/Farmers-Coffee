<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Machine</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-select.min.css" rel="stylesheet" />
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

    .center {
        text-align: center;
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
                        
                        <div class="col-md-10 col-md-offset-1">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h3 class="title"><center>Retail Client Machine Purchase</center></h3>
                                </div>
                                <div class="card-content">
                                    <div class="modal-body" style="padding: 5px;">
                                            <div class="row">
                                                <div class="form-conttrol label-floating">
                                                    <div class="col-md-5">
                                                        <label>Client</label>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <label>Date of Purchase</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="form-group label-floating">
                                                        <select class="selectpicker" data-live-search="true" name="client_id" id="client_id" >
                                                        <?php 
                                                        foreach($data6['client'] as $row)
                                                        { 
                                                            echo '<option value="'.$row->client_id.'">'.$row->client_company.'</option>';
                                                        }
                                                        ?>
                                                      </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group label-floating">
                                                        <input class="form-control" type="date" value="<?php echo date("Y-m-d");?>" name="date" max="<?php echo date("Y-m-d");?>" required="" id="DatePO">
                                                        <input type="hidden" name="sold" value="sold"> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div><hr>  
                                <div class="card-content">

                                <div class="modal-body" style="padding: 5px;">

                                        <div class="row">
                                            <div class="form-conttrol label-floating">
                                                <div class="col-md-5">
                                                    <label>Machine</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Serial No.</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>Quantity</label>
                                                </div>
                                            </div>
                                        </div>
                                          
                                        <div id="education_fields"> </div>
                                        
                                        <div class="col-sm-5 nopadding">
                                          <div class="form-group">
                                            <div class="">
                                              <select class="selectpicker" data-live-search="true" name="mach_id" id="machine_id">
                                                <?php 
                                                foreach($data5['machine'] as $row)
                                                { 
                                                    echo '<option value="'.$row->mach_id.'">'.$row->brewer."/ ".$row->brewer_type.'</option>';
                                                }
                                                ?>
                                              </select>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="col-sm-4 nopadding">
                                          <div class="form-group">
                                              <div class="input-group">
                                                <input type="text" class="form-control" id="serial" name="serial" value="" required="" min="1">
                                              </div>
                                          </div>
                                        </div>
                                        <div class="col-sm-3 nopadding">
                                          <div class="form-group">
                                              <div class="input-group">
                                                <input type="number" class="form-control" id="qty" name="qty" value="qty" placeholder="qty" required="" min="1" max="<?php echo $row->mach_stocks; ?>">
                                              </div>
                                          </div>
                                        </div>
                                </div>
                            </div>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <div class="center">
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#verify" id="submit" disabled="disabled">
                                      Save
                                    </button>
                                    <a href="<?php echo base_url(); ?>salesSellProduct" class="btn btn-danger"> Cancel</a>
                                </div>
                            </div>
                        </div>
						<!--modal for verification-->
                    <div class="modal fade" id="verify" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="panel panel-primary">
                                <div class="panel-heading" style="background-color: #990000;">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="panel-title" id="contactLabel"><center><b>Verify Order</b></center> </h4>
                                </div>
								<form action="<?php echo base_url(); ?>SalesSellProduct/add" method="post" accept-charset="utf-8">
                                <div class="modal-body"><br>
									<div class="col-md-12 col-md-offset-1">
										<h3>Please confirm the order information.</h3></div>
									 <div class="col-md-12 col-md-offset-2">
										 
										
										 <br>
										 <div class="row">
											<label class="col-md-3 control">Purchase Date:</label>
											<div class="col-md-3">
											<b><input class="no-border" name="datePO" id="displayDate" readonly /></b>
											</div>
										</div>
										<div class="row">
											<label class="col-md-3 control">Client :</label>
											<div class="col-md-3">
											<b><input name="client" class="no-border" type="disabled"  readonly /></b>
											</div>
										</div>
									 	<div class="row">
											<label class="col-md-3 control">Machine :</label>
											<div class="col-md-3">
											<b><input name="brewer" class="no-border" type="disabled" readonly /></b>
											</div>
										</div>
										<div class="row">
											<label class="col-md-3 control">Serial :</label>
											<div class="col-md-3">
											<b><input name="serial" class="no-border" type="disabled" id="displaySerial"  readonly /></b>
											</div>
										</div>
										 <div class="row">
											<label class="col-md-3 control">Quantity :</label>
											<div class="col-md-3">
											<b><input class="no-border" name="qty" id="displayQty" readonly /></b>
											</div>
										</div>
										 
										 <input class="form-control" name="mach_id" id="displayMachine" type="hidden" readonly />
										  <input type="hidden" name="sold" value="sold">
									</div>
                                </div>
                                <hr>
                              <div align="center">
								   <input class="form-control" name="client_id" id="displayClient" type="hidden" readonly />
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-success" >Save</button>
                              </div>
							 </form> 
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
<script src="../assets/js/bootstrap-select.js"></script>

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

    $('#example').DataTable();
	
	$(document).on('click', '#submit', function(e){ 
		var machine = document.getElementById('machine_id').value;
		var client = document.getElementById('client_id').value;
		var datePO = document.getElementById('DatePO').value;
		var serial = document.getElementById('serial').value;
		var qty = document.getElementById('qty').value;

		document.getElementById('displayDate').value = datePO;
		document.getElementById('displaySerial').value = serial;
		document.getElementById('displayQty').value = qty;
		document.getElementById('displayClient').value = client;
		document.getElementById('displayMachine').value = machine;

		jQuery.ajax({
			url:'<?=base_url()?>SalesSellProduct/getMachinebyId/' +machine,
			method: 'GET',
			type: 'ajax',
			dataType: 'json',
			success:function(data)
			{
				$('[name="brewer"]').val(data.brewer);
			},
				error: function (jqXHR, textStatus, errorThrown)
					{
						alert('Error get data from ajax');
					}

				});

		jQuery.ajax({
			url:'<?=base_url()?>SalesSellProduct/getClientbyId/' +client,
			method: 'GET',
			type: 'ajax',
			dataType: 'json',
			success:function(data)
			{
				$('[name="client"]').val(data.client_company);
			},
				error: function (jqXHR, textStatus, errorThrown)
					{
						alert('Error get data from ajax');
					}

				});
				});	

			 $("#qty").keyup(function () {
					if ($(this).val() !== "" && $(this).val() !== null)
					{
						$("#submit").removeAttr("disabled");
					}
				});

	
	
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



