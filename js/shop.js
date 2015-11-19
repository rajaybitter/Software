$(window).load(
	function(){
		var products =$(".product-upper");
		products.each( function(indx,val){
			var x = 1;
			$.ajax({
			 	type: "POST",
			 	url: "shop.php",
			 	data: {'functionName':'getImage', 'variable':x},
			 	success: function(response){
			 		$(this).find("img").attr("src",response);
			 	}
			});
		})
	}
);