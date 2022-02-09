<!DOCTYPE html>
<html lang="en">
    <!-- START: Head-->
    <head>
        <meta charset="UTF-8">
        <title>P'NITIP</title>
        <link rel="shortcut icon" href="{{ asset('PenitipanHewan/dist/images/favicon.ico') }}" />
        <meta name="viewport" content="width=device-width,initial-scale=1"> 

        <!-- START: Template CSS-->
        <link rel="stylesheet" href="{{ asset('PenitipanHewan/dist/vendors/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('PenitipanHewan/dist/vendors/jquery-ui/jquery-ui.min.css') }}">
        <link rel="stylesheet" href="{{ asset('PenitipanHewan/dist/vendors/jquery-ui/jquery-ui.theme.min.css') }}">
        <link rel="stylesheet" href="{{ asset('PenitipanHewan/dist/vendors/simple-line-icons/css/simple-line-icons.css') }}">        
        <link rel="stylesheet" href="{{ asset('PenitipanHewan/dist/vendors/flags-icon/css/flag-icon.min.css') }}">         
        <!-- END Template CSS-->

        <!-- START: Page CSS-->
        <link rel="stylesheet"  href="{{ asset('PenitipanHewan/dist/vendors/chartjs/Chart.min.css') }}">
        <!-- END: Page CSS-->

        <!-- START: Page CSS DASHBOARD-->   
        <link rel="stylesheet" href="{{ asset('PenitipanHewan/dist/vendors/morris/morris.css') }}"> 
        <link rel="stylesheet" href="{{ asset('PenitipanHewan/dist/vendors/weather-icons/css/pe-icon-set-weather.min.css') }}"> 
        <link rel="stylesheet" href="{{ asset('PenitipanHewan/dist/vendors/chartjs/Chart.min.css') }}"> 
        <link rel="stylesheet" href="{{ asset('PenitipanHewan/dist/vendors/starrr/starrr.css') }}"> 
        <link rel="stylesheet" href="{{ asset('PenitipanHewan/dist/vendors/fontawesome/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('PenitipanHewan/dist/vendors/ionicons/css/ionicons.min.css') }}"> 
        <link rel="stylesheet" href="{{ asset('PenitipanHewan/dist/vendors/jquery-jvectormap/jquery-jvectormap-2.0.3.css') }}">
        <!-- END: Page CSS-->

        <!-- START: Page CSS DATA TABLE-->
        <link rel="stylesheet" href="{{ asset('PenitipanHewan/dist/vendors/datatable/css/dataTables.bootstrap4.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('PenitipanHewan/dist/vendors/datatable/buttons/css/buttons.bootstrap4.min.css') }}"/>
        <!-- END: Page CSS-->

        <!-- START: Custom CSS-->
        <link rel="stylesheet" href="{{ asset('PenitipanHewan/dist/css/main.css') }}">
        <!-- END: Custom CSS-->
    </head>
    <!-- END Head-->

    <!-- START: Body-->
    <body id="main-container" class="default">

        <!-- START: Pre Loader
        <div class="se-pre-con">
            <div class="loader"></div>
        </div>-->
        <!-- END: Pre Loader-->

        <!-- START: Header-->
        <div id="header-fix" class="header fixed-top">
            <div class="site-width">
                <nav class="navbar navbar-expand-lg  p-0">
                    <div class="navbar-header  h-100 h4 mb-0 align-self-center logo-bar text-left">  
                        <a href="index.html" class="horizontal-logo text-left">
                            <svg height="20pt" preserveaspectratio="xMidYMid meet" viewbox="0 0 512 512" width="20pt" xmlns="http://www.w3.org/2000/svg">
                            <g transform="matrix(.1 0 0 -.1 0 512)" fill="#1e3d73">
                            <path d="m1450 4481-1105-638v-1283-1283l1106-638c1033-597 1139-654 1139-619 0 4-385 674-855 1489-470 814-855 1484-855 1488 0 8 1303 763 1418 822 175 89 413 166 585 190 114 16 299 13 408-5 100-17 231-60 314-102 310-156 569-509 651-887 23-105 23-331 0-432-53-240-177-460-366-651-174-175-277-247-738-512-177-102-322-189-322-193s104-188 231-407l231-400 46 28c26 15 360 207 742 428l695 402v1282 1282l-1105 639c-608 351-1107 638-1110 638s-502-287-1110-638z"></path><path d="m2833 3300c-82-12-190-48-282-95-73-36-637-358-648-369-3-3 580-1022 592-1034 5-5 596 338 673 391 100 69 220 197 260 280 82 167 76 324-19 507-95 184-233 291-411 320-70 11-89 11-165 0z"></path>
                            </g>
                            </svg> <span class="h4 font-weight-bold align-self-center mb-0 ml-auto">'NITIP</span>              
                        </a>                   
                    </div>
                    <div class="navbar-header h4 mb-0 text-center h-100 collapse-menu-bar">
                        <a href="#" class="sidebarCollapse" id="collapse"><i class="icon-menu"></i></a>
                    </div>

                    <div class="navbar-right ml-auto h-100">
                        <ul class="ml-auto p-0 m-0 list-unstyled d-flex top-icon h-100">
                            <li class="d-inline-block align-self-center  d-block d-lg-none">
                                <a href="#" class="nav-link mobilesearch" data-toggle="dropdown" aria-expanded="false"><i class="icon-magnifier h4"></i>                               
                                </a>
                            </li>                        

                            <li class="dropdown user-profile align-self-center d-inline-block">
                                <a href="#" class="nav-link py-0" data-toggle="dropdown" aria-expanded="false"> 
                                    <div class="media">                                   
                                        <img src="{{ asset('PenitipanHewan/dist/images/author.jpg') }}" alt="" class="d-flex img-fluid rounded-circle" width="29">
                                        <b><p style="margin-top: 5px; margin-left:5px">{{auth()->user()->name}}</p></b>
                                    </div>
                                </a>

                                <div class="dropdown-menu border dropdown-menu-right p-0">
                                    <div class="dropdown-divider"></div>
                                    <a href="logout" class="dropdown-item px-2 text-danger align-self-center d-flex">
                                        <span class="icon-logout mr-2 h6  mb-0"></span> Sign Out</a>
                                </div>

                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- END: Header-->

        <!-- START: Main Menu-->
        <div class="sidebar">
            <div class="site-width">

                <!-- START: Menu-->
                <ul id="side-menu" class="sidebar-menu">
                    <li class="dropdown"><a href="#"><i class="icon-home mr-1"></i> Dashboard</a>                  
                        <ul>
                            <li><a href="index"><i class="icon-rocket"></i> Dashboard</a></li>
                        </ul>
                    </li>
                    <li class="dropdown active"><a href="#"><i class="icon-layers mr-1"></i> Data Master</a>                  
                        <ul>
                            <li><a href="pelanggan"><i class="icon-docs"></i> Data Pelanggan</a></li>
                            <li><a href="hewan"><i class="icon-docs"></i> Data Hewan</a></li>
                        </ul>                   
                    </li>
                    <li class="dropdown"><a href="#"><i class="icon-support mr-1"></i> Data Transaksi</a>                   
                        <ul>
                            <li><a href="transaksi"><i class="icon-map"></i>Data Transaksi</a></li>
                        </ul>                    
                    </li>
                </ul>
                <!-- END: Menu-->
                <ol class="breadcrumb bg-transparent align-self-center m-0 p-0 ml-auto">
                    <li class="breadcrumb-item"><a href="#">Application</a></li>
                    <li class="breadcrumb-item active">Invoice List</li>
                </ol>
            </div>
        </div>
        <!-- END: Main Menu-->

        <!-- START: Main Content-->
        <main>
            <div class="container-fluid site-width">
                <!-- START: Breadcrumbs-->
                @section('Breadcrumbs')@show
                <!-- END: Breadcrumbs-->

                <!-- START: Card Data-->
                @section('konten')@show
                <!-- END: Card DATA-->                 
            </div>
        </main>
        <!-- END: Content-->
        <!-- START: Footer-->
        <footer class="site-footer">
            2022 &copy; Rian Ajie Pangestu
        </footer>
        <!-- END: Footer-->


        <!-- START: Back to top-->
        <a href="#" class="scrollup text-center"> 
            <i class="icon-arrow-up"></i>
        </a>
        <!-- END: Back to top-->


        <!-- START: Template JS-->
        <script src="{{ asset('PenitipanHewan/dist/vendors/jquery/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('PenitipanHewan/dist/vendors/jquery-ui/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('PenitipanHewan/dist/vendors/moment/moment.js') }}"></script>
        <script src="{{ asset('PenitipanHewan/dist/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>    
        <script src="{{ asset('PenitipanHewan/dist/vendors/slimscroll/jquery.slimscroll.min.js') }}"></script>
        <!-- END: Template JS-->

        <!-- START: APP JS-->
        <script src="{{ asset('PenitipanHewan/dist/js/app.js') }}"></script>
        <!-- END: APP JS-->

        <!-- START: Page Vendor JS-->
        <script src="{{ asset('PenitipanHewan/dist/vendors/raphael/raphael.min.js') }}"></script>
        <script src="{{ asset('PenitipanHewan/dist/vendors/morris/morris.min.js') }}"></script>
        <script src="{{ asset('PenitipanHewan/dist/vendors/chartjs/Chart.min.js') }}"></script>
        <script src="{{ asset('PenitipanHewan/dist/vendors/starrr/starrr.js') }}"></script>
        <script src="{{ asset('PenitipanHewan/dist/vendors/jquery-flot/jquery.canvaswrapper.js') }}"></script>
        <script src="{{ asset('PenitipanHewan/dist/vendors/jquery-flot/jquery.colorhelpers.js') }}"></script>
        <script src="{{ asset('PenitipanHewan/dist/vendors/jquery-flot/jquery.flot.js') }}"></script>
        <script src="{{ asset('PenitipanHewan/dist/vendors/jquery-flot/jquery.flot.saturated.js') }}"></script>
        <script src="{{ asset('PenitipanHewan/dist/vendors/jquery-flot/jquery.flot.browser.js') }}"></script>
        <script src="{{ asset('PenitipanHewan/dist/vendors/jquery-flot/jquery.flot.drawSeries.js') }}"></script>
        <script src="{{ asset('PenitipanHewan/dist/vendors/jquery-flot/jquery.flot.uiConstants.js') }}"></script>
        <script src="{{ asset('PenitipanHewan/dist/vendors/jquery-flot/jquery.flot.legend.js') }}"></script>
        <script src="{{ asset('PenitipanHewan/dist/vendors/jquery-flot/jquery.flot.pie.js') }}"></script>        
        <script src="{{ asset('PenitipanHewan/dist/vendors/chartjs/Chart.min.js') }}"></script>  
        <script src="{{ asset('PenitipanHewan/dist/vendors/jquery-jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
        <script src="{{ asset('PenitipanHewan/dist/vendors/jquery-jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
        <script src="{{ asset('PenitipanHewan/dist/vendors/jquery-jvectormap/jquery-jvectormap-de-merc.js') }}"></script>
        <script src="{{ asset('PenitipanHewan/dist/vendors/jquery-jvectormap/jquery-jvectormap-us-aea.js') }}"></script>
        <script src="{{ asset('PenitipanHewan/dist/vendors/apexcharts/apexcharts.min.js') }}"></script>
        <!-- END: Page Vendor JS-->

        <!-- START: Page JS-->
        <script src="{{ asset('PenitipanHewan/dist/js/home.script.js') }}"></script>
        <!-- END: Page JS-->

        <!--LANJUT TABLE-->
        <!-- START: Page Vendor JS-->
        <script src="{{ asset('PenitipanHewan/dist/vendors/datatable/js/jquery.dataTables.min.js') }}"></script> 
        <script src="{{ asset('PenitipanHewan/dist/vendors/datatable/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('PenitipanHewan/dist/vendors/datatable/jszip/jszip.min.js') }}"></script>
        <script src="{{ asset('PenitipanHewan/dist/vendors/datatable/pdfmake/pdfmake.min.js') }}"></script>
        <script src="{{ asset('PenitipanHewan/dist/vendors/datatable/pdfmake/vfs_fonts.js') }}"></script>
        <script src="{{ asset('PenitipanHewan/dist/vendors/datatable/buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('PenitipanHewan/dist/vendors/datatable/buttons/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('PenitipanHewan/dist/vendors/datatable/buttons/js/buttons.colVis.min.js') }}"></script>
        <script src="{{ asset('PenitipanHewan/dist/vendors/datatable/buttons/js/buttons.flash.min.js') }}"></script>
        <script src="{{ asset('PenitipanHewan/dist/vendors/datatable/buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('PenitipanHewan/dist/vendors/datatable/buttons/js/buttons.print.min.js') }}"></script>
        <!-- END: Page Vendor JS-->

        <!-- START: Page Script JS-->        
        <script src="{{ asset('PenitipanHewan/dist/js/datatable.script.js') }}"></script>
        <!-- END: Page Script JS-->
    </body>
    <!-- END: Body-->
</html>
