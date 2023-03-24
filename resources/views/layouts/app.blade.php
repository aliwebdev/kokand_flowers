<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Qo'qon gullari - Paneli</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/logo.jfif">
    <!-- page css -->
    <!-- Core css -->
    <link href="assets/css/app.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>
<style>
</style>

@auth
<body>
    <div class="layout">
        <div class="vertical-layout">
            <!-- Header START -->
            <div class="header-text-dark header-nav layout-vertical">
                <div class="header-nav-wrap">
                    <div class="header-nav-left">
                        <div class="header-nav-item desktop-toggle">
                            <div class="header-nav-item-select cursor-pointer">
                                <!-- burger start -->
                                <i class="nav-icon feather icon-menu icon-arrow-right"></i>
                            </div>
                        </div>
                        <div class="header-nav-item mobile-toggle">
                            <div class="header-nav-item-select cursor-pointer">
                                <i class="nav-icon feather icon-menu icon-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="header-nav-right">
                

                        <div class="header-nav-item">
                            <div class="dropdown header-nav-item-select nav-profile" >
                                <div class="toggle-wrapper" id="nav-profile-dropdown" data-bs-toggle="dropdown">
                                  
                                    
                                    <span class="fw-bold mx-1"> <i class="font-size-lg me-2 feather icon-user"></i>{{ Auth::user()->name }}</span>
                                    <i class="feather icon-chevron-down"></i>
                                </div>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="nav-profile-header">
                                       <div class="d-flex align-items-center">
                                            <div class="avatar avatar-circle avatar-image">
                                                <img src="assets/images/avatars/thumb-2.jpg" alt="">
                                            </div>
                                            <div class="d-flex flex-column ms-1">
                                                <span class="fw-bold text-dark">{{ Auth::user()->name }}</span>
                                                <span class="font-size-sm">{{ Auth::user()->email }}</span>
                                            </div>
                                       </div>
                                    </div>
                                    <a href="javascript:void(0)" class="dropdown-item">
                                       <div class="d-flex align-items-center">
                                           <i class="font-size-lg me-2 feather icon-user"></i>
                                           <span>Profilim</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="dropdown-item">
                                       <div class="d-flex align-items-center">
                                           <i class="font-size-lg me-2 feather icon-settings"></i>
                                           <span>Sozlamalar</span>
                                        </div>
                                    </a>
                                    </a>
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="font-size-lg me-2 feather icon-power"></i>{{ __('Chiqish') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                 </div>
                            </div>
                        </div>     
                    </div>
                </div>
            </div>    
            <!-- Header END -->

            <!-- Side Nav START -->
            <div class="side-nav vertical-menu nav-menu-light scrollable">
                <div class="nav-logo">
                    <div class="w-100 logo">
                        <h2 class="title">Qo'qon Gullari</h2>
                        <!-- <img class="img-fluid" src="./assets/images/logo/logo.jfif" style="height: 190px; width: 200px;" alt="logo"> -->
                    </div>
                    <div class="mobile-close">
                        <i class="icon-arrow-left feather"></i>
                    </div>
                 </div>
                 <ul class="nav-menu">
                    <li class="nav-menu-item">
                        <a href="{{ route('home') }}">
                            <i class="feather icon-home"></i>
                            <span class="nav-menu-item-title">Asosiy panel</span>
                        </a>
                    </li>
                    <li class="nav-group-title">Hisobotlar</li>
                    <li class="nav-menu-item">
                        <a href="{{ route('clients.index') }}">
                            <i class="feather icon-users"></i>
                            <span class="nav-menu-item-title">Mijozlar</span>
                        </a>
                    </li>
                    
                    <li class="nav-menu-item">
                        <a href="{{ route('staff.index') }}">
                            <i class="feather icon-users"></i>
                            <span class="nav-menu-item-title">Hodimlar</span>
                        </a>
                    </li>
                    <li class="nav-menu-item">
                        <a href="v-chat.html">
                            <i class="feather icon-gift"></i>
                            <span class="nav-menu-item-title">Buyurtmalar</span>
                        </a>
                    </li>
                    <li class="nav-menu-item">
                        <a href="v-calendar.html">
                            <i class="feather icon-archive"></i>
                            <span class="nav-menu-item-title">Mahsulotlar</span>
                        </a>
                    </li>
                    <li class="nav-group-title">Moliya bo'limi</li>
                    <li class="nav-menu-item">
                        <a href="v-chart.html">
                            <i class="feather icon-bar-chart-2"></i>
                            <span class="nav-menu-item-title">Sotuv statistikasi</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Side Nav END -->

            <!-- Content START -->
            <div class="content">
             @yield('content')    
            </div>
            <!-- Content END -->

            <!-- Quick View START -->
            <div class="modal modal-right fade quick-view" id="quick-view">
                <div class="modal-dialog right">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title pull-left">Theme Config</h4>
                            <button type="button" class="close pull-right" data-bs-dismiss="modal">
                                <span>×</span>
                            </button>
                        </div>
                        <div class="modal-body scrollable">
                            <div class="mb-4">
                                <h5 class="mb-0">Header Color</h5>
                                <p>Config header background color</p>
                                <div class="theme-configurator d-flex mt-2">
                                    <div class="radio">
                                        <input id="header-default" name="header-theme" type="radio" checked value="#ffffff">
                                        <label for="header-default"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-primary" name="header-theme" type="radio" value="#11a1fd">
                                        <label for="header-primary"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-success" name="header-theme" type="radio" value="#00c569">
                                        <label for="header-success"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-info" name="header-theme" type="radio" value="#5a75f9">
                                        <label for="header-info"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-warning" name="header-theme" type="radio" value="#ffc833">
                                        <label for="header-warning"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-danger" name="header-theme" type="radio" value="#f46363">
                                        <label for="header-danger"></label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <h5 class="mb-0">Side Nav Dark</h5>
                                <p>Change Side Nav to dark</p>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="side-nav-theme-toggle" id="side-nav-theme-toggle">
                                    <label class="form-check-label" for="side-nav-theme-toggle"></label>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <h5 class="mb-0">Folded Menu</h5>
                                <p>Toggle Folded Menu</p>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="side-nav-fold-toogle" id="side-nav-fold-toogle">
                                    <label class="form-check-label" for="side-nav-fold-toogle"></label>
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Horizontal Layout</h5>
                                <p>Set Horizontal Layout</p>
                                <div class="btn-group btn-group-sm">
                                    <a href="#" class="btn btn-outline-primary active" aria-current="page">Vertical</a>
                                    <a href="h-index.html" class="btn btn-outline-primary">Horizontal</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
            <!-- Quick View END -->
        </div>
    </div>

    
    <!-- Core Vendors JS -->
    <script src="assets/js/vendors.min.js"></script>

    <script src="assets"></script>
    <!-- page js -->
    <script src="assets/vendors/apexcharts/dist/apexcharts.min.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>
    <!-- Core JS -->
    <script src="assets/js/app.js"></script>
    <script>
        let nav_icon = document.querySelector(".nav-icon");
        let h2 = document.querySelector(".title");
        holat  = true
        nav_icon.addEventListener("click", () =>{
            if (holat) {
                h2.innerText = "QG";
                holat = false
            } else{
                holat = true;
                h2.innerText = "Qo'qon Gullari";
            }
        });

        
    </script>
</body>

</html>
@else

@endauth