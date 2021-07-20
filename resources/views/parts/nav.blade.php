
{{-- Navigation --}}
<nav class="navbar navbar-expand-sm navbar-light bg-light">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav4" aria-controls="navbarNav4" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="{{ url('/')}}"><img src="{{ asset('images/logo.png') }}" width="70" height="70"></a>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="nav-item"><a class="nav-link" href="{{ url('/')}}">HOME</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/about')}}">ABOUT</a></li>
        <li class="nav-item"><a class="nav-link" href="#">PORTFOLIO</a></li>
        <li class="nav-item"><a class="nav-link" href="#">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>
