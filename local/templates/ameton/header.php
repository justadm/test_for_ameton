<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!doctype html>
<html lang="ru">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?$APPLICATION->ShowTitle();?></title>
	<meta name="discription" content="Тестовое задание Ameton на проект ВкусВилл">
	<meta name="author" content="@Jstadm – Алексей Теплинский">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
	<?$APPLICATION->ShowHead();?>
	<link rel="stylesheet" type="text/css" href="/bitrix/css/main/bootstrap_v4/bootstrap.min.css">
	<script src="/bitrix/js/main/jquery/jquery-3.6.0.min.js"></script>
</head>
<body class="bx-green">
<div id="panel">
	<?$APPLICATION->ShowPanel();?>
</div>
<header class="site-header">
    <div class="container">
      <header class="header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-3 py-2">
            <a class="text-success" href="/news/">Новости</a>
          </div>
          <div class="col-6 text-center">
            <a class="header-logo text-secondary" href="https://docs.google.com/document/d/1ps-FUT-8WzNHPKTnQlSlK1rzy3HwoMY1SM8OEyp8YTA/edit?pli=1">Тестовое задание Ameton</a>
          </div>
          <div class="col-3 d-flex justify-content-end align-items-center">
            <a class="text-success" href="1" aria-label="Search">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Поиск</title><circle cx="10.5" cy="10.5" r="7.5"></circle><path d="M21 21l-5.2-5.2"></path></svg>
            </a>
            <a class="btn btn-sm btn-outline-success" href="/auth/">Авторизоваться</a>
          </div>
        </div>
      </header>

        <div class="nav-scroller py-1 mb-3">
            <nav class="nav d-flex justify-content-between">
                <a class="py-2 text-success" href="/">Главная</a>
                <a class="p-2 text-success" href="/news/">Новости</a>
                <a class="py-2 text-success" href="/">Контакты</a>
            </nav>
        </div>
      
    </div>
</header>
    
<main role="main" class="container">
    <div class="row mb-3">
