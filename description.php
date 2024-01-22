<?php 
 include "./partials/head.php";
 include "./partials/header.php";
?>


<body>
    <!-- Page de description commune pour les vêtements -->
    <img src="" class="photoVetement" alt="">

    <script>
        document.addEventListener('DOMContentLoaded', function() {
    // Récupère les paramètres de l'URL
    var urlParams = new URLSearchParams(window.location.search);
    var nomVetement = urlParams.get('nom');
    var photoVetement = urlParams.get('photo');

    // Met à jour la page de description
    var nomVetementElement = document.getElementById('nomVetement');
    var photoVetementElement = document.getElementById('photoVetement');

    // Définissez les informations du produit
    nomVetementElement.innerText = nomVetement || 'Nom du Vêtement';
    photoVetementElement.src = photoVetement || 'default.jpg';
});
    </script>
</body>
</html>