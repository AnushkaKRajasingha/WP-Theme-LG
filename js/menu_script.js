(function($){
	var _prev_menu = null;
	var _curr_menu = null;	
	$('ul#menu-primary-navigation > li > ul.sub-menu li.menu-item-has-children').click(function(){
		toggle_menu(this);
	});	
	$('ul.sidebar-nav > li.menu-item-has-children').click(function(){
		toggle_menu(this);		
	});	
	var toggle_menu = function($this){		
		_curr_menu = $($this).find('.sub-menu');		
		if(_prev_menu != null){
			$(_prev_menu).hide();
			if(_prev_menu[0] == _curr_menu[0]){
				_prev_menu = null;
				return;
			}
		}
		$($this).find('.sub-menu').slideToggle();
		_prev_menu = $($this).find('.sub-menu') ;
	};
})(jQuery)