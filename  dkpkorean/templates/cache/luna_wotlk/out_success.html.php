<?php
if ($this->security()) {
echo '<table width="100%" cellspacing="1" cellpadding="2" border="0">
	<tr>
		<th> ' . ((isset($this->_tpldata['.'][0]['L_SUCCESS'])) ? $this->_tpldata['.'][0]['L_SUCCESS'] : ((isset($user->lang['SUCCESS'])) ? $user->lang['SUCCESS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SUCCESS'))) . ' 	}')) . ' </th>
	</tr>
	';// BEGIN sucs
$_sucs_count = (isset($this->_tpldata['sucs.'])) ?  sizeof($this->_tpldata['sucs.']) : 0;
if ($_sucs_count) {
for ($_sucs_i = 0; $_sucs_i < $_sucs_count; $_sucs_i++)
{
echo '
	<tr class="' . ((isset($this->_tpldata['sucs.'][$_sucs_i]['CLASS'])) ? $this->_tpldata['sucs.'][$_sucs_i]['CLASS'] : '') . '">
		<td>' . ((isset($this->_tpldata['sucs.'][$_sucs_i]['PART1'])) ? $this->_tpldata['sucs.'][$_sucs_i]['PART1'] : '') . ' ' . ((isset($this->_tpldata['sucs.'][$_sucs_i]['PART2'])) ? $this->_tpldata['sucs.'][$_sucs_i]['PART2'] : '') . '</td>
	</tr>
	';}}
// END sucs
echo '
	<tr><th>' . ((isset($this->_tpldata['.'][0]['L_LINKS'])) ? $this->_tpldata['.'][0]['L_LINKS'] : ((isset($user->lang['LINKS'])) ? $user->lang['LINKS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LINKS'))) . ' 	}')) . '</th></tr>
	';// BEGIN links
$_links_count = (isset($this->_tpldata['links.'])) ?  sizeof($this->_tpldata['links.']) : 0;
if ($_links_count) {
for ($_links_i = 0; $_links_i < $_links_count; $_links_i++)
{
echo '
	<tr class="' . ((isset($this->_tpldata['links.'][$_links_i]['CLASS'])) ? $this->_tpldata['links.'][$_links_i]['CLASS'] : '') . '">
		<td><a href="' . ((isset($this->_tpldata['links.'][$_links_i]['SUC_LINK'])) ? $this->_tpldata['links.'][$_links_i]['SUC_LINK'] : '') . '">' . ((isset($this->_tpldata['links.'][$_links_i]['SUC_PAGE'])) ? $this->_tpldata['links.'][$_links_i]['SUC_PAGE'] : '') . '</a></th>
	</tr>
	';}}
// END links
echo '
	<tr><th>&nbsp;</th></tr>
</table>';
}
?>