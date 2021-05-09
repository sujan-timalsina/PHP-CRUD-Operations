//AJAX Request for retrieving data
let tbody=document.getElementById("tbody");
function showdata(){
	tbody.innerHTML="";
	const xhr=new XMLHttpRequest();
	xhr.open("POST","retrieve.php",true);

	//parse data into JS Object from JSON
	xhr.responseType="json";

	xhr.onload=function(){
		if(this.status==200){
			// console.log(this.response);
			if(this.response){
				x=this.response;
				for(i=0; i<x.length; i++){
					tbody.innerHTML+="<tr><td>"+x[i].id+"</td><td>"+x[i].firstname+"</td><td>"
					+x[i].lastname+"</td><td>"+x[i].email+"</td><td>"
					+x[i].mobile+"</td><td>"+
					"<button class='btn btn-warning btn-edit' data-sid="+x[i].id+">Edit</button>"+
					"<button class='btn btn-danger btn-edit' data-sid="+x[i].id+">Delete</button>";
				}
			}else{
				x="";
			}
		}else{
			console.log("Error Showing Data");
		}
	}
	xhr.send();

}
showdata();

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
	xhr.setRequestHeader("Content-Type", "application/json");

	//Handle Response
	xhr.onload = function(){
		if(this.readyState==4 && this.status==200){
			//Response handling code
			// console.log(this.responseText);
			document.getElementById("msg").innerHTML=this.responseText;
			document.getElementById("myForm").reset();
			showdata();
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
	const mydata={firstname:firstname,lastname:lastname,email:email,mobile:mobile};
	console.log(mydata);

	//Now we have to send JSON string not JS object

	const data=JSON.stringify(mydata);
	//Above method will convert from JS object to JSON string

	console.log(data);

	//Send Request with Data
	xhr.send(data);
	// return false;
}