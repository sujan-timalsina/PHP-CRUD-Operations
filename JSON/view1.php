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
      <p class="text-center bg-info text-white h1">Read JSON Data</p>
      <div id="load-data"></div>
    </div>

    <script src="bootstrap-4.6.0-dist/js/jquery.js"></script>

    <script>
      $(document).ready(function(){
        //For single post
        $.ajax({
          url:"https://jsonplaceholder.typicode.com/posts/3",
          type:"GET",
          success:function(data){
            // console.log(data);
            // $("#load-data").append(data.id + "<br>" + data.title);
          }
        });

        //For multile post
        $.ajax({
          // url:"https://jsonplaceholder.typicode.com/posts",
          url:"dummydata.json",
          type:"GET",
          success:function(data){
            $.each(data,function(key,value){
              console.log(value.id + " " + value.title);
              $("#load-data").append(value.id + "<br>" + value.title);
            });
            // console.log(data);
            // $("#load-data").append(data.id + "<br>" + data.title);
          }
        });

        $.getJSON(
          "dummydata.json",
          function(data){

            $.each(data,function(key,value){
              console.log(value.id + " " + value.title);
              $("#load-data").append(value.id + "<br>" + value.title);
            });
          }
        );
      });
    </script>

    <?php
    // $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' =>4);

    //Above associate array will now convert into the JSON object by json_decode() method
    // $jsonobj=json_encode($arr);
    // echo $jsonobj;

    ?>

    <script src="bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>