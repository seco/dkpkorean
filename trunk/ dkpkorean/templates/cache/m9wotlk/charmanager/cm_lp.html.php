<?php
if ($this->security()) {
echo '<script language="JavaScript" type="text/javascript">
function AboutDialog() {
  ' . ((isset($this->_tpldata['.'][0]['JS_ABOUT'])) ? $this->_tpldata['.'][0]['JS_ABOUT'] : '') . '
}	

function EditChar(editid) {
  ' . ((isset($this->_tpldata['.'][0]['JS_EDITCHAR'])) ? $this->_tpldata['.'][0]['JS_EDITCHAR'] : '') . '
}
  </script>
    	 
';// IF S_NOTMM
if ($this->_tpldata['.'][0]['S_NOTMM']) { 
echo '
<form method="get" action="' . ((isset($this->_tpldata['.'][0]['F_MEMBERS'])) ? $this->_tpldata['.'][0]['F_MEMBERS'] : '') . '">
<input type="hidden" name="' . ((isset($this->_tpldata['.'][0]['URI_SESSION'])) ? $this->_tpldata['.'][0]['URI_SESSION'] : '') . '" value="' . ((isset($this->_tpldata['.'][0]['V_SID'])) ? $this->_tpldata['.'][0]['V_SID'] : '') . '" />
<table width="100%" border="0" cellspacing="1" cellpadding="2" style="border-bottom: none">
  <tr>
    <th align="right" width="56" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_FILTER'])) ? $this->_tpldata['.'][0]['L_FILTER'] : ((isset($user->lang['FILTER'])) ? $user->lang['FILTER'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FILTER'))) . ' 	}')) . ':</th>
    <th align="left">&nbsp;
      <select name="filter" class="input" onchange="javascript:form.submit();">
        ';// BEGIN filter_row
$_filter_row_count = (isset($this->_tpldata['filter_row.'])) ?  sizeof($this->_tpldata['filter_row.']) : 0;
if ($_filter_row_count) {
for ($_filter_row_i = 0; $_filter_row_i < $_filter_row_count; $_filter_row_i++)
{
echo '
        <option value="' . ((isset($this->_tpldata['filter_row.'][$_filter_row_i]['VALUE'])) ? $this->_tpldata['filter_row.'][$_filter_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['filter_row.'][$_filter_row_i]['SELECTED'])) ? $this->_tpldata['filter_row.'][$_filter_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['filter_row.'][$_filter_row_i]['OPTION'])) ? $this->_tpldata['filter_row.'][$_filter_row_i]['OPTION'] : '') . '</option>
        ';}}
// END filter_row
echo '
      </select>
    </th>
  </tr>
</table>
</form>
';// ENDIF
}
echo '
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="left" width="35" nowrap="nowrap">&nbsp;</th>
    ';// IF SHOW_ARMLINK
if ($this->_tpldata['.'][0]['SHOW_ARMLINK']) { 
echo '
    <th align="center" width="20" nowrap="nowrap"></th> 
    ';// ENDIF
}
echo '
    <th align="left" width="100%"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_PROFILES'])) ? $this->_tpldata['.'][0]['U_LIST_PROFILES'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_NAME'])) ? $this->_tpldata['.'][0]['O_NAME'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_NAME'])) ? $this->_tpldata['.'][0]['L_NAME'] : ((isset($user->lang['NAME'])) ? $user->lang['NAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NAME'))) . ' 	}')) . '</a></th>
    
    <th align="left" width="80">' . ((isset($this->_tpldata['.'][0]['L_SKILL'])) ? $this->_tpldata['.'][0]['L_SKILL'] : ((isset($user->lang['SKILL'])) ? $user->lang['SKILL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SKILL'))) . ' 	}')) . '</th>
    ';// IF SHOW_RESIS
