<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <address>
                        <p class="mb-4">{{settings('address_'.app()->getLocale())}}</p>
                        <div class="align-items-center">
                            @foreach(settings('phones') as $phone)
                            <p class="mr-4 mb-0">{{$phone}}</p><br>
                            @endforeach

                            @foreach(settings('emails') as $email)
                            <a href="mailto:{{$email}}" class="footer-link ">{{$email}}</a><br>
                            @endforeach
                        </div>
                    </address>
                    <div class="social-icons">
                        <h6 class="footer-title font-weight-bold">
                            Social Share
                        </h6>
                        <div class="d-flex">
                            <a href="{{settings('telegram')}}"><i class="mdi mdi-telegram"></i></a>
                            <a href="{{settings('facebook')}}"><i class="mdi mdi-facebook-box"></i></a>
                            <a href="{{settings('twitter')}}"><i class="mdi mdi-twitter"></i></a>
                            <a href="{{settings('instagram')}}"><i class="mdi mdi-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-4">
                            <h6 class="footer-title">Social Share</h6>
                            <ul class="list-footer">
                                <li><a href="#" class="footer-link">{{__('site.shared.Home')}}</a></li>
                                <li><a href="#" class="footer-link">{{__('site.shared.About Us')}}</a></li>
                                <li><a href="#" class="footer-link">{{__('site.shared.Projects')}}</a></li>
                                <li><a href="#" class="footer-link">{{__('site.shared.Services')}}</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <h6 class="footer-title">Product</h6>
                            <ul class="list-footer">
                                <li><a href="#" class="footer-link">{{__('site.shared.Home')}}</a></li>
                                <li><a href="#" class="footer-link">{{__('site.shared.About Us')}}</a></li>
                                <li><a href="#" class="footer-link">{{__('site.shared.Projects')}}</a></li>
                                <li><a href="#" class="footer-link">{{__('site.shared.Services')}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <img src="{{public_storage(settings('site_logo'))}}" width="100" height="200" alt="logo"
                        class="mr-3" style="width: 200px;"></br>
                    <p class="mb-0 text-small pt-1">© Developed By <a
                            href="https://www.linkedin.com/in/karim-gouda-087928242/" class="text-white"
                            target="_blank">Karim Gouda</a></p>

                </div>
            </div>

        </div>
    </div>
</footer>
@include('web.frontend.layouts.footer.whatsappicon')

@include('web.frontend.layouts.footer.scrolltotop')

@include('web.frontend.layouts.footer.scripts')

@include('web.frontend.layouts.footer.js')