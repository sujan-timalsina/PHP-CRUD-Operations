$(document).ready(function(){

	//AJAX Request for Retrieing Data
	function showData(){

		$.ajax({
			url:"retrieve.php",
			type:"POST",
			dataType:"json",
			success:function(data){

				output="";

				// console.log(data);
				// console.log(data[1].firstname);
				if(data){
					x=data;
				}else{
					x="";
				}
				for(i=1; i<x.length; i++){
					// console.log(x[i]);
					// console.log(x[i].firstname);
					output+="<tr><td>" + x[i].id + "</td><td>" + x[i].firstname 
					+ "</td><td>" + x[i].lastname + "</td><td>" + x[i].email + 
					"</td><td>" + x[i].mobile + 
					"</td><td> <button class='btn btn-warning btn-edit'>Edit</button>"
					+"<button class='btn btn-danger btn-delete' data-id="
					+ x[i].id + ">Delete</button>"
					+"</td></tr>";
				}
				$("#tbody").html(output);
			}
		});
	}

	showData();


	//Ajax Request for Insert Data
	$("#btn-add").click(function (e) {
		e.preventDefault();
		let fname=$("#firstname").val();
		let lname=$("#lastname").val();
		let em=$("#email").val();
		let mb=$("#mobile").val();
		// console.log(fname);
		// console.log(lname);
		// console.log(em);
		// console.log(mb);

		mydata={fn:fname, ln:lname, email:em, mobile:mb}
		// console.log(mydata);

		$.ajax({
			url:"insert.php",
			method:"POST",
			data:JSON.stringify(mydata),
			success: function(data){
				// console.log(data);
				msg="<div>" + data + "</div>";
				$("#msg").html(msg);
				$("#myform")[0].reset();
				showData();
			}
		});

	});

	//Ajax Request for Deleting Data
	$("#tbody").on("click",".btn-delete",function(){
		console.log("Delete button Clicked");
		let id=$(this).attr("data-id");
		// console.log(id);
		mydata={sid:id};
		$.ajax({
			url:"delete.php",
			type:"POST",
			data:JSON.stringify(mydata),
			success:function(data){
				console.log(data);
				showData();
			}
		});
	});


});

