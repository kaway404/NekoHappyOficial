$("document").ready(function(){
  $(".boxcenter .busca").keyup(function(){
	var $this = $(this);
	var val   = $this.val();
	console.log(val);
	
	if(val == ""){
		$('.boxcenter .novo').html("");
	}else{
		$.ajax({
		  url: "/buscaanime",
		  type: "POST",
		  data: {user: val},
		  cache: false,
		  
		  success: function(res){
			$('.novo').html(res);
		  }
		  
		});
	}
	
  });
  
  $('html, body').click(function(){
	$('.boxcenter .novo').html("");
  });
  
});