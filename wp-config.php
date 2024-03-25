<?php
/**
 * A WordPress fő konfigurációs állománya
 *
 * Ebben a fájlban a következő beállításokat lehet megtenni: MySQL beállítások
 * tábla előtagok, titkos kulcsok, a WordPress nyelve, és ABSPATH.
 * További információ a fájl lehetséges opcióiról angolul itt található:
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 *  A MySQL beállításokat a szolgáltatónktól kell kérni.
 *
 * Ebből a fájlból készül el a telepítési folyamat közben a wp-config.php
 * állomány. Nem kötelező a webes telepítés használata, elegendő átnevezni
 * "wp-config.php" névre, és kitölteni az értékeket.
 *
 * @package WordPress
 */

// ** MySQL beállítások - Ezeket a szolgálatótól lehet beszerezni ** //
/** Adatbázis neve */
define( 'DB_NAME', 'iskola' );

/** MySQL felhasználónév */
define( 'DB_USER', 'root' );

/** MySQL jelszó. */
define( 'DB_PASSWORD', '' );

/** MySQL  kiszolgáló neve */
define( 'DB_HOST', 'localhost' );

/** Az adatbázis karakter kódolása */
define( 'DB_CHARSET', 'utf8mb4' );

/** Az adatbázis egybevetése */
define('DB_COLLATE', '');

/**#@+
 * Bejelentkezést tikosító kulcsok
 *
 * Változtassuk meg a lenti konstansok értékét egy-egy tetszóleges mondatra.
 * Generálhatunk is ilyen kulcsokat a {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org titkos kulcs szolgáltatásával}
 * Ezeknek a kulcsoknak a módosításával bármikor kiléptethető az összes bejelentkezett felhasználó az oldalról.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', '4km?guzU#3A#[=4aG+6DT0-M*.,Jx/FRv8*.voC>D?I5l*#ryO`5</{I/Q%vYHcC' );
define( 'SECURE_AUTH_KEY', 'OL42F[+_prPJG~NLMS+3F{^;d+c7*N0`hPlas`g$?a~o=0ANY9J)1<{)+mb[Lh:{' );
define( 'LOGGED_IN_KEY', 'r};<h+wOi~Sh|_O%7F,mq%=.3ou(c(Cyz{5NeZlwms6EnEk-UXGsl~6-nF^ #7)R' );
define( 'NONCE_KEY', '<]}:K&S/6,FA#>gH[Uks2/eR H1=x%:5rdyPBkMa9H#eYIFym3#$#D$eh}ZLW]?a' );
define( 'AUTH_SALT',        '[&e,$#-[T}WB?8;G]KujUJ4`*(nXMQ/by)1U4EP79XD8%M|sGKZmVeb/|:Mk0#4E' );
define( 'SECURE_AUTH_SALT', 'y`J%.I%kh }^(Yw-V:@{? @8!^U}^N]9^vb56*4qVb*wfjr>H@PCkV;Z:QriiFvI' );
define( 'LOGGED_IN_SALT',   'H5Db:rcU8/y:G@9MMaGYE4C-3[2moWle)77oG}AP&jB]]$Kn}`c&:<e.&+c[fev;' );
define( 'NONCE_SALT',       'c5>fZIeG_]25^,q%EN#OZq0Cqu0+f+ }T>n*g9lYJjF=Jk=#/9E>tB#Td|Kos+lZ' );

/**#@-*/

/**
 * WordPress-adatbázis tábla előtag.
 *
 * Több blogot is telepíthetünk egy adatbázisba, ha valamennyinek egyedi
 * előtagot adunk. Csak számokat, betűket és alulvonásokat adhatunk meg.
 */
$table_prefix = 'po_';

/**
 * Fejlesztőknek: WordPress hibakereső mód.
 *
 * Engedélyezzük ezt a megjegyzések megjelenítéséhez a fejlesztés során.
 * Erősen ajánlott, hogy a bővítmény- és sablonfejlesztők használják a WP_DEBUG
 * konstansot.
 */
define('WP_DEBUG', false);

/* Ennyi volt, kellemes blogolást! */
/* That's all, stop editing! Happy publishing. */

/** A WordPress könyvtár abszolút elérési útja. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Betöltjük a WordPress változókat és szükséges fájlokat. */
require_once(ABSPATH . 'wp-settings.php');
