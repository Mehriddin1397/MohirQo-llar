<x-layouts.main xmlns:x-slot="http://www.w3.org/1999/xlink">
    <x-slot:title>

    </x-slot:title>


    <div class="container-fluid pb-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 mb-30">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner bg-light">
                        <div class="carousel-item active">
                            <img class="w-100 h-100" src="{{asset('storage/'.$product->photo)}}" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 h-100" src="{{asset('img/product-2.jpg')}}" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 h-100" src="{{asset('img/product-3.jpg')}}" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 h-100" src="{{asset('img/product-4.jpg')}}" alt="Image">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                        <i class="fa fa-2x fa-angle-left text-dark"></i>
                    </a>
                    <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                        <i class="fa fa-2x fa-angle-right text-dark"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-7 h-auto mb-30">
                <div class="h-100 bg-light p-30">
                    <h3>{{$product->nomi}}</h3>
                    <div class="d-flex mb-3">
                        <div class="text-primary mr-2">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star-half-alt"></small>
                            <small class="far fa-star"></small>
                        </div>
                        <small class="pt-1">(99 Reviews)</small>
                    </div>
                    <h3 class="font-weight-semi-bold mb-4">{{$product->narxi}}</h3>

                    <div class="d-flex align-items-center mb-4 pt-2">
                        <div class="input-group quantity mr-3" style="width: 130px;">
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-minus">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control bg-secondary border-0 text-center" value="1">
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-plus">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Savatga qo'shish
                        </button>
                    </div>
                    <br>
                    <div>
                        <button class="btn btn-primary px-3"><i class="fa fa-heart text-dark mr-1"></i> Saralanganga
                            qo'shish
                        </button>
                    </div>
                    <br>
                    <div class="d-flex pt-2 pb-3">
                        <strong class="text-dark mr-2">Share on:</strong>
                        <div class="d-inline-flex">
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                    @auth()
                        @can('update',$product)
                            <div class="row mb-4">
                                <a href="{{route('products.edit',['product'=>$product->id])}}"
                                   class="btn btn-outline-success py-2 px-4 mr-2">
                                    O'zgartirish
                                </a>
                                <form action="{{route('products.destroy',['product'=>$product->id])}}"
                                      method="POST"
                                      onsubmit="return confirm('Rostan ham o\'chirishni hohlaysizmi');"
                                >
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger py-2 px-4">O'chirish</button>
                                </form>

                            </div>
                        @endcan
                    @endauth
                    <div>
                        <a class="h6 text-decoration-none text-truncate">Kategoriya > {{$product->category->name}}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="bg-light p-30">
                    <div class="nav nav-tabs mb-4">
                        <a class="nav-item nav-link text-dark active" data-toggle="tab"
                           href="#tab-pane-1">Tavsif</a>
                        <a class="nav-item nav-link text-dark" data-toggle="tab" href="#tab-pane-3">Izohlar
                            ({{$product->comments()->count()}})</a>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <h4 class="mb-3">Maxsulot tavsifi</h4>
                            <p>{{$product->tasnifi}}</p>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <h4 class="mb-3">Additional Information</h4>
                            <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam
                                invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod
                                consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum
                                diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam
                                sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor
                                aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam
                                kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea
                                invidunt.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="mb-4">{{$product->nomi}} ni {{$product->comments()->count()}} - ta izohi
                                        bor</h4>
                                    @foreach($product->comments as   $comment)
                                        <div class="media mb-4">
                                            <img src="{{asset('img/user.jpg')}}" alt="Image" class="img-fluid mr-3 mt-1"
                                                 style="width: 45px;">
                                            <div class="media-body">
                                                <h6>{{$comment->user->name}}<small> -
                                                        <i>{{$comment->created_at}}</i></small></h6>
                                                <div class="text-primary mb-2">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                                <p>{{$comment->body}}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-4">Izoh qoldirish</h4>
                                    @auth()
                                        <form action="{{route('comments.store')}}" method="POST">
                                            @csrf
                                            <div class="d-flex my-3">
                                                <p class="mb-0 mr-2">Maxsulotni baholang * :</p>
                                                <div class="text-primary">
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="message">Maxsulot haqidagi fikringizni kiriting *</label>
                                                <textarea name="body" cols="30" rows="5"
                                                          class="form-control"></textarea>
                                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                            </div>
                                            <div class="form-group mb-0">
                                                <input type="submit" value="Leave Your Review"
                                                       class="btn btn-primary px-3">
                                            </div>
                                        </form>
                                    @else
                                        <div>Izoh qoldirish uchun
                                            <a class="btn btn-primary" href="{{route('login')}}">Kiring</a>

                                        </div>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->

    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">You May Also Like</span>
        </h2>
        <div class="row px-xl-5">
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                @foreach($like_products as $product)
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="/img/product-2.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href=""><i
                                        class="fa fa-shopping-cart"></i></a>
                                <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                                <a class="btn btn-outline-dark btn-square" href=""><i
                                        class="fa fa-sync-alt"></i></a>
                                <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate"
                               href="{{route('products.show', ['product'=>$product->id])}}">{{$product->nomi}}</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>{{$product->narxi}}</h5>
                                <h6 class="text-muted ml-2">
                                    <del>$123.00</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star-half-alt text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Products End -->

</x-layouts.main>