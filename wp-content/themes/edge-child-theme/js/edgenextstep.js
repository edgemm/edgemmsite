	jQuery(document).ready(function($) {
	  
//Hide these field initially getstarted
	$("#email-submit").hide(); $("#website").hide(); $("#seo").hide(); $("#ongoing-content").hide(); $("#marketing").hide(); $("#branding").hide(); $(".rad").hide(); $(".yikes").hide(); $(".great").hide(); $(".done").hide();
	
function goToByScroll(id){
        $('html,body').animate({scrollTop: $(id).offset().top},'slow');
}

//Getting Start		
$('#get-started').click(function() {
	_gaq.push(['_trackPageview', '/nst/get-started/']);
	$("#branding").show(); $("#getstarted").hide();
});

$('#somthing').click(function() {
	_gaq.push(['_trackPageview', '/nst/get-started/']);
	window.location.href = "/skip-form/";
});
//Getting finish		


//Branding-Logo Start
$("#mylogo-solution").hide(); $("#mycollateral-solution").hide(); $("#photovideo-solution").hide(); 		
$('#branding-next').click(function() { 

_gaq.push(['_trackPageview', '/nst/branding/']);

	if ($("#mylogo input:checkbox:checked").val() == "Yes" && $("#mycollateral input:checkbox:checked").val() == "Yes" && $("#photovideo input:checkbox:checked").val() == "Yes" ) {
		$("#website").show(); $("#branding").hide(); $("#branding-solution").hide();
		}
		else if ($("#mylogo input:checkbox:checked").val() == "Yes" && $("#mycollateral input:checkbox:checked").val() == "No" && $("#photovideo input:checkbox:checked").val() == "Yes" ) {
		$("#branding-solution").show(); $("#branding-next").hide(); goToByScroll('#branding-solution');
		}
		else if ($("#mylogo input:checkbox:checked").val() == "Yes" && $("#mycollateral input:checkbox:checked").val() == "No" && $("#photovideo input:checkbox:checked").val() == "No" ) {
		$("#branding-solution").show(); $("#branding-next").hide();	goToByScroll('#branding-solution');
		}
		else if ($("#mylogo input:checkbox:checked").val() == "No" && $("#mycollateral input:checkbox:checked").val() == "Yes" && $("#photovideo input:checkbox:checked").val() == "Yes" ) {
		$("#branding-solution").show(); $("#branding-next").hide(); goToByScroll('#branding-solution');
		}
		else if ($("#mylogo input:checkbox:checked").val() == "No" && $("#mycollateral input:checkbox:checked").val() == "Yes" && $("#photovideo input:checkbox:checked").val() == "No" ) {
		$("#branding-solution").show(); $("#branding-next").hide(); goToByScroll('#branding-solution');
		}
		else if ($("#mylogo input:checkbox:checked").val() == "No" && $("#mycollateral input:checkbox:checked").val() == "No" && $("#photovideo input:checkbox:checked").val() == "Yes" ) {
		$("#branding-solution").show(); $("#branding-next").hide(); goToByScroll('#branding-solution');
		}
		else if ($("#mylogo input:checkbox:checked").val() == "Yes" && $("#mycollateral input:checkbox:checked").val() == "Yes" && $("#photovideo input:checkbox:checked").val() == "No" ) {
		$("#branding-solution").show(); $("#branding-next").hide(); goToByScroll('#branding-solution');
		}
		else if ($("#mylogo input:checkbox:checked").val() == "No" && $("#mycollateral input:checkbox:checked").val() == "No" && $("#photovideo input:checkbox:checked").val() == "No" ) {
		$("#branding-solution").show(); $("#branding-next").hide(); goToByScroll('#branding-solution');
		}
		if ($("#mylogo input:checkbox:checked").val() == "No" ) {$("#mylogo-solution").show();}
		if ($("#mycollateral input:checkbox:checked").val() == "No" ) {$("#mycollateral-solution").show();}
		if ($("#photovideo input:checkbox:checked").val() == "No" ) {$("#photovideo-solution").show();}
});

$("#branding-solution").hide();
$('#branding-get-started').click(function() {
	$("#email-submit").show(); $(".great").show(); $("#branding-solution").hide();
});

$('#branding-skip').click(function() {
	$("#branding-solution").hide(); $("#branding").hide(); $("#website").show(); goToByScroll('#website');
});
//Branding-Logo finish

//Website Start	
$("#excitedwebsite-solution").hide(); $("#websiteleads-solution").hide(); $("#websiteeasy-solution").hide();			
$('#website-next').click(function() { 

_gaq.push(['_trackPageview', '/nst/website/']);

	if ($("#excitedwebsite input:checkbox:checked").val() == "Yes" && $("#websiteleads input:checkbox:checked").val() == "Yes" && $("#websiteeasy input:checkbox:checked").val() == "Yes" ) {
		$("#seo").show(); $("#website").hide(); $("#website-solution").hide();
		}
		else if ($("#excitedwebsite input:checkbox:checked").val() == "Yes" && $("#websiteleads input:checkbox:checked").val() == "No" && $("#websiteeasy input:checkbox:checked").val() == "Yes" ) {
		$("#website-solution").show(); $("#website-next").hide(); goToByScroll('#website-solution');
		}
		else if ($("#excitedwebsite input:checkbox:checked").val() == "Yes" && $("#websiteleads input:checkbox:checked").val() == "No" && $("#websiteeasy input:checkbox:checked").val() == "No" ) {
		$("#website-solution").show(); $("#website-next").hide();	goToByScroll('#website-solution');
		}
		else if ($("#excitedwebsite input:checkbox:checked").val() == "No" && $("#websiteleads input:checkbox:checked").val() == "Yes" && $("#websiteeasy input:checkbox:checked").val() == "Yes" ) {
		$("#website-solution").show(); $("#website-next").hide(); goToByScroll('#website-solution');
		}
		else if ($("#excitedwebsite input:checkbox:checked").val() == "No" && $("#websiteleads input:checkbox:checked").val() == "Yes" && $("#websiteeasy input:checkbox:checked").val() == "No" ) {
		$("#website-solution").show(); $("#website-next").hide(); goToByScroll('#website-solution');
		}
		else if ($("#excitedwebsite input:checkbox:checked").val() == "No" && $("#websiteleads input:checkbox:checked").val() == "No" && $("#websiteeasy input:checkbox:checked").val() == "Yes" ) {
		$("#website-solution").show(); $("#website-next").hide(); goToByScroll('#website-solution');
		}
		else if ($("#excitedwebsite input:checkbox:checked").val() == "Yes" && $("#websiteleads input:checkbox:checked").val() == "Yes" && $("#websiteeasy input:checkbox:checked").val() == "No" ) {
		$("#website-solution").show(); $("#website-next").hide(); goToByScroll('#website-solution');
		}
		else if ($("#excitedwebsite input:checkbox:checked").val() == "No" && $("#websiteleads input:checkbox:checked").val() == "No" && $("#websiteeasy input:checkbox:checked").val() == "No" ) {
		$("#website-solution").show(); $("#website-next").hide(); goToByScroll('#website-solution');
		}
		if ($("#excitedwebsite input:checkbox:checked").val() == "No" ) {$("#excitedwebsite-solution").show();}
		if ($("#websiteleads input:checkbox:checked").val() == "No" ) {$("#websiteleads-solution").show();}
		if ($("#websiteeasy input:checkbox:checked").val() == "No" ) {$("#websiteeasy-solution").show();}
});

$("#website-solution").hide();
$('#website-get-started').click(function() {
	$("#email-submit").show(); $(".great").show(); $("#website-solution").hide(); $(".great").show();
});

$('#website-skip').click(function() {
	$("#website-solution").hide(); $("#website").hide(); $("#seo").show(); goToByScroll('#seo');
});
//Website finish

//SEO Start	
$("#websiteterms-solution").hide(); $("#websitetrack-solution").hide(); $("#websiteaction-solution").hide();				
$('#seo-next').click(function() { 

_gaq.push(['_trackPageview', '/nst/seo/']);

	if ($("#websiteterms input:checkbox:checked").val() == "Yes" && $("#websitetrack input:checkbox:checked").val() == "Yes" && $("#websiteaction input:checkbox:checked").val() == "Yes" ) {
		$("#ongoing-content").show(); $("#seo").hide(); $("#seo-solution").hide();
		}
		else if ($("#websiteterms input:checkbox:checked").val() == "Yes" && $("#websitetrack input:checkbox:checked").val() == "No" && $("#websiteaction input:checkbox:checked").val() == "Yes" ) {
		$("#seo-solution").show(); $("#seo-next").hide(); goToByScroll('#seo-solution');
		}
		else if ($("#websiteterms input:checkbox:checked").val() == "Yes" && $("#websitetrack input:checkbox:checked").val() == "No" && $("#websiteaction input:checkbox:checked").val() == "No" ) {
		$("#seo-solution").show(); $("#seo-next").hide();	goToByScroll('#seo-solution');
		}
		else if ($("#websiteterms input:checkbox:checked").val() == "No" && $("#websitetrack input:checkbox:checked").val() == "Yes" && $("#websiteaction input:checkbox:checked").val() == "Yes" ) {
		$("#seo-solution").show(); $("#seo-next").hide(); goToByScroll('#seo-solution');
		}
		else if ($("#websiteterms input:checkbox:checked").val() == "No" && $("#websitetrack input:checkbox:checked").val() == "Yes" && $("#websiteaction input:checkbox:checked").val() == "No" ) {
		$("#seo-solution").show(); $("#seo-next").hide(); goToByScroll('#seo-solution');
		}
		else if ($("#websiteterms input:checkbox:checked").val() == "No" && $("#websitetrack input:checkbox:checked").val() == "No" && $("#websiteaction input:checkbox:checked").val() == "Yes" ) {
		$("#seo-solution").show(); $("#seo-next").hide(); goToByScroll('#seo-solution');
		}
		else if ($("#websiteterms input:checkbox:checked").val() == "Yes" && $("#websitetrack input:checkbox:checked").val() == "Yes" && $("#websiteaction input:checkbox:checked").val() == "No" ) {
		$("#seo-solution").show(); $("#seo-next").hide(); goToByScroll('#seo-solution');
		}
		else if ($("#websiteterms input:checkbox:checked").val() == "No" && $("#websitetrack input:checkbox:checked").val() == "No" && $("#websiteaction input:checkbox:checked").val() == "No" ) {
		$("#seo-solution").show(); $("#seo-next").hide(); goToByScroll('#seo-solution');
		}
		if ($("#websiteterms input:checkbox:checked").val() == "No" ) {$("#websiteterms-solution").show();}
		if ($("#websitetrack input:checkbox:checked").val() == "No" ) {$("#websitetrack-solution").show();}
		if ($("#websiteaction input:checkbox:checked").val() == "No" ) {$("#websiteaction-solution").show();}
});

$("#seo-solution").hide();
$('#seo-get-started').click(function() {
	$("#email-submit").show(); $(".great").show(); $("#seo-solution").hide();
});

$('#seo-skip').click(function() {
	$("#seo-solution").hide(); $("#seo").hide(); $("#ongoing-content").show(); goToByScroll('#ongoing-content');
});
//Website finish

//Digital Start
$("#engageonline-solution").hide(); $("#postonline-solution").hide(); $("#advertiseonline-solution").hide();						
$('#ongoing-content-next').click(function() { 

_gaq.push(['_trackPageview', '/nst/digital/']);

	if ($("#engageonline input:checkbox:checked").val() == "Yes" && $("#postonline input:checkbox:checked").val() == "Yes" && $("#advertiseonline input:checkbox:checked").val() == "Yes" ) {
		$("#marketing").show(); $("#ongoing-content").hide(); $("#ongoing-content-solution").hide();
		}
		else if ($("#engageonline input:checkbox:checked").val() == "Yes" && $("#postonline input:checkbox:checked").val() == "No" && $("#advertiseonline input:checkbox:checked").val() == "Yes" ) {
		$("#ongoing-content-solution").show(); $("#ongoing-content-next").hide(); goToByScroll('#ongoing-content-solution');
		}
		else if ($("#engageonline input:checkbox:checked").val() == "Yes" && $("#postonline input:checkbox:checked").val() == "No" && $("#advertiseonline input:checkbox:checked").val() == "No" ) {
		$("#ongoing-content-solution").show(); $("#ongoing-content-next").hide();	goToByScroll('#ongoing-content-solution');
		}
		else if ($("#engageonline input:checkbox:checked").val() == "No" && $("#postonline input:checkbox:checked").val() == "Yes" && $("#advertiseonline input:checkbox:checked").val() == "Yes" ) {
		$("#ongoing-content-solution").show(); $("#ongoing-content-next").hide(); goToByScroll('#ongoing-content-solution');
		}
		else if ($("#engageonline input:checkbox:checked").val() == "No" && $("#postonline input:checkbox:checked").val() == "Yes" && $("#advertiseonline input:checkbox:checked").val() == "No" ) {
		$("#ongoing-content-solution").show(); $("#ongoing-content-next").hide(); goToByScroll('#ongoing-content-solution');
		}
		else if ($("#engageonline input:checkbox:checked").val() == "No" && $("#postonline input:checkbox:checked").val() == "No" && $("#advertiseonline input:checkbox:checked").val() == "Yes" ) {
		$("#ongoing-content-solution").show(); $("#ongoing-content-next").hide(); goToByScroll('#ongoing-content-solution');
		}
		else if ($("#engageonline input:checkbox:checked").val() == "Yes" && $("#postonline input:checkbox:checked").val() == "Yes" && $("#advertiseonline input:checkbox:checked").val() == "No" ) {
		$("#ongoing-content-solution").show(); $("#ongoing-content-next").hide(); goToByScroll('#ongoing-content-solution');
		}
		else if ($("#engageonline input:checkbox:checked").val() == "No" && $("#postonline input:checkbox:checked").val() == "No" && $("#advertiseonline input:checkbox:checked").val() == "No" ) {
		$("#ongoing-content-solution").show(); $("#ongoing-content-next").hide(); goToByScroll('#ongoing-content-solution');
		}
		if ($("#engageonline input:checkbox:checked").val() == "No" ) {$("#engageonline-solution").show();}
		if ($("#postonline input:checkbox:checked").val() == "No" ) {$("#postonline-solution").show();}
		if ($("#advertiseonline input:checkbox:checked").val() == "No" ) {$("#advertiseonline-solution").show();}
});

$("#ongoing-content-solution").hide();
$('#ongoing-content-get-started').click(function() {
	$("#email-submit").show(); $(".great").show(); $("#ongoing-content-solution").hide();
});

$('#ongoing-content-skip').click(function() {
	$("#ongoing-content-solution").hide(); $("#ongoing-content").hide(); $("#marketing").show(); goToByScroll('#marketing');
});
//Digital finish

//Marketing Start
$("#advertisingbudget-solution").hide(); $("#advertisingworking-solution").hide(); $("#advertisingdeal-solution").hide();								
$('#marketing-next').click(function() { 

_gaq.push(['_trackPageview', '/nst/marketing/']);


if (

$("#advertisingbudget input:checkbox:checked").val() == "Yes" && 
$("#advertisingworking input:checkbox:checked").val() == "Yes" && 
$("#advertisingdeal input:checkbox:checked").val() == "Yes" && 

$("#engageonline input:checkbox:checked").val() == "Yes" && 
$("#advertiseonline input:checkbox:checked").val() == "Yes" && 
$("#postonline input:checkbox:checked").val() == "Yes" && 

$("#websiteterms input:checkbox:checked").val() == "Yes" && 
$("#websitetrack input:checkbox:checked").val() == "Yes" && 
$("#websiteaction input:checkbox:checked").val() == "Yes" && 

$("#excitedwebsite input:checkbox:checked").val() == "Yes" && 
$("#websiteleads input:checkbox:checked").val() == "Yes" && 
$("#websiteeasy input:checkbox:checked").val() == "Yes" && 

$("#mylogo input:checkbox:checked").val() == "Yes" && 
$("#mycollateral input:checkbox:checked").val() == "Yes" && 
$("#photovideo input:checkbox:checked").val() == "Yes"

 ) { window.location.href = "/skip-yes-form/"; }
	else if ($("#advertisingbudget input:checkbox:checked").val() == "Yes" && $("#advertisingworking input:checkbox:checked").val() == "Yes" && $("#advertisingdeal input:checkbox:checked").val() == "Yes" ) {
		$("#email-submit").show(); $(".done").show(); $(".great").hide(); $("#marketing").hide(); $("#marketing-solution").hide();  
		}
		else if ($("#advertisingbudget input:checkbox:checked").val() == "Yes" && $("#advertisingworking input:checkbox:checked").val() == "No" && $("#advertisingdeal input:checkbox:checked").val() == "Yes" ) {
		$("#marketing-solution").show(); $(".done").show(); $(".great").hide(); $("#marketing-next").hide(); goToByScroll('#marketing-solution');
		}
		else if ($("#advertisingbudget input:checkbox:checked").val() == "Yes" && $("#advertisingworking input:checkbox:checked").val() == "No" && $("#advertisingdeal input:checkbox:checked").val() == "No" ) {
		$("#marketing-solution").show(); $(".done").show(); $(".great").hide(); $("#marketing-next").hide();	goToByScroll('#marketing-solution');
		}
		else if ($("#advertisingbudget input:checkbox:checked").val() == "No" && $("#advertisingworking input:checkbox:checked").val() == "Yes" && $("#advertisingdeal input:checkbox:checked").val() == "Yes" ) {
		$("#marketing-solution").show(); $(".done").show(); $(".great").hide(); $("#marketing-next").hide(); goToByScroll('#marketing-solution');
		}
		else if ($("#advertisingbudget input:checkbox:checked").val() == "No" && $("#advertisingworking input:checkbox:checked").val() == "Yes" && $("#advertisingdeal input:checkbox:checked").val() == "No" ) {
		$("#marketing-solution").show(); $(".done").show(); $(".great").hide(); $("#marketing-next").hide(); goToByScroll('#marketing-solution');
		}
		else if ($("#advertisingbudget input:checkbox:checked").val() == "No" && $("#advertisingworking input:checkbox:checked").val() == "No" && $("#advertisingdeal input:checkbox:checked").val() == "Yes" ) {
		$("#marketing-solution").show(); $(".done").show(); $(".great").hide(); $("#marketing-next").hide(); goToByScroll('#marketing-solution');
		}
		else if ($("#advertisingbudget input:checkbox:checked").val() == "Yes" && $("#advertisingworking input:checkbox:checked").val() == "Yes" && $("#advertisingdeal input:checkbox:checked").val() == "No" ) {
		$("#marketing-solution").show(); $(".done").show(); $(".great").hide(); $("#marketing-next").hide(); goToByScroll('#marketing-solution');
		}
		else if ($("#advertisingbudget input:checkbox:checked").val() == "No" && $("#advertisingworking input:checkbox:checked").val() == "No" && $("#advertisingdeal input:checkbox:checked").val() == "No" ) {
		$("#marketing-solution").show(); $(".done").show(); $(".great").hide(); $("#marketing-next").hide(); goToByScroll('#marketing-solution');
		}
		if ($("#advertisingbudget input:checkbox:checked").val() == "No" ) {$("#advertisingbudget-solution").show();}
		if ($("#advertisingworking input:checkbox:checked").val() == "No" ) {$("#advertisingworking-solution").show();}
		if ($("#advertisingdeal input:checkbox:checked").val() == "No" ) {$("#advertisingdeal-solution").show();}
		
		
});
$("#marketing-solution").hide();
$('#marketing-get-started').click(function() {
	$("#email-submit").show(); $("#marketing-solution").hide(); theend();
});

//Marketing finish

//end start
function theend() {
		if ($("#advertisingbudget input:checkbox:checked").val() == "No" && $("#advertisingworking input:checkbox:checked").val() == "No" && $("#advertisingdeal input:checkbox:checked").val() == "No" && $("#engageonline input:checkbox:checked").val() == "No" && $("#advertiseonline input:checkbox:checked").val() == "No" && $("#websiteaction input:checkbox:checked").val() == "No" && $("#websiteterms input:checkbox:checked").val() == "No" && $("#websitetrack input:checkbox:checked").val() == "No" && $("#websiteaction input:checkbox:checked").val() == "No" && $("#excitedwebsite input:checkbox:checked").val() == "No" && $("#websiteleads input:checkbox:checked").val() == "No" && $("#websiteeasy input:checkbox:checked").val() == "No" && $("#mylogo input:checkbox:checked").val() == "No" && $("#mycollateral input:checkbox:checked").val() == "No" && $("#photovideo input:checkbox:checked").val() == "No" ) {
	$(".yikes").show(); $(".great").hide(); $(".done").hide(); }
} 
//end finish

//doc ready end
	});