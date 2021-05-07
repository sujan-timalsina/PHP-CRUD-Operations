//Ajax request for Insert Data

document.getElementById("btn-save").addEventListener("click",add_student);

function add_student(e){
	e.preventDefault();
	console.log("Save Button Clicked");
	var firstname = document.forms["myForm"]["firstname"].value;
	var lastname = document.forms["myForm"]["lastname"].value;
	var email = document.forms["myForm"]["email"].value;
	var mobile = document.forms["myForm"]["mobile"].value;
	
	// console.log(fn);
	// console.log(ln);
	// console.log(em);
	// console.log(mob);

	//Creating XHR Object
	const xhr=new XMLHttpRequest();

	//initialize
	xhr.open("POST","insert.php",true);
	//true means asynchronous

	//Set Request Header
	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

	//Handle Response
	xhr.onreadystatechange = function(){
		if(xhr.status===200){
			//Response handling code
			console.log(xhr.responseText);
		}else{
			console.log("Problem Occurred");
		}
	}
	// xhr.onreadystatechange = function(){
	// 	if (this.readyState == 4 && this.status == 200) {
 //     		console.log(this.responseText);
 //    	}
	// }

	//JS Object
	// const mydata={firstname:fn,lastname:ln,email:em,mobile:mob};
	// console.log(mydata);

	//Now we have to send JSON string not JS object

	// const data=JSON.stringify(mydata);
	//Above method will convert from JS object to JSON string

	// console.log(data);

	//Send Request with Data
	xhr.send("firstname=" + firstname + "&lastname=" + lastname + "&email=" + email + "&mobile=" + mobile + "&insert=1");
	// return false;
}