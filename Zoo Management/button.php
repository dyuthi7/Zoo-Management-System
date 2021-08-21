<html>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Work+Sans:400,600,800&display=swap" rel="stylesheet">

<style type = "text/css">

  body{
    background-image: url(https://images.unsplash.com/photo-1519066629447-267fffa62d4b?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1051&q=80);
    font-family: 'Abril Fatface', cursive;
    background-repeat: no-repeat;
    background-size: cover;
  }
  h1{
    font-size: 4rem;
    color: white;
    text-align: center;
  }

 h2{
   padding-top: 1px;
   font-family: "Work Sans", sans-serif;
   font-weight: 600;
   font-size: 2rem;
   padding-left: 10px;
   color : white;
 }
 h3{
   font-family: "Work Sans", sans-serif;
   font-weight: 600;
   font-size: 2rem;
   color: black;
 }
.buttons{
padding-left: 14px;
}
.logout{
padding-left: 50%;
}
.backbutton{
  padding-top: 180px;
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

<h1>ANIMAL DATABASE</h1>

<h2>For SPECIFIC animals click here:<h2>

<form action="new.php">
<button type="submit" class="btn btn-secondary">Submit</button></form>

<h2>All animals<h2>
<form action="na.php">
<button type="submit" class="btn btn-secondary">Submit</button></form>
  <h2>ADD to database<h2>
    <button onclick="location.href='a12.html'" button class="btn btn-secondary">Add</button>
    <div class="backbutton">
        <form action="staff.php">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
            <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
          </svg>
        <button type="submit" class="bi bi-arrow-left-circle-fill btn btn-primary">Previous</button></form>
    </div>

</html>
</body>
