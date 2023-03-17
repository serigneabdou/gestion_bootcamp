<?php require('Actions/securityAction.php');?>
<?php require('Actions/dashbordAction.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ('Includes/head.php'); ?>
    <link rel="stylesheet" href="Assets/style/dasbhord.css">
</head>
<body class="w-100">
<?php include ('Includes/Navbar.php'); ?>
    <main class="main">
        <div class=container_banner>
            <div class="p-4 p-md-5 mb-4 text-white banner">
              <div class="col-md-6 px-0">
                <h1 class="display-4 fst-italic">Bienvenue <span class="name_user"><?php echo $prenomUser;?></span> dans notre  bootcamp</h1>
                <p class="lead my-3">
                    Vous étes inscrit dans le programme.
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo magnam doloribus ab provident placeat omnis nesciunt ex consequuntur sit nisi!
                </p>
              </div>
            </div>
        </div>

        <div class='container my-5'>
            <div class="row mb-2">
                <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">COURS</strong>
                        <h3 class="mb-0">Nombre de cour</h3>
                        <div class="mb-1 text-muted fs-1">02</div>
                        <!-- <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p> -->
                        <a href="#" class="stretched-link">Accedere aux cours</a>
                        </div>
                    <div class="col-auto d-none d-lg-flex align-items-center ">
                        <img src="Assets/image/book.png" alt="icon_book" class="icon_book">
                    </div>
                </div>
                </div>
                <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success">Coach</strong>
                    <h3 class="mb-0">Nombre de coach</h3>
                    <div class="mb-1 text-muted fs-1">04</div>
                    <!-- <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p> -->
                    <a href="#" class="stretched-link">Voir les coach</a>
                    </div>
                    <div class="col-auto d-none d-lg-flex align-items-center">
                        <img src="Assets/image/teacher.png" alt="icon_book" class="icon_book">
                    </div>
                </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>