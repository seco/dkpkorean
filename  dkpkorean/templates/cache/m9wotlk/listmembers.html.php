<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
// IF S_NOTMM
if ($this->_tpldata['.'][0]['S_NOTMM']) { 
// IF SHOW_LEADERB
if ($this->_tpldata['.'][0]['SHOW_LEADERB']) { 
// IF LEADERBOARD_2ROW
if ($this->_tpldata['.'][0]['LEADERBOARD_2ROW']) { 
// INCLUDE listmembers_leaderboard.html
$this->assign_from_include('listmembers_leaderboard.html');
// ELSE
} else {
// INCLUDE listmembers_leaderboard.html
$this->assign_from_include('listmembers_leaderboard.html');
// ENDIF
}
// ENDIF
}
echo '
<form method="get" action="' . ((isset($this->_tpldata['.'][0]['F_MEMBERS'])) ? $this->_tpldata['.'][0]['F_MEMBERS'] : '') . '">
<input type="hidden" name="' . ((isset($this->_tpldata['.'][0]['URI_SESSION'])) ? $this->_tpldata['.'][0]['URI_SESSION'] : '') . '" value="' . ((isset($this->_tpldata['.'][0]['V_SID'])) ? $this->_tpldata['.'][0]['V_SID'] : '') . '" />
<input type="hidden" name="multifilter" value="' . ((isset($this->_tpldata['.'][0]['GIVEN_MULTIFILTER'])) ? $this->_tpldata['.'][0]['GIVEN_MULTIFILTER'] : '') . '" />

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
<form method="post" action="' . ((isset($this->_tpldata['.'][0]['F_MEMBERS'])) ? $this->_tpldata['.'][0]['F_MEMBERS'] : '') . '" name="post">
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" width="20" nowrap="nowrap">&nbsp;</th>
    <th align="left" width="35" nowrap="nowrap">&nbsp;</th>
    <th align="left" width="100%"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_MEMBERS'])) ? $this->_tpldata['.'][0]['U_LIST_MEMBERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_NAME'])) ? $this->_tpldata['.'][0]['O_NAME'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_NAME'])) ? $this->_tpldata['.'][0]['L_NAME'] : ((isset($user->lang['NAME'])) ? $user->lang['NAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NAME'))) . ' 	}')) . '</a></th>

    ';// IF SHOW_CMC_PROFILES
