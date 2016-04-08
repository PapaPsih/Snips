<?php
	/*
		Вывод ошибок и предупреждений
	*/
	ini_set("display_errors",1);
	error_reporting(E_ALL);
	/*
		Скрывать ошибки	
	*/
	error_reporting(0);
	/*
		Установка кодировки по-умолчанию 
	*/
	header('Content-Type: text/html; charset=utf-8');

	/*
		Доступ из javascript к php-скрипту из любого домена
	*/
	header('Access-Control-Allow-Origin: *');
