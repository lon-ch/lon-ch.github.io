<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define( 'DB_NAME', 'wordpress01' );

/** MySQL数据库用户名 */
define( 'DB_USER', 'root' );

/** MySQL数据库密码 */
define( 'DB_PASSWORD', 'root' );

/** MySQL主机 */
define( 'DB_HOST', 'localhost' );

/** 创建数据表时默认的文字编码 */
define( 'DB_CHARSET', 'utf8mb4' );

/** 数据库整理类型。如不确定请勿更改 */
define( 'DB_COLLATE', '' );

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         't<N(^96BfGEqqG~.8a:mbol0!!hD;yvUIn`0Q&/v_O>>:M$<q&2B!=v]iK{=bEIa' );
define( 'SECURE_AUTH_KEY',  'gW*yZhJ ==CZe/*SZ~CDuVIGJ=mL9??|5;pj1Yc/pfF,uv#G,Iw%.VA!m19rBUUr' );
define( 'LOGGED_IN_KEY',    '7d@|l<c-Z6*>F!4LVu$.?X|K* (E*vBp8NgH1]WMo+9P-bUULtkT@U7tb:8lBW4v' );
define( 'NONCE_KEY',        '<}u{>WvL;KRm4r3|S.dr,TI3a/FmL:QT;7gwY9?a=r4Fgv `!m/lK,#$bGh.WMb ' );
define( 'AUTH_SALT',        '.o ZCo}G/T]>Y>.;3sqWs]!~rXX])(: M,3u=;jS1FjZ]Hn4p&@@*{]D&Dp:[J`@' );
define( 'SECURE_AUTH_SALT', '+Bkh6GWnF2zh*`xTe5!tLjT]Yz1dM$p(w=^CP-PDafjAl*n$Qcu5UJvJECH9s5^R' );
define( 'LOGGED_IN_SALT',   'bQ-Fie_nJB5=~IC0S1Hc1{x5<%-NOy;:(reh9-WwBbJIvR$Qy/bD~:!:usDUBD/1' );
define( 'NONCE_SALT',       '?.-f;fwcXv<;/pS5_1U(.h}cNn~X15O.}B!*p(!lQ>Wz:6}N.#Pi5xlx(.lf/^q%' );

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** 设置WordPress变量和包含文件。 */
require_once( ABSPATH . 'wp-settings.php' );
