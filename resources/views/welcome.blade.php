<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>E-Commerce</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- external csas  -->
        {{-- <link rel="stylesheet" href="style.css"> --}}
        <link href="{{asset('css/welcome/home.css')}}" rel="stylesheet" />

    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        {{-- <img src="images/logo.png" alt="" class="d-inline-block align-text-top"></a> --}}
                        <img src="{{asset('images/logo.png')}}" alt="" class="d-inline-block align-text-top"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#shoe">Shoes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#backpack">Backpack</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#subscribe">Subscribe</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav  ">
                            <li class="nav-item ">
                                <a class="nav-link active d-flex justify-content-end"
                                    href="{{route('login')}}">Login</a>

                            </li>

                        </ul>
                    </div>
                </div>
                </div>
            </nav>

            <!-- image-slider  -->
            <section class="container ">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner ">
                        <div class="carousel-item  active">
                            <div class="row panda-bg-background p-5 d-flex align-items-center">
                                <div class="col-lg-7">
                                    <h1>Cool Dude Headphone</h1>
                                    <p>This is the best headphone in the world for people who just want to
                                        waste time in front of funky world. </p>
                                    <h1>$420</h1>
                                    <button class="panda-btn-buynow">Buy Now </button>
                                </div>
                                <div class="col-lg-5">
                                    <img src="images/banner-images/headphone.png" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item  ">
                            <div class="row panda-bg-background p-5 d-flex align-items-center">
                                <div class="col-lg-7">
                                    <h1>Mega LCD TV For Sports </h1>
                                    <p>This is the best tv in the world for people who just want to waste time
                                        in front of tv. </p>
                                    <h1>$1200</h1>
                                    <button class="panda-btn-buynow">Buy Now </button>
                                </div>
                                <div class="col-lg-5">
                                    <img src="images/banner-images/tv.png" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="row  p-5 panda-bg-background d-flex align-items-center">
                                <div class="col-lg-7">
                                    <h1>X-Box for your living room </h1>
                                    <p>This is the best x-box in the world for people who just want to waste
                                        time in front of fake sports.</p>
                                    <h1>$600</h1>
                                    <button class="panda-btn-buynow">Buy Now </button>
                                </div>
                                <div class="col-lg-5">
                                    <img src="images/banner-images/xbox.png" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>


                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </section>

        </header>
        <main>
            <!-- catagories  -->
            <section class="container my-5 categories">

                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="p-3 border bg-warning d-flex align-items-center justify-content-between rounded-3 ">
                            <h1 class="text-white ">Watch</h1>
                            <img src="images/categories/watch.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-6 col-12">
                        <div class="p-3 border bg-success d-flex align-items-center justify-content-between rounded-3 ">
                            <h1 class="text-white">Bag</h1>
                            <img src="images/categories/bag.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-6 col-12">
                        <div class="p-3 border bg-primary d-flex align-items-center justify-content-between rounded-3 ">
                            <h1 class="text-white">Shoes</h1>
                            <img src="images/categories/shoes.png" alt="">
                        </div>
                    </div>



                </div>

            </section>

            <!-- shoes card  -->
            <section class="container" id="shoe">
                <h2>Shoes</h2>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    <div class="col ">
                        <div class="card shadow-lg border-0 h-100">
                            <img src="images/shoes/shoe-1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Supply 350</h5>
                                <p class="card-text">This is a longer card with supporting text below as a
                                    natural lead-in to additional. </p>
                            </div>
                            <div class="m-3">
                                <button class="panda-btn-buynow">Buy Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-lg  h-100 border-0">
                            <img src="images/shoes/shoe-2.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Nike 360</h5>
                                <p class="card-text">This is a longer card with supporting text below as a
                                    natural lead-in to additional.</p>
                            </div>
                            <div class="m-3">
                                <button class="panda-btn-buynow">Buy Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card  shadow-lg  border-0 h-100">
                            <img src="images/shoes/shoe-3.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Red Airmax</h5>
                                <p class="card-text">This is a longer card with supporting text below as a
                                    natural lead-in to additional.</p>
                            </div>
                            <div class="m-3">
                                <button class="panda-btn-buynow">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Backpack  -->
            <section class="container my-5" id="backpack">
                <h2>Backpack</h2>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    <div class="col ">
                        <div class="card shadow-lg border-0 h-100">
                            <img src="images/bags/bag-1.png " class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Red Laltu Bag</h5>
                                <p class="card-text">This is a wider card with supporting text below as a
                                    natural lead-in to additional content. This content is a little bit longer.
                                </p>
                            </div>
                            <div class="m-3">
                                <button class="panda-btn-buynow">Buy Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-lg  h-100 border-0">
                            <img src="images/bags/bag-2.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Blue Niltu Bag</h5>
                                <p class="card-text">This card has supporting text below as a natural lead-in to
                                    additional content.</p>
                            </div>
                            <div class="m-3">
                                <button class="panda-btn-buynow">Buy Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card  shadow-lg  border-0 h-100">
                            <img src="images/bags/bag-3.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Black Kaltu Bag</h5>
                                <p class="card-text">This is a wider card with supporting text below as a
                                    natural lead-in to additional content. This card has even longer content
                                    than the first to show that equal height action.</p>
                            </div>
                            <div class="m-3">
                                <button class="panda-btn-buynow">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Subscribe  -->
            <section style="height: 300px;" id="subscribe"
                class=" panda-bg-background container d-flex justify-content-center  align-items-center rounded-3">
                <div>
                    <h1>LET'S STAY IN TOUCH</h1>
                    <p>Get updates on sales, specials and more
                    </p>
                    <input type="text" class="form-control" placeholder="You Email">
                    <br>
                    <button class="panda-btn-buynow">Submit</button>
                </div>
            </section>

        </main>
        <footer class="mt-5 text-center">
            <p><small>&copy 2025. Panda Commerce. All rights reserved. Sofia, Bulgaria.</small></p>
        </footer>


        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </body>

</html>