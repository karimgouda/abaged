@php use Illuminate\Support\Facades\Route; @endphp
<nav class="navbar navbar-expand-lg fixed-top" style="padding-block: 0rem;">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="{{public_storage(settings('site_logo'))}}" width="50" height="150"
                                              style="width: 150px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="mdi mdi-menu"> </i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <div class="d-lg-none d-flex justify-content-between px-4 py-3 align-items-center">
                <img src="{{public_storage(settings('site_logo'))}}" class="logo-mobile-menu bg-transparent" alt="logo">
                <a href="javascript:;" class="close-menu"><i class="mdi mdi-close"></i></a>
            </div>
            <ul class="navbar-nav ml-auto align-items-center">
                <li class="nav-item active">
                    <a class="nav-link" href=" {{Route::currentRouteName() == 'site.offer-details' ? \route('site.home') : '#home'}}">{{__('site.shared.Home')}} <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="  {{Route::currentRouteName() == 'site.offer-details' ? \route('site.home') : '#services'}}">{{__('site.shared.Services')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{Route::currentRouteName() == 'site.offer-details' ? \route('site.home') : '#about'}}">{{__('site.shared.About Us')}}</a>
                </li>
                {{-- <li class="nav-item">--}}
                {{-- <a class="nav-link" href="#projects">{{__('site.shared.Projects')}}</a>--}}
                {{-- </li>--}}
                <li class="nav-item">
                    <a class="nav-link" href="{{Route::currentRouteName() == 'site.offer-details' ? \route('site.home') : '#testimonial'}}">{{__('site.shared.Testimonials')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{Route::currentRouteName() == 'site.offer-details' ? \route('site.home') : '#plans'}}">{{__('site.shared.Plans')}}</a>
                </li>
                <li class="nav-item rounded-5 mx-4" style="width: 40px; height: 40px;">
                    <div class="lang">
                        <a
                            href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale() === 'en' ? 'ar' : 'en', null, [], true) }}">
                            <img
                                src="{{ app()->getLocale() === 'en' ? asset('frontend/images/us.svg') : asset('frontend/images/eg.svg') }}"
                                alt="lang">
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
