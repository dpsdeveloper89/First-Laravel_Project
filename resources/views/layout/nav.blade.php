
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/')}}">LARAVEL CRUD SYSTEM</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="{{Request::is('/') ? 'active' : ''}}"><a href="{{ url('/')}}">HOME <span class="sr-only">(current)</span></a></li>
        <li class="{{Request::is('create') ? 'active' : ''}}"><a href="{{ url('/create')}}">CREATE</a></li>
        
           
      </ul>
      
      
    </div>
  </div>
</nav>

