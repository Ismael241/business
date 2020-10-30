<!DOCTYPE html>
<html lang="fr">

<head>
    <title>ECOLE 241 BUSINESS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?= theme_url() ?>assets/css/formulaire_candidat.css">
    <!--===============================================================================================-->
</head>

<body>

    <!--============== Start of the container =====================-->
    <div class="container">
        <!--===*** The left ***===-->
        <div class="left">
            <div class="logo">
                <img src="<?= theme_url() ?>assets/images/formulaires/Ebusiness.png" alt="logo de l'Ecole 241 BUSINESS">
            </div>
            <div class="header">
                <h2 class="animation a1">Formulaire du candidat</h2>
            </div>
            <!--===*** Start of Form ***===-->
            <form class="form" action="<?= site_url('candidat_controller/recuperation_donnees_candidat') ?>"
                method="POST">
                <input type="nom" name="nom" class="form-field animation a3" placeholder="Nom Ex. SAMBA">
                <input type="prenom" name="prenom" class="form-field animation a3" placeholder="Prenom Ex. Pscale">

                <fieldset>
                    <label for="name">Votre sexe</label>
                    <input type="radio" name="sexe" value="H"><label for="homme">H</label>
                    <input type="radio" name="sexe" value="F"><label for="femme">F</label>
                </fieldset>

                <fieldset>
                    <label for="name">Date de naissance</label>
                    <input type="date" name="date" class="form-field animation a3">
                </fieldset>
                <input type="email" name="mail" class="form-field animation a3" placeholder="Adresse mail">
                <input type="number" name="numero" class="form-field animation a3"
                    placeholder="Numéro de téléphone Ex. 077 01 89 00">
                <input type="number" name="num_what" class="form-field animation a3"
                    placeholder="Numéro de téléphone WhatsApp Ex. 077 01 89 00">

                <fieldset>
                    <label for="horaire">Horaire</label>
                    <input type="radio" name="horaire" value="Matin"><label for="horaire">Matin</label>
                    <input type="radio" name="horaire" value="Après-midi"><label for="horaire">Après-midi</label>
                </fieldset>

                <input type="text" name="domain" class="form-field animation a3"
                    placeholder="Votre domaine d’activité Ex. Artisanat">
                <input type="text" name="service" class="form-field animation a3" placeholder="Type de service">

                <!----<input type="password" name="mot de passe" class="form-field animation a4" placeholder="Votre mot de passe">------>
                <div data-validate="Message is required">
                    <textarea type="text" class="input100" name="attentes" placeholder="Attentes"></textarea>
                </div>
                <button class="animation a6">S’enregistrer</button>
            </form>
            <!--===*** End of Form ***===-->
        </div>
        <!--===*** The right ***===-->
        <div class="right"></div>
    </div>
    <!--============== End of the container =====================-->
    <!--================ File JS =======================-->
    <script src="<?= theme_url() ?>assets/js/formulaire_candidat.js"></script>

</body>


</html>