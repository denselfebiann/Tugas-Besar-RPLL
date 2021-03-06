<?php
	session_start();
	if(ISSET($_SESSION['login'])){
		include("../function/connect.php");
		$idBuyer = $_COOKIE['idBuyer'];
		$sql = "SELECT * FROM buyer WHERE idBuyer = " . $idBuyer;
		$result = mysqli_query($con, $sql);
		$counter = 0;
		while($row = mysqli_fetch_array($result)){
			$idKeranjang = $row['idKeranjang'];
		}
		$sql = "SELECT * FROM isi_keranjang WHERE idKeranjang = " . $idKeranjang;
		$result = mysqli_query($con, $sql);
		while($row = mysqli_fetch_array($result)){
			$counter++;
		}
		$str = "Welcome To Wrap Thrift: " . $_COOKIE['namaUser'];
	}else{
		$str = "Welcome To Wrap Thrift";
	}
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
                                    <i class="fab fa-opencart"></i> <?php echo $str; ?>
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
                        <li class="dropdown megamenu-fw">
                            <a href="shop.php" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Product</a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Top</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="shop.php">Jackets</a></li>
                                                    <li><a href="shop.php">Shirts</a></li>
                                                    <li><a href="shop.php">Sweaters & Cardigans</a></li>
                                                    <li><a href="shop.php">T-shirts</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Bottom</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="shop.php">Swimwear</a></li>
                                                    <li><a href="shop.php">Skirts</a></li>
                                                    <li><a href="shop.php">Jeans</a></li>
                                                    <li><a href="shop.php">Trousers</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Clothing</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="shop.php">Top Wear</a></li>
                                                    <li><a href="shop.php">Party wear</a></li>
                                                    <li><a href="shop.php">Bottom Wear</a></li>
                                                    <li><a href="shop.php">Indian Wear</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Accessories</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="shop.php">Bags</a></li>
                                                    <li><a href="shop.php">Sunglasses</a></li>
                                                    <li><a href="shop.php">Fragrances</a></li>
                                                    <li><a href="shop.php">Wallets</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                    </div>
                                    <!-- end row -->
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown active">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">SHOP</a>
                            <ul class="dropdown-menu">
                                <li><a href="cart.php">Cart</a></li>
                                <li><a href="checkout.php">Checkout</a></li>
                                <li><a href="my-account.php">My Account</a></li>
                                <li><a href="wishlist.php">Wishlist</a></li>
                                <li><a href="shop-detail.php">Shop Detail</a></li>
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
                            <span class="badge"><?php echo $counter; ?></span>
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
                        <?php
							$total = 0;
							$sql = "SELECT b.namaBarang, b.hargaBarang, b.gambarBarang, a.qytBarang FROM isi_keranjang a, barang b WHERE a.idKeranjang = " . $idKeranjang . " AND a.idBarang = b.idBarang";
							$result = mysqli_query($con, $sql);
							while($row = mysqli_fetch_array($result)){
								$total = $total + ($row['qytBarang'] * $row['hargaBarang']);
								echo "
									<li>
										<a href = '#' class = 'photo'><img src = 'images/" . $row['gambarBarang'] . "' class = 'cart-thumb' alt = '' /></a>
										<h6><a href = '#'>" . $row['namaBarang'] . "</a></h6>
										<p>" . $row['qytBarang'] . "x - <span class = 'price'>Rp. " . $row['hargaBarang'] . "</span></p>
									</li>
								";
							}
							
						?>
						<li class="total">
							<?php echo "Total: Rp. " . $total; ?>
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
                    <h2>Shop Detail</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Shop Detail </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Detail  -->
	<form name = "addToCart" method = "POST" action = "../function/run.php">
		<div class="shop-detail-box-main">
			<div class="container">
				<div class="row">
						<?php
							$idBarang = $_GET['idBarang'];
							$sql = "SELECT * FROM barang WHERE idBarang = " . $idBarang;
							$result = mysqli_query($con, $sql);
							while($row = mysqli_fetch_array($result)){
								$namaBarang = $row['namaBarang'];
								$hargaBarang = $row['hargaBarang'];
								$deskripsiBarang = $row['deskripsiBarang'];
								$jumlahBarang = $row['jumlahBarang'];
								$gambarBarang = $row['gambarBarang'];
								
								echo "
									<div class='col-xl-5 col-lg-5 col-md-6'>
										<div id='carousel-example-1' class='single-product-slider carousel slide' data-ride='carousel'>
											<div class='carousel-item active'> <img class='d-block w-100' src='images/" . $gambarBarang . "' alt='First slide'> </div>
										</div>
									</div>
									<div class='col-xl-7 col-lg-7 col-md-6'>
										<div class='single-product-details'>
											<h2>" . $namaBarang . "</h2>
											<h5> <del>Rp. " . ($hargaBarang + 10000) . "</del> Rp. " . $hargaBarang . "</h5>
											<p class = 'available-stock'><span> " . $jumlahBarang . " tersedia</span>
											<p>
												<h4>Short Description: </h4>
												<p>" . $deskripsiBarang . "</p>
												<ul>
													<li>
														<div class = 'form-group size-st'>
															<label class = 'size-label'>Size</label>
															<select id = 'basic' class = 'selectpicker show-tick form-control' name = 'size'>
																<option disabled>Size</option>
																<option value = '0'>S</option>
																<option value = '1'>M</option>
																<option value = '2'>L</option>
																<option value = '3'>XL</option>
															</select>
														</div>
													</li>
													<li>
														<div class = 'form-group quantity-box'>
															<label class = 'control-label'>	Quantity</label>
															<input class = 'form-control' value = '0' min = '0' max = '" . $jumlahBarang . "' type = 'number' name = 'jumlahBarang'>
															<input type = 'hidden' name = 'idBarang' value = " . $idBarang . ">
															<input type = 'hidden' name = 'idKeranjang' value = " . $idKeranjang . ">
														</div>
													</li>
												</ul>
												<div class = 'price-box-bar'>
													<div class = 'cart-and-bay-btn'>
														<button class = 'btn hvr-hover' type = 'submit' data-fancybox-close = '' name = 'addToCart'>Add to Cart</button>
													</div>
												</div>
												<div class = 'add-to-btn'>
													<div class = 'share-bar'>
														<a class = 'btn hvr-hover' href = '#'><i class = 'fab fa-facebook' aria-hidden = 'true'></i></a>
														<a class = 'btn hvr-hover' href = '#'><i class = 'fab fa-google-plus' aria-hidden = 'true'></i></a>
														<a class = 'btn hvr-hover' href = '#'><i class = 'fab fa-twitter' aria-hidden = 'true'></i></a>
														<a class = 'btn hvr-hover' href = '#'><i class = 'fab fa-pinterest-p' aria-hidden = 'true'></i></a>
														<a class = 'btn hvr-hover' href = '#'><i class = 'fab fa-whatsapp' aria-hidden = 'true'></i></a>
													</div>
												</div>
											</p>
										</div>
									</div>
								";
							}
						?>
				</div>
			</div>
		</div>
	</form>
    <!-- End Cart -->

    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-01.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-02.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-03.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-04.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-06.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-07.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-08.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-09.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
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
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>