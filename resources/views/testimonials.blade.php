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
                  <li class="nav-item"><a class="nav-link" href="/menu">Menu</a></li>
                  <li class="nav-item"><a class="nav-link" href="/chefs">Chefs</a></li>
                  <li class="nav-item"><a class="nav-link" href="/reservation">Reservation</a></li>
                  <li class="nav-item"><a class="nav-link active" href="/testimonials">Reviews</a></li>
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

       <!-- page banner -->
        <section style="background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0.6)),url('{{asset('img/banner-img.jpg')}}') center/cover no-repeat;padding:100px 0;text-align:center;">
            <h1 style="color:white;font-size:3rem;font-weight:700">Customer Review</h1>
            <p style="color:rgba(255,255,255,0.8);">Home &nbsp;>&nbsp; Reviews</p>

        </section>

        <!-- TESTIMONIALS -->
      <section style="padding:80px 0;background:#f9f9f9;">
        <div class="container">
            <div class="text-center mb-5">
                <h5 style="color:var(--primary);font-family:'Courgette',cursive;">What People Say</h5>
                <h2 style="font-size:2.5rem;font-weight:700;">Our Customers Feedback</h2>
                <p style="color:#666;">Real reviews from real customers in Kaduna</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div style="background: white; padding:30px; border-radius:15px;box-shadow:0 5px 20px rgba(0,0,0,0.07);height:100%;">
                        <div style="color:#f4a61d;margin-bottom:12px;">
                            ⭐⭐⭐⭐⭐
                        </div>
                        <p style="color:#555;line-height:1.8; font-style:italic;">
                            "The egg roll here is so cripsy and fresh! I bought 3 at once.Best snack in Kaduna without question.I recommened ajebo plush bites to everyone!"

                        </p>
                        <div style="display:flex; align-items:center; gap:12px; margin-top:20px;padding-top:1px solid #f0f0f0;">
                            <div style="width:50px;height:50px;border-radius:50%;background:white;display:flex;align-items:center;justify-content:center;color:white;font-weight:700;font-size:1.2rem;">
                                <img src="img/category/18.jpeg" alt=""/>
                            </div>
                                <div>
                                    <h6 style="margin:0;font-weight:700;">Faith Joseph</h6>
                                    <small style="color:#999;">Loyal Customer</small>
                                
                            </div>
                        </div>
                    </div>
             </div>   

             <div class="col-lg-4 col-md-6">
                    <div style="background: white; padding:30px; border-radius:15px;box-shadow:0 5px 20px rgba(0,0,0,0.07);height:100%;">
                        <div style="color:#f4a61d;margin-bottom:12px;">
                            ⭐⭐⭐⭐⭐
                        </div>
                        <p style="color:#555;line-height:1.8; font-style:italic;">
                            "The indomie and egg combo is everything!Ajebo plush bites never dissapoints.My qhole office orders from here everyday!".

                        </p>
                        <div style="display:flex; align-items:center; gap:12px; margin-top:20px;padding-top:1px solid #f0f0f0;">
                            <div style="width:50px;height:50px;border-radius:50%;background:white;display:flex;align-items:center;justify-content:center;color:white;font-weight:700;font-size:1.2rem;">
                                <img src="img/category/16.jpeg" alt=""/>
                            </div>
                                <div>
                                    <h6 style="margin:0;font-weight:700;">Sunny Wizard</h6>
                                    <small style="color:#999;">Food Lover</small>
                                
                            </div>
                        </div>
                    </div>
             </div>  

                          <div class="col-lg-4 col-md-6">
                    <div style="background: white; padding:30px; border-radius:15px;box-shadow:0 5px 20px rgba(0,0,0,0.07);height:100%;">
                        <div style="color:#f4a61d;margin-bottom:12px;">
                            ⭐⭐⭐⭐⭐
                        </div>
                        <p style="color:#555;line-height:1.8; font-style:italic;">
                            "The Shawarma is the best i've had in Nassarawa! the tiger nut drink with it is a perfect combo.Will definately keep coming back."

                        </p>
                        <div style="display:flex; align-items:center; gap:12px; margin-top:20px;padding-top:1px solid #f0f0f0;">
                            <div style="width:50px;height:50px;border-radius:50%;background:white;display:flex;align-items:center;justify-content:center;color:white;font-weight:700;font-size:1.2rem;">
                                <img src="img/category/15.jpeg" alt=""/>
                            </div>
                                <div>
                                    <h6 style="margin:0;font-weight:700;">Emmanuel Orjih</h6>
                                    <small style="color:#999;">Happy Customer</small>
                                
                            </div>
                        </div>
                    </div>
             </div>  

             <div class="col-lg-4 col-md-6">
                    <div style="background: white; padding:30px; border-radius:15px;box-shadow:0 5px 20px rgba(0,0,0,0.07);height:100%;">
                        <div style="color:#f4a61d;margin-bottom:12px;">
                            ⭐⭐⭐⭐⭐
                        </div>
                        <p style="color:#555;line-height:1.8; font-style:italic;">
                            "I tried meat pie and ice cream both were amazing! the price is very affordable andthe service is fast.This is my new favourite spot!"
                        </p>
                        <div style="display:flex; align-items:center; gap:12px; margin-top:20px;padding-top:1px solid #f0f0f0;">
                            <div style="width:50px;height:50px;border-radius:50%;background:white;display:flex;align-items:center;justify-content:center;color:white;font-weight:700;font-size:1.2rem;">
                                <img src="img/category/17.jpeg" alt=""/>
                            </div>
                                <div>
                                    <h6 style="margin:0;font-weight:700;">Sunday Joseph</h6>
                                    <small style="color:#999;">Regular Customer</small>
                                
                            </div>
                        </div>
                    </div>
             </div>  

             <div class="col-lg-4 col-md-6">
                    <div style="background: white; padding:30px; border-radius:15px;box-shadow:0 5px 20px rgba(0,0,0,0.07);height:100%;">
                        <div style="color:#f4a61d;margin-bottom:12px;">
                            ⭐⭐⭐⭐⭐
                        </div>
                        <p style="color:#555;line-height:1.8; font-style:italic;">
                            "The youghurt is so refreshing especially pon a hot Kaduna afternoon.Always cold and fresh.I stop here everyday after work!"
                        </p>
                        <div style="display:flex; align-items:center; gap:12px; margin-top:20px;padding-top:1px solid #f0f0f0;">
                            <div style="width:50px;height:50px;border-radius:50%;background:white;display:flex;align-items:center;justify-content:center;color:white;font-weight:700;font-size:1.2rem;">
                                <img src="img/category/19.jpeg" alt=""/>
                            </div>
                                <div>
                                    <h6 style="margin:0;font-weight:700;">Eden Zacks</h6>
                                    <small style="color:#999;">Daily Customer</small>
                                
                            </div>
                        </div>
                    </div>
             </div>  

             <div class="col-lg-4 col-md-6">
                    <div style="background: white; padding:30px; border-radius:15px;box-shadow:0 5px 20px rgba(0,0,0,0.07);height:100%;">
                        <div style="color:#f4a61d;margin-bottom:12px;">
                            ⭐⭐⭐⭐⭐
                        </div>
                        <p style="color:#555;line-height:1.8; font-style:italic;">
                            "The burger is massive and so filling! Worth every naira. the staff are friendly and the place is always clean.Ajebo plush bites is the real deal!"
                        </p>
                        <div style="display:flex; align-items:center; gap:12px; margin-top:20px;padding-top:1px solid #f0f0f0;">
                            <div style="width:50px;height:50px;border-radius:50%;background:white;display:flex;align-items:center;justify-content:center;color:white;font-weight:700;font-size:1.2rem;">
                                <img src="img/category/20.jpeg" alt=""/>
                            </div>
                                <div>
                                    <h6 style="margin:0;font-weight:700;">Jessica Micheal</h6>
                                    <small style="color:#999;">Verified Customer</small>
                                
                            </div>
                        </div>
                    </div>
             </div>  
        </div>
        <div style="background: var(--primary); border-radius:15px; padding:40px; margin-top:60px;text-align:center;color:white;">
            <h2 style="font-size:4rem; font-weight:700;margin:0;">4.9</h2>
            <div style="color:#f4a61d; font-size:1.5rem;margin-top:10px 0;">⭐⭐⭐⭐⭐</div>
            <p style="color:rgba(255,255,255,0.8);margin:0;">Based on 20+ customers reviews</p>

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
