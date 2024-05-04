<x-layouts.main xmlns:x-slot="http://www.w3.org/1999/xlink">
    <x-slot:title>
        Biz bilan aloqa
    </x-slot:title>
    <!-- Contact Start -->
    <div class="container-fluid">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">{{__('Biz bilan bog\'lanish')}}</span></h2>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form bg-light p-30">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" placeholder="Ismingizni kiriting"
                                   required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="email" placeholder="Elektron pochta"
                                   required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="8" id="message" placeholder="Xabaringizni kiriting"
                                      required="required"
                                      data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Xabarni yuborish</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mb-5">
                <div class="bg-light p-30 mb-30">
                    <iframe style="width: 100%; height: 250px;"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1604.6755687472116!2d69.28193219120601!3d41.36042483993798!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8cb4038b3d3f%3A0xdb1b0838469de58!2sAhmad%20Donish%20ko&#39;chasi%2026b%2C%20100093%2C%20%D0%A2%D0%BEshkent%2C%20Toshkent%2C%20O%60zbekiston!5e0!3m2!1suz!2s!4v1714798921816!5m2!1suz!2s"
                            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="bg-light p-30 mb-3">
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>{{__('Toshkent shaxar, Yunusobod tuman,Axmad Donish kuchasi 26-uy,86-kvartira')}}</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>soyibovmehriddin@gmail.com</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>+99894 255 13 97</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
</x-layouts.main>
