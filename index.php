<?php
require_once('connection.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container d-flex justify-content-center bg-secondary text-white" >
    <form class="" action="" method="POST">
      <div class="form">
        <h3>STUDENT INFORMATION</h3>
      </div>
      <div class="person-form">
        <h5>Personal information</h5>
      </div>      
      <div class="form-group row">
        <label for="id" class="col-sm-2 col-form-label">ID</label>
        <div class="col-sm-9">
          <input class="form-control" type="int" name="ID" id="ID" required">
        </div>
      </div>
      <div class="form-group row">
        <label for="username" class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-9">
          <input class="form-control"type="text" name="username" id="username" value="" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="first_name" class="col-sm-2 col-form-label">First Name</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="first_name" name="first_name" value="" required/>
        </div>
      </div>
      <div class="form-group row">
        <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="last_name" name="last_name" value="" required/>
        </div>
      </div>
      <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-9">
          <input type="mail" class="form-control" name="email" id="email" value="" required>
        </div>
      </div>
      <fieldset class="form-group">
        <div class="row">
          <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
          <div class="col-sm-9">
            <div class="form-check">
              <label for="male" class="radio-in-line"><input type="radio" name="gender_0" id="male" value="m">Male</label>
              <label for="female" class="radio-in-line"><input type="radio" name="gender_1" id="female" value="f">Female</label>
              <label for="neutral" class="radio-in-line"><input type="radio" name="gender_2" id="neutral" value="x">Neutral</label>
            </div>
          </div>
        </div>
      </fieldset>
      <div class="person-form">
        <h5>Social Network</h5>
      </div>
      <div class="form-group row">
        <label for="linkedin" class="col-sm-2 col-form-label">LinkedIn(url)</label>
        <div class="col-sm-9">
          <input class="form-control" type="text" name="linkedin" id="linkedin" value="" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="github" class="col-sm-2 col-form-label">Github(url)</label>
        <div class="col-sm-9">
          <input class="form-control" type="text" name="github" id="github" value="" required>
        </div>
      </div>
      <div class="person-form">
        <h5>Other informations</h5>
      </div> 
      <div class="prefred-language">
        <label class="my-1 mr-3" for="preferred_language">Preferred language</label>
          <select class="custom-select my-3 col-sm-4" type="text" name="preferred_language" id="linkedin" value="" required>
            <option selected>Choose...</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
      </div>
      <div class="form-group row">
        <label for="quote" class="col-sm-2 col-form-label">Favourite quote</label>
        <div class="col-sm-8">
        <textarea name="quote" id="quote" cols="45" rows="5" required></textarea>
        </div>
      </div>
      <div class="form-group row">
        <label for="quote_author" class="col-sm-2 col-form-label">By the Author</label>
        <div class="col-sm-9">
          <input class="form-control" type="text" name="quote_author" id="quote_author"required>
        </div>
      </div>
      <div class="form-group row">
        <label for="id" class="col-sm-2 col-form-label">Favourite video(url)</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="github">
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-11">
          <button type="button" class="btn btn-primary btn-md btn-block">Submit</button>
        </div>
      </div>
    </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>