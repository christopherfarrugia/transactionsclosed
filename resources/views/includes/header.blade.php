 <header>
     <div class="container">
         <div class="top-menu">
             <div>
                 <a href="/"><img class="top-menu-logo" src="/img/logo.png"></a>
             </div>
             <!-- <div class="top-menu-links">
                 <a href="">why use us</a>
                 <a href="">pricing</a>
                 <a href="">What we do</a>
                 <a href="">testimonials</a>
                 <a href="">contact us</a>
             </div>
             <button class="btn btn-green" data-toggle="modal" data-target="#SignUpModalCenter">Get Started</button> -->

             <!-- @guest
            <div class="top-menu-buttons">
                <a href="/login">login</a>
                @if (Route::has('register'))
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            </div>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest -->

         </div>
     </div>
 </header>