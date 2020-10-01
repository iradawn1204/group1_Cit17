
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
                    <center><h1>Edit User</h1></center>
                    
                       <form action="/users/{{$user->id}}" method='POST'> 
                       @method('PUT')  
                       @csrf     
                      
                        <div class="row">
                           <form class="col s12">
                             <div class="row">
                                  <div class="input-field col s6">
                                    <p>Fullname:</p>
                                    <input placeholder="Firstname/Lastname" id="name" type="text" name="name" value='{{$user->name}}'>

                                      <p>Password:</p>
                                    <input required placeholder="Passwored" id="password" type="password" name="password">

                                     <p>Birthday:</p>
                                    <input placeholder="month/day/year eg: 12/04/1999" id="birthdate" type="text" name="birthdate" value='{{$user->birthdate}}'>

                                      <p>Place:</p>
                                       <input placeholder="country/provinve/city" id="place" type="text" name="place" value='{{$user->place}}'>
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
    