<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messagerie - Générateur de QR Code Pour vos Souhaits les Plus Chaleureux</title>
    <link rel="icon" href="img/logoQrCode.webp" sizes="32x32">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/qrcode/build/qrcode.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
            background: linear-gradient(80deg, #D62976, #FEDA77, #4C69F5, #FFB800, #8A3FFC);
            color: #FFFFFF;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;

        }
        /* Style pour le logo */
        #logo {
            position: absolute;
            top: 10px;   /* Espacement du logo du haut de la page */
            left: 10px;  /* Espacement du logo du côté gauche */
            width: 130px; /* Ajustez la taille du logo selon votre besoin */
            height: auto; /* Garde les proportions du logo */
        }
        .container {
            width: 100%;
            max-width: 1200px; /* Limite la largeur à 1200px sur les grands écrans */
            margin: 0 auto;
            padding: 20px;
        }
        input, button {
            padding: 10px;
            margin: 10px;
            font-size: 16px;
        }
        #qrcode img {
            margin-top: 20px;
        }
        @media (max-width: 768px) {
            h2 {
                font-size: 1.5em; /* Réduit la taille du titre sur mobile */
            }

            h3 {
                font-size: 1em; /* Réduit la taille du texte sur mobile */
            }

            .container {
                padding: 10px; /* Réduit les marges et paddings sur mobile */
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-2">
                <!-- Ajout du logo en haut à gauche -->
                <img id="logo" src="img/logoQrCode-removebg.png" alt="Logo QR Wishes">
            </div>
            <div class="col-5" style="color: wheat;">
                <h1><b>QR Wishes</b></h1>
                <h2>La magie des vœux en un scan.</h2><br>
                <h3 class="titre" style="background-color: blueviolet; border-radius:10px">✨ Joyeux Noël et Bonne Année 2025 - Nos Meilleurs Vœux pour Vous ! ✨</h3><br>
                <!-- <h6>Célébrez la magie des fêtes avec vos meilleurs vœux pour Noël et le Nouvel An ! Que cette saison vous apporte joie, amour et réussite pour l'année à venir. 🎄🎉</h6> -->
                <!-- <p>Entrez votre message et générer un QR code :</p> -->
                <textarea style="border-radius: 5px;" id="textInput" rows="5" cols="40" placeholder="Écrivez votre vœux ici..."></textarea><br>
                <button onclick="generateQRCode()" style="background-color:aqua; border-radius: 15px;">Générer le QR Code</button>
            </div>
            <div class="col-5">
                <div id="qrcode" style="border-radius: 10px;"></div>
                <button id="downloadBtn" style="display:none; border-radius: 15px;" onclick="downloadQRCode()">Télécharger le QR Code</button>
                <button id="shareBtn" style="display:none;" onclick="shareQRCode()">Partager le QR Code</button>

            </div>
        </div>
    </div>
</body>
<script src="qrCode.js"></script>
</html>
