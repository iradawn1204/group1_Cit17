
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
      <center><h1>{{$break_action->model_name}}</h1></center>

     
        @method('DELETE')
         @csrf     

        
        <img src="">
       <p><b>Description:</b> {{$break_action->description}}</p>
       <p><b>Gun History :</b> {{$break_action->gun_history}}</p>
       <p><b>Barell Type:</b> {{$break_action->barrel_type}}</p>
       <p><b>Fore end:</b> {{$break_action->double_barell_type}}</p>
       <p><b>Bullet:</b> {{$break_action->bullet}}</p>
       <p><b>Weight:</b> {{$break_action->weight}}</p>
       <p><b>Power:</b> {{$break_action->power}}</p>
       <p><b>Price:</b> {{$break_action->price}}</p>
       <p><b>User Rating:</b> {{$break_action->user_rating}}</p>
       <p><b>User Comemnt:</b> {{$break_action->user_comment}}</p>


            
         

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
    