<?php
if ($this->security()) {
echo '' . ((isset($this->_tpldata['.'][0]['UPDATE_BOX'])) ? $this->_tpldata['.'][0]['UPDATE_BOX'] : '') . '
' . ((isset($this->_tpldata['.'][0]['UPDCHECK_BOX'])) ? $this->_tpldata['.'][0]['UPDCHECK_BOX'] : '') . '
<form method="POST">
<table width="100%" border="0" cellspacing="0" cellpadding="2">	
  <tr>
    <th colspan="2">' . ((isset($this->_tpldata['.'][0]['DL_AD_CONF_GEN'])) ? $this->_tpldata['.'][0]['DL_AD_CONF_GEN'] : '') . '</th>
  </tr>
  <tr class="row2">
    <td width="50%">
      ' . ((isset($this->_tpldata['.'][0]['DL_AD_CONF_ACCEPTED_FILE_TYPES'])) ? $this->_tpldata['.'][0]['DL_AD_CONF_ACCEPTED_FILE_TYPES'] : '') . '
      </td>
    <td width="50%">
      <input name="accepted_file_types" maxlength="255" value="' . ((isset($this->_tpldata['.'][0]['DL_AD_CONF_VAL_ACCEPTED_FILE_TYPES'])) ? $this->_tpldata['.'][0]['DL_AD_CONF_VAL_ACCEPTED_FILE_TYPES'] : '') . '" size="60">
      </td>
  </tr>
  <tr>
    <th colspan="2"><input type="submit" name="submit" class="mainoption" value="' . ((isset($this->_tpldata['.'][0]['DL_AD_SEND'])) ? $this->_tpldata['.'][0]['DL_AD_SEND'] : '') . '"></th>
  </tr>
  </table>
</form>
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