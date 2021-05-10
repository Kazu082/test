<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wp01db' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(=~n&4YB<R/Xr{p3{^DJ63.s~rvi}.nu%44@E+3L(bcJxeiC>HWyIK1Nukb1kY )' );
define( 'SECURE_AUTH_KEY',  'Z2[` m~>ly;JbMRP:vK?ujGq04$`z2Q3T|E`eT:Fs4;E#UmE%X@1_]pC)dim|EE,' );
define( 'LOGGED_IN_KEY',    '#k|7vLhYlIp,@tCTWk 56?5;wm:VrThD~:=1h ZQHuqAG(as]]|gBC`XLG7U[rbq' );
define( 'NONCE_KEY',        '1DPCBEG4gIVk6Q+0w-dj?;lPU9>!SviUzvYL*lxSah3|IbV!48$h7McGD2$~2#3)' );
define( 'AUTH_SALT',        'ILA%DHYT]1wQ=Lz)7:&^bYuQo$K80x?w$[<E]MM6G0jPEPjOwtD;@(-Rv0i`(CIk' );
define( 'SECURE_AUTH_SALT', '@? j9bd~6)/AlDj+,|3x<2{{A+I=MQV05V1HAGAux^k>PA}^Vy]ux!PE(Y-849iL' );
define( 'LOGGED_IN_SALT',   'Z{96$0_9Rpp5:9 D>!-xlg?~JO_l0Y+%?`]<1v ?:!eOqxhv aoHo{3N8S4[xc{8' );
define( 'NONCE_SALT',       '@jU^b{KpIF8zd@|`:hB<*YAQ0QQRhwa@ul4~XM*T$J}!F~.7i=H#Jgk8eDbj>XGT' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
