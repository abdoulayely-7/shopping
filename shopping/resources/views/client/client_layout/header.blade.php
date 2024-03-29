<div class="main-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="custom-select-box">
                    <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
                        <option>¥ JPY</option>
                        <option>$ USD</option>
                        <option>€ EUR</option>
                    </select>
                </div>
                <div class="right-phone-box">
                    <p>Nous appeller : <a href="#"> +221 77 379 53 83 / +221 77 954 45 08</a></p>
                </div>
                <div class="our-link">
                    <ul>
                        <li><a href="#"><i class="fa fa-user s_color"></i> mon Compte</a></li>
                        <li><a href="#"><i class="fas fa-location-arrow"></i> Notre  Emplacement</a></li>
                        <li><a href="#"><i class="fas fa-headset"></i> Nous contacter</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="login-box">
                    <select id="basic" class="selectpicker show-tick form-control" data-placeholder="Sign In">
                        <option>Inscrivez vous ici</option>
                        <option>Connectez vous </option>
                    </select>
                </div>
                <div class="text-slid-box">
                    <div id="offer-box" class="carouselTicker">
                        <ul class="offer-box">
                            <li>
                                <i class="fab fa-opencart"></i> 20% de reduction sur l'ensemble des qrticles  entrer le code Promo : offT80
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> 50% - 80% de reduction sur les légumes
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i>  10% de reduction ! Acheter des légumes
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i>  50% de reduction ! Acheter maintenant
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> 10% de reduction ! acheter des légumes
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> 50% - 80% reduction sur les légumes
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i>  20% de reduction  Entrer le   code Promo : offT30
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i>  50% de reduction ! Acheter maintenant
                            </li>
                        </ul>
                    </div>
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
                <a class="navbar-brand" href="{{route('index')}}"><img src="frontend/images/logo.png" class="logo" alt=""></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
{{-------------------------------------------------Condition pour activer et desactiver nos lien de page---------------------------------------------}}
                    <li class="nav-item {{request()-> is('/') ? 'active' : ''}}">
                        <a class="nav-link" href="{{route('index')}}">Accueil</a>
                    </li>
                    <li class="nav-item {{request()-> is ('acheter') ? 'active' : ''}}">
                        <a href="{{route('acheter')}}" class="nav-link">Achat</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->

            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                    <li class="side-menu">
                        <a href="#">
                            <i class="fa fa-shopping-bag"></i>
                            <span class="badge">3</span>
                            <p>Mon panier</p>
                        </a>
                    </li>
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
                        <a href="#" class="photo"><img src="frontend/images/img-pro-01.jpg" class="cart-thumb" alt="" /></a>
                        <h6><a href="#">Delica omtantur </a></h6>
                        <p>1x - <span class="price">$80.00</span></p>
                    </li>
                    <li>
                        <a href="#" class="photo"><img src="frontend/images/img-pro-02.jpg" class="cart-thumb" alt="" /></a>
                        <h6><a href="#">Omnes ocurreret</a></h6>
                        <p>1x - <span class="price">$60.00</span></p>
                    </li>
                    <li>
                        <a href="#" class="photo"><img src="frontend/images/img-pro-03.jpg" class="cart-thumb" alt="" /></a>
                        <h6><a href="#">Agam facilisis</a></h6>
                        <p>1x - <span class="price">$40.00</span></p>
                    </li>
                    <li class="total">
                        <a href="{{route('panier')}}" class="btn btn-default hvr-hover btn-cart">Voir le panier</a>
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
<form>
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
</form>
<!-- End Top Search -->