if ($this->_tpldata['.'][0]['SHOW_RESIS']) { 
echo '
      <th align="left" width="20"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_PROFILES'])) ? $this->_tpldata['.'][0]['U_LIST_PROFILES'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_ARCANE'])) ? $this->_tpldata['.'][0]['O_ARCANE'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '"><img src="images/resistence/arcane_resistance.gif" alt="' . ((isset($this->_tpldata['.'][0]['L_ARCANE'])) ? $this->_tpldata['.'][0]['L_ARCANE'] : ((isset($user->lang['ARCANE'])) ? $user->lang['ARCANE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ARCANE'))) . ' 	}')) . '" /></a></th>
      <th align="left" width="20"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_PROFILES'])) ? $this->_tpldata['.'][0]['U_LIST_PROFILES'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_FIRE'])) ? $this->_tpldata['.'][0]['O_FIRE'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '"><img src="images/resistence/fire_resistance.gif" alt="' . ((isset($this->_tpldata['.'][0]['L_FIRE'])) ? $this->_tpldata['.'][0]['L_FIRE'] : ((isset($user->lang['FIRE'])) ? $user->lang['FIRE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FIRE'))) . ' 	}')) . '" /></a></th>
      <th align="left" width="20"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_PROFILES'])) ? $this->_tpldata['.'][0]['U_LIST_PROFILES'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_NATURE'])) ? $this->_tpldata['.'][0]['O_NATURE'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '"><img src="images/resistence/nature_resistance.gif" alt="' . ((isset($this->_tpldata['.'][0]['L_NATURE'])) ? $this->_tpldata['.'][0]['L_NATURE'] : ((isset($user->lang['NATURE'])) ? $user->lang['NATURE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NATURE'))) . ' 	}')) . '" /></a></th>
      <th align="left" width="20"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_PROFILES'])) ? $this->_tpldata['.'][0]['U_LIST_PROFILES'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_FROST'])) ? $this->_tpldata['.'][0]['O_FROST'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '"><img src="images/resistence/frost_resistance.gif" alt="' . ((isset($this->_tpldata['.'][0]['L_FROST'])) ? $this->_tpldata['.'][0]['L_FROST'] : ((isset($user->lang['FROST'])) ? $user->lang['FROST'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FROST'))) . ' 	}')) . '" /></a></th>
      <th align="left" width="20"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_PROFILES'])) ? $this->_tpldata['.'][0]['U_LIST_PROFILES'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_SHADOW'])) ? $this->_tpldata['.'][0]['O_SHADOW'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '"><img src="images/resistence/shadow_resistance.gif" alt="' . ((isset($this->_tpldata['.'][0]['L_SHADOW'])) ? $this->_tpldata['.'][0]['L_SHADOW'] : ((isset($user->lang['SHADOW'])) ? $user->lang['SHADOW'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SHADOW'))) . ' 	}')) . '" /></a></th>
    ';// ENDIF
}
echo '
    <th align="left" width="100"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_PROFILES'])) ? $this->_tpldata['.'][0]['U_LIST_PROFILES'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_RANK'])) ? $this->_tpldata['.'][0]['O_RANK'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_RANK'])) ? $this->_tpldata['.'][0]['L_RANK'] : ((isset($user->lang['RANK'])) ? $user->lang['RANK'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RANK'))) . ' 	}')) . '</a></th>
    <th align="left" width="140" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_PROFILES'])) ? $this->_tpldata['.'][0]['U_LIST_PROFILES'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_GUILD'])) ? $this->_tpldata['.'][0]['O_GUILD'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_GUILD'])) ? $this->_tpldata['.'][0]['L_GUILD'] : ((isset($user->lang['GUILD'])) ? $user->lang['GUILD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'GUILD'))) . ' 	}')) . '</a></th>
    <th align="left" width="40" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_PROFILES'])) ? $this->_tpldata['.'][0]['U_LIST_PROFILES'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_LEVEL'])) ? $this->_tpldata['.'][0]['O_LEVEL'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_LEVEL'])) ? $this->_tpldata['.'][0]['L_LEVEL'] : ((isset($user->lang['LEVEL'])) ? $user->lang['LEVEL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LEVEL'))) . ' 	}')) . '</a></th>
    <th align="left" width="100" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_PROFILES'])) ? $this->_tpldata['.'][0]['U_LIST_PROFILES'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_CLASS'])) ? $this->_tpldata['.'][0]['O_CLASS'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_CLASS'])) ? $this->_tpldata['.'][0]['L_CLASS'] : ((isset($user->lang['CLASS'])) ? $user->lang['CLASS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CLASS'))) . ' 	}')) . '</a></th>
    <th align="left" width="80" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_PROFILES'])) ? $this->_tpldata['.'][0]['U_LIST_PROFILES'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_CURRENT'])) ? $this->_tpldata['.'][0]['O_CURRENT'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_CURRENT'])) ? $this->_tpldata['.'][0]['L_CURRENT'] : ((isset($user->lang['CURRENT'])) ? $user->lang['CURRENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CURRENT'))) . ' 	}')) . '</a></th>
    <th align="left" width="70" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_PROFILES'])) ? $this->_tpldata['.'][0]['U_LIST_PROFILES'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_LASTRAID'])) ? $this->_tpldata['.'][0]['O_LASTRAID'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_LASTRAID'])) ? $this->_tpldata['.'][0]['L_LASTRAID'] : ((isset($user->lang['LASTRAID'])) ? $user->lang['LASTRAID'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LASTRAID'))) . ' 	}')) . '</a></th>
  	';// IF IS_EDITOR
