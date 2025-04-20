document.addEventListener('DOMContentLoaded', function () {
  const navbarCollapse = document.querySelector('.navbar-collapse');
  const navbar = document.querySelector('.navbar');
  let timeoutId;  // Identifiant du timeout pour la fermeture
  let isHovering = false;  // Vérifier si la souris est sur la navbar ou le menu
  let isClicking = false;  // Vérifier si un élément du menu a été cliqué

  // Quand la souris entre dans la navbar, on annule la fermeture
  navbar.addEventListener('mouseenter', function () {
    isHovering = true;  // La souris est sur la navbar
    clearTimeout(timeoutId);  // Annuler toute tentative de fermeture
  });

  // Quand la souris quitte la navbar, planifier la fermeture du menu
  navbar.addEventListener('mouseleave', function () {
    isHovering = false;  // La souris n'est plus sur la navbar
    // Attendre un délai avant de fermer le menu si la souris n'est plus sur la navbar
    timeoutId = setTimeout(function () {
      if (!isHovering && navbarCollapse.classList.contains('show') && !isClicking) {
        const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
        if (bsCollapse) {
          bsCollapse.hide();  // Fermer le menu après un délai
        }
      }
    }, 300);  // Délai de 300ms avant la fermeture
  });

  // Quand la souris entre dans le menu déroulant, on garde le menu ouvert
  navbarCollapse.addEventListener('mouseenter', function () {
    isHovering = true;  // La souris est sur le menu
    clearTimeout(timeoutId);  // Annuler la fermeture du menu
  });

  // Quand la souris quitte le menu déroulant, planifier la fermeture
  navbarCollapse.addEventListener('mouseleave', function () {
    isHovering = false;  // La souris n'est plus sur le menu
    timeoutId = setTimeout(function () {
      if (!isHovering && navbarCollapse.classList.contains('show') && !isClicking) {
        const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
        if (bsCollapse) {
          bsCollapse.hide();  // Fermer le menu après un délai
        }
      }
    }, 300);  // Délai de 300ms avant la fermeture
  });

  // Empêcher la fermeture si un élément du menu est cliqué
  document.querySelectorAll('.navbar-collapse .nav-link').forEach(item => {
    item.addEventListener('click', function () {
      isClicking = true;  // L'utilisateur est en train de cliquer sur un élément
      clearTimeout(timeoutId);  // Annuler le timeout de fermeture
    });
  });

  // Réinitialiser isClicking lorsque la fermeture est effectuée
  navbarCollapse.addEventListener('hidden.bs.collapse', function () {
    isClicking = false;
  });

  // Quand on clique sur le bouton hamburger (toggle)
  const hamburgerBtn = document.querySelector('.navbar-toggler');
  hamburgerBtn.addEventListener('click', function () {
    // Vérifier si le menu est déjà ouvert
    const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
    if (navbarCollapse.classList.contains('show')) {
      // Si le menu est ouvert, annuler le délai de fermeture
      clearTimeout(timeoutId);
    } else {
      // Si le menu est fermé, réinitialiser isClicking pour permettre la fermeture avec le délai
      isClicking = false;
    }
  });
});
