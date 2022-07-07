<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    
</head>

<body>

<style>

*{    
        
            font-family: 'Bebas Neue';
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        footer{
            background-color: rgb(35, 35, 77);
            padding: 50px 0;
        }
        .container-footer{
            max-width: 1400px;
            padding: 0 4%;
            margin: auto;
        
        }
        
        
        .row-footer{
            display: flex;
            flex-wrap: wrap;
        }
        .footer-col{
            width: 25%;
            padding: 0 15px;
        }
        .footer-col h2{
            font-size: 35px;
            color: white;
            margin-bottom: 20px;
            
            font-weight: 500;
            position: relative;
            list-style: none;
            text-transform: uppercase;
        }
        .footer-col ul{
            list-style: none;
        }
        .footer-col ul li{
            margin: 10px 0;
        }
        .footer-col ul li a{
            font-size: 16px;
            text-decoration: none;
            font-weight: 300;
            display: block;
            
        }
        
        .footer-col li{
            display: inline;
            padding: 5px;
        }
        .footer-col p{
            padding: 5px;
            color: white;
        
        }
        .footer-col .img{
            margin-top: 30px;;
        }
        .footer-col .form-sub input{
            width: 100%;
            padding: 10px;
            font-size: 15px;
            outline: none;
            border: 1px solid white;
            border-radius: 40px;
            color: black;
            background-color: white;
        
        }
        .footer-col .form-sub input{
            width: 100%;
            margin-top: 10px;
            padding: 10px;
            font-size: 17px;
            outline: none;
            border: none;
            cursor: pointer;
            color: black;
            border-radius: 3px;
            font-weight: bold;
            background-color: white;
        }
        @media (max-widht:800px){
            .footer-col{
                width: 50%;
                margin-bottom: 30px;
            }
        }
            
    </style>

    <div class= "foot">
    <footer>
        <div class="container-footer">
            <div class="row-footer">
                <!--footer-col-->
                <div class="footer-col">
                    <a href="#"><h2>Sobre</h2></a>
                </div>
                <!--fim footer-col-->
                <!--footer-col-->
                <div class="footer-col">
                        <h2>Contatos</h2>
                        <div class="img">
                        <ul>
                            
                            <a href="#"><li><img src="./assets/image/facebook.png" width="40" height="40"></li></a>
                            <a href="#"><li><img src="./assets/image/instagram.png" width="40" height="40"></li></a>
                            <a href="#"><li><img src="assets/image/whatsapp.png" width="40" height="40"></li></a>
                        </ul>
                        </div>
                    </div>
                    <!--fim footer-col-->
                     <!--footer-col-->
                <div class="footer-col">
                        <a href="#"><h2>Suporte</h2></a>
                    </div>
                    <!--fim footer-col-->
                     <!--footer-col-->
                <div class="footer-col">
                    <div class="form-sub">
                        <h2>Comentario</h2>
                        <p><p>Deixe aqui o seu comentario para nos ajudar a melhorar!</p></p>
                        <form action="" method="GET">
                            <input type="text" id="fname" name="fname" placeholder="Digite aqui">
                            <input type="submit" name="Enviar">
                        </form>
                    </div>
                        
                </div>
                    <!--fim footer-col-->
    
            </div>
        </div>
    </footer>
    </div>
</body>
</html>