<?php
if ($this->security()) {
echo '' . ((isset($this->_tpldata['.'][0]['EDITOR_INIT'])) ? $this->_tpldata['.'][0]['EDITOR_INIT'] : '') . '
';echo '<!-- Thats the data table ;) we don\'t change anything here :P -->';echo '
<form method="post" action="' . ((isset($this->_tpldata['.'][0]['F_ACTION'])) ? $this->_tpldata['.'][0]['F_ACTION'] : '') . '" name="post">
<table width="100%" border="0" cellspacing="1" cellpadding="2">
	<input name="changed" value="" type="hidden" /> 
	  <tr><th colspan="4" align=center>' . ((isset($this->_tpldata['.'][0]['L_INFO_PAGEOPT'])) ? $this->_tpldata['.'][0]['L_INFO_PAGEOPT'] : ((isset($user->lang['INFO_PAGEOPT'])) ? $user->lang['INFO_PAGEOPT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'INFO_PAGEOPT'))) . ' 	}')) . '</th></tr>
      <tr>
		<td class="row1">' . ((isset($this->_tpldata['.'][0]['L_INFO_PAGELIST'])) ? $this->_tpldata['.'][0]['L_INFO_PAGELIST'] : ((isset($user->lang['INFO_PAGELIST'])) ? $user->lang['INFO_PAGELIST'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'INFO_PAGELIST'))) . ' 	}')) . '</td>
		<td class="row1">
			<select name="pagelist" class="input" ' . ((isset($this->_tpldata['.'][0]['DISABLE_BUTTON'])) ? $this->_tpldata['.'][0]['DISABLE_BUTTON'] : '') . ' onchange="javascript:this.form.changed.value=\'PAGE\'; form.submit();">
        			';// BEGIN pages_row
$_pages_row_count = (isset($this->_tpldata['pages_row.'])) ?  sizeof($this->_tpldata['pages_row.']) : 0;
if ($_pages_row_count) {
for ($_pages_row_i = 0; $_pages_row_i < $_pages_row_count; $_pages_row_i++)
{
echo '
        			<option value="' . ((isset($this->_tpldata['pages_row.'][$_pages_row_i]['VALUE'])) ? $this->_tpldata['pages_row.'][$_pages_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['pages_row.'][$_pages_row_i]['SELECTED'])) ? $this->_tpldata['pages_row.'][$_pages_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['pages_row.'][$_pages_row_i]['OPTION'])) ? $this->_tpldata['pages_row.'][$_pages_row_i]['OPTION'] : '') . '</option>
        			';}}
// END pages_row
echo '
      		</select>
		</td>
		<td class="row2">' . ((isset($this->_tpldata['.'][0]['L_INFO_PAGE_TITLE'])) ? $this->_tpldata['.'][0]['L_INFO_PAGE_TITLE'] : ((isset($user->lang['INFO_PAGE_TITLE'])) ? $user->lang['INFO_PAGE_TITLE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'INFO_PAGE_TITLE'))) . ' 	}')) . '</td>
		<td class="row2"><input type="text" name="title" size="32" value="' . ((isset($this->_tpldata['.'][0]['INFO_PAGE_TITLE'])) ? $this->_tpldata['.'][0]['INFO_PAGE_TITLE'] : '') . '" class="input" /></td>	
	</tr>
	<tr>
		<td class="row1">' . ((isset($this->_tpldata['.'][0]['L_INFO_PAGE_ISE'])) ? $this->_tpldata['.'][0]['L_INFO_PAGE_ISE'] : ((isset($user->lang['INFO_PAGE_ISE'])) ? $user->lang['INFO_PAGE_ISE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'INFO_PAGE_ISE'))) . ' 	}')) . '</td>
		<td class="row1"><input type="checkbox" name="ise" value="1" ' . ((isset($this->_tpldata['.'][0]['INFO_PAGE_ISE'])) ? $this->_tpldata['.'][0]['INFO_PAGE_ISE'] : '') . ' /></td>
		<td class="row2">' . ((isset($this->_tpldata['.'][0]['L_INFO_PAGE_ML'])) ? $this->_tpldata['.'][0]['L_INFO_PAGE_ML'] : ((isset($user->lang['INFO_PAGE_ML'])) ? $user->lang['INFO_PAGE_ML'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'INFO_PAGE_ML'))) . ' 	}')) . '</td>
		<td class="row2">
			<select name="ml" class="input">
        			';// BEGIN ml_row
