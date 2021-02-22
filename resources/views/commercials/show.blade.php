<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Pls-Admin Dashboard</title>
    <!-- Fevicon -->
    <!-- Start css -->
    <!-- Switchery css -->
    <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet">
    <!-- Apex css -->
    <link href="assets/plugins/apexcharts/apexcharts.css" rel="stylesheet">
    <!-- Slick css -->
    <link href="assets/plugins/slick/slick.css" rel="stylesheet">
    
    <link href="assets/plugins/toolbar/jquery.toolbar.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/slick/slick-theme.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/flag-icon.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        .immg{
            height: 170px;
            border-radius: 10px;
        }

    </style>
    <!-- End css -->
</head>
<body class="vertical-layout">
    <div class="infobar-settings-sidebar-overlay"></div>
    <!-- End Infobar Setting Sidebar -->
    <!-- Start Containerbar -->
    <div id="containerbar">
        <!-- Start Leftbar -->
        <div class="leftbar">
            <!-- Start Sidebar -->
            <div class="sidebar">
                <!-- Start Logobar -->
                <div class="logobar">
                <h3> <a href="/">Admin Dashboard</a></h3>
                    <!-- <a href="index.html" class="logo logo-large"><img src="assets/images/logo.svg" class="img-fluid" alt="logo"></a>
                    <a href="index.html" class="logo logo-small"><img src="assets/images/small_logo.svg" class="img-fluid" alt="logo"></a> -->
                </div>
                <!-- End Logobar -->
                <!-- Start Navigationbar -->
                <div class="navigationbar">
                    <ul class="vertical-menu">
                        <li class="vertical-header">Main</li>
                        <li>
                            <a href="/">
                                <i class="ri-dashboard-line"></i><span>Dashboard</span><i></i>
                            </a>
                        </li>
                        <li class="vertical-header">Add Properties</li>
                        <li>
                            <a href="/residentials/add">
                                <i class="ri-bank-fill"></i><span>Residentials</span><i></i>
                            </a>
                        </li>
                        <li>
                            <a href="/commercials/add">
                                <i class="ri-building-2-fill"></i><span>Commercials</span><i></i>
                            </a>
                        </li>
                        <li>
                            <a href="/landplots/add">
                                <i class="ri-map-fill"></i><span>Land Plots</span><i></i>
                            </a>
                        </li>
                        <li class="vertical-header">Profile</li>
                        <li>
                            <a href="javaScript:void();">
                              <i class="ri-account-circle-fill"></i><span>{{ Auth::user()->name }}</span><i></i>
                            </a>
                        </li>
                        <li>
                            <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">                              <i class="ri-shut-down-line text-danger"></i><span class="text-danger">Log Out</span><i></i>
