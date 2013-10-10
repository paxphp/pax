(function( $ ){
	
	var initAjax = function(){
		$(document).ajaxSuccess(function ( e, xhr, settings ){
			if(xhr.responseText){
				try{
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
				} catch(e) {
					return false;
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
		return $(document).data('pax',data);
	};
	var getData = function(){
		return $(document).data('pax');
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
			bind 		: function(oJob){	jQuery.globalEval( "$('" + oJob.d + "').bind('" + oJob.e + "', function(){" + oJob.f + ";})" );},
			unbind		: function(oJob){	$(oJob.d).unbind(oJob.e);},
			html 		: function(oJob){	$(oJob.d).html(oJob.c);},
			append 		: function(oJob){	$(oJob.d).append(oJob.c);	},
			prepend		: function(oJob){	$(oJob.d).prepend(oJob.c);	},
			before		: function(oJob){	$(oJob.d).before(oJob.c);	},
			after		: function(oJob){	$(oJob.d).after(oJob.c);	},
			attr 		: function(oJob){	$(oJob.d).attr(oJob.a,oJob.c);	},
			console		: function(oJob){	if(typeof console =="object")console.log(oJob[0]);	},
			alert		: function(oJob){	alert(oJob[0]);	},
			script		: function(oJob){	$(document).ready(function() {jQuery.globalEval(oJob.c);});	},
			css			: function(oJob){	$(oJob.d).css(oJob.p, oJob.v);	},
			addClass	: function(oJob){	$(oJob.d).addClass(oJob.c);	},
			removeClass	: function(oJob){	$(oJob.d).removeClass((typeof oJob.c === "string")?oJob.c:undefined);	},
			_debug		: function(oJob){	console.log(oJob);	}
			
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
	
	$.pax = function( method ){
		if(methods[method]) {
			method = methods[method];
			arguments = Array.prototype.slice.call(arguments, 1);
		} else if( typeof(method) == 'object' || !method ) {
			method = methods.init;
		} else {
			$.error( 'Method ' +  method + ' does not exist on jQuery.pax' );
			return this;
		}
 
		return method.apply(this, arguments);
	};
	
})( jQuery );

$.pax();