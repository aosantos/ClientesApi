<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>OI</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- bootstrap theme -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-theme.css') }}" rel="stylesheet" />
    <!--external css-->
    <!-- font icon -->
    <link href="{{asset('css/elegant-icons-style.css')}}" rel="stylesheet" />
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" />
    <!-- full calendar css-->
    <link href="{{asset('assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/fullcalendar/fullcalendar/fullcalendar.css')}}" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="{{asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen" />

    <link rel="stylesheet" href="assets/plugins/datatables/dataTables.bootstrap.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/fullcalendar.css">
    <link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link href="css/xcharts.min.css" rel=" stylesheet">
    <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">

</head>

<body>
<!-- Modal para cadastrar o usuário-->

<div class="modal fade" id="cadastrar_" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 style="color:green;"><span class="glyphicon glyphicon-lock"></span> Cadastrar Cliente</h4>
            </div>

            <div class="modal-body">

                <form class="margin-bottom-0" method="POST" action="{{ route('store') }}">
                    {{ csrf_field() }}

                    <form method="get" action=".">
                        <div class="form-group">
                            <label for="name"><span class="glyphicon glyphicon-education"></span> Nome</label>
                            <input type="text" name="nome" value="" class="form-control" id="nome" placeholder="Nome" required="">
                        </div>

                        <div class="form-group">
                        <label for="name"><span class="glyphicon glyphicon-education"></span> Galc</label>
                        <input type="text" name="galc" value="" class="form-control" id="galc" placeholder="Galc" required="">
                        </div>

                        <div class="form-group">
                        <label for="name"><span class="glyphicon glyphicon-education"></span> Porta</label>
                        <input type="text" name="porta" value="" class="form-control" id="porta" placeholder="Porta" required="">
                        </div>

                        <div class="form-group">
                            <label for="name"><span class="glyphicon glyphicon-education"></span> Endereço da instalação</label>
                            <input type="text" name="endereco_instalacao" value="" class="form-control" id="endereco_instalacao" placeholder="Endereço da instalação" required="">
                        </div>

                        <div class="form-group">
                            <label for="name"><span class="glyphicon glyphicon-education"></span> Velocidade</label>
                            <input type="text" name="velocidade" value="" class="form-control" id="velocidade" placeholder="Velocidade" required="">
                        </div>


                        <button style="color:white;" type="submit" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-plus"></span> Cadastrar</button>
                    </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
            </div>
        </div>
    </div>
</div>







<!-- Modal para editar o usuário-->
@foreach($clientes as $cliente)
    <div class="modal fade" id="editar_<?=$cliente->id?>" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 style="color:green"><span class="glyphicon glyphicon-lock"></span> Editar Clientes</h4>
                </div>

                <div class="modal-body">
                    <form class="margin-bottom-0"  action="{{ action('ClientesController@update',$cliente->id) }}"  method="get">
                        <input type="hidden" id="id" name="id" value="{{$cliente->id}}" >
                        <form method="get" action=".">
                            <div class="form-group">
                                <label for="name"><span class="glyphicon glyphicon-education"></span> Nome</label>
                                <input type="text" name="nome" value="{{$cliente->nome}}" class="form-control" id="nome" placeholder="Nome" required="">
                            </div>

                            <div class="form-group">
                                <label for="name"><span class="glyphicon glyphicon-education"></span> Galc</label>
                                <input type="text" name="galc" value="{{$cliente->galc}}" class="form-control" id="galc" placeholder="Galc" required="">
                            </div>

                            <div class="form-group">
                                <label for="name"><span class="glyphicon glyphicon-education"></span> Porta</label>
                                <input type="text" name="porta" value="{{$cliente->porta}}" class="form-control" id="porta" placeholder="Porta" required="">
                            </div>

                            <div class="form-group">
                                <label for="name"><span class="glyphicon glyphicon-education"></span> Endereço da instalação</label>
                                <input type="text" name="endereco_instalacao" value="{{$cliente->endereco_instalacao}}" class="form-control" id="endereco_instalacao" placeholder="Endereço da instalação" required="">
                            </div>

                            <div class="form-group">
                                <label for="name"><span class="glyphicon glyphicon-education"></span> Velocidade</label>
                                <input type="text" name="velocidade" value="{{$cliente->velocidade}}" class="form-control" id="velocidade" placeholder="Velocidade" required="">
                            </div>

                            <button style="color:white;" type="submit" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-plus"></span> Editar</button>
                        </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                </div>
            </div>
        </div>
    </div>
@endforeach




