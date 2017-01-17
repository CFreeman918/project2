
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><i class="fa fa-home" aria-hidden="true"></i>Daddy's Home Inventory</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">View</a></li>
            <li><a href="#about">Add</a></li>
            <li><a href="#contact">Remove</a></li>
          </ul>
          @if (Route::has('login'))
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ url('/login') }}">Login</a></li>
            <li><a href="{{ url('/register') }}">Register</a></li>
          </ul>
          @endif  
        </div><!--/.nav-collapse -->
      </div>
    </nav>
