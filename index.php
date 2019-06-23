<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="bootstrap/jquery-3.4.1.min.js"></script>
      <script src="bootstrap/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Fira+Sans">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body style="-moz-box-shadow: 0px 0px 20px 5px rgba(0, 0, 0, 0.2);
      -ms-box-shadow: 0px 0px 20px 5px rgba(0, 0, 0, 0.2);
      -webkit-box-shadow: 0px 0px 20px 5px rgba(0, 0, 0, 0.2);
      -o-box-shadow: 0px 0px 20px 5px rgba(0, 0, 0, 0.2);
      box-shadow: 0px 0px 20px 5px rgba(0, 0, 0, 0.2);">

<body>
<div class="advertiser">
    <div class="col-sm-12">
      <img src="./Images/header.jpg" style="width:100%" alt="Image">
    </div>
</div>
<div class="topside navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
    </div>
  </div>
</div>
<div class="bottomside navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
        <li class="mainitem"><a href="#">Мэдээ</a></li>
        <li class="mainitem"><a href="#">Нийтлэл </a></li>
        <li class="mainitem"><a href="#">Үзэл бодол</a></li>
        <li class="mainitem"><a href="#">Зураг</a></li>
        <li class="mainitem"><a href="#">Бичлэг</a></li>
        <li class="dropdown mainitem">
          <a class="dropdown-toggle" href="#"><span class="glyphicon glyphicon-menu-down"></span>&nbspHeadings</a>
          <ul class="dropdown-menu">
              <li class="menuitem-1"><a href="#"><span class="glyphicon glyphicon-briefcase"></span> Улс төр</a></li>
              <li class="menuitem-2"><a href="#">Нийгэм</a></li>
              <li class="menuitem-3"><a href="#">Загвар</a></li>
              <li class="menuitem-4" style="border:none;"><a href="#">Интернет</a></li>
              <li class="menuitem-5"><a href="#">Эдийн засаг</a></li>
              <li class="menuitem-6"><a href="#">Хэрэг тохиолдол</a></li>
              <li class="menuitem-7"><a href="#">Авто машин</a></li>
              <li class="menuitem-8" style="border:none;"><a href="#">Аялал</a></li>
              <li class="menuitem-9"><a href="#">Дэлхий нийт </a></li>
              <li class="menuitem-10"><a href="#">Арми, Цэрэг</a></li>
              <li class="menuitem-11"><a href="#">Шинжлэх ухаан</a></li>
              <li class="menuitem-12" style="border:none;"><a href="#">Үл Хөдлөх</a></li>
              <li class="menuitem-13"><a href="#">Улс</a></li>
              <li class="menuitem-14"><a href="#">Соёл урлаг</a></li>
              <li class="menuitem-15"><a href="#">Спорт</a></li>
              <li class="menuitem-16" style="border:none;"><a href="#">Онцгой төсөл</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</div>
<div class="container">
<div class="row">
  <div class="col-sm-8">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="https://placehold.it/800x400?text=IMAGE" alt="Image">
          <div class="carousel-caption">
            <h3>Sell $</h3>
            <p>Money Money.</p>
          </div>      
        </div>

        <div class="item">
          <img src="https://placehold.it/800x400?text=Another Image Maybe" alt="Image">
          <div class="carousel-caption">
            <h3>More Sell $</h3>
            <p>Lorem ipsum...</p>
          </div>      
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="well">
      <p>Some text..</p>
    </div>
    <div class="well">
       <p>Upcoming Events..</p>
    </div>
    <div class="well">
       <p>Visit Our Blog</p>
    </div>
  </div>
</div>
<hr>
</div>

<div class="container text-center">    
  <h3>What We Do</h3>
  <br>
  <div class="row">
    <div class="col-sm-3">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Current Project</p>
    </div>
    <div class="col-sm-3"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Project 2</p>    
    </div>
    <div class="col-sm-3">
      <div class="well">
       <p>Some text..</p>
      </div>
      <div class="well">
       <p>Some text..</p>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="well">
       <p>Some text..</p>
      </div>
      <div class="well">
       <p>Some text..</p>
      </div>
    </div>  
  </div>
  <hr>
</div>

<div class="container text-center">    
  <h3>Our Partners</h3>
  <br>
  <div class="row">
    <div class="col-sm-2">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Partner 1</p>
    </div>
    <div class="col-sm-2"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Partner 2</p>    
    </div>
    <div class="col-sm-2"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Partner 3</p>
    </div>
    <div class="col-sm-2"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Partner 4</p>
    </div> 
    <div class="col-sm-2"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Partner 5</p>
    </div>     
    <div class="col-sm-2"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Partner 6</p>
    </div> 
  </div>
</div><br>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
