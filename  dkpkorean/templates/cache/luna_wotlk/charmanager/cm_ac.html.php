<?php
if ($this->security()) {
echo '<script language="JavaScript" type="text/javascript">

function ImportChars() {
  ' . ((isset($this->_tpldata['.'][0]['JS_IMPORT'])) ? $this->_tpldata['.'][0]['JS_IMPORT'] : '') . '
}

function check_form()
{
    if (document.post.member_name.value.length < 2)
    {
        alert(\'' . ((isset($this->_tpldata['.'][0]['MSG_NAME_EMPTY'])) ? $this->_tpldata['.'][0]['MSG_NAME_EMPTY'] : '') . '\');
        return false;
    }
    return true;
}               
</script>

';// IF U_INFO_BOX
if ($this->_tpldata['.'][0]['U_INFO_BOX']) { 
echo '
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    ';// IF U_SAVED_SUCC
if ($this->_tpldata['.'][0]['U_SAVED_SUCC']) { 
echo '
    <td class="row1" width ="48px"><img src="images/ok.png" /></td>
    <td class="row1">
    ';// IF WAS_UPDATE
if ($this->_tpldata['.'][0]['WAS_UPDATE']) { 
echo '
    ' . ((isset($this->_tpldata['.'][0]['L_UPDATED_SUCC'])) ? $this->_tpldata['.'][0]['L_UPDATED_SUCC'] : ((isset($user->lang['UPDATED_SUCC'])) ? $user->lang['UPDATED_SUCC'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'UPDATED_SUCC'))) . ' 	}')) . '
    ';// ELSE
} else {
echo '
    ' . ((isset($this->_tpldata['.'][0]['L_SAVED_SUCC'])) ? $this->_tpldata['.'][0]['L_SAVED_SUCC'] : ((isset($user->lang['SAVED_SUCC'])) ? $user->lang['SAVED_SUCC'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SAVED_SUCC'))) . ' 	}')) . '
    ';// ENDIF
}
echo '
    </td>
    ';// ENDIF
}
// IF U_SAVED_NOT
if ($this->_tpldata['.'][0]['U_SAVED_NOT']) { 
echo '
    <td class="row1" width ="48px"><img src="images/false.png" /></td>
    <td class="row1">' . ((isset($this->_tpldata['.'][0]['L_SAVED_NOT'])) ? $this->_tpldata['.'][0]['L_SAVED_NOT'] : ((isset($user->lang['SAVED_NOT'])) ? $user->lang['SAVED_NOT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SAVED_NOT'))) . ' 	}')) . '</td>
    ';// ENDIF
}
echo '
  </tr>
  <tr>
</table>
<br>
';// ENDIF
}
echo '

<form method="post" action="' . ((isset($this->_tpldata['.'][0]['F_ADD_MEMBER'])) ? $this->_tpldata['.'][0]['F_ADD_MEMBER'] : '') . '" name="post" onsubmit="return check_form(this)">

' . ((isset($this->_tpldata['.'][0]['TAB_PANE_START'])) ? $this->_tpldata['.'][0]['TAB_PANE_START'] : '') . '
' . ((isset($this->_tpldata['.'][0]['TAB_M1_START'])) ? $this->_tpldata['.'][0]['TAB_M1_START'] : '') . '
<table width="100%" border="0" cellspacing="1" cellpadding="2">
	<tr>
    <td width="100" nowrap="nowrap" class="row1" colspan=2>
    	<input type="hidden" name="member_pic" id="member_pic" size="20" value="' . ((isset($this->_tpldata['.'][0]['UCV_PICTURE_NAME'])) ? $this->_tpldata['.'][0]['UCV_PICTURE_NAME'] : '') . '" class="input" />
    	' . ((isset($this->_tpldata['.'][0]['UCV_PICTURE'])) ? $this->_tpldata['.'][0]['UCV_PICTURE'] : '') . '
    	</td>
    </tr>
  <tr>
    <td width="100" nowrap="nowrap" class="row1">' . ((isset($this->_tpldata['.'][0]['L_NAME'])) ? $this->_tpldata['.'][0]['L_NAME'] : ((isset($user->lang['NAME'])) ? $user->lang['NAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NAME'))) . ' 	}')) . ':</td>
    ';// IF EDIT_BUTTONS
