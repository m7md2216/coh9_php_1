<?php

session_start();
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

  <form class="container mt-5" action="./cv_template.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">CV number</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='id'>
    <div id="emailHelp" class="form-text">Please enter the number of CV</div>
  </div>
  <button type="submit" class="btn btn-primary">Search</button>
</form>
   
<div class="container mt-5">
<?php
if(!empty($_SESSION) && isset($_SESSION['error']) && !empty($_SESSION['error'])) :?>
<div class='alert alert-danger' rold='alert'>
<?= $_SESSION['error']?>
</div>
<?php endif;?>
</div>
  <form class="container mt-5" method="POST" action="./store.php" enctype="multipart/form-data">
    <h1 class="text-center my-5">Enter Your Information</h1>
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Full Name</span>
  <input type="text" class="form-control" aria-label="Username" name="name" aria-describedby="basic-addon1">
</div>
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Date Of Birth</span>
  <input type="text" class="form-control" aria-label="Username" name="date" aria-describedby="basic-addon1">
</div>
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Place Of Birth</span>
  <input type="text" class="form-control" aria-label="Username" name="place" aria-describedby="basic-addon1">
</div>
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Education Major</span>
  <input type="text" class="form-control" aria-label="Username" name="major" aria-describedby="basic-addon1">
</div>
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">University Name</span>
  <input type="text" class="form-control" aria-label="Username" name="university" aria-describedby="basic-addon1">
</div>
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Work Experience</span>
  <input type="text" class="form-control" aria-label="Username" name="work" aria-describedby="basic-addon1">
</div>
  <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Email</span>
      <input type="email" class="form-control" aria-label="Username" name="email" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
  <span class="input-group-text">Write a brief paragraph about yourself</span>
  <textarea class="form-control" name="obj" aria-label="With textarea"></textarea>
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Upload img</span>
  <input type="file" class="form-control" aria-label="Username" name="img" aria-describedby="basic-addon1">
</div>

<div class="d-flex justify-content-end mt-5">
<button type="submit" class="btn btn-primary" name="submit">Add</button>
</div>


</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>