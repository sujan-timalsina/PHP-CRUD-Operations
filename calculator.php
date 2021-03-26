<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style type="text/css">
       *{
         box-sizing: border-box;
       }
    </style>
        
   </head>

   <body>
      <h1 class="text-center">Calculator</h1>
      <table class="Container-fluid shadow-lg mx-auto">
         <tr class="row">
            <td class="col-8 m-auto">
               <input type="text" id="result" class="form-control">
            </td>
            <td class="col-3 m-auto">
               <input type="button" value="AC" onclick="reset()" class="btn btn-lg btn-outline-dark"> 
            </td>
         </tr>

         <tr class="row">  
            <td  class="col-3 m-auto">
               <input type="button" value="1" onclick="display('1')" class="btn btn-lg btn-outline-dark"> 
            </td>
            <td class="col-3 m-auto">
               <input type="button" value="2" onclick="display('2')" class="btn btn-lg btn-outline-dark"> 
            </td>
            <td class="col-3 m-auto">
               <input type="button" value="3" onclick="display('3')" class="btn btn-lg btn-outline-dark"> 
            </td>
            <td class="col-3 m-auto">
               <input type="button" value="/" onclick="display('/')" class="btn btn-lg btn-outline-dark"> 
            </td>
         </tr>

         <tr class="row">
            <td class="col-3 m-auto">
               <input type="button" value="4" onclick="display('4')" class="btn btn-lg btn-outline-dark"> 
            </td>
            <td class="col-3 m-auto">
               <input type="button" value="5" onclick="display('5')" class="btn btn-lg btn-outline-dark"> 
            </td>
            <td class="col-3 m-auto">
               <input type="button" value="6" onclick="display('6')" class="btn btn-lg btn-outline-dark"> 
            </td>
            <td class="col-3 m-auto">
               <input type="button" value="-" onclick="display('-')" class="btn btn-lg btn-outline-dark">
            </td>
         </tr>

         <tr class="row">
            <td class="col-3 m-auto">
               <input type="button" value="7" onclick="display('7')" class="btn btn-lg btn-outline-dark"> 
            </td>
            <td class="col-3 m-auto">
               <input type="button" value="8" onclick="display('8')" class="btn btn-lg btn-outline-dark"> 
            </td>
            <td class="col-3 m-auto">
               <input type="button" value="9" onclick="display('9')" class="btn btn-lg btn-outline-dark"> 
            </td>
            <td class="col-3 m-auto">
               <input type="button" value="+" onclick="display('+')" class="btn btn-lg btn-outline-dark"> 
            </td>
         </tr>

         <tr class="row">
            <td class="col-3 m-auto">
               <input type="button" value="." onclick="display('.')" class="btn btn-lg btn-outline-dark"> 
            </td>
            <td class="col-3 m-auto">
               <input type="button" value="0" onclick="display('0')" class="btn btn-lg btn-outline-dark"> 
            </td>
            <td class="col-3 m-auto">
               <input type="button" value="=" onclick="solve()" class="btn btn-lg btn-outline-dark"> 
            </td>
            <td class="col-3 m-auto">
               <input type="button" value="*" onclick="display('*')" class="btn btn-lg btn-outline-dark"> 
            </td>
         </tr>
      </table>

      <script type="text/javascript" src="calc.js"></script>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->


  </body>
</html>