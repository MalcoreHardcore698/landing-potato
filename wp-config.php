<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wordpress_demo');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'J26^u3u9?622g(&eA{qI!9~}zSeeiC11*35l}pykPr7$ygyfk[VnjftYaY]i;hfe');
define('SECURE_AUTH_KEY',  'q^P0w|6hz1^=&Da?S)tS{hP!yW<>=9>SWFQO/A9o=_=y^DTenrO__D8[Z?ZHV*FX');
define('LOGGED_IN_KEY',    '.zu[a`H}kMt~F@KPh-O!?Q!SYI}[w+x*/X*Q4Zvw%0^OnjS^]LQ>]UEC-Xp<bbXf');
define('NONCE_KEY',        '|:;}~&FkgVlSN)dDSpFJ`H<,g!t[p4Ab?OU/LUm{XR_C{y&q{#H-(Q#BwPQlmp[B');
define('AUTH_SALT',        '!n9e+.karhse*2MH+,y1zNSB$tFX*G0=9=pPsM.:tcEuz>8R1nFPR6>NIzJQ)K>a');
define('SECURE_AUTH_SALT', '0>I*pToaDL!)d5y.}Z1 ,Q(vM5:>YGs9#>d!NuY(wp+!~@Pf8e*Km9458HEH*HAt');
define('LOGGED_IN_SALT',   '-E1d#g,~w~k[1@<#6:$kZkUsA;uugtkqq=-rmhl;HsH}/ivFKT>E40Q3nuU {n3J');
define('NONCE_SALT',       '0hH@Afg#XA0#l)}p%;UV3v,Z7]N6*%+jo~TU&Z?xCdLtC]h-I{3KR!Sg}m&.(Or?');

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
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