if ($this->_tpldata['.'][0]['EDIT_BUTTONS']) { 
echo '
    <td width="50%" nowrap="nowrap" class="row2">' . ((isset($this->_tpldata['.'][0]['UCV_MEMBER_NAME'])) ? $this->_tpldata['.'][0]['UCV_MEMBER_NAME'] : '') . '
    	<input type="hidden" name="member_name" size="60" value="' . ((isset($this->_tpldata['.'][0]['UCV_MEMBER_NAME'])) ? $this->_tpldata['.'][0]['UCV_MEMBER_NAME'] : '') . '" class="input" />
    	<input type="hidden" name="memberid" size="20" value="' . ((isset($this->_tpldata['.'][0]['UCV_MEMBER_ID'])) ? $this->_tpldata['.'][0]['UCV_MEMBER_ID'] : '') . '" class="input" />
    	</td>
    ';// ELSE
} else {
echo '
    <td width="50%" nowrap="nowrap" class="row2"><input type="text" name="member_name" size="20" value="' . ((isset($this->_tpldata['.'][0]['UCV_MEMBER_NAME'])) ? $this->_tpldata['.'][0]['UCV_MEMBER_NAME'] : '') . '" class="input" /></td>
		';// ENDIF
}
echo '  
  </tr>
  <tr>
    <td width="100" nowrap="nowrap" class="row1">' . ((isset($this->_tpldata['.'][0]['L_RACE'])) ? $this->_tpldata['.'][0]['L_RACE'] : ((isset($user->lang['RACE'])) ? $user->lang['RACE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RACE'))) . ' 	}')) . ':</td>
    <td width="50%" nowrap="nowrap" class="row2">
      <select name="member_race_id" class="input">
        ';// BEGIN race_row
$_race_row_count = (isset($this->_tpldata['race_row.'])) ?  sizeof($this->_tpldata['race_row.']) : 0;
if ($_race_row_count) {
for ($_race_row_i = 0; $_race_row_i < $_race_row_count; $_race_row_i++)
{
echo '
        <option value="' . ((isset($this->_tpldata['race_row.'][$_race_row_i]['VALUE'])) ? $this->_tpldata['race_row.'][$_race_row_i]['VALUE'] : '') . '" ' . ((isset($this->_tpldata['race_row.'][$_race_row_i]['SELECT'])) ? $this->_tpldata['race_row.'][$_race_row_i]['SELECT'] : '') . '>' . ((isset($this->_tpldata['race_row.'][$_race_row_i]['OPTION'])) ? $this->_tpldata['race_row.'][$_race_row_i]['OPTION'] : '') . '</option>
        ';}}
// END race_row
echo '
      </select>
    </td>
  </tr>
  <tr>
    <td width="100" nowrap="nowrap" class="row1">' . ((isset($this->_tpldata['.'][0]['L_GENDER'])) ? $this->_tpldata['.'][0]['L_GENDER'] : ((isset($user->lang['GENDER'])) ? $user->lang['GENDER'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'GENDER'))) . ' 	}')) . ':</td>
    <td width="50%" nowrap="nowrap" class="row2">' . ((isset($this->_tpldata['.'][0]['DRPWN_GENDER'])) ? $this->_tpldata['.'][0]['DRPWN_GENDER'] : '') . '</td>
  </tr>
  ';// IF UCV_IS_WOW
if ($this->_tpldata['.'][0]['UCV_IS_WOW']) { 
echo '
   <tr>
    <td width="100" nowrap="nowrap" class="row1">' . ((isset($this->_tpldata['.'][0]['L_FACTION'])) ? $this->_tpldata['.'][0]['L_FACTION'] : ((isset($user->lang['FACTION'])) ? $user->lang['FACTION'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FACTION'))) . ' 	}')) . ':</td>
    <td width="50%" nowrap="nowrap" class="row2">' . ((isset($this->_tpldata['.'][0]['DRPWN_FACTION'])) ? $this->_tpldata['.'][0]['DRPWN_FACTION'] : '') . '</td>
  </tr>
  ';// ENDIF
}
echo '  
  <tr>
    <td width="100" nowrap="nowrap" class="row1">' . ((isset($this->_tpldata['.'][0]['L_CLASS'])) ? $this->_tpldata['.'][0]['L_CLASS'] : ((isset($user->lang['CLASS'])) ? $user->lang['CLASS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CLASS'))) . ' 	}')) . ':</td>
    <td width="50%" nowrap="nowrap" class="row2">
      <select name="member_class_id" class="input">
        ';// BEGIN class_row
