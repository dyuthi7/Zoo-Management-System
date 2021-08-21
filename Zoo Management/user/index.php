<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,600,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">


    <title>User login</title>
    <style type = "text/css">
    body{
        /* background-image: url(https://images.unsplash.com/photo-1565416593187-36f12e173f74?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80); */
        font-family: 'Abril Fatface', cursive;
        background-color: #eec0c6;
background-image: linear-gradient(315deg, #eec0c6 0%, #7ee8fa 74%);

        /* background-repeat: no-repeat; */
        /* background-size: cover; */
        }
    h1{
      font-family: 'Abril Fatface', cursive;
      font-size: 2rem;
      color: black;
      text-align: center;
      /* padding-right: 20px; */
    }

    h3{
      font-family: "Work Sans", sans-serif;
      font-weight: 600;
      font-size: 3em;
      width: 10em;
    }
    .buttons{
      padding-left: 480px;
    }
    .logout{
      padding-left: 45%;
    }
    .button {
    	border: 3px solid #blue;
    	border-radius: 40px;
    	color: blue;
    	background-color: white;
    	padding: 10px 25px;
    	margin: 0 10px;
    	text-align: center;
    	text-decoration: none;
    	font-weight: bold;
    	display: inline-block;
    	font-size: 16px;
    	cursor: pointer;
    	transition: all 0.3s;
    }
    .carousel .carousel-item {
      height: 600px;
    }

    .carousel-item img {
        position: absolute;
        object-fit:cover;
        top: 0;
        left: 0;
        min-height: 600px;
    }
    p{
      font-size:40px;
      color: black;
    }
    .containers{
      background-color: #d9e4f5;
background-image: linear-gradient(315deg, #d9e4f5 0%, #f5e3e6 74%);
      font-size: 500px;
      padding: 10% 10% 10%;
      text-align: center;

    }
    </style>
  </head>
  <body>
      <!-- <h1> Welcome to Zoo </h1> -->
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.unsplash.com/photo-1519659528534-7fd733a832a0?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=926&q=80" class="d-block w-100 h-50" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Visit to explore</h5>
        <p>Our goal is enriched environment for the animals, quality of animal exhibits, conservation education and sustainable management practices.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1547471080-19acba333038?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1050&q=80" class="d-block w-100 h-50" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h4>Make a bunch of memories</h4>
        <p>It's a wild world out there. Have an open mind, so you don't miss out any.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1499220685177-750a1ea1e369?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1048&q=80" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h4>Cherish them for a lifetime</h4>
        <p>Escape the rush in cities, to rediscover the roots of our existance. </p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>
          <br>
          <br>
          <div class="buttons">
          <div class="w3-row-padding">
            <div class="w3-col l2">
              <a style="text-decoration: none;" href="all-slot.php">
                <div class="w3-card w3-text-black w3-white w3-center w3-padding-32">
                  <img src="https://www.flaticon.com/svg/static/icons/svg/141/141796.svg"  width="50">
                  <h2>View Slot</h2>
                </div>
              </a>
            </div>
            <div class="w3-col l2">
              <a style="text-decoration: none;" href="book.php">
                <div class="w3-card w3-text-black w3-white w3-center w3-padding-32">
                  <img src="https://www.flaticon.com/svg/static/icons/svg/1970/1970580.svg"  width="60">
                  <h2>Book</h2>
                </div>
              </a>
            </div>
            <div class="w3-col l2">
              <a style="text-decoration: none;" href="my-booking.php">
                <div class="w3-card w3-text-black w3-white w3-center w3-padding-32">
                  <img src="https://www.flaticon.com/svg/static/icons/svg/1876/1876832.svg"  width="40">
                  <h2>My Booking</h2>
                </div>
              </a>
            </div>
          </div>
          <br>
          <br>
          <!-- <div class="logout">
              <form action="logout.php">
              <button type="submit" class="button btn btn-primary">Sign Out</button></form>
          </div> -->



      </div>
    </section>



    <section class="container-fluid px-0">
        <div class="row align-items-center content">
            <div class="col-md-6 order-2 order-md-1">
                <img src="https://images.unsplash.com/photo-1521651201144-634f700b36ef?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1050&q=80" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 text-center order-1 order-md-2">
                <div class="row justify-content-center">
                    <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                        <h1>Welcome</h1>
                        <img src="imgs/lolli_icon.png" alt="" class="d-none d-lg-inline">
                        <p class="lead">The Zoo is a place for animals to study the behavior of human beings. This Place Is A Zoo! Watch out zoo, here we come!  </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center content">
            <div class="col-md-6 text-center">
                <div class="row justify-content-center">
                    <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                        <h1>Look around you</h1>
                        <img src="imgs/lolli_icon.png" alt="" class="d-none d-lg-inline">
                        <p class="lead">Shoot me with a camera, don't shoot me with a gun.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="https://images.unsplash.com/photo-1519659528534-7fd733a832a0?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=926&q=80" alt="" class="img-fluid">
            </div>
        </div>
        <div class="row align-items-center content">
            <div class="col-md-6 order-2 order-md-1">
                <img src="https://images.unsplash.com/photo-1516651165460-30864737f9d9?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 text-center order-1 order-md-2">
                <div class="row justify-content-center">
                    <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                        <h1>See things wouldn't want to miss.</h1>
                        <img src="imgs/lolli_icon.png" alt="" class="d-none d-lg-inline">
                        <p class="lead">To witness that calm rhythm of life revives our worn souls and recaptures a feeling of belonging to the natural world. No one can return from the Serengeti unchanged, tawny lions will forever prowl our memory and great herds throng our imagination.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="containers">

          <h5 style="font-size:50px;">Find the True Love for Nature.</h5>
        </div>


    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

    <script>
        $(function () {
            $(document).scroll(function () {
                var $nav = $("#mainNavbar");
                $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    -->
  </body>
</html>
