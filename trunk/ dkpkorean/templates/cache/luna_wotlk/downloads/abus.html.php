<?php
if ($this->security()) {
echo '<html>
  <head>
    <style type="text/css">img { vertical-align: middle; border: 0px; }BODY { font-family: Verdana, Tahoma, Arial;font-size: 11px;color: #000000;}tr, td { font-family: Verdana, Tahoma, Arial;font-size: 11px;color: #000000; }h3, td.h3 {  font-size: 12px;	font-weight: bold; 	color:#F37D1F;	padding-top:10px;}ul.intro_message, td.intro_message, tr.intro_message, table.intro_message {  text-align:left;  font-size: 11px;  padding:0, 10px;  margin:0;  color: black;}ul.intro_message a, td.intro_message a, tr.intro_message a, table.intro_message a {  text-decoration: none;  color: #5588cc;}ul.intro_message a:hover, td.intro_message a:hover, tr.intro_message a:hover, table.intro_message a:hover {  text-decoration: underline;  color: #5588cc;}
    </style>
  </head>
  <body>
    <ul class="intro_message">  
      <table border="0" cellpadding="0" cellspacing="0" class="borderless" width="310">    
        <tr>      
          <td style="padding-right: 10px;" valign="top" align="center" width="275">
            <img src="images/' . ((isset($this->_tpldata['.'][0]['DL_I_ITEM_NAME'])) ? $this->_tpldata['.'][0]['DL_I_ITEM_NAME'] : '') . '" alt="" border="0">
            <br/>      Version ' . ((isset($this->_tpldata['.'][0]['DL_L_VERSION'])) ? $this->_tpldata['.'][0]['DL_L_VERSION'] : '') . '</td>    
        </tr>    
        <tr>      
          <td style="padding-right: 10px;" valign="top">&nbsp;</td>      
          <td style="padding-right: 10px;" valign="top">&nbsp;		</td>    
        </tr>    
        <tr>      
          <td style="padding-right: 10px;" valign="top" colspan="2">		
            <table border="0" width="100%" id="table4" cellspacing="1" class="borderless">			
              <tr>				
                <td colspan=2><h3>' . ((isset($this->_tpldata['.'][0]['DL_L_DEVTEAM'])) ? $this->_tpldata['.'][0]['DL_L_DEVTEAM'] : '') . '</h3></td>			
              </tr>			
              <tr>				
                <td colspan=2>          &copy; ' . ((isset($this->_tpldata['.'][0]['DL_L_YEARR'])) ? $this->_tpldata['.'][0]['DL_L_YEARR'] : '') . ' ' . ((isset($this->_tpldata['.'][0]['DL_L_TXT_DEVTEAM'])) ? $this->_tpldata['.'][0]['DL_L_TXT_DEVTEAM'] : '') . '
                  <br/>          ' . ((isset($this->_tpldata['.'][0]['DL_L_URL_WEB'])) ? $this->_tpldata['.'][0]['DL_L_URL_WEB'] : '') . ': 
                  <a class="linkcrap" href="http://' . ((isset($this->_tpldata['.'][0]['DL_D_WEB_URL'])) ? $this->_tpldata['.'][0]['DL_D_WEB_URL'] : '') . '" target="_blank">' . ((isset($this->_tpldata['.'][0]['DL_D_WEB_URL'])) ? $this->_tpldata['.'][0]['DL_D_WEB_URL'] : '') . '</a>        </td>			
              </tr>			
              <tr>				<td><h3>' . ((isset($this->_tpldata['.'][0]['DL_L_ADDITONS'])) ? $this->_tpldata['.'][0]['DL_L_ADDITONS'] : '') . '</h3></td>			
              </tr>			
              <tr>				
                <td  valign="top">          
                  ';// BEGIN addition_row
$_addition_row_count = (isset($this->_tpldata['addition_row.'])) ?  sizeof($this->_tpldata['addition_row.']) : 0;
if ($_addition_row_count) {
for ($_addition_row_i = 0; $_addition_row_i < $_addition_row_count; $_addition_row_i++)
{
echo '            <b>' . ((isset($this->_tpldata['addition_row.'][$_addition_row_i]['DL_KEY'])) ? $this->_tpldata['addition_row.'][$_addition_row_i]['DL_KEY'] : '') . '</b>: ' . ((isset($this->_tpldata['addition_row.'][$_addition_row_i]['DL_VALUE'])) ? $this->_tpldata['addition_row.'][$_addition_row_i]['DL_VALUE'] : '') . '<br />          
                  ';}}
// END addition_row
echo '        </td>			
              </tr>		
            </table>		</td>    
        </tr>  
      </table>
      </center>
    </ul>
  </body>
</html>';
}
?>