$_class_row_count = (isset($this->_tpldata['class_row.'])) ?  sizeof($this->_tpldata['class_row.']) : 0;
if ($_class_row_count) {
for ($_class_row_i = 0; $_class_row_i < $_class_row_count; $_class_row_i++)
{
echo '
        <option value="' . ((isset($this->_tpldata['class_row.'][$_class_row_i]['VALUE'])) ? $this->_tpldata['class_row.'][$_class_row_i]['VALUE'] : '') . '" ' . ((isset($this->_tpldata['class_row.'][$_class_row_i]['SELECT'])) ? $this->_tpldata['class_row.'][$_class_row_i]['SELECT'] : '') . '>' . ((isset($this->_tpldata['class_row.'][$_class_row_i]['OPTION'])) ? $this->_tpldata['class_row.'][$_class_row_i]['OPTION'] : '') . '</option>
        ';}}
// END class_row
echo '
      </select>
    </td>
   </tr>
  <tr>
    <td width="100" nowrap="nowrap" class="row1">' . ((isset($this->_tpldata['.'][0]['L_LEVEL'])) ? $this->_tpldata['.'][0]['L_LEVEL'] : ((isset($user->lang['LEVEL'])) ? $user->lang['LEVEL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LEVEL'))) . ' 	}')) . ':</td>
    <td width="50%" nowrap="nowrap" class="row2"><input type="text" name="member_level" size="3" maxlength="2" value="' . ((isset($this->_tpldata['.'][0]['UCV_MEMBER_LEVEL'])) ? $this->_tpldata['.'][0]['UCV_MEMBER_LEVEL'] : '') . '" class="input" /></td>
   </tr>
   <tr>
    <td width="100" nowrap="nowrap" class="row1">' . ((isset($this->_tpldata['.'][0]['L_GUILD'])) ? $this->_tpldata['.'][0]['L_GUILD'] : ((isset($user->lang['GUILD'])) ? $user->lang['GUILD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'GUILD'))) . ' 	}')) . ':</td>
    <td width="50%" nowrap="nowrap" class="row2"><input type="text" name="guild" size="25" maxlength="50" value="' . ((isset($this->_tpldata['.'][0]['UCV_GUILD'])) ? $this->_tpldata['.'][0]['UCV_GUILD'] : '') . '" class="input" /></td>
   </tr>
   

   ';// IF SHOW_CHECKBOX
if ($this->_tpldata['.'][0]['SHOW_CHECKBOX']) { 
echo '
  <tr>
    <td width="100" nowrap="nowrap" class="row1">' . ((isset($this->_tpldata['.'][0]['L_OVERTAKE'])) ? $this->_tpldata['.'][0]['L_OVERTAKE'] : ((isset($user->lang['OVERTAKE'])) ? $user->lang['OVERTAKE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'OVERTAKE'))) . ' 	}')) . ':</td>
    ';// IF USER_CAN_CONNECT
if ($this->_tpldata['.'][0]['USER_CAN_CONNECT']) { 
echo '
    <td width="50%" nowrap="nowrap" class="row2"><input type="checkbox" name="overtakeuser" value="1" /></td>
   	';// ELSE
} else {
echo '
   	<td width="50%" nowrap="nowrap" class="row2"><input type="checkbox" name="overtakeuser" value="1" disabled="disabled" checked="checked" /></td>
   	';// ENDIF
}
echo '
   </tr>
   ';// ENDIF
}
echo '
  <tr>
  </tr>
