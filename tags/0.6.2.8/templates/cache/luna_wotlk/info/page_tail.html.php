<?php
if ($this->security()) {
echo '<script>
                      ';// BEGIN msystem
$_msystem_count = (isset($this->_tpldata['msystem.'])) ?  sizeof($this->_tpldata['msystem.']) : 0;
if ($_msystem_count) {
for ($_msystem_i = 0; $_msystem_i < $_msystem_count; $_msystem_i++)
{
echo '
                        ' . ((isset($this->_tpldata['msystem.'][$_msystem_i]['MESSAGE'])) ? $this->_tpldata['msystem.'][$_msystem_i]['MESSAGE'] : '') . '
                      ';}}
// END msystem
echo '
                    </script>
                    ';// IF S_SHOW_QUERIES
if ($this->_tpldata['.'][0]['S_SHOW_QUERIES']) { 
echo '
                    <table width="100%" border="0" cellspacing="1" cellpadding="2">										  
                      <tr>										    
                        <th align="center">Queries / Error Messages
                        </th>										  
                      </tr>										  
                      ';// BEGIN query_row
$_query_row_count = (isset($this->_tpldata['query_row.'])) ?  sizeof($this->_tpldata['query_row.']) : 0;
if ($_query_row_count) {
for ($_query_row_i = 0; $_query_row_i < $_query_row_count; $_query_row_i++)
{
echo '										  
                      <tr class="' . ((isset($this->_tpldata['query_row.'][$_query_row_i]['ROW_CLASS'])) ? $this->_tpldata['query_row.'][$_query_row_i]['ROW_CLASS'] : '') . '">										    
                        <td width="100%">' . ((isset($this->_tpldata['query_row.'][$_query_row_i]['QUERY'])) ? $this->_tpldata['query_row.'][$_query_row_i]['QUERY'] : '') . '</td>										  
                      </tr>										  
                      ';}}
// END query_row
echo '										
                    </table>										
                    ';// ENDIF
}
// IF S_SHOW_DEBUG
if ($this->_tpldata['.'][0]['S_SHOW_DEBUG']) { 
echo '										
                    <center>
                      <span class="copy">SQL Querys: ' . ((isset($this->_tpldata['.'][0]['EQDKP_QUERYCOUNT'])) ? $this->_tpldata['.'][0]['EQDKP_QUERYCOUNT'] : '') . ' | in ' . ((isset($this->_tpldata['.'][0]['EQDKP_RENDERTIME'])) ? $this->_tpldata['.'][0]['EQDKP_RENDERTIME'] : '') . ' sec | 
                        <a href="http://validator.w3.org/check/referer" target="_top" class="copy">XHTML Validate</a>
                      </span>
                    </center>										
                    ';// ENDIF
}
echo '
                  </td>										
                  ';// IF THIRD_C
if ($this->_tpldata['.'][0]['THIRD_C']) { 
echo '<!-- dritte Spalte -->';echo '										
                  <td class="portal_sidebar" valign="top">
                  ' . ((isset($this->_tpldata['.'][0]['PORTAL_RIGHT'])) ? $this->_tpldata['.'][0]['PORTAL_RIGHT'] : '') . '
                  </td>										
                  ';// ENDIF
}
echo '									
                </tr>								
              </table>							
              ';// IF S_IN_ADMIN
if ($this->_tpldata['.'][0]['S_IN_ADMIN']) { 
echo '
            </td>						  
          </tr>						
        </table>						
        ';// ENDIF
}
// IF S_NORMAL_FOOTER
if ($this->_tpldata['.'][0]['S_NORMAL_FOOTER']) { 
echo '    <br />  
<table width="1050">
<tr>
<td>
&nbsp;
</td>
</tr>
</table>
</div>
      <div id="footer">    
                  ' . ((isset($this->_tpldata['.'][0]['EQDKP_PLUS_COPYRIGHT'])) ? $this->_tpldata['.'][0]['EQDKP_PLUS_COPYRIGHT'] : '') . '
                  ' . ((isset($this->_tpldata['.'][0]['H'])) ? $this->_tpldata['.'][0]['H'] : '') . '   
      </div>

</td>
<td style="width: 3%">&nbsp;</td>
</tr>
</table>
    ';// ENDIF
}
echo '
                  ' . ((isset($this->_tpldata['.'][0]['G'])) ? $this->_tpldata['.'][0]['G'] : '') . '
    <div style="height: 20px;">
      ';echo '<!-- just for placeholding -->';echo '
    </div>
  </body>
</html>';
}
?>