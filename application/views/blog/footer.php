<footer class="footer">
	<div class="container-fluid bg-dark">
		<div class="container">
			<div class="row py-3">
				<div class="col-md-4 col-centered text-center">
					<p class="text-white"></p>
				</div>
				<div class="col-md-4 col-centered text-center">
					<ul class="social-network social-circle">
						<li>
							<a href="https://www.facebook.com/" class="icoFacebook"><i class="fa fa-facebook"></i>
							</a>
						</li>
						<li>
							<a href="https://www.instagram.com/" class="icoInstagram"><i class="fa fa-instagram"></i>
							</a>
						</li>
						<li>
							<a href="https://twitter.com/" class="icoTwitter">
							<i class="fa fa-twitter"></i></a>
						</li>
						<li>
							<a href="https://www.linkedin.com/company/" class="icoLinkedin">
							<i class="fa fa-linkedin"></i></a>
						</li>
				</div>
				<div class="col-md-4 col-centered text-center">
					<p class="text-white"></p>
				</div>
			</div>
			<div class="row py-3">
				<div class="col-md-4 col-centered text-center">
					<p class="text-white"></p>
				</div>
				<div class="col-md-4 col-centered text-center">
					<p class="text-white">© 2018 Copyright : Jakarta Center Management</p>
				</div>
				<div class="col-md-4 col-centered text-center">
					<p class="text-white"></p>
				</div>
			</div>
		</div>
	</div>
</footer>
<!--/Footer-->
</body>
<script src="<?php echo base_url('assets/plugins/jquery/dist/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/dist/b4/js/bootstrap.min.js')?>" ></script>
<script>
	
  $(window).scroll(function(){
    if($(document).scrollTop() > 50){
      $('nav').addClass('shrink');
    }
    else{
      $('nav').removeClass('shrink');
    }
  });



</script>
</html>
