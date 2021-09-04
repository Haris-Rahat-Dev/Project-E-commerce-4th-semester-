<?php
include 'header.php';
?>
<section id="">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./imgs/sliderimg1.jpg" class="d-block w-100 h-60"alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Processors</h5>
                      <p>High Performance CPUs</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="./imgs/sliderimg2.jpg" class="d-block w-100 h-75"  alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Graphic Cards </h5>
                      <p>Best, Up to date GPUs with latest tech!</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="./imgs/sliderimg3.jpg" class="d-block w-100 h-75"  alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>4K Monitors</h5>
                      <p>High Resolution Monitors with high refresh rate!</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon " aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        <div class="flexrow2">
            <div>
                <a href="store.php" ><div class="hover"><h6 class="h6">Graphic Cards</h6></div>
                <img src="imgs/small1.jpg" height="226" width="340" /></a>
            </div>
            <div class="center-img">
                <a href="store.php"><div class="hover"><h6 class="h6">PC Parts</h6></div>
                <img src="imgs/small2.jpg" height="226" width="340" /></a>
            </div>
            <div>
                <a href="store.php"><div class="hover"><h6 Class="h6">Gaming PCs</h6></div>
                <img src="imgs/small3.jpg" height="226" width="340" /></a>
            </div>
        </div>
    </section>
    <section id="aboutus">
        <div class="stock">
            <div style="width:40%">
                <h2 style="font-family:Roboto">Stock</h2>
                <h4 style="word-wrap:break-word; ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis expedita, quibusdam assumenda earum vel officiis voluptatem nemo architecto asperiores minima!</h4>
            </div>
            <div class="stock-img"><img src="imgs/stock.jpg" width="460px" height="360px"></div>
        </div>
        <div class="transform">
            <div class="transform-img"><img src="./imgs/transform.jpg" width="460px" height="360px" alt=""></div>
            <div style="width:40%">
                <h2 style="font-family:Roboto">Transform</h2>
                <h4 style="word-wrap:break-word; ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur veritatis sapiente possimus quidem natus ad magnam dolores perferendis qui totam!</h4>
            </div>
        </div>
    </section>
    <section id="" class="p-0 m-0">
        <h3 class="slider-heading font-family:Roboto">Gaming at your Disposal!</h3>
        <h6 class="h6 text-center text-danger"><sub>Sponsored By Esports</sub><sup><small>TM</small></sup></h6>
        <video autoplay controls loop width="100%">
            <source src="./eSports.com%20Tournaments%20Trailer.mp4" type="video/mp4">
        </video>
    </section>
  <?php
/*  include 'login/database.php';
  $db=new Database();*/
include 'footer.php';
?>


