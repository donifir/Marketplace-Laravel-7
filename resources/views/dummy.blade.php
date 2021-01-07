<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/slider.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
</head>
<body>
    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('https://source.unsplash.com/LAaSoL0LrYs/1920x1080')">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="display-4">First Slide</h2>
                <p class="lead">This is a description for the first slide.</p>
            </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('https://source.unsplash.com/bF2vsubyHcQ/1920x1080')">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="display-4">Second Slide</h2>
                <p class="lead">This is a description for the second slide.</p>
            </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="display-4">Third Slide</h2>
                <p class="lead">This is a description for the third slide.</p>
            </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>

    <!-- Page Content -->
    <section class="py-5">
        <div class="container">
        <h1 class="display-4">Ayam Goreng Nelongso</h1>
        <p class="lead">The background images for the slider are set directly in the HTML using inline CSS. The images in this snippet are from <a href="https://unsplash.com">Unsplash</a>, taken by <a href="https://unsplash.com/@joannakosinska">Joanna Kosinska</a>!</p>
        </div>
    </section>


</body>
</html>
