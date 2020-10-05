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

define('EMPTY_TRASH_DAYS', 0);

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'redb' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'redb' );

/** MySQL データベースの:パスワード */
define( 'DB_PASSWORD', '7apc3Lacb6QlpQg8' );

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
define( 'AUTH_KEY',         'qd5tlzmI|Ay09omgV1n*hz1EDz:FH/PkN[j0RZ*!,YNmjs3]ck0DE,S>APjLFa^y' );
define( 'SECURE_AUTH_KEY',  '*gtvq)p.-#/cgyA1_5n_N3l=R|cq|Vrr`OEqD8uW(X[!?!n-Yi,vP|Cf9W}-]sdF' );
define( 'LOGGED_IN_KEY',    'aW:95(.7!{)^A{&4#~f1H*KeAnzXw9M2&izj..m,99O>0L#j7AmPg=vTC>@w@>&r' );
define( 'NONCE_KEY',        '9/v`[4$7Iz)(R5B }jYk%LJqGW/@sJ  ~()Iu9}(cW[d!{Q4KoQ.<jWwE6@>jlw%' );
define( 'AUTH_SALT',        '/dkF#j[?[3S{`<p=Lh~r|[Q,FA-kWEtpq[InVsqN#<fAm= {k`z_AW!zcr3t4wLQ' );
define( 'SECURE_AUTH_SALT', 'v&$yF--X*][@..89wQAks5-eR4E;==I3mXtGT8iuK<FnRf, ~P~0{m&a|!Bzz)JA' );
define( 'LOGGED_IN_SALT',   'J/mN#cls+ucg8dU Y_CC69~)Fs%[]we)YQ6G%%HkMV){/XF{#rh&<1ilge*cc1F_' );
define( 'NONCE_SALT',       '^`Z?]i$>G:pzPWj[ x=AJ*cmh<Z 4PJr)C-]XA+5:9eW4?;`,FQIJluf08O5Hjgf' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
