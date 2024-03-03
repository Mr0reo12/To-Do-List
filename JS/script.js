$(document).ready(function(){
	$(".remove-to-do").click(function()
	{
		const id = $(this).attr("id");
		
		$.post("APP/remove.php",
		{
			id: id
				
		},

		(data) => {

			if(data){

			$(this).parent().hide(600);

			}
		}

		);


	});


	$(".check-box").click(function(e)
		{

		const id = $(this).attr("data-todo-id");

		$.post("APP/check.php",

		{
			id: id 

		},

			(data) => {

			if(data != "error")
				{
					
				const h2 = $(this).next();
					if(data === "1")

					{
					h2.removeClass("checked");
					
					}else {

					h2.addClass("checked");	
					
						

			          }

			     }
			}
		);
			

	});


});
