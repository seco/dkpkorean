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
'installation_message'      => '설치 노트',
'installation_messages'     => '설치 노트',
'error'                     => '에러',
'errors'                    => '에러',
'lerror'                    => '에러!',
'notice'                    => '경고',
'install_error'             => '설치 에러',
'inst_step'                 => '단계',
'error_nostructure'         => 'SQL 구조/데이터를 가져올 수 없습니다.',
'error_template'            => "'%s' includes/class_template.php 를 include 할 수 없습니다 - 파일이 존재하는지 확인하세요!",

// ===========================================================
//	Stepnames
// ===========================================================
'stepname_1'                => '정보',
'stepname_2'                => '데이터베이스',
'stepname_3'                => 'DB 확인',
'stepname_4'                => 'Server 정보',
'stepname_5'                => '계정',
'stepname_6'                => '완료',

// ===========================================================
//	Step 1: PHP / Mysql Environment
// ===========================================================
'language_selector'         => '사용할 언어를 선택하십시오',
'install_language'          => '설치 과정의 언어',
'already_installed'         => 'EQdkp 가 이미 설치되었습니다 - <b>install/</b> 를 삭제하십시오',
'conf_not_write'            => '<b>config.php</b>이 EQdkp\ 의 root 폴더에 존재하지 않습니다. <br />
                                진행하기 전에 빈 config.php 파일을 서버에 생성하여야 합니다.',
'conf_written'              => '<b>config.php</b>이 EQdkp\ 의 root 폴더에 생성되었습니다 <br />
                                이 파일을 삭제하면 EQdkp 설치 과정에 문제가 발생합니다.',
'conf_chmod'                => '<b>config.php</b> 파일이 읽기/쓰기 가능하지 않고 자동적으로 변경할 수 없습니다. <br />
                                서버에서 <b>chmod 0666 config.php</b> 명령어를 실행하여 이 파일의 권한을 0666으로 변경하십시오. ',
'conf_writable'             => '<b>config.php</b> 파일이 읽기/쓰기 가능한 상태로 자동적으로 변경되었습니다.',
'templcache_created'        => "디렉토리 '%1\$s' 이 생성되었습니다. 이 폴더를 삭제하면 EQdkp 설치 과정에 문제가 발생합니다",
'templcache_notcreated'     => "디렉토리 '%1\$s' 을 생성할 수 없습니다. 수동으로 templates 디렉토리 내부에 생성하여 주십시오 <br />
                                EQdkp root 디렉토리에서 <b>mkdir -p %1\$s</b> 명령어를 실행해 생성할 수 있습니다.",
'templcache_notwritable'    => "'%1\$s' 디렉토리가 생성되어 있으나, 쓰기 가능한 상태로 변경할 수 없습니다. <br />
                                서버에서 <b>chmod 0777 %1\$s</b> 명령어를 실행하여 이 파일의 권한을 0777으로 변경하십시오",
'templatecache_ok'          => "'%1\$s' 디렉토리가 쓰기 가능한 상태로 변경되어 EQDKP-PLUS 가 이 폴더에 파일을 생성하게 됩니다.",
'cachefolder_out'           => "'%1\$s' 폴더가 %2\$s 하고  %3\$s 되었습니다",
'connection_failed'         => 'EQdkp-Plus.com 연결 실패',
'curl_notavailable'         => 'cURL 이 가능하지 않음. 아이템스탯이 정상적으로 작동하지 않을 수 있습니다.',
'fopen_notavailable'        => 'fopen 이 가능하지 않음. 아이템스탯이 정상적으로 작동하지 않을 수 있습니다.',
'safemode_on'               => 'PHP 안전모드가 활성화됨. EQDKP-PLUS 는 데이터 쓰기 과정을 거치기 때문에 안전 모드에서는 실행되지 않습니다.',

'minimal_requ_notfilled'    => '죄송합니다, EQdkp 를 위한 최소 조건에 부합되지 않습니다',
'minimal_requ_filled'       => 'EQdkp 가 서버가 설치하기 위한 최소 조건에 부합하는지 확인하였습니다.',

'inst_unknown'              => '알수없음',
'eqdkp_name'                => 'EQdkp PLUS',
'inst_eqdkpv'               => 'EQDKP Plus Version',
'inst_latest'               => 'Latest stable',

'inst_php'                  => 'PHP',
'inst_view'                 => 'phpinfo() 보기',
'inst_version'              => '버전',
'inst_required'             => '필수',
'inst_available'            => '가능함',
'inst_enabled'              => '활성화됨',
'inst_using'                => '사용중',
'inst_yes'                  => '예',
'inst_no'                   => '아니오',

'inst_mysqlmodule'          => 'MySQL 모듈',
'inst_zlibmodule'           => 'zLib 모듈',
'inst_curlmodule'           => 'cURL 모듈',
'inst_fopen'                => 'fopen',
'inst_safemode'             => '안전 모드',

'inst_php_modules'          => 'PHP 모듈',
'inst_Supported'            => '지원함',

'inst_found'                => '확인함',
'inst_writable'             => '쓰기가능',
'inst_notfound'             => '찾을 수 없음',
'inst_unwritable'           => '쓰기불가능',

'inst_button1'              => '설치 시작',

// ===========================================================
//	Step 2: Database
// ===========================================================
'inst_database_conf'        => '데이터베이스 구성',
'inst_dbtype'               => '데이터베이스 타입',
'inst_dbhost'               => '데이터베이스 호스트',
'inst_dbname'               => '데이터베이스 이름',
'inst_dbuser'               => '데이터베이스 계정',
'inst_dbpass'               => '데이터베이스 암호',
'inst_table_prefix'         => 'EQdkp 테이블의 접두어',
'inst_button2'              => '데이터베이스 테스트',

