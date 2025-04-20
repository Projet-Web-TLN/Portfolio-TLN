<!-- footer.php -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Mon Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <!-- Font Awesome pour les icônes (ici pour LinkedIn) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    

</head>

<body>
<footer class="footer border-top mt-5 pt-5">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-auto">
        <a href="#" class="footer-link nav-link">Accueil</a>
      </div>
      <div class="col-auto">
        <a href="#" class="footer-link nav-link">CV</a>
      </div>
      <div class="col-auto">
        <a href="#" class="footer-link nav-link">Compétences</a>
      </div>
      <div class="col-auto">
        <a href="#" class="footer-link nav-link">Veille Techno</a>
      </div>

    <!-- Rapport de stage dropdown -->
    <div class="col-auto dropup">
    <a href="#" class="footer-link nav-link dropdown-toggle disabled-dropdown" id="rapportStageBtn" aria-expanded="false">
        Rapport de stage
    </a>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Stage 1</a></li>
        <li><a class="dropdown-item" href="#">Stage 2</a></li>
    </ul>
    </div>
    <!-- Lien centré tout en bas -->
    <div class="text-center mt-3 mb-2">
      <a href="page-signale.html" class="footer-signal-link">Signaler un problème - Suggérer une amélioration</a>
    </div>
  </div>

  <div class="text-center">
    <p class="footer-small-text">Copyright © 2025. Tous droits réservés.</p>
  </div>
</footer>