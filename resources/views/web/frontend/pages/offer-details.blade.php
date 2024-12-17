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
            <img class="w-100 my-3"
                src="https://api.time.com/wp-content/uploads/2020/07/never-trumpers-2020-election-01.jpg?quality=85&w=1201&h=676&crop=1" />

            <div style="max-width: 700px; top: -80px;" class="mx-auto text-secondary">
                <p class="my-2" style="line-height: 2;">
                   {{$course->description}}
                </p>

            </div>
        </div>
    </div>
</section>
@endsection