if ($this->_tpldata['.'][0]['SHOW_CMC_PROFILES']) { 
echo '
    <th align="left" width="80">Profil</th>
    ';// ENDIF
}
// IF SHOW_RANK
if ($this->_tpldata['.'][0]['SHOW_RANK']) { 
echo '
    <th align="left" ><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_MEMBERS'])) ? $this->_tpldata['.'][0]['U_LIST_MEMBERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_RANK'])) ? $this->_tpldata['.'][0]['O_RANK'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_RANK'])) ? $this->_tpldata['.'][0]['L_RANK'] : ((isset($user->lang['RANK'])) ? $user->lang['RANK'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RANK'))) . ' 	}')) . '</a></th>
    ';// ENDIF
}
// IF SHOW_LEVEL
if ($this->_tpldata['.'][0]['SHOW_LEVEL']) { 
echo '
    <th align="left" width="40" nowrap="nowrap"> <a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_MEMBERS'])) ? $this->_tpldata['.'][0]['U_LIST_MEMBERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_LEVEL'])) ? $this->_tpldata['.'][0]['O_LEVEL'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_LEVEL'])) ? $this->_tpldata['.'][0]['L_LEVEL'] : ((isset($user->lang['LEVEL'])) ? $user->lang['LEVEL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LEVEL'))) . ' 	}')) . '</a></th>
    ';// ENDIF
}
// IF SHOW_CLASS
if ($this->_tpldata['.'][0]['SHOW_CLASS']) { 
echo '
    <th align="left" width="120" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_MEMBERS'])) ? $this->_tpldata['.'][0]['U_LIST_MEMBERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_CLASS'])) ? $this->_tpldata['.'][0]['O_CLASS'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_CLASS'])) ? $this->_tpldata['.'][0]['L_CLASS'] : ((isset($user->lang['CLASS'])) ? $user->lang['CLASS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CLASS'))) . ' 	}')) . '</a></th>
		';// ENDIF
}
// IF SHOW_CMC_SKILL
if ($this->_tpldata['.'][0]['SHOW_CMC_SKILL']) { 
echo '
		<th align="left" width="110" nowrap>' . ((isset($this->_tpldata['.'][0]['L_SKILL'])) ? $this->_tpldata['.'][0]['L_SKILL'] : ((isset($user->lang['SKILL'])) ? $user->lang['SKILL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SKILL'))) . ' 	}')) . '</th>
		';// ENDIF
}
// IF SHOW_CMC_ARKAN
if ($this->_tpldata['.'][0]['SHOW_CMC_ARKAN']) { 
echo '
    <th align="left" width="20"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_MEMBERS'])) ? $this->_tpldata['.'][0]['U_LIST_MEMBERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_ARCANE'])) ? $this->_tpldata['.'][0]['O_ARCANE'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '"><img src="plugins/charmanager/images/resistence/arcane_resistance.gif" alt="' . ((isset($this->_tpldata['.'][0]['L_ARCANE'])) ? $this->_tpldata['.'][0]['L_ARCANE'] : ((isset($user->lang['ARCANE'])) ? $user->lang['ARCANE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ARCANE'))) . ' 	}')) . '" /></a></th>
    ';// ENDIF
}
// IF SHOW_CMC_FIRE
if ($this->_tpldata['.'][0]['SHOW_CMC_FIRE']) { 
echo '
    <th align="left" width="20"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_MEMBERS'])) ? $this->_tpldata['.'][0]['U_LIST_MEMBERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_FIRE'])) ? $this->_tpldata['.'][0]['O_FIRE'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '"><img src="plugins/charmanager/images/resistence/fire_resistance.gif" alt="' . ((isset($this->_tpldata['.'][0]['L_FIRE'])) ? $this->_tpldata['.'][0]['L_FIRE'] : ((isset($user->lang['FIRE'])) ? $user->lang['FIRE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FIRE'))) . ' 	}')) . '" /></a></th>
    ';// ENDIF
}
// IF SHOW_CMC_NATURE
if ($this->_tpldata['.'][0]['SHOW_CMC_NATURE']) { 
echo '
    <th align="left" width="20"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_MEMBERS'])) ? $this->_tpldata['.'][0]['U_LIST_MEMBERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_NATURE'])) ? $this->_tpldata['.'][0]['O_NATURE'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '"><img src="plugins/charmanager/images/resistence/nature_resistance.gif" alt="' . ((isset($this->_tpldata['.'][0]['L_NATURE'])) ? $this->_tpldata['.'][0]['L_NATURE'] : ((isset($user->lang['NATURE'])) ? $user->lang['NATURE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NATURE'))) . ' 	}')) . '" /></a></th>
    ';// ENDIF
}
// IF SHOW_CMC_ICE
if ($this->_tpldata['.'][0]['SHOW_CMC_ICE']) { 
echo '
    <th align="left" width="20"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_MEMBERS'])) ? $this->_tpldata['.'][0]['U_LIST_MEMBERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_FROST'])) ? $this->_tpldata['.'][0]['O_FROST'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '"><img src="plugins/charmanager/images/resistence/frost_resistance.gif" alt="' . ((isset($this->_tpldata['.'][0]['L_FROST'])) ? $this->_tpldata['.'][0]['L_FROST'] : ((isset($user->lang['FROST'])) ? $user->lang['FROST'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FROST'))) . ' 	}')) . '" /></a></th>
    ';// ENDIF
}
// IF SHOW_CMC_SHADOW
if ($this->_tpldata['.'][0]['SHOW_CMC_SHADOW']) { 
echo '
    <th align="left" width="20"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_MEMBERS'])) ? $this->_tpldata['.'][0]['U_LIST_MEMBERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_SHADOW'])) ? $this->_tpldata['.'][0]['O_SHADOW'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '"><img src="plugins/charmanager/images/resistence/shadow_resistance.gif" alt="' . ((isset($this->_tpldata['.'][0]['L_SHADOW'])) ? $this->_tpldata['.'][0]['L_SHADOW'] : ((isset($user->lang['SHADOW'])) ? $user->lang['SHADOW'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SHADOW'))) . ' 	}')) . '" /></a></th>
		';// ENDIF
}
// IF IS_MULTIDKP
if ($this->_tpldata['.'][0]['IS_MULTIDKP']) { 
// BEGIN custom_header
$_custom_header_count = (isset($this->_tpldata['custom_header.'])) ?  sizeof($this->_tpldata['custom_header.']) : 0;
if ($_custom_header_count) {
for ($_custom_header_i = 0; $_custom_header_i < $_custom_header_count; $_custom_header_i++)
{
echo '
    <th align="left" width="60" nowrap="nowrap"><div align="center">' . ((isset($this->_tpldata['custom_header.'][$_custom_header_i]['HEADER_DISC'])) ? $this->_tpldata['custom_header.'][$_custom_header_i]['HEADER_DISC'] : '') . '</div></th>
    ';}}
// END custom_header
// ELSE
} else {
echo '
		<th align="left" width="65" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_COMPARE_MEMBERS'])) ? $this->_tpldata['.'][0]['U_COMPARE_MEMBERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_EARNED'])) ? $this->_tpldata['.'][0]['O_EARNED'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_EARNED'])) ? $this->_tpldata['.'][0]['L_EARNED'] : ((isset($user->lang['EARNED'])) ? $user->lang['EARNED'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EARNED'))) . ' 	}')) . '</a></th>
    <th align="left" width="65" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_COMPARE_MEMBERS'])) ? $this->_tpldata['.'][0]['U_COMPARE_MEMBERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_SPENT'])) ? $this->_tpldata['.'][0]['O_SPENT'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_SPENT'])) ? $this->_tpldata['.'][0]['L_SPENT'] : ((isset($user->lang['SPENT'])) ? $user->lang['SPENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SPENT'))) . ' 	}')) . '</a></th>
    <th align="left" width="90" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_COMPARE_MEMBERS'])) ? $this->_tpldata['.'][0]['U_COMPARE_MEMBERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_ADJUSTMENT'])) ? $this->_tpldata['.'][0]['O_ADJUSTMENT'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_ADJUSTMENT'])) ? $this->_tpldata['.'][0]['L_ADJUSTMENT'] : ((isset($user->lang['ADJUSTMENT'])) ? $user->lang['ADJUSTMENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADJUSTMENT'))) . ' 	}')) . '</a></th>
    <th align="left" width="60" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_COMPARE_MEMBERS'])) ? $this->_tpldata['.'][0]['U_COMPARE_MEMBERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_CURRENT'])) ? $this->_tpldata['.'][0]['O_CURRENT'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_CURRENT'])) ? $this->_tpldata['.'][0]['L_CURRENT'] : ((isset($user->lang['CURRENT'])) ? $user->lang['CURRENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CURRENT'))) . ' 	}')) . '</a></th>
		';// ENDIF
}
// IF SHOW_LASTRAID
if ($this->_tpldata['.'][0]['SHOW_LASTRAID']) { 
echo '
    <th align="left" width="70" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_MEMBERS'])) ? $this->_tpldata['.'][0]['U_LIST_MEMBERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_LASTRAID'])) ? $this->_tpldata['.'][0]['O_LASTRAID'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_LASTRAID'])) ? $this->_tpldata['.'][0]['L_LASTRAID'] : ((isset($user->lang['LASTRAID'])) ? $user->lang['LASTRAID'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LASTRAID'))) . ' 	}')) . '</a></th>
    ';// ENDIF
}
// IF SHOW_LASTLOOT
if ($this->_tpldata['.'][0]['SHOW_LASTLOOT']) { 
echo '
    <th align="left" width="70" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_LASTLOOT'])) ? $this->_tpldata['.'][0]['L_LASTLOOT'] : ((isset($user->lang['LASTLOOT'])) ? $user->lang['LASTLOOT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LASTLOOT'))) . ' 	}')) . '</th>
    ';// ENDIF
}
// IF SHOW_ATTEND_30
if ($this->_tpldata['.'][0]['SHOW_ATTEND_30']) { 
echo '
    <th align="left" width="100" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_RAIDS_30_DAYS'])) ? $this->_tpldata['.'][0]['L_RAIDS_30_DAYS'] : ((isset($user->lang['RAIDS_30_DAYS'])) ? $user->lang['RAIDS_30_DAYS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAIDS_30_DAYS'))) . ' 	}')) . '</th>
    ';// ENDIF
}
// IF SHOW_ATTEND_60
if ($this->_tpldata['.'][0]['SHOW_ATTEND_60']) { 
echo '
    <th align="left" width="100" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_RAIDS_60_DAYS'])) ? $this->_tpldata['.'][0]['L_RAIDS_60_DAYS'] : ((isset($user->lang['RAIDS_60_DAYS'])) ? $user->lang['RAIDS_60_DAYS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAIDS_60_DAYS'))) . ' 	}')) . '</th>
    ';// ENDIF
}
// IF SHOW_ATTEND_90
if ($this->_tpldata['.'][0]['SHOW_ATTEND_90']) { 
echo '
    <th align="left" width="100" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_RAIDS_90_DAYS'])) ? $this->_tpldata['.'][0]['L_RAIDS_90_DAYS'] : ((isset($user->lang['RAIDS_90_DAYS'])) ? $user->lang['RAIDS_90_DAYS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAIDS_90_DAYS'))) . ' 	}')) . '</th>
    ';// ENDIF
}
// IF SHOW_ATTEND_ALL
if ($this->_tpldata['.'][0]['SHOW_ATTEND_ALL']) { 
echo '
    <th align="left" width="100" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_RAIDS_ALL'])) ? $this->_tpldata['.'][0]['L_RAIDS_ALL'] : ((isset($user->lang['RAIDS_ALL'])) ? $user->lang['RAIDS_ALL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAIDS_ALL'))) . ' 	}')) . '</th>
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
  <tr class="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['ROW_CLASS'])) ? $this->_tpldata['members_row.'][$_members_row_i]['ROW_CLASS'] : '') . '" onmouseover="this.className=\'rowHover\';" onmouseout="this.className=\'' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['ROW_CLASS'])) ? $this->_tpldata['members_row.'][$_members_row_i]['ROW_CLASS'] : '') . '\';">
    <td width="13" nowrap="nowrap" align="center"><input type="checkbox" name="compare_ids[]" value="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['ID'])) ? $this->_tpldata['members_row.'][$_members_row_i]['ID'] : '') . '" /></td>

    <td width="35" nowrap="nowrap" align="right"> ' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['COUNT'])) ? $this->_tpldata['members_row.'][$_members_row_i]['COUNT'] : '') . '</span></td>
        <script>
					linkset[' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['COUNT'])) ? $this->_tpldata['members_row.'][$_members_row_i]['COUNT'] : '') . ']=\'<div class="menuitems"><a href="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['ARMORY_LINK1'])) ? $this->_tpldata['members_row.'][$_members_row_i]['ARMORY_LINK1'] : '') . '" target="_blank">' . ((isset($this->_tpldata['.'][0]['L_ARMORY_LINK1'])) ? $this->_tpldata['.'][0]['L_ARMORY_LINK1'] : ((isset($user->lang['ARMORY_LINK1'])) ? $user->lang['ARMORY_LINK1'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ARMORY_LINK1'))) . ' 	}')) . '</a></div>\'
					linkset[' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['COUNT'])) ? $this->_tpldata['members_row.'][$_members_row_i]['COUNT'] : '') . ']+=\'<div class="menuitems"><a href="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['ARMORY_LINK2'])) ? $this->_tpldata['members_row.'][$_members_row_i]['ARMORY_LINK2'] : '') . '" target="_blank">' . ((isset($this->_tpldata['.'][0]['L_ARMORY_LINK2'])) ? $this->_tpldata['.'][0]['L_ARMORY_LINK2'] : ((isset($user->lang['ARMORY_LINK2'])) ? $user->lang['ARMORY_LINK2'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ARMORY_LINK2'))) . ' 	}')) . '</a></div>\'
					';// IF members_row.ARMORY_LINK3
