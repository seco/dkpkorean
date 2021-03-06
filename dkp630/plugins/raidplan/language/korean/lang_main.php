<?php
 /*
 * Project:     EQdkp RaidPlanner
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2005
 * Date:        $Date: 2009-03-08 11:54:50 +0100 (So, 08 Mrz 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     raidplan
 * @version     $Rev: 4147 $
 * 
 * $Id: lang_main.php 4147 2009-03-08 10:54:50Z wallenium $
 */

if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
} 

$lang = array(
  'raidplan' 												=> '레이드 플레너',
  'rp_raidplaner' 									=> '레이드 플레너',
 
  // Description
  'rp_short_desc'                   => '공격대 일정 관리',
  'rp_long_desc'                    => 'Raidplanner is a Plugin for EQDKP or EQDKP PLUS to manage and plan future raids. You can add raids, the users can sign in members for easier overwiew of the needed members for a raid.',
  
  // User Menu
  'rp_usermenu_raidplaner'					=> '레이드 플레너',
  'rp_raid_id'                   		=> '레이드 ID',
  'rp_statistic'                    => '통계',
  'rp_statistic2'                   => '레이드 통계',
  'rp_usersettings'									=> '설정',
  
  // Admin Menu
  'rp_manage'												=> '관리',
  'rp_addraid'											=> '새로운 레이드',
  'rp_addwildcard'									=> '와일드카드 더하기',
  'rp_editraid'											=> '레이드 편집',
  'rp_wildcardmanager'              => '와일드카드 관리',
  'rp_wildcard_perm'                => '와일드카드 편집',
  
  // Submit Buttons
  'rp_wildcard_raid'					    	=> '와일드카드 레이드',
  
  // Delete Confirmation Texts
  'rp_confirm_delete_subscription' 	=> '정말로 이 레이드의 참가 신청을 취소하시겠습니까?',
  'rp_confirm_delete_raid' 					=> '정말로 이 레이드를 삭제하시겠습니까?',
  'rp_confirm_reset_conf' 					=> '정말로 설정을 디폴트로 하시겠습니까?',
  'rp_confirm_delete_guest' 				=> '손님을 정말로 삭제하시겠습니까?',
  'rp_button_delete'								=> '삭제',
  'rp_button_cancel'								=> '취소',
  'rp_button_reset'									=> '초기화',
  'rp_button_close'                 => '닫기',
  'rp_button_clean'                 => 'Clean Database',
  'rp_button_clean2'                => 'Clean',
  
  // Page Foot Counts
  'rp_listraids_footcount'					=> "... %1\$d 개의 레이드를 찾았습니다 / 페이지당 %2\$d / %3\$sshow all</a>",
  'rp_listrecentraids_footcount' 		=> "... %1\$d 개의 레이드를 찾았습니다 / 지난 %2\$d 일간",
  
  // Buttons
  'rp_signup'							      		=> '참가신청',
  'rp_bunsign'                   		=> '아직 신청하지 않음',
  'rp_signoff'							      	=> '불참',
  'rp_not_sure'							    		=> '불확실',
  'rp_change_status'                => 'Change status',
  'rp_distribute_class_set'					=> 'Set class distribution',
  'rp_confirmall'                   => 'Confirm all signed in',
  'rp_save'													=> 'Save',
  'rp_confirm_signup' 							=> 'Confirm Signup',
  'rp_cancel_confirmation'					=> 'Cancel confirmation',
  'rp_one_down'											=> 'One Down',
  'rp_saveas_templ'									=> 'Save as Template',
  'rp_del_template'									=> 'Delete Template',
  'rp_butn_sendmail'                => 'Create Newsletter',
  'rp_addguest'                     => 'Add Guest',
  'rp_saveguest'                    => 'Save Guest',
  'rp_autodet_buttn'                => 'Detect timezone',
  'rp_close_raid'                   => 'Close Raid',
  'rp_open_raid'                    => 'Open Raid',
  'rp_reset_defaults'								=> 'Reset to Default',
  'rp_open_usersettings'            => 'Select default member',
  
  // Wildcard Manager
  'rp_eventname'                    => '이벤트',
  'rp_membername'                   => '캐릭터',
  'rp_selectraid'                   => '레이드 선택',
  'rp_set_wildcards'                => 'Set Wildcard for this raid',
  'rp_no_wc_users'                  => 'No matching characters found.',
  'rp_added_on_date'                => 'Added on',
  'rp_changed_on_date'              => 'on',
  
  // Status
  'status0'						   						=> '참가확정',
  'status1'							   					=> '참가신청',
  'status2'													=> '불참',
  'status3'						  		 				=> '불확실',
  'status4'						  		 				=> '아직 신청하지 않음',
  'status5'						  		 				=> 'Not Available',
  
  // Status Tooltip
  'rp_tt_status0'						   			=> '참가확정된 멤버',
  'rp_tt_status1'							   		=> '참가신청한 멤버',
  'rp_tt_status2'										=> '불첨멤버',
  'rp_tt_status3'						  		 	=> '참가가 불확실한 멤버',
  'rp_tt_needed'                    => '설정 인원',
  
  // Misc
  'rp_leader'												=> '공대장',
  'rp_needed'							     			=> 'Needed',
  'rp_start_time'				 		 				=> '시작 - 시각',
  'rp_finish_time'									=> '종료 - 시각',
  'rp_invite_time'				 		 			=> '초대 - 시각',
  'rp_signup_deadline'					  	=> '참가신청 종료시각',
  'rp_signup_deadline_date'					=> '참가신청 데드라인 날짜',
  'rp_signup_deadline_time'					=> '참가신청 데드라인 시각',
  'rp_current_raid'              		=> '현재 레이드',
  'rp_raidaddedon'									=> 'Raid added on',
  'rp_recent_raid'               		=> '최근 레이드',
  'rp_admin_set'               			=> "This Attendee was signed up by the Administrator '%1\$s'",
  'rp_grpl_set'											=> "This Attendee was signed up by the Class leader '%1\$s'",
  'rp_use_template'									=> '레이드 템플리트',
  'rp_templatename'									=> '템플리트 이름',
  'rp_templatename2'								=> '(템플리트를 저장하지 않으시려면 무시하세요)',
  'rp_repeat_every'									=> '반복 주기',
  'rp_repeat_disabled'              => '설정에서 반복하기 비활성화',
  'rp_delete_repeat'								=> 'Delete all clones of that raid',
  'rp_edit_repeat'                  => 'Save Changes for all clones of that Raid',
  'rp_repeat_descr'                 => 'Choose setting and use buttons below!',
  'rp_vr_link'											=> 'Information',
  'rp_link'                         => 'Link',
  'rp_group'												=> 'Group',
  'rp_nogroup'                      => 'No Group',
  'rp_no_group'											=> 'Not assigned to a group',
  'rp_nogrouplua'                   => 'not grouped',
  'rp_groupnr'											=> 'Assigned to Group No.',
  'rp_wcexpired'                    => 'The Wildcard is expired',
  'rp_wclieftime'                   => 'Wildcard lifetime',
  'rp_guests'                       => 'Guests',
  'rp_raidchanged'                  => 'Raid changed by',
  'rp_editnote'                     => 'Edit Note',
  'rp_addnote'                      => 'Add Note',
  'rp_none'                         => 'None',
  'rp_ungrouped'                    => 'Ungrouped',
  'rp_title_delguest'               => 'Delete guest',
  'rp_title_editguest'              => 'Edit guest',
  'rp_admin_gclickedit'             => 'Click on the guest name to delete or edit.',
  'uc_cm_notes'                     => 'Charmanager Notes',
  'rp_adminsignin'                  => '참가 신청자',
  'rp_is_repeatable'                => 'Raid is repeatable',
  'rp_not_updating'                 => 'Dates will not be updated!',
  'rp_char_as_default'              => 'Default Member',
  'rp_help_def_char'                => 'Set the selected Member as default. You can use quick sign in if you\'ve got seleceted a default char, and it will automatically selected on raid signup.',
  'rp_no_default_char'              => 'You have not selected a defualt member or a default role. Because of that, you might not be able to use all Features of Raidplanner (p.e Mass signin).',
  'rp_multi_perform'                => 'Perform',
  'rp_multi_notes'                  => 'Note',
  'rp_transform'                    => 'Transform to raid',
  'rp_flexaddrank'                  => 'Add Members by Rank',
  
  'rp_help_multinote'               => 'Click to show the Note field. You can add a note to all raids if you want.',
  'rp_help_multisignin'             => 'If you\'ve set a default char, hover over the status flags, select one or more raids to sign in and use this button.',
  'rp_role_distribution'            => 'Role Distribution',
  'rp_class_distribution'           => 'Class Distribution',
  'rp_no_distributon'               => 'No Distribution',
  'rp_addition_role'                => 'Role',
  'rp_addition_class'               => 'Class',
  'rp_addition_no'                  => 'Without',
  
  // Member Settings
  'rp_defchar_config'               => '디폴트멤버 설정',
  
  // Page Titles
  'rp_title_statistic'							=> '레이드 통계',
  'rp_title_usersettings'						=> '레이드플레너 설정',
  'rp_title_listraids'							=> '레이드 리스트',
  'rp_title_viewraid'								=> '레이드 상세정보',
  
  'rp_legend'                       => '그림 설명',
  'rp_signup_over'            			=> '참가신청 종료',
  'rp_signup_possible'            	=> '참가신청 가능',
  'rp_signup_24h'            				=> '참가신청이 24시간내 종료',
  
  // viewmember
  'rp_rank'                      		=> 'Rank',
  'rp_class'                     		=> 'Class',
  'rp_chars_of'                  		=> 'Characters of Player:',
  'rp_char'                   			=> 'Character',
  'rp_vm_chars_found'								=> "There are %1\$s characters of this member.",
  
  // Statistic Page
  'rp_firstraid'                    => '최초 레이드 참가일',
  'rp_attended'                     => '참가',
  'rp_total'                        => '총회수',
  'rp_signed_off'                   => '불참',
  'rp_signed_in'                    => '참가신청',
  'rp_sincefirst'                   => '처음으로 참가한 레이드 이후',
  'rp_last_days'                    => "최근 %1\$d 일동안",
  'rp_days'                         => '일',
  'rp_total_raids'                  => "지난 %1\$d 일간 계획되었던 레이드 수",
  'rp_total_run'                    => "지난 %1\$d 일간 진행되었던 레이드 수",
  'rp_x_days'                       => "%1\$d 일",
  'rp_percent'                      => "%1\$d%%",
  'rp_stats'                        => "Statistics of the last",
  
  // Calendar
 'rp_last_month'									=> '지난 달',
  'rp_next_month'									=> '다음 달',
  'rp_count_futureraids'							=> '향후 레이드',
  'rp_notfound'										=> '찾을 수 없음',
  'rp_monday'										=> '월',
  'rp_tuesday'										=> '화',
  'rp_wednesday'									=> '수',
  'rp_thursday'										=> '목',
  'rp_friday'										=> '금',
  'rp_saturday'										=> '토',
  'rp_sunday'										=> '일',
  'rp_january'										=> '1월',
  'rp_february'										=> '2월',
  'rp_march'										=> '3월',
  'rp_april'										=> '4월',
  'rp_may'											=> '5월',
  'rp_june'											=> '6월',
  'rp_july'											=> '7월',
  'rp_august'										=> '8월',
  'rp_september'									=> '9월',
  'rp_october'										=> '10월',
  'rp_november'										=> '11월',
  'rp_december'										=> '12월',
  'rp_weekly'										=> '매주마다',
  'rp_14days'										=> '2주마다',
  
  //overlib windows
  'rp_status_header'             		=> '레이드 현황',
  'rp_status_signintime'         		=> '참가신청 종료까지 시간:',
  'rp_status_closed'             		=> '참가신청이 끝났습니다',
  'rp_status_quit'           			  => '공대장이 이 레이드를 취소함',
  'rp_status_quit_sh'           		=> '레이드 취소',
  'rp_note_header'               		=> '노트',
  'rp_noraidnote'										=> '레이드 노트 없음',
  'rp_time_header'               		=> '참가신청 시각',
  'rp_chtime_header'								=> '수정',
  'rp_usrtt_header'									=> '정보',
  'rp_status'           		  			=> '현황',
  
  'rp_start'												=> '시작',
  'rp_end'                          => '종료',
  'rp_day'													=> '요일',
  'rp_invite'												=> '초대시작',
  
  // Image alternates
  'rp_rolled'							      		=> 'Rolled',
  'rp_wildcard'						      		=> 'Wildcard',
  
  // Submission Success Messages
  'rp_raid_status0'						    	=> "Member %1\$s successfully confirmed for raid %2\$s.",
  'rp_raid_status1'						    	=> "Member %1\$s successfully signed up raid %2\$s. Please check if you're confirmed later",
  'rp_raid_status2'						    	=> "Member %1\$s successfully signed off raid %2\$s.",
  'rp_raid_status3'						    	=> "Member %1\$s successfully set on \"Not Sure\" List on raid %2\$s.",
  'rp_raid_status10'								=> "Signup for Member %1\$s on Raid %2\$s successfully updated.",
  
  'rp_update_raid_success'          => "The %1\$d raid on %2\$s was updated in the Database.",
  'rp_admin_update_confstatus'      => "Member %1\$s successfully unlocked.",
  'rp_admin_unlock_member'          => "Confirmation for member %1\$s successfully updated.",
  'rp_raid_signup_deleted'          => "Sign-Up for member %1\$s deleted.",
  'rp_class_distribution_set'				=> '직업구성을 성공적으로 설정함.',
  'rp_view_raid'										=> '레이드 보기',
  
  // Submission Error Messages
  'rp_member_allready_subscribed'		=> 'Member already subscribed. Update aborted.',
  'rp_class_distribution_notset' 		=> 'To create a Class list please take a new Raid, not an old one.',
  'rp_err_invalid_action_prov'      => 'Error! Invalid Action provided!.',
  
  // Export Macros
  'rp_Macro_output_Listing'         => 'Macro Output Listing...',
  'rp_nonqued_user'                 => 'Non-queued users',
  'rp_queued_users'                 => 'Queued users',
  'rp_MacroListingComplete'         => 'Macro output listing complete.',
  'rp_copypaste_ig'                 => 'Copy and paste the above to a macro and run in-game',
  'rp_lua_created'                  => 'LUA file created',
  'rp_lua_notreadable'              => 'LUA-file not writable, chmod the folder \'lua_dl\' and the content within this folder with \'chmod 777\'!',
  'rp_download'                     => 'Download',
  'rp_dl_autoinv_add'               => '(right-click, choose save as, name it AutoInvite.lua)',
  'rp_lua_output'                   => 'Beginning LUA output',
  'rp_cvs_output'                   => 'Beginning CSV output',
  'rp_no_raidid'                    => 'Error: No RaidID',
  'rp_csv_random'                   => 'Random',
  
  // Export Thing
  'rp_export_header'                => '레이드 데어터 내보내기Export Raiddata',
  'rp_export'                       => '내보내기',
  'rp_luaexport'                    => 'LUA 내보내기',
  'rp_cvsexport'                    => 'CVS 내보내기',
  'rp_macroexport'                  => 'Macro 내보내기',
  'rp_export_text'                  => '현 레이드 데이터의 내보내기 형식을 선택해주세요.',
  
  // Lua Export
  'rp_start_lua_export'             => 'Beginning LUA output',
  'rp_lua_file_created'             => 'LUA 파일 생성됨',
  'rp_lua_file_download'            => "다운로드 <a href='%1\$s'>phpRaid_Data.lua</a> 후 [wow-dir]\interface\addons\phpraidviewer 경로에 저장하세요",
  
  // Dropdown Options Menu
  'rp_jsdm_options'                 => 'Options',
  
  // Error Messages
  'rp_error_invalid_mode_provided'	=> 'A valid mode was not provided.',
  'rp_not_logged_in'								=> 'You must be logged in to join a raid!',
  'rp_no_user_assigned'							=> 'The Admin didn\'t set you a character!',
  'rp_no_user_assigned_cm1'					=> 'Please assign ',
  'rp_no_user_assigned_cm2'					=> 'here',
  'rp_no_user_assigned_cm3'					=> 'a new char or change your members class.',
  'rp_class_distribution_not_set'		=> 'Class/ Role distribution is not set correctly!',
  'rp_deadline_reached'		   				=> 'This is an Old Raid or Signup Deadline reached',
  'rp_no_class_setup'								=> 'This raid don\'t have any class limits set.',
  'error_no_users_to_confirm'				=> 'There are no signed in Members to confirm in this raid.',
  'rp_role_distri_error'            => 'The Role distribution is not correct. There might be empty role fields. Please report it to the Administrator.',
  
  // user settings
  'rp_header_vrserttings'						=> 'User Raidview Settings',
  'rp_char_saved'                   => 'Charaktersettings saved successfully',  
  'rp_user_receivemail'             => 'Email notification on new raid entry?',
  
  // config things
  'config'           								=> 'settings',
  'rp_config_saved'                 => 'Settings saved successfully',
  'rp_expand_all'										=> 'Expand all',
  'rp_contract_all'                 => 'Contract all',
  'rp_header_global' 								=> 'General Raidplanner config',
  'rp_header_expert'                => 'Expert Settings',
  'rp_header_layout'                => 'Layout/Style',
  'rp_header_wcroll'                => 'Roll/Wildcard',
  'rp_header_groups'                => 'Groups & Guests',
  'rp_header_time'									=> 'Time & Date',
  'rp_header_mail'                  => 'Email notifications',
  'rp_header_roles'                 => 'Role distribution',
  'rp_header_automatics'            => 'Automatic Functionality',
  'rp_header_usettings'             => 'User- / member settings',
  'rp_header_notes'                 => 'Notes',
  'rp_header_colors'                => 'Color Settings',
  'rp_header_ensettings'            => 'English Settings',
  'rp_help'                         => 'Help',
  'rp_help_desc'                    => 'To get help, we included a manual into Raidplanner. The manual is in pdf format. The <a href="http://adobe.de" target="blank">Adobe Reader</a> is required. <br/>The help file contains help for upgraders of earlier Raidplanner versions. Please use the help file before asking in the forums.<br/><br/><a href="../doc/manual.pdf"><img src="../images/global/help.png"/> Read manual</a>',
  'rp_prefix_addraid'               => 'Add raid',
  'rp_show_ranks'    								=> 'Show ranks in Raidplanner',
  'rp_colored_members'    					=> 'Colored member names',
  'rp_send_email'    								=> 'Email new raids to all users',
  'rp_roll_system'   								=> 'Use the roll-system?',
  'rp_wildcard_sys'  								=> 'Use the wildcard-system?',
  'rp_last_x_days'   								=> 'show recent raids: last x days',
  'rp_mode_caption'									=> 'Raid Mode List',
  'rp_mode_calendar'								=> '1 calendar sheet',
  'rp_mode_calendar2lines'          => '2 calendar sheets',
  'rp_mode_classic'									=> 'Raidlist',
  'rp_mode_mixed'										=> '1 calendar sheet + list',
  'rp_mode_mixed2lines'             => '2 calendar sheets + List',
  'rp_updatecheck'									=> 'Enable check for new Plugin Versions',
  'rp_enableteam'										=> 'Automatic confirm of members with the rank \'permanent Team\'',
  'rp_hours_offset'									=> 'timeframe (in h) between raid begin and invite (Standard: 0h:15m)',
  'rp_hours_offset2'								=> 'timeframe (in h) between raid begin and signin time (Standard: 0h:30m)',
  'rp_cal_ab'												=> 'Place of raid list',
  'rp_ab_above'											=> 'Above Calendar',
  'rp_ab_beyond'										=> 'Beyond Calendar',
  'rp_cal_fweekday'									=> 'First Weekday',
  'rp_cal_hide_ico'									=> 'Hide Instance/Event Icons in Calendar Mode',
  'rp_sort_txt'											=> 'Sort Raid dates:',
  'rp_sort_desc'										=> 'Descended',
  'rp_sort_asc'											=> 'Ascended',
  'rp_repeat_value_p1'							=> 'Add raids',
  'rp_repeat_value_p2'							=> 'days in the future',
  'rp_repeat_enable'								=> 'Automatic raid cloning on repeatable raids',
  'rp_daysoffset'										=> 'Preselect Date x days in the future',
  'rp_short_classnames'							=> 'Hide Class names in raid view: Icons and Tooltips only',
  'rp_enable_levelcap'              => 'min. level for the memberlist in viewraid',
  'rp_hide_hiddenranks'             => 'Hide Members of Hidden Ranks',
  'rp_enable_classbrk'              => 'Enable Linebreak after x classes',
  'rp_enable_officers'              => 'Special permissions for class leader rank/group',
  'rp_disbale_officer_ac'						=> 'Do <b>not</b> automatically confirm Classleaders',
  'rp_enable_groups'                => 'Use more than one group for an raid',
  'rp_hide_raidname'								=> 'Hide Raid name in Calendar Mode',
  'rp_timezone_offset'              => 'Timezone of the server',
  'rp_timezone_us'                  => 'Timezone',
  'rp_timezone_check'               => 'Check - Date of today:',
  'rp_resetday'                     => 'Weekday to reset the Groups saved to Members',
  'rp_enableresetday'               => 'Flush Saved Member Groups obn a special Weekday',
  'rp_savegroups'                   => 'Save Group allocated to the current member',
  'rp_hidenorsigned'                => 'Hide the \'unsigned Members\' Row',
  'rp_hiderows'                     => 'Hide following Status Rows in viewraid',
  'rp_wcexpire'                     => 'Wildcard should expire after x hours',
  'rp_rolltooltip'                  => 'Should the Random Values be shown in a Tooltip?',
  'rp_useguests'                    => 'Enable manual Guest invitation on Raidview',
  'rp_adminnotes'										=> 'Disable the Admin-/Group leader notes on admin-sign-in of members',
  'rp_saveperevent'                 => 'Save per Event',
  'rp_dbversion'                    => 'Database Structure Version',
  'rp_force_update'                 => 'Force DB Update',
  'rp_updwarntxt'                   => 'Should the Database Version be resettet? You will be able to update the table after that again!',
  'rp_resetctext'                   => 'Sgould the color values be resetted to default?',
  'rp_disable_cmnotes'              => 'Disable the Charmanager Notes in the Member Tooltips',
  'rp_disable_memnote'							=> 'Disable the addition of member notes to the raids',
  'rp_help_12hourformat'						=> 'Only for languages with 12h format. In Germany p.e. there\'s only the 24h format, this option will not have any function.',
  'rp_send_activesonly'             => 'Send emails to active users only',
  'rp_flush_usersett'               => 'Reset user Settings',
  'rp_truncate_warn'                => 'All User settings will be removed and the standard settings will be used.',
  'rp_collatecheck'                 => 'Database Collate Check',
  'rp_check_collation'              => 'Check Database',
  'rp_hide_memnotes_guest'          => 'Hide signup member notes for Guests',
  'rp_autoadd_byrank'               => 'Automatically add the members with that rank to the raid on raid creation',
  'rp_autoadd_confirm'              => 'Set Status to confirmed on entry',
  'rp_autoadd_flexible'             => 'Select Rank on raid creation',
  'rp_change_signedstatus'          => 'Change Status after signin time is over',
  'rp_change_possible_time'         => 'Signin changes possible until xx Minutes befor raid starts',
  'rp_hide_rpversion'               => 'Hide Raidplanner Version in Page Footer for security reasons',
  'rp_remove_lock'                  => 'Remove the possibility for admins to sign members off',
  'rp_conf_active'                  => 'Active?',
  'rp_conf_rank'                    => 'Rank',
  'rp_use_comments'                 => 'Use the comment system to let the user add comments to raids',
  'rp_status_colors'                => 'Raidstatus colors',
  'rp_class_colors'                 => 'class colors',
  'rp_reset_colors'                 => 'Reset class color values to default.',
  'rp_default_raid_sort'            => 'Default sorting of the raid view',
  'rp_raid_duration'                => 'Default duration of raid (in h)',
  
  // Cleanup old Raids @config
  'rp_cleantxt1'                    => 'Remove all old raids older than',
  'rp_cleantxt2'                    => 'days',
  'rp_cleanwarn'                    => 'The Raid Statistics will not longer work after the cleanup, because you\'re removing data it uses for calculation!',
  'rp_cleanraids'                   => 'Clean Database',
  'rp_confirmclean'                 => 'Do you really want to remove the selected raids? The statistics will get inefficient.',
  
  // Help
  'rp_help_header'									=> 'Information',
  'rp_help_hraidname'								=> 'Only if Event icons are shown. If you enabled \'hide Event icons\', this option is useless.',
  'rp_help_moregroups'							=> 'If you\'ve got 2 or more groups for the same raid event, you can assign groups to members',
  'rp_help_linebreak'								=> 'If you\'re using a game with many classes, p.e. Everquest 2, the raid view won\'t get too long ',
  'rp_help_cloning'									=> 'For repeatable raids. If you enable this, every site visit will insert <b>one</b> raid. This is because of performance issues.',
  'rp_help_permteam'								=> 'Team members are automatically confirmed for raids.',
  'rp_help_timezone'                => 'Time in GMT (+-0). If your Server is located p.e. in Germany, you must choose GMT +1 and enable the Daylight Saving',
  'rp_help_resetday'                => 'Usefull if your game uses instance reset days, and the users should get another group after that. On the reset day, the member-group table will be flushed.',
  'rp_help_savedgrp'                => 'If enabled and a group is set in the Frontend, it will be saved and displayed in the next raid automatically. Good for static raid groups.',
  'rp_help_hideunsigned'            => 'This Option will hide the not signed members row in the raid view',
  'rp_help_hiderows'                => 'Hide the selected rows in the raid view, you must click on the [+] to show them again. This will save space.',
  'rp_help_wcexpire'                => 'Until now, this must be done via a cronjob',
  'rp_help_rolltooltip'             => 'If activated, the Random Value will be shown in a Tooltip instead of next to the dice-image.',
  'rp_help_guestadd'                => 'If enabled, admins have the possibility to add guests to raids. This should avoid \'Ghost-Members\'.',
  'rp_help_admnote' 								=> 'If a member is signed in by an admin/Groupm leader, a special Adminnote is set. If you enable this option, this Note will not be set.',
  'rp_help_vreset'                  => 'If you\'re upgrading from a previos Alpha/Beta Version, you need to force an update by hand. Click on the button behind the Version to force a n update of the Database tables.',
  'rp_help_officers'								=> 'Class leader are allowed to confirm members of their class, gets automatically confirmed and much more.',
  'rp_help_collatecheck'            => 'Check the collation of your SQL Database. This tool can help if the confirmed members are not shown in the raidview.',
  'rp_help_hidegnotes'              => 'If enabled, only registered users are able to see the members notes. Guests are not able to read them',
  'rp_help_ranktoadd'               => 'This option is for raid groups with fixed groups. The Members with the selected Rank are added to a raid on creation. If they\'ve got no time, they have to unsign.',
  'rp_help_signedstatus'            => 'Member can sign out and change their status when the signin time is over! Notes can be edited either.',
  'rp_help_removelock'              => 'If you want to prevent random-cheating by Admins',
  'rp_distri_select'                => 'Select standard distribution on raid add',
  
  // Warning
  'rp_warn_header'									=> 'WARNING',
  'rp_warn_noadmapprov'             => 'Admins/Groupleader will not longer be able to approve/add Members to the Raids.',
  'rp_warn_dbchanges'               => 'Some update steps might fail if you\'re updating an alpha/beta, thats because of the existing changes in the database.',
  'rp_warn_disablnotes'							=> 'Only disable, if you don\'t want your attendees to add notes to their signup.',
  'rp_warn_ranktoadd'               => 'If role distribution is selected, only members with selected mainchar and role are inserted into the raids.',
  'rp_warn_removelock'              => 'You will not be able to change Member (sign off a member and sign on a twink)!',
  'rp_warn_hiderows'                => 'The settings of the raid view is stored in Cookies. This setting is only for the first view of the Raidplanner page.',
  
  // Information
  'rp_sett_altereduser'             => 'This Setting can be changed by each user in the user settings!',
  
  // Log things
  'action_rpraid_added'           	=> 'Raidplanner: Raid added',
  'action_rpraid_del'             	=> 'Raidplanner: Raid deleted',
  'action_rpraid_changed'          	=> 'Raidplanner: Raid changed',
  'action_rptempl_add'          		=> 'Raidplanner: Saved as Template',
  'action_rpstat_cha'								=> 'Raidplanner: Changed status of Member',
  'action_rptempl_del'          		=> 'Raidplanner: Removed Template',
  
  'rp_raid_act_change'							=> 'Raid changed in Raidplanner',
  'rp_raid_act_add'									=> 'New raid added in Raidplanner',
  'rp_raid_act_del'									=> 'Raid delted in Raidplanner',
  'rp_raid_templ_change'						=> 'Raid template was changed',
  'rp_raid_templ_del'								=> 'Raid template was deleted',
  'rp_raid_templ_del2'							=> 'Raid template deleted',
  'rp_raid_status_changed1'					=> 'Status of Member changed',
  'rp_raid_status_changed2'					=> ': Status changed',
  
  // Time Zone Settings
  'rp_calendar_lang'                => 'ko',
  'rp_status_day'                		=> 'd',
  'rp_status_hours'              		=> 'h',
  'rp_status_minutes'            		=> 'm',
  'rp_time_format'                  => 'Format of the date',
  'rp_format_ddmmyyy'               => 'DD.MM.YYYY',
  'rp_format_mmddyyy'               => 'MM-DD-YYYY',
  'rp_12hourformat'									=> '12시간 포맷 사용?',
  'rp_dstcheck'											=> '자동 일광절약시간 맞추기?',
  'rp_dsthelp' 											=> '선택시, 일광절약시간이 자동으로 맞춰집니다. (한국과는 상관없으니 선택하지 마세요.)',
  'time_-12' 												=> '(GMT - 12:00 hours) Enewetak, Kwajalein',
  'time_-11' 												=> '(GMT - 11:00 hours) Midway Island, Samoa',
  'time_-10' 												=> '(GMT - 10:00 hours) Hawaii',
  'time_-9.5'  											=> '(GMT - 9:30 hours) French Polynesia',
  'time_-9'  												=> '(GMT - 9:00 hours) Alaska',
  'time_-8'  												=> '(GMT - 8:00 hours) Pacific Time (US &amp; Canada)',
  'time_-7'  												=> '(GMT - 7:00 hours) Mountain Time (US &amp; Canada)',
  'time_-6'  												=> '(GMT - 6:00 hours) Central Time (US &amp; Canada), Mexico City',
  'time_-5'  												=> '(GMT - 5:00 hours) Eastern Time (US &amp; Canada), Bogota, Lima',
  'time_-4'  												=> '(GMT - 4:00 hours) Atlantic Time (Canada), Caracas, La Paz',
  'time_-3.5' 											=> '(GMT - 3:30 hours) Newfoundland',
  'time_-3'   											=> '(GMT - 3:00 hours) Brazil, Buenos Aires, Falkland Is.',
  'time_-2'   											=> '(GMT - 2:00 hours) Mid-Atlantic, Ascention Is., St Helena',
  'time_-1'   											=> '(GMT - 1:00 hours) Azores, Cape Verde Islands',
  'time_0'    											=> '(GMT) Casablanca, Dublin, London, Lisbon, Monrovia',
  'time_1'    											=> '(GMT + 1:00 hours) Brussels, Copenhagen, Madrid, Paris',
  'time_2'    											=> '(GMT + 2:00 hours) Kaliningrad, South Africa',
  'time_3'    											=> '(GMT + 3:00 hours) Baghdad, Riyadh, Moscow, Nairobi',
  'time_3.5'  											=> '(GMT + 3:30 hours) Tehran',
  'time_4'    											=> '(GMT + 4:00 hours) Abu Dhabi, Baku, Muscat, Tbilisi',
  'time_4.5'  											=> '(GMT + 4:30 hours) Kabul',
  'time_5'    											=> '(GMT + 5:00 hours) Ekaterinburg, Karachi, Tashkent',
  'time_5.5'  											=> '(GMT + 5:30 hours) Bombay, Calcutta, Madras, New Delhi',
  'time_5.75'  											=> '(GMT + 5:45 hours) Kathmandu',
  'time_6'    											=> '(GMT + 6:00 hours) Almaty, Colombo, Dhaka',
  'time_6.5'  											=> '(GMT + 6:30 hours) Yangon, Naypyidaw, Bantam',
  'time_7'    											=> '(GMT + 7:00 hours) Bangkok, Hanoi, Jakarta',
  'time_8'    											=> '(GMT + 8:00 hours) Hong Kong, Perth, Singapore, Taipei',
  'time_8.75'  											=> '(GMT + 8:45 hours) Caiguna, Eucla',
  'time_9'    											=> '(GMT + 9:00 hours) Osaka, Sapporo, Seoul, Tokyo, Yakutsk',
  'time_9.5'  											=> '(GMT + 9:30 hours) Adelaide, Darwin',
  'time_10'   											=> '(GMT + 10:00 hours) Melbourne, Papua New Guinea, Sydney',
  'time_10.5'  											=> '(GMT + 10:30 hours) Lord Howe Island',
  'time_11'   											=> '(GMT + 11:00 hours) Magadan, New Caledonia, Solomon Is.',
  'time_11.5'  											=> '(GMT + 11:30 hours) Burnt Pine, Kingston',
  'time_12'   											=> '(GMT + 12:00 hours) Auckland, Fiji, Marshall Island',
  'time_12.75' 											=> '(GMT + 12:45 hours) Chatham Islands',
  'time_13'   											=> '(GMT + 13:00 hours) Kamchatka, Anadyr',
  'time_14'   											=> '(GMT + 14:00 hours) Kiritimati',
  
  // Comment System
  'rp_no_comments'                  => 'No entries',
  'rp_comments_raid'                => 'Comment for this raid',
  'rp_write_comment'                => 'write a comment',
  'rp_send_comment'                 => 'save comment',
  'rp_save_wait'                    => 'Please wait, comment is saving...',
  
  //About/credits
  'rp_credits'                      => 'Credits',
  'rp_about_header'									=> 'Raidplanner Credits',
  'rp_created by'             			=> 'written by',
  'rp_contact_info'            			=> 'Contact Information',
  'rp_url_web'                 			=> 'Web',
  'rp_additions'              			=> 'Additions to Raidplanner',
  'rp_copyright'										=> 'Copyright',
  'rp_created_devteam'							=> 'by WalleniuM',
  
  // E-Mail System
  'rp_sendheader'                   => 'A New Raid was added',
  'rp_nohtml_msg'                   => 'To view the message, please use an HTML compatible email viewer!',
  'rp_mail_method'                  => 'Mailer',
  'rp_mail_mail'                    => 'PHP-Mail-Function',
  'rp_mail_sendmail'                => 'Sendmail',
  'rp_mail_smtp'                    => 'SMTP-Server',
  'rp_mail_settings'                => 'Send method settings',
  'rp_smtp_user'                    => 'SMTP-Username',
  'rp_smtp_password'                => 'SMTP-Password',
  'rp_smtp_host'                    => 'SMTP-Host',
  'rp_smtp_auth'                    => 'SMTP-Auth',
  'rp_sendmail_path'                => 'Sendmail-Path',
  'rp_sender_address'               => 'Mail from (Address)',
  'rp_sender_name'                  => 'From Name',
  'rp_phpini_value'                 => 'php.ini value',
  'rp_phpini_novalue'               => 'no value',
  'rp_mail_send_confirmation'       => 'Send email on confirmation',
  
  // Portal Modules
  'nextraids'                       => '다음 레이드',
  'rp_nextraids_signoff'            => '불참',
  'rp_nextraids_signon'             => '참가신청',
  'rp_nextraids_total'              => '총',
  'rp_nextraids_confirmed'          => '참가확정',
  'rp_nextraids_missing'            => '필요인원',
  'rp_nextraids_details'            => '멤버 보기',
  'rp_nextraids_notsigned'          => '아직 신청하지 않았음!',
  'rp_nextraids_noraids'            => '레이드 없음',
  'rp_nextraids_limit'              => 'Limit of next raids',
  'rp_sendconfirmheader'            => 'Confirmed for raid',
  
  // LogMangager
  'rp_logmanager'                   => 'View Logs',
  'rp_log_attached'                 => 'Raid ID',
  'rp_log_raidinfo'                 => 'Raid info',
  'rp_log_tag'                      => 'Action',
  
  // Log entries
  'log_changed_status'              => 'Changed Status',
  'log_status'                      => 'Signed in Status',
  'log_status_0'                    => 'Confirmed',
  'log_status_1'                    => 'Signed in',
  'log_status_2'                    => 'Signed out',
  'log_status_3'                    => 'Pool',
  'log_member'                      => 'signed in member',
  'log_role'                        => 'role',
  'log_random'                      => 'random value',
  'log_closedopen_raid'             => 'Raid opened/closed',
  'log_closedstatus'                => 'Status',
  'log_raid_closed'                 => 'Raid closed',
  'log_raid_opened'                 => 'Raid opened',
  'log_admin_change_stat'           => 'Admin changedthe Status',
  'log_admin'                       => 'Administrator',
  'rp_log_days'                     => 'days',
  'rp_log_delete'                   => 'Delete entries older than',
  'rp_log_deleteb'                  => 'delete',
  
  // RSS Feeds
  'rp_rss_enabled'                  => 'Enable RSS Feed',
  'rp_rss_title'                    => 'Actual Raid dates',
  'rp_rss_description'              => 'The actual raid dates of the raid planner',
  'rp_rss_itemtitle'                => "%1\$s on %2\$s",
  'rp_rss_itemdesc'                 => "Raid target: %1\$s, Free: %2\$s, Sign in until %3\$s",
  'rp_cache_unwriteable'            => 'Der Ordner "raidplan/includes/cache" is not writeable. Please change the permission to use the RSS Feed.',
  
  // Role Manager
  'rp_rolemanager'                  => 'Manage Roles',
  'rp_role_langname'                => 'Display name',
  'rp_role_name'                    => 'Name [MUST be lowercase!]',
  'rp_role_names'                   => 'Name',
  'rp_role_classes'                 => 'Classes of the role',
  'rp_role_new'                     => 'Add new role',
  'rp_add_role'                     => 'Add role',
  'rp_edit_role'                    => 'Edit',
  'rp_edit_role2'                   => 'Edit Role',
  'rp_role_id'                      => 'ID',
  'rp_reset_roles'                  => 'Load default roles',
  'rp_reset_rolestext'              => 'All existing role settings will be flushed!',
  
  // Roles
  'rp_tank'                         => '탱커',
  'rp_healer'                       => '힐러',
  'rp_melee'                        => '근접 딜러',
  'rp_range'                        => '원거리 딜러',
  'rp_damagedealer'                 => '데미지 딜러',
  'rp_supporter'                    => '지원',
  'rp_crowdcontrol'                 => 'Crowd Control',
  
  // Usersettings
  'rp_user_settings'                => 'User settings',
  'rp_help_usersettings'            => 'Which settings should be changed by the users? Not all settings changeable, only a few!',
  'rp_us_layout'                    => 'Layout settings',
  'rp_us_email'                     => 'Email settings',
  'rp_us_time'                      => 'Time settings',
  
  // CM API
  'rp_cmapi_title'                  => 'Charmanager API',
  'rp_cmapi_notfound'               => 'The CharManager API was not found. To use it, you must install Charmanager 1.4.1 or higher.',
  'rp_cmapi_version'                => 'CM API Version',
  'rp_cm_version'                   => 'CM Version',
  'rp_cmapi_status'                 => 'Status',
  'rp_cmapi_disabled'               => 'Charmanager not installed, API inactive',
  'rp_cmapi_enabled'                => 'Charmanager installed, API active',
  'rp_cmapi_too_old'                => 'Charmanager API too old. Please update the Charmanager!', 
  
  // Transform Raid
  'rp_trans_comfirm'                => 'Convert confirmed Members',
  'rp_trans_signin'                 => 'Convert signed in Members',
  'rp_trans_notsure'                => 'Convert not sure members',
  'rp_button_transform'             => 'Convert',
  
);
?>
