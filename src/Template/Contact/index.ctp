<div class="container wow fadeIn pt-5">

    <!-- Heading -->
    <h2 class="my-5 h2 text-center">Contactez nous</h2>

    <!--Grid row-->
    <div class="row">

        <!--Grid column-->
        <div class="col-8 offset-2">

            <!--Card-->
            <div class="card">

                <!--Card content-->
                <form class="card-body">

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6 mb-2">

                            <!--firstName-->
                            <div class="md-form ">
                                <input type="text" id="firstName" class="form-control">
                                <label for="firstName" class="">Nom</label>
                            </div>

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6 mb-2">

                            <!--lastName-->
                            <div class="md-form">
                                <input type="text" id="lastName" class="form-control">
                                <label for="lastName" class="">Prénom</label>
                            </div>

                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->


                    <!--email-->
                    <div class="md-form mb-5">
                        <input type="text" id="email" class="form-control" placeholder="Entrez votre adresse e-mail">
                        <label for="email" class="">E-mail</label>
                    </div>

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-lg-4 col-md-12 mb-4">

                            <label for="country">Pays</label>
                            <select class="custom-select d-block w-100" id="country" required>
                                <option value="">Pays</option>
                                <option>France</option>
                            </select>
                            <div class="invalid-feedback">
                                Veuillez entrer un pays valide.
                            </div>

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-4 col-md-6 mb-4">

                            <label for="state">Département</label>
                            <select class="custom-select d-block w-100" id="state" required>
                                <option value="">Département</option>
                                <option>Bouches du rhônes</option>
                            </select>
                            <div class="invalid-feedback">
                                Veuillez entrer un département valide.
                            </div>

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-4 col-md-6 mb-4">

                            <label for="zip">Code postal</label>
                            <input type="text" class="form-control" id="zip" placeholder="13" required>
                            <div class="invalid-feedback">
                                Veuillez entrer votre code postal.
                            </div>

                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <label for="cc-name">Message</label>
                            <input type="textarea" class="form-control" id="cc-name" placeholder="Votre message ici."
                                required>
                            <div class="invalid-feedback">
                                Veuillez entrer votre message.
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn button_color btn-lg btn-block" type="submit">Envoyer</button>

                </form>

            </div>
            <!--/.Card-->

        </div>

    </div>
    <!--Grid row-->

</div>