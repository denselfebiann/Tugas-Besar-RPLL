<?php
	if(ISSET($_POST['edit'])){
?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Wrap Thrift - The Best Thriftin' Website</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            <ul class="offer-box">
                                <li>
                                    <i class="fab fa-opencart"></i> Welcome To Wrap Thrift
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> The best Thriftin' Website
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="custom-select-box">
                        <select id="basic" class="selectpicker show-tick form-control" data-placeholder="Rp. IDR">
						<option>Rp. IDR</option>
						<option>$ USD</option>
					</select>
                    </div>
                    <div class="right-phone-box">
                        <p>Call US :- <a href="#"> +62 12345678</a></p>
                    </div>
                    <div class="our-link">
                        <ul>
                            <li><a href="my-account.php">My Account</a></li>
                            <li><a href="contact-us.php">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                        <li class="dropdown active">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">SHOP</a>
                            <ul class="dropdown-menu">
                                <li><a href="data.php">Data Product</a></li>
                                <li><a href="my-account.php">My Account</a></li>
                                <li><a href="verif.php">Verification</a></li>
                                <li><a href="add.php">Add Product</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="service.php">Our Service</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu"><a href="#">
						<i class="fa fa-shopping-bag"></i>
                            <span class="badge">3</span>
					</a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-01.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Delica omtantur </a></h6>
                            <p>1x - <span class="price">$80.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-02.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Omnes ocurreret</a></h6>
                            <p>1x - <span class="price">$60.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-03.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Agam facilisis</a></h6>
                            <p>1x - <span class="price">$40.00</span></p>
                        </li>
                        <li class="total">
                            <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                            <span class="float-right"><strong>Total</strong>: $180.00</span>
                        </li>
                    </ul>
                </li>
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Add Product</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Add Product</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
	<!-- Start Cart  -->
    <div class="wishlist-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
						<form name='blabla' method='post' action = 'run.php'>
							
							<table class="table" align = "center">
								<?php
									$idBarang = $_POST['idBarang'];
									include("../controller/php/function.php");
									include("../controller/php/connect.php");
									$result = getBarang($con, $idBarang);
									
									while($row = mysqli_fetch_array($result)){
										$namaBarang = $row['namaBarang'];
										$deskripsiBarang = $row['deskripsiBarang'];
										$hargaBarang = $row['hargaBarang'];
										$jumlahBarang = $row['jumlahBarang'];
										$gambarBarang = $row['gambarBarang'];
										echo "
											<center><img src = 'images/" . $gambarBarang . "' alt = '' style = 'width:250px; height:250px;'/></center><br>
											<input type = 'hidden' name = 'idBarang' value = " . $idBarang . ">
										<tr>
											<td><label for = 'namaBarang'><b>Nama Barang</b></label></td>
											<td><input type = 'text' name = 'namaBarang' value = '" . $namaBarang . "' style = 'width: 437px;'></td>
										</tr>
										<tr>
											<td><label for = 'deskripsiBarang'><b>Deskripsi Barang</b></label></td>
											<td><textarea name = 'deskripsiBarang' cols = '50'>" . $deskripsiBarang . "</textarea></td>
										</tr>
										<tr>
											<td><label for = 'hargaBarang'><b>Harga Barang</b></label></td>
											<td><input type = 'text' name = 'hargaBarang' value = '" . $hargaBarang . "' style = 'width: 437px;'></td>
										</tr>
										<tr>
											<td><label for = 'jumlahBarang'><b>Jumlah Barang</b></label></td>
											<td><input type = 'text' name = 'jumlahBarang' value = '" . $jumlahBarang . "' style = 'width: 437px;'></td>
										</tr>
										";
									}
								?>
							</table>
							<center>
								<input type="submit" class="btn btn-primary" name = "editBarang" value= "Edit Data">
							</center>
						</form>
					</div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Cart -->
    <!-- Start Instagram Feed  -->
    <div class="instagram-box ">
        <div class="main-instagram owl-carousel owl-theme ">
            <div class="item ">
                <div class="ins-inner-box ">
                    <img src="images/2.png " alt=" " />
                    <div class="hov-in ">
                        <a href="# "><i class="fab fa-instagram "></i></a>
                    </div>
                </div>
            </div>
            <div class="item ">
                <div class="ins-inner-box ">
                    <img src="images/3.png " alt=" " />
                    <div class="hov-in ">
                        <a href="# "><i class="fab fa-instagram "></i></a>
                    </div>
                </div>
            </div>
            <div class="item ">
                <div class="ins-inner-box ">
                    <img src="images/2.png  " alt=" " />
                    <div class="hov-in ">
                        <a href="# "><i class="fab fa-instagram "></i></a>
                    </div>
                </div>
            </div>
            <div class="item ">
                <div class="ins-inner-box ">
                    <img src="images/3.png " alt=" " />
                    <div class="hov-in ">
                        <a href="# "><i class="fab fa-instagram "></i></a>
                    </div>
                </div>
            </div>
            <div class="item ">
                <div class="ins-inner-box ">
                    <img src="images/2.png  " alt=" " />
                    <div class="hov-in ">
                        <a href="# "><i class="fab fa-instagram "></i></a>
                    </div>
                </div>
            </div>
            <div class="item ">
                <div class="ins-inner-box ">
                    <img src="images/3.png " alt=" " />
                    <div class="hov-in ">
                        <a href="# "><i class="fab fa-instagram "></i></a>
                    </div>
                </div>
            </div>
            <div class="item ">
                <div class="ins-inner-box ">
                    <img src="images/2.png  " alt=" " />
                    <div class="hov-in ">
                        <a href="# "><i class="fab fa-instagram "></i></a>
                    </div>
                </div>
            </div>
            <div class="item ">
                <div class="ins-inner-box ">
                    <img src="images/3.png " alt=" " />
                    <div class="hov-in ">
                        <a href="# "><i class="fab fa-instagram "></i></a>
                    </div>
                </div>
            </div>
            <div class="item ">
                <div class="ins-inner-box ">
                    <img src="images/2.png  " alt=" " />
                    <div class="hov-in ">
                        <a href="# "><i class="fab fa-instagram "></i></a>
                    </div>
                </div>
            </div>
            <div class="item ">
                <div class="ins-inner-box ">
                    <img src="images/3.png " alt=" " />
                    <div class="hov-in ">
                        <a href="# "><i class="fab fa-instagram "></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Instagram Feed  -->


    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>About ThewayShop</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Customer Service</a></li>
                                <li><a href="#">Our Sitemap</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Delivery Information</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: Michael I. Days 3756 <br>Preston Street Wichita,<br> KS 67213 </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-888705770">+1-888 705 770</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">contactinfo@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2018 <a href="#">ThewayShop</a> Design By :
            <a href="https://html.design/">html design</a></p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="../controller/js/jquery-3.2.1.min.js"></script>
    <script src="../controller/js/popper.min.js"></script>
    <script src="../controller/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="../controller/js/jquery.superslides.min.js"></script>
    <script src="../controller/js/bootstrap-select.js"></script>
    <script src="../controller/js/inewsticker.js"></script>
    <script src="../controller/js/bootsnav.js."></script>
    <script src="../controller/js/images-loded.min.js"></script>
    <script src="../controller/js/isotope.min.js"></script>
    <script src="../controller/js/owl.carousel.min.js"></script>
    <script src="../controller/js/baguetteBox.min.js"></script>
    <script src="../controller/js/form-validator.min.js"></script>
    <script src="../controller/js/contact-form-script.js"></script>
    <script src="../controller/js/custom.js"></script>
</body>
</html>
<?php
	}else if(ISSET($_POST['removeBarang'])){
		$con = mysqli_connect("localhost", "root", "", "wrap_database");
		$idBarang = $_POST['idBarang'];
		$sql = "DELETE from barang WHERE idBarang = " . $idBarang;
		if(mysqli_query($con, $sql)){
			echo "<script>alert('Delete Successful');document.location = 'data.php';</script>";
		}else{
			echo "<script>alert('Delete Unsuccessful');document.location = 'data.php';</script>";
		}
	}
?>