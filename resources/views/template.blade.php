<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>BabyStore - Admin</title>
        <link href="{{ asset('css/admin/styles.css') }}" rel="stylesheet" />
        <link href="{{ asset('/css/admin/finanzas/all.css') }}" rel="stylesheet" type="text/css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <link href="{{ asset('/css/admin/finanzas/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/css/admin/finanzas/jquery-ui.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/admin/finanzas/custom.css') }}" rel="stylesheet" />
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="{{ route('welcome') }}">BABYSHOP</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            >
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i> {{ Auth::user()->name }} </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="{{ route('welcome') }}">Ir a página web</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Perfil</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Cerrar sesión</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="{{ route('home') }}"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Inicio</a>
                            <a class="nav-link" href="{{ route('usuarios')}}"
                                ><div class="sb-nav-link-icon"><i class="fa fa-users"></i></div>
                                Usuarios</a>
                            <a class="nav-link" href="{{ route('descuento')}}"
                                ><div class="sb-nav-link-icon"><i class="fas fa-percentage"></i></div>
                                Outlet</a>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFinanzas" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon"><i class="fas fa-cash-register"></i></div>
                                Finanzas
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseFinanzas" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">

                                  <a class="nav-link" href="#">Saldos</a>
                                  <a class="nav-link" href="#">Movimientos</a>
                                  <a class="nav-link" href="#">Categorias</a>
                                  <a class="nav-link" href="#">Ingresos</a>
                                  <a class="nav-link" href="#">Egresos</a>
                                  <a class="nav-link" href="#">Cuentas</a>
                                  <a class="nav-link" href="#">Transferencias</a>
                                  <a class="nav-link" href="#">Productos</a>
                                  <a class="nav-link" href="#">Movimientos futuros</a>
                                  <a class="nav-link" href="#">Bitacora</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBlog" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon"><i class="fab fa-readme"></i></div>
                                Blog
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseBlog" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                  <a class="nav-link" href="#">Publicaciones</a>
                                  <a class="nav-link" href="#">Categorias</a>
                                  <a class="nav-link" href="#">Etiquetas</a>
                                </nav>
                            </div>

                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                      @yield('seccion')
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; BABYSHOP</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/admin/scripts.js') }}"></script>
        <!-- <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js" type="text/javascript"></script> -->
        <script src="{{asset('/js/admin/jquery.dataTables.min.js') }}" type="text/javascript"></script>
        <script src="{{asset('/js/admin/mdb.min.js') }}" type="text/javascript"></script>
        <script src="{{asset('/js/admin/tether.min.js') }}" type="text/javascript"></script>
        <script src="{{asset('/js/admin/dataTables.buttons.min.js') }}" type="text/javascript"></script>
        <script src="{{asset('/js/admin/buttons.html5.min.js') }}" type="text/javascript"></script>
        <script src="{{asset('/js/admin/pdfmake.min.js') }}" type="text/javascript"></script>
        <script src="{{asset('/js/admin/vfs_fonts.js') }}" type="text/javascript"></script>
        <script src="{{asset('/js/admin/jquery-ui.min.js') }}" type="text/javascript"></script>


        <script src="{{asset('/js/admin/custom.js') }}" type="text/javascript"></script>



<!--
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/admin/datatables-demo.js') }}"></script> -->
    </body>
</html>