@foreach($clientes as $cliente)
    <!-- modal para excluir  -->
    <div class="modal fade" id="remover_{{$cliente->id}}" role="dialog">
        <div class="modal-dialog">
            <form action="{{ action('ClientesController@destroy',$cliente->id) }}" role="form" method="get" class="margin-bottom-0">
                <input type='hidden' name='id' value='{{$cliente->id}}'/>
                <!-- Modal content-->
                <div class="modal-content">

                    <div class="modal-body">
                        <form method="get" action=".">
                            <h4 style="color:#ff0000;" align="center">Deseja exluir o Cliente ({{$cliente->nome}})  </h4>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Cancelar</button>
                        <button type="submit" class="btn btn-danger" ></span>Excluir</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endforeach



<!-- container section start -->
<section id="container" class="">


    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
        </div>

        <!--logo start-->
        <a href="" class="logo">OI <span class="lite"></span></a>
        <!--logo end-->



    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
                <li class="">
                    <a class="" href="">
                        <i class="icon_house_alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>



                <li>


            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!--overview start-->
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h5>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="">Home</a></li>
                        <li><i class="fa fa-laptop"></i>Dashboard</li>
                    </ol>
                </div>
            </div>




            <!-- Today status end -->
            <div class="row">

                <div class="col-lg-12 col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2><i class="fa fa-flag-o red"></i><strong>Usuários</strong></h2>
                            <?php
                            if (session('status')) {
                                echo "<div class='alert alert-success'>";
                                echo session('status');
                                echo "</div>";
                            }
                            ?>
                            <div class="panel-actions">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#cadastrar_">
                                    <i class="fa fa-plus"  title='Cadastrar'></i>
                                </button>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table id="example1" class="table bootstrap-datatable countries">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nome</th>
                                    <th>Galc</th>
                                    <th>Porta</th>
                                    <th>Endereço de Instalação</th>
                                    <th>Velocidade</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($clientes as $cliente)
                                    <tr>
                                        <td>{{$cliente->id}} </td>
                                        <td>{{$cliente->nome}} </td>
                                        <td>{{$cliente->galc}} </td>
                                        <td>{{$cliente->porta}} </td>
                                        <td>{{$cliente->endereco_instalacao}} </td>
                                        <td>{{$cliente->velocidade}} </td>
                                        <td>
                                            <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#editar_{{$cliente->id}}">
                                                <span class="glyphicon glyphicon-edit"></span>
                                            </button>
                                            <button type="button" class="btn btn-danger"  data-toggle="modal" title="Excluir Usu&aacuterio" data-target="#remover_{{$cliente->id}}">
                                                <span class="glyphicon glyphicon-trash"></span>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!--Project Activity end-->
        <br><br>

        <div class="widget-foot">
            <!-- Footer goes here -->
        </div>
        </div>

    </section>
    <div class="text-right">
        <div class="credits">

            <!-- <a href="https://bootstrapmade.com/">Free Bootstrap Templates</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>-->
        </div>
    </div>
</section>
<!--main content end-->
</section>
<!-- container section start -->

<!-- javascripts -->
<script src="js/jquery.js"></script>
<script src="js/jquery-ui-1.10.4.min.js"></script>
<script src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>

<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>


<!-- bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- nice scroll -->
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<!-- charts scripts -->
<script src="assets/jquery-knob/js/jquery.knob.js"></script>
<script src="js/jquery.sparkline.js" type="text/javascript"></script>
<script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="js/owl.carousel.js"></script>
<!-- jQuery full calendar -->
<<script src="js/fullcalendar.min.js"></script>
<!-- Full Google Calendar - Calendar -->
<script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
<!--script for this page only-->
<script src="js/calendar-custom.js"></script>
<script src="js/jquery.rateit.min.js"></script>
<!-- custom select -->
<script src="js/jquery.customSelect.min.js"></script>
<script src="assets/chart-master/Chart.js"></script>

<!--custome script for all page-->
<script src="js/scripts.js"></script>
<!-- custom script for this page-->
<script src="js/sparkline-chart.js"></script>
<script src="js/easy-pie-chart.js"></script>
<script src="js/jquery-jvectormap-1.2.2.min.js"></script>
<script src="js/jquery-jvectormap-world-mill-en.js"></script>
<script src="js/xcharts.min.js"></script>
<script src="js/jquery.autosize.min.js"></script>
<script src="js/jquery.placeholder.min.js"></script>
<script src="js/gdp-data.js"></script>
<script src="js/morris.min.js"></script>
<script src="js/sparklines.js"></script>
<script src="js/charts.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>

<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,

        });
    });
</script>
</body>

</html>
