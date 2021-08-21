<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Work+Sans:400,600,800&display=swap" rel="stylesheet">

<style type = "text/css">

  body{

    font-family: 'Abril Fatface', cursive;
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url(https://images.unsplash.com/photo-1497354829124-d3d128a97ee9?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=901&q=80);
    background-size:100% 200%;
  }
  h1{
    font-size: 4rem;
    color: black;
    text-align: center;
  }

 h2{
   padding-top: 1px;
   font-family: "Work Sans", sans-serif;
   font-weight: 600;
   font-size: 2rem;
   padding-left: 10px;
   color : black;
 }
 h3{
   font-family: "Work Sans", sans-serif;
   font-weight: 600;
   font-size: 2rem;
   color: black;
 }
 </style>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="https://image.shutterstock.com/z/stock-vector-logo-zoo-479703550.jpg" alt="" width="35" height="30" class="d-inline-block align-top">
      Zoo System
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="staff.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="button.php">Animal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="button1.php">Cage</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="button2.php">Caretaker</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="button3.php">Vet</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="button4.php">Clinic</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="button5.php">Food Storage</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<h1 style="color:WHITE;">CAGE DATABASE</h1>

<h2 style="color:WHITE;">For SPECIFIC cages click here:<h2>

<form action="new2.php">
<button type="submit" class="btn btn-secondary">Submit</button></form>


<h2 style="color:WHITE;">ALL CAGES<h2>

<form action="ncag.php">
<button type="submit" class="btn btn-secondary">Submit</button></form>
  <h2 style="color:WHITE;">ADD TO DATABASE<h2>
    <button onclick="location.href='c.html'" button class="btn btn-secondary">Add</button>

</html>
</body>
