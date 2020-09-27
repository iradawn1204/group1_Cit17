
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
                    <center><h1>Edit Pistol</h1></center>
                    
                       <form action="/users/{{$user->id}}" method='POST'> 
                       @method('PUT')  
                       @csrf     
                      
                        <div class="row">
                           <form class="col s12">
                             <div class="row">
                                  <div class="input-field col s6">
                                    <p>Model name:</p>
                                    <input placeholder="" id="name" type="text" name="Model_name" value='{{$pistol->model name}}'>
                                     
                                     <p>Gun history:</p>
                                    <input placeholder="" id="text" type="text" name="gun_history" value='{{$pistol->gun history}}'>
                                     
                                      <p>Bullet type:</p>
                                       <input placeholder="" id="text" type="text" name="bullet_type" value='{{$pistol->bullet type}}'>
                                       <p>Bullet fit in magz:</p>
                                       <input placeholder="" id="text" type="text" name="bullet_fit_in_magz" value='{{$pistol->bullet fit in magz}}'>
                                       <p>Silencer:</p>
                                       <input placeholder="" id="text" type="text" name="silencer" value='{{$pistol->silencer}}'>
                                       <p>Safety trigger:</p>
                                       <input placeholder="" id="text" type="text" name="Safety_trigger" value='{{$pistol->safety trigger}}'>
                                       <p>Sight:</p>
                                       <input placeholder="" id="text" type="text" name="sight" value='{{$pistol->sight}}'>
                                       <p>Weight:</p>
                                       <input placeholder="" id="text" type="text" name="place" value='{{$pistol->weight}}'>
                                       <p>Power:</p>
                                       <input placeholder="" id="place" type="text" name="power" value='{{$pistol->power}}'>
                                       <p>Price range:</p>
                                       <input placeholder="" id="place" type="text" name="price_range" value='{{$pistol->price range}}'>
                                       <p>Description:</p>
                                       <input placeholder="" id="text" type="text" name="description" {{$pistol->description}}>
                                       <p>User rating:</p>
                                       <input placeholder="" id="text" type="text" name="user_rating" {{$pistol->user rating}}>
                                       <p>user comment:</p>
                                       <input placeholder="" id="text" type="text" name="user_comment" {{$pistol->user comment}}>


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
    