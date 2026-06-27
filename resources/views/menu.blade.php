<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="author" content="Sarab">
      <meta name="description" content="Sarab - Fast Food & Restaurant HTML Template">
      <title>Sarab - Fast Food & Restaurant HTML Template</title>
      <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Poppins:wght@300;400;500;600;700&family=Dancing+Script:wght@700&display=swap" rel="stylesheet"/>
      <!-- Bootstrap 5.3 -->
      <link href="css/bootstrap.min.css" rel="stylesheet"/>
      <!-- AOS Animate on Scroll -->
      <link href="css/aos.css" rel="stylesheet"/>
      <!-- Swiper -->
      <link href="css/swiper-bundle.min.css" rel="stylesheet"/>
      <!-- all min css -->
      <link rel="stylesheet" href="css/all.min.css"/>
      <!-- magnific CSS -->
      <link rel="stylesheet" href="css/magnific-popup.css"/>
      <!-- Style CSS -->
      <link rel="stylesheet" href="css/style.css" />
   </head>
   <body>
      <!-- ============================================================
         TOP BAR
         ============================================================ -->
      <div id="topbar">
         <div class="container">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
               <div class="top-contact d-flex flex-wrap">
                  <span><i class="fas fa-phone-alt"></i>08165021348</span>
                  <span><i class="fas fa-envelope"></i>hello@ajebo plush bites.com</span>
                  <span><i class="fas fa-map-marker-alt"></i>Sarki Street Nassarawa Kaduna</span>
               </div>
               <div class="d-flex align-items-center gap-3">
                  <span class="ttag"><i class="fas fa-fire me-1"></i>Delivery(customers decision)</span>
                  <div class="tsoc">
                     <a href="#"><i class="fab fa-facebook-f"></i></a>
                     <a href="#"><i class="fab fa-instagram"></i></a>
                     <a href="#"><i class="fab fa-tiktok"></i></a>
                     <a href="#"><i class="fab fa-youtube"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- ============================================================
         NAVBAR
         ============================================================ -->
      <nav class="navbar navbar-expand-lg" id="nav">
         <div class="container">
            <a class="navbar-brand" href="#">
               <div class="blogo">
                  <div class="bico"><i class="fas fa-utensils"></i></div>
                  <div>
                     <div class="bname">Ajebo<span> Plush Bites</span></div>
                     <div class="bsub">Fast Food & Restaurant</div>
                  </div>
               </div>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
            <i class="fas fa-bars" style="color:var(--primary);font-size:1.35rem;"></i>
            </button>
            <div class="collapse navbar-collapse" id="navmenu">
               <ul class="navbar-nav mx-auto">
                  <li class="nav-item"><a class="nav-link " href="/">Home</a></li>
                  <li class="nav-item"><a class="nav-link " href="/about">About</a></li>
                  <li class="nav-item"><a class="nav-link active" href="/menu">Menu</a></li>
                  <li class="nav-item"><a class="nav-link" href="/chefs">Chefs</a></li>
                  <li class="nav-item"><a class="nav-link" href="/reservation">Reservation</a></li>
                  <li class="nav-item"><a class="nav-link" href="/testimonials">Reviews</a></li>
                  <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
               </ul>
               <div class="d-flex align-items-center gap-1">
                  <!-- FIX 1: Search button -->
                  <button id="navSearchBtn" title="Search"><i class="fas fa-search"></i></button>
                  <a href="#menu" class="nav-link nav-cta"><i class="fas fa-shopping-bag me-1"></i>Order Now</a>
               </div>
            </div>
         </div>
      </nav>

      <!-- Page Banner -->
       <section style="background:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0.6)), url('{{asset('img/banner-img.jpg') }}') center/cover no-repeat;padding:100px 0; text-align:center;">
        <h1 style="color:white;font-size:3rem;font-weight:700;">Our Menu</h1>
        <p style="color:rgba(255,255,255,0.8);">Home &nbsp;>&nbsp; Our Menu</p>
       </section>

       <!-- Menu Section -->
        <section style="padding:80px 0; background:#f9f9f9;">
            <div class="container">
                <div class="text-center mb-5">
                    <h5 style="color:var(--primary);font-family:'Courgette',cursive;">What's Cooking</h5>
                    <h2 style="font-size:2.5rem; font-weight:700;">Our Delicious Menu</h2>
                    <p style="color:#666;">Fresh,tasty and affordable, made with live in Kaduna</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div style="background:white; border-radius:15px;overflow:hidden; box-shadow:0 5px 20px rgba(0,0,0.08);">
                            <div style="height:200px; overflow:hidden;">
                                <img src="{{asset('img/category/7.jpeg') }}" alt="Egg Roll"
                                style="width:100%;height:100%;object-fit:cover;">

                            </div>
                            <div style="padding:200px;">
                                <span style="background:#fff0f0; color:var(--primary); font-size:0.7rem; font-weight:600;padding:3px 10px;border-radius:20px;text-transform:uppercase;">
                                    Snack
                                </span>
                                <h5 style="margin-top:10px; font-weight:700;">Cripsy Egg Roll</h5>
                                <p style="color:#666;font-size:0.9rem;">Golden cripsy egg roll
                                    filled with seasoned goodness a perfect snack anytime.
                                </p>
                                <div style="display:flex;justify-content:space-between;align-items:center; margin-top:15px;">
                                    <span style="color:var(--primary);font-size:1.3rem;font-weight:700;">#500</span>
                                    <button style="background: var(--primary);color:white;border:none;padding:8px 20px; border-radius:20px;font-size:0.85rem;">
                                        Order Now
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4 col-md-6">
                        <div style="background:white; border-radius:15px;overflow:hidden; box-shadow:0 5px 20px rgba(0,0,0.08);">
                            <div style="height:200px; overflow:hidden;">
                                <img src="{{asset('img/category/10.jpeg') }}" alt="Meat Pie"
                                style="width:100%;height:100%;object-fit:cover;">

                            </div>
                            <div style="padding:200px;">
                                <span style="background:#fff0f0; color:var(--primary); font-size:0.7rem; font-weight:600;padding:3px 10px;border-radius:20px;text-transform:uppercase;">
                                    Snack
                                </span>
                                <h5 style="margin-top:10px; font-weight:700;">
                                    Hot Meat Pie 
                                </h5>
                                <p style="color:#666;font-size:0.9rem;">Freshly baked meat pie loaded with seasoned minced meat,
                                    patatoes and carrots.
                                </p>
                                <div style="display:flex;justify-content:space-between;align-items:center; margin-top:15px;">
                                    <span style="color:var(--primary);font-size:1.3rem;font-weight:700;">#700</span>
                                    <button style="background: var(--primary);color:white;border:none;padding:8px 20px; border-radius:20px;font-size:0.85rem;">
                                        Order Now
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div style="background:white; border-radius:15px;overflow:hidden; box-shadow:0 5px 20px rgba(0,0,0.08);">
                            <div style="height:200px; overflow:hidden;">
                                <img src="{{asset('img/category/14.jpeg') }}" alt="Indomie"
                                style="width:100%;height:100%;object-fit:cover;">

                            </div>
                            <div style="padding:200px;">
                                <span style="background:#fff0f0; color:var(--primary); font-size:0.7rem; font-weight:600;padding:3px 10px;border-radius:20px;text-transform:uppercase;">
                                    Meal
                                </span>
                                <h5 style="margin-top:10px; font-weight:700;">
                                    Spicy Indomie
                                </h5>
                                <p style="color:#666;font-size:0.9rem;">Hot spicy indomie noodles cooked to perfection 
                                    the ultimate comfort meal,nutitious and delicious.
                                </p>
                                <div style="display:flex;justify-content:space-between;align-items:center; margin-top:15px;">
                                    <span style="color:var(--primary);font-size:1.3rem;font-weight:700;">#4,000</span>
                                    <button style="background: var(--primary);color:white;border:none;padding:8px 20px; border-radius:20px;font-size:0.85rem;">
                                        Order Now
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div style="background:white; border-radius:15px;overflow:hidden; box-shadow:0 5px 20px rgba(0,0,0.08);">
                            <div style="height:200px; overflow:hidden;">
                                <img src="{{asset('img/category/12.jpeg') }}" alt="Ice Cream"
                                style="width:100%;height:100%;object-fit:cover;">

                            </div>
                            <div style="padding:200px;">
                                <span style="background:#fff0f0; color:var(--primary); font-size:0.7rem; font-weight:600;padding:3px 10px;border-radius:20px;text-transform:uppercase;">
                                    Dessert
                                </span>
                                <h5 style="margin-top:10px; font-weight:700;">
                                    Creamy Ice Cream 
                                </h5>
                                <p style="color:#666;font-size:0.9rem;">Rich,smooth,and creamy ice cream in assorted flavours 
                                    the perfect treat.
                                </p>
                                <div style="display:flex;justify-content:space-between;align-items:center; margin-top:15px;">
                                    <span style="color:var(--primary);font-size:1.3rem;font-weight:700;">#2,000</span>
                                    <button style="background: var(--primary);color:white;border:none;padding:8px 20px; border-radius:20px;font-size:0.85rem;">
                                        Order Now
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div style="background:white; border-radius:15px;overflow:hidden; box-shadow:0 5px 20px rgba(0,0,0.08);">
                            <div style="height:200px; overflow:hidden;">
                                <img src="{{asset('img/category/13.jpeg') }}" alt="Tiger-nut"
                                style="width:100%;height:100%;object-fit:cover;">

                            </div>
                            <div style="padding:200px;">
                                <span style="background:#fff0f0; color:var(--primary); font-size:0.7rem; font-weight:600;padding:3px 10px;border-radius:20px;text-transform:uppercase;">
                                    Drink
                                </span>
                                <h5 style="margin-top:10px; font-weight:700;">
                                    Tiger Nut Drink 
                                </h5>
                                <p style="color:#666;font-size:0.9rem;">Fresh and natural tiger nut drink 
                                    cold,sweet and incredibily refreshing.
                                </p>
                                <div style="display:flex;justify-content:space-between;align-items:center; margin-top:15px;">
                                    <span style="color:var(--primary);font-size:1.3rem;font-weight:700;">#1,500</span>
                                    <button style="background: var(--primary);color:white;border:none;padding:8px 20px; border-radius:20px;font-size:0.85rem;">
                                        Order Now
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div style="background:white; border-radius:15px;overflow:hidden; box-shadow:0 5px 20px rgba(0,0,0.08);">
                            <div style="height:200px; overflow:hidden;">
                                <img src="{{asset('img/category/11.jpeg') }}" alt="Indomie"
                                style="width:100%;height:100%;object-fit:cover;">

                            </div>
                            <div style="padding:200px;">
                                <span style="background:#fff0f0; color:var(--primary); font-size:0.7rem; font-weight:600;padding:3px 10px;border-radius:20px;text-transform:uppercase;">
                                    Snack 
                                </span>
                                <h5 style="margin-top:10px; font-weight:700;">
                                    Delicious Shawarma
                                </h5>
                                <p style="color:#666;font-size:0.9rem;">Stuffed with grilled meat,veggies and sauce 
                                    our shawarma is next level. 
                                </p>
                                <div style="display:flex;justify-content:space-between;align-items:center; margin-top:15px;">
                                    <span style="color:var(--primary);font-size:1.3rem;font-weight:700;">#4,000</span>
                                    <button style="background: var(--primary);color:white;border:none;padding:8px 20px; border-radius:20px;font-size:0.85rem;">
                                        Order Now
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div style="background:white; border-radius:15px;overflow:hidden; box-shadow:0 5px 20px rgba(0,0,0.08);">
                            <div style="height:200px; overflow:hidden;">
                                <img src="{{asset('img/category/8.jpeg') }}" alt="Indomie"
                                style="width:100%;height:100%;object-fit:cover;">

                            </div>
                            <div style="padding:200px;">
                                <span style="background:#fff0f0; color:var(--primary); font-size:0.7rem; font-weight:600;padding:3px 10px;border-radius:20px;text-transform:uppercase;">
                                    Chicken 
                                </span>
                                <h5 style="margin-top:10px; font-weight:700;">
                                    Cripsy Fried Chicken 
                                </h5>
                                <p style="color:#666;font-size:0.9rem;">Crunchy on the outside, tender on the inside 
                                    our fried chicken is irresistable.
                                </p>
                                <div style="display:flex;justify-content:space-between;align-items:center; margin-top:15px;">
                                    <span style="color:var(--primary);font-size:1.3rem;font-weight:700;">#4,000</span>
                                    <button style="background: var(--primary);color:white;border:none;padding:8px 20px; border-radius:20px;font-size:0.85rem;">
                                        Order Now
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div style="background:white; border-radius:15px;overflow:hidden; box-shadow:0 5px 20px rgba(0,0,0.08);">
                            <div style="height:200px; overflow:hidden;">
                                <img src="{{asset('img/category/1.jpg') }}" alt="Indomie"
                                style="width:100%;height:100%;object-fit:cover;">

                            </div>
                            <div style="padding:200px;">
                                <span style="background:#fff0f0; color:var(--primary); font-size:0.7rem; font-weight:600;padding:3px 10px;border-radius:20px;text-transform:uppercase;">
                                    Snack 
                                </span>
                                <h5 style="margin-top:10px; font-weight:700;">
                                    Gourmet Burger 
                                </h5>
                                <p style="color:#666;font-size:0.9rem;">Juicy beef party with fresh toppings and our 
                                    special sauce in a toasted bun.
                                </p>
                                <div style="display:flex;justify-content:space-between;align-items:center; margin-top:15px;">
                                    <span style="color:var(--primary);font-size:1.3rem;font-weight:700;">#8,000</span>
                                    <button style="background: var(--primary);color:white;border:none;padding:8px 20px; border-radius:20px;font-size:0.85rem;">
                                        Order Now
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div style="background:white; border-radius:15px;overflow:hidden; box-shadow:0 5px 20px rgba(0,0,0.08);">
                            <div style="height:200px; overflow:hidden;">
                                <img src="{{asset('img/category/9.jpeg') }}" alt="Indomie"
                                style="width:100%;height:100%;object-fit:cover;">

                            </div>
                            <div style="padding:200px;">
                                <span style="background:#fff0f0; color:var(--primary); font-size:0.7rem; font-weight:600;padding:3px 10px;border-radius:20px;text-transform:uppercase;">
                                    Drink 
                                </span>
                                <h5 style="margin-top:10px; font-weight:700;">
                                    Rich Youghurt
                                </h5>
                                <p style="color:#666;font-size:0.9rem;">Nutritious chilled and richly made Youghurt
                                    thick and well prepared.
                                    irressitable for man kind.
                                </p>
                                <div style="display:flex;justify-content:space-between;align-items:center; margin-top:15px;">
                                    <span style="color:var(--primary);font-size:1.3rem;font-weight:700;">#4,000</span>
                                    <button style="background: var(--primary);color:white;border:none;padding:8px 20px; border-radius:20px;font-size:0.85rem;">
                                        Order Now
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>







                </div>
            </div>
        </section>


      <!-- FOOTER -->
      <footer>
         <div class="container">
            <div class="row g-5">
               <div class="col-lg-4">
                  <div class="fnm">Ajebo<span>Plush Bites</span></div>
                  <p class="fdesc">We bring the world's finest flavors together in a fast, friendly, and affordable experience. Every meal crafted with love.</p>
                  <div class="fsoc">
                     <a href="#"><i class="fab fa-facebook-f"></i></a>
                     <a href="#"><i class="fab fa-instagram"></i></a>
                     <a href="#"><i class="fab fa-twitter"></i></a>
                     <a href="#"><i class="fab fa-youtube"></i></a>
                     <a href="#"><i class="fab fa-tiktok"></i></a>
                  </div>
               </div>
               <div class="col-sm-6 col-lg-2">
                  <div class="ftit">Quick Links</div>
                  <ul class="flinks ps-0">
                     <li><a href="#hero"><i class="fas fa-chevron-right"></i>Home</a></li>
                     <li><a href="#about"><i class="fas fa-chevron-right"></i>About Us</a></li>
                     <li><a href="#menu"><i class="fas fa-chevron-right"></i>Our Menu</a></li>
                     <li><a href="#reservation"><i class="fas fa-chevron-right"></i>Reservation</a></li>
                     <li><a href="#blog"><i class="fas fa-chevron-right"></i>Blog</a></li>
                     <li><a href="#contact-section"><i class="fas fa-chevron-right"></i>Contact</a></li>
                  </ul>
               </div>
               <div class="col-sm-6 col-lg-2">
                  <div class="ftit">Our Menu</div>
                  <ul class="flinks ps-0">
                     <li><a href="#menu"><i class="fas fa-chevron-right"></i>Burgers</a></li>
                     <li><a href="#menu"><i class="fas fa-chevron-right"></i>Egg Roll</a></li>
                     <li><a href="#menu"><i class="fas fa-chevron-right"></i>Fried Chicken</a></li>
                     <li><a href="#menu"><i class="fas fa-chevron-right"></i>Spicy Indomie</a></li>
                     <li><a href="#menu"><i class="fas fa-chevron-right"></i>Shawarma</a></li>
                     <li><a href="#menu"><i class="fas fa-chevron-right"></i>Meat Pie</a></li>
                  </ul>
               </div>
               <div class="col-lg-4">
                  <div class="ftit">Get In Touch</div>
                  <div class="fci">
                     <div class="fciico"><i class="fas fa-map-marker-alt"></i></div>
                     <div class="fciinfo"><strong>Address</strong>Sarki Street Nassarawa,Kaduna</div>
                  </div>
                  <div class="fci">
                     <div class="fciico"><i class="fas fa-phone-alt"></i></div>
                     <div class="fciinfo"><strong>Phone</strong>08165021348</div>
                  </div>
                  <div class="fci">
                     <div class="fciico"><i class="fas fa-envelope"></i></div>
                     <div class="fciinfo"><strong>Email</strong>hello@ajeboplushbites.com</div>
                  </div>
                  <div class="fci">
                     <div class="fciico"><i class="fas fa-clock"></i></div>
                     <div class="fciinfo"><strong>Hours</strong>Wed - Sun: 09 AM - 11 PM</div>
                  </div>
               </div>
            </div>
         </div>
         <div class="fbot">
            <div class="container">
               <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                  <p>&copy 2026 <span>AjeboPlushBites</span>. All Rights Reserved by <a target="_blank" class="mx-0 fw-bold text-success" ></a>. Made with <span><i class="fas fa-heart"></i></span>  <br>Distributed by <a target="_blank" class="mx-0 fw-bold text-success" href="">ThemeWagon</a></p>
                  <div><a href="#">Privacy Policy</a><a href="#">Terms</a><a href="#">Cookies</a></div>
               </div>
            </div>
         </div>
      </footer>
      <!-- Floating cart -->
      <!-- <div class="cartfl"><i class="fas fa-shopping-cart"></i><span>My Cart</span><div class="ccount" id="cartCount">0</div></div> -->
      <!-- Back to top -->
      <button id="btt" onclick="window.scrollTo({top:0,behavior:'smooth'})"><i class="fas fa-chevron-up"></i></button>
    
	<!-- jQuery -->
      <script src="js/jquery-3.7.1.min.js"></script>
      <!-- Bootstrap 5 -->
      <script src="js/bootstrap.bundle.min.js"></script>
      <!-- AOS -->
      <script src="js/aos.js"></script>
      <!-- Swiper -->
      <script src="js/swiper-bundle.min.js"></script>
      <!-- CounterUp -->
      <script src="js/jquery.magnific-popup.min.js"></script>
      <!-- Main js -->
      <script src="js/main.js"></script>
   </body>
</html>
