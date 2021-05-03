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
    <div class="display-4 text-info text-center">AJAX-----PHP-----JQUERY</div>
    <form id="myform" class="col-md-12 col-lg-6 mx-auto my-2">
      <input type="text" id="uid" class="form-control" style="display:none;">
      <label for="firstname">Firstname:</label>
      <input type="text" class="form-control" name="firstname" id="firstname">
      <label for="lastname">Lastname:</label>
      <input type="text" class="form-control" name="lastname" id="lastname">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" id="email">
      <label for="mobile">Mobile:</label>
      <input type="text" class="form-control" name="mobile" id="mobile">
      <button type="submit" class="btn btn-primary my-1" id="btn-add" name="btn-add">Save</button>
      <div id="msg"></div>
    </form>

    <div class="text-primary text-center h1">Display User Information</div>
    <div class="table-responsive">
      <table class="table table-striped col-lg-8 col-md-12 mx-auto table-bordered text-center">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Firstname</th>
            <th scope="col">Lastname</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody id="tbody"></tbody>
      </table>
    </div>
    <script src="bootstrap-4.6.0-dist/js/jquery.js"></script>

    <script src="bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script>

    <script src="ajax.js"></script>

    <script>
      if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
      }
    </script>
  </body>
</html>