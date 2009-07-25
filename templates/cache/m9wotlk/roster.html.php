<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
echo '
<table width="100%" border="0" cellspacing="1" cellpadding="3">
  <tr class=row1>
  <td>
<div id="inner_wrapper">
	';// BEGIN class_row
$_class_row_count = (isset($this->_tpldata['class_row.'])) ?  sizeof($this->_tpldata['class_row.']) : 0;
if ($_class_row_count) {
for ($_class_row_i = 0; $_class_row_i < $_class_row_count; $_class_row_i++)
{
echo '
	
		<span class="maintitle"> ' . ((isset($this->_tpldata['class_row.'][$_class_row_i]['CLASS_ICONS'])) ? $this->_tpldata['class_row.'][$_class_row_i]['CLASS_ICONS'] : '') . ' ' . ((isset($this->_tpldata['class_row.'][$_class_row_i]['CLASS_NAME'])) ? $this->_tpldata['class_row.'][$_class_row_i]['CLASS_NAME'] : '') . ' </span>
		<hr>
		
		<div class="member_wrapper">
			';// BEGIN member
$_member_count = (isset($this->_tpldata['class_row.'][$_class_row_i]['member.'])) ? sizeof($this->_tpldata['class_row.'][$_class_row_i]['member.']) : 0;
if ($_member_count) {
for ($_member_i = 0; $_member_i < $_member_count; $_member_i++)
{
echo '
			<div class="floatR right"> ' . ((isset($this->_tpldata['class_row.'][$_class_row_i]['member.'][$_member_i]['MEMBER_GILDE'])) ? $this->_tpldata['class_row.'][$_class_row_i]['member.'][$_member_i]['MEMBER_GILDE'] : '') . ' ' . ((isset($this->_tpldata['class_row.'][$_class_row_i]['member.'][$_member_i]['MEMBER_LEVEL'])) ? $this->_tpldata['class_row.'][$_class_row_i]['member.'][$_member_i]['MEMBER_LEVEL'] : '') . '  </div> 	
				' . ((isset($this->_tpldata['class_row.'][$_class_row_i]['member.'][$_member_i]['MEMBER_RACE_ICON'])) ? $this->_tpldata['class_row.'][$_class_row_i]['member.'][$_member_i]['MEMBER_RACE_ICON'] : '') . ' ' . ((isset($this->_tpldata['class_row.'][$_class_row_i]['member.'][$_member_i]['MEMBER_SPEC'])) ? $this->_tpldata['class_row.'][$_class_row_i]['member.'][$_member_i]['MEMBER_SPEC'] : '') . '  <a href=' . ((isset($this->_tpldata['class_row.'][$_class_row_i]['member.'][$_member_i]['U_VIEW_MEMBER'])) ? $this->_tpldata['class_row.'][$_class_row_i]['member.'][$_member_i]['U_VIEW_MEMBER'] : '') . '>' . ((isset($this->_tpldata['class_row.'][$_class_row_i]['member.'][$_member_i]['MEMBER_NAME'])) ? $this->_tpldata['class_row.'][$_class_row_i]['member.'][$_member_i]['MEMBER_NAME'] : '') . ' </a>
				<hr class="roster_hr_member">
			';}}
// END member
echo '
		</div>		
		<br><br>
	';}}
// END class_row
echo '
</div>
</td>
</tr>
</table>
';// INCLUDE page_tail.html
$this->assign_from_include('page_tail.html');

}
?>