
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
                    <center><h1>Log in to Go inside</h1></center>

                     <a href="/users/create">Sign Up</a>
                    
                       <form action="/login" method="POST">   
                      
                        @if ($errors->any())
                             <div class="alert alert-danger">
                               <ul>
                                  @foreach ($errors->all() as $error)
                                   <li>{{ $error }}</li>
                                  @endforeach
                               </ul>
                             </div>
                       @endif
                        @csrf     
                      
                        <div class="row">
                           <form class="col s12">
                             <div class="row">
                                  <div class="input-field col s6">
                                    <p>Fullname:</p>
                                    <input required placeholder="Firstname/Lastname" id="name" type="text" name="name">

                                     <p>Password:</p>
                                    <input required placeholder="Firstname/Lastname" id="password" type="password" name="password">
                                     
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
    