$(document).ready(function(){
	$("#Login").click(function(){
		//alert("registering ...");

		var user = $("#uname").val();
		var password =$("#pass").val();


		var data = "user=" + user + "&password=" + password;

		$.ajax({

			method:"post",
			url: "loginpage.php?",
			data: data,
			success:function(data)
			{
				$("#login_output").html(data);
			}
		});



	});
});