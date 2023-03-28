$(document).ready(function(){
	$('form').submit(function(event){
		event.preventDefault();
       
		var formData = $('form').serialize();
    
		var str=formData

		$.ajax({
			type: 'POST',
			url: './php/register.php',
			data: str,
			success: function(data){
				alert(data)
				if(data.trim() === "User registered successfully in database."){
							window.location.href = "login.html";

				}else{
					$("#message").html(data);
				}
			}
			
		});
	});
});


