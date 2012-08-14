(function( $ ){
	
	var initAjax = function(){
		$(document).ajaxSuccess(function ( e, xhr, settings ){
			if(xhr.responseText){
				var json = $.parseJSON(xhr.responseText);
				if( typeof json === 'object'){
					$.each(json, function(responseID, oJobs){
						if( typeof oJobs === 'object'){
							$.each(oJobs, function(index, oJob){
								if ( typeof oJob === 'object') {
									process(oJob);
								}					
							});	
						}
					});
				}
			}
		});
	};
	
	var process = function(oJob){
		if(hasData()){
			var data = getData();
			if(action = data.actions[oJob._do]){
				action(oJob);
			}
		}
	};
	
	var setData = function(data){
		return $(document).data('PAX',data);
	};
	var getData = function(){
		return $(document).data('PAX');
	};
	var hasData = function(){
		if(typeof getData() != 'object'){
			return false;
		}else{
			return true;
		}
	};
	var addActions = function(oActions) {
		if(hasData()){
			var data = getData();
			data.actions = $.extend(data.actions, oActions);
			setData(data);
		}
	};
	
	var builtinActions = {
	};
	
	var defaultData = {
		actions: builtinActions
	};
	
	var methods = {
		init : function(options){
			if(!hasData()){
				setData(defaultData);
				initAjax();
			}
		},
		addActions : function(oActions) {
			addActions(oActions);
		},
		destroy : function(){
			
		}
	};
	
	$.PAX = function( method ){
		if(methods[method]) {
			method = methods[method];
			arguments = Array.prototype.slice.call(arguments, 1);
		} else if( typeof(method) == 'object' || !method ) {
			method = methods.init;
		} else {
			$.error( 'Method ' +  method + ' does not exist on jQuery.PAX' );
			return this;
		}
 
		return method.apply(this, arguments);
	};
	
})( jQuery );

$.PAX();