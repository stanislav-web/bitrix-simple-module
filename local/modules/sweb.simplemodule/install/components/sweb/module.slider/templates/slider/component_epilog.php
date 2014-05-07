<?php
 /**
 * 29.10.2013
 * Эпилог. (отрабатывает после загрузки шиблона компонента)
 * Stanislav WEB
 */
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

// подключаю jQuery
if($arParams['JQUERY'] == 'true') $APPLICATION->AddHeadScript("http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js");

// подключаю Javascript и стили плагина

$APPLICATION->AddHeadScript($templateFolder."/js/jquery.bxslider.js");
$APPLICATION->AddHeadScript($templateFolder."/js/plugins/jquery.easing.1.3.js");

$APPLICATION->SetAdditionalCSS($templateFolder."/css/jquery.bxslider.css");

?>