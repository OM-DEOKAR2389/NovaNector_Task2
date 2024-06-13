<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://kit.fontawesome.com/c82427e6c1.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    .home_h1{
      color: rgb(121, 0, 234);
     font-size: 70px;
     font-weight: bold;
     margin-top: 190px;
    }
    .img1{
      height: 500px;
      width: auto;
      margin-top:150px;
    }
    @media (max-width:775px)
   {
    .home_h1{
      margin-top:50px;
      font-size: 40px;
    }
   }
   .pname{
    color: rgb(121, 0, 234);
    margin-top: 15px;
    margin-bottom: -5px;
    font-weight: bold;
   }
   .flight_row{
    box-shadow: 0px 5px 5px 3px gray;
    border-radius: 50px;
   }
   .swiper {
            height:250px;
            width: 415px;
            border: 1px solid gray;
            margin-top: 40px;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: fill;
        }

        .autoplay-progress {
            position: absolute;
            right: 16px;
            bottom: 16px;
            z-index: 10;
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: black;
        }

        .autoplay-progress svg {
            --progress: 0;
            position: absolute;
            left: 0;
            top: 0px;
            z-index: 10;
            width: 100%;
            height: 100%;
            stroke-width: 4px;
            stroke: white;
            fill: none;
            stroke-dashoffset: calc(125.6 * (1 - var(--progress)));
            stroke-dasharray: 125.6;
            transform: rotate(-90deg);
        }

        .swiper-button-prev,
        .swiper-button-next {
            color: white;
            font-weight: 600;
        }

        .swiper-pagination .swiper-pagination-bullet {
            background-color: white;
        }

        .autoplay-progress circle {
            color: #fff;
            background-color: #fff;
        }

        span {
            color: white;
        }
   @media (max-width:935px)
   {
    .swiper{
           height:200px;
            width: 350px;
    }
   }
   .head_h2{
    margin-bottom: -25px;
    margin-top: 25px;
    color: rgb(121, 0, 234);
    font-weight: bold ;
   }
   .row_h1{
    color: #fff;
    font-size: 70px;
    font-weight: bold;
    background-color: rgb(121, 0, 234);
    
   }
   .s_row{
    background-color: rgb(249, 246, 246);
    height:auto;
   align-items: center;
    padding:  10px;
   }
    </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand fw-bold fs-3" href="#" style="color:rgb(121, 0, 234);"><i class="fa-solid fa-plane-up"></i> Atlatnis</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About us</a>
              </li>
      
              <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Contact</a>
              </li>
              <?php
              if($_SESSION["email"]=="omdeokar3106@gmail.com"){
                ?>
              
              <li>
               <a class="nav-link btn btn-outline-primary ms-2" href="admin.php" tabindex="-1" aria-disabled="true">Admin</a></p>
                 
              </li>
             <?php } ?>
            </ul>
              

            <?php
               if(isset($_SESSION["email"])){
                
              ?>
               <p class="d-flex me-2"><?php echo $_SESSION["email"]?>
               <a class="nav-link btn btn-outline-primary ms-2" href="logout.php" tabindex="-1" aria-disabled="true">logout</a></p>
               <?php
               }else{ ?>
               
                <a class="btn btn-outline-primary form-control me-4" href="login.php" style="width: 150px;">Login</a>

               <?php }
              ?>
              <!-- <a class="btn btn-outline-primary form-control me-4" href="login.php" style="width: 150px;">Login</a> -->

            
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    </div>
        <div class="row justify-content-center">
          <div class="col-md-11">
            <div class="row">
          <div class="col-md-6 text-center">
        <h1 class="fw-bold heading home_h1">Whenever You <br> Go, Let's Make <br> It Happen</h1>
          </div>
          <div class="col-md-6 text-center">
        <img src="img/homelogo.png" class="img-fluid ms-3 me-3 mt-5 img1">
        <div class="mb-5" style="border-radius:60px 0 0 60px; height:300px;width: auto; background-image:linear-gradient(rgb(121, 0, 234),rgb(184, 125, 240)); margin-top: -400px;"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center mt-5">
      <div class="col-md-12 col-6 ">
        <div class="row justify-content-center">
          <div class="col-md-8 flight_row">
           <div class="row">
            <div class="col-md-2 text-center">
              <p class="pname mt-0 mt-md-4">Flight</p>
            </div>
            <div class="col-md-2 text-center">
              <p class="pname">Origin </p><select name="choos city" id="" style="border: none;background: transparent;">
                <option value="">India</option>
                <option value="">USA</option>
                <option value="">China</option>
                <option value="">Yurop</option>
                <option value="">Japan</option>
                <option value="">Italy</option>
                <option value="">Russia</option>
                <option value="">Brazil</option>
              </select>
            </div>
            <div class="col-md-2 text-center">
              <p class="pname">Destination</p><select name="" id="" style="border: none;background: transparent;">
                <option value="">New york</option>
                <option value="">USA</option>
                <option value="">China</option>
                <option value="">Yurop</option>
                <option value="">Japan</option>
                <option value="">Italy</option>
                <option value="">Russia</option>
                <option value="">Brazil</option>
              </select>
            </div>
            <div class="col-md-2 text-center">
              <p class="pname">Departure </p><p><input type="date" style="border: none;"></p>
            </div>
            <div class="col-md-2 text-center">
              <p class="pname">Return</p><p><input type="date" style="border: none;"></p>
            </div>
            <div class="col-md-2 text-center">
              <p class="pname  mt-0 mt-md-4 mb-2" style="cursor: pointer;"><i class="fa-brands fa-searchengin fs-1"></i></p>
            </div>
           </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
 <div class="row mt-5">
  <div class="col col-md-12 text-start">
  <h1 class="fs-2" style="color:rgb(121, 0, 234); font-weight: bold;">Best Destination</h1>
