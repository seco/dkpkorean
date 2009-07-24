<?php
if ($this->security()) {
echo '' . ((isset($this->_tpldata['.'][0]['RSS_FEED'])) ? $this->_tpldata['.'][0]['RSS_FEED'] : '') . '
<style type="text/css">
TABLE.errortable { 
  padding: 5px;
  border-top: 1px;
  border-bottom: 1px;
  border-left: 1px;
  border-right: 1px;
  border-color: red; 
  border-style: solid;
  background: #FFEFEF;
}

TABLE.errortable_inner { 
  background: #FFEFEF;
  border: 0;
}

TABLE.errortable td{
	color:red;
	background: #FFEFEF;
}
</style>
<script language="JavaScript" type="text/javascript">

isIE=document.all;
isNN=!document.all&&document.getElementById;
isN4=document.layers;
var draidid;
function RightClickSettings(dd){
  draidid = dd;
  if (isIE||isNN){
    document.oncontextmenu=checkV;
  }else{
    document.captureEvents(Event.MOUSEDOWN || Event.MOUSEUP);
    document.onmousedown=checkV;}
}

function checkV(e){
if (isN4){
if (e.which==2||e.which==3){
EditRaid(draidid);
return false;
}}else{
EditRaid(draidid);
return false;}}

function OnMouseDrueber(id,stat){
  if(stat == \'over\'){
    document.getElementById(\'icon_\'+id).style.display="none";
    document.getElementById(\'box_\'+id).style.display="block";
  }else{
    if(!document.getElementById(\'ck_\'+id).checked){
      document.getElementById(\'icon_\'+id).style.display="block";
      document.getElementById(\'box_\'+id).style.display="none";
    }
  }
}

function show_tabelle (uebergabe){
  if ( document.getElementById("multinotes").id == uebergabe ){
    document.getElementById("multinotes").style.display = \'\';
  }else{
    document.getElementById("multinotes").style.display = \'none\';
  }
}

function AboutDialog(){
  ' . ((isset($this->_tpldata['.'][0]['JS_ABOUT'])) ? $this->_tpldata['.'][0]['JS_ABOUT'] : '') . '
}

function AddRaid(timestamp){
  ' . ((isset($this->_tpldata['.'][0]['JS_ADDRAID'])) ? $this->_tpldata['.'][0]['JS_ADDRAID'] : '') . '
}

function AddRaid2(){
  ' . ((isset($this->_tpldata['.'][0]['JS_ADDRAID2'])) ? $this->_tpldata['.'][0]['JS_ADDRAID2'] : '') . '
}

function EditRaid(raidid) {
  ' . ((isset($this->_tpldata['.'][0]['JS_EDITRAID'])) ? $this->_tpldata['.'][0]['JS_EDITRAID'] : '') . '
}

' . ((isset($this->_tpldata['.'][0]['JS_CLOSE'])) ? $this->_tpldata['.'][0]['JS_CLOSE'] : '') . '
</script>

' . ((isset($this->_tpldata['.'][0]['UPGRADEWARN'])) ? $this->_tpldata['.'][0]['UPGRADEWARN'] : '') . '

';// IF ALPHA_DESTROY
if ($this->_tpldata['.'][0]['ALPHA_DESTROY']) { 
echo '
<table border="0" cellpadding="0" cellspacing="0" class="errortable" width="100%" height="150px">
  <tr>
    <td width="90%">
    <font size="100px"><center>THIS IS AN UNSUPPORTED ALPHAVERSION</font></font>
    </td>
  </tr>
</table><br/>
';// ENDIF
}
// IF OPT_CALENDAR
if ($this->_tpldata['.'][0]['OPT_CALENDAR']) { 
// IF OPT_CAL_ABOVE
if ($this->_tpldata['.'][0]['OPT_CAL_ABOVE']) { 
echo '
		' . ((isset($this->_tpldata['.'][0]['CALENDAR'])) ? $this->_tpldata['.'][0]['CALENDAR'] : '') . '
	';// ENDIF
}
// ENDIF
}
// IF OPT_CLASSIC
if ($this->_tpldata['.'][0]['OPT_CLASSIC']) { 
// IF RAID_PAGINATION
if ($this->_tpldata['.'][0]['RAID_PAGINATION']) { 
echo '
<table width="100%" border="0" cellspacing="1" cellpadding="2" class="borderless">
  <tr>
    <td align="center" class="menu">' . ((isset($this->_tpldata['.'][0]['RAID_PAGINATION'])) ? $this->_tpldata['.'][0]['RAID_PAGINATION'] : '') . '</td>
  </tr>
</table>
';// ENDIF
}
echo '
<form name="multisignin" method="post" action="' . ((isset($this->_tpldata['.'][0]['F_MULTISIGNIN'])) ? $this->_tpldata['.'][0]['F_MULTISIGNIN'] : '') . '">
<input type="hidden" name="subscribed_member_id" value="' . ((isset($this->_tpldata['.'][0]['VALUE_MEM_ID'])) ? $this->_tpldata['.'][0]['VALUE_MEM_ID'] : '') . '" />
<input type="hidden" name="subscribed_role" value="' . ((isset($this->_tpldata['.'][0]['VALUE_ROLE'])) ? $this->_tpldata['.'][0]['VALUE_ROLE'] : '') . '" />
<table width="100%" border="0" cellspacing="1" cellpadding="0" id="rowheader">
  <tr>
    <th align="center" colspan="1" height="20px"><img src="images/addraid/add.png" onclick="AddRaid2()" alt="Add Raid" /></th>
    ';// IF SHOW_MULTISIGN
if ($this->_tpldata['.'][0]['SHOW_MULTISIGN']) { 
echo '
      <th align="center" colspan="7" height="20px">' . ((isset($this->_tpldata['.'][0]['L_CURRENT_RAID'])) ? $this->_tpldata['.'][0]['L_CURRENT_RAID'] : ((isset($user->lang['CURRENT_RAID'])) ? $user->lang['CURRENT_RAID'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CURRENT_RAID'))) . ' 	}')) . '</th>
      <th align="right" colspan="4" height="20px">
        ' . ((isset($this->_tpldata['.'][0]['DRDWN_MULTISIGN'])) ? $this->_tpldata['.'][0]['DRDWN_MULTISIGN'] : '') . '
        <img src="images/notes/comment.png" alt="' . ((isset($this->_tpldata['.'][0]['L_MULTINOTE'])) ? $this->_tpldata['.'][0]['L_MULTINOTE'] : ((isset($user->lang['MULTINOTE'])) ? $user->lang['MULTINOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MULTINOTE'))) . ' 	}')) . '" onclick="show_tabelle(\'multinotes\')" ' . ((isset($this->_tpldata['.'][0]['HELP_MULTINOTE'])) ? $this->_tpldata['.'][0]['HELP_MULTINOTE'] : '') . '/>
        <input type="submit" name="multisign" value="' . ((isset($this->_tpldata['.'][0]['B_PERFORM'])) ? $this->_tpldata['.'][0]['B_PERFORM'] : '') . '" class="mainoption" ' . ((isset($this->_tpldata['.'][0]['HELP_MULTISIGN'])) ? $this->_tpldata['.'][0]['HELP_MULTISIGN'] : '') . ' />
      </th>
  </tr>
  <tr>
    <td colspan="12">
      <table id="multinotes"  width="100%" class="borderless" style="display:none;">
        <tr>
          <th width="10%">' . ((isset($this->_tpldata['.'][0]['L_MULTINOTE'])) ? $this->_tpldata['.'][0]['L_MULTINOTE'] : ((isset($user->lang['MULTINOTE'])) ? $user->lang['MULTINOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MULTINOTE'))) . ' 	}')) . '</th>
          <th width="90%" align="left"><input type="text" size="130" name="multi_note" value="" class="input" /></th>
        </tr>
      </table>
    </td>
    ';// ELSE
} else {
echo '
      <th align="center" colspan="11" height="20px">' . ((isset($this->_tpldata['.'][0]['L_CURRENT_RAID'])) ? $this->_tpldata['.'][0]['L_CURRENT_RAID'] : ((isset($user->lang['CURRENT_RAID'])) ? $user->lang['CURRENT_RAID'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CURRENT_RAID'))) . ' 	}')) . '</th>
    ';// ENDIF
}
echo '
  </tr>
