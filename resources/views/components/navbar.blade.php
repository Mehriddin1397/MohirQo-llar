<!-- Navbar Start -->
<div class="container-fluid bg-dark mb-30">
    <div class="row px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse"
               href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Kategoriyalar</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light"
                 id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                <div class="navbar-nav w-100">
                    <div class="nav-item dropdown dropright">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Suvinerlar <i
                                class="fa fa-angle-right float-right mt-1"></i></a>
                        <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                            <a href="" class="dropdown-item">Taqinchoqlar</a>
                            <a href="" class="dropdown-item">Gullar</a>
                        </div>
                    </div>
                    <a href="" class="nav-item nav-link">Yog'och buyumlar</a>
                    <a href="" class="nav-item nav-link">Temir buyumlar</a>
                    <a href="" class="nav-item nav-link">Swimwear</a>
                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                <a href="{{route('main')}}" class="text-decoration-none d-block d-lg-none">
                    <span class="h1 text-uppercase text-dark bg-light px-2">Mohir</span>
                    <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Qo'llar</span>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="{{route('main')}}" class="nav-item nav-link active">{{__('Bosh Menyu')}}</a>
                        <a href="{{route('products.index')}}" class="nav-item nav-link">{{__('Maxsulotlar')}}</a>
                        <a href="{{route('aloqa')}}" class="nav-item nav-link">{{__('Biz bilan aloqa')}}</a>
                        @auth()
                            <a href="{{route('products.create')}}" class="nav-item nav-link">{{__('E\'lon berish')}}</a>
                        @endauth
                    </div>
                    <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                        <a href="" class="btn px-0">
                            <i class="fas fa-heart text-primary"></i>
                            <span class="badge text-secondary border border-secondary rounded-circle"
                                  style="padding-bottom: 2px;">0</span>
                        </a>
                        <a href="" class="btn px-0 ml-3">
                            <i class="fas fa-shopping-cart text-primary"></i>
                            <span class="badge text-secondary border border-secondary rounded-circle"
                                  style="padding-bottom: 2px;">0</span>
                        </a>
                        @auth()
                            @if(auth()->user()->unreadNotifications()->count()==!0)
                                <a href="{{route('notification.index')}}" class="btn px-0 ml-2 ">
                                    <i class="fas  text-primary"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-1 h-1">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0"/>
                                    </svg>
                                    <span class="badge text-secondary border border-secondary rounded-circle"
                                          style="padding-bottom: 2px;">{{auth()->user()->unreadNotifications()->count()}}</span>
                                </a>
                            @endif
                        @endauth
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Navbar End -->