if ($this->_tpldata['members_row.'][$_members_row_i]['ARMORY_LINK3']) { 
echo '
					linkset[' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['COUNT'])) ? $this->_tpldata['members_row.'][$_members_row_i]['COUNT'] : '') . ']+=\'<div class="menuitems"><a href="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['ARMORY_LINK3'])) ? $this->_tpldata['members_row.'][$_members_row_i]['ARMORY_LINK3'] : '') . '" target="_blank">' . ((isset($this->_tpldata['.'][0]['L_ARMORY_LINK3'])) ? $this->_tpldata['.'][0]['L_ARMORY_LINK3'] : ((isset($user->lang['ARMORY_LINK3'])) ? $user->lang['ARMORY_LINK3'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ARMORY_LINK3'))) . ' 	}')) . '</a></div>\'
					';// ENDIF
}
echo '
				</script>

    <td width="100%" nowrap="nowrap">

    	';// IF SHOW_AMORY
if ($this->_tpldata['.'][0]['SHOW_AMORY']) { 
echo '
    		<span onmouseover="showmenu(event,linkset[' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['COUNT'])) ? $this->_tpldata['members_row.'][$_members_row_i]['COUNT'] : '') . '])"> ' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['CLASS_ICONS'])) ? $this->_tpldata['members_row.'][$_members_row_i]['CLASS_ICONS'] : '') . '</span>
    	';// ELSE
} else {
echo '
    	  ' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['CLASS_ICONS'])) ? $this->_tpldata['members_row.'][$_members_row_i]['CLASS_ICONS'] : '') . '
    	';// ENDIF
}
echo '

    	<a class="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['CLASSENG'])) ? $this->_tpldata['members_row.'][$_members_row_i]['CLASSENG'] : '') . '" href="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['U_VIEW_MEMBER'])) ? $this->_tpldata['members_row.'][$_members_row_i]['U_VIEW_MEMBER'] : '') . '">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['NAME'])) ? $this->_tpldata['members_row.'][$_members_row_i]['NAME'] : '') . '</a>
    	</td>

    ';// IF SHOW_CMC_PROFILES
