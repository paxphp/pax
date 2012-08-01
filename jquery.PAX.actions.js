(function( $ ){
	var actions = {
			html : function(oJob){	$(oJob.d).html(oJob.c);},
			append : function(oJob){$(oJob.d).append(oJob.c);}	
	};
	$.PAX("addActions", actions);
})( jQuery );