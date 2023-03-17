<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ('Includes/head.php'); ?>
    <link rel="stylesheet" href="Assets/style/connexion.css">
</head>
<body>
    <div class="row align-items-center conteneur">
        <div class="container_left my-auto col-md-7 ps-5 d-none d-md-flex">
            <div class="">
                <p class="fs-2 text-uppercase text-center">Bonjour, <br> et Bienvenue dans Bootcamp online</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus provident voluptatem quod ducimus officia hic eius debitis numquam rem, dignissimos dolore voluptates blanditiis minima quaerat aliquam at! Temporibus non a facere doloremque molestiae suscipit magnam, repudiandae voluptatum voluptatibus dolorum magni repellendus veniam omnis alias illo vero commodi ab nesciunt tempore!</p>
            </div>
        </div>
        <div class="container_right col-md-5">
            <div class="container_logo">
                    <img src="Assets/image/logo.png" alt="LOGO" class="logo_connexion">
            </div>
            <div class="d-flex flex-column justify-content-center align-items-center">
                <p class="fs-2 text-uppercase ">Identifiez-vous</p>
                <div class="">
                    <input type="text" name="email" placeholder="Entrez votre email" class="input">
                </div>
                <div class="">
                    <input type="text" name="password" placeholder="Entrez votre Mot de Passe" class="input">
                </div>
                <button class="btn_connexion">Se connecter</button>
            </div>
        </div>
    </div>
</body>
</html>