</table>
' . ((isset($this->_tpldata['.'][0]['TAB_MX_END'])) ? $this->_tpldata['.'][0]['TAB_MX_END'] : '') . '
';// IF UCV_IS_WOW
if ($this->_tpldata['.'][0]['UCV_IS_WOW']) { 
echo '
' . ((isset($this->_tpldata['.'][0]['TAB_M2_START'])) ? $this->_tpldata['.'][0]['TAB_M2_START'] : '') . '
   <table width="100%" border="0" cellspacing="1" cellpadding="2">
   <tr>
    <td width="100" nowrap="nowrap" class="row1">' . ((isset($this->_tpldata['.'][0]['L_RESISTENCE'])) ? $this->_tpldata['.'][0]['L_RESISTENCE'] : ((isset($user->lang['RESISTENCE'])) ? $user->lang['RESISTENCE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RESISTENCE'))) . ' 	}')) . ': ' . ((isset($this->_tpldata['.'][0]['L_RESI_ARCANE'])) ? $this->_tpldata['.'][0]['L_RESI_ARCANE'] : ((isset($user->lang['RESI_ARCANE'])) ? $user->lang['RESI_ARCANE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RESI_ARCANE'))) . ' 	}')) . '</td>
    <td width="50%" nowrap="nowrap" class="row2"><input type="text" name="arcane" size="4" maxlength="3" value="' . ((isset($this->_tpldata['.'][0]['UCV_ARCANE'])) ? $this->_tpldata['.'][0]['UCV_ARCANE'] : '') . '" class="input" /></td>
   </tr>
   <tr>
    <td width="100" nowrap="nowrap" class="row1">' . ((isset($this->_tpldata['.'][0]['L_RESISTENCE'])) ? $this->_tpldata['.'][0]['L_RESISTENCE'] : ((isset($user->lang['RESISTENCE'])) ? $user->lang['RESISTENCE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RESISTENCE'))) . ' 	}')) . ': ' . ((isset($this->_tpldata['.'][0]['L_RESI_FIRE'])) ? $this->_tpldata['.'][0]['L_RESI_FIRE'] : ((isset($user->lang['RESI_FIRE'])) ? $user->lang['RESI_FIRE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RESI_FIRE'))) . ' 	}')) . '</td>
    <td width="50%" nowrap="nowrap" class="row2"><input type="text" name="fire" size="4" maxlength="3" value="' . ((isset($this->_tpldata['.'][0]['UCV_FIRE'])) ? $this->_tpldata['.'][0]['UCV_FIRE'] : '') . '" class="input" /></td>
   </tr>
    <tr>
    <td width="100" nowrap="nowrap" class="row1">' . ((isset($this->_tpldata['.'][0]['L_RESISTENCE'])) ? $this->_tpldata['.'][0]['L_RESISTENCE'] : ((isset($user->lang['RESISTENCE'])) ? $user->lang['RESISTENCE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RESISTENCE'))) . ' 	}')) . ': ' . ((isset($this->_tpldata['.'][0]['L_RESI_NATURE'])) ? $this->_tpldata['.'][0]['L_RESI_NATURE'] : ((isset($user->lang['RESI_NATURE'])) ? $user->lang['RESI_NATURE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RESI_NATURE'))) . ' 	}')) . '</td>
    <td width="50%" nowrap="nowrap" class="row2"><input type="text" name="nature" size="4" maxlength="3" value="' . ((isset($this->_tpldata['.'][0]['UCV_NATURE'])) ? $this->_tpldata['.'][0]['UCV_NATURE'] : '') . '" class="input" /></td>
   </tr>
    <tr>
    <td width="100" nowrap="nowrap" class="row1">' . ((isset($this->_tpldata['.'][0]['L_RESISTENCE'])) ? $this->_tpldata['.'][0]['L_RESISTENCE'] : ((isset($user->lang['RESISTENCE'])) ? $user->lang['RESISTENCE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RESISTENCE'))) . ' 	}')) . ': ' . ((isset($this->_tpldata['.'][0]['L_RESI_FROST'])) ? $this->_tpldata['.'][0]['L_RESI_FROST'] : ((isset($user->lang['RESI_FROST'])) ? $user->lang['RESI_FROST'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RESI_FROST'))) . ' 	}')) . '</td>
    <td width="50%" nowrap="nowrap" class="row2"><input type="text" name="ice" size="4" maxlength="3" value="' . ((isset($this->_tpldata['.'][0]['UCV_ICE'])) ? $this->_tpldata['.'][0]['UCV_ICE'] : '') . '" class="input" /></td>
   </tr>
    <tr>
    <td width="100" nowrap="nowrap" class="row1">' . ((isset($this->_tpldata['.'][0]['L_RESISTENCE'])) ? $this->_tpldata['.'][0]['L_RESISTENCE'] : ((isset($user->lang['RESISTENCE'])) ? $user->lang['RESISTENCE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RESISTENCE'))) . ' 	}')) . ': ' . ((isset($this->_tpldata['.'][0]['L_RESI_SHADOW'])) ? $this->_tpldata['.'][0]['L_RESI_SHADOW'] : ((isset($user->lang['RESI_SHADOW'])) ? $user->lang['RESI_SHADOW'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RESI_SHADOW'))) . ' 	}')) . '</td>
    <td width="50%" nowrap="nowrap" class="row2"><input type="text" name="shadow" size="4" maxlength="3" value="' . ((isset($this->_tpldata['.'][0]['UCV_SHADOW'])) ? $this->_tpldata['.'][0]['UCV_SHADOW'] : '') . '" class="input" /></td>
   </tr>
    <tr>
    <td width="100" nowrap="nowrap" class="row1">' . ((isset($this->_tpldata['.'][0]['L_SKILL'])) ? $this->_tpldata['.'][0]['L_SKILL'] : ((isset($user->lang['SKILL'])) ? $user->lang['SKILL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SKILL'))) . ' 	}')) . '</td>
    <td width="50%" nowrap="nowrap" class="row2">
    	<input type="text" name="skill_1" size="4" maxlength="3" value="' . ((isset($this->_tpldata['.'][0]['UCV_SKILL_1'])) ? $this->_tpldata['.'][0]['UCV_SKILL_1'] : '') . '" class="input" /> -
    	<input type="text" name="skill_2" size="4" maxlength="3" value="' . ((isset($this->_tpldata['.'][0]['UCV_SKILL_2'])) ? $this->_tpldata['.'][0]['UCV_SKILL_2'] : '') . '" class="input" /> -
    	<input type="text" name="skill_3" size="4" maxlength="3" value="' . ((isset($this->_tpldata['.'][0]['UCV_SKILL_3'])) ? $this->_tpldata['.'][0]['UCV_SKILL_3'] : '') . '" class="input" />
    
    </td>
   </tr>
   </table>
