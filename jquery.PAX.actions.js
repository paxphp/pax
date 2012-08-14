(function( $ ){
	var actions = {
			bind 	: function(oJob){	jQuery.globalEval( "$('" + oJob.d + "').bind('" + oJob.e + "', function(){" + oJob.f + ";})" );},
			unbind	: function(oJob){	$(oJob.d).unbind(oJob.e);},
			html 	: function(oJob){	$(oJob.d).html(oJob.c);},
			append 	: function(oJob){$(oJob.d).append(oJob.c);},
			attr 	: function(oJob){$(oJob.d).attr(oJob.a,oJob.c);},
			prepend	: function(oJob){$(oJob.d).prepend(oJob.c);},
			console	: function(oJob){if(typeof console =="object")console.log(oJob[0]);},
			alert	: function(oJob){alert(oJob[0]);},
			script	: function(oJob){$(document).ready(function() {jQuery.globalEval(oJob.c);});}
	};
	$.PAX("addActions", actions);
})( jQuery );