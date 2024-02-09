@extends('client/client_layout.navbar')
{{------------------------------------------Pour les titre des pages---------------------------------}}
@section('titre')
    Creer un compte
@endsection

@section('content')
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Creation de compte</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Achat</a></li>
                        <li class="breadcrumb-item active">creer un compte</li>
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
                                <input type="email" class="form-control" id="InputEmail" placeholder="Enter Email"> </div>
                            <div class="form-group col-md-6">
                                <label for="InputPassword" class="mb-0">Mot de passe</label>
                                <input type="password" class="form-control" id="InputPassword" placeholder="Password"> </div>
                        </div>
                        <button type="submit" class="btn hvr-hover">Enregistrer</button>
                    </form>
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <form class="mt-3 collapse review-form-box" id="formRegister">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="InputName" class="mb-0">Prenom</label>
                                <input type="text" class="form-control" id="InputName" placeholder="First Name"> </div>
                            <div class="form-group col-md-6">
                                <label for="InputLastname" class="mb-0">nom</label>
                                <input type="text" class="form-control" id="InputLastname" placeholder="Last Name"> </div>
                            <div class="form-group col-md-6">
                                <label for="InputEmail1" class="mb-0">Email</label>
                                <input type="email" class="form-control" id="InputEmail1" placeholder="Enter Email"> </div>
                            <div class="form-group col-md-6">
                                <label for="InputPassword1" class="mb-0">mode de passe</label>
                                <input type="password" class="form-control" id="InputPassword1" placeholder="Password"> </div>
                        </div>
                        <button type="submit" class="btn hvr-hover">Enregistrer</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-6 mb-3 offset-sm-3 offset-lg-3">
                    <div class="Account-address">
                        <div class="title-left">
                            <h3>Creer un compte / Avez-vous deja un compte ? <a href="{{route('se-connecter')}} " style="color: #0e84b5;">Se Conecter</a></h3>
                        </div>
                        <form class="needs-validation" >
                            <!-- <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">First name *</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                    <div class="invalid-feedback"> Valid first name is required. </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Last name *</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                    <div class="invalid-feedback"> Valid last name is required. </div>
                                </div>
                            </div> -->

                            <div class="mb-3">
                                <label for="email">Email *</label>
                                <input type="email" class="form-control" id="email" placeholder="" required>
                                <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                            </div>

                            <div class="mb-3">
                                <label for="email">Mot de passe *</label>
                                <input type="password" class="form-control" id="email" placeholder="" required>
                                <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mb-12">
                                    <input type="submit" value="Enregistrer" class="btn btn-default hvr-hover btn-cart w-100">
                                </div>
                            </div>
                            <hr class="mb-1">
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Cart -->

@endsection
