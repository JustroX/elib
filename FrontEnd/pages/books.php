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
      .greenc{
        background-color: #5cb85c;
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
                            <a href="books.php" class="active"><i class="fa fa-table fa-fw"></i> Books</a>
                        </li>
                        <li>
                            <a href="trans.php"><i class="fa fa-shopping-cart fa-fw"></i> Transactions</a>
                        </li>
                        <li>
                            <a href="summary.php"><i class="fa fa-shopping-cart fa-fw"></i> Summary</a>
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
                    <h1 class="page-header">Books</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
              <div class="col-lg-12">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          Table of Books
                          <button type="button" class="btn btn-outline btn-primary" id="myBtn">Add entry</button>
                          <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 style="color:red;"><span class="glyphicon glyphicon-book"></span> Book entry</h4>
                                  </div>
                                  <div class="modal-body">
                                    <form>
                                      <div class="form-group">
                                        <label for="callnumber">Call Number:</label>
                                        <input type="text" class="form-control" id="cn" placeholder="Enter Call Number">
                                      </div>
                                      <div class="form-group">
                                        <label for="author">Author:</label>
                                        <input type="text" class="form-control" id="au" placeholder="Enter Author">
                                      </div>
                                      <div class="form-group">
                                        <label for="title">Title:</label>
                                        <input type="text" class="form-control" id="ti" placeholder="Enter Title">
                                      </div>
                                      <div>
                                        <label for="subject">Subject:</label>
                                        <div class="dropdown">
                                          <button class="btn btn-primary dropdown-toggle greenc" type="button" data-toggle="dropdown">Select Subject
                                          <span class="caret"></span></button>
                                          <ul class="dropdown-menu">
                                            <li><a href="#">Science</a></li>
                                            <li><a href="#">General</a></li>
                                            <li><a href="#">References</a></li>
                                          </ul>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="access">Access no:</label>
                                        <input type="text" class="form-control" id="an" placeholder="Enter Access no">
                                      </div>
                                      <div class="form-group">
                                        <label for="date">Date:</label>
                                        <input type="text" class="form-control" id="da" placeholder="Enter Date">
                                      </div>
                                      <div class="form-group">
                                        <label for="nocopies">No. of copies:</label>
                                        <input type="text" class="form-control" id="nc" placeholder="Enter No of copies">
                                      </div>
                                      <button type="submit" class="btn btn-success btn-block"> Submit</button>
                                    </form>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                                  </div>
                                </div>
                              </div>
                          </div>
                      </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                          <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                              <thead>
                                  <tr>
                                      <th>Call Number</th>
                                      <th>Author</th>
                                      <th>Title</th>
                                      <th>Subject</th>
                                      <th>Access No.</th>
                                      <th>Date</th>
                                      <th>No. of copies</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr class="odd gradeX">
                                      <td>2012-102</td>
                                      <td>Justine Romero</td>
                                      <td>How to be Just</td>
                                      <td>Science</td>
                                      <td class="center">4123</td>
                                      <td class="center">8-16-17</td>
                                      <td>20</td>
                                      <td>
                                      <div class="btn-group">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalview">
                                            View
                                        </button>
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#modal2">
                                            Edit
                                        </button>
                                      </div>
                                    </td>
                                  </tr>
                              </tbody>
                          </table>
                          <!-- /.table-responsive -->
                          <!--modalview content-->
                          <div class="modal fade" id="modalview" role="dialog">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 style="color:red;"><span class="glyphicon glyphicon-book"></span> View Book entry</h4>
                                </div>
                                <div class="modal-body">
                                  <form>
                                      <div class="form-group">
                                        <label for="callnumber">Call Number:</label>
                                        <h5>2012-102</h5>
                                      </div>
                                      <div class="form-group">
                                        <label for="author">Author:</label>
                                        <h5>THird Iringan</h5>
                                      </div>
                                      <div class="form-group">
                                        <label for="title">Title:</label>
                                        <h5>How to be Bobo</h5>
                                      </div>
                                      <div class="form-group">
                                        <label for="access">Access no:</label>
                                        <h5>4123</h5>
                                      </div>
                                      <div class="form-group">
                                        <label for="date">Date:</label>
                                        <h5>8-16-17</h5>
                                      </div>
                                      <div class="form-group">
                                        <label for="nocopies">No. of copies:</label>
                                        <h5>20</h5>
                                      </div> 
                                  </form>
                                  <table width="100%" class="table table-striped table-bordered table-hover table-responsive" id="dataTables-example">
                                    <thead>
                                      <tr>
                                        <th>Copy No.</th>
                                        <th>Control No</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr class="odd gradeX">
                                        <td>1</td>
                                        <td>2012-102</td>
                                        <td>Available</td>
                                        <td>
                                          <div>
                                            <a>
                                              <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalborrow">
                                                Borrow
                                              </button>
                                            </a>
                                          </div>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                                <div class="modal-footer">
                                  <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="modalborrow" role="dialog">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 style="color:red;"><span class="glyphicon glyphicon-book"></span>Borrow book</h4>
                                </div>
                                <div class="modal-body">
                                  <form>
                                      <div class="form-group">
                                        <label for="callnumber">Borrower:</label>
                                        <input type="text" class="form-control" id="cn" placeholder="Enter Student ID">
                                        <label for="name">Ref No.:</label>
                                        <input type="text" class="form-control">
                                        <label for="name">Access No:</label>
                                        <input type="text" class="form-control">
                                      </div>
                                      <button type="submit" class="btn btn-success btn-block"> Submit</button> 
                                  </form>
                                </div>
                                <div class="modal-footer">
                                  <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="modal2" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 style="color:red;"><span class="glyphicon glyphicon-book"></span> Edit Book entry</h4>
                                  </div>
                                  <div class="modal-body">
                                    <form>
                                      <div class="form-group">
                                        <label for="callnumber">Call Number:</label>
                                        <input type="text" class="form-control" id="cn" placeholder="Enter Call Number">
                                      </div>
                                      <div class="form-group">
                                        <label for="author">Author:</label>
                                        <input type="text" class="form-control" id="au" placeholder="Enter Author">
                                      </div>
                                      <div class="form-group">
                                        <label for="title">Title:</label>
                                        <input type="text" class="form-control" id="ti" placeholder="Enter Title">
                                      </div>
                                      <div class="form-group">
                                        <label for="access">Access no:</label>
                                        <input type="text" class="form-control" id="an" placeholder="Enter Access no">
                                      </div>
                                      <div class="form-group">
                                        <label for="date">Date:</label>
                                        <input type="text" class="form-control" id="da" placeholder="Enter Date">
                                      </div>
                                      <div class="form-group">
                                        <label for="nocopies">No. of copies:</label>
                                        <input type="text" class="form-control" id="nc" placeholder="Enter No of copies">
                                      </div>
                                      <button type="submit" class="btn btn-success btn-block"> Submit</button>
                                    </form>
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
    <script>
    $(document).ready(function(){
      $("#myBtn").click(function(){
      $("#myModal").modal();
    });
    });
    </script>

</body>

</html>
