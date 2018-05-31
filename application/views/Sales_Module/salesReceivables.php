<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Receivables Summary</title>
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
    <style>
    .table thead,
    thead th {
        text-align: center;
        font-size: 140%;
    }

    .table tbody,
    tbody td {
        text-align: center;
    }

    .col-centered {
        float: none;
        margin: 0 auto;
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
                    <li >
                        <a href="<?php echo base_url(); ?>salesDelivery">
                            <i class="glyphicon glyphicon-bed"></i>
                            <p>Deliveries</p>
                        </a>
                    </li>
                    <li class="active">
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
                        <div class="col-sm-12 col-centered">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h3 class="title"><center>Receivables</center></h3>
                                </div>
                                <div class="card-content">
                                <div class="row">
                                    <div class="form-group col-xs-3">
                                        <label>Filter By:</label>
                                    <div class="input-group input-daterange">
                                        <input type="text" id="min" class="form-control" value="2000-01-01" >
                                        <span class="input-group-addon">to</span>
                                        <input type="text" id="max" class="form-control" value="<?php   echo date("Y-m-d") ?>" >
                                    </div>
                                    </div>
                                <div class="form-group col-xs-3">
                                
                                    
                                    <p class="category">Total Receivables</p>
                                    <h3 class="title">
                                        <b>
                                    <?php
                                            $total = $this->db->query("SELECT SUM(client_balance) AS total FROM client_delivery WHERE payment_remarks='unpaid';")->row()->total;
                                            if(!empty($total)){
                                                echo 'Php '.number_format($total,2);
                                            }else{
                                                echo 0;
                                            }
                                         ?>
                                            </b>
                                    </h3>
                                </div>
                                    </idv>
                                    <table id="example" class="table table-striped cell-border dt-responsive nowrap">
                                        <thead>
                                            <tr>
                                                <th><b>Date</b></th>
                                                <th><b>Client</b></th>
                                                <th><b>Receivables</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach ($receivable as $row) {
                                             ?>
                                             <tr>
                                                 <td><?php echo $row->client_deliverDate; ?></td>
                                                 <td><?php echo $row->client_company; ?></td>
                                                 <td><?php
                                                    $bal = $row->client_balance - $row->amount_paid;
                                                 echo 'Php '.number_format($bal,2); ?></td>
                                             </tr>
                                             <?php
                                                }
                                              ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <td></td>
                                            <td class="pull-right"></td>
                                            <td></td>
                                            </tr>
                                        </tfoot>
                                    </table>
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
<script src="../assets/FileExport/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="../assets/FileExport/buttons.flash.min.js" type="text/javascript"></script>
<script src="../assets/FileExport/buttons.Html5.min.js" type="text/javascript"></script>
<script src="../assets/FileExport/buttons.print.min.js" type="text/javascript"></script>
<script src="../assets/FileExport/jszip.min.js" type="text/javascript"></script>
<script src="../assets/FileExport/pdfmake.min.js" type="text/javascript"></script>
<script src="../assets/FileExport/vfs_fonts.js" type="text/javascript"></script>
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
<script src="<?php echo base_url(); ?>assets/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/responsive.bootstrap.min.js"></script>

<script>   
    
    
      $.fn.dataTableExt.afnFiltering.push(
        function(oSettings, aData, iDataIndex){
            var dateStart = parseDateValue($("#min").val());
            var dateEnd = parseDateValue($("#max").val());
            var evalDate= parseDateValue(aData[0]);

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
        var parsedDate = dateArray[0] + month + dateArray[0];
        return parsedDate;
    }



    var oTable = $('#example').dataTable({ 
        "order": [[ 0, "asc"]],
        "dom":' fBrtip',
        "lengthChange": false,
        "info":     true,
        buttons: [

            
            { "extend": 'excel', "text":'<i class="fa fa-file-excel-o"></i> CSV',"className": 'btn btn-success btn-xs',
                exportOptions: {
                    columns: [0, 1, 2]
                }
            },
            

            { 
                "extend": 'pdf',
                "text":'<i class="fa fa-file-pdf-o"></i> PDF',
                "className": 'btn btn-danger btn-xs', 
                "orientation": 'portrait', 
                "title": 'Accounts Receivable Report',
                "download": 'open',
                
                "messageBottom": "\n \n \n Total Amount: <?php echo number_format($total, 2) ?> \n \n \n \n \n \n Prepared by: <?php echo $object->u_fname  . ' ' . $object->u_lname; ?>",
                styles: {
                    "messageBottom": {
                        bold: true,
                        fontSize: 15
                    }
                },
                "exportOptions": {
                     columns: [0, 1, 2],
                     /*modifier: {
                          page: 'current'
                        }*/
                  },


                "header": true,
                customize: function(doc) {
                    doc.defaultStyle.alignment = 'right';
                        doc.styles.tableHeader.alignment = 'center';
                    var now = new Date();
                    var jsDate = now.getDate()+'-'+(now.getMonth()+1)+'-'+now.getFullYear();
                    var logo = 'data:assets/img/logo.png';
                    doc.content.splice(0, 1, {
                      text: [{
                        text: 'John Hay Coffee Services Inc.\n',
                        bold: true,
                        fontSize: 15
                      }, {
                        text: ' Accounts Receivable Report \n',
                        bold: true,
                        fontSize: 11
                      }, {
                        text: '',
                        bold: true,
                        fontSize: 11
                      }],
                      margin: [0, 0, 0,20],
                      alignment: 'center',
                     image: logo
                    });
                    doc.content[1].table.widths = ['32%','34%','33%'];
                    doc.pageMargins = [40, 40, 40,40];
                    doc['footer']=(function(page, pages) {
                            return {
                                columns: [
                                    {
                                        alignment: 'left',
                                        text: ['Date Downloaded: ', { text: jsDate.toString() }]
                                    },
                                    {
                                        alignment: 'right',
                                        text: ['page ', { text: page.toString() },  ' of ', { text: pages.toString() }]
                                    }
                                ],
                                margin: 20
                            }
                        });

                    


 
                  }



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


</html>