<tr>
		<th align="left" width="2%" nowrap="nowrap"></th>
    <th align="left" width="6%" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_RAIDS'])) ? $this->_tpldata['.'][0]['U_LIST_RAIDS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_DATE'])) ? $this->_tpldata['.'][0]['O_DATE'] : '') . '&amp;start=' . ((isset($this->_tpldata['.'][0]['START'])) ? $this->_tpldata['.'][0]['START'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_DATE'])) ? $this->_tpldata['.'][0]['L_DATE'] : ((isset($user->lang['DATE'])) ? $user->lang['DATE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DATE'))) . ' 	}')) . '</a></th>
    <th align="left" width="5%" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_STATUS'])) ? $this->_tpldata['.'][0]['L_STATUS'] : ((isset($user->lang['STATUS'])) ? $user->lang['STATUS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'STATUS'))) . ' 	}')) . '</th>
    <th align="left" width="6%" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_DAY'])) ? $this->_tpldata['.'][0]['L_DAY'] : ((isset($user->lang['DAY'])) ? $user->lang['DAY'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DAY'))) . ' 	}')) . '</th>
    <th align="left" width="5%" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_INVITE'])) ? $this->_tpldata['.'][0]['L_INVITE'] : ((isset($user->lang['INVITE'])) ? $user->lang['INVITE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'INVITE'))) . ' 	}')) . '</th>
    <th align="left" width="5%" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_START'])) ? $this->_tpldata['.'][0]['L_START'] : ((isset($user->lang['START'])) ? $user->lang['START'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'START'))) . ' 	}')) . '</th>
    <th align="left" width="5%" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_END'])) ? $this->_tpldata['.'][0]['L_END'] : ((isset($user->lang['END'])) ? $user->lang['END'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'END'))) . ' 	}')) . '</th>
    <th align="left" width="20%"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_RAIDS'])) ? $this->_tpldata['.'][0]['U_LIST_RAIDS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_NAME'])) ? $this->_tpldata['.'][0]['O_NAME'] : '') . '&amp;start=' . ((isset($this->_tpldata['.'][0]['START'])) ? $this->_tpldata['.'][0]['START'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_NAME'])) ? $this->_tpldata['.'][0]['L_NAME'] : ((isset($user->lang['NAME'])) ? $user->lang['NAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NAME'))) . ' 	}')) . '</a></th>
    <th align="left" width="41%"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_RAIDS'])) ? $this->_tpldata['.'][0]['U_LIST_RAIDS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_NOTE'])) ? $this->_tpldata['.'][0]['O_NOTE'] : '') . '&amp;start=' . ((isset($this->_tpldata['.'][0]['START'])) ? $this->_tpldata['.'][0]['START'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_NOTE'])) ? $this->_tpldata['.'][0]['L_NOTE'] : ((isset($user->lang['NOTE'])) ? $user->lang['NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NOTE'))) . ' 	}')) . '</a></th>
    <th align="left" width="6%" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_RAIDS'])) ? $this->_tpldata['.'][0]['U_LIST_RAIDS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_VALUE'])) ? $this->_tpldata['.'][0]['O_VALUE'] : '') . '&amp;start=' . ((isset($this->_tpldata['.'][0]['START'])) ? $this->_tpldata['.'][0]['START'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_VALUE'])) ? $this->_tpldata['.'][0]['L_VALUE'] : ((isset($user->lang['VALUE'])) ? $user->lang['VALUE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'VALUE'))) . ' 	}')) . '</a></th>
    <th align="left" width="2%" nowrap="nowrap"></th>
    <th align="left" width="2%" nowrap="nowrap"></th>
  </tr>
  ';// BEGIN raids_row
$_raids_row_count = (isset($this->_tpldata['raids_row.'])) ?  sizeof($this->_tpldata['raids_row.']) : 0;
if ($_raids_row_count) {
for ($_raids_row_i = 0; $_raids_row_i < $_raids_row_count; $_raids_row_i++)
{
echo '
  <tr class="' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['ROW_CLASS'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['ROW_CLASS'] : '') . '" height="20px">
		<td width="2%" align="center" nowrap="nowrap" >
      <span ' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['RAIDSTATUS_TXT'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['RAIDSTATUS_TXT'] : '') . ' >' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['RAIDSTATUS_ICON'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['RAIDSTATUS_ICON'] : '') . '</span>
    </td>
    <td width="6%" align="center" nowrap="nowrap">' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['DATE'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['DATE'] : '') . '</td>
    <td width="5%" align="center" nowrap="nowrap">&nbsp;<span ' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['RAIDATTCOUNT_TXT'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['RAIDATTCOUNT_TXT'] : '') . ' >(' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['COUNT'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['COUNT'] : '') . ')</span>&nbsp;</td>
    <td width="6%" align="center" nowrap="nowrap">' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['DAY'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['DAY'] : '') . '</td>
    <td width="5%" align="center" nowrap="nowrap">' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['INVITE'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['INVITE'] : '') . '</td>
    <td width="5%" align="center" nowrap="nowrap">' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['START'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['START'] : '') . '</td>
    <td width="5%" align="center" nowrap="nowrap">' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['END'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['END'] : '') . '</td>
    <td width="20%"><a href="' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['U_VIEW_RAID'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['U_VIEW_RAID'] : '') . '" class="raidlink">' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['RAID_ICON'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['RAID_ICON'] : '') . ' ' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['NAME'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['NAME'] : '') . '</a></td>
    <td width="41%">' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['NOTE'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['NOTE'] : '') . '</td>
    <td width="6%" align="right" nowrap="nowrap" class="positive">' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['VALUE'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['VALUE'] : '') . '</td>
    ';// IF SHOW_MULTISIGN
if ($this->_tpldata['.'][0]['SHOW_MULTISIGN']) { 
echo '
      <td onmouseover="OnMouseDrueber(' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['RAID_ID'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['RAID_ID'] : '') . ',\'over\')" onmouseout="OnMouseDrueber(' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['RAID_ID'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['RAID_ID'] : '') . ',\'weg\')" >
        <div style="width:20px;height:18px;">
          <div id=\'icon_' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['RAID_ID'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['RAID_ID'] : '') . '\' style="width:20px;height:18px;float:left;overflow:hidden;padding:1px;text-align:center;">' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['CONFIRMED'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['CONFIRMED'] : '') . '</div>
          <div id=\'box_' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['RAID_ID'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['RAID_ID'] : '') . '\' style="width:20px;height:18px;overflow:hidden;display:none;"><input id="ck_' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['RAID_ID'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['RAID_ID'] : '') . '" type="Checkbox" name="sign_id[]" value="' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['RAID_ID'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['RAID_ID'] : '') . '" /></div>
          <div style="clear:both;"></div>
        </div>
      </td>
    ';// ELSE
} else {
echo '
      <td ><div style="width:20px;height:18px;text-align:center;margin-top:1px;">' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['CONFIRMED'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['CONFIRMED'] : '') . '</div></td>
    ';// ENDIF
}
echo '
    <td width="2%" nowrap="nowrap" class="positive">
    ';// IF RP_ADMIN
if ($this->_tpldata['.'][0]['RP_ADMIN']) { 
echo '
    <div onclick="javascript:EditRaid(\'' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['RAID_ID'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['RAID_ID'] : '') . '\');" style="cursor: pointer;"><img src="./images/global/edit.png" width="16" height="16" alt="Edit" align="absmiddle" /></div>
    ';// ENDIF
}
echo '
    </td>
  </tr>
  ';}}
// END raids_row
echo '
  <tr>
  <td colspan="12">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<th align="left"><a href="#" ' . ((isset($this->_tpldata['.'][0]['LEGEND_TT'])) ? $this->_tpldata['.'][0]['LEGEND_TT'] : '') . '>' . ((isset($this->_tpldata['.'][0]['L_LEGEND'])) ? $this->_tpldata['.'][0]['L_LEGEND'] : ((isset($user->lang['LEGEND'])) ? $user->lang['LEGEND'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LEGEND'))) . ' 	}')) . '</a></th>
   		<th class="footer">' . ((isset($this->_tpldata['.'][0]['LISTRAIDS_FOOTCOUNT'])) ? $this->_tpldata['.'][0]['LISTRAIDS_FOOTCOUNT'] : '') . '</th>
		</tr>
	</table>
  </td>
  </tr>
