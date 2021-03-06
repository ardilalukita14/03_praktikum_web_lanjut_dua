<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Example of Bootstrap 3 Carousel</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
.carousel{
    background: #2f4357;
    margin-top: 20px;
}
.carousel .item{
    min-height: 280px; /* Prevent carousel from being distorted if for some reason image doesn't load */
}
.carousel .item img{
    margin: 0 auto; /* Align slide image horizontally center */
    max-height: 280px;
    width:100%;
}
.bs-example{
    margin: 20px;
}
</style>
</head>
<body>
<div class="bs-example">
<div class='col-md-13'>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>   
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="img/about/img1.jpg" alt="First Slide">
                  <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="img/about/img2.jpg" alt="Second Slide">
                <div class="carousel-caption">
                </div>
            </div>
              <div class="item">
                <img src="img/about/img3.jpg" alt="Third Slide">
                <div class="carousel-caption">
                </div>
            </div>
              <div class="item">
                <img src="img/about/img4.jpg" alt="Fourth Slide">
                <div class="carousel-caption">
                </div>
                </div>
            <div class="item">
                <img src="img/about/img5.jpg" alt="Fifth Slide">
                <div class="carousel-caption">
                </div>
            
            </div>
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>
</div>
</body></html>  