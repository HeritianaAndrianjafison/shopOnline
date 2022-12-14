<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assetFrontOffice/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assetFrontOffice/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assetFrontOffice/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assetFrontOffice/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assetFrontOffice/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assetFrontOffice/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assetFrontOffice/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assetFrontOffice/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="<?php echo base_url(); ?>assetFrontOffice/img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="<?php echo base_url(); ?>assetFrontOffice/img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./shop-grid.html">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> h.andrianjafison@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="<?php echo base_url(); ?>assetFrontOffice/img/language.png" alt="">
                                <div>Fran??ais</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Fran??ais</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="#"><i class="fa fa-user"></i> Connexion</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="<?php echo base_url(); ?>assetFrontOffice/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index.html">Acceuil</a></li>
                            <li><a href="./shop-grid.html">Boutique</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.html">Shop Details</a></li>
                                    <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="./contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>liste des Cat??gories</span>
                        </div>
                        <ul>
                            <?php 
                            foreach ($allCategorie->result() as $row)
                                {
                                        echo '
                                            <li> <a href="'.base_url().'frontOffice/index/'.$row->id.'">'.$row->categorie.'</a> </li>
                                        ';
                                } 
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    Cat??gories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="Que cherchez-vous ? ...">
                                <button type="submit" class="site-btn">Rechercher</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+261 32 93 717 64</h5>
                                <span>Assistance 24h/24 et 7j/7</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="<?php echo base_url(); ?>assetFrontOffice/img/hero/banner.jpg">
                        <div class="hero__text">
                            <span>FRUITS ET MEGUMES FRAIS</span>
                            <h2>V??g??tal <br/>100% Bio</h2>
                            <p>Ramassage et livraison gratuits disponibles</p>
                            <a href="#" class="primary-btn">ACHETEZ MAINTENANT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="<?php echo base_url(); ?>assetFrontOffice/img/categories/cat-4.jpg">
                            <h5><a href="#">testt</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Nouveaux Produit</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">Tout</li>
                            <li data-filter=".oranges">Fruits</li>
                            <li data-filter=".fresh-meat">Viande</li>
                            <li data-filter=".vegetables">Legume</li>
                            <li data-filter=".fastfood">Fastfood</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <?php 
                        $cat="";
                        foreach ($newProduit->result() as $row)
                        {
                            if($row->idCategorie == 1)
                            {
                                $cat="fresh-meat";
                            }
                            else if($row->idCategorie == 2)
                            {
                                $cat="vegetables";
                            }
                            else if($row->idCategorie == 3)
                            {
                                $cat="fastfood";
                            }
                            else if($row->idCategorie == 4)
                            {
                                $cat="oranges";
                            }
                            echo 
                            '
                                 <div class="col-lg-3 col-md-4 col-sm-6 mix '.$cat.' ">
                                    <div class="featured__item">
                                        <div class="featured__item__pic set-bg" data-setbg="'.base_url().'uploads/images/'.$row->image.'">
                                            <ul class="featured__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="'.base_url().'frontOffice/fiche/'.$row->id.'"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="featured__item__text">
                                            <h6><a href="#">'.$row->nom.'</a></h6>
                                            <h5>'.$row->prix.' Ariary</h5>
                                        </div>
                                    </div>
                                </div>
                            ';
                        } 
                ?>

            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="<?php echo base_url(); ?>assetFrontOffice/img/banner/banner-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="<?php echo base_url(); ?>assetFrontOffice/img/banner/banner-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="latest-product__text">
                        <h4>Produits les plus vendu</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <?php
                                    for($i=0 ; $i<3 ; $i++)
                                    {
                                            echo
                                            '
                                                    <a href="#" class="latest-product__item">
                                                        <div class="latest-product__item__pic">
                                                            <img src="'.base_url().'uploads/images/'.$TopProduit->result()[$i]->image.'" alt="">
                                                        </div>
                                                        <div class="latest-product__item__text">
                                                            <h6>'.$TopProduit->result()[$i]->nom.'</h6>
                                                            <span>'.$TopProduit->result()[$i]->prix.' Ariary</span>
                                                            <span>'.$TopProduit->result()[$i]->vente.' Ventes</span>
                                                        </div>
                                                    </a>
                                                
                                            ';
                                    }

                                ?>
                            </div>
                             <div class="latest-prdouct__slider__item">
                                <?php
                                    for($i=2 ; $i<count($TopProduit->result()) ; $i++)
                                    {
                                            echo
                                            '
                                                    <a href="#" class="latest-product__item">
                                                        <div class="latest-product__item__pic">
                                                            <img src="'.base_url().'uploads/images/'.$TopProduit->result()[$i]->image.'" alt="">
                                                        </div>
                                                        <div class="latest-product__item__text">
                                                            <h6>'.$TopProduit->result()[$i]->nom.'</h6>
                                                            <span>'.$TopProduit->result()[$i]->prix.' Ariary</span>
                                                            <span>'.$TopProduit->result()[$i]->vente.' Ventes</span>
                                                        </div>
                                                    </a>
                                                
                                            ';
                                    }

                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="latest-product__text">
                        <h4>Produits les mieux not??s</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <?php
                                    for($i=0 ; $i<3 ; $i++)
                                    {
                                            echo
                                            '
                                                    <a href="#" class="latest-product__item">
                                                        <div class="latest-product__item__pic">
                                                            <img src="'.base_url().'uploads/images/'.$produitMieuxNote->result()[$i]->image.'" alt="">
                                                        </div>
                                                        <div class="latest-product__item__text">
                                                            <h6>'.$produitMieuxNote->result()[$i]->nom.'</h6>
                                                            <span>'.$produitMieuxNote->result()[$i]->prix.' Ariary</span>
                                                            <span>'.$produitMieuxNote->result()[$i]->note.' Notes</span>
                                                        </div>
                                                    </a>    
                                            ';
                                    }

                                ?>
                            </div>
                            <div class="latest-prdouct__slider__item">
                            <?php
                                    for($i=2 ; $i<count($produitMieuxNote->result()) ; $i++)
                                    {
                                            echo
                                            '
                                                    <a href="#" class="latest-product__item">
                                                        <div class="latest-product__item__pic">
                                                            <img src="'.base_url().'uploads/images/'.$produitMieuxNote->result()[$i]->image.'" alt="">
                                                        </div>
                                                        <div class="latest-product__item__text">
                                                            <h6>'.$produitMieuxNote->result()[$i]->nom.'</h6>
                                                            <span>'.$produitMieuxNote->result()[$i]->prix.' Ariary</span>
                                                            <span>'.$produitMieuxNote->result()[$i]->note.' Notes</span>
                                                        </div>
                                                    </a>    
                                            ';
                                    }

                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6" style="display: none;">
                    <div class="latest-product__text" >
                        <h4>Review Products</h4>
                        <div class="latest-product__slider owl-carousel" >
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="<?php echo base_url(); ?>assetFrontOffice/img/latest-product/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="<?php echo base_url(); ?>assetFrontOffice/img/blog/blog-1.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Les astuces de cuisine </a></h5>
                            <p>Parce que nous ne sommes pas toutes des cordons bleus, voici 10 trucs et astuces de cuisine pour ma??triser les bases de bons petits plats ... </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="<?php echo base_url(); ?>assetFrontOffice/img/blog/blog-2.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">6 fa??ons de pr??parer le petit d??jeuner pour 30</a></h5>
                            <p>Dressez la table du petit d??j la veille, en prenant soin de d??j?? mettre la cuill??re de chocolat et le sucre au fond des tasses, le sachet de ...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="<?php echo base_url(); ?>assetFrontOffice/img/blog/blog-3.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">10 conseils judicieux pour une alimentation saine</a></h5>
                            <p>Mangez peu (maximum 500 g par semaine) de viande rouge, comme du b??uf, du veau, du porc et de l'agneau. Ne consommez pas de viande ayant subi une transformation ... </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="<?php echo base_url(); ?>assetFrontOffice/img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello@colorlib.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="footer__copyright__payment"><img src="<?php echo base_url(); ?>assetFrontOffice/img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="<?php echo base_url(); ?>assetFrontOffice/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assetFrontOffice/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assetFrontOffice/js/jquery.nice-select.min.js"></script>
    <script src="<?php echo base_url(); ?>assetFrontOffice/js/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>assetFrontOffice/js/jquery.slicknav.js"></script>
    <script src="<?php echo base_url(); ?>assetFrontOffice/js/mixitup.min.js"></script>
    <script src="<?php echo base_url(); ?>assetFrontOffice/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assetFrontOffice/js/main.js"></script>



</body>

</html>