' . ((isset($this->_tpldata['.'][0]['TAB_MX_END'])) ? $this->_tpldata['.'][0]['TAB_MX_END'] : '') . '
' . ((isset($this->_tpldata['.'][0]['TAB_M21_START'])) ? $this->_tpldata['.'][0]['TAB_M21_START'] : '') . '
<table width="100%" border="0" cellspacing="1" cellpadding="2">
   <tr>
    <td width="100" nowrap="nowrap" class="row1">' . ((isset($this->_tpldata['.'][0]['L_FIRST_PROF'])) ? $this->_tpldata['.'][0]['L_FIRST_PROF'] : ((isset($user->lang['FIRST_PROF'])) ? $user->lang['FIRST_PROF'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FIRST_PROF'))) . ' 	}')) . '</td>
    <td width="50%" nowrap="nowrap" class="row2">' . ((isset($this->_tpldata['.'][0]['DRPWN_PROF1'])) ? $this->_tpldata['.'][0]['DRPWN_PROF1'] : '') . ' ' . ((isset($this->_tpldata['.'][0]['L_SKILL_LEVEL'])) ? $this->_tpldata['.'][0]['L_SKILL_LEVEL'] : ((isset($user->lang['SKILL_LEVEL'])) ? $user->lang['SKILL_LEVEL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SKILL_LEVEL'))) . ' 	}')) . ': <input type="text" name="prof1_value" size="4" maxlength="3" value="' . ((isset($this->_tpldata['.'][0]['UCV_PROF_V1'])) ? $this->_tpldata['.'][0]['UCV_PROF_V1'] : '') . '" class="input" /></td>
   </tr>
	<tr>
    <td width="100" nowrap="nowrap" class="row1">' . ((isset($this->_tpldata['.'][0]['L_SECOND_PROF'])) ? $this->_tpldata['.'][0]['L_SECOND_PROF'] : ((isset($user->lang['SECOND_PROF'])) ? $user->lang['SECOND_PROF'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SECOND_PROF'))) . ' 	}')) . '</td>
    <td width="50%" nowrap="nowrap" class="row2">' . ((isset($this->_tpldata['.'][0]['DRPWN_PROF2'])) ? $this->_tpldata['.'][0]['DRPWN_PROF2'] : '') . ' ' . ((isset($this->_tpldata['.'][0]['L_SKILL_LEVEL'])) ? $this->_tpldata['.'][0]['L_SKILL_LEVEL'] : ((isset($user->lang['SKILL_LEVEL'])) ? $user->lang['SKILL_LEVEL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SKILL_LEVEL'))) . ' 	}')) . ': <input type="text" name="prof2_value" size="4" maxlength="3" value="' . ((isset($this->_tpldata['.'][0]['UCV_PROF_V2'])) ? $this->_tpldata['.'][0]['UCV_PROF_V2'] : '') . '" class="input" /></td>
   </tr>
 </table>
