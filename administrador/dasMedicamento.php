<?php
 session_start();
 require '../connect.php';
  
 /*if((!isset($_SESSION['email'])) && (!isset($_SESSION['senha']))) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    print_r ("ola");
    header('Location: ../index.');
 
 }*/
 $select ="SELECT * FROM medicamento";
  $resultado = mysqli_query($connect,$select);

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Controle de Medicamentos</title>
    <!-- plugins:css -->
     <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/vendors/css/vendor.bundle.base.css">
  
    <!-- Plugin css for this page -->
   <link rel="stylesheet" href="../assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/adassets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    
    <!--Saite de icons-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" />

<!--<link rel="stylesheet" href="estoquearmazencentral.css">-->
    <style>
      body {
        background-color: rgb(243, 243, 239);
      }
      h5,h3,h6,h4 {
          color: black;
      }
      
      ar {
        color: white;
      }
      .footer{
        background-color: rgb(85, 67, 74);
      }
      .card {
          background-color: rgb(243, 243, 239);
      }
      .card {
        background-color: rgb(243, 243, 239);
      }
      .sidebar {
        /*background-color: rgb(250, 250, 247);*/
      }
      .col-md-4   {
        background-color: rgb(243, 243, 239);
      }

      /* prpEstilo para a classe dropdown-item */
/*.dropdown-item {
  display: block;
  width: 100%;
  clear: both;
  font-weight: 400;
  color: #212529;
  text-align: inherit;
  white-space: nowrap;
  background-color: transparent;
  border: 0;
}*/

/* Estilo para o conteúdo dentro de preview-item-content */
/*.preview-item-content {
  display: flex;
  flex-direction: column;
  justify-content: center;
}*/

/* Estilo para o título h1 */
.teste h1 {
  font-size: 24px;
  margin-bottom: 12px;
  color: #faf8f8; /* Cor do texto */
}
.main-panel {
  margin-left:110px ;
}

/* Estilo para o formulário */
form {
  width: 100%;
}

/* Estilo para os rótulos dos campos do formulário */
.form-group label {
  display: block;
  margin-bottom: 5px;
  font-weight: 400;
}

