<?php
 /**
 * 29.10.2013
 * Компонент main.slider
 * Описание компонента
 * Stanislav WEB
 */
 
// Запрещаем прямой доступ
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$arComponentDescription = array(
    "NAME" 		=> GetMessage('SLIDER_TITLE'), 			// имя копонента
    "DESCRIPTION" 	=> GetMessage('SLIDER_DESCRIPTION'), 		// описание компонента
    "ICON" 			=> "/images/icon.gif", 			// логотип в режиме редактирования компонента
    "PATH" 			=> array( 				// путь в древе компонентов
					    "ID" => "utility",		// системное имя раздела в древе компонентов
					),
    "SORT" 		=> 20,						// сортировка
    "CACHE_PATH" 	=> "Y", 					// показывать кнопку очистки кэша
    "COMPLEX"		=> "N"						// Y - комплексный компонент
); 
?>