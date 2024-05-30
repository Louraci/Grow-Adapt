<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>GrowAdapt - votre guide professionnel pour le suivi de votre agriculture</title>

    <link rel="stylesheet" href="<?= base_url() ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/css/template-form-style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/css/templatemo-style.css">

    <script src="<?= base_url() ?>/shared/navbar.js" type="text/javascript" defer></script>
    <script src="<?= base_url() ?>/shared/header.js" type="text/javascript" defer></script>
    <script src="<?= base_url() ?>/shared/footer.js" type="text/javascript" defer></script>

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

        <form id="survey-form" method="GET">

            <!-- Sélectionner une plante -->

            <h4> Veuillez sélectionner une plante de référence de la liste suivante </h4>

            <div class="labels">
                <label id="plante-label" for="dropdown">* Choix de la plante</label>
            </div>
            <div class="input-tab">
                <!-- a ce niveau mettre à jour avec les données de la table plante de référence -->
                <select id="dropdown" name="plante-list">
                    <option disabled value="0" selected> la phase du tomate est ...</option>
                    <option value="plante1">Phase 01</option>
                    <option value="plante2">Phase 02</option>
                    <option value="plante3">Phase 03</option>
                    <option value="plante4">Phase 04</option>
                    <option value="plante5">Phase 05</option>
                    <option value="plante6">Phase 06</option>
                </select>
            </div>

            <br>
            <hr>
            <br>

            <h4> Veuillez saisir les éléments d'observation de la plante choisie </h4>

            <div class="labels">
                <label id="hauteur-label" for="hauteur">* Hauteur (cm)</label>
            </div>
            <div class="input-tab">
                <input class="input-field" type="number" id="hauteur" name="hauteur" min="0" max="1200" placeholder="0"
                    disabled required>
            </div>

            <div class="labels">
                <label id="nutriment-label" for="nutriment">* Nutriment</label>
            </div>
            <div class="input-tab">
                <input class="input-field" type="text" id="nutriment" name="nutriment" disabled required>
            </div>

            <div class="labels">
                <label id="number" for="number">* Temp optimal </label>
            </div>
            <div class="input-tab">
                <input class="input-field" type="number" id="temps" name="temps" min="0" max="365" placeholder="0"
                    disabled required>
            </div>

            <div class="labels">
                <label for="designation">Désignation</label>
            </div>
            <div class="input-tab">
                <textarea class="input-field" id="designation" name="designation" rows="10" cols="40" disabled
                    placeholder="................"></textarea>
            </div>

            <div class="btn">
                <button id="submit" type="submit" onsubmit="getValues()" action="planteresult.html"
                    disabled>Valider</button>
            </div>

        </form>
    </div>
    <br>

    <!-- FOOTER Component -->
    <footer-component></footer-component>

    <script src="<?= base_url() ?>/js/plugins.js"></script>
    <script>

        $(window).on("load", function () {
            $('body').addClass('loaded');
        });

        $(document).ready(function () {

            $('#dropdown').change(function () {
                if ($(this).val() == 0) {
                    $('#designation').prop("disabled", true);
                    $('#submit').prop("disabled", true);
                    $('#temps').prop("disabled", true);
                    $('#nutriment').prop("disabled", true);
                    $('#hauteur').prop("disabled", true);
                } else {
                    $('#designation').prop("disabled", false);
                    $('#submit').prop("disabled", false);
                    $('#temps').prop("disabled", false);
                    $('#nutriment').prop("disabled", false);
                    $('#hauteur').prop("disabled", false);
                }
            });

        });

        function getValues() {
            //take all my form values to use them form  my comparaison 
            
        }


    </script>
</body>

</html>