<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
echo '
<form method="post" action="' . ((isset($this->_tpldata['.'][0]['F_LISTUSERS'])) ? $this->_tpldata['.'][0]['F_LISTUSERS'] : '') . '" name="post">
<div id="inner_wrapper">	
		<div class="member_wrapper">
			';// BEGIN row_users
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
			' . ((isset($this->_tpldata['.'][0]['F_TEXTAREA'])) ? $this->_tpldata['.'][0]['F_TEXTAREA'] : '') . ' 
			<br>' . ((isset($this->_tpldata['.'][0]['F_SUBMIT'])) ? $this->_tpldata['.'][0]['F_SUBMIT'] : '') . '
			
		</div>		
		
</div>
</form>
';// INCLUDE page_tail.html
$this->assign_from_include('page_tail.html');

}
?>