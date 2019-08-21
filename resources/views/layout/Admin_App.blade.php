<!DOCTYPE html>
<html lang="en">

<head>


    <script src="https://cdn.ckeditor.com/4.7.2/full/ckeditor.js"></script>
    <style>
        input[type=text] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }
    </style>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>





    <!-- jQuery -->
    <script src="../"></script>
{!! Html::script("Admin/vendor/jquery/jquery.min.js") !!}

    <!-- Bootstrap Core JavaScript -->
{!! Html::script("Admin/vendor/bootstrap/js/bootstrap.min.js") !!}

    <!-- Metis Menu Plugin JavaScript -->
{!! Html::script("Admin/vendor/metisMenu/metisMenu.min.js") !!}



    <!-- Custom Theme JavaScript -->
    {!! Html::script("Admin/dist/js/sb-admin-2.js") !!}





    <!-- Bootstrap Core CSS -->

        {!! Html::style("Admin/vendor/bootstrap/css/bootstrap.min.css") !!}




    <!-- MetisMenu CSS -->
    {!! Html::style("Admin/vendor/metisMenu/metisMenu.min.css") !!}

    <!-- Custom CSS -->

{!! Html::style("Admin/dist/css/sb-admin-2.css") !!}
    <!-- Custom Fonts -->
{!! Html::style("Admin/vendor/font-awesome/css/font-awesome.min.css") !!}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>







    <![endif]-->


    @yield('head')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>

    <!-- table file JS -->
    {!! Html::script("Admin/vendor/datatables/js/jquery.dataTables.min.js") !!}
    {!! Html::script("Admin/vendor/datatables-plugins/dataTables.bootstrap.min.js") !!}
    {!! Html::script("Admin/vendor/datatables-responsive/dataTables.responsive.js") !!}
</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('index')}}">Control Panel</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-messages">
                    <li>
                        <a href="#">
                            <div>
                                <strong>John Smith</strong>
                                <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                            </div>
                            <div>Names Of Users Contacts</div>
                        </a>
                    </li>



                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="{{route('contactInfo.index',['type'=>'all'])}}">
                            <strong>Show All Contacts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-messages -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-tasks">
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Task 1</strong>
                                    <span class="pull-right text-muted">40% Complete</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Task 2</strong>
                                    <span class="pull-right text-muted">20% Complete</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                        <span class="sr-only">20% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Task 3</strong>
                                    <span class="pull-right text-muted">60% Complete</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% Complete (warning)</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Task 4</strong>
                                    <span class="pull-right text-muted">80% Complete</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Tasks</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-tasks -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> New Comment
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                <span class="pull-right text-muted small">12 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-envelope fa-fw"></i> Message Sent
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-tasks fa-fw"></i> New Task
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-alerts -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">

                    <li >
                        <a href="#"><i class="fa fa-files-o fa-fw"></i> Ghost White Toner<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('Ghost')}}"><i class="fa fa-dashboard fa-fw"></i> Ghost</a>
                            </li>
                            <li>
                                <a href="{{route('subghost.index')}}"><i class="fa fa-dashboard fa-fw"></i> Sub Ghost</a>
                            </li>
                            <li>
                                <a href="{{route('infoghost.index')}}"><i class="fa fa-dashboard fa-fw"></i>Info Ghost</a>
                            </li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>


                    <li >
                        <a href="#"><i class="fa fa-files-o fa-fw"></i> Machines<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('typeMachine.index')}}"><i class="fa fa-dashboard fa-fw"></i> Type Machine</a>
                            </li>
                            <li>
                                <a href="{{route('machines.index')}}"><i class="fa fa-dashboard fa-fw"></i> Machine</a>
                            </li>

                            <li>
                                <a href="{{route('galleryMachine.index')}}"><i class="fa fa-dashboard fa-fw"></i>Machine Images</a>
                            </li>
                            <li>
                                <a href="{{route('machineVideo.index',['type'=>'machine'])}}"><i class="fa fa-dashboard fa-fw"></i>Machine Video</a>
                            </li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                    <li >
                        <a href="#"><i class="fa fa-files-o fa-fw"></i> Products<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('typep.index')}}"><i class="fa fa-dashboard fa-fw"></i>Kinds</a>
                            </li>
                            <li>
                                <a href="{{route('typeProduct.index')}}"><i class="fa fa-dashboard fa-fw"></i> Type Product</a>
                            </li>

                            <li>
                                <a href="{{route('product.index')}}"><i class="fa fa-dashboard fa-fw"></i> Products</a>
                            </li>
                            <li>
                                <a href="{{route('data.index')}}"><i class="fa fa-dashboard fa-fw"></i>Data Products</a>
                            </li>
                            <li>
                                <a href="{{route('galleryProduct.index')}}"><i class="fa fa-dashboard fa-fw"></i>Product Images</a>
                            </li>
                            <li>
                                <a href="{{route('productVideo.index',['type'=>'product'])}}"><i class="fa fa-dashboard fa-fw"></i>Product Video</a>
                            </li>


                        </ul>
                        <!-- /.nav-second-level -->
                    </li>


                    <li >
                        <a href="#"><i class="fa fa-files-o fa-fw"></i> Free Gallery<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('galleryClass.index')}}"><i class="fa fa-dashboard fa-fw"></i> Type Gallery</a>
                            </li>
                            <li>
                                <a href="{{route('gallery.index')}}"><i class="fa fa-dashboard fa-fw"></i>Gallery</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                    <li >
                        <a href="#"><i class="fa fa-files-o fa-fw"></i> Special Offer<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('monthlySpecail.index')}}"><i class="fa fa-dashboard fa-fw"></i> Special Offer Type</a>
                            </li>
                            <li>
                                <a href="{{route('special.index')}}"><i class="fa fa-dashboard fa-fw"></i>Offer Details</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                    <li>
                        <a href="{{route('users.index')}}"><i class="fa fa-dashboard fa-fw"></i> Users</a>
                    </li>

                    <li>
                        <a href="{{route('contactInfo.index',['type'=>'all'])}}"><i class="fa fa-dashboard fa-fw"></i> Contact Info (<font color="red">{{getNotReadMessages()}}</font>)</a>
                    </li>
                    <li>
                        <a href="{{route('messages.index',['type'=>'all'])}}"><i class="fa fa-dashboard fa-fw"></i> Messages (<font color="red">{{getNotReadMessages1()}}</font>)</a>
                    </li>

                    <li>
                        <a href="{{route('whatsNew.index')}}"><i class="fa fa-dashboard fa-fw"></i> New Items</a>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>




                            <li>
                                <a href="login.html">Login Page</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
               <div class="form-group">
                    <div class="col-lg-12">
                        @yield('content')
                    </div>
               </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->




</body>


</html>