</div>
</div>
    <div class="row mt-2 ">
      <div class="col col-md-4 ">
      <h3 class="text-center  head_h2">India</h3>
          <div class="swiper mySwiper">
              <div class="swiper-wrapper">
                  <div class="swiper-slide">
                      <img src="img/ind2.jpg" />
                  </div>
                  <div class="swiper-slide">
                      <img src="img/ind3.jpg" />
                  </div>
                  <div class="swiper-slide">
                      <img src="img/ind4.jpg" />
                  </div>
                  <div class="swiper-slide">
                      <img src="img/ind5.jpg" />
                  </div>
                  <div class="swiper-slide">
                      <img src="img/ind4.jpg" />
                  </div>
                  <div class="swiper-slide">
                      <img src="img/ind2.jpg" />
                  </div>
                  <div class="swiper-slide">
                      <img src="img/ind3.jpg" />
                  </div>
                  <div class="swiper-slide">
                      <img src="img/ind4.jpg" />
                  </div>
                  <div class="swiper-slide">
                      <img src="img/ind5.jpg" />
                  </div>
              </div>
              <!-- <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div> -->
              <div class="swiper-pagination"></div>
              <div class="autoplay-progress d-none">
                  <svg viewBox="0 0 48 48 d-none">
                      <circle cx="24" cy="24" r="20" style="color: #fff;"></circle>
                  </svg>
                  <span class="d-none"></span>
              </div>
      </div>
      </div>
      <div class="col col-md-">
      <h3 class="text-center head_h2">Australia</h3>
        <div class="swiper mySwiper ">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="img/aus1.jpg" />
                </div>
                <div class="swiper-slide">
                    <img src="img/aus2.jpg" />
                </div>
                <div class="swiper-slide">
                    <img src="img/aus3.jpg" />
                </div>
                <div class="swiper-slide">
                    <img src="img/c3.jpg" />
                </div>
                <div class="swiper-slide">
                    <img src="img/c4.jpg" />
                </div>
                <div class="swiper-slide">
                    <img src="img/aus3.jpg" />
                </div>
                <div class="swiper-slide">
                    <img src="img/aus2.jpg" />
                </div>
                <div class="swiper-slide">
                    <img src="img/aus1.jpg" />
                </div>
                <div class="swiper-slide">
                    <img src="img/c4.jpg" />
                </div>
            </div>
            <!-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> -->
            <div class="swiper-pagination"></div>
            <div class="autoplay-progress d-none">
                <svg viewBox="0 0 48 48 d-none">
                    <circle cx="24" cy="24" r="20" style="color: #fff;"></circle>
                </svg>
                <span class="d-none"></span>
            </div>
    </div>
    </div>
    <div class="col col-md-4">
      <h3 class="text-center  head_h2">Malysia</h3>
      <div class="swiper mySwiper ">
          <div class="swiper-wrapper">
              <div class="swiper-slide">
                  <img src="img/mal1.jpg" />
              </div>
              <div class="swiper-slide">
                  <img src="img/mal2.jpg" />
              </div>
              <div class="swiper-slide">
                  <img src="img/mal3.jpg" />
              </div>
              <div class="swiper-slide">
                  <img src="img/maly3.jpg" />
              </div>
              <div class="swiper-slide">
                  <img src="img/maly2.jpg" />
              </div>
              <div class="swiper-slide">
                  <img src="img/mal3.jpg" />
              </div>
              <div class="swiper-slide">
                  <img src="img/mal1.jpg" />
              </div>
              <div class="swiper-slide">
                  <img src="img/mal3.jpg" />
              </div>
              <div class="swiper-slide">
                  <img src="img/maly2.jpg" />
              </div>
          </div>
          <!-- <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div> -->
          <div class="swiper-pagination"></div>
          <div class="autoplay-progress d-none">
              <svg viewBox="0 0 48 48 d-none">
                  <circle cx="24" cy="24" r="20" style="color: #fff;"></circle>
              </svg>
              <span class="d-none"></span>
          </div>
  </div>
  </div>
  </div>
  </div>

  <div class="row mt-5 text-center s_row">
    <div class="col-md-4 ">
      <i class="fa-solid fa-envelope  fs-3"style="color:rgb(121, 0, 234);"></i>
      <h3 style="color:rgb(121, 0, 234); font-weight: 700">Support</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    </div>
    <div class="col-md-4">
      <i class="fa-solid fa-lock  fs-3"style="color:rgb(121, 0, 234);"></i>
      <h3 style="color:rgb(121, 0, 234); font-weight: 700">Security</h3>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
    </div>
    <div class="col-md-4">
      <i class="fa-solid fa-thumbs-up fs-3"style="color:rgb(121, 0, 234);"></i>
      <h3 style="color:rgb(121, 0, 234); font-weight: 700">Quality</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    </div>
  </div>

 
    <div class="container">
    <div class="row mt-5">
      <div class="col col-md-12 text-start">
      <h1 class="mb-5 fs-2" style="color:rgb(121, 0, 234); font-weight: bold;">Organized Trip</h1>
    </div>
    </div>
    
  <div class="row">
    <div class="col-md-3 col-sm-6 mb-5">
      <div class="card">
        <img src="img/dubai2.jpg"style="height:200px;" class="card-img-top">
        <div class="card-body">
          <h3 class="card-title">Dubai</h3>
          <p class="card-text">Lorem ipsum dolor sit.</p>
          <a href="" class="btn btn-primary me-5"onclick="clk()">>BOOK NOW</a>
          <i class="fa-sharp fa-solid fa-star"></i>
          <i class="fa-sharp fa-solid fa-star"></i>
          <i class="fa-sharp fa-solid fa-star"></i>
          <i class="fa-sharp fa-solid fa-star"></i>
          <i class="fa-sharp fa-regular fa-star-half-stroke"></i>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 mb-5">
      <div class="card">
        <img src="img/itl2.jpg"style="height:200px;" class="card-img-top">
        <div class="card-body">
          <h3 class="card-title">Italy</h3>
          <p class="card-text">Lorem ipsum dolor sit.</p>
          <a href="" class="btn btn-primary me-5" onclick="clk()">BOOK NOW</a>
          <i class="fa-sharp fa-solid fa-star"></i>
          <i class="fa-sharp fa-solid fa-star"></i>
          <i class="fa-sharp fa-solid fa-star"></i>
          <i class="fa-sharp fa-regular fa-star-half-stroke"></i>
          <i class="fa-sharp fa-regular fa-star-half-stroke"></i>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 mb-5">
      <div class="card">
        <img src="img/bzil1.jpg"style="height:200px;" class="card-img-top">
        <div class="card-body">
          <h3 class="card-title">Brazil</h3>
          <p class="card-text">Lorem ipsum dolor sit.</p>
          <a href="" class="btn btn-primary me-5"onclick="clk()">BOOK NOW</a>
          <i class="fa-sharp fa-solid fa-star"></i>
          <i class="fa-sharp fa-solid fa-star"></i>
          <i class="fa-sharp fa-solid fa-star"></i>
          <i class="fa-sharp fa-regular fa-star-half-stroke"></i>
          <i class="fa-sharp fa-regular fa-star-half-stroke"></i>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 mb-5">
      <div class="card">
        <img src="img/swe2.jpg "style="height:200px;" class="card-img-top">
        <div class="card-body">
          <h3 class="card-title">Swetzerland</h3>
          <p class="card-text">Lorem ipsum dolor sit.</p>
          <?php
               if(isset($_SESSION["email"])){
              ?>
                
              <a href="book.php" class="btn btn-primary me-5">BOOK NOW</a>
               <?php
               }else{ ?>
               
               <a href="" class="btn btn-primary me-5" onclick="clk()">BOOK NOW</a>
               <?php }
              ?>
         
          <i class="fa-sharp fa-solid fa-star"></i>
          <i class="fa-sharp fa-solid fa-star"></i>
          <i class="fa-sharp fa-solid fa-star"></i>
          <i class="fa-sharp fa-solid fa-star"></i>
          <i class="fa-sharp fa-regular fa-star-half-stroke"></i>

        </div>
      </div>
    </div>
  </div>
  </div>
