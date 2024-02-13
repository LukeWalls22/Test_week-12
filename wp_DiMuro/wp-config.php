<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'test_week_12' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'o#U)xH%f>@PtYyl)?=-FHegv?^xF .b$9 ,d)C{tM)*,6VD[o+-tWW&1HwT53%,)' );
define( 'SECURE_AUTH_KEY',  'SV1X`5yyf+sx$XK;ZK0)xNEp1xjeB<wwxTW=N@TGw,SmA2Q.^a&gK+Et@h`HqJ2I' );
define( 'LOGGED_IN_KEY',    'oh#aBH7>)~tyr<()r@#P9cp(s50byJLt:Apy2t:-{?[V^.]}~@)4ZL^y*.OfA(=N' );
define( 'NONCE_KEY',        '}k;KV86bs~2zp6%%G:tO2.y9yQK&(HWCI<Er/4~u3}`GSc7td-M|aXQ.(nDhCOMG' );
define( 'AUTH_SALT',        'UtT1IJH#<zdKum&04p)[U>pp=/q:_ZS7E&`<pfhb(E0pU#h[E@nZrL:oZD?rNa$Y' );
define( 'SECURE_AUTH_SALT', 'D:c Q 7=T,GcNP{4$nX({qpSEh8CLQq{14<yGR=yvd<<<6gQ^3R8RDbK]{fFRB^F' );
define( 'LOGGED_IN_SALT',   'jTCc7#[B+?.y[@)0mt_*#_wh2xE5n:IC&/RaIIT,YxgN{bPO( JX$Wb]auw+ikOk' );
define( 'NONCE_SALT',       'nW5b]=T!L`%_fE%dpXHWIQ0Tog-)_Wo.H6pr 0d.VAK6K$n1rk3${M/@fQkOY-t&' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wpBW12_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
