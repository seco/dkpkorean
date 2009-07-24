<?php
if ($this->security()) {
echo '<script language="javascript" type="text/javascript">
			function dl_check_permission(){
				';// BEGIN js_registered_cats
$_js_registered_cats_count = (isset($this->_tpldata['js_registered_cats.'])) ?  sizeof($this->_tpldata['js_registered_cats.']) : 0;
if ($_js_registered_cats_count) {
for ($_js_registered_cats_i = 0; $_js_registered_cats_i < $_js_registered_cats_count; $_js_registered_cats_i++)
{
echo '
				if (document.dl_edit.dl_edit_category.value == ' . ((isset($this->_tpldata['js_registered_cats.'][$_js_registered_cats_i]['DL_CATID'])) ? $this->_tpldata['js_registered_cats.'][$_js_registered_cats_i]['DL_CATID'] : '') . '){document.dl_edit.dl_edit_permission.disabled = true;
					document.dl_edit.dl_edit_permission.selectedIndex = 0;
				}	else {document.dl_edit.dl_edit_permission.disabled = false;};
				';}}
// END js_registered_cats
echo '
			}
			

			function dl_check_fields(){
				if (document.dl_edit.dl_edit_description.value == ""){
					jBox.alert(\'' . ((isset($this->_tpldata['.'][0]['DL_AD_FIELDS_EMPTY'])) ? $this->_tpldata['.'][0]['DL_AD_FIELDS_EMPTY'] : '') . '\', 300, 36);
					return false;
				};
			}
          </script>	
    <center><b>' . ((isset($this->_tpldata['.'][0]['DL_ERROR'])) ? $this->_tpldata['.'][0]['DL_ERROR'] : '') . '</b></center>
    <table width="98%" border="0" align="center" cellpadding="2" cellspacing="1">
	  <tr>
	    <th colspan="6"><a name="edit"></a><img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'plugins/downloads/images/edit.png" alt="Edit" align="absmiddle"><span class="footer">' . ((isset($this->_tpldata['.'][0]['DL_EDIT_HEADLINE'])) ? $this->_tpldata['.'][0]['DL_EDIT_HEADLINE'] : '') . '</span></th>
      </tr>
	  <form action="' . ((isset($this->_tpldata['.'][0]['DL_EDIT_FORM_ACTION'])) ? $this->_tpldata['.'][0]['DL_EDIT_FORM_ACTION'] : '') . '" method="post" name="dl_edit" onSubmit="return dl_check_fields();">
	    <tr class="row1">
	      <td align="left" style="padding-left: 10px;">&nbsp;</td>
	      <td align="left" style="padding-left: 10px;">' . ((isset($this->_tpldata['.'][0]['DL_URL_HEADLINE'])) ? $this->_tpldata['.'][0]['DL_URL_HEADLINE'] : '') . '*</td>
	      <td  style="padding-left: 10px;">' . ((isset($this->_tpldata['.'][0]['DL_DESC_HEADLINE'])) ? $this->_tpldata['.'][0]['DL_DESC_HEADLINE'] : '') . '*</td>
	      <td style="padding-left: 10px;">' . ((isset($this->_tpldata['.'][0]['DL_COMMENT_HEADLINE'])) ? $this->_tpldata['.'][0]['DL_COMMENT_HEADLINE'] : '') . '</td>
	      <td style="padding-left: 10px;">' . ((isset($this->_tpldata['.'][0]['DL_CAT_HEADLINE'])) ? $this->_tpldata['.'][0]['DL_CAT_HEADLINE'] : '') . '</td>
	      <td style="padding-left: 10px;">' . ((isset($this->_tpldata['.'][0]['DL_PERM_HEADLINE'])) ? $this->_tpldata['.'][0]['DL_PERM_HEADLINE'] : '') . '</td>
        </tr>
	    <tr class="row1">
	      <td align="left" width="16"><a href="' . ((isset($this->_tpldata['.'][0]['DL_LINK_DELETE_URL'])) ? $this->_tpldata['.'][0]['DL_LINK_DELETE_URL'] : '') . '" title="' . ((isset($this->_tpldata['.'][0]['DL_TITLE_LINK_DELETE'])) ? $this->_tpldata['.'][0]['DL_TITLE_LINK_DELETE'] : '') . '"><img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'plugins/downloads/images/delete.png" alt="Delete"></a></td>
	      <td align="left" width="100">';// IF DL_S_IS_LOCALFILE
if ($this->_tpldata['.'][0]['DL_S_IS_LOCALFILE']) { 
echo '' . ((isset($this->_tpldata['.'][0]['DL_EDIT_URL'])) ? $this->_tpldata['.'][0]['DL_EDIT_URL'] : '') . '<input class="input" type="hidden" name="dl_edit_url" style="width:100px" id="dl_edit_url" value="1100101">';// ELSE
} else {
echo '<input class="input" type="text" name="dl_edit_url" style="width:100px" id="dl_edit_url" value="' . ((isset($this->_tpldata['.'][0]['DL_EDIT_URL'])) ? $this->_tpldata['.'][0]['DL_EDIT_URL'] : '') . '">';// ENDIF
}
echo '</td>
	      <td width="100"><input class="input" type="text" name="dl_edit_description" id="dl_edit_description" value="' . ((isset($this->_tpldata['.'][0]['DL_EDIT_DESCRIPTION'])) ? $this->_tpldata['.'][0]['DL_EDIT_DESCRIPTION'] : '') . '" style="width:100px"> </td>
	      <td  align="left" nowrap>
	        <input class="input" type="text" name="dl_edit_comment" id="dl_edit_comment" value="' . ((isset($this->_tpldata['.'][0]['DL_EDIT_COMMENT'])) ? $this->_tpldata['.'][0]['DL_EDIT_COMMENT'] : '') . '" style="width:95%">
	        </td>
	      <td width="90" align="right"> ' . ((isset($this->_tpldata['.'][0]['DL_EDIT_CATEGORY_SELECT'])) ? $this->_tpldata['.'][0]['DL_EDIT_CATEGORY_SELECT'] : '') . ' </td>
	      <td width="90" align="right"><select name="dl_edit_permission" id="dl_edit_permission" class="input">
	        <option value="0" ' . ((isset($this->_tpldata['.'][0]['DL_PERM_EDIT_SELECT_0'])) ? $this->_tpldata['.'][0]['DL_PERM_EDIT_SELECT_0'] : '') . '>' . ((isset($this->_tpldata['.'][0]['DL_PERM_REGISTERED'])) ? $this->_tpldata['.'][0]['DL_PERM_REGISTERED'] : '') . '</option>
	        <option value="1" ' . ((isset($this->_tpldata['.'][0]['DL_PERM_EDIT_SELECT_1'])) ? $this->_tpldata['.'][0]['DL_PERM_EDIT_SELECT_1'] : '') . '>' . ((isset($this->_tpldata['.'][0]['DL_PERM_PUBLIC'])) ? $this->_tpldata['.'][0]['DL_PERM_PUBLIC'] : '') . '</option>
          </select></td>
        </tr>
	    <tr>
	      <th colspan="6"> <input class="mainoption" type="submit" value="' . ((isset($this->_tpldata['.'][0]['DL_AD_SEND'])) ? $this->_tpldata['.'][0]['DL_AD_SEND'] : '') . '">
	        <input class="liteoption" type="reset" value="' . ((isset($this->_tpldata['.'][0]['DL_AD_RESET'])) ? $this->_tpldata['.'][0]['DL_AD_RESET'] : '') . '"></th>
        </tr>
      </form>
</table>
<script language="javascript" type="text/javascript">
dl_check_permission();
</script>';
}
?>