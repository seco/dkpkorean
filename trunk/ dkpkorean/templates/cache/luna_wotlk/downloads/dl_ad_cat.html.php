<?php
if ($this->security()) {
echo '<!-- list existing categories -->';echo '
<table width="100%" border="0" cellspacing="0" cellpadding="2">	   
  <tr>		     
    <th colspan="2">' . ((isset($this->_tpldata['.'][0]['DL_AD_CATEGORIES'])) ? $this->_tpldata['.'][0]['DL_AD_CATEGORIES'] : '') . '</th><th colspan="5" style="text-align: right">';// IF DL_S_NOCATS
if ($this->_tpldata['.'][0]['DL_S_NOCATS']) { 
// ELSE
} else {
echo ' <input type="button" class="mainoption" onClick="location.href=\'categories.php?delete=all\'" value="' . ((isset($this->_tpldata['.'][0]['DL_AD_CAT_DELALL'])) ? $this->_tpldata['.'][0]['DL_AD_CAT_DELALL'] : '') . '">';// ENDIF
}
echo '     
    </th>	   
  </tr>
  ';// IF DL_S_NOCATS
if ($this->_tpldata['.'][0]['DL_S_NOCATS']) { 
echo '
    <tr>		     
    <th colspan="7" align="left">' . ((isset($this->_tpldata['.'][0]['DL_AD_NO_CATS'])) ? $this->_tpldata['.'][0]['DL_AD_NO_CATS'] : '') . '</th>		     
  </tr>
    <tr>		     
    <td colspan="7" align="left">&nbsp;</td>		     
  </tr>
  ';// ELSE
} else {
echo '	
  <tr>		     
    <th width="15%" align="left">' . ((isset($this->_tpldata['.'][0]['DL_AD_CATEGORY'])) ? $this->_tpldata['.'][0]['DL_AD_CATEGORY'] : '') . '
    </th>		     
    <th >' . ((isset($this->_tpldata['.'][0]['DL_AD_ADD_COMMENT'])) ? $this->_tpldata['.'][0]['DL_AD_ADD_COMMENT'] : '') . '   
    </th>
    <th>' . ((isset($this->_tpldata['.'][0]['DL_PERM_HEADLINE'])) ? $this->_tpldata['.'][0]['DL_PERM_HEADLINE'] : '') . '</th> 
    <th>' . ((isset($this->_tpldata['.'][0]['DL_AD_MANAGE_LINKS'])) ? $this->_tpldata['.'][0]['DL_AD_MANAGE_LINKS'] : '') . '
    </th>		
    <th width="50" >    ' . ((isset($this->_tpldata['.'][0]['DL_AD_MANAGE_CAT_ORDER'])) ? $this->_tpldata['.'][0]['DL_AD_MANAGE_CAT_ORDER'] : '') . ':     
    </th>    
    <th colspan="2" width="50" align="left">			     
    </th>    	   
  </tr>
  ';// ENDIF
}
// BEGIN cat_list
$_cat_list_count = (isset($this->_tpldata['cat_list.'])) ?  sizeof($this->_tpldata['cat_list.']) : 0;
if ($_cat_list_count) {
for ($_cat_list_i = 0; $_cat_list_i < $_cat_list_count; $_cat_list_i++)
{
echo '	   
  <tr class="' . ((isset($this->_tpldata['cat_list.'][$_cat_list_i]['ROW_CLASS'])) ? $this->_tpldata['cat_list.'][$_cat_list_i]['ROW_CLASS'] : '') . '">
    <form method="POST">	     
      <td width="15%" align="left" style="padding-left: 10px;"><input type="text" class="input" style="width:90px" name="cat_up_name" value="' . ((isset($this->_tpldata['cat_list.'][$_cat_list_i]['LIST'])) ? $this->_tpldata['cat_list.'][$_cat_list_i]['LIST'] : '') . '"></td>		     
      <td style="padding-left: 10px;"><input type="text" class="input" style="width:200px" name="cat_up_description" value="' . ((isset($this->_tpldata['cat_list.'][$_cat_list_i]['DESCRIPTION'])) ? $this->_tpldata['cat_list.'][$_cat_list_i]['DESCRIPTION'] : '') . '"></td>
      <td align="center"><span style="padding-left: 10px;">
        <select name="cat_up_permission" id="cat_up_permission" class="input">
	        <option value="0" ' . ((isset($this->_tpldata['cat_list.'][$_cat_list_i]['DL_PERM_EDIT_SELECT_0'])) ? $this->_tpldata['cat_list.'][$_cat_list_i]['DL_PERM_EDIT_SELECT_0'] : '') . '>' . ((isset($this->_tpldata['cat_list.'][$_cat_list_i]['DL_PERM_REGISTERED'])) ? $this->_tpldata['cat_list.'][$_cat_list_i]['DL_PERM_REGISTERED'] : '') . '</option>
	        <option value="1" ' . ((isset($this->_tpldata['cat_list.'][$_cat_list_i]['DL_PERM_EDIT_SELECT_1'])) ? $this->_tpldata['cat_list.'][$_cat_list_i]['DL_PERM_EDIT_SELECT_1'] : '') . '>' . ((isset($this->_tpldata['cat_list.'][$_cat_list_i]['DL_PERM_PUBLIC'])) ? $this->_tpldata['cat_list.'][$_cat_list_i]['DL_PERM_PUBLIC'] : '') . '</option>
          </select>
      </span></td> 		
      <td align="center">' . ((isset($this->_tpldata['cat_list.'][$_cat_list_i]['PIC_COUNT'])) ? $this->_tpldata['cat_list.'][$_cat_list_i]['PIC_COUNT'] : '') . '</td>
      <td width="50" align="center">' . ((isset($this->_tpldata['cat_list.'][$_cat_list_i]['UP_BUTTON'])) ? $this->_tpldata['cat_list.'][$_cat_list_i]['UP_BUTTON'] : '') . '<br>' . ((isset($this->_tpldata['cat_list.'][$_cat_list_i]['DOWN_BUTTON'])) ? $this->_tpldata['cat_list.'][$_cat_list_i]['DOWN_BUTTON'] : '') . '</td>    
    <td width="50" align="center">			       				         
        <input type="hidden" name="cat_update_id" value="' . ((isset($this->_tpldata['cat_list.'][$_cat_list_i]['CAT_ID'])) ? $this->_tpldata['cat_list.'][$_cat_list_i]['CAT_ID'] : '') . '">				         
        <input class="mainoption" type="submit" value="' . ((isset($this->_tpldata['.'][0]['DL_AD_UPDATE_TITLE'])) ? $this->_tpldata['.'][0]['DL_AD_UPDATE_TITLE'] : '') . '">
      </form>
 		<td><a href="categories.php?delete=' . ((isset($this->_tpldata['cat_list.'][$_cat_list_i]['CAT_ID'])) ? $this->_tpldata['cat_list.'][$_cat_list_i]['CAT_ID'] : '') . '"><img src="../images/delete.png"></a>  </td>
          </tr>	   
      ';}}
// END cat_list
echo ' 
   <tr> 
    <th colspan="7" class="footer">' . ((isset($this->_tpldata['.'][0]['DL_AD_CAT_FOOTCOUNT'])) ? $this->_tpldata['.'][0]['DL_AD_CAT_FOOTCOUNT'] : '') . '</th>
  </tr>
  <tr>
    <td colspan="7">&nbsp;</td>
  </tr>
  <tr>		     
    <th colspan="7"><img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'plugins/downloads/images/new.png" alt="Edit" align="absmiddle">' . ((isset($this->_tpldata['.'][0]['DL_AD_CREATE'])) ? $this->_tpldata['.'][0]['DL_AD_CREATE'] : '') . '     
    </th>	   
  </tr>	
  <form action="../admin/categories.php" method="post">   
    <tr class="row1">
      <td align="left" style="padding-left: 10px;"><strong>' . ((isset($this->_tpldata['.'][0]['DL_AD_CATEGORY'])) ? $this->_tpldata['.'][0]['DL_AD_CATEGORY'] : '') . '</strong></td>
      <td  style="padding-left: 10px;"><strong>' . ((isset($this->_tpldata['.'][0]['DL_AD_ADD_COMMENT'])) ? $this->_tpldata['.'][0]['DL_AD_ADD_COMMENT'] : '') . '</strong></td>
      <td align="center"><strong>' . ((isset($this->_tpldata['.'][0]['DL_PERM_HEADLINE'])) ? $this->_tpldata['.'][0]['DL_PERM_HEADLINE'] : '') . '</strong></td>
      <td align="center">&nbsp;</td>
      <td colspan="3" align="center"></td>
    </tr>
    <tr class="row2">		     
      <td width="15%" align="left" style="padding-left: 10px;">	 
        <input class="input" type="text" name="cat_name" style="width:90px">			</td>		     
      <td  style="padding-left: 10px;">        
        <input class="input" type="text" name="cat_comment" style="width:200px">    </td>
      <td width="40" align="center"><span style="padding-left: 10px;">
        <select name="cat_permission" id="cat_permission" class="input">
          <option value="0">' . ((isset($this->_tpldata['.'][0]['DL_PERM_REGISTERED'])) ? $this->_tpldata['.'][0]['DL_PERM_REGISTERED'] : '') . '</option>
          <option value="1">' . ((isset($this->_tpldata['.'][0]['DL_PERM_PUBLIC'])) ? $this->_tpldata['.'][0]['DL_PERM_PUBLIC'] : '') . '</option>
        </select>
      </span></td> 		
      <td width="40" align="center">&nbsp;</td>    
      <td colspan="3" width="50" align="center">			  		</td>    
    </tr>	      
    <tr>		     
      <th colspan="7">        
        <input class="mainoption" type="submit" value="' . ((isset($this->_tpldata['.'][0]['DL_AD_SEND'])) ? $this->_tpldata['.'][0]['DL_AD_SEND'] : '') . '">				         
        <input class="liteoption" type="reset" value="' . ((isset($this->_tpldata['.'][0]['DL_AD_RESET'])) ? $this->_tpldata['.'][0]['DL_AD_RESET'] : '') . '">
        &nbsp;' . ((isset($this->_tpldata['.'][0]['DL_AD_STATUS'])) ? $this->_tpldata['.'][0]['DL_AD_STATUS'] : '') . '			
      </th>	   
    </tr>	         
  </form>
</table>
<script language="JavaScript" type="text/javascript">
function aboutDialog(){
  var boxabout = jBox.open(\'about\',\'iframe\',\'../about.php\',\'' . ((isset($this->_tpldata['.'][0]['ABOUT_HEADER'])) ? $this->_tpldata['.'][0]['ABOUT_HEADER'] : '') . '\',\'width=500,height=300,center=true,minimizable=true,resize=true,draggable=true,model=false,scrolling=true\');
}
</script>
<br/>
<center>  
  <span class="copyis">    
    <a onclick="javascript:aboutDialog()" style="cursor:pointer;" onmouseover="style.textDecoration=\'underline\';" onmouseout="style.textDecoration=\'none\';">      
      <img src="../images/credits/info.png" alt="' . ((isset($this->_tpldata['.'][0]['L_CREDITS'])) ? $this->_tpldata['.'][0]['L_CREDITS'] : ((isset($user->lang['CREDITS'])) ? $user->lang['CREDITS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CREDITS'))) . ' 	}')) . '" border="0" /> ' . ((isset($this->_tpldata['.'][0]['DL_CREDITS'])) ? $this->_tpldata['.'][0]['DL_CREDITS'] : '') . '</a>  
  </span><br />  
  <span class="copy">' . ((isset($this->_tpldata['.'][0]['DL_COPYRIGHT'])) ? $this->_tpldata['.'][0]['DL_COPYRIGHT'] : '') . '   
  </span>
</center>';
}
?>