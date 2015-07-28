<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'artur');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'qswaed');

/** Имя сервера MySQL */
define('DB_HOST', 'https://194.28.85.153/manager/ispmgr');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-+_qx5A[IOrx{=,F+i9sUo0-~Y[YS,G[4_(knVinNZ,&iR|G&D7E?R`uo;u+m.nx');
define('SECURE_AUTH_KEY',  '64-krhqvV`lzhjZg-beDWA!mvMXk8+qnU J$<M4Sm|-#xE+yPE?d- qi%S&8vdf$');
define('LOGGED_IN_KEY',    'tc*@IQ-B`B}njnhjO,kyp0xo)}(3x4OG;<}CQ%08:wZntp@&C2i9T-y!-4f?%2-5');
define('NONCE_KEY',        'TMxKIH6|tS5S+4HNZ3%)w!#4R&XE<VW+2:@<26;pGB*s|vt6f]?nQ51-i0ig$}(h');
define('AUTH_SALT',        '$[m>mGm3iK}Z/QUNL|c$KJ40(:4qm}NKJ#I3;Nd|mz~&m[/9%us!|8Pqfz9AW{;!');
define('SECURE_AUTH_SALT', '^DI=PvaL.ATm}5%YI2WAIt#_~ET4nf+6b!=K{&Lj)9-Eu.LZ^:Ea=klj6l8HCDiV');
define('LOGGED_IN_SALT',   'ON@Y:K<#*29DOG`:%x^PX7|K5`5s0gJ($~Wi^qi_}~&C5499C<k)-=CWVyokp.YP');
define('NONCE_SALT',       'm:*4S7PRQieidKFrX(P0=INrX)_|y|/zP1$nhmMxZ*^iS%FruCm_Uph>ww!s!jGl');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');