<?php
/**
 * Japanese language package for FuelPHP.
 *
 * @package    JaLangPack
 * @version    1.0
 * @author     sharkpp
 * @license    MIT License
 * @copyright  2013+ sharkpp
 * @link       https://www.sharkpp.net/
 */

return array(
	'error_'.\Upload::UPLOAD_ERR_OK						=> 'ファイルのアップロードに成功しました',
	'error_'.\Upload::UPLOAD_ERR_INI_SIZE				=> 'アップロードされたファイルは php.ini の upload_max_filesize ディレクティブを超えています',
	'error_'.\Upload::UPLOAD_ERR_FORM_SIZE				=> 'アップロードされたファイルはHTMLフォームで指定された MAX_FILE_SIZE ディレクティブを超えています',
	'error_'.\Upload::UPLOAD_ERR_PARTIAL				=> '**部分的にのみアップロードできました',
	'error_'.\Upload::UPLOAD_ERR_NO_FILE				=> 'ファイルをアップロードできませんでした',
	'error_'.\Upload::UPLOAD_ERR_NO_TMP_DIR				=> '設定された一時的なアップロードフォルダが見つかりません',
	'error_'.\Upload::UPLOAD_ERR_CANT_WRITE				=> 'アップロードされたファイルをディスクに書き込むことができませんでした',
	'error_'.\Upload::UPLOAD_ERR_EXTENSION				=> 'インストール済みのPHP拡張によりアップロードがブロックされました',
	'error_'.\Upload::UPLOAD_ERR_MAX_SIZE				=> 'アップロードされたファイルは定義された最大サイズを超えています',
	'error_'.\Upload::UPLOAD_ERR_EXT_BLACKLISTED		=> 'この拡張子を持つファイルのアップロードは許可されていません',
	'error_'.\Upload::UPLOAD_ERR_EXT_NOT_WHITELISTED	=> 'この拡張子を持つファイルのアップロードは許可されていません',
	'error_'.\Upload::UPLOAD_ERR_TYPE_BLACKLISTED		=> 'このファイルタイプのファイルのアップロードは許可されていません',
	'error_'.\Upload::UPLOAD_ERR_TYPE_NOT_WHITELISTED	=> 'このファイルタイプのファイルのアップロードは許可されていません',
	'error_'.\Upload::UPLOAD_ERR_MIME_BLACKLISTED		=> 'このMIMEタイプのファイルのアップロードは許可されていません',
	'error_'.\Upload::UPLOAD_ERR_MIME_NOT_WHITELISTED	=> 'このMIMEタイプのファイルのアップロードは許可されていません',
	'error_'.\Upload::UPLOAD_ERR_MAX_FILENAME_LENGTH	=> 'アップロードされたファイルの名前は定義された最大長を超えています',
	'error_'.\Upload::UPLOAD_ERR_MOVE_FAILED			=> '出力先へアップロードされたファイルを移動できません',
	'error_'.\Upload::UPLOAD_ERR_DUPLICATE_FILE 		=> 'アップロードされたファイルと同じ名前のファイルがすでに存在しています',
	'error_'.\Upload::UPLOAD_ERR_MKDIR_FAILED			=> 'ファイルの出力先ディレクトリを作成できません',
);
