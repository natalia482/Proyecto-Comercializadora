<header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
              <form action="" class="site-block-top-search">
                <span class="icon icon-search2"></span>
                <input type="text" class="form-control border-0" placeholder="Search">
              </form>
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="menuprincipal.php" class="js-logo-clone">Comercializadora</a>
              </div>
              <div class="site-logo">
                <a href="menuprincipal.php" class="js-logo-clone">El Manantial</a>
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>
                  <a href="cart.php" class="site-cart">
                      <span class="icon icon-shopping_cart"></span>
                      <span class="count">
                        <?php 
                        if (isset($_SESSION['carrito'])){

                          echo count($_SESSION['carrito']);
                          
                        }else{
                          echo 0;
                        }

                         ?>

                      </span>
                    </a>
                  <li><a href="ClienteFactura.php"><span class="icon icon-view_list"></span></a></li>
                  <form action="../../CONTROLADOR/CONTROLADORCLIENTE/Logout.php" method="post">
                 <div class="form-group">
                            <button class="btn btn-primary " name="salir">SALIR</button>
                            </div>
                  </form>
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                </ul>
              </div> 
            </div>

          </div>
        </div>
      </div> 
      <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li>
              <a href="menuprincipalcliente.php">Inicio</a>
            
            </li>
            <li>
              <a href="Plantasornamentales.php">Ornamentales</a>
            
            </li>
            <li><a href="PlantasCactusSuculentas.php">Cactus/Suculentas</a></li>
            <li><a href="plantasbonsai.php">Bonsai</a></li>
            <li><a href="plantaflor.php">Flor</a></li>
            <li><a href="Abonos.php">Abonos </a></li>

          </ul>
        </div>
      </nav>
    </header>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="menuprincipalcliente.php">Inicio</a> <span class="mx-2 mb-0">/</span>
           <strong class="text-black">Tienda</strong></div>
        </div>
      </div>
    </div>