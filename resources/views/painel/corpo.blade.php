
<!doctype html>
<html lang="pt">



<head>
      <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/favicon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Painel de Controle</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Canonical SEO -->
    <link rel="canonical" href="http://www.creative-tim.com/product/material-dashboard-pro" />
    <!--  Social tags      -->
    <meta name="keywords" content="material dashboard, bootstrap material admin, bootstrap material dashboard, material design admin, material design, creative tim, html dashboard, html css dashboard, web dashboard, freebie, free bootstrap dashboard, css3 dashboard, bootstrap admin, bootstrap dashboard, frontend, responsive bootstrap dashboard, premiu material design admin">
    <meta name="description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template">
    <meta itemprop="description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
    <meta itemprop="image" content="../../../s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg">
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template">
    <meta name="twitter:description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="../../../s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg">
    <!-- Open Graph data -->
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://www.creative-tim.com/product/material-dashboard-pro" />
    <meta property="og:image" content="../../../s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg" />
    <meta property="og:description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design." />
    <meta property="og:site_name" content="Creative Tim" />
    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('css/bootstrapPainel.min.css') }}" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="{{ asset('css/material-dashboard5438.css?v=1.2.0') }}" rel="stylesheet" />

    <link href="{{ asset('css/demo.css') }}" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    @yield('superior')


<style>
.loader {
    display: block;
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: #fafafa url(page-loader.gif) no-repeat center center;
    text-align: center;
    color: #999;
}
</style>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>


</head>

<body>

<div class="wrapper">
    <div class="sidebar" data-active-color="rose" data-background-color="rose" data-image="">

        <div class="logo"><a href="/">
         <img src="/logo.png" class="img-responsive"></a>
        </div>
        <div class="sidebar-wrapper">
            <div class="user">
                <div class="photo">


                        <img src="http://sistema.cronospro.com.br//img/av.png" />

                <!-- <img src="../assets/img/faces/avatar.jpg" /> -->
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                            <span>
                         Administrador
                               
                            </span>
                    </a>
                    <div class="clearfix"></div>
                
            

                </div>
            </div>
            <ul class="nav">
                <li @yield('menu1')>
                    <a href="/painel">
                        <i class="material-icons">dashboard</i>
                        <p>Produtos</p>
                    </a>
                </li>



                <li  @yield('menu2')>
                    <a  href="/painelCategoria">
                        <i class="material-icons">assessment</i>
                        <p>Categorias
                        </p>
                    </a>
                </li>






                <li  @yield('menu3')>
                    <a  href="">
                        <i class="material-icons">playlist_add</i>
                        <p>Vendas
                        </p>

                    </a>

                    
                </li>


        
      


            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-minimize">
                    <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                        <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                        <i class="material-icons visible-on-sidebar-mini">view_list</i>
                    </button>
                </div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"> Visão Geral </a>
                </div>
                      <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                        
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">1</span>
                                    <p class="hidden-lg hidden-md">
                                        Notificações
                                        <b class="caret"></b>
                                    </p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Notificação</a>
                                    </li>
                                  
                                </ul>
                            </li>
                          <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">group</i>
                                    
                                    <p class="hidden-lg hidden-md">
                                        Usuarios
                                        <b class="caret"></b>
                                    </p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="">Minha Conta</a>
                                    </li>
                                    <li>
                                        <a href="">Assinatura</a>
                                    </li>
									 <li>
                                        <a href="">Sair</a>
                                    </li>
                            
                                </ul>
                            </li>
                            <li class="separator hidden-lg hidden-md"></li>
                        </ul>
                        <form class="navbar-form navbar-right" role="search" method="POST" action="@yield('filtro')">
						@csrf
                            <div class="form-group form-search is-empty" style="top:-8px">
                                 <select class="selectpicker" data-style="select-with-transition" required name="computador[]" multiple title="Selecione o Computador" data-size="5">
                                                        <option disabled> Selecione o Computador</option>
												

													 Teste </option>
													  
												
                                                    </select>
													                   
																		  
                         
								 
                            </div>
							
							



							
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </form>
                    </div>
            </div>
        </nav>
        <div class="content">
                @if (Session::has('mensagem'))
                <div class="alert alert-success">{{ Session::get('mensagem') }}</div>
            @endif
            <div class="container-fluid">


                <div class="row">




                    @yield('conteudo')


                </div>


            </div>
        </div>



        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    <a href="">Cronos Pro</a>, Todos os direitos reservados.
                </p>
            </div>
        </footer>
    </div>
</div>

</body>
<!--   Core JS Files   -->


<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js" ></script>
<script src="https://cdnjs.com/libraries/Chart.js" ></script>
<script src="{{ asset('js/jquery-3.2.1.min.js') }}" ></script>
<script src="{{ asset('js/bootstrap.min.js') }}" ></script>
<script src="{{ asset('js/material.min.js') }}" ></script>
<script src="{{ asset('js/perfect-scrollbar.jquery.min.js') }}" ></script>
<script src="{{ asset('js/jquery.validate.min.js') }}" ></script>
<script src="{{ asset('js/es6-promise-auto.min.js') }}" ></script>
<script src="{{ asset('js/moment.min.js') }}" ></script>
<script src="{{ asset('js/chartist.min.js') }}" ></script>
<script src="{{ asset('js/jquery.bootstrap-wizard.js') }}" ></script>
<script src="{{ asset('js/jquery.sharrre.js') }}" ></script>
<script src="{{ asset('js/bootstrap-datetimepicker.js') }}" ></script>
<script src="{{ asset('js/jquery-jvectormap.js') }}" ></script>
<script src="{{ asset('js/nouislider.min.js') }}" ></script>
<script src="{{ asset('js/jquery.select-bootstrap.js') }}" ></script>
<script src="{{ asset('js/sweetalert2.js') }}" ></script>
<script src="{{ asset('js/jquery.datatables.js') }}" ></script>
<script src="{{ asset('js/jasny-bootstrap.min.js') }}" ></script>
<script src="{{ asset('js/fullcalendar.min.js') }}" ></script>
<script src="{{ asset('js/jquery.tagsinput.js') }}" ></script>
<script src="{{ asset('js/material-dashboard5438.js?v=1.2.0') }}" ></script>
<script src="{{ asset('js/demo.js') }}" ></script>

@yield('inferior')

<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.initVectorMap();
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        md.initSliders()
        demo.initFormExtendedDatetimepickers();
    });
</script>
</html>
