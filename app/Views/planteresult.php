<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>GrowAdapt - votre guide professionnel pour le suivi de votre agriculture</title>

    <link rel="stylesheet"  href="<?=base_url()?>/css/bootstrap.min.css">
    <link rel="stylesheet"  href="<?=base_url()?>/fontawesome/css/all.min.css">
    <link rel="stylesheet"  href="<?=base_url()?>/css/template-form-style.css">
    <link rel="stylesheet"  href="<?=base_url()?>/css/templatemo-style.css">

    <script src="<?=base_url()?>/shared/navbar.js" type="text/javascript" defer></script>
    <script src="<?=base_url()?>/shared/header.js" type="text/javascript" defer></script>
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

    <!-- HEADER Component -->
    <header-component></header-component>

    <!-- Main content -->
    <br>
    <div class="container">           

            <h4> Résultats de l'analyse des données de la plante. </h4>
            <br>
            <h6>La plante "<b>Plante Sélectionnée</b>" est en phase "<b>Phase résultante</b>"</h6>

            <div class="labels">
                <label id="hauteur-label" for="hauteur">Hauteur (cm)</label>
            </div>
            <div class="input-tab">
                <input class="input-field" type="number" id="hauteur" name="hauteur" min="0" max="1200" value="55" readonly>
            </div>

            <div class="labels">
                <label id="nutriment-label" for="nutriment">Nutriment</label>
            </div>
            <div class="input-tab">
                <input class="input-field" type="text" id="nutriment" name="nutriment" value="Le Nutriment" readonly>
            </div>

            <div class="labels">
                <label id="temps-label" for="temps">Temps Optimal (jour)</label>
            </div>
            <div class="input-tab">
                <input class="input-field" type="number" id="temps" name="temps" min="0" max="365" value="0" readonly>
            </div>

            <div class="labels">
                <label for="designation">Désignation</label>
            </div>
            <div class="input-tab">
                <textarea class="input-field" id="designation" name="designation" rows="10" cols="40" readonly>
                    La désignation de la plante
                </textarea>
            </div>

            <br>
            <hr>
            <br>
                        
            <h4> Conseils (commentaires). </h4>
            <div class="labels">
                <label for="conseils"></label>
            </div>
            <div class="input-tab">
                <textarea class="input-field" id="conseils" name="conseils" rows="10" cols="40">
                    Les conseils concernant cette plante
                </textarea>
            </div>


    </div>
    <br>   

    <!-- FOOTER Component -->
    <footer-component></footer-component>

    <script src="<?=base_url()?>/js/plugins.js"></script>
    <script>

        $(window).on("load", function () {
            $('body').addClass('loaded');
        });


    </script>
</body>

</html>