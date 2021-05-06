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
    <div class="container-fluid">
      <p class="text-center bg-info text-white h1">PHP with Ajax & JSON</p>
      <table class="table table-bordered text-center">
        <thead>
          <tr>
            <td scope="col">Id</td>
            <td scope="col">Firstname</td>
            <td scope="col">Lastname</td>
            <td scope="col">Email</td>
            <td scope="col">Mobile</td>
          </tr>
        </thead>
        <tbody id="load-data"></tbody>
      </table>
    </div>

    <script src="bootstrap-4.6.0-dist/js/jquery.js"></script>

    <script>
      // $(document).ready(function(){
        $.ajax({
          url:"fetch-json.php",
          type:"POST",
          dataType:"JSON",
          // data:{uid:40}, id 40 vaako matra data chaiyo vane
          success:function(data){
            $.each(data,function(key,value){
              $("#load-data").append("<tr><td>"+value.id+"</td><td>"
                +value.firstname+"</td><td>"+value.lastname+"</td><td>"
                +value.email+"</td><td>"+value.mobile+"</td></tr>");
            });
          }
        });

        // $.getJSON(
        //   "fetch-json.php",
        //   function(data){
        //     console.log(data);
              // $.each(data,function(key,value){
              //   $("#load-data").append("<tr><td>"+value.id+"</td><td>"
              //     +value.firstname+"</td><td>"+value.lastname+"</td><td>"
              //     +value.email+"</td><td>"+value.mobile+"</td></tr>");
              // });
        //   }
        // );
    </script>

    <script src="bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>