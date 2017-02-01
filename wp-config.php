<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
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
define('DB_NAME', 'b_trabalho');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

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
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'YZS3:LHr$s%8|^TOno~$1#~ F6i$Q+{~YOj,8zsm>eiG~;#J0vqzS&#GQ1`NNX3Y');
define('SECURE_AUTH_KEY',  '70PTnU^Ox_k!HjDcs_&v7o;EZDn3NYE_#V`2nW&QpMbSsHR>@)^*EXw+,m-af{t$');
define('LOGGED_IN_KEY',    't}`qdW71~Zj 5St)W$Gn/kP{&&8#vg|Z?ubdB<*>lCm&?3tUAeI^}uBC%|ZF(b+9');
define('NONCE_KEY',        'g90B6J]UL,d(w%`,1Ty6~LdX%o){Om?9!odfFc2G,&+O%%i7l}`rMXkfhT;Pcy%o');
define('AUTH_SALT',        '[%a:0+-UNb3.Uu<mq[vzN|wVq.Q h|_8KAmro2L/}A22DJWy1N~,&2@A*f+n8$Fi');
define('SECURE_AUTH_SALT', 'eO:z[+/qkne?/GA8>43A4HPku2~b2n6mF@*Rk$-)[c~By<_GIDC&>q3X_=S=Vpbn');
define('LOGGED_IN_SALT',   'v^eRdB*o9w+^6NT7&Of7#jX8d5d@-L?pWV2]F A)Avk4>=A@PV~94Q l}MwRJ!=D');
define('NONCE_SALT',       'm/1MlI?9H`4@X3w$C11`+uBxbOL=8).1}vPwc,?f2}#7l.?G.ae|/tkBSn)&eN>(');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
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
