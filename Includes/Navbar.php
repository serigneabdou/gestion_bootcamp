
<link rel="stylesheet" href="Assets/style/navbar.css">
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container-fluid mx-md-3">
        <div class="d-flex align-items-center">
          <i
            class="ri-menu-line fs-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"
          ></i>

          <div class="navbar-brand container_logo">
            <img src="Assets/image/logo.png" alt="LOGO" class="logo_navbar">
          </div>
        </div>
        <div class="d-flex   align-items-center">
          <!-- <div class="me-3 fs-3 d-md-block d-none">
            <i class="ri-notification-line position-relative icon">
              <span class="position-absolute top-0 start-50 icon-badge translate-middle badge bg-danger">
                99+
              </span>
            </i>
            <i class="ri-chat-1-line icon"></i>
          </div> -->
          <div class="dropdown position-relative ">
            <img src="Assets/image/user.png" alt="profil_user" class="profil_user btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <ul class="dropdown-menu position-absolute top-100 start-0 translate-middle menu_deconnexion" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">Profil</a></li>
              <li><a class="dropdown-item" href="Actions/logoutAction.php">Deconnexion</a></li>
              <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
            </ul>
          </div>
          <div class="d-flex flex-column ms-2">
          <?php if(isset($prenomUser)) { echo '<p class="m-0 text-uppercase">'.$prenomUser.'</p>';} ?>
          <?php if(isset( $nomUser)) { echo '<p class="m-0">'. $_SESSION['status'].'</p>';} ?>
            <!-- <p class=""></p> -->
          </div>
          
        </div>
      </div>

      <!--  ########################################### SIDEBAR ####################################################### -->
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasExampleLabel">
            <div class="navbar-brand container_logo">
              <img src="Assets/image/logo.png" alt="LOGO" class="logo_navbar">
            </div>
          </h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <nav class="nav nav-pills flex-column">
            <a class="nav-link sidebar_link" href="dasbhord.php">Acceuil</a>
            <a class="nav-link sidebar_link" href="#item-2">Cours</a>
            <a class="nav-link sidebar_link" href="#item-3">Coach</a>
          </nav>
        </div>
      </div>
</nav>
    <!-- ##################################################### END NAVBAR ############################################ -->