</table>
</form>

<br/>
<table width="100%" border="0" cellspacing="1" cellpadding="0">
  <tr>
    <th align="center" colspan=11 height="20px"><span id="lr1-title" class="iconspan" style="margin-left:5px;float:left;"><img src="images/minus.gif" alt="" title="' . ((isset($this->_tpldata['.'][0]['L_HEADER_HELP'])) ? $this->_tpldata['.'][0]['L_HEADER_HELP'] : ((isset($user->lang['HEADER_HELP'])) ? $user->lang['HEADER_HELP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'HEADER_HELP'))) . ' 	}')) . '" border="0"></span>&nbsp;' . ((isset($this->_tpldata['.'][0]['L_RECENT_RAID'])) ? $this->_tpldata['.'][0]['L_RECENT_RAID'] : ((isset($user->lang['RECENT_RAID'])) ? $user->lang['RECENT_RAID'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RECENT_RAID'))) . ' 	}')) . '</th>
  </tr>
  <tr>
  <td>
  <div id="lr1" class="icongroup1">
<table width="100%" class="borderless" cellspacing="0" cellpadding="0">
  <tr>
    <th align="left" width="2%" nowrap="nowrap"></th>
    <th align="center" width="8%" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_DATE'])) ? $this->_tpldata['.'][0]['L_DATE'] : ((isset($user->lang['DATE'])) ? $user->lang['DATE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DATE'))) . ' 	}')) . '</th>
		<th align="left" width="6%" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_STATUS'])) ? $this->_tpldata['.'][0]['L_STATUS'] : ((isset($user->lang['STATUS'])) ? $user->lang['STATUS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'STATUS'))) . ' 	}')) . '</th>
    <th align="left" width="26%">' . ((isset($this->_tpldata['.'][0]['L_NAME'])) ? $this->_tpldata['.'][0]['L_NAME'] : ((isset($user->lang['NAME'])) ? $user->lang['NAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NAME'))) . ' 	}')) . '</th>
    <th align="left" width="50%">' . ((isset($this->_tpldata['.'][0]['L_NOTE'])) ? $this->_tpldata['.'][0]['L_NOTE'] : ((isset($user->lang['NOTE'])) ? $user->lang['NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NOTE'))) . ' 	}')) . '</th>
    <th align="left" width="6%" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_VALUE'])) ? $this->_tpldata['.'][0]['L_VALUE'] : ((isset($user->lang['VALUE'])) ? $user->lang['VALUE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'VALUE'))) . ' 	}')) . '</th>
  </tr>
  ';// BEGIN recent_raids
