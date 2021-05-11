<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="bootstrap-4.6.0-dist/css/bootstrap.min.css" rel="stylesheet">

  <title></title>
</head>

<body>
  <div class="container-fluid p-0">
    <p class="display-4 text-light text-center bg-info p-1">AJAX---Vanilla JS---PHP</p>
    <div class="d-flex flex-wrap">
      <div class="col-lg-4 col-md-12">
        <p class="h2 text-white text-center bg-warning p-2">Add/Edit User:</p>
        <form name="myForm" id="myForm" method="POST">
          <input type="text" name="id" class="form-control">
          <label for="firstname">First Name:</label>
          <input type="text" name="firstname" class="form-control">
          <label for="lastname">Last Name:</label>
          <input type="text" name="lastname" class="form-control">
          <label for="email">Email:</label>
          <input type="email" name="email" class="form-control">
          <label for="mobile">Mobile:</label>
          <input type="text" name="mobile" class="form-control">
          <button type="submit" id="btn-save" class="btn btn-primary my-1">Save</button>
        </form>
        <div>
          <div id="msg" class="bg-dark text-white h4 text-center"></div>
        </div>
      </div>

      <div class="col-lg-8 col-md-12 table-responsive">
        <p class="h2 text-white bg-warning text-center p-2">Display User:</p>
        <table class="table table-bordered text-center table-hover">
          <thead>
            <tr>
              <td scope="col">Id</td>
              <td scope="col">Firstname</td>
              <td scope="col">Lastname</td>
              <td scope="col">Email</td>
              <td scope="col">Mobile</td>
              <td scope="col">Action</td>
            </tr>
          </thead>
          <tbody id="tbody"></tbody>
        </table>
      </div>
    </div>

  </div>

  <script src="bootstrap-4.6.0-dist/js/jquery.js"></script>

  <script src="bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script>
  <script src="ajaxscript.js"></script>

</body>

</html>