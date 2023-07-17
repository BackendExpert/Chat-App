
    @include('header')

    <style>
        .home-content{
            text-align: center;
            padding: 250px 0;
            background-image: linear-gradient(to bottom, rgba(56, 56, 56, 0.52), rgba(0, 0, 0, 0.73)), url('https://wallpaperaccess.com/full/2115.jpg');
            height: 100vh;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
        }
        .home-title{
            font-size: 60px;            
        }
        .btn-login{
            margin: 30px 0;
            padding: 15px 40px;
            font-size: 21px;
            background: transparent;
            border: 2px solid white;
            color: whitesmoke;
            border-radius: 5px;
            transition: 0.5s;
        }
        .btn-login:hover{
            color: black;
            background: whitesmoke;
            cursor: pointer;
        }
    </style>

    <body class="antialiased">
        {{-- <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="main-content">
                    <div class="container text-center main-btns">
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-3 btn-login">
                                @auth
                                    <a href="{{ url('/home') }}"><button class="login-btn">Home</button></a>
                                @else
                                <div class="btn-group me-2" role="group" aria-label="First group">
                                    <a href="{{ route('login') }}" ><button class="login-btn">Login</button></a>
                                </div>
                                @endauth
                            </div>
                            <div class="col-lg-3">
                            </div>
                            <div class="col-lg-3"></div>
                        </div>
                    </div>
                </div>
            @endif            
        </div> --}}

        <div class="home-content">
            <div class="container">

                @auth
                <span class="home-title">Welcome Back @php echo Auth::user()->name; @endphp</span><br>
                    <a href="{{ route('login') }}"><button class="btn-login"> <i class="fas fa-tachometer-alt"></i>   Dashboard</button></a>
                    <a href="{{ route('login') }}"><button class="btn-login"> <i class="fas fa-plus"></i>   New Chat</button></a>
                @else
                <span class="home-title">Welcome to Web-Base Chat Application</h1></span><br>
                    <a href="{{ route('login') }}"><button class="btn-login"> <i class="fas fa-user-alt"></i>   Login Here</button></a>
                @endauth

                
            </div>
        </div>
    </body>
</html>
