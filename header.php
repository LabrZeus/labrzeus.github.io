<!DOCTYPE html>
<!-- <html lang="ukr"> -->
<html <?php language_attributes();?>>

<head>
<!-- <meta charset="UTF-8"> -->
   <meta charset="<?php bloginfo('charset');?>">

   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="Офіційний сайт КП Водоканал м. Запоріжжя, Україна">
   <meta name="author" content="Горян Єгор">
   <title>"КП" Водоканал</title>

   <?php wp_head();?>


</head>

<!-- <div class="content"></div> -->

<body>
   <div class="wrapper">
      <!-- ***************************** Меню/Лого/Блоки ************************************ -->
      <div class="full-screen">
         <div class="full-screen__body">

            <header class="header">
               <div class="header__container">
                  <!-- php echo get_template_directory_uri(); /assets/images/logo****.png -->
                  <a href="" class="header__logo"></a>
                  <div class="header__menu menu">
                     <div class="menu__icon">
                        <span></span>
                     </div>
                     <nav class="menu__body">
                        <ul class="menu__list">
                           <li>
                              <a href="" class="menu__link">ПРО ПІДПРИЄМСТВО</a>
                              <span class="menu__arrow"></span>
                              <ul class="menu__sub-list">
                                 <li>
                                    <a href="" class="menu__sub-link">Про нас</a>
                                 </li>
                                 <li>
                                    <a href="" class="menu__sub-link">Технології</a>
                                 </li>
                                 <li>
                                    <a href="" class="menu__sub-link">Підготовка кадрів</a>
                                 </li>
                                 <li>
                                    <a href="" class="menu__sub-link">Керівництво</a>
                                 </li>
                                 <li>
                                    <a href="" class="menu__sub-link">Структура</a>
                                 </li>
                                 <li>
                                    <a href="" class="menu__sub-link">Звітність</a>
                                    <span class="menu__arrow"></span>
                                    <ul class="menu__sub-list-2">
                                       <li>
                                          <a href="povidomlenya.html" class="menu__sub-link">Повідомлення</a>
                                       </li>
                                       <li>
                                          <a href="arhiv_tarif.html" class="menu__sub-link">Архів тарифів</a>
                                       </li>
                                       <li>
                                          <a href="subsidia.html" class="menu__sub-link">Субсидії</a>
                                       </li>
                                       <li>
                                          <a href="monitoring.html" class="menu__sub-link">Моніторинг</a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a href="stop_corup.html" class="menu__sub-link">Стоп-корупція</a>
                                 </li>
                                 <li>
                                    <a href="" class="menu__sub-link">Статут</a>
                                 </li>
                                 <li>
                                    <a href="norm_document.html" class="menu__sub-link">Нормативні документи</a>
                                 </li>
                              </ul>
                           </li>
                           <li>
                              <a href="" class="menu__link">ТАРИФИ</a>
                              <span class="menu__arrow"></span>
                              <ul class="menu__sub-list">
                                 <li>
                                    <a href="povidomlenya.html" class="menu__sub-link">Повідомлення</a>
                                 </li>
                                 <li>
                                    <a href="arhiv_tarif.html" class="menu__sub-link">Архів тарифів</a>
                                 </li>
                                 <li>
                                    <a href="subsidia.html" class="menu__sub-link">Субсидії</a>
                                 </li>
                                 <li>
                                    <a href="monitoring.html" class="menu__sub-link">Моніторинг</a>
                                 </li>
                              </ul>
                           </li>
                           <li><a data-goto=".goto__novini" href="#" class="menu__link">НОВИНИ</a></li>
                           <li><a href="" class="menu__link">КОНТАКТИ</a></li>
                           <li><a href="" class="menu__link">ВАКАНСІЇ</a></li>
                        </ul>
                     </nav>
                  </div>
               </div>
            </header>