<header class="header_section">
    <div class="container">
       <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html"><img width="250" src="/home/images/logo.png" alt="#" /></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav">
                <li class="nav-item active">
                   <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">About Us</a>
                 </li>
                <li class="nav-item">
                   <a class="nav-link" href="/">Products</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="/">Contact</a>
                </li>
                <li class="nav-item">
                    <form class="form-inline">
                        <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </button>
                    </form>
                </li>
                <li class="nav-item">
                    <form class="form-inline">
                        <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </form>
                </li>
                @if (Route::has('login'))

                @auth
                {{--logout--}}
                <li class="nav-item">
                    <x-app-layout>

                    </x-app-layout>
                </li>

                @else

                <li class="nav-item">
                    <a class="btn btn-primary" href="{{route('login')}}" id="logincss">Login</a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-info" href="{{ route('register') }}">Register</a>
                </li>

                @endauth

                @endif

             </ul>
          </div>
       </nav>
    </div>
 </header>
