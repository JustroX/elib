<?php
include("viewusers.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>P.R.O.J.E.C.T. L.I.B</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
      }
      .modal-footer {
        background-color: #f9f9f9;
      }
    </style>

</head>

<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">E-LIB</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Database</a>
                        </li>
                        <li>
                            <a href="users.php"><i class="fa fa-bar-chart-o fa-fw"></i> Users</a>
                        </li>
                        <li>
                            <a href="books.php"><i class="fa fa-table fa-fw"></i> Books</a>
                        </li>
                        <li>
                            <a class="active" href="trans.php"><i class="fa fa-shopping-cart fa-fw"></i> Transactions</a>
                        </li>
                        <li>
                            <a href="summary.php"><i class="fa fa-list-alt fa-fw"></i> Summary</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Transactions</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
              <div class="col-lg-12">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          Table of transactions
                      </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                          <table width="100%" class="table table-striped table-bordered table-hover" id="myTable">
                              <thead>
                                <th>Student</th>
                                <th>Book Title</th>
                                <th>Access No.</th>
                                <th>Date Borrowed</th>
                                <th>Date Returned</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Actions</th>
                              </thead>
                              <tbody>
                                <?php for($i=0;$i<count($trans);$i++){ ?>
                                <tr>
                                  <td><?php for($j=0;$j<count($user);$j++){ if($trans[$i]['user']==$user[$j]['id_code']){ echo $user[$j]['name'];}}?></td>
                                  <td><?php for($j=0;$j<count($copy);$j++){ if($trans[$i]['copy']==$copy[$j]['access_number']){ echo $copy[$j]['parent'];}}?></td>
                                  <td><?php echo $trans[$i]['copy'];?></td>
                                  <td><?php echo $trans[$i]['date'];?></td>
                                  <td><?php echo $trans[$i]['date_returned'];?></td>
                                  <td><?php echo $trans[$i]['amount'];?></td>
                                  <td><?php if($trans[$i]['date_returned']==""){echo "Borrowed";}else{echo "Paid";}?></td>
                                  <td>
                                    <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalpay" onclick='update_modal(<?php echo json_encode($trans[$i]); ?>);details(this);'>
                                      Pay
                                    </button>
                                  </td>
                                </tr>
                                <?php }?>
                              </tbody>
                          </table>
                          <!-- /.table-responsive -->
                          <div class="modal fade" id="modalpay" role="dialog">
                            <div class="modal-dialog">
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 style="color:red;"><span class="glyphicon glyphicon-user"></span> User entry</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                      <h3 id="modal-ti"></h3><h5 id="modal-acc"></h5>
                                      <label for="name">Amount to be paid: <h2 id="modal-am"></h2></label>
                                    </div>
                                    <button class="btn btn-success btn-block" onclick="pay()">Pay</button>
                                </div>
                                <div class="modal-footer">
                                  <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                      <!-- /.panel-body -->
                  </div>
                  <!-- /.panel -->
              </div>
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    <script type="text/javascript"> 
    function update_modal(trans)
    {
      $("#modal-am").text(trans.amount);
      $("#modal-acc").text(trans.copy);
    }
    function details(r){
      var i = r.parentNode.parentNode.rowIndex;
      var x = document.getElementById("myTable").rows[i].cells[2].innerHTML;
      $("#modal-ti").text(x);
    }
    function pay(){
      var x = document.getElementById("modal-acc").innerHTML;
      window.location.href = "pay.php?acc="+x;
    }
    </script>
</body>

</html>