<x-layouts.main xmlns:x-slot="http://www.w3.org/1999/xlink">
    <x-slot:title>
        E'lonni o'zgartirish #{{$product->id}}
    </x-slot:title>

    <!-- Contact Start -->
    <div class="container-fluid">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Maxsulotingizni yaratish uchun oyna</span>
        </h2>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form bg-light p-30">
                    <div id="success"></div>
                    <form name="sentMessage" action="{{route('products.update',['product'=>$product->id])}}" method="POST" novalidate="novalidate" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="control-group">
                            <label><h4>Bizga maxsulotingiz haqida gapirib bering</h4></label>
                            <label>Maxsulotingiz nomi*</label>
                            <input type="text" class="form-control" name="nomi" value="{{$product->nomi}}" placeholder="Masalan: Onalar uchun buket"
                                   required="required" data-validation-required-message="Please enter your name"/>
                            @error('nomi')
                            <p class="help-block text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <br>
                        <div class="control-group">
                            <label>Maxsulotingiz narxi*</label>
                            <input type="text" class="form-control" name="narxi" value="{{$product->narxi}}" placeholder=""
                                   required="required" data-validation-required-message="Narxni kiriting!"/>
                            @error('narxi')
                            <p class="help-block text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <br>
                        <div class="control-group">
                            <label>Maxsulotingizga mos kategoriyani tanlang*</label>
                            <br>
                            <select>
                                <option>Kategoriyalar</option>
                            </select>
                        </div>
                        <br>
                        <div class="control-group">
                            <label>Maxsulotingizni rasmini yuklang*</label>
                            <input type="file" class="form-control" id="subject" name="photo"/>
                            @error('photo')
                            <p class="help-block text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="control-group">
                            <br>
                            <label>Tavsif*</label>
                            <textarea class="form-control"  rows="6" name="tasnifi"
                                      placeholder="O'zingizni shu maxsulotni kurayotgan odam o'rniga qo'ying va tavsif yozing "
                                      required="required"
                                      data-validation-required-message="Maxsulotingizni tasnifini kiriting!">{{$product->tasnifi}}</textarea>
                            <label>Kamida 40 ta belgi kiriting</label>
                            @error('tasnifi')
                            <p class="help-block text-danger">{{$message}}</p>
                            @enderror
                            <br>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-outline-success py-2 px-4">Saqlash</button>
                            <a href="{{route('products.show',['product'=>$product->id])}}" class="btn btn-outline-danger py-2 px-4">Bekor qilish</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Order Total</span>
                </h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom">
                        <h6 class="mb-3">Products</h6>
                        <div class="d-flex justify-content-between">
                            <p>Product Name 1</p>
                            <p>$150</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Product Name 2</p>
                            <p>$150</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Product Name 3</p>
                            <p>$150</p>
                        </div>
                    </div>
                    <div class="border-bottom pt-3 pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Subtotal</h6>
                            <h6>$150</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">$10</h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5>$160</h5>
                        </div>
                    </div>
                </div>
                <div class="mb-5">
                    <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Payment</span>
                    </h5>
                    <div class="bg-light p-30">
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="paypal">
                                <label class="custom-control-label" for="paypal">Paypal</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="directcheck">
                                <label class="custom-control-label" for="directcheck">Direct Check</label>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="banktransfer">
                                <label class="custom-control-label" for="banktransfer">Bank Transfer</label>
                            </div>
                        </div>
                        <button class="btn btn-block btn-primary font-weight-bold py-3">Place Order</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Contact End -->

</x-layouts.main>
