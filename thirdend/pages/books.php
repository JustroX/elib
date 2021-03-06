<?php
include("viewusers.php");
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
														<a class="active" href="#"><i class="fa fa-table fa-fw"></i> Books</a>
												</li>
												<li>
														<a href="trans.php"><i class="fa fa-shopping-cart fa-fw"></i> Transactions</a>
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
										<h1 class="page-header">Books</h1>
								</div>
								<!-- /.col-lg-12 -->
						</div>
						<div class="row">
							<div class="col-lg-12">
									<div class="panel panel-default">
											<div class="panel-heading">
													DataTables Advanced Tables
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
																		<form method="POST" action="addbooks.php">
																			<div class="form-group">
																				<label for="callnumber">Call Number:</label>
																				<input type="text" class="form-control" id="cn" name="cn" placeholder="Enter Call Number">
																			</div>
																			<div class="form-group">
																				<label for="author">Author:</label>
																				<input type="text" class="form-control" id="au" name="au" placeholder="Enter Author">
																			</div>
																			<div class="form-group">
																				<label for="title">Title:</label>
																				<input type="text" class="form-control" id="ti" name="ti" placeholder="Enter Title">
																			</div>
									                                      <div class="form-group">
									                                        <label for="subject">Subject:</label>
									                                        <label for="sel1">Select Subject (select one):</label>
									                                        <select class="form-control" id="sel1" name="sel1">
									                                          <option value="Computer Science, Information and General Works">Computer Science, Information and General Works</option>
									                                          <option value="Philosophy and Psychology">Philosophy and Psychology</option>
									                                          <option value="Religion">Religion</option>
									                                          <option value="Social Science">Social Science</option>
									                                          <option value="Language">Language</option>
									                                          <option value="Science">Science</option>
									                                          <option value="Technology">Technology</option>
									                                          <option value="Arts and Recreation">Arts and Recreation</option>
									                                          <option value="Literature">Literature</option>
									                                          <option value="History and Geography">History and Geography</option>
									                                        </select>
									                                      </div>
																			<div class="form-group">
																				<label for="access">Number of Copies:</label>
																				<input type="text" class="form-control" id="co" name="co" placeholder="Enter Number of Copies">
																			</div>
																			<div class="form-group">
																				<label for="access">Starting Accession Number:</label>
																				<input type="text" class="form-control" id="an" name="an" placeholder="Enter Starting Accession Number">
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
																			<th>No. of Copies Available</th>
																			<th>Action</th>
																	</tr>
															</thead>
															<tbody>
																	<?php for($i=0;$i<count($book);$i++){ ?>
																	<tr class="odd gradeX">
																			<td><?php echo $book[$i]['call_number'];?></td>
																			<td><?php echo $book[$i]['author'];?></td>
																			<td><?php echo $book[$i]['title'];?></td>
																			<td><?php echo $book[$i]['category'];?></td>
																			<td><?php $x=0; for ($a=0; $a < count($copy); $a++) { 
																				if ($book[$i]['title']==$copy[$a]['parent']) {
																					if ($copy[$a]['available']==1) {
																						$x=$x+1;
																					}
																				}
																			} echo$x;?></td>
																			<td>
																			<div class="btn-group">
																				<button class="btn btn-primary" data-toggle="modal" data-target="#modalview" onclick='update_modal(<?php echo json_encode($book[$i]); ?>)'>
																						View
																				</button>
																				<button class="btn btn-primary" data-toggle="modal" data-target="#modal2">
																						Edit
																				</button>
																			</div>
																		</td>
																	</tr>
																	<?php }?>
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
																				<h5 id="modal-cn"></h5>
																			</div>
																			<div class="form-group">
																				<label for="author">Author:</label>
																				<h5 id="modal-au"></h5>
																			</div>
																			<div class="form-group">
																				<label for="title">Title:</label>
																				<h5 id="modal-ti"></h5>
																			</div>
																			<div class="form-group">
																				<label for="access">Category:</label>
																				<h5 id="modal-ca"></h5>
																			</div>
																	</form>
																	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addcopymodal">Add copy/ies</button>
																	<table width="100%" class="table table-striped table-bordered table-hover table-responsive" id="myTable">
																		<thead>
																			<tr>
																				<th>Parent</th>
																				<th>Accession Number</th>
																				<th>Status</th>
																				<th>Actions</th>
																			</tr>
																		</thead>
																		<tbody id="myTableBody">
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
																			<div class="form-group">
																				<label for="callnumber">Borrower:</label>
																				<input type="text" class="form-control" id="stud" placeholder="Enter Student ID">
										                                        <label for="name">Accession No.:</label>
										                                        <input type="text" class="form-control" id="acc" placeholder="Enter Accession Number">
																			</div>
																			<button type="submit" class="btn btn-success btn-block" onclick="borrow()">Submit</button> 
																</div>
																<div class="modal-footer">
																	<button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
																</div>
															</div>
														</div>
													</div>
													<div class="modal fade" id="addcopymodal" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 style="color:red;"><span class="glyphicon glyphicon-book"></span> Add another copy</h4>
                                  </div>
                                  <div class="modal-body">
                                      <div class="form-group">
                                        <label for="access">Starting Accession no:</label>
                                        <input type="text" class="form-control" id="ean" name="ean" placeholder="Enter Accession no">
                                      </div>
                                      <div class="form-group">
                                        <label for="nocopies">No. of copies:</label>
                                        <input type="text" class="form-control" id="enc" name="enc" placeholder="Enter No of copies">
                                      </div>
                                      <button type="submit" class="btn btn-success btn-block" onclick="addcopy()"> Submit</button>
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
																		<form method="POST" action="editbook.php">
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
		var copy = <?php echo json_encode($copy) ?>;
		$(document).ready(function(){ 
			$("#myBtn").click(function(){
			$("#myModal").modal();
		});
		});
		function update_modal(book)
		{
			$("#modal-cn").text(book.call_number);
			$("#modal-au").text(book.author);
			$("#modal-ti").text(book.title);
			$("#modal-ca").text(book.category);
		    var str="";
		    for (var i = copy.length - 1; i >= 0; i--) {
	    		if (copy[i]["parent"]==book.title) {
	          	if(copy[i]['available']==1){
		            var x="Available";
		        }
	          	else{ 
		            var x="Unavailable";
		        }
	          	str+=('<tr><td>'+copy[i]["parent"]+'</td><td>'+copy[i]["access_number"]+'</td><td>'+x+'</td><td><a><button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalborrow">Borrow</button></a></td></tr>');
	        }	      $('#myTable tbody').html(str);
	    }
		}
		function borrow(){
			var x = document.getElementById("modal-cn").innerHTML;
			var y = document.getElementById("acc").value;
			var z = document.getElementById("stud").value;
			window.location.href = "borrow.php?cn="+x+"&stud="+z+"&acc="+y;
		}
		function addcopy(){
			var x = document.getElementById("modal-ti").innerHTML;
			var y = document.getElementById("ean").value;
			var z = document.getElementById("enc").value;
			window.location.href = "addcopy.php?ti="+x+"&ean="+y+"&enc="+z;
		}
		</script>

</body>

</html>
