function validateFrmAddUser() {
	if ($("#login").value == "") {
	   alert("The username field cannot be left blank.");
	   document.frm_add.login.select();	
	   return false;
	}
	if ($("#password").val() == "") {
	   alert("The password field cannot be left blank.");
	   document.frm_add.password.select();	
	   return false;
	}	
	if ($("#password").val() != $("#repass").val()) {
	   alert("The password must match,\nplease verify them.");
	   document.frm_add.password.focus();	
	   return false;
	}		
	return true;
}

function verifyExistingUser() {	
	$("#div-process").css({display:"block"});	
	$("#target").css({display:"block"});		
	$.ajax({
		url: "ajax.php?action=verify&login="+$("#login").val(),
		cache: false,
		success: function(html){
			$("#target").html(html);
			$("#target").css({display:"block"});	
			$("#div-process").css({display:"none"});					
		}
	});
	return false;
}

function exit(el, path) {					
	el=document.getElementById(el);		
	$(el).css({display:"block"});
	$(el).html("Processing request...");
	$.ajax({
		url: path,
		cache: false,
		success: function(html){
			$(el).html(html);
			window.location='../login.php';			
		}
	});
	return false;
}

function selectFeedType(feed_url,username){
		if( $('#source').val() != 'Rss'){
			$('#import_as').hide();
			$('#url_label').text($('#source').val() + username) ;
		}else{
			$('#import_as').show();
			$('#url_label').text(feed_url);
		}
}

$(function(){
	
	// Fancy tooltip 
	var t = '';
	$(".help").hover(function(e){
		t = $(this).attr('title');
		$(this).removeAttr('title').animate({opacity:1.0},500,function(){
			if($("#context_help").get().length < 1){
				$('.box:last').append('<div id="context_help"></div>');
			}
			$('#context_help').hide().html(t).css({left:e.pageX, top:e.pageY + 20}).fadeIn(300);
		});
	},function(){
		$(this).stop().attr('title',t);
		$('#context_help').fadeOut('fast', function(){$(this).css({left:0, top:0})});
	});
	
});