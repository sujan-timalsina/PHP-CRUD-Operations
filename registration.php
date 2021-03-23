<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> -->
    <title>Document</title>
</head>
<body>
    <form action="insertcheckbox&images.php" method="POST" class="reg-form" enctype="multipart/form-data">
        <h2>Registration Form:</h2>
        <div class="div-name">
            <input type="text" name="fname" placeholder="First Name">
            <input type="text" name="lname" placeholder="Last Name">
        </div>
        
        <div class="div-email">
            <input type="email" name="email" placeholder="Email">
        </div>
        
        <div class="div-password">
            <input type="password" name="pass" placeholder="Password">
            <input type="password" name="pass" placeholder="Confirm Password">
        </div>
        
        <div class="div-gender">
            Gender:
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female
            <input type="radio" name="gender" value="Others">Others
        </div>
        
        <div class="div-hobbies">
            Hobbies:
            <input type="checkbox" value="Football" name="hobbies[]">Football
            <input type="checkbox" value="Basketball" name="hobbies[]">Basketball
            <input type="checkbox" value="Cricket" name="hobbies[]">Cricket
            <input type="checkbox" value="Volleyball" name="hobbies[]">Volleyball
        </div>
        
        <div class="div-image">
            <input type="file" name="files[]" id="files" multiple>
            <div id="selectedFiles"></div>
        </div>
        
        <div class="div-submit">
            <input type="submit" name="submit" value="Submit">
        </div>
        
    </form>

    <script>
	var selDiv = "";
		
	document.addEventListener("DOMContentLoaded", init, false);
	
	function init() {
		document.querySelector('#files').addEventListener('change', handleFileSelect, false);
		selDiv = document.querySelector("#selectedFiles");
	}
		
	function handleFileSelect(e) {
		
		if(!e.target.files) return;
		
		selDiv.innerHTML = "";
		
		var files = e.target.files;
		for(var i=0; i<files.length; i++) {
			var f = files[i];
			
			selDiv.innerHTML += f.name + "<br/>";

		}
		
	}
	</script>

    <?php
        // foreach ($_FILES['files']['name'] as $filename) {
        //     echo '<li>' . $filename . '</li>';
        // }

    ?>
</body>
</html>