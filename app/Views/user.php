<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>GrowAdapt - votre guide professionnel pour le suivi de votre agriculture</title>

    <link rel="stylesheet"  href="<?=base_url()?>/css/bootstrap.min.css">
    <link rel="stylesheet"  href="<?=base_url()?>/css/font-awesome.min.css">
    <link rel="stylesheet"  href="<?=base_url()?>/fontawesome/css/all.min.css">
    <link rel="stylesheet"  href="<?=base_url()?>/css/templatemo-style.css">
    <link rel="stylesheet"  href="<?=base_url()?>/css/template-tabs-style.css">


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

    <!-- TABS -->
    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="tabs">
            <!-- TAB 01 : LIST USERS -->
            <input class="input" name="tabs" type="radio" id="tab-1" checked="checked" />
            <label class="label" for="tab-1">Liste des Utilisateurs</label>
            <div class="panel">
                <!-- Title -->
                <h1>titre 01</h1>
                
            </div>

            <!-- TAB 02 : ADD USER -->
            <input class="input" name="tabs" type="radio" id="tab-2" />
            <label class="label" for="tab-2">Ajouter Utilisateur</label>
            <div class="panel">
                
                
            </div>

            <!-- TAB 03 : EDIT USER -->
            <input class="input" name="tabs" type="radio" id="tab-3" />
            <label class="label" for="tab-3">Modifier Utilisateur</label>
            <div class="panel">
                
                
            </div>
        </div>
    </div>

    <!-- FOOTER Component -->
    <footer-component></footer-component>

    <script src="<?=base_url()?>/js/plugins.js"></script>
    <script>

        $(window).on("load", function () {
            $('body').addClass('loaded');
        });

        $(function () {

            // Start counting from the third row
            var counter = 3;

            $("#insertRow").on("click", function (event) {
                event.preventDefault();

                var newRow = $("<tr>");
                var cols = '';

                // Table columns
                cols += '<th scrope="row">' + counter + '</th>';
                cols += '<td><input class="form-control rounded-0" type="text" name="firstname" placeholder="First name"></td>';
                cols += '<td><input class="form-control rounded-0" type="text" name="lastname" placeholder="Last name"></td>';
                cols += '<td><input class="form-control rounded-0" type="text" name="handle" placeholder="Handle"></td>';
                cols += '<td><button class="btn btn-danger rounded-0" id ="deleteRow"><i class="fa fa-trash"></i></button</td>';

                // Insert the columns inside a row
                newRow.append(cols);

                // Insert the row inside a table
                $("table").append(newRow);

                // Increase counter after each row insertion
                counter++;
            });

            // Remove row when delete btn is clicked
            $("table").on("click", "#deleteRow", function (event) {
                $(this).closest("tr").remove();
                counter -= 1
            });
        });

    </script>
</body>

</html>