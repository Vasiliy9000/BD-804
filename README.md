Создать компонент logo. Компонент забирает данные по логотипу в хедере или футере из элемента "cargonomica_main" ИБ "Cargonomica - Настройки шаблона сайта". Код элемента, коды свойств, в которых хранятся данные, и идентификатор ИБ передаются через параметры компонента. Работа компонента кешируется на длительный срок (год).

Создать 3 шаблона компонента - header footer_desktop, footer_mobile. Интегрировать вёрстку в шаблоны компонента. Учесть, что логотип является некликабельным на главной (во всех случаях).

Подключить компонент в хедере вместо статичной вёрстки логотипа.

Подключить компонент в футере вместо статичной вёрстки логотипа (подключается дважды - для десктопа и мобилки отдельно).

Что было сделано:

Создан компонент logo.
Созданы 3 шаблона компонента - header footer_desktop, footer_mobile. Интегрирована вёрстка в шаблоны компонента. 

 

реализована проверка страницы для кликабельности компонента 
 

Решен конфликт веток
 

Ссылка на MR:

 https://gitlab.cargonomica.com/bitrix-php/cargonomica-web-sites/-/merge_requests/23

 

План-тест:

 

Что было сделано:

Исправленны ошибки и кодстаил 

реализована проверка страницы для кликабельности компонента 

 

Ссылка на MR:

https://gitlab.cargonomica.com/bitrix-php/cargonomica-web-sites/-/merge_requests/23

 

План-тест:

 

Уровень прав:

любой

 

Что: 

Логотипы

 

Ожидаемое поведение: 

Загрузка логотипов через административную панель.
Корректное отображение в корректных местах на сайте cargonomica. Корректность работы с мобильной и десктоп версией. 
Некликабельность этих логотипов.
 

Где/Как:

 

Настройки для проверки картинки логотипа

В админ панели сайта cargonomica
контент -> cargonimica - общее -> cargonimica - настройки шаблона сайта -> элементы -> настройки шаблона
найти параметры: 
Логотип в хедере - картинка (десктоп):
Логотип в хедере - картинка (планшет и мобилка):
Логотип в футере - картинка (десктоп):
Логотип в футере - картинка (планшет и мобилка):
Отражение для проверки картинки логотипа

       (ваш хост).cargonomica.dvp ( мобильная и десктопная версия )

 

Настройки для проверки кликабельности

В админ панели сайта cargonomica
Контент -> Структура сайта -> Файлы и папки
Добавить -> Добавить файл  
Имя файла ( например title.php ) будет новой страницей сайта. Нажать применить/сохранить 
 

Отражение для проверки картинки логотипа

       (ваш хост).cargonomica.dvp/(имя созданного файла)  ( мобильная и десктопная версия )

например cargonomica.dvp/title.php

 

Зачем:

 1) проверка картинки логотипа 

Логотип в хедере - картинка (десктоп):
Заполнить, посмотреть отображение на сайте в десктоп версии
Логотип в футере - картинка (десктоп):
Заполнить, посмотреть отображение на сайте в десктоп версии
Логотип в хедере - картинка (планшет и мобилка)
Заполнить, посмотреть отображение на сайте в мобильной версии
Логотип в футере - картинка (планшет и мобилка):
Заполнить, посмотреть отображение на сайте в мобильной версии
 

2) проверка кликабельности 

Создать страницу проверить кликабельность логотипа на десктопах и мобильных. 
На главной странице проверить кликабельность логотипа на десктопах и мобильных. 
 

 
