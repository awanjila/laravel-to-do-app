<!DOCTYPE html>
<html>
<head>
	<title>To Dos Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">

</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">ToDos</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item active">
        <a class="nav-link " href="/todos" tabindex="-1" aria-disabled="">todos</a>
      </li>
    
     <li class="nav-item active">
        <a class="nav-link " href="/new-todos" >create todos</a>
      </li>

      </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="container">
	@if(session()->has('success'))
	<div class="alert alert-success">
		{{session()->get('success')}}
	</div>
	@endif
</div>
<body class="container">
	@yield('content')
</body>
</html>