<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
</head>
  <body>

    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="https://www.tiket.com/homepage-v4/_next/image?url=https%3A%2F%2Fs-light.tiket.photos%2Ft%2F01E25EBZS3W0FY9GTG6C42E1SE%2Foriginal%2Flogo%2F2020%2F09%2F01%2F7379dfd8-c9cc-4fb9-896f-6374a766cefc-1598927204969-fab786a46eee63c306f89837093520a4.png&w=384&q=75" width="150px" height="30px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active mx-3 text-white" aria-current="page" href="#home">Home</a>
                    <a class="nav-link mx-3 text-white" href="#about">About</a>
                    <a class="nav-link mx-3 text-white" href="#room">Rooms</a>
                    <a class="nav-link mx-3 text-white" href="#hotel">Hotel Facility</a>
                </div>
            </div>
        </div>
    </nav>

    <section id="home">
      <div class="container">
        <div class="latar">
          <h5 class="fw-bold">LUXURY LIVING.</h5>
          <h1 class="py-2 fw-bold text-uppercase">Discover a Brand <br> Hotel Hebat</h1>
          <a class="btn btn-primary fw-bold my-5 py-3 px-5" href="">BOOKING SEKARANG</a>
      </div>
      </div>
    </section>


    <section id="about">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        </div>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="./about5.jpg" class="d-block w-100">
                          </div>
                          <div class="carousel-item">
                            <img src="./about7.jpg" class="d-block w-100">
                          </div>
                          <div class="carousel-item">
                            <img src="./about8.jpg" class="d-block w-100">
                          </div>
                          <div class="carousel-item">
                            <img src="./about6.jpg" class="d-block w-100">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
                <div class="col-md-8 px-5">
                    <h5 class="fw-bold my-3"><span style="color:#FEA116">ABOUT US</span></h5>
                    <h1 class="fw-bold my-3">WELCOME TO <span style="color:#FEA116">HOTEL</span></h1>
                    <h1 class="fw-bold my-3"><span style="color:#FEA116">HEBAT</span></h1>
                    <p class="my-5">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet.</p>
                    <a class="btn btn-primary py-3 px-5" href="">Explore More</a>
                </div>
            </div>
        </div>
    </section>




    <section id="room">
        <div class="container my-5">
            <h5 class="fw-bold my-2 text-center"><span style="color:#FEA116">OUR ROOMS</span></h5>
            <h1 class="fw-bold text-center my-3">EXPLORE OUR <span style="color:#FEA116">ROOMS</span></h1>


            <div class="row g-4">
              <div class="col-lg-4 col-md-6 my-5">
                <div class="room-item shadow rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid" src="./room-1.jpg" alt="">
                    </div>
                    <div class="p-4 mt-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h5 class="mb-0 fw-bold">Indonesia <br>
                              Standard Double</h5>
                            <div class="rate">
                                <small class="fa fa-star"></small>
                                <small class="fa fa-star"></small>
                                <small class="fa fa-star"></small>
                                <small class="fa fa-star"></small>
                                <small class="fa fa-star"></small>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <small class="border-end me-3 pe-3"><i class="fa fa-bed"></i></small>
                            <small class="border-end me-3 pe-3"><i class="fa fa-bath"></i></small>

                            <small class="border-end me-3 pe-3"><i class="fa fa-wifi"></i></small>

                        </div>
                        <p class="text-body mb-3">Di lengkapi dengan fasilitas AC, TV, Bath, Wifi.</p>
                        <div class="d-flex justify-content-between">
                            <a class="btn btn-sm btn-dark py-2 px-4" href="">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="col-lg-4 col-md-6 my-5">
              <div class="room-item shadow rounded overflow-hidden">
                  <div class="position-relative">
                      <img class="img-fluid" src="./room-2.jpg">
                  </div>
                  <div class="p-4 mt-2">
                      <div class="d-flex justify-content-between mb-3">
                          <h5 class="mb-0 fw-bold">Indonesia <br>
                            Suite Family
                            </h5>
                          <div class="rate">
                              <small class="fa fa-star"></small>
                              <small class="fa fa-star"></small>
                              <small class="fa fa-star"></small>
                              <small class="fa fa-star"></small>
                              <small class="fa fa-star"></small>
                          </div>
                      </div>
                      <div class="d-flex mb-3">
                          <small class="border-end me-3 pe-3"><i class="fa fa-bed"></i></small>
                          <small class="border-end me-3 pe-3"><i class="fa fa-bath"></i></small>

                          <small class="border-end me-3 pe-3"><i class="fa fa-wifi"></i></small>

                      </div>
                      <p class="text-body mb-3">Di lengkapi dengan fasilitas AC, TV, Bath, Wifi.</p>
                      <div class="d-flex justify-content-between">
                          <a class="btn btn-sm btn-dark py-2 px-4" href="">Book Now</a>
                      </div>
                  </div>
              </div>
          </div>
  
          <div class="col-lg-4 col-md-6 my-5">
            <div class="room-item shadow rounded overflow-hidden">
                <div class="position-relative">
                    <img class="img-fluid" src="./room-3.jpg" alt="">
                </div>
                <div class="p-4 mt-2">
                    <div class="d-flex justify-content-between mb-3">
                        <h5 class="mb-0 fw-bold">Indonesia <br>
                          Deluxe Double</h5>
                        <div class="rate">
                            <small class="fa fa-star"></small>
                            <small class="fa fa-star"></small>
                            <small class="fa fa-star"></small>
                            <small class="fa fa-star"></small>
                            <small class="fa fa-star"></small>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <small class="border-end me-3 pe-3"><i class="fa fa-bed"></i></small>
                        <small class="border-end me-3 pe-3"><i class="fa fa-bath"></i></small>

                       
                        <small class="border-end me-3 pe-3"><i class="fa fa-wifi"></i></small>

                    </div>
                    <p class="text-body mb-3">Di lengkapi dengan fasilitas AC, TV + Netflix, Bath, Wifi.</p>
                    <div class="d-flex justify-content-between">
                        <a class="btn btn-sm btn-dark py-2 px-4" href="">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
    </section>


    <section id="hotel">
      <div class="container my-5">
          <h5 class="fw-bold my-2 text-center"><span style="color:#FEA116">FACILITY HOTEL</span></h5>
          <h1 class="fw-bold text-center my-3">EXPLORE OUR <span style="color:#FEA116">HOTEL</span></h1>
          <div class="row g-4">
            <div class="col-lg-4 col-md-6 my-5">
              <div class="hotel-item shadow rounded overflow-hidden">
                  <div class="position-relative">
                      <img src="./resto.jfif" width="400px" height="300px">
                  </div>
                  <div class="p-4 mt-2">
                      <div class="d-flex justify-content-between mb-3">
                          <h5 class="mb-0 fw-bold">FOOD & RESTAURANT</h5>
                      </div>
                      <p class="text-body mb-3">Di lengkapi dengan restaurant</p>
                  </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 my-5">
              <div class="hotel-item shadow rounded overflow-hidden">
                  <div class="position-relative">
                      <img src="./spa.jfif" width="400px" height="300px">
                  </div>
                  <div class="p-4 mt-2">
                      <div class="d-flex justify-content-between mb-3">
                          <h5 class="mb-0 fw-bold">SPA & FITNESS</h5>
                      </div>
                      <p class="text-body mb-3">Di lengkapi dengan fasilitas olahraga</p>
                  </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 my-5">
              <div class="hotel-item shadow rounded overflow-hidden">
                  <div class="position-relative">
                      <img src="./renang.jfif" width="400px" height="300px">
                  </div>
                  <div class="p-4 mt-2">
                      <div class="d-flex justify-content-between mb-3">
                          <h5 class="mb-0 fw-bold">SPORT & GAMING</h5>
                      </div>
                      <p class="text-body mb-3">Di lengkapi dengan fasilitas kolom renang</p>
                  </div>
              </div>
            </div>
          </div>
      </div>
  </section>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>