<?php
########################################
######       ORDER PAGE           #######
########################################
require_once 'includes/constants.php';
require_once 'includes/functions.php';
# the variables for this page only
$pageTitle = 'Cookies Cafe |Order'; #in head-html.php
$activeOrder = 'active'; #in navigation-html.php
$heroSubHeadline = 'o</span>rder food'; #in hero-html.php
$heroHeadline = 'online'; #in hero-html.php
$heroMoto = "choose and order with just<span id=\"newline\"> one click.</span>"; #in hero-html.php
#in footer-html.php
# the include file for all head htmls
require_once 'includes/head-html.php';
?>
<!----------------------- style for this page only ----
<link rel="stylesheet" href="./css2/orderstyle.css">
--------------------->

       <!-------OWL CAROUSEL STYLE CDN-->
<link rel="stylesheet" href="./css2/owl.carousel.min.css">
    <link rel="stylesheet" href="./css2/owl.theme.default.min.css">


<!----------------------- style for this page only -------------------------->

<?php require_once 'includes/styles/order-style.php'; ?>


</head>
<!--main loader page and body page starts here-->
<body id="body">
<?php require_once 'includes/loader-html.php'; ?>

<!--main body page -->
  <div id="everything" onload="loaded()">
<?php
require_once 'includes/navigation-html.php';
require_once 'includes/hero-html.php';
?>
<!-- distinct home page content-->


 <!--menu manual------->

 <div class="menu-manual" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="600">
            <div class="container">
                <div class="manual-icon"><i class="fa fa-utensils"></i></div>
                <div class="manual-text">
                    <p>Ordering food online made easy with our easy to use and fast choosing seystem you are abel to pick what you want how much you want with just a few clicks. press the<span>ADD TO BAG </span> button to pick the food of your choice. after you are done head to the bottom and hit <span>READY TO ORDER.</span><br>Its that easy.</p>

                </div>
            </div>

    </div>


    

    <!-----manu list------->
    <section id="all-menu">

        <!--------------------cake------------------------------------>


        <div class="menu-page" id="cakes">
            <div class="container">
                <div class="headline" id="cakes-headline">cakes</div>
                <div class="owl-carousel owl-theme menu-post" id="cakes-post">
                    <div class="menu-content">
                        <img class="menu-img" src="images2/cake1.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Cinnamon cake</h3>
                            <div class="count">
                                <div id="counter">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>
                            <button id="cakeBtn1" class="btn menu-btn" type="button" onclick="addToBag(this)">ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">0</div>
                            <div class="type-id">0</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <img class="menu-img" src="images2/cake2.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Biscuit cake</h3>
                            <div class="count">
                                <div id="counter">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>
                            <button id="cakeBtn1" class="btn menu-btn" type="button" onclick="addToBag(this)">ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">1</div>
                            <div class="type-id">0</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <img class="menu-img" src="images2/cake3.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Coffee cake</h3>
                            <div class="count">
                                <div id="counter">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>

                            <button id="cakeBtn1" class="btn menu-btn" type="button" onclick="addToBag(this)">ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">2</div>
                            <div class="type-id">0</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <img class="menu-img" src="images2/cake4.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Vanilla cake</h3>
                            <div class="count">
                                <div id="counter1">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>
                            <button id="cakeBtn1" class="btn menu-btn" type="button" onclick='addToBag(this)'>ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">3</div>
                            <div class="type-id">0</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                    <div class="menu-content">
        <!----> <img class="menu-img" src="images2/cake5.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Pink Panther cake</h3>
                            <div class="count">
                                <div id="counter1">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>
                            <button id="cakeBtn1" class="btn menu-btn" type="button" onclick='addToBag(this)'>ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">4</div>
                            <div class="type-id">0</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <img class="menu-img" src="images2/cake6.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Strawberry cake cake</h3>
                            <div class="count">
                                <div id="counter1">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>
                            <button id="cakeBtn1" class="btn menu-btn" type="button" onclick='addToBag(this)'>ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">5</div>
                            <div class="type-id">0</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!--------0000000------------cake------------00000------------------------>

        <!--------------------------------ice-cream------------------------------------>

        <div class="menu-page bg-right" id="ice-creams">
            <div class="container">
                <div class="headline" id="ice-creams-headline">ice-creams</div>
                <div class="owl-carousel owl-theme menu-post" id="ice-creams-post">
                    <div class="menu-content">
                        <img class="menu-img" src="images2/ice-cream1.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Triplets ice-cream</h3>
                            <div class="count">
                                <div id="counter">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>
                            <button id="ice-creamBtn1" class="btn menu-btn" type="button" onclick="addToBag(this)">ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">0</div>
                            <div class="type-id">1</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <img class="menu-img" src="images2/icecream2.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Oreo ice-cream</h3>
                            <div class="count">
                                <div id="counter">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>
                            <button id="ice-creamBtn1" class="btn menu-btn" type="button" onclick="addToBag(this)">ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">1</div>
                            <div class="type-id">1</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <img class="menu-img" src="images2/icecream3.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Cinnamon ice-cream</h3>
                            <div class="count">
                                <div id="counter">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>

                            <button id="ice-creamBtn1" class="btn menu-btn" type="button" onclick="addToBag(this)">ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">2</div>
                            <div class="type-id">1</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <img class="menu-img" src="images2/icecream4.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Godzilla ice-cream</h3>
                            <div class="count">
                                <div id="counter1">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>
                            <button id="ice-creamBtn1" class="btn menu-btn" type="button" onclick='addToBag(this)'>ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">3</div>
                            <div class="type-id">1</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <img class="menu-img" src="images2/icecream5.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Peanuts ice-cream</h3>
                            <div class="count">
                                <div id="counter1">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>
                            <button id="ice-creamBtn1" class="btn menu-btn" type="button" onclick='addToBag(this)'>ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">4</div>
                            <div class="type-id">1</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <img class="menu-img" src="images2/icecream6.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Strawberry ice-cream</h3>
                            <div class="count">
                                <div id="counter1">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>
                            <button id="ice-creamBtn1" class="btn menu-btn" type="button" onclick='addToBag(this)'>ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">5</div>
                            <div class="type-id">1</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-------------------00000-------------ice-cream---------------000000--------------------->


        <!--------------------------------cookie------------------------------------>

        <div class="menu-page" id="cookies">
            <div class="container">
                <div class="headline" id="cookies-headline">cookies</div>
                <div class="owl-carousel owl-theme menu-post" id="cookies-post">
                    <div class="menu-content">
                        <img class="menu-img" src="images2/cookie1.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Sweet cookie</h3>
                            <div class="count">
                                <div id="counter">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>
                            <button id="cookieBtn1" class="btn menu-btn" type="button" onclick="addToBag(this)">ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">0</div>
                            <div class="type-id">2</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <img class="menu-img" src="images2/cookie2.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Cinnamon cookie</h3>
                            <div class="count">
                                <div id="counter">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>
                            <button id="cookieBtn1" class="btn menu-btn" type="button" onclick="addToBag(this)">ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">1</div>
                            <div class="type-id">2</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <img class="menu-img" src="images2/cookie3.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Dark Chocolate cookie</h3>
                            <div class="count">
                                <div id="counter">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>

                            <button id="cookieBtn1" class="btn menu-btn" type="button" onclick="addToBag(this)">ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">2</div>
                            <div class="type-id">2</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <img class="menu-img" src="images2/cookie4.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Multi-flavor cookie</h3>
                            <div class="count">
                                <div id="counter1">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>
                            <button id="cookieBtn1" class="btn menu-btn" type="button" onclick='addToBag(this)'>ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">3</div>
                            <div class="type-id">2</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <img class="menu-img" src="images2/cookie5.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Rolled cookie</h3>
                            <div class="count">
                                <div id="counter1">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>
                            <button id="cookieBtn1" class="btn menu-btn" type="button" onclick='addToBag(this)'>ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">4</div>
                            <div class="type-id">2</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <img class="menu-img" src="images2/cookie6.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Spicy cookie</h3>
                            <div class="count">
                                <div id="counter1">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>
                            <button id="cookieBtn1" class="btn menu-btn" type="button" onclick='addToBag(this)'>ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">5</div>
                            <div class="type-id">2</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!------------------00000--------------cookie----------------00000-------------------->


        <!--------------------------------cup-cake------------------------------------>


        <div class="menu-page bg-right" id="cup-cakes">
            <div class="container">
                <div class="headline" id="cup-cakes-headline">cup-cakes</div>
                <div class="owl-carousel owl-theme menu-post" id="cup-cakes-post">
                    <div class="menu-content">
                        <img class="menu-img" src="images2/cupcakes1.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Chocolate cup-cake</h3>
                            <div class="count">
                                <div id="counter">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>
                            <button id="cup-cakeBtn1" class="btn menu-btn" type="button" onclick="addToBag(this)">ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">0</div>
                            <div class="type-id">3</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <img class="menu-img" src="images2/cupcakes2.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Multi-flavor cup-cake</h3>
                            <div class="count">
                                <div id="counter">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>
                            <button id="cup-cakeBtn1" class="btn menu-btn" type="button" onclick="addToBag(this)">ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">1</div>
                            <div class="type-id">3</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <img class="menu-img" src="images2/cupcakes3.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Orange cup-cake</h3>
                            <div class="count">
                                <div id="counter">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>

                            <button id="cup-cakeBtn1" class="btn menu-btn" type="button" onclick="addToBag(this)">ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">2</div>
                            <div class="type-id">3</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <img class="menu-img" src="images2/cupcakes4.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Couples cup-cake</h3>
                            <div class="count">
                                <div id="counter1">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>
                            <button id="cup-cakeBtn1" class="btn menu-btn" type="button" onclick='addToBag(this)'>ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">3</div>
                            <div class="type-id">3</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <img class="menu-img" src="images2/cupcakes5.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Strawberry cup-cake</h3>
                            <div class="count">
                                <div id="counter1">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>
                            <button id="cup-cakeBtn1" class="btn menu-btn" type="button" onclick='addToBag(this)'>ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">4</div>
                            <div class="type-id">3</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <img class="menu-img" src="images2/cupcakes6.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Dark chocolate cup-cake</h3>
                            <div class="count">
                                <div id="counter1">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>
                            <button id="cup-cakeBtn1" class="btn menu-btn" type="button" onclick='addToBag(this)'>ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">5</div>
                            <div class="type-id">3</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-------------000000-------------------cup-cake--------------00000---------------------->


        <!--------------------------------burger------------------------------------>


        <div class="menu-page" id="burgers">
            <div class="container">
                <div class="headline" id="burgers-headline">burgers</div>
                <div class="owl-carousel owl-theme menu-post" id="burgers-post">
                    <div class="menu-content">
                        <img class="menu-img" src="images2/burger1.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Mini burger</h3>
                            <div class="count">
                                <div id="counter">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>
                            <button id="burgerBtn1" class="btn menu-btn" type="button" onclick="addToBag(this)">ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">0</div>
                            <div class="type-id">4</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <img class="menu-img" src="images2/burger2.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Spicy burger</h3>
                            <div class="count">
                                <div id="counter">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>
                            <button id="burgerBtn1" class="btn menu-btn" type="button" onclick="addToBag(this)">ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">1</div>
                            <div class="type-id">4</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <img class="menu-img" src="images2/burger3.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>European burger</h3>
                            <div class="count">
                                <div id="counter">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>

                            <button id="burgerBtn1" class="btn menu-btn" type="button" onclick="addToBag(this)">ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">2</div>
                            <div class="type-id">4</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <img class="menu-img" src="images2/burger4.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Vegan burger</h3>
                            <div class="count">
                                <div id="counter1">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>
                            <button id="burgerBtn1" class="btn menu-btn" type="button" onclick='addToBag(this)'>ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">5</div>
                            <div class="type-id">4</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <img class="menu-img" src="images2/burger7.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Monster burger</h3>
                            <div class="count">
                                <div id="counter1">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>
                            <button id="burgerBtn1" class="btn menu-btn" type="button" onclick='addToBag(this)'>ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">3</div>
                            <div class="type-id">4</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <img class="menu-img" src="images2/burger6.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Triplets burger</h3>
                            <div class="count">
                                <div id="counter1">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>
                            <button id="burgerBtn1" class="btn menu-btn" type="button" onclick='addToBag(this)'>ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">4</div>
                            <div class="type-id">4</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-------------000000-------------------burger--------------00000---------------------->


        <!--------------------------------pizza------------------------------------>


        <div class="menu-page bg-right" id="pizzas">
            <div class="container">
                <div class="headline" id="pizzas-headline">pizzas</div>
                <div class="owl-carousel owl-theme menu-post" id="pizzas-post">
                    <div class="menu-content">
                        <img class="menu-img" src="images2/pizaa1.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Red-Moon pizza</h3>
                            <div class="count">
                                <div id="counter">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>
                            <button id="pizzaBtn1" class="btn menu-btn" type="button" onclick="addToBag(this)">ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">0</div>
                            <div class="type-id">5</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <img class="menu-img" src="images2/pizaa2.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Mini pizza</h3>
                            <div class="count">
                                <div id="counter">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>
                            <button id="pizzaBtn1" class="btn menu-btn" type="button" onclick="addToBag(this)">ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">1</div>
                            <div class="type-id">5</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <img class="menu-img" src="images2/pizaa3.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Spicy pizza</h3>
                            <div class="count">
                                <div id="counter">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>

                            <button id="pizzaBtn1" class="btn menu-btn" type="button" onclick="addToBag(this)">ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">2</div>
                            <div class="type-id">5</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <img class="menu-img" src="images2/pizaa4.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Mushroom pizza</h3>
                            <div class="count">
                                <div id="counter1">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>
                            <button id="pizzaBtn1" class="btn menu-btn" type="button" onclick='addToBag(this)'>ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">3</div>
                            <div class="type-id">5</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <img class="menu-img" src="images2/pizaa5.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Cheesy pizza</h3>
                            <div class="count">
                                <div id="counter1">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>
                            <button id="pizzaBtn1" class="btn menu-btn" type="button" onclick='addToBag(this)'>ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">4</div>
                            <div class="type-id">5</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <img class="menu-img" src="images2/pizaa6.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Tomato Sauce pizza</h3>
                            <div class="count">
                                <div id="counter1">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>
                            <button id="pizzaBtn1" class="btn menu-btn" type="button" onclick='addToBag(this)'>ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">5</div>
                            <div class="type-id">5</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-------------000000-------------------pizza--------------00000---------------------->


        <!--------------------------------fruit-juice------------------------------------>


        <div class="menu-page" id="fruit-juices">
            <div class="container">
                <div class="headline" id="fruit-juices-headline">drinks</div>
                <div class="owl-carousel owl-theme menu-post" id="fruit-juices-post">
                    <div class="menu-content">
                        <img class="menu-img" src="images2/drink7.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Triplets fruit-juice</h3>
                            <div class="count">
                                <div id="counter">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>
                            <button id="fruit-juiceBtn1" class="btn menu-btn" type="button" onclick="addToBag(this)">ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">0</div>
                            <div class="type-id">6</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <img class="menu-img" src="images2/drink2.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Amazon fruit-juice</h3>
                            <div class="count">
                                <div id="counter">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>
                            <button id="fruit-juiceBtn1" class="btn menu-btn" type="button" onclick="addToBag(this)">ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">1</div>
                            <div class="type-id">6</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <img class="menu-img" src="images2/drink3.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Lemon fruit-juice</h3>
                            <div class="count">
                                <div id="counter">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>

                            <button id="fruit-juiceBtn1" class="btn menu-btn" type="button" onclick="addToBag(this)">ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">2</div>
                            <div class="type-id">6</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <img class="menu-img" src="images2/drink4.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Spicy fruit-juice</h3>
                            <div class="count">
                                <div id="counter1">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>
                            <button id="fruit-juiceBtn1" class="btn menu-btn" type="button" onclick='addToBag(this)'>ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">3</div>
                            <div class="type-id">6</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <img class="menu-img" src="images2/drink5.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Mango fruit-juice</h3>
                            <div class="count">
                                <div id="counter1">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>
                            <button id="fruit-juiceBtn1" class="btn menu-btn" type="button" onclick='addToBag(this)'>ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">4</div>
                            <div class="type-id">6</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <img class="menu-img" src="images2/drink10.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Blackberry fruit-juice</h3>
                            <div class="count">
                                <div id="counter1">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>
                            <button id="fruit-juiceBtn1" class="btn menu-btn" type="button" onclick='addToBag(this)'>ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">5</div>
                            <div class="type-id">6</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-------------000000-------------------fruit-juice--------------00000---------------------->


        <!--------------------------------soda------------------------------------>


        <div class="menu-page bg-right" id="sodas">
            <div class="container">
                <div class="headline" id="sodas-headline">sodas</div>
                <div class="owl-carousel owl-theme menu-post" id="sodas-post">
                    <div class="menu-content">
                        <img class="menu-img" src="images2/drink11.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>7up soda</h3>
                            <div class="count">
                                <div id="counter">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>
                            <button id="sodaBtn1" class="btn menu-btn" type="button" onclick="addToBag(this)">ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">0</div>
                            <div class="type-id">7</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <img class="menu-img" src="images2/drink8.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Coka Cola soda</h3>
                            <div class="count">
                                <div id="counter">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>
                            <button id="sodaBtn1" class="btn menu-btn" type="button" onclick="addToBag(this)">ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">1</div>
                            <div class="type-id">7</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <img class="menu-img" src="images2/drink12.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Pepsi soda</h3>
                            <div class="count">
                                <div id="counter">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>

                            <button id="sodaBtn1" class="btn menu-btn" type="button" onclick="addToBag(this)">ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">2</div>
                            <div class="type-id">7</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <img class="menu-img" src="images2/drink9.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Strawberry soda</h3>
                            <div class="count">
                                <div id="counter1">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>
                            <button id="sodaBtn1" class="btn menu-btn" type="button" onclick='addToBag(this)'>ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">3</div>
                            <div class="type-id">7</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <img class="menu-img" src="images2/drink13.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Mundel soda</h3>
                            <div class="count">
                                <div id="counter1">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>
                            <button id="sodaBtn1" class="btn menu-btn" type="button" onclick='addToBag(this)'>ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">4</div>
                            <div class="type-id">7</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <img class="menu-img" src="images2/drink1.jpg" alt="menu pic">
                        <div class="main-title">
                            <h3>Lemon soda</h3>
                            <div class="count">
                                <div id="counter1">
                                    <p>0</p>
                                </div>
                                <div class="c-ordered">Ordered</div>
                                <button id="counter-btn" class="btn" type="button" onclick="cancelCounter(this)"><i class="fas fa-times"></i></button>
                            </div>
                            <button id="sodaBtn1" class="btn menu-btn" type="button" onclick='addToBag(this)'>ADD TO BAG<i class="fa fa-shopping-bag"></i></button>
                            <div class="order-id">5</div>
                            <div class="type-id">7</div>
                            <div class="price">70 Birr</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-------------000000-------------------soda--------------00000---------------------->



        <div class="ready-to-order">
            <a href="#form">
                <button class="ready-btn btn" id="ready-btn" onclick="ready()">
                    <div class="clap">
                        <p>ready to order</p><i class="fas fa-hands"></i>
                    </div>
                    <!-- <div class="pick-again">
                    <p>pick again</p><i class="fas fa-chevron-up"></i>
                </div> -->
                </button>
            </a>
            <div class="empty-order price"></div>
        </div>
    </section>
    <!------------------fa-praying-hands------------form-------fa-hands-----fa-pray------------------------>

    <form class="all-form" name="userForm" method="post" action="orderComplete.php" onsubmit="return validateForm()" autocomplete="" target="_blank">
        <div class="container">
            <section id="form">


                <div class="form-input-area">
                    <p class="headline animatetop">please fill out<br>this form</p>

                    <div class="user-form-list">

                        <label class="form-text fullname">full name</label>
                        <input type="text" name="fullName" id="fullName" value="" placeholder="Enter Your FullName" required autocomplete="">
                        <div class="error fullNameError"></div>
                        <label class="form-text tel1">Tel Number</label>
                        <input type="tel" name="telNumber" id="telNumber" value="" pattern="[0-9]{10}" placeholder="Enter Your Phone" required autocomplete="">
                        <div class="error telNumError"></div>
                        <label class="form-text tel2">Tel Number #2<sup> Recomended</sup></label>
                        <input type="tel" name="telNumber2" id="telNumber2" value="" pattern="[0-9]{10}" placeholder="Enter Your Phone #2" autocomplete="">


                        <label class="form-text gps">Give us your <big>gps</big> location <sup>Recomended</sup></label>
                        <button class="gps-btn btn " type="button" onclick="getLocation()">
                            <i class="fa fa-location-arrow"></i> </button>
                        <div class="error locationError"></div>
                        <p class="gps-validation"></p>
                        <div id="form-text-box" class="form-text-box">
                            <label class="form-text text-location">tell us your location.</label>
                            <textarea name="locationText" id="locationText" value="" class="form-textarea" placeholder="Like this......" required></textarea>
                        </div>

                    </div>
                </div>
                <div class="form-output-area ">
                    <div class="show-orders">

                        <label class="form-text">your orders are..</label>
                        <div class="order-textarea"></div>
                        <div class="order-textarea"></div>

                    </div>
                    <div class="show-extra-orders">

                        <label class="form-text extra-order">any extra orders?</label>
                        <textarea name="extraOrderText" value="" class="extra-order-textarea" placeholder="Like this......"></textarea>
                        <textarea name="orderList" class="order-to-send"></textarea>
                        <textarea name="orderID" class="order-id"></textarea>
                    </div>






                </div>
            </section>
        </div>


        <div class="all-done-box">
            <div class="all-done ">

                <input type="submit" value="DONE" class="all-done-btn btn" id="all-done-btn" onclick="validateForm2()">

            </div>
        </div>
    </form>

    <div class="verify container">
        <p>your order has been reacives <spam>seccsesfuly</spam>. we will be there shortly.</p>
        <br><i class="fa fa-id-badge cookie"></i>
        <p>your verification ID is <spam id="vID">---------</spam><br>you will need it to reacive your ourder.<spam> SO SAVE/REMEMBER IT </spam><big> THANK YOU.</big>
        </p>
    </div>


    <div class="verify container">
        <p>your order has been reacives <spam>seccsesfuly</spam>. we will be there shortly.</p>
        <br><i class="fa fa-id-badge cookie"></i>
        <p>your verification ID is <spam id="vID">---------</spam><br>you will need it to reacive your ourder.<spam> SO SAVE/REMEMBER IT </spam><big> THANK YOU.</big>
        </p>
    </div>


