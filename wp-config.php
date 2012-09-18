<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'sucsid');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '&J;-2yC{Wh,Bh`um4g1$ILk/^O}^N~M(*inKBc{@T,R<g=N<b}5.E#v?k=|})J]S');
define('SECURE_AUTH_KEY',  'X.0OsBi$XeT_}``6a+%wFj)aqyGAIv^R!Rcv4)i$l):8%L9)3F[GJk zpH,M<)Y ');
define('LOGGED_IN_KEY',    '][}AY4OA,6ef%|[v!Fe$=|3bmh&Q.Sn:h@5M,Ub{=M9%`j[Cr{9[I|;eUE%{~gNd');
define('NONCE_KEY',        '$s3mr8F$n!yr9Xow68991Ve@x^h!#Kj:rbJDJ6pZ1+3G@CUnGm{.Q~JCZx!Px_M,');
define('AUTH_SALT',        '{p+G[VG:k.dYsd{a^6hzfw!k`*d/y~e@M)G)A*KXXfuST8;=W3J5@Lq_/ B C]@Z');
define('SECURE_AUTH_SALT', '<p:Dj<Xw-}-U)8^x ?mKJ}8jCPmaJ(h]PKfvBHtN-d(hRoH-5sxdC1`F@g>:m1k|');
define('LOGGED_IN_SALT',   '(]GE7qSxdx>C?xqzdsO-@hGfIV/* uIu%Ovp,{e|iyUG-BmC hm|z5R#ifTc}Jm5');
define('NONCE_SALT',       '1k,=vvoTFLf-lrj<#mVo~|@EB4Z_x<K~qNmOC{ygID?-;R5Lg{2qg;jj?AM3>9hi');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'ss_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'en_US');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
