<?php
if ($this->security()) {
echo '<table width="100%" border="0" cellspacing="0" cellpadding="2">	
  <tr>		
    <th colspan="4">		  
      <table width="100%" class="borderless" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td style="text-align: left; width: 33%">      
           <b>' . ((isset($this->_tpldata['.'][0]['DL_HEADLINE'])) ? $this->_tpldata['.'][0]['DL_HEADLINE'] : '') . '</b></td>' . ((isset($this->_tpldata['.'][0]['DL_UPLOAD'])) ? $this->_tpldata['.'][0]['DL_UPLOAD'] : '') . '
          <td style="text-align: right; width: 33%">
          ';// IF DL_S_NO_CATS
if ($this->_tpldata['.'][0]['DL_S_NO_CATS']) { 
// ELSE
} else {
// IF DL_IS_ADMIN_UPLOAD
if ($this->_tpldata['.'][0]['DL_IS_ADMIN_UPLOAD']) { 
echo '
          <a href="#dl_upload"><img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'plugins/downloads/images/new.png" alt="Edit" align="absmiddle">' . ((isset($this->_tpldata['.'][0]['DL_UPLOAD_HEADLINE'])) ? $this->_tpldata['.'][0]['DL_UPLOAD_HEADLINE'] : '') . '</a>';// ENDIF
}
// ENDIF
}
echo '
		</td>	
       </tr>
      </table>    
    </th>	
  </tr>
      
  <tr class="">			
    <td colspan="1" align="center" >
    <div align="center" style="font-weight:bold;">' . ((isset($this->_tpldata['.'][0]['DL_OV_ERROR'])) ? $this->_tpldata['.'][0]['DL_OV_ERROR'] : '') . '</div>
    ';// IF DL_S_NO_CATS
if ($this->_tpldata['.'][0]['DL_S_NO_CATS']) { 
echo '<br>
    <strong><em>' . ((isset($this->_tpldata['.'][0]['DL_NO_CATS'])) ? $this->_tpldata['.'][0]['DL_NO_CATS'] : '') . '</em></strong>
    ';// ENDIF
}
// BEGIN index_list
$_index_list_count = (isset($this->_tpldata['index_list.'])) ?  sizeof($this->_tpldata['index_list.']) : 0;
if ($_index_list_count) {
for ($_index_list_i = 0; $_index_list_i < $_index_list_count; $_index_list_i++)
{
echo '
      <table width="98%" border="0" cellspacing="0" cellpadding="0">
        
        <tr>
          <td colspan="1">
          
            <table width="100%" border="0" cellspacing="1" cellpadding="2">
              <tr>
                <th colspan="6" nowrap="nowrap"><strong>' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['DL_CAT_HEADLINE'])) ? $this->_tpldata['index_list.'][$_index_list_i]['DL_CAT_HEADLINE'] : '') . ': ' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['DL_CAT_NAME'])) ? $this->_tpldata['index_list.'][$_index_list_i]['DL_CAT_NAME'] : '') . '';// IF index_list.DL_IS_ADMIN_CAT
if ($this->_tpldata['index_list.'][$_index_list_i]['DL_IS_ADMIN_CAT']) { 
echo '<a href="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'plugins/downloads/admin/categories.php' . ((isset($this->_tpldata['.'][0]['SID'])) ? $this->_tpldata['.'][0]['SID'] : '') . '" title="' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['DL_TITLE_CAT_EDIT'])) ? $this->_tpldata['index_list.'][$_index_list_i]['DL_TITLE_CAT_EDIT'] : '') . '"><img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . '/plugins/downloads/images/edit.png"></a>';// ENDIF
}
echo '</strong></th>
              </tr>
';// IF index_list.DL_S_NOLINKS
if ($this->_tpldata['index_list.'][$_index_list_i]['DL_S_NOLINKS']) { 
echo '
              <tr>
                <td colspan="6" align="center" nowrap="nowrap" class="row2">' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['DL_CAT_NOLINKS'])) ? $this->_tpldata['index_list.'][$_index_list_i]['DL_CAT_NOLINKS'] : '') . '</td>
              </tr>
';// ELSE
} else {
echo '           
              <tr>
                <th align="center" width="20" nowrap="nowrap"><a href="downloads.php' . ((isset($this->_tpldata['.'][0]['SID'])) ? $this->_tpldata['.'][0]['SID'] : '') . '&o=1.0"><img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . '/plugins/downloads/images/down_arrow' . ((isset($this->_tpldata['.'][0]['RED10'])) ? $this->_tpldata['.'][0]['RED10'] : '') . '.png" alt="down"></a><a href="downloads.php' . ((isset($this->_tpldata['.'][0]['SID'])) ? $this->_tpldata['.'][0]['SID'] : '') . '&o=1.1"><img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . '/plugins/downloads/images/up_arrow' . ((isset($this->_tpldata['.'][0]['RED11'])) ? $this->_tpldata['.'][0]['RED11'] : '') . '.png" alt="up"></a>' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['DL_TYPE_HEADLINE'])) ? $this->_tpldata['index_list.'][$_index_list_i]['DL_TYPE_HEADLINE'] : '') . '</th>
                ';// IF index_list.DL_IS_ADMIN_LINKS
if ($this->_tpldata['index_list.'][$_index_list_i]['DL_IS_ADMIN_LINKS']) { 
echo '<th align="left" width="35" nowrap="nowrap">' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['DL_ACTION_HEADLINE'])) ? $this->_tpldata['index_list.'][$_index_list_i]['DL_ACTION_HEADLINE'] : '') . '</th>';// ENDIF
}
echo '
                <th align="left" width="35" nowrap="nowrap"><a href="downloads.php' . ((isset($this->_tpldata['.'][0]['SID'])) ? $this->_tpldata['.'][0]['SID'] : '') . '&o=2.0"><img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . '/plugins/downloads/images/down_arrow' . ((isset($this->_tpldata['.'][0]['RED20'])) ? $this->_tpldata['.'][0]['RED20'] : '') . '.png" alt="down"></a><a href="downloads.php' . ((isset($this->_tpldata['.'][0]['SID'])) ? $this->_tpldata['.'][0]['SID'] : '') . '&o=2.1"><img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . '/plugins/downloads/images/up_arrow' . ((isset($this->_tpldata['.'][0]['RED21'])) ? $this->_tpldata['.'][0]['RED21'] : '') . '.png" alt="up"></a>' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['DL_DESC_HEADLINE'])) ? $this->_tpldata['index_list.'][$_index_list_i]['DL_DESC_HEADLINE'] : '') . '</th>
                <th align="left" width="100%">' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['DL_COMMENT_HEADLINE'])) ? $this->_tpldata['index_list.'][$_index_list_i]['DL_COMMENT_HEADLINE'] : '') . '</th>

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
                <td width="20" nowrap="nowrap" align="center">' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_EXT_IMAGE'])) ? $this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_EXT_IMAGE'] : '') . '</td>
                ';// IF index_list.DL_IS_ADMIN_LINKS
