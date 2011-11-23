 /* Global Items */
$(document).ready(function(){
	
	// Add appropriate helper text to input fields
	$("#edit-search-block-form-1,#edit-search-theme-form-1").each(function() {
		//var helpTxt = $(this).attr("title");
		var helpTxt = "Enter search terms";
		
		$(this).val(helpTxt);
		
		$(this).blur(function () {
			if($(this).val() == '') { $(this).val(helpTxt);$(this).removeClass("focus") }
		});
		$(this).focus(function() {
			if($(this).val() == helpTxt) { $(this).val("") }
			$(this).addClass("focus")
		});
	});
	
	// Add appropriate helper text to input fields
	$("#edit-keys").each(function() {
		var helpTxt = $(this).val();
		//var helpTxt = "Enter search terms";
		
		$(this).val(helpTxt);
		
		$(this).blur(function () {
			if($(this).val() == '') { $(this).val(helpTxt);$(this).removeClass("focus") }
		});
		$(this).focus(function() {
			if($(this).val() == helpTxt) { $(this).val("") }
			$(this).addClass("focus")
		});
	});
	
	// Add appropriate helper text to input fields
	$("#edit-pass").each(function() {
		var helpTxt = $(this).val();
		$(this).blur(function () {
			if($(this).val() == '') { $(this).val(helpTxt);$("#edit-pass-wrapper label").removeClass("focus") }
		});
		$(this).focus(function() {
			$("#edit-pass-wrapper label").addClass("focus")
		});
	});
	
	// Add appropriate helper text to input fields
	$("#edit-name").each(function() {
		var helpTxt = $(this).val();
		$(this).blur(function () {
			if($(this).val() == '') { $(this).val(helpTxt);$("#edit-name-wrapper label").removeClass("focus") }
		});
		$(this).focus(function() {
			$("#edit-name-wrapper label").addClass("focus")
		});
	});
	
	// Add rel=external functionality to anchors
	$("a").each(function() {
		var newtarget = $(this).attr("rel");
		if (newtarget == "external") { $(this).attr('target', '_blank'); }
	});
	
	$(":text").addClass("text");
	$(":image").addClass("image");
	$(":submit").addClass("submit");
	$(":checkbox").addClass("checkbox");
	$(":file").addClass("file");
	$(":radio").addClass("radio");
	$(":password").addClass("password");
	
	$("li:last-child").addClass("last-child");
	$("li:first-child").addClass("first-child");
	
	$("th:first").addClass("first");
	$("td:first").addClass("first");
	
	$('dl').each( function() {
		$(this).find('dt:first').addClass('first');
		$(this).find('dd:first').addClass('first');
		$(this).find('dt:last').addClass('last');
		$(this).find('dd:last').addClass('last');
	});

	
	$(".thumbs1 li:nth-child(odd)").addClass("odd");
	$(".thumbs1 li:nth-child(even)").addClass("even");
	
	$("#primary_navigation1").mousemove( function(e){
	   e.stopPropagation();
	   // do something 
	});
	
	$("#main_content1 .column1 .block1:last").addClass("last");
		
	// Add rel=nofollow functionality to anchors
	$(".block1.blog-0 a").each(function() {
		$(this).attr('rel', 'nofollow');
	});		
	
});




/*
CSS Browser Selector v0.3.4 (Sep 29, 2009)
Rafael Lima (http://rafael.adm.br)
http://rafael.adm.br/css_browser_selector
License: http://creativecommons.org/licenses/by/2.5/
Contributors: http://rafael.adm.br/css_browser_selector#contributors

Available OS Codes [os]:

    * win - Microsoft Windows
    * linux - Linux (x11 and linux)
    * mac - Mac OS
    * freebsd - FreeBSD
    * ipod - iPod Touch
    * iphone - iPhone
    * webtv - WebTV
    * mobile - J2ME Devices (ex: Opera mini)

Available Browser Codes [browser]:

    * ie - Internet Explorer (All versions)
    * ie8 - Internet Explorer 8.x
    * ie7 - Internet Explorer 7.x
    * ie6 - Internet Explorer 6.x
    * ie5 - Internet Explorer 5.x
    * gecko - Mozilla, Firefox (all versions), Camino
    * ff2 - Firefox 2
    * ff3 - Firefox 3
    * ff3_5 - Firefox 3.5 new
    * opera - Opera (All versions)
    * opera8 - Opera 8.x
    * opera9 - Opera 9.x
    * opera10 - Opera 10.x
    * konqueror - Konqueror
    * webkit or safari - Safari, NetNewsWire, OmniWeb, Shiira, Google Chrome
    * safari3 - Safari 3.x
    * chrome - Google Chrome
    * iron - SRWare Iron new


*/
function css_browser_selector(u){var ua = u.toLowerCase(),is=function(t){return ua.indexOf(t)>-1;},g='gecko',w='webkit',s='safari',o='opera',h=document.getElementsByTagName('html')[0],b=[(!(/opera|webtv/i.test(ua))&&/msie\s(\d)/.test(ua))?('ie ie'+RegExp.$1):is('firefox/2')?g+' ff2':is('firefox/3.5')?g+' ff3 ff3_5':is('firefox/3')?g+' ff3':is('gecko/')?g:is('opera')?o+(/version\/(\d+)/.test(ua)?' '+o+RegExp.$1:(/opera(\s|\/)(\d+)/.test(ua)?' '+o+RegExp.$2:'')):is('konqueror')?'konqueror':is('chrome')?w+' chrome':is('iron')?w+' iron':is('applewebkit/')?w+' '+s+(/version\/(\d+)/.test(ua)?' '+s+RegExp.$1:''):is('mozilla/')?g:'',is('j2me')?'mobile':is('iphone')?'iphone':is('ipod')?'ipod':is('mac')?'mac':is('darwin')?'mac':is('webtv')?'webtv':is('win')?'win':is('freebsd')?'freebsd':(is('x11')||is('linux'))?'linux':'','js']; c = b.join(' '); h.className += ' '+c; return c;}; css_browser_selector(navigator.userAgent);