' . ((isset($this->_tpldata['.'][0]['TAB_MX_END'])) ? $this->_tpldata['.'][0]['TAB_MX_END'] : '') . '
' . ((isset($this->_tpldata['.'][0]['TAB_M3_START'])) ? $this->_tpldata['.'][0]['TAB_M3_START'] : '') . '
<table width="100%" border="0" cellspacing="1" cellpadding="2">
	<tr>
		<td colspan=2>' . ((isset($this->_tpldata['.'][0]['L_PROFILER_EXPL'])) ? $this->_tpldata['.'][0]['L_PROFILER_EXPL'] : ((isset($user->lang['PROFILER_EXPL'])) ? $user->lang['PROFILER_EXPL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'PROFILER_EXPL'))) . ' 	}')) . '</td>
	</tr>
   <tr>
    <td width="100" nowrap="nowrap" class="row1">' . ((isset($this->_tpldata['.'][0]['L_BUFFED'])) ? $this->_tpldata['.'][0]['L_BUFFED'] : ((isset($user->lang['BUFFED'])) ? $user->lang['BUFFED'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BUFFED'))) . ' 	}')) . ' ID</td>
    <td width="50%" nowrap="nowrap" class="row2"><input type="text" name="blasc_id" size="15" maxlength="50" value="' . ((isset($this->_tpldata['.'][0]['UCV_BUFFED'])) ? $this->_tpldata['.'][0]['UCV_BUFFED'] : '') . '" class="input" /></td>
   </tr>
   <tr>
    <td width="100" nowrap="nowrap" class="row1">' . ((isset($this->_tpldata['.'][0]['L_CTPROFILES'])) ? $this->_tpldata['.'][0]['L_CTPROFILES'] : ((isset($user->lang['CTPROFILES'])) ? $user->lang['CTPROFILES'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CTPROFILES'))) . ' 	}')) . ' ID</td>
    <td width="50%" nowrap="nowrap" class="row2"><input type="text" name="ct_profile" size="15" maxlength="50" value="' . ((isset($this->_tpldata['.'][0]['UCV_CTPROFILES'])) ? $this->_tpldata['.'][0]['UCV_CTPROFILES'] : '') . '" class="input" /></td>
   </tr>
    <tr>
    <td width="100" nowrap="nowrap" class="row1">' . ((isset($this->_tpldata['.'][0]['L_ALLAKHAZAM'])) ? $this->_tpldata['.'][0]['L_ALLAKHAZAM'] : ((isset($user->lang['ALLAKHAZAM'])) ? $user->lang['ALLAKHAZAM'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ALLAKHAZAM'))) . ' 	}')) . ' ID</td>
    <td width="50%" nowrap="nowrap" class="row2"><input type="text" name="allakhazam" size="15" maxlength="50" value="' . ((isset($this->_tpldata['.'][0]['UCV_ALLAKHAZAM'])) ? $this->_tpldata['.'][0]['UCV_ALLAKHAZAM'] : '') . '" class="input" /></td>
   </tr>
    <tr>
    <td width="100" nowrap="nowrap" class="row1">' . ((isset($this->_tpldata['.'][0]['L_CURSE_PROFILER'])) ? $this->_tpldata['.'][0]['L_CURSE_PROFILER'] : ((isset($user->lang['CURSE_PROFILER'])) ? $user->lang['CURSE_PROFILER'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CURSE_PROFILER'))) . ' 	}')) . ' URL</td>
    <td width="50%" nowrap="nowrap" class="row2"><input type="text" name="curse_profiler" size="25" maxlength="255" value="' . ((isset($this->_tpldata['.'][0]['UCV_CURSE_PROFILER'])) ? $this->_tpldata['.'][0]['UCV_CURSE_PROFILER'] : '') . '" class="input" /></td>
   </tr>
    <tr>
    <td width="100" nowrap="nowrap" class="row1">' . ((isset($this->_tpldata['.'][0]['L_TALENTPLANER'])) ? $this->_tpldata['.'][0]['L_TALENTPLANER'] : ((isset($user->lang['TALENTPLANER'])) ? $user->lang['TALENTPLANER'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TALENTPLANER'))) . ' 	}')) . ' URL</td>
    <td width="50%" nowrap="nowrap" class="row2"><input type="text" name="talentplaner" size="25" maxlength="255" value="' . ((isset($this->_tpldata['.'][0]['UCV_TALENTPLANER'])) ? $this->_tpldata['.'][0]['UCV_TALENTPLANER'] : '') . '" class="input" /></td>
   </tr>
  </tr>