<!--back to up icon from the other pages-->
<div class="last-obj footer-box">
    <div class="back-to-top" style="margin-left:40%;" >
                        <a href="#hero">
                            <i class="fas fa-arrow-up"></i>
                        </a>
                    </div>
                    <div id="copy-right" style="font-size: 0.7rem; text-align: center; position: absolute; bottom: 0; width: 100%; margin: 6rem 0 0 0; padding: 20px; background-color: rgba(209, 181, 21, 0.419);">
                        <h4 style="width:100vw; font-size: 0.8rem;">© 2022
                            <a href="https://dagim-shimelis.netlify.app/" target="_blank" style="font-family: abel; color:whitesmoke; font-size: 1rem; letter-spacing: .2rem; width: 20rem; margin: 0 auto;text-transform: uppercase;">
                            Dagim Shimelis.</a> All Rights Reserved.
                    </h4>
                    </div>
    </div>
        

    <!----jQuary--file--->
    <script src="./js2/Jquery3.4.1.min.js"></script>
    <!----owl-carousel--file--->
    <script src="./js2/owl.carousel.min.js"></script>
    <!----animation on scroll file--->
    <script src="./js2/aos.js"></script>
    <!----loading and toggle code--->
    <script src="./js2/main.js"></script>
    <!----menu-process--->
    <script src="./js2/orderprocess.js"></script>
    <script src="./js2/count.js"></script>
    <script src="./js2/form.js"></script>

</body>
</html>