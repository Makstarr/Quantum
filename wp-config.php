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
define( 'DB_NAME', 'newone' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'BmR8n7ZB/B3oH&kqZvD9)]3J-D7CCI[zf$=<:KTe]A(UUWr[YLdwjN%b<Ff@LB%{' );
define( 'SECURE_AUTH_KEY',  'z#wb~n14[kEr4@z.$tV-sjV2$^OI.#b*6Y]u-!6y2@`c4+u~oV^Fg?)mD,,wrZ.9' );
define( 'LOGGED_IN_KEY',    'b!ZtjsEE;m:.H8D.IR~HydfR|bOZ+m1On*9TQk.h.HlJu;lU!:1@R)2mh`V_F+-{' );
define( 'NONCE_KEY',        '9w=$sHVDUf1!~grr @||iSR;D)I&,YPY<n.m$@L=>(XK)X>Hq7H0~3uJb%aSRbS_' );
define( 'AUTH_SALT',        'ohQ_LI;0h+9N-qBh:.bg!5b=RwO#I#RBGb3*FCBn_&Xj}aquujJ?+0N&Er*kCr0{' );
define( 'SECURE_AUTH_SALT', '&#.i%6) an,qYC]HkJBYk0H8IS^KUAn3XNWWlyIg[~v^@^i+*GfeKG4tPB@%e>mJ' );
define( 'LOGGED_IN_SALT',   '&Sknp5VO&6I]}Tnj>ELW*lqIDcV.eUR+W)#7c2j~8KM>Xu2~ol|v}xsYbP28bq;F' );
define( 'NONCE_SALT',       'q(<x7,bXKD7=8qR?^Xx,F4nFtj@3<~u;6/^%G[y J>`Hj$R,y7FzJagXlQVhKLPr' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
