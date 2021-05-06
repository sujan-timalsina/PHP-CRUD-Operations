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

    <script src="bootstrap-4.6.0-dist/js/jquery.js"></script>

    <script>
      //JSON
      //Javascript Object Notation
      //Used to store and exchange data
      //JSON format looks like Javascript Object Literals but it is not. They both are different.
      //Clinet side bata server sidema data tanna ra pathauna ekdum fast hunxa JSON(data/text exchnge format) in comparison to XML.
      //JSON is light weight because it is not language but a text based format.

      //Javascript Object
      var person1 ={firstName:"Sujan",lastName:"Timalsina"};

      console.log(person1.firstName+" "+person1.lastName);

      //If we want to give spaces in key in JS obect then we should use "" or ''
      //var person1 ={'first Name':'Sujan','last Name':'Timalsina'};

      //JSON
      var person2 ={"firstName":"Sujan","lastName":"Timalsina"};
      //{key:value};
      //Even key is in "" in JSON always(rule)

      console.log(person2.firstName+" "+person2.lastName);

      //Data types allowed in JSON
      //String
      //Number
      //Boolean
      //Array
      //object
      //NULL

      var bio={
        "name":"Sujan Timalsina",//String
        "age":21,//Number
        "married":false,//Boolean
        "kids":,//NULL
        "hobbies":["music","sports"],//Array
        "device":{
          {"type":"android","name":"...."},
          {"type":"windows","name":"...."}
        }//Nested JSON Object
      };

      //Lanuage Independent(Jun languagema ni use garna milxa Php,Js,Python,.....)
      //Human Readable format
      //Easy to organiz and access
      //Light weight(tesaile fast chalxa)

      //Cannot use it for transfer video, audio, images or any other binary information

      //JQuery Function to read JSON Data
      $.ajax({
        url:"JSON URL",
        type:"GET",
        success:function(data){

        }
      });
      //Shortcut
      $.getJSON(
        "JSON URL",
        function(data){

        }
      );
      //If we only want to read data then GET is ok but if we want to write and read both then POST method is recommended

    </script>

    <?php

    //From Php Array to JSON Oject
    //json_encode()

    //From JSON Oject to Php Array
    //json_decode()

    <script src="bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>