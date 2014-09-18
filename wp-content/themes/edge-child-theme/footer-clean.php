	</div>	
	<div id="footer">
			</div><!-- end footer -->
</div><!-- end container -->
<?php wp_footer(); ?>

<!-- Change URL of Custom Solutions Button -->                                                         
<script type="text/javascript">
jQuery(document).ready(function($) {
var mynextstepvalue = $.cookie("mynextstep");
if ( mynextstepvalue == null ) { $("#mynextstep").attr("href", /next-step-tool/) } else { $("#mynextstep").attr("href", mynextstepvalue) }
//doc ready end
});
</script>
<!-- End Change URL of Custom Solutions Button -->
       
</body>
</html>