$_recent_raids_count = (isset($this->_tpldata['recent_raids.'])) ?  sizeof($this->_tpldata['recent_raids.']) : 0;
if ($_recent_raids_count) {
for ($_recent_raids_i = 0; $_recent_raids_i < $_recent_raids_count; $_recent_raids_i++)
{
echo '
  <tr class="' . ((isset($this->_tpldata['recent_raids.'][$_recent_raids_i]['ROW_CLASS'])) ? $this->_tpldata['recent_raids.'][$_recent_raids_i]['ROW_CLASS'] : '') . '" height="20px">
  	<td width="2%" align="center"><div ' . ((isset($this->_tpldata['recent_raids.'][$_recent_raids_i]['RAIDSTATUS_TXT'])) ? $this->_tpldata['recent_raids.'][$_recent_raids_i]['RAIDSTATUS_TXT'] : '') . ' >' . ((isset($this->_tpldata['recent_raids.'][$_recent_raids_i]['RAIDSTATUS_ICON'])) ? $this->_tpldata['recent_raids.'][$_recent_raids_i]['RAIDSTATUS_ICON'] : '') . '</div></td>
    <td width="8%" align="center" nowrap="nowrap">' . ((isset($this->_tpldata['recent_raids.'][$_recent_raids_i]['DATE'])) ? $this->_tpldata['recent_raids.'][$_recent_raids_i]['DATE'] : '') . '</td>
		<td width="6%" align="center" nowrap="nowrap">&nbsp;<span ' . ((isset($this->_tpldata['recent_raids.'][$_recent_raids_i]['RAIDATTCOUNT_TXT'])) ? $this->_tpldata['recent_raids.'][$_recent_raids_i]['RAIDATTCOUNT_TXT'] : '') . ' >(' . ((isset($this->_tpldata['recent_raids.'][$_recent_raids_i]['COUNT'])) ? $this->_tpldata['recent_raids.'][$_recent_raids_i]['COUNT'] : '') . ')</span>&nbsp;</td>
    <td width="26%"><a href="' . ((isset($this->_tpldata['recent_raids.'][$_recent_raids_i]['U_VIEW_RAID'])) ? $this->_tpldata['recent_raids.'][$_recent_raids_i]['U_VIEW_RAID'] : '') . '">' . ((isset($this->_tpldata['recent_raids.'][$_recent_raids_i]['RAID_ICON'])) ? $this->_tpldata['recent_raids.'][$_recent_raids_i]['RAID_ICON'] : '') . ' ' . ((isset($this->_tpldata['recent_raids.'][$_recent_raids_i]['NAME'])) ? $this->_tpldata['recent_raids.'][$_recent_raids_i]['NAME'] : '') . '</a></td>
    <td width="50%">' . ((isset($this->_tpldata['recent_raids.'][$_recent_raids_i]['NOTE'])) ? $this->_tpldata['recent_raids.'][$_recent_raids_i]['NOTE'] : '') . '</td>
    <td width="6%" nowrap="nowrap" class="positive">' . ((isset($this->_tpldata['recent_raids.'][$_recent_raids_i]['VALUE'])) ? $this->_tpldata['recent_raids.'][$_recent_raids_i]['VALUE'] : '') . '</td>
  </tr>
  ';}}
// END recent_raids
echo '
  <tr><td colspan="6">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
		  <th align="left"><a href="#" ' . ((isset($this->_tpldata['.'][0]['LEGEND_TT'])) ? $this->_tpldata['.'][0]['LEGEND_TT'] : '') . '>' . ((isset($this->_tpldata['.'][0]['L_LEGEND'])) ? $this->_tpldata['.'][0]['L_LEGEND'] : ((isset($user->lang['LEGEND'])) ? $user->lang['LEGEND'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LEGEND'))) . ' 	}')) . '</a></th>
    	<th class="footer">' . ((isset($this->_tpldata['.'][0]['LISTRECENTRAIDS_FOOTCOUNT'])) ? $this->_tpldata['.'][0]['LISTRECENTRAIDS_FOOTCOUNT'] : '') . '</th>
		</tr>
		</table>
  </td></tr>
