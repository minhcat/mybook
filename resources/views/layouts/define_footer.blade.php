<!-- bootstrap -->
<script type="text/javascript" src="vendor/jquery/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.js"></script>
<!-- end bootstrap -->

<!-- slick -->
<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
<!-- end slick -->

<!-- mybook -->
<script type="text/javascript" src="js/index.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<!-- end mybook -->

<!-- facebook -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.11';
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>