if ($this->_tpldata['.'][0]['SHOW_CMC_PROFILES']) { 
echo '
	    <td nowrap="nowrap">
	    	';// IF members_row.SHOW_BLASC
if ($this->_tpldata['members_row.'][$_members_row_i]['SHOW_BLASC']) { 
echo '
    			<a target="_blank" href="http://www.buffed.de/?c=' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['BLASC_ID'])) ? $this->_tpldata['members_row.'][$_members_row_i]['BLASC_ID'] : '') . '"><img src="plugins/charmanager/images/profilers/blasc_icon.png" width=16 height=16 border=0 alt="' . ((isset($this->_tpldata['.'][0]['L_BUFFED'])) ? $this->_tpldata['.'][0]['L_BUFFED'] : ((isset($user->lang['BUFFED'])) ? $user->lang['BUFFED'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BUFFED'))) . ' 	}')) . '" /></a>
    		';// ENDIF
}
// IF members_row.SHOW_CTPROFILE
if ($this->_tpldata['members_row.'][$_members_row_i]['SHOW_CTPROFILE']) { 
echo '
    			<a target="_blank" href="http://ctprofiles.net/' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['CTPROFILE_ID'])) ? $this->_tpldata['members_row.'][$_members_row_i]['CTPROFILE_ID'] : '') . '"><img src="plugins/charmanager/images/profilers/ctprofile_icon.png" border=0 alt="' . ((isset($this->_tpldata['.'][0]['L_CTPROFILES'])) ? $this->_tpldata['.'][0]['L_CTPROFILES'] : ((isset($user->lang['CTPROFILES'])) ? $user->lang['CTPROFILES'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CTPROFILES'))) . ' 	}')) . '" /></a>
    		';// ENDIF
}
// IF members_row.SHOW_ALLA
if ($this->_tpldata['members_row.'][$_members_row_i]['SHOW_ALLA']) { 
echo '
    			<a target="_blank" href="http://wow.allakhazam.com/profile.html?' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['ALLA_ID'])) ? $this->_tpldata['members_row.'][$_members_row_i]['ALLA_ID'] : '') . '"><img src="plugins/charmanager/images/profilers/alla_icon.png" width=16 height=16 border=0 alt="' . ((isset($this->_tpldata['.'][0]['L_ALLAKHAZAM'])) ? $this->_tpldata['.'][0]['L_ALLAKHAZAM'] : ((isset($user->lang['ALLAKHAZAM'])) ? $user->lang['ALLAKHAZAM'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ALLAKHAZAM'))) . ' 	}')) . '" /></a>
    		';// ENDIF
}
// IF members_row.SHOW_CURSE
if ($this->_tpldata['members_row.'][$_members_row_i]['SHOW_CURSE']) { 
echo '
    			<a target="_blank" href="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['CURSE_ID'])) ? $this->_tpldata['members_row.'][$_members_row_i]['CURSE_ID'] : '') . '"><img src="plugins/charmanager/images/profilers/curse_icon.png" width=16 height=16 border=0 alt="' . ((isset($this->_tpldata['.'][0]['L_CURSEPROFILES'])) ? $this->_tpldata['.'][0]['L_CURSEPROFILES'] : ((isset($user->lang['CURSEPROFILES'])) ? $user->lang['CURSEPROFILES'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CURSEPROFILES'))) . ' 	}')) . '" /></a>
    		';// ENDIF
}
// IF members_row.SHOW_TALENT
if ($this->_tpldata['members_row.'][$_members_row_i]['SHOW_TALENT']) { 
echo '
    			<a target="_blank" href="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['TALENT_URL'])) ? $this->_tpldata['members_row.'][$_members_row_i]['TALENT_URL'] : '') . '"><img src="plugins/charmanager/images/profilers/talent.jpg" width=16 height=16 border=0 alt="' . ((isset($this->_tpldata['.'][0]['L_TALENTPLANER'])) ? $this->_tpldata['.'][0]['L_TALENTPLANER'] : ((isset($user->lang['TALENTPLANER'])) ? $user->lang['TALENTPLANER'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TALENTPLANER'))) . ' 	}')) . '" /></a>
    		';// ENDIF
}
echo '

	    </td>
    ';// ENDIF
}
// IF SHOW_RANK
if ($this->_tpldata['.'][0]['SHOW_RANK']) { 
echo '
    <td nowrap="nowrap">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['RANK'])) ? $this->_tpldata['members_row.'][$_members_row_i]['RANK'] : '') . '</td>
    ';// ENDIF
}
// IF SHOW_LEVEL
if ($this->_tpldata['.'][0]['SHOW_LEVEL']) { 
echo '
    <td width="40" nowrap="nowrap">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['LEVEL'])) ? $this->_tpldata['members_row.'][$_members_row_i]['LEVEL'] : '') . '</td>
    ';// ENDIF
}
// IF SHOW_CLASS
if ($this->_tpldata['.'][0]['SHOW_CLASS']) { 
// IF S_FROM_EDIT_MEMBER
if ($this->_tpldata['.'][0]['S_FROM_EDIT_MEMBER']) { 
echo '
    		<td width="100" nowrap="nowrap">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['CLASS_TEXT'])) ? $this->_tpldata['members_row.'][$_members_row_i]['CLASS_TEXT'] : '') . '</td>
    	';// ELSE
} else {
echo '
    		<td width="130" nowrap="nowrap">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['CLASS'])) ? $this->_tpldata['members_row.'][$_members_row_i]['CLASS'] : '') . '</td>
    	';// ENDIF
}
// ENDIF
}
// IF SHOW_CMC_SKILL
if ($this->_tpldata['.'][0]['SHOW_CMC_SKILL']) { 
echo '
    <td width="110" nowrap>
    		';// IF members_row.SHOW_TALENT
if ($this->_tpldata['members_row.'][$_members_row_i]['SHOW_TALENT']) { 
echo '
    			<a target="_blank" href="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['TALENT_URL'])) ? $this->_tpldata['members_row.'][$_members_row_i]['TALENT_URL'] : '') . '">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['SKILL'])) ? $this->_tpldata['members_row.'][$_members_row_i]['SKILL'] : '') . '</a>
    		';// ELSE
} else {
echo '
    			' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['SKILL'])) ? $this->_tpldata['members_row.'][$_members_row_i]['SKILL'] : '') . '
    		';// ENDIF
}
echo '
    	</td>
    ';// ENDIF
}
// IF SHOW_CMC_ARKAN
if ($this->_tpldata['.'][0]['SHOW_CMC_ARKAN']) { 
echo '
    <td width="20" nowrap="nowrap">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['ARCANE'])) ? $this->_tpldata['members_row.'][$_members_row_i]['ARCANE'] : '') . '</td>
    ';// ENDIF
}
// IF SHOW_CMC_FIRE
if ($this->_tpldata['.'][0]['SHOW_CMC_FIRE']) { 
echo '
    <td width="20" nowrap="nowrap">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['FIRE'])) ? $this->_tpldata['members_row.'][$_members_row_i]['FIRE'] : '') . '</td>
    ';// ENDIF
}
// IF SHOW_CMC_NATURE
if ($this->_tpldata['.'][0]['SHOW_CMC_NATURE']) { 
echo '
    <td width="20" nowrap="nowrap">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['NATURE'])) ? $this->_tpldata['members_row.'][$_members_row_i]['NATURE'] : '') . '</td>
    ';// ENDIF
}
// IF SHOW_CMC_ICE
if ($this->_tpldata['.'][0]['SHOW_CMC_ICE']) { 
echo '
    <td width="20" nowrap="nowrap">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['FROST'])) ? $this->_tpldata['members_row.'][$_members_row_i]['FROST'] : '') . '</td>
    ';// ENDIF
}
// IF SHOW_CMC_SHADOW
if ($this->_tpldata['.'][0]['SHOW_CMC_SHADOW']) { 
echo '
    <td width="20" nowrap="nowrap">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['SHADOW'])) ? $this->_tpldata['members_row.'][$_members_row_i]['SHADOW'] : '') . '</td>
    ';// ENDIF
}
// IF IS_MULTIDKP
if ($this->_tpldata['.'][0]['IS_MULTIDKP']) { 
// BEGIN multidkp
$_multidkp_count = (isset($this->_tpldata['members_row.'][$_members_row_i]['multidkp.'])) ? sizeof($this->_tpldata['members_row.'][$_members_row_i]['multidkp.']) : 0;
if ($_multidkp_count) {
for ($_multidkp_i = 0; $_multidkp_i < $_multidkp_count; $_multidkp_i++)
{
echo '
    <td width="65" nowrap="nowrap"  align="right" class="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['multidkp.'][$_multidkp_i]['C_CURRENT'])) ? $this->_tpldata['members_row.'][$_members_row_i]['multidkp.'][$_multidkp_i]['C_CURRENT'] : '') . '">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['multidkp.'][$_multidkp_i]['CURRENT'])) ? $this->_tpldata['members_row.'][$_members_row_i]['multidkp.'][$_multidkp_i]['CURRENT'] : '') . '</td>
    ';}}
