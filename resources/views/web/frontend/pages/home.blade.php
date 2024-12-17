@extends('web.frontend.layout')

@section('title', __('site.shared.Home'))

@section('content')
<div class="page-body-wrapper">
    <section id="home" class="home" style="background-color: #3C37F1;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-banner">
                        <div class="d-sm-flex justify-content-between align-items-center">
                            <div data-aos="zoom-in-up" class="text-center text-sm-left">
                                <div class="banner-title w-75">
                                    <h3 class="font-weight-medium">
                                        <span style="color: #f59e0b">
                                            {{$features->title}}
                                        </span>
                                    </h3>
                                    <br>
                                </div>
                                <p class="{{ app()->getLocale() === 'en' ? 'text-left' : 'text-right' }}">
                                    {{ str()->limit($features->description, 150) }}
                                </p>
                                <div class="d-flex align-items-center justify-content-start mt-3">
                                    <a href="#contact" class="btn btn-secondary"
                                        class="{{ app()->getLocale() === 'en' ? 'text-left' : 'text-right' }}">
                                        {{__('pages.Learn more')}}
                                    </a>
                                </div>
                            </div>
                            <div class="mt-5 mt-lg-0">
                                <img src="{{ asset('storage/'.$features->image) }}" alt="marsmello" class="img-fluid"
                                    data-aos="zoom-in-up">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="our-services" id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h5 class="text-dark">{{__("pages.We’re offering")}}</h5>
                    <h3 class="font-weight-medium text-dark mb-5">{{__('pages.abjedAcademy')}}</h3>
                </div>
            </div>
            <div class=" " data-aos="fade-up">
                <div class="row gap-4 row-gap-3" data-aos="fade-up" style="row-gap: 24px;">
                    @foreach($characteristics as $course)
                    <div class="col-lg-4 col-md-6 col-sm-12 text-center text-lg-left">
                        <div class="services-box p-0 card shadow" data-aos="fade-down" data-aos-easing="linear"
                            data-aos-duration="1500">
                            <div class="card-body">
                                <div class="image-container"
                                    style="position: relative; width: 100%; padding-top: 100%; overflow: hidden;">
                                    <img src="https://abjed.online/storage/P1IcxLiAtPZlrFsV1FrhDnxK8x37aX-metacGhvdG9fMjAyNC0xMi0xNV8xMS00Ny0zOC5qcGc=-.jpg"
                                        alt="integrated-marketing" class="img-fluid"
                                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;"
                                        data-aos="zoom-in">
                                </div>
                                <a href="">
                                    <h6 class="text-dark mb-3 mt-4 font-weight-medium">
                                        {{$course->title}}
                                    </h6>
                                </a>
                                <p>
                                    {{ str()->limit($course->description, 150) }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>


            </div>
        </div>
    </section>

    <section class="our-process" id="about">
        <div class="container">
            <div class="row">
                <div @class(app()->getLocale() === 'en' ? 'text-left col-sm-6':'text-right col-sm-6') class="col-sm-6"
                    data-aos="fade-up">
                    {{-- <h5 class="text-dark">{{__('pages.Our work process')}}</h5>--}}
                    <h3 class="font-weight-medium text-dark">{{$goal->title}}</h3>
                    <p class="font-weight-medium mb-4">
                        {{$goal->description}}
                    </p>

                    @foreach($goal->points as $point)
                    <div class="d-flex justify-content-start mb-3">
                        <img src="{{asset('frontend')}}/images/tick.png" alt="tick" class="mr-3 tick-icon">
                        <p class="mb-0">{{$point}}</p>
                    </div>
                    @endforeach

                </div>
                <div class="col-sm-6 text-right" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                    data-aos-duration="2000">
                    <img src="{{asset('storage/'.$goal->image)}}" alt="idea" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="our-projects" id="projects">--}}
    {{-- <div class="container">--}}
    {{-- <div class="row mb-5">--}}
    {{-- <div class="col-sm-12">--}}
    {{-- <div class="d-sm-flex justify-content-between align-items-center mb-2">--}}
    {{-- <h3 class="font-weight-medium text-dark ">{{__("pages.Let's See Our Latest Project")}}</h3>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- <div class="mb-5" data-aos="fade-up">--}}
    {{-- <div class="owl-carousel-projects owl-carousel owl-theme">--}}
    {{-- @foreach($partners as $partner)--}}
    {{-- <div class="item">--}}
    {{-- <img src="{{asset('storage/'.$partner->image)}}" alt="slider">--}}
    {{-- </div>--}}
    {{-- @endforeach--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- <div class="container">--}}
    {{-- <div class="row pt-5 mt-5 pb-5 mb-5">--}}
    {{-- <div class="col-sm-3">--}}
    {{-- <div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-down">--}}
    {{-- <img src="{{asset('frontend')}}/images/satisfied-client.svg" alt="satisfied-client"--}}
    {{-- class="mr-3">--}}
    {{-- <div>--}}
    {{-- <h4 class="font-weight-bold text-dark mb-0"><span class="">{{$skills->title}}</span>%</h4>--}}
    {{-- <h5 class="text-dark mb-0">{{__('pages.Satisfied clients')}}</h5>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- <div class="col-sm-3">--}}
    {{-- <div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-up">--}}
    {{-- <img src="{{asset('frontend')}}/images/finished-project.svg" alt="satisfied-client"--}}
    {{-- class="mr-3">--}}
    {{-- <div>--}}
    {{-- <h4 class="font-weight-bold text-dark mb-0"><span class="">{{$skills->sub_title}}</span>--}}
    {{-- </h4>--}}
    {{-- <h5 class="text-dark mb-0">{{__('pages.Finished Project')}}</h5>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- <div class="col-sm-3">--}}
    {{-- <div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-down">--}}
    {{-- <img src="{{asset('frontend')}}/images/team-members.svg" alt="Team Members" class="mr-3">--}}
    {{-- <div>--}}
    {{-- <h4 class="font-weight-bold text-dark mb-0"><span class="">{{$skills->description}}</span>--}}
    {{-- </h4>--}}
    {{-- <h5 class="text-dark mb-0">{{__('pages.Team Members')}}</h5>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- <div class="col-sm-3">--}}
    {{-- <div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-up">--}}
    {{-- <img src="{{asset('frontend')}}/images/team-members.svg" alt="Our Blog Posts" class="mr-3">--}}
    {{-- <div>--}}
    {{-- <h4 class="font-weight-bold text-dark mb-0"><span class="">{{$skills->icon}}</span></h4>--}}
    {{-- <h5 class="text-dark mb-0">{{__('pages.Student Count')}}</h5>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </section>--}}

    <section class="testimonial" id="testimonial">
        <div class="container">
            <div class="row  mt-md-0 mt-lg-4">
                <div class="col-sm-6 text-white" data-aos="fade-up">
                    <p class="font-weight-bold mb-3">{{__('pages.Testimonials')}}</p>
                    <h3 class="font-weight-medium">{{__('pages.Our customers are our biggest fans')}}</h3>
                    <ul class="flipster-custom-nav">
                        @foreach($builds as $key=>$build)
                        <li class="flipster-custom-nav-item">
                            <a href="javascript:;" class="flipster-custom-nav-link" title="{{$key}}"></a>
                        </li>
                        @endforeach

                    </ul>
                </div>
                <div class="col-sm-6" data-aos="fade-up">
                    <div id="testimonial-flipster">
                        <ul>
                            @foreach($builds as $build)
                            <li>
                                <div class="testimonial-item">
                                    <img src="{{asset('storage/'.$build->image)}}" alt="icon" class="testimonial-icons">
                                    <p>
                                        {{$build->description}}
                                    </p>
                                    <h6 class="testimonial-author">{{$build->title}}</h6>
                                    <p class="testimonial-destination">{{$build->icon_1}}</p>
                                </div>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pricing-list" id="plans">
        <div class="container">
            <div class="row" data-aos="fade-up" data-aos-offset="-500">
                <div class="col-sm-12">
                    {{-- <div class="d-sm-flex justify-content-between align-items-center mb-2">--}}
                    {{-- <div>--}}
                    {{-- <h3 class="font-weight-medium text-dark ">{{__('pages.Checkout Pricing Plan')}}</h3>--}}
                    {{-- </div>--}}
                    {{-- </div>--}}
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-offset="-300">
                @foreach($homeCategories as $package)
                <div class="col-sm-4">
                    <div class="pricing-box">
                        <img src="{{asset('storage/'.$package->image)}}" width="50" height="50" alt="starter">
                        <h6 class="font-weight-medium title-text">{{$package->title}}</h6>
                        <h1 class="text-amount mb-4 mt-2">{{$package->video}}</h1>
                        <ul class="pricing-list">
                            @foreach($package->progresses_titles as $title)
                            <li>{{$title}}</li>
                            @endforeach
                        </ul>
                        <a href="#" class="btn btn-outline-primary">{{__('pages.Puchase Now')}}</a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <sectio n class="contactus" id="contact">
        @livewire('contact-livewire')
        </section>
</div>

@endsection