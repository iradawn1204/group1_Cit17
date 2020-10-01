
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
      <center><h1>Shotgun</h1></center>
        <a href="/users/create"> Create</a>

     
       <ol> 
         @foreach($shotguns as $shotgun)
         <li><a href="/shotgun/pumpactions" >{{ $shotgun->pump_action}}</li>
         <li><a href="/shotgun/breakactions" >{{ $shotgun->break_action}}</li>
         @endforeach
      </ol>
       

      <br><br>

    </div>
  </div>


  <div class="container">
    <div class="section">


    </div>
    <br><br>
  </div>
@endsection
  