
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
                    <center><h1>Add</h1></center>
                    
                       <form action="/shotgun/pumpactions" method="POST">   
                       @csrf     
                       @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                      
                        <div class="row">
                           <form class="col s12">
                             <div class="row">
                                  <div class="input-field col s6">
                                     <p>Model Name:</p>
                                     <input  required placeholder="" id="model_name" type="text" name="model_name">
                                    <p>Description:</p>
                                     <input  required placeholder="" id="description" type="text" name="description">
                                     <p>Gun History:</p>
                                     <input  required placeholder="" id="gun_history" type="text" name="gun_history">
                                     <p>Barell Type:</p>
                                     <input required placeholder="" id="barrel_type" type="text" name="barrel_type">
                                     <p>Fore end:</p>
                                     <input required placeholder=""  id="fore_end" type="text" name="fore_end">
                                     <p>Bullet:</p>
                                     <input required placeholder=""  id="bullet" type="text" name="bullet">
                                     <p>Weight:</p>
                                     <input prequired placeholder=""  id="weight" type="text" name="weight">
                                     <p>Power:</p>
                                     <input required placeholder=""  id="power" type="text" name="power">
                                     <p>Price:</p>
                                     <input required placeholder=""  id="price" type="text" name="price">
                                    <div class="users_feedback">
                                      
                                 

                                     <p>User Rating:</p>
                                     <input required placeholder=""  id="users_rating" type="text" name="users_rating">
                                     <p>User Comment:</p>
                                     <input required placeholder=""  id="user_comment" type="text" name="user_comment">

                                     <input type="submit" value="Submit" name="action">

                                   </div>


     
   
   
   
                     
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
    