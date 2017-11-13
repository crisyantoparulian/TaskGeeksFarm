<!DOCTYPE html>
<html>
<head>
  <title></title>
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
</head>
<body>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="{{ asset('img/toga.png') }}" alt="Toga Waktu Lulus">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="{{ asset('img/bdg.jpg') }}" alt="Bandung Berisik">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="{{ asset('img/bmw.png') }}" alt="Bandung Berisik">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>
</html>