// ===========================================================
//	Step 3: Database cofirmation
// ===========================================================
'inst_error_nodbname'       => '데이터베이스 이름이 없습니다!',
'inst_error_prefix'         => '테이블 접두어가 설정되지 않았습니다! 뒤로 돌아가 접두어를 입력하십시오.',
'inst_error_prefix_inval'   => '잘못된 접두어',
'inst_error_prefix_toolong' => '접두어가 너무 깁니다!',
'inserror_dbconnect'        => '데이터베이스 접속 불가',
'insterror_no_mysql'        => '데이터베이스가 MySQL 이 아닙니다!',
'inst_redoit'               => '설치 재시작',
'db_warning'                => '경고',
'db_information'            => '정보',
'inst_sqlheaderbox'         => 'SQL 정보',
'inst_mysqlinfo'            => "MySQL 클라이언트는 버전 4.0.4 이상이어야 하고 InnoDB 테이블을 지원해야 합니다. <br>
                                <b><br>현재 서버의 버전은 <ul>%s</ul>, 클라이언트 버전은 <ul>%s.</ul> 입니다. </b><br>
                                MySQL 버전이 4.0.4보다 낮을 경우 지원하지 않습니다. 버전이 4.0.4 이하일 경우 <br> 
                                해당 설치에 대한 지원은 제공되지 않습니다.<br><br>",
'inst_button3'              => '진행',
'inst_button_back'          => '돌아가기',
'inst_sql_error'            => "에러! SQL 문 실행 실패 : <br><br><ul>%1\$s</ul><br>Error: %2\$s [%3\$s]",
'insinfo_dbready'           => '데이터베이스 연결이 확인되고 에러가 발견되지 않았습니다. 설치를 계속 진행할 수 있습니다.',

// Errors
'INST_ERR'                  => '설치 에러',
'INST_ERR_PREFIX'           => '데이터베이스 접두어가 이미 존재합니다. 뒤로 돌아가 다른 접두어를 선택하거나 기존의 데이터를 제거하십시오!',
'INST_ERR_DB_CONNECT'       => '데이터베이스에 접속할 수 없습니다. 다음 에러메세지를 확인하십시오.',
'INST_ERR_DB_NO_ERROR'      => '주어진 에러 메세지가 없습니다.',
'INST_ERR_DB_NO_MYSQLI'     => '설치된 MySQL 이 설정된 MySQLi 확장에서 호환성이 없습니다. MySQL 옵션을 설정해 보십시오.',
'INST_ERR_DB_NO_NAME'       => '데이터베이스 이름이 지정되지 않았습니다.',
'INST_ERR_PREFIX_INVALID'   => '테이블 접두어가 데이터베이스에서 허용되지 않습니다. 다른 접두어를 사용하거나 하이픈이나 쉼표, 역슬러시 등의 특수문자를 제거해 보십시오',
'INST_ERR_PREFIX_TOO_LONG'  => '테이블 접두어가 너무 깁니다. 최대 %d 문자를 초과하지 마십시오.',

// ===========================================================
//	Step 4: Server
// ===========================================================
'inst_language_config'      => '언어 구성',
'inst_default_lang'         => '기본 언어',
'inst_default_locale'       => '기본 로컬',

'inst_game_config'          => '게임 구성',
'inst_default_game'         => '기본 게임',

'inst_server_config'        => '서버 구성',
'inst_server_name'          => '도메인 이름',
'inst_server_port'          => '서버 포트',
'inst_server_path'          => '스크립트 경로',

'inst_button4'              => '데이터베이스 설치',

// ===========================================================
//	Step 5: Accounts
// ===========================================================
'inst_administrator_config' => '관리자 계정 구성',
'inst_username'             => '관리자 계정',
'inst_user_password'        => '관리자 암호',
'inst_user_pw_confirm'      => '관리자 암호 확인',
'inst_user_email'           => '관리자 이메일 주소',

'inst_button5'              => '계정 설치',

'inst_writerr_confile'      => '<b>config.php</b> 파일을 설치를 위해 열 수 없습니다. 다음 내용을 config.php 내에 붙여넣은 후 진행하십시오:',
'inst_confwritten'          => '당신의 구성 파일에 설정 값들이 저장되었습니다. 다음 단계에서 관리자 계정을 설정하여 설치를 완료하십시오.',
'inst_checkifdbexists'      => '진행하기 전에, 입력한 데이터베이스 이름이 이미 생서되었는지, 그리고 테이블을 생성하기 위한 권한이 있는지 확인하십시오.',
'inst_wrong_dbtype'         => "<b>%s</b>를 위한 database abstraction layer를 찾을 수 없습니다, %s 이 존재하는지 확인하십시오.",
'inst_failedconhost'        => "<b>%s</b>(<b>%s@%s</b>) 데이터베이스에 접속할 수 없습니다.
                                <br /><br /><a href='index.php'>설치 재시작</a>",
'inst_failedversioninfo'    => "<b>%s</b>(<b>%s@%s</b>)의 버전을 확인할 수 없습니다.
                                <br /><br /><a href='index.php'>설치 재시작</a>",

// ===========================================================
//	Step 5: Finish
// ===========================================================
'login'                     => '로그인',
'username'                  => '사용자 이름',
'password'                  => '암호',
'remember_password'         => '암호 저장 (쿠키)',

'login_button'              => '로그인',

'inst_passwordnotmatch'     => '패스워드가 맞지 않습니다, <b>admin</b>으로 초기화 합니다. 로그인 후 계정 설정에서 변경할 수 있습니다.',
'inst_admin_created'        => '관리자 계정이 생성되었습니다, EQdkp 설정 페이지로 로그인 하십시오.',
);
?>
