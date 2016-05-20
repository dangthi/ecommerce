<?
<footer id="footer">
		<ul id="flex-footer">
			<li class="flex-li">	<a href="#"><span>Magasin</span></a>  </li>
			<li class="flex-li">	<a href="#"><span>Newsletter</span></a>  </li>
			<li class="flex-li">	<a href="#"><span>Ma commande</span></a>  </li>
			<li class="flex-li">	<a href="#"><span>Réseau social</span></a>  </li>
		</ul>

	</footer>
</body>
?>

<script>
	(function($){

		var jump=function(e)
		{
		   if (e){
			   e.preventDefault();
			   var target = $(this).attr("href");
		   }else{
			   var target = location.hash;
		   }

		   $('html,body').animate(
		   {
			   scrollTop: $(target).offset().top 
		   },2000);

		}

		$(document).ready(function()
		{
			$('a[href^=#]').bind("click", jump);

			if (location.hash){
				
				setTimeout(function(){
					jump();
				}, 0);
			}else{
				$('html, body').show()
			} 
		});

	})(jQuery)
</script>