if ($this->_tpldata['.'][0]['IS_EDITOR']) { 
echo '
  	<th align="left" width="35" nowrap="nowrap">&nbsp;</th>
  	';// ENDIF
}
echo '
  </tr>
  ';// BEGIN members_row
$_members_row_count = (isset($this->_tpldata['members_row.'])) ?  sizeof($this->_tpldata['members_row.']) : 0;
if ($_members_row_count) {
for ($_members_row_i = 0; $_members_row_i < $_members_row_count; $_members_row_i++)
{
echo '
  <tr class="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['ROW_CLASS'])) ? $this->_tpldata['members_row.'][$_members_row_i]['ROW_CLASS'] : '') . '">
    <td width="35" nowrap="nowrap" align="right">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['COUNT'])) ? $this->_tpldata['members_row.'][$_members_row_i]['COUNT'] : '') . '</td>
    ';// IF SHOW_ARMLINK
if ($this->_tpldata['.'][0]['SHOW_ARMLINK']) { 
echo '
    <td width="20" nowrap="nowrap">
    	<script>linkset[' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['COUNT'])) ? $this->_tpldata['members_row.'][$_members_row_i]['COUNT'] : '') . ']=\'<div class="menuitems"><a href="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['ARMORY_LINK1'])) ? $this->_tpldata['members_row.'][$_members_row_i]['ARMORY_LINK1'] : '') . '" target="_blank">' . ((isset($this->_tpldata['.'][0]['L_ARMORY_LINK1'])) ? $this->_tpldata['.'][0]['L_ARMORY_LINK1'] : ((isset($user->lang['ARMORY_LINK1'])) ? $user->lang['ARMORY_LINK1'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ARMORY_LINK1'))) . ' 	}')) . '</a></div>\'
							linkset[' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['COUNT'])) ? $this->_tpldata['members_row.'][$_members_row_i]['COUNT'] : '') . ']+=\'<div class="menuitems"><a href="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['ARMORY_LINK2'])) ? $this->_tpldata['members_row.'][$_members_row_i]['ARMORY_LINK2'] : '') . '" target="_blank">' . ((isset($this->_tpldata['.'][0]['L_ARMORY_LINK2'])) ? $this->_tpldata['.'][0]['L_ARMORY_LINK2'] : ((isset($user->lang['ARMORY_LINK2'])) ? $user->lang['ARMORY_LINK2'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ARMORY_LINK2'))) . ' 	}')) . '</a></div>\'
							';// IF members_row.ARMORY_LINK3
if ($this->_tpldata['members_row.'][$_members_row_i]['ARMORY_LINK3']) { 
echo '
							linkset[' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['COUNT'])) ? $this->_tpldata['members_row.'][$_members_row_i]['COUNT'] : '') . ']+=\'<div class="menuitems"><a href="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['ARMORY_LINK3'])) ? $this->_tpldata['members_row.'][$_members_row_i]['ARMORY_LINK3'] : '') . '" target="_blank">' . ((isset($this->_tpldata['.'][0]['L_ARMORY_LINK3'])) ? $this->_tpldata['.'][0]['L_ARMORY_LINK3'] : ((isset($user->lang['ARMORY_LINK3'])) ? $user->lang['ARMORY_LINK3'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ARMORY_LINK3'))) . ' 	}')) . '</a></div>\'
							';// ENDIF
}
echo '
							</script>
    	<img onmouseover="showmenu(event,linkset[' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['COUNT'])) ? $this->_tpldata['members_row.'][$_members_row_i]['COUNT'] : '') . '])" src="images/armory.gif" alt="Armory Profile" height=16 width=16 /></td>
    ';// ENDIF
}
echo '
    <td width="100%" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['U_VIEW_MEMBER'])) ? $this->_tpldata['members_row.'][$_members_row_i]['U_VIEW_MEMBER'] : '') . '">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['NAME'])) ? $this->_tpldata['members_row.'][$_members_row_i]['NAME'] : '') . '</a></td>
    
    <td width="80" nowrap="nowrap">
    			' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['SKILL'])) ? $this->_tpldata['members_row.'][$_members_row_i]['SKILL'] : '') . '
    </td>
    ';// IF SHOW_RESIS
