<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('product.index') }}">Brand</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="{{ route('product.shoppingCart') }}">
            <span class="fa fa-shopping-cart" aria-hidden="true"></span> Shopping Cart
            <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
          </a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-user" aria-hidden="true"></span> User Management<span class="caret"></span></a>
          <ul class="dropdown-menu">
            @if(Auth::check())
              <li><a href="{{ route('user.profile') }}">User profile</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="{{ route('user.logout') }}">Logout</a></li>
            @else 
              <li><a href="{{ route('user.signup') }}">Sing Up</a></li>
              <li><a href="{{ route('user.signin') }}">Sing In</a></li>
            @endif
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>