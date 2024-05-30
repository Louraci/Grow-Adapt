<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GrowAdapt - votre guide professionnel pour le suivi de votre agriculture</title>
    <link rel="stylesheet"  href="<?=base_url()?>/css/bootstrap.min.css">
    <link rel="stylesheet"  href="<?=base_url()?>/fontawesome/css/all.min.css">
    <link rel="stylesheet"  href="<?=base_url()?>/css/templatemo-style.css">
    <link rel="stylesheet"  href="<?=base_url()?>/css/template-sign-style.css">

    <script src="<?=base_url()?>/shared/navbar.js" type="text/javascript" defer></script>
    <script src="<?=base_url()?>/shared/footer.js" type="text/javascript" defer></script>
</head>

<body>
    <!-- Page Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>

    <!-- Signin/Up form -->
    <div id="container" class="container">
        
        <!-- FORM SECTION -->
        <div class="row">
            
            <!-- SIGN UP -->
            <div class="col align-items-center flex-col sign-up">
                <div class="form-wrapper align-items-center">
                    <div class="form sign-up">
                        <div class="input-group">
                            <i class='bx bxs-user'></i>
                            <input type="text" placeholder="Nom d'utilisateur">
                        </div>
                        <div class="input-group">
                            <i class='bx bx-mail-send'></i>
                            <input type="email" placeholder="Email">
                        </div>
                        <div class="input-group">
                            <i class='bx bxs-lock-alt'></i>
                            <input type="password" placeholder="Mot de passe">
                        </div>
                        <div class="input-group">
                            <i class='bx bxs-lock-alt'></i>
                            <input type="password" placeholder="Confirmer Mot de passe">
                        </div>
                        <button>
                            S'inscrire
                        </button>
                        <p>
                            <span>
                                Vous avez déjà un compte?
                            </span>
                            <b onclick="toggle()" class="pointer">
                                s'authentifier ici
                            </b>
                        </p>
                    </div>
                </div>

            </div>
            <!-- END SIGN UP -->
            <!-- SIGN IN -->
            <div class="col align-items-center flex-col sign-in">
                <div class="form-wrapper align-items-center">
                    <div class="form sign-in">
                        <div class="input-group">
                            <i class='bx bxs-user'></i>
                            <input type="text" placeholder="Nom d'utilisateur">
                        </div>
                        <div class="input-group">
                            <i class='bx bxs-lock-alt'></i>
                            <input type="password" placeholder="Mot de passe">
                        </div>
                        <button>
                            S'authentifier
                        </button>
                        <p>
                            <b>
                                Mot de passe oublié?
                            </b>
                        </p>
                        <p>
                            <span>
                                Vous n'avez pas de compte?
                            </span>
                            <b onclick="toggle()" class="pointer">
                                S'inscrire ici
                            </b>
                        </p>
                    </div>
                </div>
                <div class="form-wrapper">

                </div>
            </div>
            <!-- END SIGN IN -->
        </div>
        <!-- END FORM SECTION -->
        <!-- CONTENT SECTION -->
        <div class="row content-row">
            <!-- SIGN IN CONTENT -->
            <div class="col align-items-center flex-col">
                
                <div class="text sign-in">
                    
                    <h2>
                        <a href="agriculteur">
                            <i class="fas fa-leaf mr-2"></i>
                            GrowAdapt
                        </a>
                    </h2>

                    <h2>
                        Welcome
                    </h2>

                    

                </div>
                <div class="img sign-in">

                </div>
            </div>
            <!-- END SIGN IN CONTENT -->
            <!-- SIGN UP CONTENT -->
            <div class="col align-items-center flex-col">
                <div class="img sign-up">

                </div>
                <div class="text sign-up">
                    <h2>
                        <a href="agriculteur">
                            <i class="fas fa-leaf mr-2"></i>
                            GrowAdapt
                        </a>
                    </h2>
                    <h2>
                        Nous Rejoindre
                    </h2>

                </div>
            </div>
            <!-- END SIGN UP CONTENT -->
        </div>
        <!-- END CONTENT SECTION -->
    </div>

    <script src="<?=base_url()?>/js/plugins.js"></script>

    <script>
        $(window).on("load", function () {
            $('body').addClass('loaded');
        });

        let container = document.getElementById('container')

        toggle = () => {
            container.classList.toggle('sign-in')
            container.classList.toggle('sign-up')
        }

        setTimeout(() => {
            container.classList.add('sign-in')
        }, 200)

    </script>

</body>

</html>