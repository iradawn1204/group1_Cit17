
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
      <center><h1>{{$pump_action->model_name}}</h1></center>

     
        @method('DELETE')
         @csrf     

        
        <img src="">
       <p><b>Description:</b> {{$pump_action->description}}</p>
       <p><b>Gun History :</b> {{$pump_action->gun_history}}</p>
       <p><b>Barell Type:</b> {{$pump_action->barrel_type}}</p>
       <p><b>Fore end:</b> {{$pump_action->fore_end}}</p>
       <p><b>Bullet:</b> {{$pump_action->bullet}}</p>
       <p><b>Weight:</b> {{$pump_action->weight}}</p>
       <p><b>Power:</b> {{$pump_action->power}}</p>
       <p><b>Price:</b> {{$pump_action->price}}</p>
       <p><b>User Rating:</b> {{$pump_action->users_rating}}</p>
       <p><b>User Comemnt:</b> {{$pump_action->user_comment}}</p>


            
         

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
    