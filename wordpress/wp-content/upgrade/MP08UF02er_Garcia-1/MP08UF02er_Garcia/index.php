<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/style.css">
    <style>
        *{
            margin: 0 auto;
        }

        @media screen and (max-width:480px){
        body{
            background: pink;
        }
        }

        .contenedorprincipal{
            
            background: linear-gradient(220deg,pink, ivory);
            animation: aa 14s ease infinite;
        }

        @keyframes aa{
            0% {
                background-position: 0% 100%;
            }
            50% {
                background-position: 100% 0%;
            }
            100% {
                background-position: 0% 100%;
            }
        }
        #primer{
           
            height: 589px;
            width: 970px;
        }
        .titol{
            display: inline-block;
            text-align: center;
            margin: 0 auto;
            margin-top: 50px;
            font-size: 2rem;
            font-family: Arial, Helvetica, sans-serif;
        }
        .titular{
            margin: 0 auto;
            width: 405px;
        }
        #and{
            color:grey;
        }
        .cotxe{
            width: 970px;
            height: 480px;
            animation: ss 80s infinite;
        }

        @keyframes ss {
            0%{
                background-image: url("img/ani/back.png");
                background-size:contain;
                background-repeat: no-repeat;
                background-position: center;
            }
            10%{
                background-image: url("img/ani/bean.png");
                background-size:contain;
                background-repeat: no-repeat;
                background-position: center;
            }
            20%{
                background-image: url("img/ani/bond.png");
                background-size:contain;
                background-repeat: no-repeat;
                background-position: center;
            }
            30%{
                background-image: url("img/ani/break.png");
                background-size:contain;
                background-repeat: no-repeat;
                background-position: center;
            }
            40%{
                background-image: url("img/ani/ghost.png");
                background-size:contain;
                background-repeat: no-repeat;
                background-position: center;
            }
            50%{
                background-image: url("img/ani/pulp.png");
                background-size:contain;
                background-repeat: no-repeat;
                background-position: center;
            }
            60%{
                background-image: url("img/ani/rider.png");
                background-size:contain;
                background-repeat: no-repeat;
                background-position: center;
            }
            80%{
                background-image: url("img/ani/taxi.png");
                background-size:contain;
                background-repeat: no-repeat;
                background-position: center;
            }
            100%{
                background-image: url("img/ani/team.png");
                background-size:contain;
                background-repeat: no-repeat;
                background-position: center;
            }
        
            
        }


        
        #segon{
        
            height: 100%;
            width: 970px;
        }
        .contenidor{
            height: 240px;
            width: 280px;
            
            display: inline-block;
            margin: 0 auto;
            margin: 20px;
        }
        #tercer{
            
            height: 220px;
            width: 100%;
        }
        .imatge{
            height: 200px;
            background-color: grey;
            opacity: 50%;
            background-repeat: no-repeat;
            background-size: cover;
        }
        #pulp{
            background-image: url("img/small/small_pulp.jpg");
        }
        #taxi{
            background-image: url("img/small/small_taxi.jpg");
        }
        #gold{
            background-image: url("img/small/small_bond.jpg");
        }
        #ghost{
            background-image: url("img/small/small_ghost.jpg");
        }
        #bean{
            background-image: url("img/small/small_bean.jpg");
        }
        #back{
            background-image: url("img/small/small_back.jpg");
        }
        #knight{
            background-image: url("img/small/small_rider.jpg");
        }
        #the{
            background-image: url("img/small/small_team.jpg");
        }
        #breaking{
            background-image: url("img/small/small_break.jpg");
        }
        .text  {
            height: 40px;
            background-color: aliceblue;
            
            font-size: 1rem;
            font-family: Arial, Helvetica, sans-serif;
            color: grey;
            opacity: 50%;

        }
        .text:hover{
            opacity: 100%;
        }
        .imatge:hover{
            opacity: 100%;
        }
    
        
        #tercer #img{
            width: 200px;
            height: 200px;
            background-image: url("img/logo_carsandfilms.png");
            background-size: cover;
            

        }



    </style>
</head>
<body>
    <div class="contenedorprincipal">


        <div id="primer">
                <div class="titular">
                    <div id="cars" class="titol"><h1>cars</h1></div>
                    <div id="and" class="titol"><h1>and</h1></div>
                    <div id="films" class="titol"><h1>films</h1></div>
                </div>
                <div id="cotxe" class="cotxe"></div>
        </div>



        <div id="segon">
            <div class="ee">
                <div id="pp" class="contenidor">
                    <div id="pulp" class="imatge"></div>
                    <div id="12" class="text"><p>Pulp Fiction</p></div>
                </div>
                <div id="pp" class="contenidor">
                    <div id="taxi" class="imatge"></div>
                    <div id="22" class="text"><p>Taxi Driver</p></div>
                </div>
                <div id="pp" class="contenidor">
                    <div id="gold" class="imatge"></div>
                    <div id="32" class="text"><p>Goldfinger</p></div>
                </div>
                <br>

                <div id="contenidor" class="contenidor">
                    <div id="ghost" class="imatge"></div>
                    <div id="42" class="text"><p>Ghost Busters</p></div>
                </div>
                <div id="contenidor" class="contenidor">
                    <div id="bean" class="imatge"></div>
                    <div id="52" class="text"><p>Mr.Bean</p></div>
                </div>
                <div id="contenidor" class="contenidor">
                    <div id="back" class="imatge"></div>
                    <div id="62" class="text"><p>Back to the Future</p></div>
                </div>

                <br>
                <div id="contenidor" class="contenidor">
                    <div id="knight" class="imatge"></div>
                    <div id="72" class="text"><p>Knight Rider</p></div>
                </div>
                <div id="contenidor" class="contenidor">
                    <div id="the" class="imatge"></div>
                    <div id="82" class="text"><p>The A-Team</p></div>
                </div>
                <div id="contenidor" class="contenidor">
                    <div id="breaking" class="imatge"></div>
                    <div id="92" class="text"><p>Breaking Bad</p></div>
                </div>

            </div>

        </div>


        <div id="tercer">
            <div id="img"></div>
        </div>
    </div>
    
</body>
</html>