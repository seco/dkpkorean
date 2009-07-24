<?php
if ($this->security()) {
echo '<style type="text/css">
/* Basic code - don\'t modify */
.actionmenu { display: block; margin: 0; padding: 0; position: relative; }
.actionmenu li { display: block; list-style: none; margin: 0; padding: 0; float: right; position: relative; }
.actionmenu a { display: block; }
.actionmenu ul { display: none; position: absolute; right: 0; margin: 0; padding: 0; }
* html .actionmenu ul { line-height: 0; } /* IE6 "fix" */
.actionmenu ul a { zoom: 1; } /* IE6/7 fix */
.actionmenu ul li { float: none; }
.actionmenu ul ul { top: 0; }
    
/* Essentials - configure this */
.actionmenu ul { width: 220px; }
.actionmenu ul ul { right: 221px; }

/* Everything else is theming */
.actionmenu { height: 20px; font-size:11px; color: black;}
.actionmenu *:hover {  }
.actionmenu a { font-size: 12px; padding: 3px; line-height: 1; height: 20px;}
.actionmenu li.hover a { background-color: #EEFFDF; color: black; }
.actionmenu ul { top: 25px; background: #f5f5f5;}
.actionmenu ul li a { background-color: #EEFFDF; }
.actionmenu ul a.hover { background-color: #30A8C3; color: white; }
.actionmenu ul a { border-bottom: 1px solid white; border-right: none; opacity: 0.9; filter: alpha(opacity=90); }
/* #groupmenu ul a { border-bottom: none; } - I also needed this for IE6/7 */

/* Basic code - don\'t modify */
.colortab { display: block; margin: 0; padding: 0; position: relative; }
.colortab li { display: block; list-style: none; margin: 0; padding: 0; float: right; position: relative; }
.colortab a { display: block; font-size:11px;font-weight:normal;}
.colortab ul { display: none; position: absolute; right: 0; margin: 0; padding: 0; }
* html .colortab ul { line-height: 0; } /* IE6 "fix" */
.colortab ul a { zoom: 1; } /* IE6/7 fix */
.colortab ul li { float: none; }
.colortab ul ul { top: 0; }
    
/* Essentials - configure this */
.colortab ul { width: 160px; color: black;}
.colortab ul ul { right: 161px; }

/* Everything else is theming */
.colortab { height: 24px; font-size:11px;font-weight:normal;}
.colortab *:hover { background-color: #EEFFDF; font-weight:normal;}
.colortab a { font-size: 12px; padding: 4px; line-height: 1; color: black; background: #f5f5f5}
.colortab li.hover a { background-color: #EEFFDF; color: black; }
.colortab ul { top: 25px; background: #f5f5f5; color: black; font-size:11px;font-weight:normal;}
.colortab ul li a { background-color: #EEFFDF; color: black;}
.colortab ul a.hover { background-color: #30A8C3; color: white; }
.colortab ul a { border-right: none; opacity: 0.9; filter: alpha(opacity=90); color: black;}
/* #colortab ul a { border-bottom: none; } - I also needed this for IE6/7 */

tr.cm_confirm{
	text-decoration:line-through;
	font-style:italic;
}
</style>
<script language="JavaScript" type="text/javascript">

function AboutDialog() {
	 ' . ((isset($this->_tpldata['.'][0]['JS_ABOUT'])) ? $this->_tpldata['.'][0]['JS_ABOUT'] : '') . '
}
  
function AddChar() {
  ' . ((isset($this->_tpldata['.'][0]['JS_ADDCHARS'])) ? $this->_tpldata['.'][0]['JS_ADDCHARS'] : '') . '
}
  
function EditChar(editid) {
  ' . ((isset($this->_tpldata['.'][0]['JS_EDITCHAR'])) ? $this->_tpldata['.'][0]['JS_EDITCHAR'] : '') . '
}

function AddCharArmory() {
  ' . ((isset($this->_tpldata['.'][0]['JS_IMPORTCHAR'])) ? $this->_tpldata['.'][0]['JS_IMPORTCHAR'] : '') . '
}

function UpdateChar(memberid){
	' . ((isset($this->_tpldata['.'][0]['JS_UPDATECHAR'])) ? $this->_tpldata['.'][0]['JS_UPDATECHAR'] : '') . '
}

function MassUpdateChars(){
	' . ((isset($this->_tpldata['.'][0]['JS_MASSUPDATECH'])) ? $this->_tpldata['.'][0]['JS_MASSUPDATECH'] : '') . '
}

' . ((isset($this->_tpldata['.'][0]['JS_DELETECHAR'])) ? $this->_tpldata['.'][0]['JS_DELETECHAR'] : '') . '
</script>
<form method="post" action="' . ((isset($this->_tpldata['.'][0]['F_UPDATE'])) ? $this->_tpldata['.'][0]['F_UPDATE'] : '') . '" name="data">
<input type=\'hidden\' name=\'delete_id\' value=\'\'>
</form>
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  ';// IF CONNECT_CHARS
if ($this->_tpldata['.'][0]['CONNECT_CHARS']) { 
echo '
  <tr>
    <th colspan="10" >
    	<table width="100%" border="0" cellspacing="0" cellpadding="0">
    		<tr>
    			<td width="80%" align="left">
			      <form method="POST" action="' . ((isset($this->_tpldata['.'][0]['F_UPDATE'])) ? $this->_tpldata['.'][0]['F_UPDATE'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_CONN_MEMBERS'])) ? $this->_tpldata['.'][0]['L_CONN_MEMBERS'] : ((isset($user->lang['CONN_MEMBERS'])) ? $user->lang['CONN_MEMBERS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CONN_MEMBERS'))) . ' 	}')) . ': ' . ((isset($this->_tpldata['.'][0]['JS_CONNECTIONS'])) ? $this->_tpldata['.'][0]['JS_CONNECTIONS'] : '') . ' <input type="submit" name="submit" value="' . ((isset($this->_tpldata['.'][0]['L_SUBMIT'])) ? $this->_tpldata['.'][0]['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SUBMIT'))) . ' 	}')) . '" class="mainoption" />
			      </form>
			    </td>
			    <td width="20%">
      			' . ((isset($this->_tpldata['.'][0]['ADD_MENU'])) ? $this->_tpldata['.'][0]['ADD_MENU'] : '') . '
      		</td>
      	</tr>
      </table>
    </th>
  </tr>
  ';// ENDIF
}
echo ' 
  <tr>
    <th align="left" width="35" nowrap="nowrap">&nbsp;</th>
    <th align="left" width="100%"><a href="' . ((isset($this->_tpldata['.'][0]['U_CHARACTERS'])) ? $this->_tpldata['.'][0]['U_CHARACTERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_NAME'])) ? $this->_tpldata['.'][0]['O_NAME'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_NAME'])) ? $this->_tpldata['.'][0]['L_NAME'] : ((isset($user->lang['NAME'])) ? $user->lang['NAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NAME'))) . ' 	}')) . '</a></th>
    <th align="left" width="160" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_CHARACTERS'])) ? $this->_tpldata['.'][0]['U_CHARACTERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_GUILD'])) ? $this->_tpldata['.'][0]['O_GUILD'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_GUILD'])) ? $this->_tpldata['.'][0]['L_GUILD'] : ((isset($user->lang['GUILD'])) ? $user->lang['GUILD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'GUILD'))) . ' 	}')) . '</a></th>
    <th align="left" width="100" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_CHARACTERS'])) ? $this->_tpldata['.'][0]['U_CHARACTERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_CLASS'])) ? $this->_tpldata['.'][0]['O_CLASS'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_RANK'])) ? $this->_tpldata['.'][0]['L_RANK'] : ((isset($user->lang['RANK'])) ? $user->lang['RANK'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RANK'))) . ' 	}')) . '</a></th>
    <th align="left" width="40" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_CHARACTERS'])) ? $this->_tpldata['.'][0]['U_CHARACTERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_LEVEL'])) ? $this->_tpldata['.'][0]['O_LEVEL'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_LEVEL'])) ? $this->_tpldata['.'][0]['L_LEVEL'] : ((isset($user->lang['LEVEL'])) ? $user->lang['LEVEL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LEVEL'))) . ' 	}')) . '</a></th>

    <th align="left" width="100" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_SPEC'])) ? $this->_tpldata['.'][0]['L_SPEC'] : ((isset($user->lang['SPEC'])) ? $user->lang['SPEC'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SPEC'))) . ' 	}')) . '</th>
    <th align="left" width="35" nowrap="nowrap">&nbsp;</th>
  </tr>
  ';// BEGIN members_row
