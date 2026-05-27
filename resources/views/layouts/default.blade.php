<!DOCTYPE html>
<html>

<head>
    @include('includes.head')
    <title> {{ $title }} </title>
    <meta name="description" content="@yield('meta_desc')">
    @yield('page_css')
</head>

<body>
    <div class="page-wrapper">
        @include('includes.header')
         @yield('content')
        @include('includes.footer')
    </div>
</body>

</html>
