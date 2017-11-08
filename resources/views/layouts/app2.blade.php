<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

@yield('page_title')

<!-- Bootstrap -->
{{Html::style('assets/css/bootstrap.min.css')}}
{{Html::style('assets/css/style.css')}}



<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>

    {{Html::script('assets/js/html5shiv.min.js')}}
{{Html::script('assets/js/respond.min.js')}}
        <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>-->
    <!--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
    <![endif]-->
    @yield('page_style')
</head>



<body style="background-color: #173148;">


{{--Library specific--}}

<nav class="navbar navbar-default navbar-static-top" style="background-color: transparent; border-color: transparent">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{--{{url('/')}}--}}{{ route('home') }}">
                L<span style="color: orange">!</span>brary @include('include.doodle'){{--due to destractions--}}
            </a>
        </div>

        </ul>
        <ul class="nav navbar-nav navbar-right">

            <!-- Authentication Links -->

            @if (Auth::guest())

                    @if(Request::fullUrlIs(route('login')))
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @elseif(Request::fullUrlIs(route('register')))
                        <li><a href="{{ route('login') }}">Login</a></li>
                    @elseif(Request::fullUrlIs(route('password.request')))
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        @endif
            @else
                <?php
                redirect(route('register'));

                ?>
            @endif


        </ul>
    </div><!--/.nav-collapse -->
    </div>
</nav>



<div class="container">
    @yield('content')








</div>
{{--if login reset register ---> navbar-fixed---}}
{{--@yield('footer')--}}
{{--else--}}


{{----}}

    <footer  class="footer navbar-fixed-bottom" style="background-color: transparent; border-color: transparent">
        @include('include.footerNavLib')
        {{--        @include('include.footerNavRc')--}}
    </footer>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>--}}
{{Html::script('assets/js/jquery.min.js')}}
<!-- Include all compiled plugins (below), or include individual files as needed -->
{{Html::script('assets/js/bootstrap.min.js')}}

{{--{{Html::script('js/app.js')}}{{--for Auth--}}
{{--or--}}
{{--<script src="{{ asset('js/app.js') }}"></script>--}}
</body>
</html>
