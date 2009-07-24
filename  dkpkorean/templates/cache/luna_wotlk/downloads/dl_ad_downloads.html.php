<?php
if ($this->security()) {
echo '<div align="center" style="font-weight:bold;">' . ((isset($this->_tpldata['.'][0]['DL_ERROR'])) ? $this->_tpldata['.'][0]['DL_ERROR'] : '') . '</div> 
   ' . ((isset($this->_tpldata['.'][0]['DL_AD_NOCATS'])) ? $this->_tpldata['.'][0]['DL_AD_NOCATS'] : '') . '
   <form action="' . ((isset($this->_tpldata['.'][0]['DL_MASSEDIT_ACTION'])) ? $this->_tpldata['.'][0]['DL_MASSEDIT_ACTION'] : '') . '" method="post">
   

    ';// BEGIN index_list
$_index_list_count = (isset($this->_tpldata['index_list.'])) ?  sizeof($this->_tpldata['index_list.']) : 0;
if ($_index_list_count) {
for ($_index_list_i = 0; $_index_list_i < $_index_list_count; $_index_list_i++)
{
echo '
      <table width="98%" border="0" cellspacing="0" cellpadding="2">
        
        <tr>
          <td colspan="1">
          
            <table width="100%" border="0" cellspacing="1" cellpadding="2">
              <tr>
                <th colspan="8" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'plugins/downloads/admin/categories.php' . ((isset($this->_tpldata['.'][0]['SID'])) ? $this->_tpldata['.'][0]['SID'] : '') . '"><strong>' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['DL_CAT_HEADLINE'])) ? $this->_tpldata['index_list.'][$_index_list_i]['DL_CAT_HEADLINE'] : '') . ': ' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['DL_CAT_NAME'])) ? $this->_tpldata['index_list.'][$_index_list_i]['DL_CAT_NAME'] : '') . '</strong></a></th>
              </tr>
