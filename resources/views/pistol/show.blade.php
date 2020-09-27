
@extends('layouts.master')

@section('content')
<body>
  <nav class="light-blue lighten-1" role="navigation">
    
        <li><a href="/home">Home</a></li> <li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <center><h1>User Information</h1></center>

      <a href="/users/{{$user->id}}/edit">Edit Info</a>
        
       <p>Model Name: {{$pistol->model name}}</p>
       <p>Gun History: {{$pistol->gun history}}</p>
       <p>Bullet type: {{$pistol->bullet type}}</p>
       <p>Bullet fit in magz: {{$pistol->bullet fit in magz}}</p>
       <p>Silencer: {{$pistol->silencer}}</p>
       <p>Safety trigger: {{$pistol->safety trigger}}</p>
       <p>Sight: {{$pistol->sight}}</p>
       <p>Power: {{$pistol->power}}</p>
        <p>Weight: {{$pistol->weight}}</p>
       <p>Price range: {{$pistol->price range}}</p>
       <p>Description: {{$pistol->description}}</p> 
       <p>User rating: {{$pistol->user rating}}</p>
       <p>User comment: {{$pistol->user comment}}</p>
       

      <br><br>

    </div>
  </div>


  <div class="container">
    <div class="section">


    </div>
    <br><br>
  </div>
@endsection
    