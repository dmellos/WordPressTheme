<style type="text/css">
	
#middlebar {
	display:block;
    
    height: 250px;
}

#middlebar1 {
	height: 250px;
	width: 340px;
}

#middlebar2 {
	height: 250px;
	width: 340px;
}

#middlebar3 {
	width: 340px;
	height: 250px;
}

</style>	
<div class="row" id="middlebar">
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
	<div>
		<?php
		if(is_active_sidebar('middlebar-1')){
		dynamic_sidebar('middlebar-1');
		}
		?>
	</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
	<div>
		<?php
		if(is_active_sidebar('middlebar-2')){
		dynamic_sidebar('middlebar-2');
		}
		?>	
	</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
	<div>
		<?php
		if(is_active_sidebar('middlebar-3')){
		dynamic_sidebar('middlebar-3');
		}
		?>
	</div>
</div>

</div>
