<?php
if ($this->security()) {
echo '<table width="100%" border="0" cellspacing="0" cellpadding="2">	
  <tr>		
    <th colspan="4">		  
      <table width="100%" class="borderless" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td style="text-align: left; width: 33%">      
            <a href="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'plugins/gallery/gallery.php"><b>' . ((isset($this->_tpldata['.'][0]['GL_HEADLINE'])) ? $this->_tpldata['.'][0]['GL_HEADLINE'] : '') . '</b></a></td>' . ((isset($this->_tpldata['.'][0]['GL_UPLOAD'])) ? $this->_tpldata['.'][0]['GL_UPLOAD'] : '') . '
        </tr>
      </table>    
    </th>	
  </tr>
  <tr >
    <td class="row2" align="center">
      <table style="border: 1px solid #999999; margin: 2px 0px 4px 0px; padding: 4px; background: transparent url(images/highlighting.png); width: 900px;" align="center"><tr><td align="left" width="33%">' . ((isset($this->_tpldata['.'][0]['GL_NAV_LEFT'])) ? $this->_tpldata['.'][0]['GL_NAV_LEFT'] : '') . '</td><td align="center" width="34%">&nbsp;' . ((isset($this->_tpldata['.'][0]['GL_NAV'])) ? $this->_tpldata['.'][0]['GL_NAV'] : '') . '&nbsp;</td><td align="right" width="33%">' . ((isset($this->_tpldata['.'][0]['GL_NAV_RIGHT'])) ? $this->_tpldata['.'][0]['GL_NAV_RIGHT'] : '') . '</td></tr></table>
    </td>
  </tr>	
  ';// BEGIN index_list
$_index_list_count = (isset($this->_tpldata['index_list.'])) ?  sizeof($this->_tpldata['index_list.']) : 0;
if ($_index_list_count) {
for ($_index_list_i = 0; $_index_list_i < $_index_list_count; $_index_list_i++)
{
echo '		         
  <tr class="' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['GL_ROW_CLASS'])) ? $this->_tpldata['index_list.'][$_index_list_i]['GL_ROW_CLASS'] : '') . '">			
    <td colspan="1" align="center" ><table style="border: 1px solid #999999; margin: 5px 0px 2px 0px; padding: 4px; background: transparent url(images/highlighting.png); width: 900px;" align="center"><tr><td align="left" width="100%"><b>' . ((isset($this->_tpldata['.'][0]['GL_CATEGORY'])) ? $this->_tpldata['.'][0]['GL_CATEGORY'] : '') . '<a href="' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['GL_FIRSTPIC'])) ? $this->_tpldata['index_list.'][$_index_list_i]['GL_FIRSTPIC'] : '') . '">' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['GL_CAT_NAME'])) ? $this->_tpldata['index_list.'][$_index_list_i]['GL_CAT_NAME'] : '') . '</a> <img src="images/help_small.png" align="middle" onmouseover="return overlib(\'<div class=\\\'pk_tt_help\\\' style=\\\'display:block; width: 270px;\\\'><div class=\\\'pktooldiv\\\'><table cellpadding=\\\'0\\\' border=\\\'0\\\' class=\\\'borderless\\\'><tr><td align=\\\'center\\\'><b><span style=\\\'font-size:13px;\\\'>' . ((isset($this->_tpldata['.'][0]['GL_CATEGORY'])) ? $this->_tpldata['.'][0]['GL_CATEGORY'] : '') . '' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['GL_CAT_NAME'])) ? $this->_tpldata['index_list.'][$_index_list_i]['GL_CAT_NAME'] : '') . '</span></b><br /><br /><table class=\\\'borderless\\\' width=\\\'100%\\\'><tr><td width=\\\'110\\\' valign=\\\'top\\\' align=\\\'left\\\'>' . ((isset($this->_tpldata['.'][0]['GL_COMMENT'])) ? $this->_tpldata['.'][0]['GL_COMMENT'] : '') . '</td><td align=\\\'left\\\'>' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['GL_CAT_COMMENT'])) ? $this->_tpldata['index_list.'][$_index_list_i]['GL_CAT_COMMENT'] : '') . '</td></tr><tr><td colspan=\\\'2\\\'></td></tr><tr><td width=\\\'110\\\' valign=\\\'top\\\' align=\\\'left\\\'>' . ((isset($this->_tpldata['.'][0]['GL_CAT_PIC_COUNT'])) ? $this->_tpldata['.'][0]['GL_CAT_PIC_COUNT'] : '') . '</td><td align=\\\'left\\\'>' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['GL_CAT_PICCOUNT'])) ? $this->_tpldata['index_list.'][$_index_list_i]['GL_CAT_PICCOUNT'] : '') . '</td></tr></table><br />' . ((isset($this->_tpldata['.'][0]['GL_CAT_NOTE'])) ? $this->_tpldata['.'][0]['GL_CAT_NOTE'] : '') . '</td></tr></table></div></div>\', MOUSEOFF, HAUTO, VAUTO,  FULLHTML, WRAP);" onmouseout="return nd();"></b></td></tr></table>			
    </td>			
  </tr>			
  <tr class="' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['GL_ROW_CLASS'])) ? $this->_tpldata['index_list.'][$_index_list_i]['GL_ROW_CLASS'] : '') . '">			
    <td align="center">		  
      <table align="center" style="width: 912px;">			  
        <tr>			  
          <td >        
            <div id="thumb" style="float:left; height: 220px; width: 220px; text-align: center; border: 1px solid #999999; margin: 2px; background: transparent url(' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'plugins/gallery/images/highlighting.png);">           
            <table height="100%" width="100%" class="borderless" cellpadding="0" cellspacing="0">            
              <tr>              
                <td style="text-align: center; vertical align: middle;">                  
                  <a href="' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['GL_IMG_SITE1'])) ? $this->_tpldata['index_list.'][$_index_list_i]['GL_IMG_SITE1'] : '') . '" >
                    <img src="' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['GL_IMAGE1'])) ? $this->_tpldata['index_list.'][$_index_list_i]['GL_IMAGE1'] : '') . '"></a>              </td>            
              </tr>          
            </table>        
            </div>        			  
            <div id="thumb" style="float:left; height: 220px; width: 220px; text-align: center; border: 1px solid #999999; margin: 2px; background: transparent url(' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'plugins/gallery/images/highlighting.png);">            <table height="100%" width="100%" class="borderless" cellpadding="0" cellspacing="0">            
              <tr>              
                <td style="text-align: center; vertical align: middle;">                  
                  <a href="' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['GL_IMG_SITE2'])) ? $this->_tpldata['index_list.'][$_index_list_i]['GL_IMG_SITE2'] : '') . '">
                    <img src="' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['GL_IMAGE2'])) ? $this->_tpldata['index_list.'][$_index_list_i]['GL_IMAGE2'] : '') . '"></a>              </td>            
              </tr>          
            </table>        
            </div>        
            <div id="thumb" style="float:left; height: 220px; width: 220px; text-align: center; border: 1px solid #999999; margin: 2px; background: transparent url(' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'plugins/gallery/images/highlighting.png);">            <table height="100%" width="100%" class="borderless" cellpadding="0" cellspacing="0">            
              <tr>              
                <td style="text-align: center; vertical align: middle;">                  
                  <a href="' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['GL_IMG_SITE3'])) ? $this->_tpldata['index_list.'][$_index_list_i]['GL_IMG_SITE3'] : '') . '">
                    <img src="' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['GL_IMAGE3'])) ? $this->_tpldata['index_list.'][$_index_list_i]['GL_IMAGE3'] : '') . '"></a>              </td>            
              </tr>          
            </table>        
            </div>      	
            <div id="thumb" style="float:left; height: 220px; width: 220px; text-align: center; border: 1px solid #999999; margin: 2px; background: transparent url(' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'plugins/gallery/images/highlighting.png);">            <table height="100%" width="100%" class="borderless" cellpadding="0" cellspacing="0">            
              <tr>              
                <td style="text-align: center; vertical align: middle;">                  
                  <a href="' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['GL_IMG_SITE4'])) ? $this->_tpldata['index_list.'][$_index_list_i]['GL_IMG_SITE4'] : '') . '">
                    <img src="' . ((isset($this->_tpldata['index_list.'][$_index_list_i]['GL_IMAGE4'])) ? $this->_tpldata['index_list.'][$_index_list_i]['GL_IMAGE4'] : '') . '"></a>              </td>            
              </tr>          
            </table>        
            </div>        </td>        
        </tr>        
      </table>        </div></td>      
  </tr>	
  ';}}
// END index_list
echo '    
  <tr>
    <td class="row2" align="center">
      <table style="border: 1px solid #999999; margin: 4px 0px 2px 0px; padding: 4px; background: transparent url(images/highlighting.png); width: 900px;" align="center"><tr><td align="left" width="33%">' . ((isset($this->_tpldata['.'][0]['GL_NAV_LEFT'])) ? $this->_tpldata['.'][0]['GL_NAV_LEFT'] : '') . '</td><td align="center" width="34%">&nbsp;' . ((isset($this->_tpldata['.'][0]['GL_CNAV'])) ? $this->_tpldata['.'][0]['GL_CNAV'] : '') . '&nbsp;</td><td align="right" width="33%">' . ((isset($this->_tpldata['.'][0]['GL_NAV_RIGHT'])) ? $this->_tpldata['.'][0]['GL_NAV_RIGHT'] : '') . '</td></tr></table>
    </td>
  </tr>	
  <tr>      
    <th colspan="4">&nbsp;
    </th>    
  </tr>
</table>
<script language="JavaScript" type="text/javascript">
function aboutDialog(){
  var boxabout = jBox.open(\'about\',\'iframe\',\'about.php\',\'' . ((isset($this->_tpldata['.'][0]['GL_ABOUT_HEADER'])) ? $this->_tpldata['.'][0]['GL_ABOUT_HEADER'] : '') . '\',\'width=400,height=250,center=true,minimizable=true,resize=true,draggable=true,model=false,scrolling=true\');
}
</script>
<br />
<center>
  <span class="copyis">
    <a onclick="javascript:aboutDialog()" style="cursor:pointer;" onmouseover="style.textDecoration=\'underline\';" onmouseout="style.textDecoration=\'none\';">
      <img src="images/credits/info.png" alt="' . ((isset($this->_tpldata['.'][0]['GL_L_CREDITS'])) ? $this->_tpldata['.'][0]['GL_L_CREDITS'] : '') . '" border="0" /> ' . ((isset($this->_tpldata['.'][0]['GL_L_CREDITS'])) ? $this->_tpldata['.'][0]['GL_L_CREDITS'] : '') . '</a>
  </span><br />
  <span class="copy">' . ((isset($this->_tpldata['.'][0]['GL_L_COPYRIGHT'])) ? $this->_tpldata['.'][0]['GL_L_COPYRIGHT'] : '') . '
  </span>
</center>';
}
?>