$_ml_row_count = (isset($this->_tpldata['ml_row.'])) ?  sizeof($this->_tpldata['ml_row.']) : 0;
if ($_ml_row_count) {
for ($_ml_row_i = 0; $_ml_row_i < $_ml_row_count; $_ml_row_i++)
{
echo '
        			<option value="' . ((isset($this->_tpldata['ml_row.'][$_ml_row_i]['VALUE'])) ? $this->_tpldata['ml_row.'][$_ml_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['ml_row.'][$_ml_row_i]['SELECTED'])) ? $this->_tpldata['ml_row.'][$_ml_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['ml_row.'][$_ml_row_i]['OPTION'])) ? $this->_tpldata['ml_row.'][$_ml_row_i]['OPTION'] : '') . '</option>
        			';}}
// END ml_row
echo '
      		</select>
		</td>	
	</tr>
	<tr>
		<td class="row1">' . ((isset($this->_tpldata['.'][0]['L_INFO_PAGE_VIS'])) ? $this->_tpldata['.'][0]['L_INFO_PAGE_VIS'] : ((isset($user->lang['INFO_PAGE_VIS'])) ? $user->lang['INFO_PAGE_VIS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'INFO_PAGE_VIS'))) . ' 	}')) . '</td>
		<td class="row1">
			<select name="vis" class="input">
        			';// BEGIN vis_row
$_vis_row_count = (isset($this->_tpldata['vis_row.'])) ?  sizeof($this->_tpldata['vis_row.']) : 0;
if ($_vis_row_count) {
for ($_vis_row_i = 0; $_vis_row_i < $_vis_row_count; $_vis_row_i++)
{
echo '
        			<option value="' . ((isset($this->_tpldata['vis_row.'][$_vis_row_i]['VALUE'])) ? $this->_tpldata['vis_row.'][$_vis_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['vis_row.'][$_vis_row_i]['SELECTED'])) ? $this->_tpldata['vis_row.'][$_vis_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['vis_row.'][$_vis_row_i]['OPTION'])) ? $this->_tpldata['vis_row.'][$_vis_row_i]['OPTION'] : '') . '</option>
        			';}}
// END vis_row
echo '
      		</select>
		</td>	
    <td class="row2">&nbsp;</td>
		<td class="row2">&nbsp;</td>
		
	</tr>
	
	<tr>
		<th colspan="4" align="center">' . ((isset($this->_tpldata['.'][0]['L_INFO_PAGE_CONTENT'])) ? $this->_tpldata['.'][0]['L_INFO_PAGE_CONTENT'] : ((isset($user->lang['INFO_PAGE_CONTENT'])) ? $user->lang['INFO_PAGE_CONTENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'INFO_PAGE_CONTENT'))) . ' 	}')) . '</th>
	</tr>
	<tr>
		<td colspan="4"  align="center" class="row1"><textarea class="mceEditor" cols="' . ((isset($this->_tpldata['.'][0]['INFO_TEXT_COLS'])) ? $this->_tpldata['.'][0]['INFO_TEXT_COLS'] : '') . '" rows="' . ((isset($this->_tpldata['.'][0]['INFO_TEXT_ROWS'])) ? $this->_tpldata['.'][0]['INFO_TEXT_ROWS'] : '') . '" name="page_content">' . ((isset($this->_tpldata['.'][0]['INFO_PAGE_CONTENT'])) ? $this->_tpldata['.'][0]['INFO_PAGE_CONTENT'] : '') . '</textarea></td>
  	</tr>
	<tr><th class="footer" colspan="4">' . ((isset($this->_tpldata['.'][0]['EDITED'])) ? $this->_tpldata['.'][0]['EDITED'] : '') . '</th></tr>
  	<tr>
		<td align="center"><input type="submit" name="infoaddbu" value="Add" class="mainoption" /></td>
		<td align="center"><input type="submit" name="infoupdatebu" value="Update" class="mainoption" ' . ((isset($this->_tpldata['.'][0]['DISABLE_BUTTON'])) ? $this->_tpldata['.'][0]['DISABLE_BUTTON'] : '') . '/></td>
		<td align="center">&nbsp;</td>
		<td align="center"><input type="submit" name="infodelbu" value="Delete" class="mainoption" ' . ((isset($this->_tpldata['.'][0]['DISABLE_BUTTON'])) ? $this->_tpldata['.'][0]['DISABLE_BUTTON'] : '') . '/></td>
	</tr>
</table>
</form>
';echo '<!-- That\'s the End of the Data Table ;) -->';echo '
<br /><center><span class="copy">' . ((isset($this->_tpldata['.'][0]['CREDITS'])) ? $this->_tpldata['.'][0]['CREDITS'] : '') . '</span></center>';
}
?>