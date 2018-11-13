<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'fundacion');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'ml}YWKtjysb4Xx!P5deXhSwGrGFOQ45[a?^64~ASr5y-bZ&w/@L%txw5;])Rf5zn');
define('SECURE_AUTH_KEY', '8Vug|!_@^9Q?57Q~x;]Z.vL;o6RVo$*eC-lrkm~KJ@}`x?cZ//};0N(&)@2lD|kn');
define('LOGGED_IN_KEY', 'GDAN%`-rr7n}%ImYO(d#aVZy:K%&j]G_^wK:,Q6fn;BVMol^F8g5qiDIYQZ8VEwV');
define('NONCE_KEY', '=k8-P=:sLc2EWQQ7,@9j(}ndcZ~#u0)2mE7]oPQX}/}_EAm,.A#5g>SDJMv04~K!');
define('AUTH_SALT', 'e#)Il&/ OM[?us9zxN2M-lT9#N3t+y6=`Nxa-(:MsHU1OW,e9/QOK6X[.Tn?9a&v');
define('SECURE_AUTH_SALT', 'm#]0V5Xmu-U/@rI-E!#UUN>pIH-<LxR*SZ.]e[XysLQi>1=)O|e85b3bo]eO9_%m');
define('LOGGED_IN_SALT', '}e.Ypd8|Q*se -q6{.:ti1)W!zaeGb!N5M>vKT8jGJVWjUE6<@tj-@EM45Crb{r!');
define('NONCE_SALT', ';2OlS3W7F(<mctWOFl3+L!9*cpqh.Mv0J(nd%Z/wNpWa!PB,XLNS;]!e$Irl .hW');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