</a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </li>                                      
                    </ul>
                </div>
                <!-- End Navigationbar -->
            </div>
            <!-- End Sidebar -->
        </div>
        <!-- End Leftbar -->
        <!-- Start Rightbar -->
        <div class="rightbar">
            <!-- Start Topbar Mobile -->
            <div class="topbar-mobile">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="mobile-logobar">
                            <!-- <a href="index.html" class="mobile-logo"><img src="assets/images/logo.svg" class="img-fluid" alt="logo"></a> -->
                            <h3> <a href="/">Admin Dashboard</a></h3>
                        </div>
                        <div class="mobile-togglebar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="topbar-toggle-icon">
                                        <a class="topbar-toggle-hamburger" href="javascript:void();">
                                            <span class="iconbar">
                                                <i class="ri-account-circle-fill menu-hamburger-horizontal"></i>
                                                <i class="ri-arrow-left-right-fill menu-hamburger-vertical"></i>
                                            </span>
                                         </a>
                                     </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="menubar">
                                        <a class="menu-hamburger" href="javascript:void();">
                                            <span class="iconbar">
                                                <i class="ri-menu-2-line menu-hamburger-collapse"></i>
                                                <i class="ri-close-line menu-hamburger-close"></i>
                                            </span>
                                         </a>
                                     </div>
                                </li>                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Topbar -->
            <div class="topbar">
                <!-- Start row -->
                <div class="row align-items-center">
                    <!-- Start col -->
                    <div class="col-md-12 align-self-center">
                        <div class="togglebar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="menubar">
                                        <a class="menu-hamburger" href="javascript:void();">
                                            <span class="iconbar">
                                                <i class="ri-menu-2-line menu-hamburger-collapse"></i><i class="ri-close-line menu-hamburger-close"></i>
                                            </span>
                                         </a>
                                     </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="searchbar">
                                        <form>
                                            <div class="input-group">
                                              <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                                              <div class="input-group-append">
                                                <button class="btn" type="submit" id="button-addon2"><i class="ri-search-line"></i></button>
                                              </div>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="infobar">
                            <ul class="list-inline mb-0">
                                <!-- <li class="list-inline-item">
                                    <div class="notifybar">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle infobar-icon" href="#" role="button" id="notoficationlink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="iconbar"><i class="ri-notification-3-line"></i><span class="live-icon"></span></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="notoficationlink">
                                                <div class="notification-dropdown-title">
                                                    <h5>Notifications<a href="#">Clear all</a></h5>                            
                                                </div>
                                                <ul class="list-unstyled">                                                    
                                                    <li class="media dropdown-item">
                                                        <span class="action-icon badge badge-primary"><i class="ri-archive-line"></i></span>
                                                        <div class="media-body">
                                                            <h5 class="action-title">Product Added</h5>
                                                            <p><span class="timing">Today, 08:40 AM</span></p>                            
                                                        </div>
                                                    </li>
                                                    <li class="media dropdown-item">
                                                        <span class="action-icon badge badge-success"><i class="ri-price-tag-3-line"></i></span>
                                                        <div class="media-body">
                                                            <h5 class="action-title">Sale Started</h5>
                                                            <p><span class="timing">Today, 03:45 PM</span></p>                            
                                                        </div>
                                                    </li>
                                                    <li class="media dropdown-item">
                                                        <span class="action-icon badge badge-warning"><i class="ri-file-text-line"></i></span>
                                                        <div class="media-body">
                                                            <h5 class="action-title">Kelly Reported</h5>
                                                            <p><span class="timing">5 June 2020, 02:20 PM</span></p>                            
                                                        </div>
                                                    </li>
                                                    <li class="media dropdown-item">
                                                        <span class="action-icon badge badge-danger"><i class="ri-file-user-line"></i></span>
                                                        <div class="media-body">    
                                                            <h5 class="action-title">John Resigned</h5>
                                                            <p><span class="timing">2 June 2020, 11:11 AM</span></p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="notification-dropdown-footer">
                                                    <h5><a href="#">See all</a></h5>                            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li> -->
                                <li class="list-inline-item">
                                    <div class="profilebar">
                                        <div class="dropdown">
                                          <a class="dropdown-toggle" href="#" role="button" id="profilelink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/profile.svg" class="img-fluid" alt="profile"><span class="live-icon">{{ Auth::user()->name }}</span></a>
                                        </div>
                                    </div>                                   
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End col -->
                </div> 
                <!-- End row -->
            </div>
            <!-- End Topbar -->
            <!-- Start Breadcrumbbar -->                    
            <div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">Dashboard</h4>
                        <!-- <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li> -->
                                <!-- <li class="breadcrumb-item active"><a href="#">Dashboard</a></li> -->
                                <!-- <li class="breadcrumb-item active" aria-current="page">CRM</li> -->
                            <!-- </ol> -->
                        <!-- </div>  -->
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="widgetbar">
                            <button class="btn btn-primary"><i class="ri-refresh-line mr-2"></i><a href="" class="text-white">Refresh</a></button>
                        </div>                        
                    </div>
                </div>          
            </div>
            <!-- End Breadcrumbbar -->
            <!-- Start Contentbar -->    
            <div class="contentbar">                
                <!-- Start row -->
                <div class="row">
                    <!-- Start col -->
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header">                                
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <h5 class="card-title mb-0">All Products</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Photo</th>
                                                <th>Name</th>
                                                <!-- <th>Stock</th>
                                                <th>Price</th> -->
                                                <th>Location</th>
                                                <th>Price</th>
                                                <!-- <th>Orders</th> -->
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($Commercials as $property)
                                            <tr>
                                                <th scope="row">#{{$property->id}}</th>
                                                <td><img src="/storage/{{ $property-> pimg}}" class="img-fluid immg" width="350" alt="product"></td>
                                                <td class="text-success">{{$property->title}}</td>
                                                <!-- <td>$1,70,000</td>
                                                <td>Electronics</td> -->
                                                <td><span class="badge badge-secondary-inverse mr-2">{{$property->county}}</span><span class="badge badge-secondary-inverse mr-2">{{$property->city}}</span><span class="badge badge-secondary-inverse">{{$property->street}}</span></td>
                                                <td>Ksh.{{$property->price}}</td>
                                                <td>
                                                    <div class="button-list ">
                                                        <!-- <a href="/{{$property->id}}/{{$property->ptype}}edit" class="btn btn-success-rgba"><i class="ri-pencil-line"></i></a> -->
                                                        {{-- <button type="button" class="btn btn-secondary"><i class="feather icon-zoom-in mr-2"></i> View</button> --}}
                                                        {{-- <button type="button" class="btn btn-warning"><i class="feather icon-upload mr-2"></i> Update</button> --}}
                                                        {{-- <form action="/{{$property->id}}" method="post">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger"><i class="feather icon-trash-2 mr-2"></i> Delete</button>
                                                            
                                                        </form> --}}
                                                        <div class="btn-group">
                                                            <a href="/commercials/{{$property->id}}">
                                                                <button type="button" class="btn btn-primary-rgba" data-method="reset" title="Reset">
                                                                    <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="cropper.reset()">
                                                                      <span class="ri-eye-fill"></span>
                                                                    </span>
                                                                  </button>
                                                            </a>
                                                            <form action="/commercials/{{$property->id}}" method="post">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button type="submit" class="btn btn-danger" data-method="reset" title="Reset">
                                                                    <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="cropper.reset()">
                                                                      <span class="ri-delete-bin-5-line"></span>
                                                                    </span>
                                                                  </button>
                                                                </form>
                                                          </div>
                                                    </div>
                                                </td>
                                            </tr>
                                           @endforeach
                                            <tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
                
            </div>
            <!-- End Contentbar -->
            <!-- Start Footerbar -->
            <div class="footerbar">
                <footer class="footer">
                    <p class="mb-0">Shem Mwaka</p>
                </footer>
            </div>
            <!-- End Footerbar -->
        </div>
        <!-- End Rightbar -->
    </div>
    <!-- End Containerbar -->
    <!-- Start js -->        
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/vertical-menu.js"></script>
    <!-- Switchery js -->
    <script src="assets/plugins/switchery/switchery.min.js"></script>
    <!-- Apex js -->
    <script src="assets/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="assets/plugins/apexcharts/irregular-data-series.js"></script>    
    <!-- Slick js -->
    <script src="assets/plugins/slick/slick.min.js"></script>
    <!-- Custom Dashboard js -->   
    <script src="assets/js/custom/custom-dashboard.js"></script>
    <!-- Core js -->
    <script src="assets/js/core.js"></script>
    <script src="assets/js/custom/custom-toolbar.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/vertical-menu.js"></script>
    <!-- Switchery js -->
    <script src="assets/plugins/switchery/switchery.min.js"></script>
    <!-- Toolbar js -->
    <script src="assets/plugins/toolbar/jquery.toolbar.min.js"></script>
    <script src="assets/js/custom/custom-toolbar.js"></script>
    <!-- Core js -->
    <script src="assets/js/core.js"></script>
    <!-- End js -->
</body>

</html>