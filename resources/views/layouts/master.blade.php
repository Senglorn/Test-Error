<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>
    @include('layouts.style')
</head>
<body class="hold-transition sidebar-mini">

    <div class="wrapper">
        
        @include('layouts.navbar')

        @include('layouts.leftsidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            
            {{-- code content header --}}
            @include('layouts.content-header')
            
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    
                    {{-- content here alway change--}}
                    @yield('content')

                </div>
            </div>
        </div>

    </div>

    @include('layouts.script')
    @include('sweetalert::alert')

    
</body >
</html>