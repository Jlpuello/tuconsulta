<?php
    require "conexion/conexioDB.php";
    include "templates/header/header.php";
   
?>


<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      
      
    </div>
    <div class="col-sm-4">
      
        <form action="logica/loguear.php" method="POST">
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input type="text" class="form-control" id="usuario" placeholder="Enter user" name="usuario">
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
        </div>
        <div class="form-check mb-3">
            <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="remember"> Remember me
            </label>
        </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>
    <div class="col-sm-4">
             
      
    </div>
  </div>
</div>


<?php

    include "templates/footer/footer.php";

?>