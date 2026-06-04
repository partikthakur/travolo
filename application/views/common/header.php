      <!--********************************
  Code Start From Here 
    ******************************** -->

        <!--==============================
    Mobile Menu
  ============================== -->
<div class="vs-menu-wrapper">
            <div class="vs-menu-area text-center">
                <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
                <div class="mobile-logo">
                    <a href="<?= $base_url?>home"><img src="<?=$base_url;?>assets/img/logo.svg" alt="Travolo" /></a>
                </div>
                <div class="vs-mobile-menu">
                    <ul>
                        <li class="menu-item-has-children">
                            <a href="<?= $base_url?>home">Home</a>
                            
                        </li>
                        <li class="menu-item-has-children">
                            <a href="<?= $base_url?>#">Destinations</a>
                            <ul class="sub-menu">
                                <li><a href="<?= $base_url?>destinations/destinations">Destinations</a></li>
                                <li><a href="<?= $base_url?>destinations/destination-details">Destinations Details</a></li>
                            </ul>
                        </li>
                      <!--   <li class="menu-item-has-children">
                            <a href="<?= $base_url?>#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="<?= $base_url?>about">About Us</a></li>
                                <li><a href="<?= $base_url?>tours">Tours List</a></li>
                                <li><a href="<?= $base_url?>tour-booking">Tour Booking</a></li>
                                <li><a href="<?= $base_url?>destinations">Destinations</a></li>
                                <li><a href="<?= $base_url?>destination-details">Destinations Details</a></li>
                                <li><a href="<?= $base_url?>error">Error</a></li>
                            </ul>
                        </li> -->
                        <li class="menu-item-has-children">
                            <a href="<?= $base_url?>#">Tours</a>
                            <ul class="sub-menu">
                                <li><a href="<?= $base_url?>tours">Tours List</a></li>
                                <li><a href="<?= $base_url?>tour-booking">Tour Booking</a></li>
                            </ul>
                        </li>
                        <!-- <li class="menu-item-has-children">
                            <a href="<?= $base_url?>#">Shop</a>
                            <ul class="sub-menu">
                                <li><a href="<?= $base_url?>shop">Shop</a></li>
                                <li><a href="<?= $base_url?>shop-details">Shop Details</a></li>
                                <li><a href="<?= $base_url?>cart">Cart</a></li>
                                <li><a href="<?= $base_url?>checkout">Checkout</a></li>
                            </ul>
                        </li> -->
                       <!--  <li class="menu-item-has-children">
                            <a href="<?= $base_url?>#">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="<?= $base_url?>blog">Blog List</a></li>
                                <li><a href="<?= $base_url?>blog-grid">Blog Grid</a></li>
                                <li><a href="<?= $base_url?>blog-details">Blog Details</a></li>
                            </ul>
                        </li> -->
                        <li>
                            <a href="<?= $base_url?>contact-us">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--==============================
    Sidemenu
  ============================== -->
        <div class="sidemenu-wrapper offcanvas-wrapper d-none d-lg-block">
            <div class="sidemenu-content">
                <button class="closeButton sideMenuCls">
                    <i class="far fa-times"></i>
                </button>
                <div class="widget">
                    <div class="vs-widget-about">
                        <div class="footer-logo">
                            <a href="<?= $base_url?>"><img src="<?=$base_url;?>assets/img/logo.svg" alt="Travolo" /></a>
                        </div>
                        <p class="footer-text">
                            Ut tellus dolor, dapibus eget, elementum ifend cursus eleifend, elit. Aenea ifen dn tor wisi Aliquam er at volutpat. Dui ac tui end cursus eleifendrpis.
                        </p>
                        <div class="info-social style2">
                            <a href="<?= $base_url?>#"><i class="fab fa-facebook-f"></i></a>
                            <a href="<?= $base_url?>#"><i class="fab fa-twitter"></i></a>
                            <a href="<?= $base_url?>#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="<?= $base_url?>#"><i class="fab fa-google"></i></a>
                        </div>
                    </div>
                </div>
                <div class="widget">
                    <h3 class="widget_title">Recent Articles</h3>
                    <div class="recent-post-wrap">
                        <div class="recent-post">
                            <div class="media-img">
                                <a href="<?= $base_url?>blog-details"><img src="<?=$base_url;?>assets/img/blog/recent-post1.jpg" alt="Blog Image" /></a>
                            </div>
                            <div class="media-body">
                                <div class="recent-post-meta">
                                    <i class="fal fa-calendar-alt"></i>
                                    <a href="<?= $base_url?>blog">December 15, 2022</a>
                                </div>
                                <h4 class="post-title">
                                    <a class="text-inherit" href="<?= $base_url?>blog-details">We are Giving Amazing Tour for VIP</a>
                                </h4>
                            </div>
                        </div>
                        <div class="recent-post">
                            <div class="media-img">
                                <a href="<?= $base_url?>blog-details"><img src="<?=$base_url;?>assets/img/blog/recent-post2.jpg" alt="Blog Image" /></a>
                            </div>
                            <div class="media-body">
                                <div class="recent-post-meta">
                                    <i class="fal fa-calendar-alt"></i>
                                    <a href="<?= $base_url?>blog">March 13, 2022</a>
                                </div>
                                <h4 class="post-title">
                                    <a class="text-inherit" href="<?= $base_url?>blog-details">The journey journal chronicles of a wandering soul</a>
                                </h4>
                            </div>
                        </div>
                        <div class="recent-post">
                            <div class="media-img">
                                <a href="<?= $base_url?>blog-details"><img src="<?=$base_url;?>assets/img/blog/recent-post3.jpg" alt="Blog Image" /></a>
                            </div>
                            <div class="media-body">
                                <div class="recent-post-meta">
                                    <i class="fal fa-calendar-alt"></i>
                                    <a href="<?= $base_url?>blog">Augest 23, 2022</a>
                                </div>
                                <h4 class="post-title">
                                    <a class="text-inherit" href="<?= $base_url?>blog-details">Roam And Revel captivating at tellus.</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--==============================
    Cart Side bar
  ============================== -->
        <!-- <div class="sideCart-wrapper offcanvas-wrapper d-none d-lg-block">
            <div class="sidemenu-content">
                <button class="closeButton border-theme bg-theme-hover sideMenuCls"><i class="far fa-times"></i></button>
                <div class="widget widget_shopping_cart">
                    <h3 class="widget_title">Shopping cart</h3>
                    <div class="widget_shopping_cart_content">
                        <ul class="cart_list">
                            <li class="mini_cart_item">
                                <a href="<?= $base_url?>shop" class="remove"><i class="fal fa-trash-alt"></i></a> <a href="<?= $base_url?>shop"><img src="<?=$base_url;?>assets/img/products/p-1-1.png" alt="Cart Image" />Modern Cow Boy Hat</a>
                                <span class="quantity">
                                    1 × <span class="amount"><span>$</span>100.00</span>
                                </span>
                            </li>
                            <li class="mini_cart_item">
                                <a href="<?= $base_url?>shop" class="remove"><i class="fal fa-trash-alt"></i></a> <a href="<?= $base_url?>shop"><img src="<?=$base_url;?>assets/img/products/p-1-2.png" alt="Cart Image" />Cat Eye Sunglasses</a>
                                <span class="quantity">
                                    1 × <span class="amount"><span>$</span>10.00</span>
                                </span>
                            </li>
                        </ul>
                        <div class="total">
                            <strong>Subtotal:</strong> <span class="amount"><span>$</span>110.00</span>
                        </div>
                        <div class="buttons">
                            <a href="<?= $base_url?>cart" class="vs-btn style4">View cart</a>
                            <a href="<?= $base_url?>checkout" class="vs-btn style4">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 -->
        <!--==============================
    Popup Search Box
  ============================== -->
        <div class="popup-search-box d-none d-lg-block">
            <button class="searchClose"><i class="fal fa-times"></i></button>
            <form action="#">
                <input type="text" class="border-theme" placeholder="What are you looking for" />
                <button type="submit"><i class="fal fa-search"></i></button>
            </form>
        </div>


 <div class="sideCart-wrapper offcanvas-wrapper d-none d-lg-block">
    <div class="sidemenu-content">
      <button class="closeButton border-theme bg-theme-hover sideMenuCls"><i class="far fa-times"></i></button>
      <div class="widget widget_shopping_cart">
        <h3 class="widget_title">Shopping cart</h3>
        <div class="widget_shopping_cart_content">
          <ul class="cart_list">
            <li class="mini_cart_item">
              <a href="shop.html" class="remove"><i class="fal fa-trash-alt"></i></a> <a href="shop.html"><img
                  src="assets/img/products/p-1-1.png" alt="Cart Image" />Modern Cow Boy Hat</a>
              <span class="quantity">
                1 × <span class="amount"><span>$</span>100.00</span>
              </span>
            </li>
            <li class="mini_cart_item">
              <a href="shop.html" class="remove"><i class="fal fa-trash-alt"></i></a> <a href="shop.html"><img
                  src="assets/img/products/p-1-2.png" alt="Cart Image" />Cat Eye Sunglasses</a>
              <span class="quantity">
                1 × <span class="amount"><span>$</span>10.00</span>
              </span>
            </li>
          </ul>
          <div class="total">
            <strong>Subtotal:</strong> <span class="amount"><span>$</span>110.00</span>
          </div>
          <div class="buttons">
            <a href="cart.html" class="vs-btn style4">View cart</a>
            <a href="checkout.html" class="vs-btn style4">Checkout</a>
          </div>
        </div>
      </div>
    </div>
  </div>
        <!--==============================
    Header Area
  ==============================-->
        <header class="vs-header header-layout2">
            <div class="header-top">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col d-none d-lg-block">
                            <ul class="header-contact">
                                <li><i class="fas fa-envelope"></i> <a href="<?= $base_url?>mailto:info@travolo.com">info@travolo.com</a></li>
                                <li><i class="fas fa-phone-alt"></i> <a href="<?= $base_url?>tel:02073885619">020 7388 5619</a></li>
                            </ul>
                        </div>
                        <div class="col-auto">
                            <div class="header-social">
                                <a href="<?= $base_url?>#"><i class="fab fa-facebook-f"></i></a>
                                <a href="<?= $base_url?>#"><i class="fab fa-instagram"></i></a>
                                <a href="<?= $base_url?>#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="<?= $base_url?>#"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a class="vs-btn style2" href="<?= $base_url?>sign-up">Register</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sticky-wrapper">
                <div class="sticky-active" >
                    <div class="container position-relative z-index-common">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto">
                                <div class="vs-logo">
                                    <a href="<?= $base_url?>"><img src="<?=$base_url;?>assets/img/logo.svg" alt="logo" /></a>
                                </div>
                            </div>
                            <div class="col text-end text-xl-center">
                                <nav class="main-menu menu-style1 d-none d-lg-block">
                                    <ul>
                                        <li class="">
                                            <a href="<?= $base_url?>home">Home</a>
                                           
                                        </li>
                                         <li class="">
                                            <a href="<?= $base_url?>about-us">About Us</a>
                                           
                                        </li>
                                      <!--   <li class="menu-item-has-children">
                                            <a href="<?= $base_url?>#">Destinations</a>
                                            <ul class="sub-menu">
                                                <li><a href="<?= $base_url?>destinations/destinations">Destinations</a></li>
                                                <li><a href="<?= $base_url?>destinations/destination-details">Destinations Details</a></li>
                                            </ul>
                                        </li> -->
                                       <!--  <li class="menu-item-has-children mega-menu-wrap">
                                            <a href="<?= $base_url?>#">Pages</a>
                                            <ul class="mega-menu">
                                                <li>
                                                    <a href="<?= $base_url?>shop">Pagelist 1</a>
                                                    <ul>
                                                        <li><a href="<?= $base_url?>index">Home One</a></li>
                                                        <li><a href="<?= $base_url?>index-2">Home Two</a></li>
                                                        <li><a href="<?= $base_url?>index-3">Home Three</a></li>
                                                        <li><a href="<?= $base_url?>index-4">Home Four</a></li>
                                                        <li><a href="<?= $base_url?>index-5">Home Five</a></li>
                                                        <li><a href="<?= $base_url?>index-6">Home Six</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="<?= $base_url?>#">Pagelist 2</a>
                                                    <ul>
                                                        <li><a href="<?= $base_url?>about">About Us</a></li>
                                                        <li><a href="<?= $base_url?>destinations">Destinations</a></li>
                                                        <li><a href="<?= $base_url?>destination-details">Destinations Details</a></li>
                                                        <li><a href="<?= $base_url?>tours">Tours List</a></li>
                                                        <li><a href="<?= $base_url?>tour-booking">Tour Booking</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="<?= $base_url?>#">Pagelist 3</a>
                                                    <ul>
                                                        <li><a href="<?= $base_url?>shop">Shop</a></li>
                                                        <li><a href="<?= $base_url?>shop-details">Shop Details</a></li>
                                                        <li><a href="<?= $base_url?>cart">Cart</a></li>
                                                        <li><a href="<?= $base_url?>checkout">Checkout</a></li>
                                                        <li><a href="<?= $base_url?>blog">Blog List</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="<?= $base_url?>#">Pagelist 4</a>
                                                    <ul>
                                                        <li><a href="<?= $base_url?>blog-grid">Blog Grid</a></li>
                                                        <li><a href="<?= $base_url?>blog-details">Blog Details</a></li>
                                                        <li><a href="<?= $base_url?>error">Error Page</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li> -->
                                        <li class="menu-item-has-children">
                                            <a href="<?= $base_url?>#">Tours</a>
                                            <ul class="sub-menu">
                                                <li><a href="<?= $base_url?>tours">Tours List</a></li>
                                                <li><a href="<?= $base_url?>tour-booking">Tour Booking</a></li>
                                            </ul>
                                        </li>
                                        <!-- <li class="menu-item-has-children">
                                            <a href="<?= $base_url?>#">Shop</a>
                                            <ul class="sub-menu">
                                                <li><a href="<?= $base_url?>shop">Shop</a></li>
                                                <li><a href="<?= $base_url?>shop-details">Shop Details</a></li>
                                                <li><a href="<?= $base_url?>cart">Cart</a></li>
                                                <li><a href="<?= $base_url?>checkout">Checkout</a></li>
                                            </ul>
                                        </li> -->
                                      <!--   <li class="menu-item-has-children">
                                            <a href="<?= $base_url?>#">Blog</a>
                                            <ul class="sub-menu">
                                                <li><a href="<?= $base_url?>blog">Blog List</a></li>
                                                <li><a href="<?= $base_url?>blog-grid">Blog Grid</a></li>
                                                <li><a href="<?= $base_url?>blog-details">Blog Details</a></li>
                                            </ul>
                                        </li> -->
                                        <li>
                                            <a href="<?= $base_url?>contact-us">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                                <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="fal fa-bars"></i></button>
                            </div>
                            <div class="col-auto d-none d-xl-block">
                                <div class="header-btns">
                                    <button class="sideCartToggler"><i class="fal fa-shopping-bag"></i><span class="button-badge">2</span></button>
                                    <button class="sideMenuToggler"><i class="fal fa-bars"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>