
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
                    <center><h1>Create User</h1></center>
                    
                       <form action="/users" method="POST">   
                       @csrf     
                      
                        <div class="row">
                           <form class="col s12">
                             <div class="row">
                                  <div class="input-field col s6">
                                    <p>Description::</p>
                                     <input  id="description" type="text" name="description">
                                     <p>Gun History:</p>
                                     <input  id="gun_history" type="text" name="gun_history">
                                     <p>Barell Type:</p>
                                     <input placeholder="country/provinve/city" id="barell_type" type="text" name="barell_type">
                                     <p>Fore end:</p>
                                     <input placeholder="country/provinve/city" id="place" type="text" name="place">
                                     <p>Barell Type:</p>
                                     <input placeholder="country/provinve/city" id="place" type="text" name="place">
                                     <p>Barell Type:</p>
                                     <input placeholder="country/provinve/city" id="place" type="text" name="place">
                                     <p>Barell Type:</p>
                                     <input placeholder="country/provinve/city" id="place" type="text" name="place">
                                     <p>Barell Type:</p>
                                       <input placeholder="country/provinve/city" id="place" type="text" name="place">


       <p><b>Fore end:</b> {{$pump_action->fore_end}}</p>
       <p><b>Bullet:</b> {{$pump_action->bullet}}</p>
       <p><b>Weight:</b> {{$pump_action->weight}}</p>
       <p><b>Power:</b> {{$pump_action->power}}</p>
       <p><b>Price:</b> {{$pump_action->price}}</p>
       <p><b>User Rating:</b> {{$pump_action->users_rating}}</p>
       <p><b>User Comemnt:</b> {{$pump_action->user_comment}}</p>
                                     <input type="submit" value="Submit" name="action">
                     
                       </div>
                 </form>
  </div>
      
        </div>
      </div>
    </form>
  </div>
       

      <br><br>

    </div>
  </div>


  <div class="container">
    <div class="section">


    </div>
    <br><br>
  </div>
@endsection
    