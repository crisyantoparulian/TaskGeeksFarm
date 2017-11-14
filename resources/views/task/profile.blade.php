<!DOCTYPE html>
<html lang="en">
<head>
  <title>Task</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Portfolio</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="{{url('task1')}}">Home</a></li>
        <li class="active"><a href="{{url('profile')}}">Profile</a></li>
        <li><a href="{{url('contact')}}">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <table>
      <tr>
        <td width="200px" height="200px">
          <h1>Crisyanto P</h1>
      <img src="{{ asset('img/ronaldo.jpg') }}" class="img-circle" alt="Bdg" width="200px" height="200px">
        </td>
    
         </table>>
    </div>
    <div class="col-sm-4">
      <table class="table table-striped">
    <tbody>
      <tr>
      </br>
       </br>
        </br>
         </br>
        <td>Nama</td>
        <td>Crisyanto P</td> 
      </tr>
      <tr>
        <td>Tempat,Tanggal Lahir</td>
        <td>Bandung,11 Juni 1995</td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>Laki-laki</td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>Jl.Bandung</td>
      </tr>


    </tbody>
  </table>
    </div>
  </div>
</div>

<br>

<!-- <footer class="container-fluid text-center">
  <p>@CrisyantoParulian</p>
</footer>
 --><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>