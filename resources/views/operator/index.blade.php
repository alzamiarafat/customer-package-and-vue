<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- Favicons -->

        <title>@yield('title', config('app.name'))</title>

        <!-- Scripts -->
        <script type="text/javascript" src="{{ asset('js/bootstrap-4.5.2.min.js') }}" defer></script>
        <script type="text/javascript" src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery-migrate-3.0.0.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/popper.min.js') }}" crossorigin="anonymous"></script>

        <!-- Main CSS-->
        <link href="{{ asset('css/bootstrap-4.5.2.min.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}" />
        <!-- Font-icon css-->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

        @stack('styles')

    </head>
    <body class="app sidebar-mini rtl">

        <!-- Header-->
        @include('operator.inc.header')

        <!-- Sidebar menu-->
        @include('operator.inc.sidebar')

        <main class="app-content">

            <!-- breadcrumbs section -->
            <div class="app-title">
                <div>
                    <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
                </div>
                <ul class="app-breadcrumb breadcrumb">
                    <li class="breadcrumb-item"><i class="fa fa-dashboard fa-lg"></i></li>
                    <!-- dynamic breadcrumbs -->
                    @yield('breadcrumbs')
                </ul>
            </div>

            <!-- main contents -->
            <div class="main-content">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <p><strong>Opps Something went wrong</strong></p>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                @endif

                @yield('dboard_content')
            </div>

        </main>
        <!-- pre script -->
        @stack('pre_scripts')

        <!-- Essential javascripts for application to work-->
        <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                // $('[data-toggle="tooltip"]').tooltip({
                //     trigger : 'hover'
                // });
                // remove char from numaric type text field
                // $('.quantity_class').attr('onkeyup',"this.value=this.value.replace(/[^0-9:]/g,'');");
            });
        </script>

        @stack('post_scripts')

    </body>
</html>
