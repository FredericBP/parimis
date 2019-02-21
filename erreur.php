<html>
    <head>
        <meta charset="UTF-8">
        <title>Une erreur est survenue</title>
        <style>
            body {
                color: #b3995d;
                font-size: 1.3em;
                margin: 100px auto;
                max-width: 960px;
                text-align: center;
            }
            
            img {
                width: 100%;
            }
        </style>
    </head>
    <body>
        <?php
            switch($_GET['erreur']) {
                case '400':
                echo 'Echec de l\'analyse HTTP.';
                break;
                case '401':
                echo 'Le pseudo ou le mot de passe est incorrect.';
                break;
                case '402':
                echo 'Les informations de paiement sont incorrectes.';
                break;
                case '403':
                echo 'Requête interdite.';
                break;
                case '404':
                echo '<p><img src="web/files/404.png" alt="Image erreur 404"></p><p>La page que vous avez demandée n\'existe pas ou n\'est plus disponible.';
                break;
                case '405':
                echo 'Méthode non autorisée.';
                break;
                case '500':
                echo 'Erreur interne du serveur ou serveur saturé.';
                break;
                case '501':
                echo 'Le serveur ne supporte pas le service demandé.';
                break;
                case '502':
                echo 'Mauvaise passerelle.';
                break;
                case '503':
                echo 'Service indisponible.';
                break;
                case '504':
                echo 'Temps de réponse trop long.';
                break;
                case '505':
                echo 'Version HTTP non supportée.';
                break;
                default:
                echo 'Une erreur est survenue.';
            }
        ?>
    </body>
</html>