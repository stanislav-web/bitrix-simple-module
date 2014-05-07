<?php

/**
 * 29.10.2013
 * Компонент main.slider
 * Параметры компонента
 * Stanislav WEB
 */
// Запрещаем прямой доступ
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arComponentParameters = array(
    
    /**
     * Группы
     */
    
    'GROUPS' => array(
	'IMAGES' => array(
	    'NAME' => GetMessage('TRANSLATE_GROUPS_IMAGES') ,
	) ,
	'SETTINGS' => array(
	    'NAME' => GetMessage('TRANSLATE_GROUPS_GLOBAL') ,
	) ,
	'NAVIGATION' => array(
	    'NAME' => GetMessage('TRANSLATE_GROUPS_NAVIGATION') ,
	) ,
    ) ,
    
    /**
     * Параметры настройки слайдера
     */
    
    'PARAMETERS' => array(
	'IMAGE1' => array(
	    // Загрузите изображения для слайдера
	    'NAME' => GetMessage('TRANSLATE_IMAGES') ,
	    'TYPE' => 'FILE' ,
	    'FD_TARGET' => 'F' ,
	    'FD_EXT' => 'png,gif,jpeg,jpg' ,
	    'FD_UPLOAD' => true ,
	    'FD_MEDIALIB_TYPES' => array(
		'image') ,
	    'DEFAULT' => 'banners' ,
	    
	    'PARENT' => 'IMAGES' ,
	) ,
	'IMAGE1_LINK' => array(
	    // Ссылка на первом слайде
	    'NAME' => GetMessage('TRANSLATE_LINK1') ,
	    'TYPE' => 'STRING' ,
	    'MULTIPLE' => 'N' ,
	    'PARENT' => 'IMAGES' ,
	) ,
	
	'IMAGE2' => array(
	    // Загрузите изображения для слайдера
	    'NAME' => GetMessage('TRANSLATE_IMAGES') ,
	    'TYPE' => 'FILE' ,
	    'FD_TARGET' => 'F' ,
	    'FD_EXT' => 'png,gif,jpeg,jpg' ,
	    'FD_UPLOAD' => true ,
	    'FD_MEDIALIB_TYPES' => array(
		'image') ,
	    'DEFAULT' => '' ,
	    'PARENT' => 'IMAGES' ,
	) ,
	'IMAGE2_LINK' => array(
	    // Ссылка на первом слайде
	    'NAME' => GetMessage('TRANSLATE_LINK2') ,
	    'TYPE' => 'STRING' ,
	    'MULTIPLE' => 'N' ,
	    'PARENT' => 'IMAGES' ,
	) ,
	
	'IMAGE3' => array(
	    // Загрузите изображения для слайдера
	    'NAME' => GetMessage('TRANSLATE_IMAGES') ,
	    'TYPE' => 'FILE' ,
	    'FD_TARGET' => 'F' ,
	    'FD_EXT' => 'png,gif,jpeg,jpg' ,
	    'FD_UPLOAD' => true ,
	    'FD_MEDIALIB_TYPES' => array(
		'image') ,
	    'DEFAULT' => '' ,
	    'PARENT' => 'IMAGES' ,
	),
	'IMAGE3_LINK' => array(
	    // Ссылка на первом слайде
	    'NAME' => GetMessage('TRANSLATE_LINK3') ,
	    'TYPE' => 'STRING' ,
	    'MULTIPLE' => 'N' ,
	    'PARENT' => 'IMAGES' ,
	) ,	
	
	'IMAGE4' => array(
	    // Загрузите изображения для слайдера
	    'NAME' => GetMessage('TRANSLATE_IMAGES') ,
	    'TYPE' => 'FILE' ,
	    'FD_TARGET' => 'F' ,
	    'FD_EXT' => 'png,gif,jpeg,jpg' ,
	    'FD_UPLOAD' => true ,
	    'FD_MEDIALIB_TYPES' => array(
		'image') ,
	    'DEFAULT' => '' ,
	    'PARENT' => 'IMAGES' ,
	) ,
	'IMAGE4_LINK' => array(
	    // Ссылка на первом слайде
	    'NAME' => GetMessage('TRANSLATE_LINK4') ,
	    'TYPE' => 'STRING' ,
	    'MULTIPLE' => 'N' ,
	    'PARENT' => 'IMAGES' ,
	) ,
	'IMAGE5' => array(
	    // Загрузите изображения для слайдера
	    'NAME' => GetMessage('TRANSLATE_IMAGES') ,
	    'TYPE' => 'FILE' ,
	    'FD_TARGET' => 'F' ,
	    'FD_EXT' => 'png,gif,jpeg,jpg' ,
	    'FD_UPLOAD' => true ,
	    'FD_MEDIALIB_TYPES' => array(
		'image') ,
	    'DEFAULT' => '' ,
	    'PARENT' => 'IMAGES' ,
	) ,
	'IMAGE5_LINK' => array(
	    // Ссылка на первом слайде
	    'NAME' => GetMessage('TRANSLATE_LINK5') ,
	    'TYPE' => 'STRING' ,
	    'MULTIPLE' => 'N' ,
	    'PARENT' => 'IMAGES' ,
	) ,
	
	'JQUERY' => array(
	    // Подключать jQuery (требуется если не стоит уже)
	    'NAME' => GetMessage('TRANSLATE_JQUERY') ,
	    'PARENT' => 'SETTINGS' ,
	    'TYPE' => 'LIST' ,
	    'DEFAULT' => 'true' ,
	    "VALUES" => array(
		"true" => GetMessage("TRUE") ,
		"false" => GetMessage("FALSE") ,
	    ) ,
	) ,	
	
	'MODE' => array(
	    // Режим
	    'NAME' => GetMessage('TRANSLATE_MODE') ,
	    'PARENT' => 'SETTINGS' ,
	    'TYPE' => 'LIST' ,
	    'DEFAULT' => 'horizontal' ,
	    "VALUES" => array(
		"horizontal" => GetMessage("TRANSLATE_MODE_HORIZONTAL") ,
		"vertical" => GetMessage("TRANSLATE_MODE_VERTICAL") ,
		"fade" => GetMessage("TRANSLATE_MODE_FADE") ,
	    ) ,
	) ,
	
	'PAUSE' => array(
	    // Скорость показа
	    'NAME' => GetMessage('TRANSLATE_PAUSE') ,
	    'TYPE' => 'INTEGER' ,
	    'MULTIPLE' => 'N' ,
	    'PARENT' => 'SETTINGS' ,
	) ,
	
	'MARGIN' => array(
	    // Расстояние между слайдами
	    'NAME' => GetMessage('TRANSLATE_MARGIN') ,
	    'TYPE' => 'INTEGER' ,
	    'MULTIPLE' => 'N' ,
	    'PARENT' => 'SETTINGS' ,
	) ,
	
	'STARTSLIDE' => array(
	    // Стартовый слайд
	    'NAME' => GetMessage('TRANSLATE_STARTSLIDE') ,
	    'TYPE' => 'INTEGER' ,
	    'MULTIPLE' => 'N' ,
	    'PARENT' => 'SETTINGS' ,
	) ,
	
	'RANDOMSTART' => array(
	    // Показывать в случайном порядке
	    'NAME' => GetMessage('TRANSLATE_RANDOMSTART') ,
	    'PARENT' => 'SETTINGS' ,
	    'TYPE' => 'LIST' ,
	    'DEFAULT' => 'true' ,
	    "VALUES" => array(
		"true" => GetMessage("TRUE") ,
		"false" => GetMessage("FALSE") ,
	    ) ,
	) ,
	
	'INFINITELOOP' => array(
	    // Зацикливать при кликах
	    'NAME' => GetMessage('TRANSLATE_INFINITELOOP') ,
	    'PARENT' => 'SETTINGS' ,
	    'TYPE' => 'LIST' ,
	    'DEFAULT' => 'true' ,
	    "VALUES" => array(
		"true" => GetMessage("TRUE") ,
		"false" => GetMessage("FALSE") ,
	    ) ,
	) ,
	
	'EASING' => array(
	    // Режим вращения слайдов
	    'NAME' => GetMessage('TRANSLATE_EASING') ,
	    'PARENT' => 'SETTINGS' ,
	    'TYPE' => 'LIST' ,
	    'DEFAULT' => 'null' ,
	    "VALUES" => array(
		"linear" => "linear" ,
		"swing" => "swing" ,
		"ease" => "ease" ,
		"ease-in" => "ease-in" ,
		"ease-out" => "ease-out" ,
		"ease-in-out" => "ease-in-out" ,
		'easeOutElastic' => "easeOutElastic",
	    ) ,
	) ,
	
	'CAPTIONS' => array(
	    // Использовать заголовки описания картинок
	    'NAME' => GetMessage('TRANSLATE_CAPTIONS') ,
	    'PARENT' => 'SETTINGS' ,
	    'TYPE' => 'LIST' ,
	    'DEFAULT' => 'false' ,
	    "VALUES" => array(
		"true" => GetMessage("TRUE") ,
		"false" => GetMessage("FALSE") ,
	    ) ,
	) ,
	
	'ADAPTIVEHEIGHT' => array(
	    // Адаптировать высоту слайдера под изображения
	    'NAME' => GetMessage('TRANSLATE_ADAPTIVEHEIGHT') ,
	    'PARENT' => 'SETTINGS' ,
	    'TYPE' => 'LIST' ,
	    'DEFAULT' => 'false' ,
	    "VALUES" => array(
		"true" => GetMessage("TRUE") ,
		"false" => GetMessage("FALSE") ,
	    ) ,
	) ,
	
	'USECSS' => array(
	    // Использовать ручное оформление слайдов
	    'NAME' => GetMessage('TRANSLATE_USECSS') ,
	    'PARENT' => 'SETTINGS' ,
	    'TYPE' => 'LIST' ,
	    'DEFAULT' => 'false' ,
	    "VALUES" => array(
		"true" => GetMessage("TRUE") ,
		"false" => GetMessage("FALSE") ,
	    ) ,
	) ,
	
	'TOUCHENABLED' => array(
	    // Использовать Touch прокрутку
	    'NAME' => GetMessage('TRANSLATE_TOUCHENABLED') ,
	    'PARENT' => 'SETTINGS' ,
	    'TYPE' => 'LIST' ,
	    'DEFAULT' => 'true' ,
	    "VALUES" => array(
		"true" => GetMessage("TRUE") ,
		"false" => GetMessage("FALSE") ,
	    ) ,
	) ,
	
	'PAGER' => array(
	    // Показвать навигацию в виде страниц
	    'NAME' => GetMessage('TRANSLATE_PAGER') ,
	    'PARENT' => 'NAVIGATION' ,
	    'TYPE' => 'LIST' ,
	    'DEFAULT' => 'true' ,
	    "VALUES" => array(
		"true" => GetMessage("TRUE") ,
		"false" => GetMessage("FALSE") ,
	    ) ,
	) ,
	
	'PAGERTYPE' => array(
	    // Режим постраничной навигации
	    'NAME' => GetMessage('TRANSLATE_PAGERTYPE') ,
	    'PARENT' => 'NAVIGATION' ,
	    'TYPE' => 'LIST' ,
	    'DEFAULT' => 'full' ,
	    "VALUES" => array(
		"full" => GetMessage("TRANSLATE_PAGERTYPE_FULL") ,
		"short" => GetMessage("TRANSLATE_PAGERTYPE_SHORT") ,
	    ) ,
	) ,
	
	'CONTROLS' => array(
	    // Кнопки контроля "Next" / "Prev"
	    'NAME' => GetMessage('TRANSLATE_CONTROLS') ,
	    'PARENT' => 'NAVIGATION' ,
	    'TYPE' => 'LIST' ,
	    'DEFAULT' => 'true' ,
	    "VALUES" => array(
		"true" => GetMessage("TRUE") ,
		"false" => GetMessage("FALSE") ,
	    ) ,
	) ,

	'AUTO' => array(
	    // Кнопки контроля "Start" / "Stop"
	    'NAME' => GetMessage('TRANSLATE_AUTO') ,
	    'PARENT' => 'NAVIGATION' ,
	    'TYPE' => 'LIST' ,
	    'DEFAULT' => 'true' ,
	    "VALUES" => array(
		"true" => GetMessage("TRUE") ,
		"false" => GetMessage("FALSE") ,
	    ) ,
	) ,
	
	'AUTOCONTROLS' => array(
	    // Кнопки контроля "Start" / "Stop"
	    'NAME' => GetMessage('TRANSLATE_AUTOCONTROLS') ,
	    'PARENT' => 'NAVIGATION' ,
	    'TYPE' => 'LIST' ,
	    'DEFAULT' => 'true' ,
	    "VALUES" => array(
		"true" => GetMessage("TRUE") ,
		"false" => GetMessage("FALSE") ,
	    ) ,
	) ,
	
	'AUTO' => array(
	    // Запускать слайдер автоматически при загрузке страницы
	    'NAME' => GetMessage('TRANSLATE_AUTO') ,
	    'PARENT' => 'SETTINGS' ,
	    'TYPE' => 'LIST' ,
	    'DEFAULT' => 'true' ,
	    "VALUES" => array(
		"true" => GetMessage("TRUE") ,
		"false" => GetMessage("FALSE") ,
	    ) ,
	) ,
	
	'AUTODELAY' => array(
	    // Время показа каждого слайда (в мил.с)
	    'NAME' => GetMessage('TRANSLATE_AUTODELAY') ,
	    'TYPE' => 'INTEGER' ,
	    'MULTIPLE' => 'N' ,
	    'PARENT' => 'SETTINGS' ,
	), 
	
	/**
	 * Служебные (кэширование настроек компонента)
	 */
	"CACHE_TIME" => array(
	    "DEFAULT" => 3600
	    ) ,
    )
);
?>