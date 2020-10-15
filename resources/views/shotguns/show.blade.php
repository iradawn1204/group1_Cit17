
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
      <form action="/users/{{$user->id}}" method='POST'>
        @method('DELETE')
         @csrf     

        
        
       <p>Name: {{$user->name}}</p>
       <p>Birthday: {{$user->birthdate}}</p>
       <p>Place: {{$user->place}}</p> 

    <button class='btn' type="submit">DELETE</button>
      <br><br>

    </div>
  </div>


  <div class="container">
    <div class="section">


    </div>
    <br><br>
  </div>
@endsection
    