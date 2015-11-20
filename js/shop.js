$(window).load(
	function(){
		var id = [];
		var products = $('.single-shop-product');
		var index = 1
		products.each( function(indx,val){
			id[index - 1] = index;
			//pull from database
			$.get('shop.php', {func:'getImage',ID:index},function(data){ 
				products.find('img').attr('src',data);
			})			
			//pull from database
			$.get('shop.php', {func:'getName',ID:index},function(data){ 
				products.find("h2").html(data);
			})			
			//pull from database
			$.get('shop.php', {func:'getPrice',ID:index},function(data){ 
				products.find("ins").html(data);
			})
			$(this).find('a').attr('href',"view.php?ID="+index);					
		} )
	}
);