<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Pls-AddPlots</title>
    <!-- Fevicon -->
    <!-- Start css -->
    <!-- Switchery css -->
    <link href="../assets/plugins/switchery/switchery.min.css" rel="stylesheet">
    <!-- Apex css -->
    <link href="../assets/plugins/apexcharts/apexcharts.css" rel="stylesheet">
    <!-- Slick css -->
    <link href="../assets/plugins/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css">

    <link href="../assets/plugins/slick/slick.css" rel="stylesheet">
    <link href="../assets/plugins/slick/slick-theme.css" rel="stylesheet">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/flag-icon.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css">
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
                            <!-- <a href="index.html" class="mobile-logo"><img src="../assets/images/logo.svg" class="img-fluid" alt="logo"></a> -->
                            <h3> <a href="index.html">Admin Dashboard</a></h3>
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
                                          <a class="dropdown-toggle" href="#" role="button" id="profilelink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/profile.svg" class="img-fluid" alt="profile"><span class="live-icon">{{ Auth::user()->name }}</span></a>
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
                        <h4 class="page-title">Add New Property</h4>
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
                                <h5 class="card-title">Add LandPlots</h5>
                            </div>
                            <div class="card-body">
                                <form action="/landplots" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">Title</label>
                                            <input type="text" value="{{ old('title') }}" name="title" class="form-control"  placeholder="">
                                            @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress2">Description</label>
                                        <textarea class="form-control"value="{{ old('description') }}" rows="5" name="description" id="maxlength-textarea" placeholder=" ">{{ old('description') }}</textarea>
                                        @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputAddress">Address/Street</label>
                                            <input type="text" value="{{ old('street') }}" name="street" class="form-control" id="inputAddress" placeholder="">
                                            @error('street')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputAddress">County</label>
                                            <input type="text" value="{{ old('county') }}" name="county" class="form-control" id="inputAddress" placeholder="">
                                            @error('county')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputState">Status</label>
                                            <select id="inputState" value="{{ old('status') }}" name="status" class="form-control">
                                                <option selected>Rent</option>
                                                <option>Sale</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputState">Type</label>
                                            <select id="inputState"value="{{ old('type') }}" name="type" class="form-control">
                                                <option selected>Small Plots</option>
                                                <option>Big Land Mass</option>
                                            </select>
                                        </div>
                                    </div>  
                                    <div class="card m-b-30">
                                        <div class="card-header">
                                            <h5 class="card-title">Property Cover Image upload</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="fallback">
                                                <input name="pimg" type="file">
                                                @error('pimg')
                                                    <strong>{{ $message }}</strong>
                                                 @enderror
                                            </div>
                                        </div>
                                    </div><!--   
                                    <div class="card m-b-30">
                                        <div class="card-header">
                                            <h5 class="card-title">Property Images upload</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="fallback">
                                                <input name="pimgs[]" type="file" multiple="multiple">
                                            </div>
                                        </div>
                                    </div>  -->                                    
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputAddress">Price</label>
                                            <input type="text" value="{{ old('price') }}" name="price" class="form-control" id="inputAddress" placeholder="">
                                            @error('price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputAddress">Area(sqft)</label>
                                            <input type="text" value="{{ old('price') }}" name="area" class="form-control" id="inputAddress" placeholder="">
                                            @error('area')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                     <input type="text" value="landplots" name="ptype" hidden>

                                    <!-- <button type="submit" class="btn btn-primary">Sign in</button> -->
                                    <button type="submit" class="btn btn-warning"><i class="feather icon-send mr-2"></i> Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                </div> <!-- End row -->
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
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/modernizr.min.js"></script>
    <script src="../assets/js/detect.js"></script>
    <script src="../assets/js/jquery.slimscroll.js"></script>
    <script src="../assets/js/vertical-menu.js"></script>
    <!-- Switchery js -->
    <script src="../assets/plugins/switchery/switchery.min.js"></script>
    <!-- Apex js -->
    <script src="../assets/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="../assets/plugins/apexcharts/irregular-data-series.js"></script>    
    <!-- Slick js -->
    <script src="../assets/plugins/slick/slick.min.js"></script>
    <!-- Custom Dashboard js -->   
    <script src="../assets/js/custom/custom-dashboard.js"></script>
    <script src="../assets/plugins/dropzone/dist/dropzone.js"></script>
    <!-- Core js -->
    <script src="../assets/js/core.js"></script>
    <!-- End js -->
</body>

</html>