
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
                    <center><h1>Pistol</h1></center>
                    
                       <form action="/users" method="POST">   
                       @csrf     
                      
                        <div class="row">
                           <form class="col s12">
                             <div class="row">
                                  <div class="input-field col s6">
                                    <p>Model name:</p>
                                    <input placeholder="" id="name" type="text" name="model_name">
                                     
                                     <p>Gun history:</p>
                                    <input placeholder="" id="text" type="text" name="gun_history">
                                     
                                      <p>Bullet type:</p>
                                       <input placeholder="" id="text" type="text" name="bullet_type">
                                       <p>Bullet fit in magz:</p>
                                       <input placeholder="" id="text" type="text" name="bullet_fit_in_magz">
                                       <p>Silencer:</p>
                                       <input placeholder="" id="text" type="text" name="silencer">
                                       <p>Safety trigger:</p>
                                       <input placeholder="" id="text" type="text" name="safety_trigger">
                                       <p>Sight:</p>
                                       <input placeholder="" id="text" type="text" name="sight">
                                       <p>Weight:</p>
                                       <input placeholder="" id="text" type="text" name="weight">
                                       <p>Power:</p>
                                       <input placeholder="" id="place" type="text" name="power">
                                       <p>Price range:</p>
                                       <input placeholder="" id="place" type="text" name="price_range">
                                       <p>Description:</p>
                                       <input placeholder="" id="text" type="text" name="description">
                                       <p>User rating:</p>
                                       <input placeholder="" id="text" type="text" name="user_rating">
                                       <p>user comment:</p>
                                       <input placeholder="" id="text" type="text" name="user_comment">


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
    