@extends('client/client_layout.navbar')
{{------------------------------------------Pour les titre des pages---------------------------------}}
@section('titre')
    Paiement
@endsection

@section('content')
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Paiement</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Achat</a></li>
                        <li class="breadcrumb-item active">Paiement</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row new-account-login">
                <div class="col-sm-6 col-lg-6 mb-3">
                    <form class="mt-3 collapse review-form-box" id="formLogin">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="InputEmail" class="mb-0">Email</label>
                                <input type="email" class="form-control" id="InputEmail" placeholder="Entree votre email"> </div>
                            <div class="form-group col-md-6">
                                <label for="InputPassword" class="mb-0">Mot de passe</label>
                                <input type="password" class="form-control" id="InputPassword" placeholder="Mot de passe"> </div>
                        </div>
                        <button type="submit" class="btn hvr-hover">Se connecter</button>
                    </form>
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <form class="mt-3 collapse review-form-box" id="formRegister">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="InputName" class="mb-0">Prenom</label>
                                <input type="text" class="form-control" id="InputName" placeholder="Prenom"> </div>
                            <div class="form-group col-md-6">
                                <label for="InputLastname" class="mb-0">Nom</label>
                                <input type="text" class="form-control" id="InputLastname" placeholder="Nom"> </div>
                            <div class="form-group col-md-6">
                                <label for="InputEmail1" class="mb-0">Email</label>
                                <input type="email" class="form-control" id="InputEmail1" placeholder="Entrer Email"> </div>
                            <div class="form-group col-md-6">
                                <label for="InputPassword1" class="mb-0">Mot de passe</label>
                                <input type="password" class="form-control" id="InputPassword1" placeholder="Mot de passe"> </div>
                        </div>
                        <button type="submit" class="btn hvr-hover">Register</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="checkout-address">
                        <div class="title-left">
                            <h3>Adresse</h3>
                        </div>
                        <form class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">Prenom *</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                    <div class="invalid-feedback"> Valid first name is required. </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Nom *</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                    <div class="invalid-feedback"> Valid last name is required. </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email">Email *</label>
                                <input type="email" class="form-control" id="email" placeholder="">
                                <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                            </div>
                            <div class="mb-3">
                                <label for="address">Address *</label>
                                <input type="text" class="form-control" id="address" placeholder="" required>
                                <div class="invalid-feedback"> Please enter your shipping address. </div>
                            </div>
                            <hr class="mb-4">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="cc-name">Nom sur la carte</label>
                                    <input type="text" class="form-control" id="cc-name" placeholder="" required> <small class="text-muted">Full name as displayed on card</small>
                                    <div class="invalid-feedback"> Name on card is required </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="cc-number">Numero sur carte credit</label>
                                    <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                    <div class="invalid-feedback"> Credit card number is required </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">Date d'expiration</label>
                                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                    <div class="invalid-feedback"> Expiration date required </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">CVV</label>
                                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                    <div class="invalid-feedback"> Security code required </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="payment-icon">
                                        <ul>
                                            <li><img class="img-fluid" src="frontend/images/payment-icon/1.png" alt=""></li>
                                            <li><img class="img-fluid" src="frontend/images/payment-icon/2.png" alt=""></li>
                                            <li><img class="img-fluid" src="frontend/images/payment-icon/3.png" alt=""></li>
                                            <li><img class="img-fluid" src="frontend/images/payment-icon/5.png" alt=""></li>
                                            <li><img class="img-fluid" src="frontend/images/payment-icon/7.png" alt=""></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-12">
                                    <input type="submit" value="Payer" class="btn btn-default hvr-hover btn-cart w-100">
                                </div>
                            </div>
                            <hr class="mb-1">
                        </form>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="order-box">
                                <div class="title-left">
                                    <h3>Your order</h3>
                                </div>
                                <div class="d-flex">
                                    <div class="font-weight-bold">Produict</div>
                                    <div class="ml-auto font-weight-bold">Total</div>
                                </div>
                                <hr class="my-1">
                                <div class="d-flex">
                                    <h4>Sub Total</h4>
                                    <div class="ml-auto font-weight-bold"> $ 440 </div>
                                </div>
                                <div class="d-flex">
                                    <h4>Discount</h4>
                                    <div class="ml-auto font-weight-bold"> $ 40 </div>
                                </div>
                                <hr class="my-1">
                                <div class="d-flex">
                                    <h4>Coupon Discount</h4>
                                    <div class="ml-auto font-weight-bold"> $ 10 </div>
                                </div>
                                <div class="d-flex">
                                    <h4>Tax</h4>
                                    <div class="ml-auto font-weight-bold"> $ 2 </div>
                                </div>
                                <div class="d-flex">
                                    <h4>Shipping Cost</h4>
                                    <div class="ml-auto font-weight-bold"> Free </div>
                                </div>
                                <hr>
                                <div class="d-flex gr-total">
                                    <h5>Grand Total</h5>
                                    <div class="ml-auto h5"> $ 388 </div>
                                </div>
                                <hr> </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Cart -->

@endsection
