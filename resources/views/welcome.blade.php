<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MGS - Nathan Imbert </title>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>

<body> 
    
@foreach ($donnees as $donnee)
    <div class="header">
        <div class="logo">
            <img src="{{ $donnee->logo }}" alt="Logo de l'hôtel">
        </div>

        <nav>
            <ul>
                <li class="menu-item"><a href="#">Accueil</a></li>
                <li class="menu-item"><a href="#">Locations</a></li>
                <li class="menu-item"><a href="#">Activités</a></li>
                <li class="menu-item"><a href="#">Galerie</a></li>
                <li class="menu-item"><a href="#">Tourisme</a></li>
                <li class="menu-item"><a href="#">Contact</a></li>
            </ul>
        </nav>

        <div id="menu-container"></div>
    </div>
    <div class="promotion">

        <h3>-10% SUR NOS CHAMBRES</h3>
        <p>{{ $donnee->text }}</p>
    </div>


    <div class="location">
        <div class="trait"></div>
        <h3>Location et Spa a Bandol</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit perspiciatis, aperiam amet nisi dolores
            provident neque distinctio nihil aspernatur reiciendis, nam labore aut, ad molestias iure quia facere sunt
            exercitationem!
            Ipsam, ipsum. Quo debitis suscipit doloribus atque delectus cumque quam temporibus excepturi hic corrupti
            quos accusantium qui officiis esse blanditiis molestias nobis soluta repellendus facilis, sint non
            accusamus, itaque sunt.</p>
    </div>

    <div class="reservation-box">
        <div class="icon">
            <img src="assets/img/calendrier.png" alt="Calendrier">
        </div>
        <div class="text">RESERVATION</div>
    </div>

    <div class="info-box">
        <p>Meilleur tarif garanti</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium architecto, at quae porro corporis
            cumque non voluptate dolore numquam, cupiditate, consequuntur harum sapiente minima impedit debitis iure!
            Quos, dignissimos soluta.</p>
        <div class="bottom">
            <p>Vérifier les disponibilités</p>
        </div>
    </div>

    @endforeach

    <script src="assets/js/app.js"></script>
</body>

</html>