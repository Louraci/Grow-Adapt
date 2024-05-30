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
    
    <!-- NAVBAR Component -->
    <navbar-component></navbar-component>

    <!-- HEADER -->
    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="<?=base_url()?>/img/front_img.webp">
        <form class="d-flex tm-search-form">
            <input class="form-control tm-search-input" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success tm-search-btn" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>
    <!-- Signin/Up form -->
    <div id="container" class="container">
       
    <?php if (session()->has('error')): ?>
    <div class="alert alert-danger" role="alert">
        <?= session('error') ?>
    </div>
<?php endif; ?>

<?php if (session()->has('success')): ?>
    <div class="alert alert-success" role="alert">
        <?= session('success') ?>
    </div>
<?php endif; ?>

        <!-- FORM SECTION -->
        <div class="row">
            
            <!-- SIGN UP -->
          <form class="col align-items-center flex-col sign-up" action="<?=base_url('register')?> " method="post"> 
                <div class="form-wrapper align-items-center">

                    <div class="form sign-up"  >
                        <div class="input-group">
                            <i class='bx bxs-user'></i>
                            <input type="text"   name="Nom" placeholder="Nom">
                        </div>
                        <div class="input-group">
                            <i class='bx bx-mail-send'></i>
                            <input type="email" name="Email"  placeholder="Email">
                        </div>
                        <div class="input-group">
                            <i class='bx bxs-lock-alt'></i>
                            <input type="password"  name="password"  placeholder="password">
                        </div>
                        <div class="input-group">
                            <i class='bx bxs-lock-alt'></i>
                            <input type="password"   name="confirm_password"  placeholder="confirm_password">
                        </div>
                        <button type="submit"> 
                            S'inscrire
                        </button>
                        <p>
                            <span>
                                Vous avez déjà un compte?
                            </span>
                            <b onclick="toggle()" class="pointer">s'authentifier ici</b>
                        </p>
                    </div>
                </div>

             </form>
           
            <!-- END SIGN UP -->
            <!-- SIGN IN -->
            
            <form class="col align-items-center flex-col sign-in" action="<?= base_url('login') ?>" method="post">>
                <div class="form-wrapper align-items-center">
                    <div class="form sign-in">
                        <div class="input-group">
                            <i class='bx bxs-user'></i>
                            <input type="text" placeholder="Nom">
                        </div>
                        <div class="input-group">

                            <i class='bx bxs-lock-alt'></i>
                            <input type="password" placeholder="password">
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
             </form>
            
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

        <!-- PAGINATION -->
        <div class="row tm-mb-90">
            <div class="col-12 d-flex justify-content-between align-items-center tm-paging-col">
                <a  href="<?=base_url()?>/javascript:void(0);" class="btn btn-primary tm-btn-prev mb-2 disabled"><</a>
                <div class="tm-paging d-flex">
                    <a  href="<?=base_url()?>/javascript:void(0);" class="active tm-paging-link">1</a>
                    <a  href="<?=base_url()?>/javascript:void(0);" class="tm-paging-link">2</a>
                    <a  href="<?=base_url()?>/javascript:void(0);" class="tm-paging-link">3</a>
                </div>
                <a  href="<?=base_url()?>/javascript:void(0);" class="btn btn-primary tm-btn-next">></a>
            </div>            
        </div>
    </div> 

    <!-- FOOTER Component -->
    <footer-component></footer-component>
    
    <script src="<?=base_url()?>/js/plugins.js"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>
</body>
</html>