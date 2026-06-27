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
                  <li class="nav-item"><a class="nav-link active" href="/about">About</a></li>
                  <li class="nav-item"><a class="nav-link" href="/menu">Menu</a></li>
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
       <section style="background:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0.6)), url('{{asset('img/banner-img.jpg') }}') center/cover;padding:100px 0; text-align:center;">
        <h1 style="color:white;font-size:3rem;font-weight:700;">About Us</h1>
        <p style="color:rgba(255,255,255,0.8);">Home &nbsp;>&nbsp; About us</p>
       </section>

       <!-- Our Story -->
        <section style="padding:80px 0;">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6">
                        <img src="{{asset('img/about1.jpg')}}" alt="About Ajebo"
                        style="width:100%;border-radius:15px;box-shadow:0 10px 30px rgba(0,0,0,0.1);">
                    </div>
                    <div class="col-lg-6">
                        <h5 style="color:var(--primary); font-family: 'Courgette', cursive;">Our Story</h5>
                        <h2 style="font-size:2.2rem; font-weight:700;margin-bottom:20px;">
                            Welcome to Ajebo Plush Bites & More
                        </h2>
                        <p style="color:#666; line-height:1.9;">
                            Ajebo Plush Bites & More was founded in 2026,located on Sarki Road,Nassarawa.
                            The businesds was established with a vision to prove customers with delicious,
                            refreshing snacks and drinks alongside exceptional service.
                        </p>
                        <p style="color:#666; line-height:1.9;margin-top:15px">
                            What started as a passion for satisfying hunger and create memorable dining experiences
                            has grown into a brand dedicated to bringing people together through great food.We believe
                            that every meal should be prepared with care,serverd with warmth,and enjoyed in a welcoming environment.


                        </p>
                        <p style="color:#666; line-height:1.9;margin-top:15px">
                            Since our inception,we have remained commited to quality ,customer satisfaction,
                            and ensuring that every order reflect our passion for excellence.
                        </p>

                    </div>
                </div>
            </div>
        </section>

        <!-- Stat -->
         <section style="background:#f9f9f9;padding:60px 0,">
            <div class="container">
                <div class="row text-center g-4">
                    <div class="col-md-3 col-6">
                        <div style="padding:30px; background:white;border-radius:12px; box-shadow:0 5px 20px rgba(0,0,0,0.5);">
                            <h2 style="color:var(--primary);font-weight:700;font-size:2.5rem;">850+</h2>
                            <p style="color:#666;margin:0;">Happy Customers</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div style="padding:30px; background:white;border-radius:12px; box-shadow:0 5px 20px rgba(0,0,0,0.5);">
                            <h2 style="color:var(--primary);font-weight:700;font-size:2.5rem;">9+</h2>
                            <p style="color:#666;margin:0;">Menu Items</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div style="padding:30px; background:white;border-radius:12px; box-shadow:0 5px 20px rgba(0,0,0,0.5);">
                            <h2 style="color:var(--primary);font-weight:700;font-size:2.5rem;">1</h2>
                            <p style="color:#666;margin:0;">Location</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div style="padding:30px; background:white;border-radius:12px; box-shadow:0 5px 20px rgba(0,0,0,0.5);">
                            <h2 style="color:var(--primary);font-weight:700;font-size:2.5rem;">2026</h2>
                            <p style="color:#666;margin:0;">Year Founded</p>
                        </div>
                    </div>
                </div>
            </div>
         </section>

          <!-- Our menu items -->
           <section style="padding:80px 0;">
            <div class="container text-center">
                <h5 style="color:var(--primary);font-family: 'Courgette',cursive;">What we serve</h5>
                <h2 style="font-size:2.2rem; font-weight:700; margin-bottom:40px;">Our Specialities</h2>
                <div class="row g-4">
                    <div class="col-md-4 col-6">
                        <div style="padding:25px; border:1px solid #eee;border-radius:12px;">
                            <i class="fas fa-egg" style="font-size:2rem;color:var(--primary);"></i>
                            <h5 style="margin-top:15px;">Cripsy Egg Roll</h5>
                        </div>
                    </div>
                     <div class="col-md-4 col-6">
                        <div style="padding:25px; border:1px solid #eee;border-radius:12px;">
                            <i class="fas fa-bread-slice" style="font-size:2rem;color:var(--primary);"></i>
                            <h5 style="margin-top:15px;">Hot Meat Pie</h5>
                        </div>
                    </div>
                     <div class="col-md-4 col-6">
                        <div style="padding:25px; border:1px solid #eee;border-radius:12px;">
                            <i class="fas fa-drumstick-bite" style="font-size:2rem;color:var(--primary);"></i>
                            <h5 style="margin-top:15px;">Spicy Indomie</h5>
                        </div>
                    </div>
                     <div class="col-md-4 col-6">
                        <div style="padding:25px; border:1px solid #eee;border-radius:12px;">
                            <i class="fas fa-ice-cream" style="font-size:2rem;color:var(--primary);"></i>
                            <h5 style="margin-top:15px;">Creamy Ice Cream</h5>
                        </div>
                    </div>
                     <div class="col-md-4 col-6">
                        <div style="padding:25px; border:1px solid #eee;border-radius:12px;">
                            <i class="fas fa-glass" style="font-size:2rem;color:var(--primary);"></i>
                            <h5 style="margin-top:15px;">Tiger Nut Drink</h5>
                        </div>
                    </div>
                     <div class="col-md-4 col-6">
                        <div style="padding:25px; border:1px solid #eee;border-radius:12px;">
                            <i class="fas fa-pizza" style="font-size:2rem;color:var(--primary);"></i>
                            <h5 style="margin-top:15px;">Delicious Shawarma</h5>
                        </div>
                    </div>
                     <div class="col-md-4 col-6">
                        <div style="padding:25px; border:1px solid #eee;border-radius:12px;">
                            <i class="fas fa-glass" style="font-size:2rem;color:var(--primary);"></i>
                            <h5 style="margin-top:15px;">Youghurt</h5>
                        </div>
                    </div>
                     <div class="col-md-4 col-6">
                        <div style="padding:25px; border:1px solid #eee;border-radius:12px;">
                            <i class="fas fa-burger" style="font-size:2rem;color:var(--primary);"></i>
                            <h5 style="margin-top:15px;">Gourmet Burger</h5>
                        </div>
                    </div>
                     <div class="col-md-4 col-6">
                        <div style="padding:25px; border:1px solid #eee;border-radius:12px;">
                            <i class="fas fa-pepper-hot" style="font-size:2rem;color:var(--primary);"></i>
                            <h5 style="margin-top:15px;">Cripsy Fried Chicken</h5>
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
