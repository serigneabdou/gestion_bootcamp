<?php require('Actions/securityAction.php');?>
<?php require('Actions/dashbordAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include ('Includes/head.php'); ?>
    <link rel="stylesheet" href="Assets/style/dasbhordAdmin.css">
</head>
<body>
<?php include ('Includes/Navbar.php'); ?>

    <main class="main">
    <!-- ################################################## Card ####################################################### -->
        <div class='container my-5'>
                <div class="row mb-2">
                    <div class="col-md-4">
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
                    <div class="col-md-4">
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
                   

                    <div class="col-md-4">
                        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static">
                                <strong class="d-inline-block mb-2 text-primary">Programme</strong>
                                <h3 class="mb-0">Nombre de Programme</h3>
                                <div class="mb-1 text-muted fs-1">04</div>
                                <a href="#" class="stretched-link">Accedere aux </a>
                            </div>
                            <div class="col-auto d-none d-lg-flex align-items-center ">
                                <img src="Assets/image/book.png" alt="icon_book" class="icon_book">
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        
        <!-- ########################################### PROGRAMMATION ########################################################### -->
        <div class="container">
            <h1>Programme</h1>
            <div class="my-5 bg-light px-md-5 py-3">
                <div class="row align-items-center">
                    <div class=" col-md-10 d-block d-md-flex ">
                        <div class="container_image d-flex justify-content-center">
                            <img src="Assets/image/siteweb.svg" alt="profil" class="programme_website">
                        </div>
                        <div class="ms-2">
                            <h3>Creation d'un site web</h3>
                            <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius laudantium perspiciatis quasi libero perferendis inventore culpa aperiam, magnam, corporis neque fugiat! A ipsum blanditiis tempora. Dolorum quis unde quidem repudiandae.</p>
                            <p> <span class="text-muted fw-bold text-uppercase">Date de début</span> : 20/01/2002</p>
                            <p><span class="text-muted fw-bold text-uppercase">Date de fin</span> : 20/01/2002</p>
                        </div>
    
                    </div>
                    <div class="col-md-auto ms-auto status_programme d-md-block d-none">en cour</div>
                </div>
                <a href="#">Acceder aux programme</a>
            </div>
        </div>
    </main>
</body>
</html>