</table>
' . ((isset($this->_tpldata['.'][0]['TAB_MX_END'])) ? $this->_tpldata['.'][0]['TAB_MX_END'] : '') . '
' . ((isset($this->_tpldata['.'][0]['TAB_M5_START'])) ? $this->_tpldata['.'][0]['TAB_M5_START'] : '') . '
<table width="100%" border="0" cellspacing="1" cellpadding="2">
   <tr>
    <td width="100" nowrap="nowrap" class="row1">' . ((isset($this->_tpldata['.'][0]['L_NOTES'])) ? $this->_tpldata['.'][0]['L_NOTES'] : ((isset($user->lang['NOTES'])) ? $user->lang['NOTES'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NOTES'))) . ' 	}')) . '</td>
    <td width="50%" nowrap="nowrap" class="row2"><textarea name="notes" class="input" rows="12" cols="75">' . ((isset($this->_tpldata['.'][0]['UCV_NOTES'])) ? $this->_tpldata['.'][0]['UCV_NOTES'] : '') . '</textarea></td>
   </tr>
</table>
' . ((isset($this->_tpldata['.'][0]['TAB_MX_END'])) ? $this->_tpldata['.'][0]['TAB_MX_END'] : '') . '
' . ((isset($this->_tpldata['.'][0]['TAB_M4_START'])) ? $this->_tpldata['.'][0]['TAB_M4_START'] : '') . '
<table width="100%" border="0" cellspacing="1" cellpadding="2">
   <tr>
    <td width="100" nowrap="nowrap" class="row1">' . ((isset($this->_tpldata['.'][0]['L_EXT_IMPORT'])) ? $this->_tpldata['.'][0]['L_EXT_IMPORT'] : ((isset($user->lang['EXT_IMPORT'])) ? $user->lang['EXT_IMPORT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EXT_IMPORT'))) . ' 	}')) . '</td>
    <td width="50%" nowrap="nowrap" class="row2"><input type="button" onclick="javascript:ImportChars()" name="cancel" value="' . ((isset($this->_tpldata['.'][0]['L_BUTT_IMPORT'])) ? $this->_tpldata['.'][0]['L_BUTT_IMPORT'] : ((isset($user->lang['BUTT_IMPORT'])) ? $user->lang['BUTT_IMPORT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BUTT_IMPORT'))) . ' 	}')) . '" class="liteoption" /></td>
   </tr>

</table>
' . ((isset($this->_tpldata['.'][0]['TAB_MX_END'])) ? $this->_tpldata['.'][0]['TAB_MX_END'] : '') . '
';// ENDIF
}
echo '
' . ((isset($this->_tpldata['.'][0]['TAB_PANE_END'])) ? $this->_tpldata['.'][0]['TAB_PANE_END'] : '') . '
<br><center>
 ';// IF EDIT_BUTTONS
if ($this->_tpldata['.'][0]['EDIT_BUTTONS']) { 
echo '
    <input type="submit" name="edit" value="' . ((isset($this->_tpldata['.'][0]['L_EDIT_MEMBER'])) ? $this->_tpldata['.'][0]['L_EDIT_MEMBER'] : ((isset($user->lang['EDIT_MEMBER'])) ? $user->lang['EDIT_MEMBER'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EDIT_MEMBER'))) . ' 	}')) . '" class="mainoption" /> 

    ';// ELSE
} else {
echo '
    <input type="submit" name="add" value="' . ((isset($this->_tpldata['.'][0]['L_ADD_MEMBER'])) ? $this->_tpldata['.'][0]['L_ADD_MEMBER'] : ((isset($user->lang['ADD_MEMBER'])) ? $user->lang['ADD_MEMBER'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADD_MEMBER'))) . ' 	}')) . '" class="mainoption" />

      ';// ENDIF
}
echo '
</center>
</form>';
}
?>