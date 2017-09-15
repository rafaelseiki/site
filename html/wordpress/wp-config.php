<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'r3250350');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ']KYW5vUR{-ll-]8)y~UJx=r$WBi0wNeL{#xn,yHl(k}U&[pqnhq)RFtemS>u`i@`');
define('SECURE_AUTH_KEY',  'Q-vD92)cAY35z9=<4SQM~&+TBZMQ1u]+P<BACaH@l-gf0;o5mMrRRQcMt&[tFQ~f');
define('LOGGED_IN_KEY',    'u0_t*Ye/<WL1,=-rEk0-9)tmutcSSfl=({Gd}Q~lYN0V.wf}9MbtIz;<R)_*22dN');
define('NONCE_KEY',        'BL}JEU=/,UvO Uv5X,ria@BU<UxMW^[r*v_l([yC/Q?Lvj!;66 @Tp7`__xj:FY;');
define('AUTH_SALT',        '@?br.VMZctpK:~+0/XU@#8*1j4v&qm(Jpj)]F&n~7|^w$GD7/TTmWPTp8^)/De)q');
define('SECURE_AUTH_SALT', '~d@9aXG_+Z0U,2]?$gj3Z`d.Ied}_>7%6|<NojdwG2(7Og|,?UQ<GJ+KhmFY:+u ');
define('LOGGED_IN_SALT',   '3277*4QT%8v7n-NBc&km_2*]-H>4Ve|@+-LUpPq= ,t-%Cc9y)]Kb_E6+d;u.}@n');
define('NONCE_SALT',       '7 %d+2w{60w*>/{x@gu#nkQ;0_.ln!Lc^0_aB;86whD(6574O1?eu*NwfN/-&^s$');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');