';// IF index_list.DL_S_NOLINKS
if ($this->_tpldata['index_list.'][$_index_list_i]['DL_S_NOLINKS']) { 
echo '
              <tr>
                <td colspan="8" align="center" nowrap="nowrap" class="row2">' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['DL_CAT_NOLINKS'])) ? $this->_tpldata['index_list.'][$_index_list_i]['DL_CAT_NOLINKS'] : '') . '</td>
              </tr>
';// ELSE
} else {
echo '           
              <tr>
                <th align="center" width="20" nowrap="nowrap">&nbsp;</th>
                <th align="left" width="35" nowrap="nowrap">' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['DL_ACTION_HEADLINE'])) ? $this->_tpldata['index_list.'][$_index_list_i]['DL_ACTION_HEADLINE'] : '') . '</th>
                <th align="left" width="35" nowrap="nowrap"><a href="downloads.php' . ((isset($this->_tpldata['.'][0]['SID'])) ? $this->_tpldata['.'][0]['SID'] : '') . '&o=2.0"><img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . '/plugins/downloads/images/down_arrow' . ((isset($this->_tpldata['.'][0]['RED20'])) ? $this->_tpldata['.'][0]['RED20'] : '') . '.png" alt="down"></a><a href="downloads.php' . ((isset($this->_tpldata['.'][0]['SID'])) ? $this->_tpldata['.'][0]['SID'] : '') . '&o=2.1"><img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . '/plugins/downloads/images/up_arrow' . ((isset($this->_tpldata['.'][0]['RED21'])) ? $this->_tpldata['.'][0]['RED21'] : '') . '.png" alt="up"></a>' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['DL_DESC_HEADLINE'])) ? $this->_tpldata['index_list.'][$_index_list_i]['DL_DESC_HEADLINE'] : '') . '</th>
                <th align="left" width="100%">' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['DL_COMMENT_HEADLINE'])) ? $this->_tpldata['index_list.'][$_index_list_i]['DL_COMMENT_HEADLINE'] : '') . '</th>
                <th align="left" width="16"><a href="downloads.php' . ((isset($this->_tpldata['.'][0]['SID'])) ? $this->_tpldata['.'][0]['SID'] : '') . '&o=1.0"><img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . '/plugins/downloads/images/down_arrow' . ((isset($this->_tpldata['.'][0]['RED10'])) ? $this->_tpldata['.'][0]['RED10'] : '') . '.png" alt="down"></a><a href="downloads.php' . ((isset($this->_tpldata['.'][0]['SID'])) ? $this->_tpldata['.'][0]['SID'] : '') . '&o=1.1"><img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . '/plugins/downloads/images/up_arrow' . ((isset($this->_tpldata['.'][0]['RED11'])) ? $this->_tpldata['.'][0]['RED11'] : '') . '.png" alt="up"></a>' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['DL_TYPE_HEADLINE'])) ? $this->_tpldata['index_list.'][$_index_list_i]['DL_TYPE_HEADLINE'] : '') . '</th>
                <th align="left" width="80"><a href="downloads.php' . ((isset($this->_tpldata['.'][0]['SID'])) ? $this->_tpldata['.'][0]['SID'] : '') . '&o=4.0"><img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . '/plugins/downloads/images/down_arrow' . ((isset($this->_tpldata['.'][0]['RED40'])) ? $this->_tpldata['.'][0]['RED40'] : '') . '.png" alt="down"></a><a href="downloads.php' . ((isset($this->_tpldata['.'][0]['SID'])) ? $this->_tpldata['.'][0]['SID'] : '') . '&o=4.1"><img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . '/plugins/downloads/images/up_arrow' . ((isset($this->_tpldata['.'][0]['RED41'])) ? $this->_tpldata['.'][0]['RED41'] : '') . '.png" alt="up"></a>' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['DL_PERM_HEADLINE'])) ? $this->_tpldata['index_list.'][$_index_list_i]['DL_PERM_HEADLINE'] : '') . '</th>

                <th align="left" width="80"><a href="downloads.php' . ((isset($this->_tpldata['.'][0]['SID'])) ? $this->_tpldata['.'][0]['SID'] : '') . '&o=3.0"><img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . '/plugins/downloads/images/down_arrow' . ((isset($this->_tpldata['.'][0]['RED30'])) ? $this->_tpldata['.'][0]['RED30'] : '') . '.png" alt="down"></a><a href="downloads.php' . ((isset($this->_tpldata['.'][0]['SID'])) ? $this->_tpldata['.'][0]['SID'] : '') . '&o=3.1"><img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . '/plugins/downloads/images/up_arrow' . ((isset($this->_tpldata['.'][0]['RED31'])) ? $this->_tpldata['.'][0]['RED31'] : '') . '.png" alt="up"></a>' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['DL_VIEWS_HEADLINE'])) ? $this->_tpldata['index_list.'][$_index_list_i]['DL_VIEWS_HEADLINE'] : '') . '</th>

                <th align="left" ><a href="downloads.php' . ((isset($this->_tpldata['.'][0]['SID'])) ? $this->_tpldata['.'][0]['SID'] : '') . '&o=0.1"><img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . '/plugins/downloads/images/down_arrow' . ((isset($this->_tpldata['.'][0]['RED01'])) ? $this->_tpldata['.'][0]['RED01'] : '') . '.png" alt="down"></a><a href="downloads.php' . ((isset($this->_tpldata['.'][0]['SID'])) ? $this->_tpldata['.'][0]['SID'] : '') . '&o=0.0"><img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . '/plugins/downloads/images/up_arrow' . ((isset($this->_tpldata['.'][0]['RED00'])) ? $this->_tpldata['.'][0]['RED00'] : '') . '.png" alt="up"></a>' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['DL_DATE_HEADLINE'])) ? $this->_tpldata['index_list.'][$_index_list_i]['DL_DATE_HEADLINE'] : '') . '</th>

              </tr>
';// ENDIF
}
// BEGIN link_list
$_link_list_count = (isset($this->_tpldata['index_list.'][$_index_list_i]['link_list.'])) ? sizeof($this->_tpldata['index_list.'][$_index_list_i]['link_list.']) : 0;
if ($_link_list_count) {
for ($_link_list_i = 0; $_link_list_i < $_link_list_count; $_link_list_i++)
{
echo '
              <tr class="' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_ROW_CLASS'])) ? $this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_ROW_CLASS'] : '') . '" onmouseover="this.className=\'rowHover\';" onmouseout="this.className=\'' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_ROW_CLASS'])) ? $this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_ROW_CLASS'] : '') . '\';">
                <td width="20" nowrap="nowrap" align="center"><input type="checkbox" value="' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_LINK_ID'])) ? $this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_LINK_ID'] : '') . '" name="link[]"></td>
                <td width="35" nowrap="nowrap"><img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'plugins/downloads/images/edit.png" alt="Edit" onClick="editDownload(\'' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_LINK_ID'])) ? $this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_LINK_ID'] : '') . '\');" style="cursor:pointer;" title="' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_TITLE_LINK_EDIT'])) ? $this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_TITLE_LINK_EDIT'] : '') . '"/><a href="' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_LINK_DELETE_URL'])) ? $this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_LINK_DELETE_URL'] : '') . '" title="' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_TITLE_LINK_DELETE'])) ? $this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_TITLE_LINK_DELETE'] : '') . '"><img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'plugins/downloads/images/delete.png" alt="Delete"></a></td>
                <td width="35" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'plugins/downloads/download.php' . ((isset($this->_tpldata['.'][0]['SID'])) ? $this->_tpldata['.'][0]['SID'] : '') . '&id=' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_LINK_ID'])) ? $this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_LINK_ID'] : '') . '" target="_blank">' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_LINK_NAME'])) ? $this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_LINK_NAME'] : '') . '</a></td>

                <td width="100%">' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_LINK_COMMENT'])) ? $this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_LINK_COMMENT'] : '') . '</td>
                <td nowrap="nowrap">' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_EXT_IMAGE'])) ? $this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_EXT_IMAGE'] : '') . '</td>
                <td nowrap="nowrap">' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_LINK_PERMISSION'])) ? $this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_LINK_PERMISSION'] : '') . '</td>

                <td nowrap="nowrap">' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_LINK_VIEWS'])) ? $this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_LINK_VIEWS'] : '') . '</td>

                <td nowrap="nowrap">' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_LINK_DATE'])) ? $this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_LINK_DATE'] : '') . '</td>

              </tr>
