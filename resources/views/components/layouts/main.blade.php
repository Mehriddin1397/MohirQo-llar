<!DOCTYPE html>
<html lang="uz">

<head>
    <meta charset="utf-8">
    <title>{{$title ?? 'MohirQollar'}}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{asset('/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="{{asset('https://fonts.gstatic.com')}}">
    <link href="{{asset('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap')}}"
          rel="stylesheet">

    <!-- Font Awesome -->
    <link href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css')}}"
          rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('/css/style.css')}}" rel="stylesheet">
</head>

<body>
<!-- Topbar Start -->
<div class="container-fluid">
    <div class="row bg-secondary py-1 px-xl-5">
        <div class="col-lg-6 d-none d-lg-block">
            <div class="d-inline-flex align-items-center h-100">
                <a class="text-body mr-3" href="">{{__('Biz haqimizda')}}</a>
                <a class="text-body mr-3" href="">{{__('Bog\'lanish')}}</a>
                <a class="text-body mr-3" href="">Admin</a>
            </div>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                <div class="btn-group pr-5">
                    @auth()
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button class="btn btn-primary mr-3 d-lg-block">{{__('Chiqish')}}</button>
                        </form>
                    @else
                        <button type="button" class="btn btn-secondary btn-lg "><a href="{{route('login')}}">{{__('Kirish')}}</a>
                        </button>
                    @endauth
                </div>
                <div class="btn-group">
                    @foreach($all_locales as $locale)
                        <a href="{{ route('locale.change',['locale'=>$locale]) }}" type="button"
                           class="btn btn-sm btn-light ">
                            {{$locale}}
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="d-inline-flex align-items-center d-block d-lg-none">
                <a href="" class="btn px-0 ml-2">
                    <i class="fas fa-heart text-dark"></i>
                    <span class="badge text-dark border border-dark rounded-circle"
                          style="padding-bottom: 2px;">0</span>
                </a>
                <a href="" class="btn px-0 ml-2">
                    <i class="fas fa-shopping-cart text-dark"></i>
                    <span class="badge text-dark border border-dark rounded-circle"
                          style="padding-bottom: 2px;">0</span>
                </a>
            </div>
        </div>
    </div>
    <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
        <div class="col-lg-4">
            <a href="{{route('main')}}" class="text-decoration-none">
                <span class="h1 text-uppercase text-primary bg-dark px-2">Mohir</span>
                <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Qo'llar</span>
            </a>
        </div>
        <div class="col-lg-4 col-6 text-left">
            <form action="">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for products">
                    <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-4 col-6 text-right">
            <p class="m-0">Ishonch telefoni</p>
            <h5 class="m-0">+998 94 255 13 97</h5>
        </div>
    </div>
</div>


<x-navbar></x-navbar>


{{$slot}}


<!-- Footer Start -->
<div class="container-fluid bg-dark text-secondary mt-5 pt-5">
    <div class="row px-xl-5 pt-5">
        <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
            <h5 class="text-secondary text-uppercase mb-4">{{__('Aloqa uchun')}}</h5>
            <p class="mb-4">{{__('Biz mijozlarimiz uchun doimo aloqadamiz. Bizni manzilga kelib muammolarni hal qilishingiz yoki ishonch telefonlariga murojaat qilishingiz mumkin')}}</p>
            <p class="mb-2"><i
                    class="fa fa-map-marker-alt text-primary mr-3"></i>{{__('Toshkent shaxar, Yunusobod tuman,Axmad Donish kuchasi 26-uy,86-kvartira')}}
            </p>
            <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>soyibovmehriddin@gmail.com</p>
            <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+99894 255 13 97</p>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="row">
                <div class="col-md-4 mb-5">
                    <h5 class="text-secondary text-uppercase mb-4">{{__('Bo\'limlar')}}</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-secondary mb-2" href="{{route('main')}}"><i
                                class="fa fa-angle-right mr-2"></i>{{__('Bosh Menyu')}}</a>
                        <a class="text-secondary mb-2" href="{{route('products.index')}}"><i
                                class="fa fa-angle-right mr-2"></i>{{__('Maxsulotlar')}}</a>
                        <a class="text-secondary" href="{{route('aloqa')}}"><i
                                class="fa fa-angle-right mr-2"></i>{{__('Biz bilan aloqa')}}</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="text-secondary text-uppercase mb-4">My Account</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                        <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="text-secondary text-uppercase mb-4">{{__('Xabarlar')}}</h5>
                    <p>{{__("Xabarlarni saytimizda kuzatib borishingiz mumkin")}}</p>
                    <h6 class="text-secondary text-uppercase mt-4 mb-3">{{__('Bizni kuzatib boring:')}}</h6>
                    <div class="d-flex">
                        <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="col-md-6 px-xl-0">
            <p class="mb-md-0 text-center text-md-left text-secondary">
                &copy; <a class="text-primary" href="#">Mohir Qo'llar.uz</a>
                by
                <a class="text-primary" href="https://htmlcodex.com">Mehriddin Soyibov</a>
            </p>
        </div>
        <div class="col-md-6 px-xl-0 text-center text-md-right">
            <img class="img-fluid" src="img/payments.png" alt="">
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>