<div class="row row_h1 text-center justify-content-center">
  <h1 class="mt-5 fw-bold">Discover Your Dream <br>Destinations Today!</h1>
  <div class="col">
<button class="btn btn-dark fw-bold">Discover the world</button>
  </div>
  <div class="row bg-dark mb-5">
    <div class="col-md-4 col-sm-12 fs-5 fw-light">
      <h2 class="fw-bold">Atlatnis</h3><br>
      <p class="text-secondary">Call us</p>
      <p>+919234567890</p><br>
      <p class="text-secondary">Email</p>
      <p>atlantis12@gmail.com</p><br>
      <p class="text-secondary">Follow us</p>
      <p><i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-youtube"></i>
        <i class="fa-brands fa-facebook"></i>
      </p>
    </div>
    <div class="col-md-4 col-sm-12 fs-5 fw-light">
      <div class="row mt-5 justify-content-center">
      <div class="col">
        <br><br>
      <h4 class="fw-bold mb-3 text-secondary">links</h4>
      <p class="text-secondary">Home</p>
      <p class="text-secondary">Flights</p>
      <p class="text-secondary">Hotels</p>
      <p class="text-secondary">Tranfers</p>
    </div>
    <div class="col mt-5 text-secondary">
      <br><br>
      <p class="text-secondary">Activitis</p>
      <p class="text-secondary">Organized Trip</p>
      <p class="text-secondary">Booking</p>
      <p class="text-secondary">Request</p>
    </div>
    </div>
  </div>
    <div class="col-md-4 col-sm-12 fs-5 fw-light">
      <div class="row mt-5 justify-content-center">
        <div class="col">
          <br><br>
        <h4 class="fw-bold mb-3 text-secondary">Popular Destination</h4>
        <p class="text-secondary">Emirates,United Arabian</p>
        <p class="text-secondary">New York City,USA</p>
        <p class="text-secondary">One Bridge,Belgium</p>
        <p class="text-secondary">Golden Frames Dubai</p>
      </div>
      <div class="col mt-5 text-secondary">
        <br><br>
        <p>Emirates,United Arabian</p>
        <p>New York City,USA</p>
        <p>One Bridge,Belgium</p>
        <p>Golden Frames Dubai</p>
      </div>
      </div>
    </div>
  </div>
  <p class="text-secondary fs-5 fw-lighter text-end" style="margin-top: -50px;">Copyright @ 2024 StarDust All rights reserved</p>
</div>


</div>



  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        const progressCircle = document.querySelector(".autoplay-progress svg");
        const progressContent = document.querySelector(".autoplay-progress span");
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 1500,
                disableOnInteraction: false
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },
            on: {
                autoplayTimeLeft(s, time, progress) {
                    progressCircle.style.setProperty("--progress", 1 - progress);
                    progressContent.textContent = `${Math.ceil(time / 1000)}s`;
                }
            }
        });

     function clk(){
      alert("Please Login First");
      };

        
    </script>
</body>
</html>