$_members_row_count = (isset($this->_tpldata['members_row.'])) ?  sizeof($this->_tpldata['members_row.']) : 0;
if ($_members_row_count) {
for ($_members_row_i = 0; $_members_row_i < $_members_row_count; $_members_row_i++)
{
echo '
  <tr class="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['ROW_CLASS'])) ? $this->_tpldata['members_row.'][$_members_row_i]['ROW_CLASS'] : '') . '' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['TBA'])) ? $this->_tpldata['members_row.'][$_members_row_i]['TBA'] : '') . '">
    <td width="35" nowrap="nowrap" align="right">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['COUNT'])) ? $this->_tpldata['members_row.'][$_members_row_i]['COUNT'] : '') . '</td>
    <td width="100%" nowrap="nowrap"><span class="classes' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['CLASSID'])) ? $this->_tpldata['members_row.'][$_members_row_i]['CLASSID'] : '') . '">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['CLASS_ICON'])) ? $this->_tpldata['members_row.'][$_members_row_i]['CLASS_ICON'] : '') . '' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['RACE_ICON'])) ? $this->_tpldata['members_row.'][$_members_row_i]['RACE_ICON'] : '') . ' ' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['NAME'])) ? $this->_tpldata['members_row.'][$_members_row_i]['NAME'] : '') . ' ' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['MBCONFIRMED'])) ? $this->_tpldata['members_row.'][$_members_row_i]['MBCONFIRMED'] : '') . '</span></td>
    <td width="160" nowrap="nowrap">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['GUILD'])) ? $this->_tpldata['members_row.'][$_members_row_i]['GUILD'] : '') . '</td>
    <td width="100" nowrap="nowrap">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['RANK'])) ? $this->_tpldata['members_row.'][$_members_row_i]['RANK'] : '') . '</td>
    <td width="40" nowrap="nowrap">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['LEVEL'])) ? $this->_tpldata['members_row.'][$_members_row_i]['LEVEL'] : '') . '</td>
    
    <td width="100" nowrap="nowrap">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['SPEC'])) ? $this->_tpldata['members_row.'][$_members_row_i]['SPEC'] : '') . ' ' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['SPEC2'])) ? $this->_tpldata['members_row.'][$_members_row_i]['SPEC2'] : '') . '</td>		
    <td align="left" width="35" nowrap="nowrap">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['ACTIONMENU'])) ? $this->_tpldata['members_row.'][$_members_row_i]['ACTIONMENU'] : '') . '</td>
  </tr>
  ';}}
// END members_row
echo '
  <tr>
    <th colspan="10" class="footer">' . ((isset($this->_tpldata['.'][0]['US_FOOTCOUNT'])) ? $this->_tpldata['.'][0]['US_FOOTCOUNT'] : '') . '</th>
  </tr>
</table>
<center><br /><span class="copyis"><a onclick="javascript:AboutDialog()" style="cursor:pointer;" onmouseover="style.textDecoration=\'underline\';" onmouseout="style.textDecoration=\'none\';"><img src="' . ((isset($this->_tpldata['.'][0]['ICON_INFO'])) ? $this->_tpldata['.'][0]['ICON_INFO'] : '') . '" alt="Credits" border="0" /> Credits</a></span>
<br /><span class="copy">' . ((isset($this->_tpldata['.'][0]['CM_COPYRIGHT'])) ? $this->_tpldata['.'][0]['CM_COPYRIGHT'] : '') . '</span></center>';
}
?>