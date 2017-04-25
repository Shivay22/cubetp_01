<?php include 'menu.php'?>
<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="images/electronics1.jpg" alt="electronics" width="2000" height="1500">
        <div class="carousel-caption">
          <h3>Embedded Electronics</h3>
          <p>Training on Embedded Electronics</p>
        </div>
      </div>

      <div class="item">
        <img src="images/circuit1.jpg" alt="Chania" width="2000" height="1500">
        <div class="carousel-caption">
          <h3>PCB Design & Layout</h3>
          <p>Training on PCB Design & Layout</p>
        </div>
      </div>
    
      <div class="item">
        <img src="images/solder1.jpg" alt="Flower" width="2000" height="1500">
        <div class="carousel-caption">
          <h3>Projects</h3>
          <p>Hands on Training on various projects</p>
        </div>
      </div>

      <div class="item">
        <img src="images/code1.jpg" alt="Flower" width="2000" height="1500">
        <div class="carousel-caption">
          <h3>Software & Web Development</h3>
          <p>Various training on Software writing and Web development technologies.</p>
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