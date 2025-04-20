<!-- header.php -->
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
    

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">



   <!-- https://fonts.google.com/specimen/VT323-->
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light py-0">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="image/logo.png" alt="logo" style="height: 50px;">
            </a>
            <div class="menu-open-text d-none d-md-none">Théo Le Nezet - Portfolio </div>
            <!-- Bouton hamburger -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav"> <!-- Centré lorsque l'écran est grand -->
                    <li class="nav-item text-center">
                        <a class="nav-link page-acceuil" href="#">
                            Accueil
                        </a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link page-cv" href="#">
                            CV
                        </a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link page-competences" href="#">
                            Compétences
                        </a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link page-veille" href="#">
                            Veille techno
                        </a>
                    </li>

                    <!-- Rapport de stage (Dropdown) -->
                    <li class="nav-item dropdown text-center page-rapport">
                        <a class="nav-link dropdown-toggle disabled-dropdown" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Rapport de stage
                        </a>
                        <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Stage 1</a></li>
                            <li><a class="dropdown-item" href="#">Stage 2</a></li>
                        </ul>
                    </li>
                </ul>

                <!-- À droite -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item text-center">
                        <a class="nav-link" href="https://www.linkedin.com/" target="_blank">
                            <i class="fab fa-linkedin" style="font-size: 1.5rem; color: #0077b5;"></i>
                        </a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link page-signale" href="#">
                            Signalé
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>