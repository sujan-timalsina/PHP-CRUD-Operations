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
    <div class="container">
      <div class="display-4 bg-info text-center p-2 text-light">Insert Using AJAX AND JQUERY</div>
      <div class="col-lg-8 my-3">
        <form action="ajax-insert.php" id="myform" method="POST">
          <div class="form-group">
            <label for="">Username</label>
            <input type="text" class="form-control" name="username" id="username">
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input type="text" class="form-control" name="password" id="password">
          </div>

          <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-success">
        </form>
        <!-- <button type="submit" class="btn btn-success" id="btn-insert" name="btn-insert">Insert</button> -->
      </div>
      <div>
        <h1 class="display-4 text-center text-light bg-info">Display Data Using AJAX</h1>
        <!-- <button class="btn btn-danger my-3" id="displaydata">Display</button> -->
        <table class="table table-striped table-hover table-bordered text-center">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Username</th>
              <th scope="col">Password</th>
            </tr>
          </thead>
          <tbody id="response">
            
          </tbody>
        </table>
      </div>

    </div>  

    <script src="bootstrap-4.6.0-dist/js/jquery.js"></script>

    <script>
      $(document).ready(function(){
        // var form=$('#myform');
        var username=$('#username').val();
        var password=$('#password').val();

        $('#submit').click(function(){
        // $('#myform').submit(function(e){
          // e.preventDefault();
        // $('#btn-insert').click(function(){
          // $(this).submit();
          $.ajax({
            url:'ajax-insert.php',
            // url:form.attr("action"),
            type:"POST",
            data:{
              //$("#myform input").serialize()
              username:username,
              password:password
            },
            cache:false,
            success:function(data){
              console.log(data);
            }
          });

        });

        tableload();
      
        function tableload(){

        //$('#displaydata').click(function(){
          $.ajax({
            url:'ajax-select.php',
            type:'POST',

            success: function(responsedata){
              $('#response').html(responsedata);
            }

          });
        // });
        }

      });
    </script>
    <!-- <iframe name="hiddenFrame" width="0" height="0" border="0" style="display: none;"></iframe> -->

    <script src="bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>