if ($this->_tpldata['.'][0]['SHOW_RESIS']) { 
echo '
      <td width="20" nowrap="nowrap">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['ARCANE'])) ? $this->_tpldata['members_row.'][$_members_row_i]['ARCANE'] : '') . '</td>
      <td width="20" nowrap="nowrap">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['FIRE'])) ? $this->_tpldata['members_row.'][$_members_row_i]['FIRE'] : '') . '</td>
      <td width="20" nowrap="nowrap">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['NATURE'])) ? $this->_tpldata['members_row.'][$_members_row_i]['NATURE'] : '') . '</td>
      <td width="20" nowrap="nowrap">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['FROST'])) ? $this->_tpldata['members_row.'][$_members_row_i]['FROST'] : '') . '</td>
      <td width="20" nowrap="nowrap">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['SHADOW'])) ? $this->_tpldata['members_row.'][$_members_row_i]['SHADOW'] : '') . '</td>
    ';// ENDIF
}
echo '
    <td width="100" nowrap="nowrap">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['RANK'])) ? $this->_tpldata['members_row.'][$_members_row_i]['RANK'] : '') . '</td>
    <td width="140" nowrap="nowrap">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['GUILD'])) ? $this->_tpldata['members_row.'][$_members_row_i]['GUILD'] : '') . '</td>
    <td width="40" nowrap="nowrap">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['LEVEL'])) ? $this->_tpldata['members_row.'][$_members_row_i]['LEVEL'] : '') . '</td>
    <td width="100" nowrap="nowrap">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['CLASS'])) ? $this->_tpldata['members_row.'][$_members_row_i]['CLASS'] : '') . '</td>
    <td width="60" nowrap="nowrap" class="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['C_CURRENT'])) ? $this->_tpldata['members_row.'][$_members_row_i]['C_CURRENT'] : '') . '">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['CURRENT'])) ? $this->_tpldata['members_row.'][$_members_row_i]['CURRENT'] : '') . '</td>
    <td width="70" nowrap="nowrap" class="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['C_LASTRAID'])) ? $this->_tpldata['members_row.'][$_members_row_i]['C_LASTRAID'] : '') . '">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['LASTRAID'])) ? $this->_tpldata['members_row.'][$_members_row_i]['LASTRAID'] : '') . '</td>
  	';// IF IS_EDITOR
if ($this->_tpldata['.'][0]['IS_EDITOR']) { 
echo '
  	<td width="35" nowrap="nowrap" align="right"><input type="button" name="edit" value="' . ((isset($this->_tpldata['.'][0]['L_BUTTON_EDIT'])) ? $this->_tpldata['.'][0]['L_BUTTON_EDIT'] : ((isset($user->lang['BUTTON_EDIT'])) ? $user->lang['BUTTON_EDIT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BUTTON_EDIT'))) . ' 	}')) . '" onclick="javascript:EditChar(' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['ID'])) ? $this->_tpldata['members_row.'][$_members_row_i]['ID'] : '') . ')" class="mainoption"/></td>
  	';// ENDIF
}
echo '
  </tr>
  ';}}
// END members_row
echo '
  <tr>
    <th colspan="16" class="footer">' . ((isset($this->_tpldata['.'][0]['LISTMEMBERS_FOOTCOUNT'])) ? $this->_tpldata['.'][0]['LISTMEMBERS_FOOTCOUNT'] : '') . '</th>
  </tr>
</table>
<center><br /><span class="copyis"><a onclick="javascript:AboutDialog()" style="cursor:pointer;" onmouseover="style.textDecoration=\'underline\';" onmouseout="style.textDecoration=\'none\';"><img src="' . ((isset($this->_tpldata['.'][0]['ICON_INFO'])) ? $this->_tpldata['.'][0]['ICON_INFO'] : '') . '" alt="Credits" border="0" /> Credits</a></span>
<br /><span class="copy">' . ((isset($this->_tpldata['.'][0]['L_CREDIT_NAME'])) ? $this->_tpldata['.'][0]['L_CREDIT_NAME'] : ((isset($user->lang['CREDIT_NAME'])) ? $user->lang['CREDIT_NAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CREDIT_NAME'))) . ' 	}')) . ' v' . ((isset($this->_tpldata['.'][0]['L_VERSION'])) ? $this->_tpldata['.'][0]['L_VERSION'] : ((isset($user->lang['VERSION'])) ? $user->lang['VERSION'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'VERSION'))) . ' 	}')) . ' &copy; 2006 - ' . ((isset($this->_tpldata['.'][0]['L_YEAR'])) ? $this->_tpldata['.'][0]['L_YEAR'] : ((isset($user->lang['YEAR'])) ? $user->lang['YEAR'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'YEAR'))) . ' 	}')) . ' by <a href="http://www.wallenium.de" target="blank">Wallenium</a></span></center>';
}
?>