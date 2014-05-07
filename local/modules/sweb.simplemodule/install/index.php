<?php
// Подключаю translate
IncludeModuleLangFile(__FILE__);

Class sweb_simplemodule extends CModule {
    
    /**
     * $MODULE_ID
     * @const string ID модуля (директория) 
     */
    const MODULE_ID                 =   'sweb.simplemodule';
    
    /**
     * $DB Идентификатор соединения с БД
     * @var resource
     */
    var $DB                      =   null;
    
    /**
     * $APPLICATION
     * @var object
     */
    var $APPLICATION             =   null;
    
    /**
     * $USER
     * @var object
     */
    var $USER             =   null;

    /**
     * $MODULE_VERSION
     * @var string Версия модуля 
     */    
    var $MODULE_VERSION         =   null;
    
    /**
     * $MODULE_VERSION_DATE
     * @var date Дата создания модуля
     */    
    var  $MODULE_VERSION_DATE    =   null;
    
    /**
     * $MODULE_NAME
     * @var string Название модуля
     */    
    var  $MODULE_NAME            =   null;
    
    /**
     * $MODULE_DESCRIPTION
     * @var string Описание модуля
     */    
    var  $MODULE_DESCRIPTION     =   null;
    
    /**
     * $MODULE_ID
     * @var string ID модуля (директория) 
     */    
    var  $MODULE_CSS             =   null;
    
    /**
     * $PARTNER_NAME
     * @var string Имя партнера в Merketplace
     */    
    var  $PARTNER_NAME           =   null;
    
    /**
     * $PARTNER_URI
     * @var string URL персональная страница партнера
     */    
    var $PARTNER_URI            =   null;
    
    /**
     * $errors контейнер шибками
     * @var $errors              
     */
    var $errors                  = false;
    
    /**
     * Конструктор, по умолчанию присваиваю настройки
     * и забиваю на него в дальнейшем
     */
    function __construct()
    {
        // Вызову все это сдесь чтобы в каждом методе не инициализировать
        global $DB, $APPLICATION;
        
        $this->DB                   = $DB;
        $this->APPLICATION          = $APPLICATION;
        
	$path = str_replace("\\", "/", __FILE__);
	$path = substr($path, 0, strlen($path) - strlen("/index.php"));
	include($path."/version.php");
        
	$this->MODULE_VERSION       = $arModuleVersion["VERSION"];
	$this->MODULE_VERSION_DATE  = $arModuleVersion["VERSION_DATE"];
	$this->MODULE_NAME          = GetMessage("SWEB.MODULE_NAME");
	$this->MODULE_DESCRIPTION   = GetMessage("SWEB.MODULE_DESCRIPTION");
	$this->PARTNER_NAME         = GetMessage("BITRIX.MODULE_PARTNER_NAME");
	$this->PARTNER_URI          = GetMessage("BITRIX.MODULE_PARTNER_URI");
    }        
    
    /**
     * DoInstall() инсталлтор модуля
     * @access public
     * return boolean
     */
    function DoInstall()
    {
        if($this->USER->IsAdmin() && !IsModuleInstalled(self::MODULE_ID))
        {
            // Проверяю что модуль устанавливает админ
            // Запускаю пошаговую установку
            $this->InstallDB();     // устаналиваю таблицы MySQL
            $this->InstallEvents(); // устанавливаю события
            $this->InstallFiles();  // устаналиваю вложенные компоненты
            $this->APPLICATION->IncludeAdminFile(GetMessage("SWEB.MODULE_INSTALL_TITLE"), $_SERVER["DOCUMENT_ROOT"]."/local/modules/".self::MODULE_ID."/install/step.php");
        }
        else $this->APPLICATION->ThrowException(implode("<br>", GetMessage("SWEB.MODULE_INSTALL_ONLY_ADMIN")));
    }
	 
    function DoUninstall()
    {
        if($this->USER->IsAdmin())
        {
            // Проверяю что модуль устанавливает админ
            
            $this->UnInstallDB();       // удаляю таблицы MySQL
            $this->UnInstallEvents();   // удаляю события
            $this->UnInstallFiles();    // удаляю вложенные компоненты    
            $this->APPLICATION->IncludeAdminFile(GetMessage("SWEB.MODULE_UNINSTALL_TITLE"), $_SERVER["DOCUMENT_ROOT"]."/local/modules/".self::MODULE_ID."/install/unstep.php");
            
        }
        else $this->APPLICATION->ThrowException(implode("<br>", GetMessage("SWEB.MODULE_UNINSTALL_ONLY_ADMIN")));        
    }    
    
    /**
     * installEvents
     * @return boolean
     */
    function InstallEvents()
    {
        return true;
    }
    
    /**
     * UnInstallEvents
     * @return boolean
     */
    function UnInstallEvents()
    {
        return true;
    }    
    
    /**
     * Установка файлов
     * @return boolean
     */
    function InstallFiles()
    {
		CopyDirFiles(
			$_SERVER["DOCUMENT_ROOT"]."/local/modules/".self::MODULE_ID."/install/components/",
			$_SERVER["DOCUMENT_ROOT"]."/sweb/components",
			true, true
		);

		CopyDirFiles(
			$_SERVER["DOCUMENT_ROOT"]."/local/modules/".self::MODULE_ID."/install/admin/",
			$_SERVER["DOCUMENT_ROOT"]."/bitrix/admin",
			true, true
		);
		CopyDirFiles(
			$_SERVER["DOCUMENT_ROOT"]."/local/modules/".self::MODULE_ID."/install/themes", 
			$_SERVER["DOCUMENT_ROOT"]."/bitrix/themes", true, true
		);
		return true;
    }
    
    /**
     * Удаление файлов
     * @return boolean
     */        
    function UnInstallFiles()
    {
        DeleteDirFiles($_SERVER["DOCUMENT_ROOT"]."/local/modules/".self::MODULE_ID."/install/admin", $_SERVER["DOCUMENT_ROOT"]."/bitrix/admin");
	DeleteDirFiles($_SERVER["DOCUMENT_ROOT"]."/local/modules/".self::MODULE_ID."/install/themes/.default/", $_SERVER["DOCUMENT_ROOT"]."/bitrix/themes/.default");//css
	DeleteDirFilesEx("/bitrix/themes/.default/icons/".self::MODULE_ID."/");

	return true;
    }    
    
    /**
     * InstallDB() Инсталлятор таблиц в БД
     * @access public
     * @return boolean
     */
    function InstallDB()
    {
        $this->errors = false;
        
        // Для начала проверю таблицу на существование
        if(!$this->DB->Query("SELECT id FROM simplemodule_users WHERE 1=0", true))
	{
            // Запускаю SQL инсталлятор модуля
            $this->errors = $DB->RunSQLBatch($_SERVER["DOCUMENT_ROOT"]."/local/modules/sweb.simplemodule/install/db/".strtolower($this->DB->type)."/install.sql");
        }
	if($this->errors !== false)
	{
            // Выдаю исключение (может быть фатальный результат)
            $this->APPLICATION->ThrowException(implode("<br>", $this->errors));
	}        
        else
        {
            // Все нормально регистрирую модуль и вызываю
            // ставлю в галвное меню админки
            RegisterModuleDependences('main', 'OnBuildGlobalMenu', self::MODULE_ID, 'CBitrixSwebBModule', 'OnBuildGlobalMenu');

            RegisterModule(self::MODULE_ID);
            CModule::IncludeModule(self::MODULE_ID);            
        }
	return true;
    }   
    
    /**
     * UnInstallDB() Деинсталлятор таблиц
     * @access public
     * @return boolean
     */
    function UnInstallDB()
    {
        $this->errors = false;
        $this->errors = $this->DB->RunSQLBatch($_SERVER["DOCUMENT_ROOT"]."/local/modules/sweb.simplemodule/install/db/".strtolower($this->DB->type)."/uninstall.sql");    
            
        // развооружаю модуль )
        UnRegisterModule(self::MODULE_ID);
        
	if($this->errors !== false)
	{
            // Выдаю исключение (может быть фатальный результат)
            $this->APPLICATION->ThrowException(implode("<br>", $this->errors));
	}              
	return true;
    }     
}

