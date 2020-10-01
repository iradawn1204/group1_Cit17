
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

                                    <p>Fullname:</p>
                                    <input required placeholder="Firstname/Lastname" id="name" type="text" name="name">

                                      <p>Password:</p>
                                    <input required placeholder="Passwored" id="password" type="password" name="password">
                                     
                                     <p>Birthday:</p>
                                    <input required placeholder="month/day/year eg: 12/04/1999" id="birthdate" type="text" name="birthdate">
                                     
                                      <p>Place:</p>
                                       <input required placeholder="country/provinve/city" id="place" type="text" name="place">

                                     <input type="submit" value="submit" name="action">

                                     

                     
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
    