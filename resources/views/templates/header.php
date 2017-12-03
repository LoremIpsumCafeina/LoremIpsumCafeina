<div class="ui secondary  menu">
  <a class="active item">
    Home
  </a>
  <a class="item">
    Messages
  </a>
  <a class="item">
    Friends
  </a>
  <div class="right menu">
    <div class="item">
      <div class="ui icon input">
        <input type="text" placeholder="Search...">
        <i class="search link icon"></i>
      </div>
    </div>
    @guest
    <a href="{{ route('login') }}" class="ui item">Login</a>
    <a href="{{ route('register') }}" class="ui item">Register</a>
    @else
    <a href="#" class="dropdown-toggle ui item" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
        {{ Auth::user()->name }} <span class="caret"></span>
    </a>
    <a class="class="ui item""
    href="{{ route('logout') }}"
    onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
      Logout
    </a>
    @endguest
  </div>
</div>