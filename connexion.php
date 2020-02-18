<!doctype html>
<html>

<head>

    <title>FACEBOoK</title>
    <meta charset="utf-8">



    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: rgb(184, 196, 220);
        }

        .box {

            margin-right: 20px;
            float: right;

        }

        nav {
            width: 100%;
            height: 80px;
            background-color: #3b5998;
            margin: 0;
            padding: 0;
            position: fixed;
            top: 0;



        }

        .boutton {
            font-weight: bold;
            width: 95px;
            height: 30px;
            border-color: rgb(29, 59, 132);
            background-color: rgb(59, 89, 170);
            color: white;
        }
    </style>

</head>

<body>


    <header>
        <nav>
            <ul class="menu">



                <form class='box' action='information.php' method='post'>
                    <h1> Connexion
                        <input type="text" name="mail" placeholder="mail" required>
                        <input type="password" name="motdepasse" placeholder="Mot de passe" required>
                        <input class="boutton" type="submit" name="" value="Se connecter" haref>

                </form>




            </ul>
            </h1>
            <img src="PHOTO\téléchargement" style='float : left ;
     height: 60px;  width: 500px ;'>
        </nav>

    </header>
</body>

</html>