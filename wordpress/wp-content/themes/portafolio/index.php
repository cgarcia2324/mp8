<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clara Garcia Garcia - Portafolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <style>
        /*
            Theme Name: Twenty Twenty-Four
            Theme URI: https: //cgarcia 2324github .com/mp 8px;
            Author: the WordPress team
            Author URI: https://wordpress.org
            Description: portafolio de clara garcia garcia
            Requires at least: 6.4
            Tested up to: 6.4
            Requires PHP: 7.0
            Version: 0.9
            License: Copyleft
            License URI: http://www.gnu.org/licenses/gpl-2.0.html
            Text Domain: portafolio
            Tags: one-column, custom-colors, custom-menu, custom-logo, editor-style, featured-images, full-site-editing, block-patterns, rtl-language-support, sticky-post, threaded-comments, translation-ready, wide-blocks, block-styles, style-variations, accessibility-ready, blog, portfolio, news
        */
        
        body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
        overflow: hidden;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
        }

        .header {
            text-align: center;
            margin-top: 30px;
        }

        .avatar-container {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto;
        }

        .avatar {
            width: 100%;
            border-radius: 50%;
        }

        .name h2 {
            margin: 10px 0 0;
            color: #333;
        }

        .activities {
            margin-top: 20px;
        }

        .activities ul {
            list-style-type: none;
            padding: 0;
        }

        .activities li {
            background-color: #ffb6c1;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .activities a {
            text-decoration: none;
            color: #333;
            align-items: center;
        }

        .activities a:hover {
            color: #ff69b4;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: linear-gradient(45deg, #ffb6c1, #aaffcc, #ffb6c1); /* Colores pastel */
            background-size: 300% 300%;
            animation: gradientAnimation 15s ease infinite;
        }

        @keyframes gradientAnimation {
            0% {
                background-position: 0% 0%;
            }
            50% {
                background-position: 100% 0%;
            }
            100% {
                background-position: 0% 0%;
            }
        }




    </style>
</head>

<body>
    <div class="container">
        <div class="header">
           
            <div class="avatar-container">
                <img src="myAvatar.png" alt="My Avatar" class="avatar">
            </div>
           
            <div class="name">
                <h2>Clara Garcia Garcia</h2>
            </div>
        </div>

        <div class="activities">
            <ul>
                <li><a href="../mp08_UF1_01_garciac/mp08_UF1_01_garciac.html">Practica_01</a></li>
                <li><a href="../mp08_UF1_02_Horari_garciac/">Practica_02</a></li>
                <li><a href="../mp08_UF1_03_feedly_garciac/index.html" class="cuadradoblanco">Practica_03</a></li>
                <li><a href="../mp08_UF1_04_ifpagram_garciac/index.html">Practica_04</a></li>
                <li><a href="../mp08_UF1_05_escacs_garciac/index.html">Practica_05</a></li>
                <li><a href="../mp08_UF1_06_absolute_garciac/index.html">Practica_06</a></li>
                <li><a href="../mp08_UF1_07_floreta_garciac/index.html">Practica_07</a></li>
                <li><a href="../mp08_UF1_08_cara_garciac/index.html">Practica_08</a></li>
                <li><a href="../mp08_UF1_09_photoshop_garciac/index.html">Practica_09</a></li>
                <li><a href="../mp08_UF1_10_pelys_garciac/index.html">Practica_10</a></li>
                <li><a href="../mp08_UF1_11_menudesplegable_garciac/index.html">Practica_11</a></li>
            </ul>
        </div>
    </div>
</body>

</html>