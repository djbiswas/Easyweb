<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
    @stack('styles')
</head>

<body>
<div id="content">
    @include('layouts.navbar')

    <div class="wrapper">
        @include('layouts.sidebar')

        <div class="container-main container" style="max-width: 90%">
            @include('flash::message')
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @yield('content')

            <div class="mt-5"> .</div>
            <div class="mt-5"> .</div>
        </div>
    </div>

    @include('layouts.footer-nav')
</div>

@include('layouts.footer-scripts')

@stack('scripts')
@yield('scripts')
</body>

</html>