/* Estilo para os campos de entrada do formulário */
.form-group input[type="text"] {
  width: 100%;
  padding: 8px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

/* Estilo para o botão do formulário */
.form-group button {
  padding: 10px 20px;
  width:100%;
  background-color: #007bff; /* Cor de fundo do botão */
  color: #fff; /* Cor do texto do botão */
  border: none;
  border-radius: 4px;
  margin-top: 10px;
  cursor: pointer;
}

/* Estilo para o botão do formulário ao passar o mouse */
.form-group button:hover {
  background-color: #0056b3; /* Cor de fundo do botão ao passar o mouse */
}
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar fixed-bottom" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-category">
            <span class="nav-link">Painel de Controle</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="administrador.php">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Administrador</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="estoqueArmazem.html">
                <span class="menu-icon">
                    <i class="mdi mdi-laptop"></i>
                </span>
                <span class="menu-title">Armazem Central</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="pages/forms/basic_elements.html">
                <span class="menu-icon">
                    <i class="mdi mdi-playlist-play"></i>
                </span>
                <span class="menu-title">Percrição</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="farmacia.php">
                <span class="menu-icon">
                    <i class="mdi mdi-table-large"></i>
                </span>
                <span class="menu-title">AD Farmacia</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="Utilizador.php">
                <span class="menu-icon">
                    <i class="mdi mdi-chart-bar"></i>
                </span>
                <span class="menu-title">Criar usuarios</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="medicamento.php">
                <span class="menu-icon">
                    <i class="mdi mdi-contacts"></i>
                </span>
                <span class="menu-title">AD Medicamentos</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="dasMedicamento.php">
                <span class="menu-icon">
                    <i class="mdi mdi-security"></i>
                </span>
                <span class="menu-title">Das-Medicamento</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="../medico/medico.html">
                <span class="menu-icon">
                    <i class="mdi mdi-security"></i>
                </span>
                <span class="menu-title">Dasboard Medico</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="../farmacia/farmacia.html">
                <span class="menu-icon">
                    <i class="mdi mdi-security"></i>
                </span>
                <span class="menu-title">Dasboard Farmacia</span>
            </a>
        </li>
    </ul>
</nav>


      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            !--<a class="navbar-brand brand-logo-mini" href="index.html"><img src="../assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" class="form-control" placeholder="Pesquisar">
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown d-none d-lg-block"></a>
                  <div class="dropdown-divider"></div>
                  <!--<a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-web text-info"></i>
                      </div>
                    </div>
                   <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Farmacia Distrital</p>
                    </div>
                  </a>-->
                  <div class="dropdown-divider"></div>
                  
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notificação</h6>
                  <div class="dropdown-divider"></div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Prazo de Expiração do Medicamento</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-link-variant text-warning"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Notif de Percrisção</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all notifications</p>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <!--<img class="img-xs rounded-circle" src="assets/images/faces/face15.jpg" alt="">-->
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Administrador do Sistema</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                 <!-- <h6 class="p-3 mb-0">Perfil</h6>
                  <div class="dropdown-divider"></div>-->
                  <!--<a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Definições</p>  
                    </div>
                  </a>-->
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Terminar seção</p>
                    </div>
                  </a>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- parti+++++++++++++++++++++++++++++++++++al -->
        <div class="main-panel">
            <div class="row">

              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">Total Medicamento</h3>
                        </div>
                      </div>
                      <div class="col-3">
                      </div>
                    </div><br>
                    <h6 class="text-muted font-weight-normal">Ver Estoque</h6>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">teste</h3>
                        </div>
                      </div>
                    </div><br>
                    <h6 class="text-muted font-weight-normal">Ver Lista</h6>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">teste</h3>
                        </div>
                      </div>
                      <div class="col-3">
                      </div>
                    </div><br>
                    <h6 class="text-muted font-weight-normal">Ver Lista</h6>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">Ver Lista</h3>
                        </div>
                      </div>
                    </div><br>
                    <h6 class="text-muted font-weight-normal">Ver Lista De Medicamentos</h6>
                  </div>
                </div>
              </div>
            </div>
<!----+++++++++++++++++++++++++++++++++++++++++++++++++-->
            <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4>Medicamento</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                          
                            <th>ID</th>
                            <th>Nome Medicamento</th>
                            <th>Descrição</th>
                            <th>Validade Medicamento</th>
                            <th>Codigo Medicamento</th>
                            <th>Quantidade Medicamento</th>
                            <th>-----</th>

                          </tr>
                        </thead>
                        <tbody>
                        <?php
                          	while($user_data = mysqli_fetch_assoc($resultado)){
									
                              echo "<tr>";
                              
                              echo "<td>".$user_data['idMedicamento']."</td>";	
                              echo "<td>".$user_data['nomeMedicamento']."</td>";	
                              echo "<td>".$user_data['descricao']."</td>";	
                              echo "<td>".$user_data['validadeMedicamento']."</td>";	
                              echo "<td>".$user_data['codigoMedicamento']."</td>";	
                              echo "<td>".$user_data['quantidadeMedicamento']."</td>";	
                              echo "<td>
                              <a href='editaMedi.php?id=$user_data[idMedicamento]'>
                              <i><img src='lap.png' alt='Lapis'></i>
                                
                              <a href='deleteMedi.php?id=$user_data[idMedicamento]'>
                              <i><img src='lixo.png' alt='Lixeira'></i>";
                              echo "<tr>";
                            }
                          
                        ?>          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center ">
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Fundo Nacional de Medicamentos de São Tomé e Principe <a href="https://minsaude.st/" target="_blank">Site do Ministerio de Saúde</a> </span>
            </div>
          </footer>
          <!-- partial -->
        
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="../assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="../assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets/js/off-canvas.js"></script>
    <script src="../assets/js/hoverable-collapse.js"></script>
    <script src="../assets/js/misc.js"></script>
    <script src="../assets/js/settings.js"></script>
    <script src="../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>