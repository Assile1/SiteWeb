<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Document    wa  <</title>
</head>
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        
        
          
            <li><a  href="{{ url('acceuil') }}">Acceuil</a></li>
            <li><a  href="{ {url('servive') }}">Service</a></li>
            <li><a  href="{{ url('contact') }}">Contact</a></li>
          
       
      </ul>
      
    </div>
  </div>
</nav>
@yield('content')
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>