if ($this->_tpldata['index_list.'][$_index_list_i]['DL_IS_ADMIN_LINKS']) { 
echo '
                <td width="80" nowrap="nowrap"><strong><a href="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'plugins/downloads/downloads.php' . ((isset($this->_tpldata['.'][0]['SID'])) ? $this->_tpldata['.'][0]['SID'] : '') . '&mode=delete&id=' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_LINK_ID'])) ? $this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_LINK_ID'] : '') . '" title="' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['DL_TITLE_LINK_DELETE'])) ? $this->_tpldata['index_list.'][$_index_list_i]['DL_TITLE_LINK_DELETE'] : '') . '"><img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'plugins/downloads/images/delete.png"></a> <img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'plugins/downloads/images/edit.png" onClick="editDownload(\'' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_LINK_ID'])) ? $this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_LINK_ID'] : '') . '\');" style="cursor:pointer;" title="' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['DL_TITLE_LINK_EDIT'])) ? $this->_tpldata['index_list.'][$_index_list_i]['DL_TITLE_LINK_EDIT'] : '') . '"></strong></td>
                ';// ENDIF
}
echo '
                <td width="80" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'plugins/downloads/download.php' . ((isset($this->_tpldata['.'][0]['SID'])) ? $this->_tpldata['.'][0]['SID'] : '') . '&id=' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_LINK_ID'])) ? $this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_LINK_ID'] : '') . '" target="_blank">' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_LINK_NAME'])) ? $this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_LINK_NAME'] : '') . '</a></td>

                <td width="100%" nowrap="nowrap">' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_LINK_COMMENT'])) ? $this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_LINK_COMMENT'] : '') . '</td>

                <td nowrap="nowrap">' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_LINK_VIEWS'])) ? $this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_LINK_VIEWS'] : '') . '</td>

                <td nowrap="nowrap">' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_LINK_DATE'])) ? $this->_tpldata['index_list.'][$_index_list_i]['link_list.'][$_link_list_i]['DL_LINK_DATE'] : '') . '</td>

              </tr>
