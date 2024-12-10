<!DOCTYPE html>
<html @if (app()->getLocale() == 'ar') lang="ar" dir="rtl" @endif>

@include('web.frontend.layouts.head')

<body data-spy="scroll" data-target=".navbar" data-offset="50">




    @include('web.frontend.layouts.partials._loader')

    @include('web.frontend.layouts.header')

    @yield('content')

    @include('web.frontend.layouts.footer')

    {!! settings('body_manager_script') !!}

</body>

</html>
