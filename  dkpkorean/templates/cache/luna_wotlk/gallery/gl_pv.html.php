<?php
if ($this->security()) {
echo '<style>
table.borderless .image-resize div { height: 0px; margin: 0px; padding: 0px}
#mthumb:hover { background: transparent url(' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'plugins/gallery/images/hover.png);}
</style>
<table width="100%" border="0" cellspacing="0" cellpadding="2">	
  <tr>		
    <th colspan="3"> 
      <table width="100%" class="borderless" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td style="text-align: left;"><b>      
            <a href="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'plugins/gallery/gallery.php">' . ((isset($this->_tpldata['.'][0]['GL_HEADLINE'])) ? $this->_tpldata['.'][0]['GL_HEADLINE'] : '') . '</a> -> ' . ((isset($this->_tpldata['.'][0]['GL_HEADLINE_CAT'])) ? $this->_tpldata['.'][0]['GL_HEADLINE_CAT'] : '') . ' -> ' . ((isset($this->_tpldata['.'][0]['GL_TITLE'])) ? $this->_tpldata['.'][0]['GL_TITLE'] : '') . '</b></td>' . ((isset($this->_tpldata['.'][0]['GL_UPLOAD'])) ? $this->_tpldata['.'][0]['GL_UPLOAD'] : '') . '
        </tr>
      </table>
    </th>	
  </tr>	
  <tr class="row1">	<td>	
      <table class="borderless" border="0" cellpadding="0" cellspacing="0">  
        <tr >    
          <td valign="top">    
            <table class="borderless" border="0" cellpadding="0" cellspacing="2">    
              <tr >		
                <td width="50" align="right">' . ((isset($this->_tpldata['.'][0]['GL_PREV'])) ? $this->_tpldata['.'][0]['GL_PREV'] : '') . '</td>		
                <td align="center">                   
                  <div style="width: 470px; border: 1px solid #999999; padding: 10px; background: transparent url(images/highlighting.png);" class="row3">            
                    <table height="400" width="100%" class="borderless" cellpadding="0" cellspacing="0">              
                      <tr>                
                        <td style="text-align: center; vertical align: middle;">                  
                          <a href="' . ((isset($this->_tpldata['.'][0]['GL_DIRNAME'])) ? $this->_tpldata['.'][0]['GL_DIRNAME'] : '') . '/' . ((isset($this->_tpldata['.'][0]['GL_FILENAME'])) ? $this->_tpldata['.'][0]['GL_FILENAME'] : '') . '" rel="lytebox[' . ((isset($this->_tpldata['.'][0]['GL_CATEGORY'])) ? $this->_tpldata['.'][0]['GL_CATEGORY'] : '') . ']" class="image-resize" title="' . ((isset($this->_tpldata['.'][0]['GL_TITLE'])) ? $this->_tpldata['.'][0]['GL_TITLE'] : '') . '&nbsp; &lt;span style=&quot;font-weight: normal;&quot;&gt;(' . ((isset($this->_tpldata['.'][0]['GL_PIC_WIDTH'])) ? $this->_tpldata['.'][0]['GL_PIC_WIDTH'] : '') . 'x' . ((isset($this->_tpldata['.'][0]['GL_PIC_HEIGHT'])) ? $this->_tpldata['.'][0]['GL_PIC_HEIGHT'] : '') . ') ' . ((isset($this->_tpldata['.'][0]['GL_SHORT_UP_FROM'])) ? $this->_tpldata['.'][0]['GL_SHORT_UP_FROM'] : '') . '' . ((isset($this->_tpldata['.'][0]['GL_UNAME'])) ? $this->_tpldata['.'][0]['GL_UNAME'] : '') . '&lt;/span&gt;&lt;br /&gt;&lt;span style=&quot;font-weight: normal;&quot;&gt;' . ((isset($this->_tpldata['.'][0]['GL_DESCRIPTION_CONTENT_NOBREAK'])) ? $this->_tpldata['.'][0]['GL_DESCRIPTION_CONTENT_NOBREAK'] : '') . '&lt;/span&gt;" >                  
                            <img src="' . ((isset($this->_tpldata['.'][0]['GL_DIRNAME'])) ? $this->_tpldata['.'][0]['GL_DIRNAME'] : '') . '/' . ((isset($this->_tpldata['.'][0]['GL_FILENAME'])) ? $this->_tpldata['.'][0]['GL_FILENAME'] : '') . '" align="middle" style="max-height: 400px; max-width: 450px">                  </a>                </td>              
                      </tr>            
                    </table>          
                  </div>    </td>		
                <td width="50" >' . ((isset($this->_tpldata['.'][0]['GL_NEXT'])) ? $this->_tpldata['.'][0]['GL_NEXT'] : '') . '</td>		
              </tr>    
              <tr >		
                <td width="50" ></td>		
                <td align="center">		    
                  <table style="border: 1px solid #999999; table-layout:auto; width: 492px" border="0" cellspacing="1" cellpadding="2">			
                    <tr>				
                      <td style="text-align: center; padding: 10px; width: 468px; background: transparent url(images/highlighting.png);"  height="70" colspan="2">        <b>' . ((isset($this->_tpldata['.'][0]['GL_TITLE'])) ? $this->_tpldata['.'][0]['GL_TITLE'] : '') . '</b>        </td>			
                    </tr>      
                    <tr>				
                      <td class="row1" height="28" style="text-align: left; width: 170px; background: transparent url(images/highlighting.png);">' . ((isset($this->_tpldata['.'][0]['GL_FILE_NAME'])) ? $this->_tpldata['.'][0]['GL_FILE_NAME'] : '') . '</td>
                      <td class="row2" height="28" style="text-align: left; width: 322px">			  ' . ((isset($this->_tpldata['.'][0]['GL_FILENAME'])) ? $this->_tpldata['.'][0]['GL_FILENAME'] : '') . '</td>      
                    </tr>      
                    <tr>				
                      <td class="row1" height="70" valign="top" style="padding-top: 5px; padding-bottom: 5px; text-align: left; width: 170px; background: transparent url(images/highlighting.png);">' . ((isset($this->_tpldata['.'][0]['GL_DESCRIPTION'])) ? $this->_tpldata['.'][0]['GL_DESCRIPTION'] : '') . '</td>
                      <td class="row2" height="28" valign="top" style="padding-top: 5px; padding-bottom: 5px; text-align: left; width: 322px">			  ' . ((isset($this->_tpldata['.'][0]['GL_DESCRIPTION_CONTENT_HTML_FIX'])) ? $this->_tpldata['.'][0]['GL_DESCRIPTION_CONTENT_HTML_FIX'] : '') . '</td>      
                    </tr>      
                    <tr>				
                      <td class="row1" height="28" style="text-align: left; width: 170px; background: transparent url(' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'plugins/gallery/images/highlighting.png);">' . ((isset($this->_tpldata['.'][0]['GL_UP_FROM'])) ? $this->_tpldata['.'][0]['GL_UP_FROM'] : '') . '</td>
                      <td class="row2" height="28" style="text-align: left; width: 322px">	  ' . ((isset($this->_tpldata['.'][0]['GL_UNAME'])) ? $this->_tpldata['.'][0]['GL_UNAME'] : '') . '</td>      
                    </tr>      
                    <tr>				
                      <td class="row1" height="28" style="text-align: left; width: 170px; background: transparent url(' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'plugins/gallery/images/highlighting.png);">' . ((isset($this->_tpldata['.'][0]['GL_UP_DATE'])) ? $this->_tpldata['.'][0]['GL_UP_DATE'] : '') . '</td>
                      <td class="row2" height="28" style="text-align: left; width: 298px">			  ' . ((isset($this->_tpldata['.'][0]['GL_DATE'])) ? $this->_tpldata['.'][0]['GL_DATE'] : '') . '</td>      
                    </tr>      
                    <tr>				
                      <td class="row1" height="28" style="text-align: left; width: 170px; background: transparent url(' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'plugins/gallery/images/highlighting.png);">' . ((isset($this->_tpldata['.'][0]['GL_HITS'])) ? $this->_tpldata['.'][0]['GL_HITS'] : '') . '</td>
                      <td class="row2" height="28" style="text-align: left; width: 298px">			  ' . ((isset($this->_tpldata['.'][0]['GL_VISITS'])) ? $this->_tpldata['.'][0]['GL_VISITS'] : '') . 'x</td>      
                    </tr>      
                    <tr>				
                      <td class="row1" height="28" style="text-align: left; width: 170px; background: transparent url(' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'plugins/gallery/images/highlighting.png);">' . ((isset($this->_tpldata['.'][0]['GL_PIC_RESOLUTION'])) ? $this->_tpldata['.'][0]['GL_PIC_RESOLUTION'] : '') . '</td>
                      <td class="row2" height="28" style="text-align: left; width: 298px">			  ' . ((isset($this->_tpldata['.'][0]['GL_PIC_WIDTH'])) ? $this->_tpldata['.'][0]['GL_PIC_WIDTH'] : '') . ' x ' . ((isset($this->_tpldata['.'][0]['GL_PIC_HEIGHT'])) ? $this->_tpldata['.'][0]['GL_PIC_HEIGHT'] : '') . '</td>      
                    </tr>      
                    <tr>				
                      <td class="row1" height="28" style="text-align: left; width: 170px; background: transparent url(' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'plugins/gallery/images/highlighting.png);">' . ((isset($this->_tpldata['.'][0]['GL_URL_FLAG'])) ? $this->_tpldata['.'][0]['GL_URL_FLAG'] : '') . '</td>
                      <td class="row2" height="28" style="text-align: left; width: 298px">			  
                        <input type="text" value="' . ((isset($this->_tpldata['.'][0]['GL_URL_STREAM'])) ? $this->_tpldata['.'][0]['GL_URL_STREAM'] : '') . '" size="60" class="input" readonly="readonly" onclick="select()"></td>      
                    </tr>			
                    <tr>				
                      <td class="row1" height="28" style="text-align: left; width: 170px; background: transparent url(' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'plugins/gallery/images/highlighting.png);">' . ((isset($this->_tpldata['.'][0]['GL_BB_FLAG'])) ? $this->_tpldata['.'][0]['GL_BB_FLAG'] : '') . '</td>
                      <td class="row2" height="28" style="text-align: left; width: 298px">				
                        <input type="text" value="' . ((isset($this->_tpldata['.'][0]['GL_BB_STREAM'])) ? $this->_tpldata['.'][0]['GL_BB_STREAM'] : '') . '" size="60" class="input" readonly="readonly" onclick="select()"></td>			
                    </tr>
            </table>    <br />&nbsp;</td>		
          <td width="50" ></td>		
        </tr>		     
      </table>
      </td>		
      <td width="100%" valign="top" align="center">		
        <div style="overflow: hidden; width: 378px;"><table style="border: 1px solid #999999; margin: 2px; padding: 4px; background: transparent url(images/highlighting.png); width: 374px; " ><tr><td align="left" width="33%">' . ((isset($this->_tpldata['.'][0]['GL_NAVIGATION_LEFT'])) ? $this->_tpldata['.'][0]['GL_NAVIGATION_LEFT'] : '') . '</td><td align="center" width="34%">&nbsp;' . ((isset($this->_tpldata['.'][0]['GL_NAVIGATION_CENTER'])) ? $this->_tpldata['.'][0]['GL_NAVIGATION_CENTER'] : '') . '&nbsp;</td><td align="right" width="33%">' . ((isset($this->_tpldata['.'][0]['GL_NAVIGATION_RIGHT'])) ? $this->_tpldata['.'][0]['GL_NAVIGATION_RIGHT'] : '') . '</td></tr></table>' . ((isset($this->_tpldata['.'][0]['GL_RES_OUT'])) ? $this->_tpldata['.'][0]['GL_RES_OUT'] : '') . '
      <table style="border: 1px solid #999999; margin: 2px; padding: 4px; background: transparent url(images/highlighting.png); width: 374px; " ><tr><td align="left" width="15%">' . ((isset($this->_tpldata['.'][0]['GL_NAVIGATION_LEFT'])) ? $this->_tpldata['.'][0]['GL_NAVIGATION_LEFT'] : '') . '</td><td align="center" width="70%">' . ((isset($this->_tpldata['.'][0]['GL_RANGE_NAVIGATION_CENTER'])) ? $this->_tpldata['.'][0]['GL_RANGE_NAVIGATION_CENTER'] : '') . '&nbsp;</td><td align="right" width="15%">' . ((isset($this->_tpldata['.'][0]['GL_NAVIGATION_RIGHT'])) ? $this->_tpldata['.'][0]['GL_NAVIGATION_RIGHT'] : '') . '</td></tr></table>
      ' . ((isset($this->_tpldata['.'][0]['GL_LB_ARR'])) ? $this->_tpldata['.'][0]['GL_LB_ARR'] : '') . '  
        </div>
        		</td>	
  </tr>	
</table>  
    ';// IF ENABLE_COMMENTS
if ($this->_tpldata['.'][0]['ENABLE_COMMENTS']) { 
echo '
            ' . ((isset($this->_tpldata['.'][0]['COMMENTS'])) ? $this->_tpldata['.'][0]['COMMENTS'] : '') . '     
    ';// ENDIF
}
echo '     </td>  
</tr>	
<tr class="' . ((isset($this->_tpldata['.'][0]['GL_ROW_CLASS'])) ? $this->_tpldata['.'][0]['GL_ROW_CLASS'] : '') . '">		
  <th colspan="3"> 
  </th>  
</tr>
</table>
<script language="JavaScript" type="text/javascript">
function aboutDialog(){
  var boxabout = jBox.open(\'about\',\'iframe\',\'about.php\',\'' . ((isset($this->_tpldata['.'][0]['GL_ABOUT_HEADER'])) ? $this->_tpldata['.'][0]['GL_ABOUT_HEADER'] : '') . '\',\'width=400,height=250,center=true,minimizable=true,resize=true,draggable=true,model=false,scrolling=true\');
}
</script>
<br/>
<center>
  <span class="copyis">
    <a onclick="javascript:aboutDialog()" style="cursor:pointer;" onmouseover="style.textDecoration=\'underline\';" onmouseout="style.textDecoration=\'none\';">
      <img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'plugins/gallery/images/credits/info.png" alt="' . ((isset($this->_tpldata['.'][0]['GL_L_CREDITS'])) ? $this->_tpldata['.'][0]['GL_L_CREDITS'] : '') . '" border="0" /> ' . ((isset($this->_tpldata['.'][0]['GL_L_CREDITS'])) ? $this->_tpldata['.'][0]['GL_L_CREDITS'] : '') . '</a>
  </span><br />
  <span class="copy">' . ((isset($this->_tpldata['.'][0]['GL_L_COPYRIGHT'])) ? $this->_tpldata['.'][0]['GL_L_COPYRIGHT'] : '') . '
  </span>
</center>';
}
?>