';}}
// END link_list
echo '              
              <tr>
                <th colspan="6" class="footer">' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['DL_CAT_FOOTCOUNT'])) ? $this->_tpldata['index_list.'][$_index_list_i]['DL_CAT_FOOTCOUNT'] : '') . '</th>
              </tr>
          </table></td>
        </tr>
        
        <tr>
          <td height="6"></td>
        </tr>
    </table>
    ';}}
// END index_list
// IF DL_S_NO_CATS
if ($this->_tpldata['.'][0]['DL_S_NO_CATS']) { 
echo '
    <br><br><b>' . ((isset($this->_tpldata['.'][0]['DL_AD_NOCATS'])) ? $this->_tpldata['.'][0]['DL_AD_NOCATS'] : '') . '</b>
    ';// ELSE
} else {
// IF DL_IS_ADMIN_UPLOAD
if ($this->_tpldata['.'][0]['DL_IS_ADMIN_UPLOAD']) { 
echo '
      <br><table width="98%" border="0" cellpadding="2" cellspacing="1">
        <tr>
          <th colspan="5"><a name="dl_upload"></a><img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'plugins/downloads/images/new.png" alt="Edit" align="absmiddle"><span class="footer">' . ((isset($this->_tpldata['.'][0]['DL_UPLOAD_HEADLINE'])) ? $this->_tpldata['.'][0]['DL_UPLOAD_HEADLINE'] : '') . '</span></th>
        </tr>
        		  <script language="javascript" type="text/javascript">
		  	function dl_check_file_field(){
			  if (document.dl_upload.filename.value != ""){document.dl_upload.dl_url.disabled = true;}
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
        <form action="' . ((isset($this->_tpldata['.'][0]['DL_FORM_ACTION_UPLOAD'])) ? $this->_tpldata['.'][0]['DL_FORM_ACTION_UPLOAD'] : '') . '" method="post" enctype="multipart/form-data" name="dl_upload">
          <tr class="row1">
            <td align="left" style="padding-left: 10px;">' . ((isset($this->_tpldata['.'][0]['DL_SELECT_FILE_HEADLINE'])) ? $this->_tpldata['.'][0]['DL_SELECT_FILE_HEADLINE'] : '') . '*</td>
            <td style="padding-left: 10px;">' . ((isset($this->_tpldata['.'][0]['DL_DESC_HEADLINE'])) ? $this->_tpldata['.'][0]['DL_DESC_HEADLINE'] : '') . '*</td>
            <td style="padding-left: 10px;">' . ((isset($this->_tpldata['.'][0]['DL_COMMENT_HEADLINE'])) ? $this->_tpldata['.'][0]['DL_COMMENT_HEADLINE'] : '') . '</td>
            <td style="padding-left: 10px;">' . ((isset($this->_tpldata['.'][0]['DL_CAT_HEADLINE'])) ? $this->_tpldata['.'][0]['DL_CAT_HEADLINE'] : '') . '</td>
            <td style="padding-left: 10px;">' . ((isset($this->_tpldata['.'][0]['DL_PERM_HEADLINE'])) ? $this->_tpldata['.'][0]['DL_PERM_HEADLINE'] : '') . '</td>
          </tr>
          <tr class="row2">
            <td width="90" align="left" nowrap><input class="input" name="filename" type="file" onChange="dl_check_file_field()">
              <br></td>
            <td width="90" rowspan="2"><input class="input" type="text" name="dl_description" id="dl_description" ></td>
            <td rowspan="2" align="center"><input class="input" type="text" name="dl_comment" id="dl_comment" style="width:96%"></td>
            <td width="90" rowspan="2" align="center"> ' . ((isset($this->_tpldata['.'][0]['DL_CATEGORY_SELECT'])) ? $this->_tpldata['.'][0]['DL_CATEGORY_SELECT'] : '') . ' </td>
            <td width="90" rowspan="2" align="center"><select name="dl_permission" class="input">
              <option value="0" selected="selected">' . ((isset($this->_tpldata['.'][0]['DL_PERM_REGISTERED'])) ? $this->_tpldata['.'][0]['DL_PERM_REGISTERED'] : '') . '</option>
              <option value="1">' . ((isset($this->_tpldata['.'][0]['DL_PERM_PUBLIC'])) ? $this->_tpldata['.'][0]['DL_PERM_PUBLIC'] : '') . '</option>
            </select></td>
          </tr>
          <tr class="row2">
            <td>' . ((isset($this->_tpldata['.'][0]['DL_OR_URL'])) ? $this->_tpldata['.'][0]['DL_OR_URL'] : '') . '
              <input class="input" type="text" name="dl_url" style="width:120px" id="dl_url" title="' . ((isset($this->_tpldata['.'][0]['DL_AD_WILL_LINKED'])) ? $this->_tpldata['.'][0]['DL_AD_WILL_LINKED'] : '') . '" onChange="dl_check_url_field()"/>
              </th></td>
          <tr>
            <th colspan="5"> <input class="mainoption" type="submit" value="' . ((isset($this->_tpldata['.'][0]['DL_AD_SEND'])) ? $this->_tpldata['.'][0]['DL_AD_SEND'] : '') . '">
              <input class="liteoption" type="reset" value="' . ((isset($this->_tpldata['.'][0]['DL_AD_RESET'])) ? $this->_tpldata['.'][0]['DL_AD_RESET'] : '') . '" onClick="dl_reset_fields();"></th>
          </tr>
        </form>
      </table>
      <script language="javascript" type="text/javascript">dl_check_permission();</script>
      ';// ENDIF
}
// ENDIF
}
echo '
    
    </td>			
  </tr>
</table>
<script language="JavaScript" type="text/javascript">
function aboutDialog(){
  var boxabout = jBox.open(\'about\',\'iframe\',\'about.php\',\'' . ((isset($this->_tpldata['.'][0]['DL_ABOUT_HEADER'])) ? $this->_tpldata['.'][0]['DL_ABOUT_HEADER'] : '') . '\',\'width=500,height=300,center=true,minimizable=true,resize=true,draggable=true,model=false,scrolling=true\');
}

function editDownload(id){
  var boxEditDownload = jBox.open(\'editDownload\',\'iframe\',\'admin/edit.php?id=\'+id,\'' . ((isset($this->_tpldata['.'][0]['DL_TITLE_LINK_EDIT'])) ? $this->_tpldata['.'][0]['DL_TITLE_LINK_EDIT'] : '') . '\',\'width=700,height=100,center=true,minimizable=true,resize=true,draggable=true,model=false,scrolling=false\');boxEditDownload.onClosed = function(){ window.location.href = \'downloads.php\';}
}

</script>
<br />
<center>
  <p><span class="copyis">
    <a onclick="javascript:aboutDialog()" style="cursor:pointer;" onmouseover="style.textDecoration=\'underline\';" onmouseout="style.textDecoration=\'none\';">
      <img src="images/credits/info.png" alt="' . ((isset($this->_tpldata['.'][0]['DL_L_CREDITS'])) ? $this->_tpldata['.'][0]['DL_L_CREDITS'] : '') . '" border="0" /> ' . ((isset($this->_tpldata['.'][0]['DL_L_CREDITS'])) ? $this->_tpldata['.'][0]['DL_L_CREDITS'] : '') . '</a>
    </span><br />
    <span class="copy">' . ((isset($this->_tpldata['.'][0]['DL_L_COPYRIGHT'])) ? $this->_tpldata['.'][0]['DL_L_COPYRIGHT'] : '') . '</span></p>
</center>';
}
?>