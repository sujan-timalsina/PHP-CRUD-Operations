//Ajax request for Insert Data

document.getElementById("btn-save").addEventListener("click",add_student);

function add_student(e){
	e.preventDefault();
	console.log("Save Button Clicked");
	let fn=document.getElementById("firstname").value;
	let ln=document.getElementById("lastname").value;
	let em=document.getElementById("email").value;
	let mob=document.getElementById("mobile").value;
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
	xhr.onload=()=>{
		if(xhr.status===200){
			//Response handling code
			console.log(xhr.responseText);
		}else{
			console.log("Problem Occurred");
		}
	}

	//JS Object
	const mydata={firstname:fn,lastname:ln,email:em,mobile:mob};
	console.log(mydata);

	//Now we have to send JSON string not JS object

	const data=JSON.stringify(mydata);
	//Above method will convert from JS object to JSON string

	console.log(data);

	//Send Request with Data
	xhr.send();
}