// END multidkp
// ELSE
} else {
echo '
    <td width="65" nowrap="nowrap" align="right" class="positive">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['EARNED'])) ? $this->_tpldata['members_row.'][$_members_row_i]['EARNED'] : '') . '</td>
    <td width="65" nowrap="nowrap" align="right" class="negative">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['SPENT'])) ? $this->_tpldata['members_row.'][$_members_row_i]['SPENT'] : '') . '</td>
    <td width="90" nowrap="nowrap" align="right" class="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['C_ADJUSTMENT'])) ? $this->_tpldata['members_row.'][$_members_row_i]['C_ADJUSTMENT'] : '') . '">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['ADJUSTMENT'])) ? $this->_tpldata['members_row.'][$_members_row_i]['ADJUSTMENT'] : '') . '</td>
    <td width="60" nowrap="nowrap" align="right" class="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['C_CURRENT'])) ? $this->_tpldata['members_row.'][$_members_row_i]['C_CURRENT'] : '') . '">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['CURRENT'])) ? $this->_tpldata['members_row.'][$_members_row_i]['CURRENT'] : '') . '</td>
    ';// ENDIF
}
// IF SHOW_LASTRAID
if ($this->_tpldata['.'][0]['SHOW_LASTRAID']) { 
echo '
    <td width="70" align="center" nowrap="nowrap" class="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['C_LASTRAID'])) ? $this->_tpldata['members_row.'][$_members_row_i]['C_LASTRAID'] : '') . '">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['LASTRAID'])) ? $this->_tpldata['members_row.'][$_members_row_i]['LASTRAID'] : '') . '</td>
    ';// ENDIF
}
// IF SHOW_LASTLOOT
if ($this->_tpldata['.'][0]['SHOW_LASTLOOT']) { 
echo '
    <td width="70" nowrap="nowrap">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['LASTLOOT'])) ? $this->_tpldata['members_row.'][$_members_row_i]['LASTLOOT'] : '') . '</td>
    ';// ENDIF
}
// IF SHOW_ATTEND_30
if ($this->_tpldata['.'][0]['SHOW_ATTEND_30']) { 
echo '
    <td width="100" align="center" nowrap="nowrap" class="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['C_RAIDS_30_DAYS'])) ? $this->_tpldata['members_row.'][$_members_row_i]['C_RAIDS_30_DAYS'] : '') . '">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['RAIDS_30_DAYS'])) ? $this->_tpldata['members_row.'][$_members_row_i]['RAIDS_30_DAYS'] : '') . ' % (' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['RAIDS_30_DAYS_C'])) ? $this->_tpldata['members_row.'][$_members_row_i]['RAIDS_30_DAYS_C'] : '') . ')</td>
    ';// ENDIF
}
// IF SHOW_ATTEND_60
if ($this->_tpldata['.'][0]['SHOW_ATTEND_60']) { 
echo '
    <td width="100" align="center" nowrap="nowrap" class="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['C_RAIDS_60_DAYS'])) ? $this->_tpldata['members_row.'][$_members_row_i]['C_RAIDS_60_DAYS'] : '') . '">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['RAIDS_60_DAYS'])) ? $this->_tpldata['members_row.'][$_members_row_i]['RAIDS_60_DAYS'] : '') . ' % (' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['RAIDS_60_DAYS_C'])) ? $this->_tpldata['members_row.'][$_members_row_i]['RAIDS_60_DAYS_C'] : '') . ')</td>
    ';// ENDIF
}
// IF SHOW_ATTEND_90
if ($this->_tpldata['.'][0]['SHOW_ATTEND_90']) { 
echo '
    <td width="100" align="center" nowrap="nowrap" class="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['C_RAIDS_90_DAYS'])) ? $this->_tpldata['members_row.'][$_members_row_i]['C_RAIDS_90_DAYS'] : '') . '">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['RAIDS_90_DAYS'])) ? $this->_tpldata['members_row.'][$_members_row_i]['RAIDS_90_DAYS'] : '') . ' % (' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['RAIDS_90_DAYS_C'])) ? $this->_tpldata['members_row.'][$_members_row_i]['RAIDS_90_DAYS_C'] : '') . ')</td>
  	';// ENDIF
}
// IF SHOW_ATTEND_ALL
if ($this->_tpldata['.'][0]['SHOW_ATTEND_ALL']) { 
echo '
    <td width="100" align="center" nowrap="nowrap" class="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['C_RAIDS_ALL'])) ? $this->_tpldata['members_row.'][$_members_row_i]['C_RAIDS_ALL'] : '') . '">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['RAIDS_ALL'])) ? $this->_tpldata['members_row.'][$_members_row_i]['RAIDS_ALL'] : '') . ' % (' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['RAIDS_ALL_C'])) ? $this->_tpldata['members_row.'][$_members_row_i]['RAIDS_ALL_C'] : '') . ')</td>
  	';// ENDIF
}
echo '

  </tr>
  ';}}
// END members_row
echo '
  <tr>
    <th colspan="' . ((isset($this->_tpldata['.'][0]['COLSPAN'])) ? $this->_tpldata['.'][0]['COLSPAN'] : '') . '" class="footer">' . ((isset($this->_tpldata['.'][0]['LISTMEMBERS_FOOTCOUNT'])) ? $this->_tpldata['.'][0]['LISTMEMBERS_FOOTCOUNT'] : '') . '</th>
  </tr>
</table>
<br />
<center><input type="submit" name="' . ((isset($this->_tpldata['.'][0]['BUTTON_NAME'])) ? $this->_tpldata['.'][0]['BUTTON_NAME'] : '') . '" value="' . ((isset($this->_tpldata['.'][0]['BUTTON_VALUE'])) ? $this->_tpldata['.'][0]['BUTTON_VALUE'] : '') . '" class="liteoption" /></center>
</form>

';// INCLUDE page_tail.html
$this->assign_from_include('page_tail.html');

}
?>