';}}
// END link_list
echo '              
              <tr>
                <th colspan="8" class="footer">' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['DL_CAT_FOOTCOUNT'])) ? $this->_tpldata['index_list.'][$_index_list_i]['DL_CAT_FOOTCOUNT'] : '') . '</th>
              </tr>
          </table></td>
        </tr>
    </table>

    ';}}
// END index_list
// IF DL_S_IF_CATS
if ($this->_tpldata['.'][0]['DL_S_IF_CATS']) { 
echo '
  <table>
    	<tr>
        	<td><span style="padding-left:7px;"><img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'plugins/downloads/images/arrow_turn_left.png" align="bottom" />' . ((isset($this->_tpldata['.'][0]['DL_AD_ALL_MARKED'])) ? $this->_tpldata['.'][0]['DL_AD_ALL_MARKED'] : '') . '
                <input class="mainoption" type="submit" value="' . ((isset($this->_tpldata['.'][0]['DL_AD_DELETE'])) ? $this->_tpldata['.'][0]['DL_AD_DELETE'] : '') . '" />
          <input class="liteoption" type="reset" value="' . ((isset($this->_tpldata['.'][0]['DL_AD_RESET'])) ? $this->_tpldata['.'][0]['DL_AD_RESET'] : '') . '" /></span>
          </td>
        </tr>
    	<tr>
    	  <td height="6"></td>
  	  </tr>
    </table>
   ';// ENDIF
}
echo ' 
</form>

