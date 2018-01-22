<nav class="navbar navbar-inverse " >
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">-Nimnaya-</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="{{Request::is('/')? 'active':''}}"><a href="/">Home</a></li>
            <li class="{{Request::is('about')? 'active':''}}"><a href="/about">About</a></li>
            <li class="{{Request::is('contact')? 'active':''}}"><a href="/contact">Contact</a></li>
         </ul>
        <!--/.nav-collapse -->
        <ul class="nav navbar-nav navbar-right navbar navbar-inverse" id="navbar">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li class="{{Request::is('/auth/login')? 'active':''}}"><a href="{{ route('login') }}"><span class="glyphicon glyphicon-user"></span> Login</a></li>
                            <li class="{{Request::is('/auth/register')? 'active':''}}"><a href="{{ route('register') }}"><span class="glyphicon glyphicon-pencil"></span> Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position: relative; padding-left: 50px;">
                               <span class="glyphicon glyphicon-globe"></span>
                                   Notifications <span class="badge">{{count(auth()->user()->unreadNotifications)}}</span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                 <li>@foreach(auth()->user()->unreadNotifications as $notification)
                                  <p>someone has added a lesson</p>
                                 @endforeach
                                    </li>
                                 
                                </ul>
                            </li>

                      
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position: relative; padding-left: 50px;">
                                <img src="/uploads/avatars/{{Auth::user()->avatar}}" style="width: 32px; height: 32px; position: absolute; top: 10px; left: 10px; border-radius: 50%;"> 
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                 <li><a href="{{url('/profile')}}"><i class="fa fa-btn fa-user"></i>Profile</a>
                                    </li>
                                    <li><a href="{{url('/addedlessons')}}"><i class="fa fa-btn fa-user"></i> My Lessons</a>
                                    </li>
                                     <li><a href="{{url('/homepage')}}"><i class="fa fa-btn fa-user"></i> Home</a>
                                    </li>
                                     <li><a href="{{url('/note')}}"><i class="fa fa-btn fa-user"></i> Add Note</a>
                                    </li>
                                    <li><a href="{{url('/assignSubject')}}"><i class="fa fa-btn fa-user"></i> subject</a>
                                    </li>
                                     <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
            </div>        </ul>
      </div>
      </div>
 </nav>
  <script src="{{ asset('js/app.js') }}"></script>