<?php
/******************************
 * EQdkp
 * Copyright 2002-2003
 * Licensed under the GNU GPL.  See COPYING for full terms.
 * ------------------
 * file.php
 * Began: Day January 1 2003
 *
 * $Id: lang_install.php 4055 2009-03-02 00:04:52Z wallenium $
 *
 ******************************/

// Do not remove. Security Option!
if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

$lang = array(
'inst_header'               => 'Installation',

// ===========================================================
//	Per Language default settings
// ===========================================================
'game_language'             => 'kr',
'default_lang'              => 'Korean',
'default_locale'            => 'ko_KR',

// ===========================================================
//	Prepare Installation
// ===========================================================
'installation_message'      => '��ġ ��Ʈ',
'installation_messages'     => '��ġ ��Ʈ',
'error'                     => '����',
'errors'                    => '����',
'lerror'                    => '����!',
'notice'                    => '���',
'install_error'             => '��ġ ����',
'inst_step'                 => '�ܰ�',
'error_nostructure'         => 'SQL ����/�����͸� ������ �� �����ϴ�.',
'error_template'            => "'%s' includes/class_template.php �� include �� �� �����ϴ� - ������ �����ϴ��� Ȯ���ϼ���!",

// ===========================================================
//	Stepnames
// ===========================================================
'stepname_1'                => '����',
'stepname_2'                => '�����ͺ��̽�',
'stepname_3'                => 'DB Ȯ��',
'stepname_4'                => 'Server ����',
'stepname_5'                => '����',
'stepname_6'                => '�Ϸ�',

// ===========================================================
//	Step 1: PHP / Mysql Environment
// ===========================================================
'language_selector'         => '����� �� �����Ͻʽÿ�',
'install_language'          => '��ġ ������ ���',
'already_installed'         => 'EQdkp �� �̹� ��ġ�Ǿ����ϴ� - <b>install/</b> �� �����Ͻʽÿ�',
'conf_not_write'            => '<b>config.php</b>�� EQdkp\ �� root ������ �������� �ʽ��ϴ�. <br />
                                �����ϱ� ���� �� config.php ������ ������ �����Ͽ��� �մϴ�.',
'conf_written'              => '<b>config.php</b>�� EQdkp\ �� root ������ �����Ǿ����ϴ� <br />
                                �� ������ �����ϸ� EQdkp ��ġ ������ ������ �߻��մϴ�.',
'conf_chmod'                => '<b>config.php</b> ������ �б�/���� �������� �ʰ� �ڵ������� ������ �� �����ϴ�. <br />
                                �������� <b>chmod 0666 config.php</b> ��ɾ �����Ͽ� �� ������ ������ 0666���� �����Ͻʽÿ�. ',
'conf_writable'             => '<b>config.php</b> ������ �б�/���� ������ ���·� �ڵ������� ����Ǿ����ϴ�.',
'templcache_created'        => "���丮 '%1\$s' �� �����Ǿ����ϴ�. �� ������ �����ϸ� EQdkp ��ġ ������ ������ �߻��մϴ�",
'templcache_notcreated'     => "���丮 '%1\$s' �� ������ �� �����ϴ�. �������� templates ���丮 ���ο� �����Ͽ� �ֽʽÿ� <br />
                                EQdkp root ���丮���� <b>mkdir -p %1\$s</b> ��ɾ ������ ������ �� �ֽ��ϴ�.",
'templcache_notwritable'    => "'%1\$s' ���丮�� �����Ǿ� ������, ���� ������ ���·� ������ �� �����ϴ�. <br />
                                �������� <b>chmod 0777 %1\$s</b> ��ɾ �����Ͽ� �� ������ ������ 0777���� �����Ͻʽÿ�",
'templatecache_ok'          => "'%1\$s' ���丮�� ���� ������ ���·� ����Ǿ� EQDKP-PLUS �� �� ������ ������ �����ϰ� �˴ϴ�.",
'cachefolder_out'           => "'%1\$s' ������ %2\$s �ϰ�  %3\$s �Ǿ����ϴ�",
'connection_failed'         => 'EQdkp-Plus.com ���� ����',
'curl_notavailable'         => 'cURL �� �������� ����. �����۽����� ���������� �۵����� ���� �� �ֽ��ϴ�.',
'fopen_notavailable'        => 'fopen �� �������� ����. �����۽����� ���������� �۵����� ���� �� �ֽ��ϴ�.',
'safemode_on'               => 'PHP ������尡 Ȱ��ȭ��. EQDKP-PLUS �� ������ ���� ������ ��ġ�� ������ ���� ��忡���� ������� �ʽ��ϴ�.',

'minimal_requ_notfilled'    => '�˼��մϴ�, EQdkp �� ���� �ּ� ���ǿ� ���յ��� �ʽ��ϴ�',
'minimal_requ_filled'       => 'EQdkp �� ������ ��ġ�ϱ� ���� �ּ� ���ǿ� �����ϴ��� Ȯ���Ͽ����ϴ�.',

'inst_unknown'              => '�˼�����',
'eqdkp_name'                => 'EQdkp PLUS',
'inst_eqdkpv'               => 'EQDKP Plus Version',
'inst_latest'               => 'Latest stable',

'inst_php'                  => 'PHP',
'inst_view'                 => 'phpinfo() ����',
'inst_version'              => '����',
'inst_required'             => '�ʼ�',
'inst_available'            => '������',
'inst_enabled'              => 'Ȱ��ȭ��',
'inst_using'                => '�����',
'inst_yes'                  => '��',
'inst_no'                   => '�ƴϿ�',

'inst_mysqlmodule'          => 'MySQL ���',
'inst_zlibmodule'           => 'zLib ���',
'inst_curlmodule'           => 'cURL ���',
'inst_fopen'                => 'fopen',
'inst_safemode'             => '���� ���',

'inst_php_modules'          => 'PHP ���',
'inst_Supported'            => '������',

'inst_found'                => 'Ȯ����',
'inst_writable'             => '���Ⱑ��',
'inst_notfound'             => 'ã�� �� ����',
'inst_unwritable'           => '����Ұ���',

'inst_button1'              => '��ġ ����',

// ===========================================================
//	Step 2: Database
// ===========================================================
'inst_database_conf'        => '�����ͺ��̽� ����',
'inst_dbtype'               => '�����ͺ��̽� Ÿ��',
'inst_dbhost'               => '�����ͺ��̽� ȣ��Ʈ',
'inst_dbname'               => '�����ͺ��̽� �̸�',
'inst_dbuser'               => '�����ͺ��̽� ����',
'inst_dbpass'               => '�����ͺ��̽� ��ȣ',
'inst_table_prefix'         => 'EQdkp ���̺��� ���ξ�',
'inst_button2'              => '�����ͺ��̽� �׽�Ʈ',

// ===========================================================
//	Step 3: Database cofirmation
// ===========================================================
'inst_error_nodbname'       => '�����ͺ��̽� �̸��� �����ϴ�!',
'inst_error_prefix'         => '���̺� ���ξ �������� �ʾҽ��ϴ�! �ڷ� ���ư� ���ξ �Է��Ͻʽÿ�.',
'inst_error_prefix_inval'   => '�߸��� ���ξ�',
'inst_error_prefix_toolong' => '���ξ �ʹ� ��ϴ�!',
'inserror_dbconnect'        => '�����ͺ��̽� ���� �Ұ�',
'insterror_no_mysql'        => '�����ͺ��̽��� MySQL �� �ƴմϴ�!',
'inst_redoit'               => '��ġ �����',
'db_warning'                => '���',
'db_information'            => '����',
'inst_sqlheaderbox'         => 'SQL ����',
'inst_mysqlinfo'            => "MySQL Ŭ���̾�Ʈ�� ���� 4.0.4 �̻��̾�� �ϰ� InnoDB ���̺��� �����ؾ� �մϴ�. <br>
                                <b><br>���� ������ ������ <ul>%s</ul>, Ŭ���̾�Ʈ ������ <ul>%s.</ul> �Դϴ�. </b><br>
                                MySQL ������ 4.0.4���� ���� ��� �������� �ʽ��ϴ�. ������ 4.0.4 ������ ��� <br> 
                                �ش� ��ġ�� ���� ������ �������� �ʽ��ϴ�.<br><br>",
'inst_button3'              => '����',
'inst_button_back'          => '���ư���',
'inst_sql_error'            => "����! SQL �� ���� ���� : <br><br><ul>%1\$s</ul><br>Error: %2\$s [%3\$s]",
'insinfo_dbready'           => '�����ͺ��̽� ������ Ȯ�εǰ� ������ �߰ߵ��� �ʾҽ��ϴ�. ��ġ�� ��� ������ �� �ֽ��ϴ�.',

// Errors
'INST_ERR'                  => '��ġ ����',
'INST_ERR_PREFIX'           => '�����ͺ��̽� ���ξ �̹� �����մϴ�. �ڷ� ���ư� �ٸ� ���ξ �����ϰų� ������ �����͸� �����Ͻʽÿ�!',
'INST_ERR_DB_CONNECT'       => '�����ͺ��̽��� ������ �� �����ϴ�. ���� �����޼����� Ȯ���Ͻʽÿ�.',
'INST_ERR_DB_NO_ERROR'      => '�־��� ���� �޼����� �����ϴ�.',
'INST_ERR_DB_NO_MYSQLI'     => '��ġ�� MySQL �� ������ MySQLi Ȯ�忡�� ȣȯ���� �����ϴ�. MySQL �ɼ��� ������ ���ʽÿ�.',
'INST_ERR_DB_NO_NAME'       => '�����ͺ��̽� �̸��� �������� �ʾҽ��ϴ�.',
'INST_ERR_PREFIX_INVALID'   => '���̺� ���ξ �����ͺ��̽����� ������ �ʽ��ϴ�. �ٸ� ���ξ ����ϰų� �������̳� ��ǥ, �������� ���� Ư�����ڸ� ������ ���ʽÿ�',
'INST_ERR_PREFIX_TOO_LONG'  => '���̺� ���ξ �ʹ� ��ϴ�. �ִ� %d ���ڸ� �ʰ����� ���ʽÿ�.',

// ===========================================================
//	Step 4: Server
// ===========================================================
'inst_language_config'      => '��� ����',
'inst_default_lang'         => '�⺻ ���',
'inst_default_locale'       => '�⺻ ����',

'inst_game_config'          => '���� ����',
'inst_default_game'         => '�⺻ ����',

'inst_server_config'        => '���� ����',
'inst_server_name'          => '������ �̸�',
'inst_server_port'          => '���� ��Ʈ',
'inst_server_path'          => '��ũ��Ʈ ���',

'inst_button4'              => '�����ͺ��̽� ��ġ',

// ===========================================================
//	Step 5: Accounts
// ===========================================================
'inst_administrator_config' => '������ ���� ����',
'inst_username'             => '������ ����',
'inst_user_password'        => '������ ��ȣ',
'inst_user_pw_confirm'      => '������ ��ȣ Ȯ��',
'inst_user_email'           => '������ �̸��� �ּ�',

'inst_button5'              => '���� ��ġ',

'inst_writerr_confile'      => '<b>config.php</b> ������ ��ġ�� ���� �� �� �����ϴ�. ���� ������ config.php ���� �ٿ����� �� �����Ͻʽÿ�:',
'inst_confwritten'          => '����� ���� ���Ͽ� ���� ������ ����Ǿ����ϴ�. ���� �ܰ迡�� ������ ������ �����Ͽ� ��ġ�� �Ϸ��Ͻʽÿ�.',
'inst_checkifdbexists'      => '�����ϱ� ����, �Է��� �����ͺ��̽� �̸��� �̹� �����Ǿ�����, �׸��� ���̺��� �����ϱ� ���� ������ �ִ��� Ȯ���Ͻʽÿ�.',
'inst_wrong_dbtype'         => "<b>%s</b>�� ���� database abstraction layer�� ã�� �� �����ϴ�, %s �� �����ϴ��� Ȯ���Ͻʽÿ�.",
'inst_failedconhost'        => "<b>%s</b>(<b>%s@%s</b>) �����ͺ��̽��� ������ �� �����ϴ�.
                                <br /><br /><a href='index.php'>��ġ �����</a>",
'inst_failedversioninfo'    => "<b>%s</b>(<b>%s@%s</b>)�� ������ Ȯ���� �� �����ϴ�.
                                <br /><br /><a href='index.php'>��ġ �����</a>",

// ===========================================================
//	Step 5: Finish
// ===========================================================
'login'                     => '�α���',
'username'                  => '����� �̸�',
'password'                  => '��ȣ',
'remember_password'         => '��ȣ ���� (��Ű)',

'login_button'              => '�α���',

'inst_passwordnotmatch'     => '�н����尡 ���� �ʽ��ϴ�, <b>admin</b>���� �ʱ�ȭ �մϴ�. �α��� �� ���� �������� ������ �� �ֽ��ϴ�.',
'inst_admin_created'        => '������ ������ �����Ǿ����ϴ�, EQdkp ���� �������� �α��� �Ͻʽÿ�.',
);
?>
