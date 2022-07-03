<?php
  require("../controllers/product_controller.php");
  
	require("../settings/core.php");

	if(is_user_logged_in()){
		echo "You are already logged in";
		exit();
	}
?>



<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to AaronVisuals</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/Design_page.css">

    <link href="https://fonts.googleapis.com/css?family=Heebo:400,500,700|Playfair+Display:700" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/styles.css" rel="stylesheet" />

</head>
<body class="is-boxed has-animations">
     <!-- Navigation-->
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">AaronVisuals</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                       
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../actions/logout.php">Logout</a></li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        
        <header class="site-header">
            
            
                    
                
            
        </header>

      
           
		
		</div>
		

                <div class="container">
                    
                    <div class="hero-inner">
						<div class="hero-copy">
	                    
							
                            
	                        <div class="hero-copy">
                   

								        
											
                            <div class="hero-app-dots hero-app-dots-1">
                                
								<svg width="124" height="75" xmlns="http://www.w3.org/2000/svg">
								    <g fill="none" fill-rule="evenodd">
								        <path fill="#FFF" d="M33.392 0l3.624 1.667.984 3.53-1.158 3.36L33.392 10l-3.249-1.639L28 5.196l1.62-3.674z"/>
								        <path fill="#7487A3" d="M74.696 3l1.812.833L77 5.598l-.579 1.68L74.696 8l-1.624-.82L72 5.599l.81-1.837z"/>
								        <path fill="#556B8B" d="M40.696 70l1.812.833.492 1.765-.579 1.68-1.725.722-1.624-.82L38 72.599l.81-1.837z"/>
								        <path fill="#7487A3" d="M4.314 37l2.899 1.334L8 41.157l-.926 2.688L4.314 45l-2.6-1.31L0 41.156l1.295-2.94zM49.314 32l2.899 1.334.787 2.823-.926 2.688L49.314 40l-2.6-1.31L45 36.156l1.295-2.94z"/>
								        <path fill="#556B8B" d="M99.696 56l1.812.833.492 1.765-.579 1.68-1.725.722-1.624-.82L97 58.599l.81-1.837zM112.696 37l1.812.833.492 1.765-.579 1.68-1.725.722-1.624-.82L110 39.599l.81-1.837zM82.696 37l1.812.833.492 1.765-.579 1.68-1.725.722-1.624-.82L80 39.599l.81-1.837zM122.618 57l1.087.5.295 1.059-.347 1.008-1.035.433-.975-.492-.643-.95.486-1.101z"/>
								    </g>
								</svg>
                            </div>
							<div class="hero-app-dots hero-app-dots-2">
								<svg width="124" height="75" xmlns="http://www.w3.org/2000/svg">
								    <g fill="none" fill-rule="evenodd">
								        <path fill="#556B8B" d="M33.392 0l3.624 1.667.984 3.53-1.158 3.36L33.392 10l-3.249-1.639L28 5.196l1.62-3.674zM74.696 3l1.812.833L77 5.598l-.579 1.68L74.696 8l-1.624-.82L72 5.599l.81-1.837zM40.696 70l1.812.833.492 1.765-.579 1.68-1.725.722-1.624-.82L38 72.599l.81-1.837zM4.314 37l2.899 1.334L8 41.157l-.926 2.688L4.314 45l-2.6-1.31L0 41.156l1.295-2.94zM49.314 32l2.899 1.334.787 2.823-.926 2.688L49.314 40l-2.6-1.31L45 36.156l1.295-2.94z"/>
								        <path fill="#FFF" d="M99.696 56l1.812.833.492 1.765-.579 1.68-1.725.722-1.624-.82L97 58.599l.81-1.837z"/>
								        <path fill="#556B8B" d="M112.696 37l1.812.833.492 1.765-.579 1.68-1.725.722-1.624-.82L110 39.599l.81-1.837z"/>
								        <path fill="#FFF" d="M82.696 37l1.812.833.492 1.765-.579 1.68-1.725.722-1.624-.82L80 39.599l.81-1.837z"/>
								        <path fill="#556B8B" d="M122.618 57l1.087.5.295 1.059-.347 1.008-1.035.433-.975-.492-.643-.95.486-1.101z"/>
								    </g>
								</svg>
							</div>
						</div> 
                    </div>
                </div>
            </section>

            <section class="features section">
                <div class="container">
                <header class="bg-dark py-5" style="">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Shop in style</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Get the Lastest Room Posters</p>
                </div>
            </div>
        </header>
        <!-- Section-->
       
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php

                    $search=$_GET['Search'];
                  

                        $product_items = get_all_product_search_ctr($search);



                        //         //for each  to make a loop to display all the items in the brand 
                            foreach ($product_items as $product) {


                        ?>
                   
                    
                    <div class="col mb-5" >
                        <div class="card h-100" style="width:300px; height:850px">

                       
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src= "<?php echo $product["product_image"]?>" style="width:300px; height:350px"/>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                <?php echo $product["product_title"] ?>
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Special Item</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                   GH¢<?php echo $product["product_price"] ?>
                                </div>
                            </div>
                            <!-- Product actions-->
                          
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <form action="one_view.php" method="GET">
                                <input Type="hidden" name="id" value="<?php echo $product["product_id"]?>">
                            <div class="text-center"><input type="submit" value="Show more"a class="btn btn-outline-dark mt-auto" name="Login_btn"></a></input></div>
                            </form>
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                        
                    </div>
                  
   
                    <?php }?>
                
                </div>
            </div>
      

      
        </section>
       
        
       \
         <!-- Bootstrap core JS--> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../js/scripts.js"></script>
                    
					<div class="features-inner section-inner has-bottom-divider">
                        
                        
					
                        <div class="features-wrap">
                            
                            <div class="feature is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<svg width="64" height="64" src="images/logo.png">
										    <defs>
										        <linearGradient x1="0%" y1="100%" x2="50%" y2="0%" id="feature-1-a">
										            <stop stop-color="#F9425F" stop-opacity=".8" offset="0%"/>
										            <stop stop-color="#47A1F9" stop-opacity=".16" offset="100%"/>
										        </linearGradient>
										        <linearGradient x1="50%" y1="100%" x2="50%" y2="0%" id="feature-1-b">
										            <stop stop-color="#FDFFDA" offset="0%"/>
										            <stop stop-color="#F97059" stop-opacity=".798" offset="49.935%"/>
										            <stop stop-color="#F9425F" stop-opacity="0" offset="100%"/>
										        </linearGradient>
										    </defs>
										    <g fill="none" fill-rule="evenodd">
										        <path d="M24 48H0V24C0 10.745 10.745 0 24 0h24v24c0 13.255-10.745 24-24 24" fill="url(#feature-1-a)"/>
										        <path d="M40 64H16V40c0-13.255 10.745-24 24-24h24v24c0 13.255-10.745 24-24 24" fill="url(#feature-1-b)"/>
										    </g>
										</svg>
                                    </div>
                                   
                                </div>
                            </div>
							<div class="feature is-revealing">
                                
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<svg width="68" height="64" src="images/logo.png">
										    <defs>
										        <linearGradient x1="0%" y1="100%" x2="50%" y2="0%" id="feature-2-a">
										            <stop stop-color="#F9425F" stop-opacity=".8" offset="0%"/>
										            <stop stop-color="#47A1F9" stop-opacity=".16" offset="100%"/>
										        </linearGradient>
										        <linearGradient x1="50%" y1="100%" x2="50%" y2="0%" id="feature-2-b">
										            <stop stop-color="#FDFFDA" offset="0%"/>
										            <stop stop-color="#F97059" stop-opacity=".798" offset="49.935%"/>
										            <stop stop-color="#F9425F" stop-opacity="0" offset="100%"/>
										        </linearGradient>
										    </defs>
										    <g fill="none" fill-rule="evenodd">
										        <path d="M9.941 63.941v-24c0-13.255 10.745-24 24-24h24v24c0 13.255-10.745 24-24 24h-24z" fill="url(#feature-2-a)" transform="rotate(45 33.941 39.941)"/>
										        <path d="M16 0v24c0 13.255 10.745 24 24 24h24V24C64 10.745 53.255 0 40 0H16z" fill="url(#feature-2-b)"/>
										    </g>
										</svg>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="feature is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<svg width="64" height="64" xmlns="http://www.w3.org/2000/svg">
										    <defs>
										        <linearGradient x1="50%" y1="100%" x2="50%" y2="43.901%" id="feature-3-a">
										            <stop stop-color="#F97059" stop-opacity=".798" offset="0%"/>
										            <stop stop-color="#F9425F" stop-opacity="0" offset="100%"/>
										        </linearGradient>
										        <linearGradient x1="58.893%" y1="100%" x2="58.893%" y2="18.531%" id="feature-3-b">
										            <stop stop-color="#F9425F" stop-opacity=".8" offset="0%"/>
										            <stop stop-color="#47A1F9" stop-opacity="0" offset="100%"/>
										        </linearGradient>
										        <linearGradient x1="50%" y1="100%" x2="50%" y2="0%" id="feature-3-c">
										            <stop stop-color="#FDFFDA" offset="0%"/>
										            <stop stop-color="#F97059" stop-opacity=".798" offset="49.935%"/>
										            <stop stop-color="#F9425F" stop-opacity="0" offset="100%"/>
										        </linearGradient>
										    </defs>
										    <g fill="none" fill-rule="evenodd">
										        <path fill="url(#feature-3-a)" opacity=".32" d="M0 24h64v40H0z"/>
										        <path fill="url(#feature-3-b)" d="M40 24H24L0 64h64z"/>
										        <path d="M10 10v22c0 12.15 9.85 22 22 22h22V32c0-12.15-9.85-22-22-22H10z" fill="url(#feature-3-c)" transform="rotate(45 32 32)"/>
										    </g>
										</svg>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="feature is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<svg width="64" height="64" xmlns="http://www.w3.org/2000/svg">
										    <defs>
										        <linearGradient x1="0%" y1="100%" x2="50%" y2="0%" id="feature-4-a">
										            <stop stop-color="#F9425F" stop-opacity=".8" offset="0%"/>
										            <stop stop-color="#47A1F9" stop-opacity=".16" offset="100%"/>
										        </linearGradient>
										        <linearGradient x1="50%" y1="100%" x2="50%" y2="0%" id="feature-4-b">
										            <stop stop-color="#FDFFDA" offset="0%"/>
										            <stop stop-color="#F97059" stop-opacity=".798" offset="49.935%"/>
										            <stop stop-color="#F9425F" stop-opacity="0" offset="100%"/>
										        </linearGradient>
										    </defs>
										    <g fill="none" fill-rule="evenodd">
										        <path d="M24 64H0V40c0-13.255 10.745-24 24-24h24v24c0 13.255-10.745 24-24 24" fill="url(#feature-4-a)" transform="matrix(-1 0 0 1 48 0)"/>
										        <path d="M40 48H16V24C16 10.745 26.745 0 40 0h24v24c0 13.255-10.745 24-24 24" fill="url(#feature-4-b)"/>
										    </g>
										</svg>
                                    </div>
                                    
                                </div>
                            </div>
							<div class="feature is-revealing">
                                
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<svg width="64" height="64" xmlns="http://www.w3.org/2000/svg">
										    <defs>
										        <linearGradient x1="0%" y1="100%" x2="50%" y2="0%" id="feature-5-a">
										            <stop stop-color="#F9425F" stop-opacity=".8" offset="0%"/>
										            <stop stop-color="#47A1F9" stop-opacity=".16" offset="100%"/>
										        </linearGradient>
										        <linearGradient x1="50%" y1="100%" x2="50%" y2="0%" id="feature-5-b">
										            <stop stop-color="#FDFFDA" offset="0%"/>
										            <stop stop-color="#F97059" stop-opacity=".798" offset="49.935%"/>
										            <stop stop-color="#F9425F" stop-opacity="0" offset="100%"/>
										        </linearGradient>
										    </defs>
										    <g fill="none" fill-rule="evenodd">
										        <path d="M24 63H0V39c0-13.255 10.745-24 24-24h24v24c0 13.255-10.745 24-24 24" fill="url(#feature-5-a)" transform="matrix(-1 0 0 1 48 0)"/>
										        <path d="M40 48H16V24C16 10.745 26.745 0 40 0h24v24c0 13.255-10.745 24-24 24" fill-opacity=".24" fill="url(#feature-5-a)" transform="matrix(-1 0 0 1 80 0)"/>
										        <path d="M10.113 10.113v22c0 12.15 9.85 22 22 22h22v-22c0-12.15-9.85-22-22-22h-22z" fill="url(#feature-5-b)" transform="rotate(45 32.113 32.113)"/>
										    </g>
										</svg>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="feature is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<svg width="64" height="64" xmlns="http://www.w3.org/2000/svg">
										    <defs>
										        <linearGradient x1="50%" y1="100%" x2="50%" y2="0%" id="feature-6-a">
										            <stop stop-color="#FDFFDA" offset="0%"/>
										            <stop stop-color="#F97059" stop-opacity=".798" offset="49.935%"/>
										            <stop stop-color="#F9425F" stop-opacity="0" offset="100%"/>
										        </linearGradient>
										        <linearGradient x1="58.893%" y1="100%" x2="58.893%" y2="18.531%" id="feature-6-b">
										            <stop stop-color="#F9425F" stop-opacity=".8" offset="0%"/>
										            <stop stop-color="#47A1F9" stop-opacity="0" offset="100%"/>
										        </linearGradient>
										    </defs>
										    <g fill="none" fill-rule="evenodd">
										        <path d="M24 48H0V24C0 10.745 10.745 0 24 0h24v24c0 13.255-10.745 24-24 24" fill="url(#feature-6-a)"/>
										        <path fill-opacity=".64" fill="url(#feature-6-b)" d="M24 29.229h40V64H0z"/>
										    </g>
										</svg>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

       

        <footer class="site-footer">
            <div class="container">
                <div class="site-footer-inner has-top-divider">
                    <div class="brand footer-brand">
                        <a href="#">
							<svg width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
								<title>Aaronvisualsl</title>
								<defs>
									<linearGradient x1="0%" y1="100%" x2="50%" y2="0%" id="logo-footer-a">
										<stop stop-color="#F9425F" stop-opacity=".8" offset="0%"/>
										<stop stop-color="#47A1F9" stop-opacity=".16" offset="100%"/>
									</linearGradient>
									<linearGradient x1="50%" y1="100%" x2="50%" y2="0%" id="logo-footer-b">
										<stop stop-color="#FDFFDA" offset="0%"/>
										<stop stop-color="#F97059" stop-opacity=".798" offset="49.935%"/>
										<stop stop-color="#F9425F" stop-opacity="0" offset="100%"/>
									</linearGradient>
								</defs>
								<g fill="none" fill-rule="evenodd">
									<path d="M22 19.22c6.627 0 9.593-6.415 9.593-13.042C31.593-.45 28.627.007 22 .007S10 2.683 10 9.31c0 6.628 5.373 9.91 12 9.91z" fill="url(#logo-footer-a)"/>
									<path d="M13.666 31.889c7.547 0 10.924-7.307 10.924-14.854 0-7.547-3.377-7.027-10.924-7.027C6.118 10.008 0 13.055 0 20.603c0 7.547 6.118 11.286 13.666 11.286z" fill="url(#logo-footer-b)" transform="matrix(-1 0 0 1 24.59 0)"/>
								</g>
							</svg>
                        </a>
                    </div>
                    <ul class="footer-links list-reset">
                        <li>
                            <a href="#">Contact</a>
                        </li>
                        <li>
                            <a href="#">About us</a>
                        </li>
                        <li>
                            <a href="#">FAQ's</a>
                        </li>
                        <li>
                            <a href="#">Support</a>
                        </li>
                    </ul>
                    <ul class="footer-social-links list-reset">
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Facebook</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.023 16L6 9H3V6h3V4c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V6H13l-1 3H9.28v7H6.023z" fill="#FFF"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Twitter</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 3c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4C.7 7.7 1.8 9 3.3 9.3c-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4C15 4.3 15.6 3.7 16 3z" fill="#FFF"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Google</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.9 7v2.4H12c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C11.5 1.7 9.9 1 8 1 4.1 1 1 4.1 1 8s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H7.9z" fill="#FFF"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <div class="footer-copyright">&copy; 2022 Aaronvisuals, all rights reserved</div>
                </div>
            </div>
        </footer>
   

    <script src="../js/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
</body>
</html>

<body>

</body>
</html>
	
                            