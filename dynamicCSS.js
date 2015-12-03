
(function ( $ ) {
 
    $.fn.delayCss = function(delay,name,value) {
      	this.delay(delay)
  			.queue(function (next) { 
    			$(this).css(name,value); 
    			next(); 
  			});
        return this;
    };

    $.fn.delayAddClass = function(delay,arg) {
      	this.delay(delay)
  			.queue(function (next) { 
    			$(this).addClass(arg)
    			next(); 
  			});
        return this;
    };   
 
    $.fn.delayRemoveClass = function(delay,arg) {
      	this.delay(delay)
  			.queue(function (next) { 
    			$(this).removeClass(arg)
    			next(); 
  			});
        return this;
    };   



}( jQuery ));
