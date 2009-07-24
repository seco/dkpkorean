<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
echo '
<form method="post" action="' . ((isset($this->_tpldata['.'][0]['F_LISTUSERS'])) ? $this->_tpldata['.'][0]['F_LISTUSERS'] : '') . '" name="post">
<div id="inner_wrapper">	
		<div class="member_wrapper">

		';// IF SENDTO
if ($this->_tpldata['.'][0]['SENDTO']) { 
echo '	 
			<span class="maintitle">' . ((isset($this->_tpldata['.'][0]['F_NOTICE_IMG'])) ? $this->_tpldata['.'][0]['F_NOTICE_IMG'] : '') . ' </span> ' . ((isset($this->_tpldata['.'][0]['F_NOTICE'])) ? $this->_tpldata['.'][0]['F_NOTICE'] : '') . '
		';// ELSE
} else {
// BEGIN row_users
$_row_users_count = (isset($this->_tpldata['row_users.'])) ?  sizeof($this->_tpldata['row_users.']) : 0;
if ($_row_users_count) {
for ($_row_users_i = 0; $_row_users_i < $_row_users_count; $_row_users_i++)
{
echo '
				<div class="floatR right">' . ((isset($this->_tpldata['row_users.'][$_row_users_i]['USER_MAIL'])) ? $this->_tpldata['row_users.'][$_row_users_i]['USER_MAIL'] : '') . ' ' . ((isset($this->_tpldata['row_users.'][$_row_users_i]['USER_ICQ'])) ? $this->_tpldata['row_users.'][$_row_users_i]['USER_ICQ'] : '') . ' ' . ((isset($this->_tpldata['row_users.'][$_row_users_i]['USER_SKYPE'])) ? $this->_tpldata['row_users.'][$_row_users_i]['USER_SKYPE'] : '') . ' ' . ((isset($this->_tpldata['row_users.'][$_row_users_i]['USER_MSN'])) ? $this->_tpldata['row_users.'][$_row_users_i]['USER_MSN'] : '') . ' ' . ((isset($this->_tpldata['row_users.'][$_row_users_i]['USER_IRC'])) ? $this->_tpldata['row_users.'][$_row_users_i]['USER_IRC'] : '') . '    </div> 	
				' . ((isset($this->_tpldata['row_users.'][$_row_users_i]['USER_CHECKBOX'])) ? $this->_tpldata['row_users.'][$_row_users_i]['USER_CHECKBOX'] : '') . ' ' . ((isset($this->_tpldata['row_users.'][$_row_users_i]['USER_FLAG'])) ? $this->_tpldata['row_users.'][$_row_users_i]['USER_FLAG'] : '') . ' <b>' . ((isset($this->_tpldata['row_users.'][$_row_users_i]['USER_NAME'])) ? $this->_tpldata['row_users.'][$_row_users_i]['USER_NAME'] : '') . '</b> ' . ((isset($this->_tpldata['row_users.'][$_row_users_i]['USER_NAMES'])) ? $this->_tpldata['row_users.'][$_row_users_i]['USER_NAMES'] : '') . '  ' . ((isset($this->_tpldata['row_users.'][$_row_users_i]['USER_PHONE'])) ? $this->_tpldata['row_users.'][$_row_users_i]['USER_PHONE'] : '') . ' ' . ((isset($this->_tpldata['row_users.'][$_row_users_i]['USER_CELLPHONE'])) ? $this->_tpldata['row_users.'][$_row_users_i]['USER_CELLPHONE'] : '') . ' 
				<hr class="roster_hr_member">
			';}}
// END row_users
echo '
			<br><br>		
			<b>' . ((isset($this->_tpldata['.'][0]['F_SMS_HEADER'])) ? $this->_tpldata['.'][0]['F_SMS_HEADER'] : '') . '  ' . ((isset($this->_tpldata['.'][0]['F_ACC_INFO'])) ? $this->_tpldata['.'][0]['F_ACC_INFO'] : '') . ' </b><br>' . ((isset($this->_tpldata['.'][0]['F_TEXTAREA'])) ? $this->_tpldata['.'][0]['F_TEXTAREA'] : '') . ' 			
			<br><br>' . ((isset($this->_tpldata['.'][0]['F_SUBMIT'])) ? $this->_tpldata['.'][0]['F_SUBMIT'] : '') . '<br><br>' . ((isset($this->_tpldata['.'][0]['F_SMS_INFO'])) ? $this->_tpldata['.'][0]['F_SMS_INFO'] : '') . '' . ((isset($this->_tpldata['.'][0]['F_SEND_INFO'])) ? $this->_tpldata['.'][0]['F_SEND_INFO'] : '') . '		 				
		';// ENDIF
}
echo '

		</div>		
		
</div>
</form>
';// INCLUDE page_tail.html
$this->assign_from_include('page_tail.html');

}
?>