</table>
</div>
</td>
</tr>
</table>

<script type="text/javascript">
var csetting=new switchicon("icongroup1", "div") //Limit scanning of switch contents to just "div" elements
csetting.setHeader(\'<img src="images/minus.gif" />\', \'<img src="images/plus.gif" />\') //set icon HTML
csetting.collapsePrevious(false) //Allow only 1 content open at any time
csetting.setPersist(true) //No persistence enabled
csetting.defaultExpanded(0,1) //Set 1st content to be expanded by default
csetting.init()
</script>

<table width="100%" border="0" cellspacing="1" cellpadding="2" class="borderless">
  <tr>
    <td align="center" class="menu">' . ((isset($this->_tpldata['.'][0]['RAID_PAGINATION'])) ? $this->_tpldata['.'][0]['RAID_PAGINATION'] : '') . '</td>
  </tr>
</table>
';// IF S_ADD_RAID
if ($this->_tpldata['.'][0]['S_ADD_RAID']) { 
echo '
<br />
<center><button type="button" class="liteoption" onClick="self.location.href=\'' . ((isset($this->_tpldata['.'][0]['F_ADD_RAID'])) ? $this->_tpldata['.'][0]['F_ADD_RAID'] : '') . '\'">' . ((isset($this->_tpldata['.'][0]['L_ADD_RAID'])) ? $this->_tpldata['.'][0]['L_ADD_RAID'] : ((isset($user->lang['ADD_RAID'])) ? $user->lang['ADD_RAID'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADD_RAID'))) . ' 	}')) . '</button></center>
';// ENDIF
}
// ENDIF
}
// IF OPT_CALENDAR
if ($this->_tpldata['.'][0]['OPT_CALENDAR']) { 
// IF OPT_CAL_BEYOND
if ($this->_tpldata['.'][0]['OPT_CAL_BEYOND']) { 
echo '
	<br/>
		' . ((isset($this->_tpldata['.'][0]['CALENDAR'])) ? $this->_tpldata['.'][0]['CALENDAR'] : '') . '
	';// ENDIF
}
// ENDIF
}
echo '
<center><span class="copyis"><a onclick="javascript:AboutDialog()" style="cursor:pointer;" onmouseover="style.textDecoration=\'underline\';" onmouseout="style.textDecoration=\'none\';"><img src="images/credits/info.png" alt="Credits" border="0" /> Credits</a></span>
<br /><span class="copy">' . ((isset($this->_tpldata['.'][0]['L_COPYRIGHT'])) ? $this->_tpldata['.'][0]['L_COPYRIGHT'] : ((isset($user->lang['COPYRIGHT'])) ? $user->lang['COPYRIGHT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'COPYRIGHT'))) . ' 	}')) . '</span></center>';
}
?>