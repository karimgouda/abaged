@extends('web.frontend.layout')

@section('title', __('site.shared.Home'))

@section('content')
<section>
    <div class="page-body-wrapper">
        <div class="container my-5">
            <div style="max-width: 700px; top: -80px;" class="mx-auto text-secondary">
                <h1 class="font-weight-bold text-dark text-center m-3" style="font-style: italic">{{$course->title}}</h1>
                <div class="my-3 d-flex align-items-center justify-content-between">
                </div>
            </div>
            <img class="w-75 my-3 text-center"
                src="{{ asset('storage/'.$course->icon) }}" />

            <div style="max-width: 700px; top: -80px;" class="mx-auto text-secondary">
                <p class="my-2" style="line-height: 2;">
                   {{$course->description}}
                </p>

            </div>
        </div>
    </div>
</section>
@endsection