';// IF DL_S_EDIT
if ($this->_tpldata['.'][0]['DL_S_EDIT']) { 
echo '
	<table width="98%" border="0" cellpadding="2" cellspacing="1">
	  <tr>
	    <th colspan="6"><a name="edit"></a><img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'plugins/downloads/images/edit.png" alt="Edit" align="absmiddle"><span class="footer">' . ((isset($this->_tpldata['.'][0]['DL_EDIT_HEADLINE'])) ? $this->_tpldata['.'][0]['DL_EDIT_HEADLINE'] : '') . '</span></th>
      </tr>
	  <form action="' . ((isset($this->_tpldata['.'][0]['DL_EDIT_FORM_ACTION'])) ? $this->_tpldata['.'][0]['DL_EDIT_FORM_ACTION'] : '') . '" method="post">
	    <tr class="row1">
	      <td align="left" style="padding-left: 10px;">&nbsp;</td>
	      <td align="left" style="padding-left: 10px;">' . ((isset($this->_tpldata['.'][0]['DL_URL_HEADLINE'])) ? $this->_tpldata['.'][0]['DL_URL_HEADLINE'] : '') . '</td>
	      <td  style="padding-left: 10px;">' . ((isset($this->_tpldata['.'][0]['DL_DESC_HEADLINE'])) ? $this->_tpldata['.'][0]['DL_DESC_HEADLINE'] : '') . '</td>
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
</table><br><br>
';// ENDIF
}
// IF DL_S_IF_CATS
if ($this->_tpldata['.'][0]['DL_S_IF_CATS']) { 
// IF DL_IS_ADMIN_UPLOAD
if ($this->_tpldata['.'][0]['DL_IS_ADMIN_UPLOAD']) { 
echo '
<table width="98%" border="0" cellpadding="2" cellspacing="1">
      <tr>
        <th colspan="5"><img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'plugins/downloads/images/new.png" alt="Edit" align="absmiddle"><span class="footer">' . ((isset($this->_tpldata['.'][0]['DL_UPLOAD_HEADLINE'])) ? $this->_tpldata['.'][0]['DL_UPLOAD_HEADLINE'] : '') . '</span></th>
      </tr>
      <form action="' . ((isset($this->_tpldata['.'][0]['DL_FORM_ACTION_UPLOAD'])) ? $this->_tpldata['.'][0]['DL_FORM_ACTION_UPLOAD'] : '') . '" method="post" enctype="multipart/form-data" name="dl_upload">
        <tr class="row1">
          <td align="left" style="padding-left: 10px;">' . ((isset($this->_tpldata['.'][0]['DL_SELECT_FILE_HEADLINE'])) ? $this->_tpldata['.'][0]['DL_SELECT_FILE_HEADLINE'] : '') . '*</td>
          <td style="padding-left: 10px;">' . ((isset($this->_tpldata['.'][0]['DL_DESC_HEADLINE'])) ? $this->_tpldata['.'][0]['DL_DESC_HEADLINE'] : '') . '*</td>
          <td style="padding-left: 10px;">' . ((isset($this->_tpldata['.'][0]['DL_COMMENT_HEADLINE'])) ? $this->_tpldata['.'][0]['DL_COMMENT_HEADLINE'] : '') . '</td>
          <td style="padding-left: 10px;">' . ((isset($this->_tpldata['.'][0]['DL_CAT_HEADLINE'])) ? $this->_tpldata['.'][0]['DL_CAT_HEADLINE'] : '') . '</td>
          <td style="padding-left: 10px;">' . ((isset($this->_tpldata['.'][0]['DL_PERM_HEADLINE'])) ? $this->_tpldata['.'][0]['DL_PERM_HEADLINE'] : '') . '</td>
        </tr>
        <tr class="row2">
          <td width="90" align="left" nowrap>
		  <script language="javascript" type="text/javascript">
		  function dl_check_file_field(){
			  if (document.dl_upload.filename.value != ""){document.dl_upload.dl_url.disabled = true;}
			  else {document.dl_upload.dl_url.disabled = false;};
			  }
			function dl_check_url_field(){
			  if (document.dl_upload.dl_url.value != ""){document.dl_upload.filename.disabled = true;}
			  if (document.dl_upload.dl_url.value == ""){document.dl_upload.filename.disabled = false;}
			  }
			function dl_reset_fields(){
			document.dl_upload.filename.disabled = false;
			document.dl_upload.dl_url.disabled = false;
			}
			
			function dl_check_permission(){
				';// BEGIN js_registered_cats
$_js_registered_cats_count = (isset($this->_tpldata['js_registered_cats.'])) ?  sizeof($this->_tpldata['js_registered_cats.']) : 0;
if ($_js_registered_cats_count) {
for ($_js_registered_cats_i = 0; $_js_registered_cats_i < $_js_registered_cats_count; $_js_registered_cats_i++)
{
echo '
				if (document.dl_upload.dl_category.value == ' . ((isset($this->_tpldata['js_registered_cats.'][$_js_registered_cats_i]['DL_CATID'])) ? $this->_tpldata['js_registered_cats.'][$_js_registered_cats_i]['DL_CATID'] : '') . '){document.dl_upload.dl_permission.disabled = true;
					document.dl_upload.dl_permission.selectedIndex = 0;
				}	else {document.dl_upload.dl_permission.disabled = false;};
				';}}
// END js_registered_cats
echo '
			}
          </script>
            <input class="input" name="filename" type="file" onChange="dl_check_file_field()">
            <br></td>
          <td width="90" rowspan="2"><input class="input" type="text" name="dl_description" id="dl_description" ></td>
          <td rowspan="2" align="center">
            <input class="input" type="text" name="dl_comment" id="dl_comment" style="width:100%"></td>
          <td width="90" rowspan="2" align="center"><span style="padding-left: 10px;">
            ' . ((isset($this->_tpldata['.'][0]['DL_CATEGORY_SELECT'])) ? $this->_tpldata['.'][0]['DL_CATEGORY_SELECT'] : '') . '
          </span></td>
          <td width="90" rowspan="2" align="center"><select name="dl_permission" class="input">
            <option value="0" selected="selected" id="perm0">' . ((isset($this->_tpldata['.'][0]['DL_PERM_REGISTERED'])) ? $this->_tpldata['.'][0]['DL_PERM_REGISTERED'] : '') . '</option>
            <option value="1" id="perm1">' . ((isset($this->_tpldata['.'][0]['DL_PERM_PUBLIC'])) ? $this->_tpldata['.'][0]['DL_PERM_PUBLIC'] : '') . '</option>
          </select></td>
        </tr>
        <tr class="row2">
          <td>' . ((isset($this->_tpldata['.'][0]['DL_OR_URL'])) ? $this->_tpldata['.'][0]['DL_OR_URL'] : '') . '
          <input class="input" type="text" name="dl_url" style="width:120px" id="dl_url" title="' . ((isset($this->_tpldata['.'][0]['DL_AD_WILL_LINKED'])) ? $this->_tpldata['.'][0]['DL_AD_WILL_LINKED'] : '') . '" onChange="dl_check_url_field()"/>
          </th></td>
        <tr>
          <th colspan="5"> <input class="mainoption" type="submit" value="' . ((isset($this->_tpldata['.'][0]['DL_AD_SEND'])) ? $this->_tpldata['.'][0]['DL_AD_SEND'] : '') . '">
            <input class="liteoption" type="reset" value="' . ((isset($this->_tpldata['.'][0]['DL_AD_RESET'])) ? $this->_tpldata['.'][0]['DL_AD_RESET'] : '') . '" onClick="dl_reset_fields()"></th>
        </tr>
      </form>
</table><script language="javascript" type="text/javascript">dl_check_permission();</script>
';// ENDIF
}
// ENDIF
}
echo '
<br/>
<script language="JavaScript" type="text/javascript">
function aboutDialog(){
  var boxabout = jBox.open(\'about\',\'iframe\',\'../about.php\',\'' . ((isset($this->_tpldata['.'][0]['DL_ABOUT_HEADER'])) ? $this->_tpldata['.'][0]['DL_ABOUT_HEADER'] : '') . '\',\'width=500,height=300,center=true,minimizable=true,resize=true,draggable=true,model=false,scrolling=true\');
}

function editDownload(id){
  var boxEditDownload = jBox.open(\'editDownload\',\'iframe\',\'edit.php' . ((isset($this->_tpldata['.'][0]['SID'])) ? $this->_tpldata['.'][0]['SID'] : '') . '&ref=adm&id=\'+id,\'' . ((isset($this->_tpldata['.'][0]['DL_TITLE_LINK_EDIT'])) ? $this->_tpldata['.'][0]['DL_TITLE_LINK_EDIT'] : '') . '\',\'width=700,height=100,center=true,minimizable=true,resize=true,draggable=true,model=false,scrolling=false\');boxEditDownload.onClosed = function(){ window.location.href = \'downloads.php\';}
}

</script>
<center>
  <span class="copyis">
    <a onclick="javascript:aboutDialog()" style="cursor:pointer;" onmouseover="style.textDecoration=\'underline\';" onmouseout="style.textDecoration=\'none\';">
      <img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'plugins/downloads/images/credits/info.png" alt="' . ((isset($this->_tpldata['.'][0]['DL_L_CREDITS'])) ? $this->_tpldata['.'][0]['DL_L_CREDITS'] : '') . '" border="0" /> ' . ((isset($this->_tpldata['.'][0]['DL_L_CREDITS'])) ? $this->_tpldata['.'][0]['DL_L_CREDITS'] : '') . '</a>
  </span><br />
  <span class="copy">' . ((isset($this->_tpldata['.'][0]['DL_L_COPYRIGHT'])) ? $this->_tpldata['.'][0]['DL_L_COPYRIGHT'] : '') . '
  </span>
</center>';
}
?>