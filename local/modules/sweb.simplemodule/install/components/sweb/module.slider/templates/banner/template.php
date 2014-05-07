<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<!-- 
Шаблон вывода баннера
30.10.2013 
Stanislav WEB
-->
<style>
    ul.bxbanner li {
	position: absolute;
	list-style-type: none;
    } 
</style>
<!-- IPhone Banner Start -->
<ul class="bxbanner">
    <?php
    foreach($arParams as $key => $value) 
    {
	if(strpos($key, "IMAGE") !== false && strpos($key, "~") === false && strpos($key, "LINK") == false)
	{
	    if(!empty($value)) 
	    {
		// прошло изображение
		echo '<li onclick="javascript:location.href=\''.$arParams[$key."_LINK"].'\'">';
		    echo '<img src="'.$value.'" />';
		echo '</li>';
	    }
	}
    }
    ?>
</ul>
<!-- IPhone Banner End -->

<!-- Script Configuration -->
<script type="text/javascript">

$(document).ready(function(){
    
    $('.bxbanner').bxSlider({
	// произвожу настройки согласно параметрам компонента
	<?php echo ($arParams['MODE'])			? "mode: '".$arParams['MODE']."',".PHP_EOL			: ""?>
	<?php echo ($arParams['PAUSE'])			? "pause: ".$arParams['PAUSE'].",".PHP_EOL			: ""?>
	<?php echo ($arParams['MARGIN'])		? "slideMargin: '".$arParams['MARGIN']."',".PHP_EOL		: ""?>
	<?php echo ($arParams['STARTSLIDE'])		? "startSlide: '".$arParams['STARTSLIDE']."',".PHP_EOL		: ""?>
	<?php echo ($arParams['RANDOMSTART'])		? "randomStart: ".$arParams['RANDOMSTART'].",".PHP_EOL		: ""?>
	<?php echo ($arParams['INFINITELOOP'])		? "infiniteLoop: ".$arParams['INFINITELOOP'].",".PHP_EOL	: ""?>
	<?php echo ($arParams['CAPTIONS'])		? "captions: ".$arParams['CAPTIONS'].",".PHP_EOL		: ""?>
	<?php echo ($arParams['ADAPTIVEHEIGHT'])	? "adaptiveHeight: ".$arParams['ADAPTIVEHEIGHT'].",".PHP_EOL	: ""?>
	<?php echo ($arParams['USECSS'])		? "useCSS: ".$arParams['USECSS'].",".PHP_EOL			: ""?>
	<?php echo ($arParams['TOUCHENABLED'])		? "touchEnabled: ".$arParams['TOUCHENABLED'].",".PHP_EOL	: ""?>
	<?php echo ($arParams['AUTODELAY'])		? "autoDelay: '".$arParams['AUTODELAY']."',".PHP_EOL		: ""?>
	<?php echo ($arParams['PAGER'])			? "pager: ".$arParams['PAGER'].",".PHP_EOL			: ""?>
	<?php echo ($arParams['PAGERTYPE'])		? "pagerType: '".$arParams['PAGERTYPE']."',".PHP_EOL		: ""?>
	<?php echo ($arParams['CONTROLS'])		? "controls: ".$arParams['CONTROLS'].",".PHP_EOL		: ""?>
	<?php echo ($arParams['AUTO'])			? "auto: ".$arParams['AUTO'].",".PHP_EOL			: ""?>
	<?php echo ($arParams['AUTOCONTROLS'])		? "autoControls: ".$arParams['AUTOCONTROLS'].",".PHP_EOL	: ""?>
    });
});
</script>
<!-- Script Configuration -->


