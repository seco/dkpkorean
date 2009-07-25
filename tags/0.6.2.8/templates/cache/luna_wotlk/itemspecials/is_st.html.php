<?php
if ($this->security()) {
echo '<script language="JavaScript" type="text/javascript"><!--

function AboutDialog() {
  ' . ((isset($this->_tpldata['.'][0]['JS_ABOUT'])) ? $this->_tpldata['.'][0]['JS_ABOUT'] : '') . '
}

function ItemInfos(id) {
	var winn = new Window(id, {className: "alphacube", title: "' . ((isset($this->_tpldata['.'][0]['L_ITEM_INFO'])) ? $this->_tpldata['.'][0]['L_ITEM_INFO'] : ((isset($user->lang['ITEM_INFO'])) ? $user->lang['ITEM_INFO'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ITEM_INFO'))) . ' 	}')) . '", 
                                              top:70, left:100, width:640, height:450, 
                                              resizable: true, url: "is_item.php?i=" + id, showEffectOptions: {duration:1}})
winn.setDestroyOnClose();
winn.showCenter();
// Set up a windows observer, set open window check to null
  							myObserver = {
    							onDestroy: function(eventName, win) {
      							if (win == winn) {
        							winn = null;
        							window.location.reload();
        							Windows.removeObserver(this);
      							}
    							}
  							}
  							Windows.addObserver(myObserver);
  }

//-->
</script>
<style type="text/css">
.style1 {
	text-align: center;
}
.switchcontent{ /*Definition for state toggling image */
border-top-width: 0;
}
.showstate{ /*Definition for state toggling image */
cursor:hand;
cursor:pointer;
margin-right: 10px;
vertical-align:baseline;
}
</style>
<script language="JavaScript" type="text/javascript" src="include/javascripts/switchcontent.js"></script>
';// IF ITEMSTATS_TRUE
if ($this->_tpldata['.'][0]['ITEMSTATS_TRUE']) { 
echo '
<style type=\'text/css\'>
.middleitemicon { width: ' . ((isset($this->_tpldata['.'][0]['ICON_WIDTH'])) ? $this->_tpldata['.'][0]['ICON_WIDTH'] : '') . '; height: ' . ((isset($this->_tpldata['.'][0]['ICON_HEIGHT'])) ? $this->_tpldata['.'][0]['ICON_HEIGHT'] : '') . '; }
 </style>
';// ENDIF
}
echo '
<table width="100%" border="0" cellspacing="1" cellpadding="2" class="borderless">
  <tr><td>
';// IF CLASS_DROPDOWN
if ($this->_tpldata['.'][0]['CLASS_DROPDOWN']) { 
echo ' 
<table border="0" class="borderless" width="869" cellspacing="0" cellpadding="0" height="150" background="' . ((isset($this->_tpldata['.'][0]['IS_CLASSHEADIMG'])) ? $this->_tpldata['.'][0]['IS_CLASSHEADIMG'] : '') . '" align="center">
<tr>
	<td width="40%"></td>
<td align="right" valign="bottom" style="padding-right: 20px;padding-bottom: 10px" height="46%"><div id="header_clsname">' . ((isset($this->_tpldata['.'][0]['HEADER_CLS_TXT'])) ? $this->_tpldata['.'][0]['HEADER_CLS_TXT'] : '') . '</div></td>
</tr><tr>
<td colspan=2 align="right" valign="bottom" style="padding-right: 10px;padding-bottom: 10px" height="20%">
<form method="get" action="' . ((isset($this->_tpldata['.'][0]['U_SET_ITEMS'])) ? $this->_tpldata['.'][0]['U_SET_ITEMS'] : '') . '">
    <select name="class" class="input" onchange="javascript:form.submit();">
    ';// IF SHOW_STARTPAGE
if ($this->_tpldata['.'][0]['SHOW_STARTPAGE']) { 
echo '
      <option value="" ' . ((isset($this->_tpldata['CLASSES.'][$_CLASSES_i]['SP_SELECT'])) ? $this->_tpldata['CLASSES.'][$_CLASSES_i]['SP_SELECT'] : '') . '>' . ((isset($this->_tpldata['.'][0]['LANG_HOME'])) ? $this->_tpldata['.'][0]['LANG_HOME'] : '') . '</option>
      ';// ENDIF
}
// BEGIN CLASSES
$_CLASSES_count = (isset($this->_tpldata['CLASSES.'])) ?  sizeof($this->_tpldata['CLASSES.']) : 0;
if ($_CLASSES_count) {
for ($_CLASSES_i = 0; $_CLASSES_i < $_CLASSES_count; $_CLASSES_i++)
{
echo '
      <option value="' . ((isset($this->_tpldata['CLASSES.'][$_CLASSES_i]['ID'])) ? $this->_tpldata['CLASSES.'][$_CLASSES_i]['ID'] : '') . '" ' . ((isset($this->_tpldata['CLASSES.'][$_CLASSES_i]['SELECTED'])) ? $this->_tpldata['CLASSES.'][$_CLASSES_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['CLASSES.'][$_CLASSES_i]['NAME'])) ? $this->_tpldata['CLASSES.'][$_CLASSES_i]['NAME'] : '') . '</option>
    ';}}
// END CLASSES
echo '
    </select> 
</form>
</td>
	</tr>
</table></td>
';// ELSE
} else {
// BEGIN CLASSES
$_CLASSES_count = (isset($this->_tpldata['CLASSES.'])) ?  sizeof($this->_tpldata['CLASSES.']) : 0;
if ($_CLASSES_count) {
for ($_CLASSES_i = 0; $_CLASSES_i < $_CLASSES_count; $_CLASSES_i++)
{
echo '
    <th align="center" class="menu" width="' . ((isset($this->_tpldata['.'][0]['CLASSWIDTH'])) ? $this->_tpldata['.'][0]['CLASSWIDTH'] : '') . '"><img src="images/class/' . ((isset($this->_tpldata['CLASSES.'][$_CLASSES_i]['ID'])) ? $this->_tpldata['CLASSES.'][$_CLASSES_i]['ID'] : '') . '.gif"><a href="' . ((isset($this->_tpldata['.'][0]['U_SET_ITEMS'])) ? $this->_tpldata['.'][0]['U_SET_ITEMS'] : '') . '&amp;class=' . ((isset($this->_tpldata['CLASSES.'][$_CLASSES_i]['linkname'])) ? $this->_tpldata['CLASSES.'][$_CLASSES_i]['linkname'] : '') . '"> ' . ((isset($this->_tpldata['CLASSES.'][$_CLASSES_i]['name'])) ? $this->_tpldata['CLASSES.'][$_CLASSES_i]['name'] : '') . '</a></th>
';}}
// END CLASSES
// ENDIF
}
echo '
  </tr>
</table>
<br/>
  
  ';// IF STARTPAGE
if ($this->_tpldata['.'][0]['STARTPAGE']) { 
echo '
<table width="100%" border="0" cellspacing="1" cellpadding="2" class=\'borderless\'>
  <tr>
    <th align="left" ><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_MEMBERS'])) ? $this->_tpldata['.'][0]['U_LIST_MEMBERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_NAME'])) ? $this->_tpldata['.'][0]['O_NAME'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_NAME'])) ? $this->_tpldata['.'][0]['L_NAME'] : ((isset($user->lang['NAME'])) ? $user->lang['NAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NAME'))) . ' 	}')) . '</a></th>
    ';// IF SHOW_OP_USR_RANK
if ($this->_tpldata['.'][0]['SHOW_OP_USR_RANK']) { 
echo '
    <th align="left" width="70" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_MEMBERS'])) ? $this->_tpldata['.'][0]['U_LIST_MEMBERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_RANK'])) ? $this->_tpldata['.'][0]['O_RANK'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_RANK'])) ? $this->_tpldata['.'][0]['L_RANK'] : ((isset($user->lang['RANK'])) ? $user->lang['RANK'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RANK'))) . ' 	}')) . '</a></th>
    ';// ENDIF
}
// IF SHOW_OP_USR_CLS
if ($this->_tpldata['.'][0]['SHOW_OP_USR_CLS']) { 
echo '
    <th align="left" width="105" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_MEMBERS'])) ? $this->_tpldata['.'][0]['U_LIST_MEMBERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_CLASS'])) ? $this->_tpldata['.'][0]['O_CLASS'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_CLASS'])) ? $this->_tpldata['.'][0]['L_CLASS'] : ((isset($user->lang['CLASS'])) ? $user->lang['CLASS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CLASS'))) . ' 	}')) . '</a></th>
    ';// ENDIF
}
// IF SHOW_OP_CURR_DKP
if ($this->_tpldata['.'][0]['SHOW_OP_CURR_DKP']) { 
echo '
    <th align="left" width="40" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_MEMBERS'])) ? $this->_tpldata['.'][0]['U_LIST_MEMBERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_CURRENT'])) ? $this->_tpldata['.'][0]['O_CURRENT'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_CURRENT'])) ? $this->_tpldata['.'][0]['L_CURRENT'] : ((isset($user->lang['CURRENT'])) ? $user->lang['CURRENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CURRENT'))) . ' 	}')) . '</a></th>
    ';// ENDIF
}
// IF SHOW_OP_TOT_DKP
if ($this->_tpldata['.'][0]['SHOW_OP_TOT_DKP']) { 
echo '
    <th align="left" width="40" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_TOTAL'])) ? $this->_tpldata['.'][0]['L_TOTAL'] : ((isset($user->lang['TOTAL'])) ? $user->lang['TOTAL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TOTAL'))) . ' 	}')) . '</th>
    ';// ENDIF
}
// BEGIN setitems_name
$_setitems_name_count = (isset($this->_tpldata['setitems_name.'])) ?  sizeof($this->_tpldata['setitems_name.']) : 0;
if ($_setitems_name_count) {
for ($_setitems_name_i = 0; $_setitems_name_i < $_setitems_name_count; $_setitems_name_i++)
{
echo '
    <th align="left" width="120" nowrap="nowrap">' . ((isset($this->_tpldata['setitems_name.'][$_setitems_name_i]['NAME'])) ? $this->_tpldata['setitems_name.'][$_setitems_name_i]['NAME'] : '') . '</th>
    ';}}
// END setitems_name
echo '
  </tr>
  ';// BEGIN SP_MEMBERS
$_SP_MEMBERS_count = (isset($this->_tpldata['SP_MEMBERS.'])) ?  sizeof($this->_tpldata['SP_MEMBERS.']) : 0;
if ($_SP_MEMBERS_count) {
for ($_SP_MEMBERS_i = 0; $_SP_MEMBERS_i < $_SP_MEMBERS_count; $_SP_MEMBERS_i++)
{
echo '
  <tr class="' . ((isset($this->_tpldata['SP_MEMBERS.'][$_SP_MEMBERS_i]['ROW_CLASS'])) ? $this->_tpldata['SP_MEMBERS.'][$_SP_MEMBERS_i]['ROW_CLASS'] : '') . '" style="height: 24px">
    <td nowrap="nowrap"><a href="' . ((isset($this->_tpldata['SP_MEMBERS.'][$_SP_MEMBERS_i]['link'])) ? $this->_tpldata['SP_MEMBERS.'][$_SP_MEMBERS_i]['link'] : '') . '">' . ((isset($this->_tpldata['SP_MEMBERS.'][$_SP_MEMBERS_i]['name'])) ? $this->_tpldata['SP_MEMBERS.'][$_SP_MEMBERS_i]['name'] : '') . '</a></td>
  ';// IF SHOW_OP_USR_RANK
if ($this->_tpldata['.'][0]['SHOW_OP_USR_RANK']) { 
echo '
    <td nowrap="nowrap">' . ((isset($this->_tpldata['SP_MEMBERS.'][$_SP_MEMBERS_i]['RANK'])) ? $this->_tpldata['SP_MEMBERS.'][$_SP_MEMBERS_i]['RANK'] : '') . '</td>
  ';// ENDIF
}
// IF SHOW_OP_USR_CLS
if ($this->_tpldata['.'][0]['SHOW_OP_USR_CLS']) { 
echo '
		<td align="left" class="' . ((isset($this->_tpldata['SP_MEMBERS.'][$_SP_MEMBERS_i]['CLASS_EN'])) ? $this->_tpldata['SP_MEMBERS.'][$_SP_MEMBERS_i]['CLASS_EN'] : '') . '">
      ' . ((isset($this->_tpldata['SP_MEMBERS.'][$_SP_MEMBERS_i]['CLASSIMG'])) ? $this->_tpldata['SP_MEMBERS.'][$_SP_MEMBERS_i]['CLASSIMG'] : '') . ' ' . ((isset($this->_tpldata['SP_MEMBERS.'][$_SP_MEMBERS_i]['CLASS'])) ? $this->_tpldata['SP_MEMBERS.'][$_SP_MEMBERS_i]['CLASS'] : '') . '
    </td>
		';// ENDIF
}
// IF SHOW_OP_CURR_DKP
if ($this->_tpldata['.'][0]['SHOW_OP_CURR_DKP']) { 
echo '
    <td nowrap="nowrap" class="' . ((isset($this->_tpldata['SP_MEMBERS.'][$_SP_MEMBERS_i]['C_CURRENT'])) ? $this->_tpldata['SP_MEMBERS.'][$_SP_MEMBERS_i]['C_CURRENT'] : '') . '">' . ((isset($this->_tpldata['SP_MEMBERS.'][$_SP_MEMBERS_i]['CURRENT'])) ? $this->_tpldata['SP_MEMBERS.'][$_SP_MEMBERS_i]['CURRENT'] : '') . '</td>
    ';// ENDIF
}
// IF SHOW_OP_TOT_DKP
if ($this->_tpldata['.'][0]['SHOW_OP_TOT_DKP']) { 
echo '
    <td nowrap="nowrap" class="' . ((isset($this->_tpldata['SP_MEMBERS.'][$_SP_MEMBERS_i]['C_TOTAL'])) ? $this->_tpldata['SP_MEMBERS.'][$_SP_MEMBERS_i]['C_TOTAL'] : '') . '">' . ((isset($this->_tpldata['SP_MEMBERS.'][$_SP_MEMBERS_i]['TOTAL'])) ? $this->_tpldata['SP_MEMBERS.'][$_SP_MEMBERS_i]['TOTAL'] : '') . '</td>
    ';// ENDIF
}
// BEGIN setright_tiers
$_setright_tiers_count = (isset($this->_tpldata['SP_MEMBERS.'][$_SP_MEMBERS_i]['setright_tiers.'])) ? sizeof($this->_tpldata['SP_MEMBERS.'][$_SP_MEMBERS_i]['setright_tiers.']) : 0;
if ($_setright_tiers_count) {
for ($_setright_tiers_i = 0; $_setright_tiers_i < $_setright_tiers_count; $_setright_tiers_i++)
{
echo '
    <td nowrap="nowrap" align="center">
    	<div class="kProgressBar">
				<div class="kprogress" style="width: ' . ((isset($this->_tpldata['SP_MEMBERS.'][$_SP_MEMBERS_i]['setright_tiers.'][$_setright_tiers_i]['BAR'])) ? $this->_tpldata['SP_MEMBERS.'][$_SP_MEMBERS_i]['setright_tiers.'][$_setright_tiers_i]['BAR'] : '') . '"></div>
				<div class="kpercent">' . ((isset($this->_tpldata['SP_MEMBERS.'][$_SP_MEMBERS_i]['setright_tiers.'][$_setright_tiers_i]['ITEMS_COUNT'])) ? $this->_tpldata['SP_MEMBERS.'][$_SP_MEMBERS_i]['setright_tiers.'][$_setright_tiers_i]['ITEMS_COUNT'] : '') . '/' . ((isset($this->_tpldata['SP_MEMBERS.'][$_SP_MEMBERS_i]['setright_tiers.'][$_setright_tiers_i]['ITEMS_TOTAL'])) ? $this->_tpldata['SP_MEMBERS.'][$_SP_MEMBERS_i]['setright_tiers.'][$_setright_tiers_i]['ITEMS_TOTAL'] : '') . '</div>
			</div>
    	</td>
    ';}}
// END setright_tiers
echo '
  </tr>
  ';}}
// END SP_MEMBERS
echo '
  
  
   <tr class="row1">
    <td nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_SUMM'])) ? $this->_tpldata['.'][0]['L_SUMM'] : ((isset($user->lang['SUMM'])) ? $user->lang['SUMM'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SUMM'))) . ' 	}')) . '</td>
  ';// IF SHOW_OP_USR_RANK
if ($this->_tpldata['.'][0]['SHOW_OP_USR_RANK']) { 
echo '
    <td nowrap="nowrap"></td>
  ';// ENDIF
}
// IF SHOW_OP_USR_CLS
if ($this->_tpldata['.'][0]['SHOW_OP_USR_CLS']) { 
echo '
		<td align="left"> </td>
		';// ENDIF
}
// IF SHOW_OP_CURR_DKP
if ($this->_tpldata['.'][0]['SHOW_OP_CURR_DKP']) { 
echo '
    <td nowrap="nowrap"></td>
    ';// ENDIF
}
// IF SHOW_OP_TOT_DKP
if ($this->_tpldata['.'][0]['SHOW_OP_TOT_DKP']) { 
echo '
    <td nowrap="nowrap"></td>
    ';// ENDIF
}
// BEGIN setitems_summ
$_setitems_summ_count = (isset($this->_tpldata['setitems_summ.'])) ?  sizeof($this->_tpldata['setitems_summ.']) : 0;
if ($_setitems_summ_count) {
for ($_setitems_summ_i = 0; $_setitems_summ_i < $_setitems_summ_count; $_setitems_summ_i++)
{
echo '
    <td nowrap="nowrap" align="center">
    	<div class="kProgressBar">
				<div class="kprogress" style="width: ' . ((isset($this->_tpldata['setitems_summ.'][$_setitems_summ_i]['GL_PERCENT'])) ? $this->_tpldata['setitems_summ.'][$_setitems_summ_i]['GL_PERCENT'] : '') . '%"></div>
				<div class="kpercent">' . ((isset($this->_tpldata['setitems_summ.'][$_setitems_summ_i]['GL_PERCENT'])) ? $this->_tpldata['setitems_summ.'][$_setitems_summ_i]['GL_PERCENT'] : '') . '%</div>
			</div>
    	 </td>
    ';}}
// END setitems_summ
echo '
  </tr>
  
  
  <tr>
    <th colspan="14" class="footer">' . ((isset($this->_tpldata['.'][0]['FOOTCOUNT'])) ? $this->_tpldata['.'][0]['FOOTCOUNT'] : '') . '</th>
  </tr>
  </th>
  </table>
';// ENDIF
}
// BEGIN TIERS_PAGE
$_TIERS_PAGE_count = (isset($this->_tpldata['TIERS_PAGE.'])) ?  sizeof($this->_tpldata['TIERS_PAGE.']) : 0;
if ($_TIERS_PAGE_count) {
for ($_TIERS_PAGE_i = 0; $_TIERS_PAGE_i < $_TIERS_PAGE_count; $_TIERS_PAGE_i++)
{
echo '
	<img src="images/minus.gif" class="showstate" onClick="expandcontent(this, \'Tier' . ((isset($this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['NO'])) ? $this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['NO'] : '') . '\')" /><span class="maintitle"> ' . ((isset($this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['TIER_NAME'])) ? $this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['TIER_NAME'] : '') . '</span>
	<div id="Tier' . ((isset($this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['NO'])) ? $this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['NO'] : '') . '" class="switchcontent" width="100%" align="center" >
	<table width="100%" border="0" cellspacing="1" cellpadding="2">
	<tr class="' . ((isset($this->_tpldata['.'][0]['ROW_CLASS'])) ? $this->_tpldata['.'][0]['ROW_CLASS'] : '') . '">
		<td>&nbsp;</td>
		';// IF SHOW_USR_RANK
if ($this->_tpldata['.'][0]['SHOW_USR_RANK']) { 
echo '
		<td>' . ((isset($this->_tpldata['.'][0]['L_RANK'])) ? $this->_tpldata['.'][0]['L_RANK'] : ((isset($user->lang['RANK'])) ? $user->lang['RANK'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RANK'))) . ' 	}')) . '</td>
		';// ENDIF
}
// IF SHOW_CURR_DKP
if ($this->_tpldata['.'][0]['SHOW_CURR_DKP']) { 
echo '
		<td>' . ((isset($this->_tpldata['.'][0]['L_CURRENT'])) ? $this->_tpldata['.'][0]['L_CURRENT'] : ((isset($user->lang['CURRENT'])) ? $user->lang['CURRENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CURRENT'))) . ' 	}')) . '</td>
		';// ENDIF
}
// IF SHOW_TOTAL_DKP
if ($this->_tpldata['.'][0]['SHOW_TOTAL_DKP']) { 
echo '
		<td>' . ((isset($this->_tpldata['.'][0]['L_TOTAL'])) ? $this->_tpldata['.'][0]['L_TOTAL'] : ((isset($user->lang['TOTAL'])) ? $user->lang['TOTAL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TOTAL'))) . ' 	}')) . '</td>
		';// ENDIF
}
// IF SHOW_USR_CLASS
if ($this->_tpldata['.'][0]['SHOW_USR_CLASS']) { 
echo '
		<td>' . ((isset($this->_tpldata['.'][0]['L_CLASS'])) ? $this->_tpldata['.'][0]['L_CLASS'] : ((isset($user->lang['CLASS'])) ? $user->lang['CLASS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CLASS'))) . ' 	}')) . '</td>
		';// ENDIF
}
echo '
				' . ((isset($this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['SHOW_1'])) ? $this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['SHOW_1'] : '') . '
        ' . ((isset($this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['SHOW_2'])) ? $this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['SHOW_2'] : '') . '
        ' . ((isset($this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['SHOW_3'])) ? $this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['SHOW_3'] : '') . '
        ' . ((isset($this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['SHOW_4'])) ? $this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['SHOW_4'] : '') . '
        ' . ((isset($this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['SHOW_5'])) ? $this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['SHOW_5'] : '') . '
        ' . ((isset($this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['SHOW_6'])) ? $this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['SHOW_6'] : '') . '
        ' . ((isset($this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['SHOW_7'])) ? $this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['SHOW_7'] : '') . '
        ' . ((isset($this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['SHOW_8'])) ? $this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['SHOW_8'] : '') . '
        ' . ((isset($this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['SHOW_9'])) ? $this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['SHOW_9'] : '') . '
	</tr>
	
	';// BEGIN MEMBERS
$_MEMBERS_count = (isset($this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['MEMBERS.'])) ? sizeof($this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['MEMBERS.']) : 0;
if ($_MEMBERS_count) {
for ($_MEMBERS_i = 0; $_MEMBERS_i < $_MEMBERS_count; $_MEMBERS_i++)
{
echo '
	<tr class="' . ((isset($this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['MEMBERS.'][$_MEMBERS_i]['ROW_CLASS'])) ? $this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['MEMBERS.'][$_MEMBERS_i]['ROW_CLASS'] : '') . '">
		<td><a href="' . ((isset($this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['MEMBERS.'][$_MEMBERS_i]['link'])) ? $this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['MEMBERS.'][$_MEMBERS_i]['link'] : '') . '">' . ((isset($this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['MEMBERS.'][$_MEMBERS_i]['name'])) ? $this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['MEMBERS.'][$_MEMBERS_i]['name'] : '') . '</a></td>
		';// IF SHOW_USR_RANK
if ($this->_tpldata['.'][0]['SHOW_USR_RANK']) { 
echo '
		 <td width="80" nowrap="nowrap">' . ((isset($this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['MEMBERS.'][$_MEMBERS_i]['RANK'])) ? $this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['MEMBERS.'][$_MEMBERS_i]['RANK'] : '') . '</td>
		';// ENDIF
}
// IF SHOW_CURR_DKP
if ($this->_tpldata['.'][0]['SHOW_CURR_DKP']) { 
echo '
    <td width="20" nowrap="nowrap" class="' . ((isset($this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['MEMBERS.'][$_MEMBERS_i]['C_CURRENT'])) ? $this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['MEMBERS.'][$_MEMBERS_i]['C_CURRENT'] : '') . '">' . ((isset($this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['MEMBERS.'][$_MEMBERS_i]['CURRENT'])) ? $this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['MEMBERS.'][$_MEMBERS_i]['CURRENT'] : '') . '</td>
		';// ENDIF
}
// IF SHOW_TOTAL_DKP
if ($this->_tpldata['.'][0]['SHOW_TOTAL_DKP']) { 
echo '
    <td width="20" nowrap="nowrap" class="' . ((isset($this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['MEMBERS.'][$_MEMBERS_i]['C_TOTAL'])) ? $this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['MEMBERS.'][$_MEMBERS_i]['C_TOTAL'] : '') . '">' . ((isset($this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['MEMBERS.'][$_MEMBERS_i]['TOTAL'])) ? $this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['MEMBERS.'][$_MEMBERS_i]['TOTAL'] : '') . '</td>
		';// ENDIF
}
// IF SHOW_USR_CLASS
if ($this->_tpldata['.'][0]['SHOW_USR_CLASS']) { 
echo '
		 <td width="100" align="left" class="' . ((isset($this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['MEMBERS.'][$_MEMBERS_i]['CLASS_EN'])) ? $this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['MEMBERS.'][$_MEMBERS_i]['CLASS_EN'] : '') . '">
      ' . ((isset($this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['MEMBERS.'][$_MEMBERS_i]['CLASSIMG'])) ? $this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['MEMBERS.'][$_MEMBERS_i]['CLASSIMG'] : '') . ' ' . ((isset($this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['MEMBERS.'][$_MEMBERS_i]['CLASS'])) ? $this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['MEMBERS.'][$_MEMBERS_i]['CLASS'] : '') . '
    </td>
		';// ENDIF
}
// BEGIN MEMBERITEMS_NEED
$_MEMBERITEMS_NEED_count = (isset($this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['MEMBERS.'][$_MEMBERS_i]['MEMBERITEMS_NEED.'])) ? sizeof($this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['MEMBERS.'][$_MEMBERS_i]['MEMBERITEMS_NEED.']) : 0;
if ($_MEMBERITEMS_NEED_count) {
for ($_MEMBERITEMS_NEED_i = 0; $_MEMBERITEMS_NEED_i < $_MEMBERITEMS_NEED_count; $_MEMBERITEMS_NEED_i++)
{
echo '
		<td class="style1">
			';// IF OLDST_ITMLINKS
if ($this->_tpldata['.'][0]['OLDST_ITMLINKS']) { 
echo '
			<a href="' . ((isset($this->_tpldata['.'][0]['ITEMLINK'])) ? $this->_tpldata['.'][0]['ITEMLINK'] : '') . '' . ((isset($this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['MEMBERS.'][$_MEMBERS_i]['MEMBERITEMS_NEED.'][$_MEMBERITEMS_NEED_i]['id2'])) ? $this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['MEMBERS.'][$_MEMBERS_i]['MEMBERITEMS_NEED.'][$_MEMBERITEMS_NEED_i]['id2'] : '') . '">' . ((isset($this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['MEMBERS.'][$_MEMBERS_i]['MEMBERITEMS_NEED.'][$_MEMBERITEMS_NEED_i]['item_image'])) ? $this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['MEMBERS.'][$_MEMBERS_i]['MEMBERITEMS_NEED.'][$_MEMBERITEMS_NEED_i]['item_image'] : '') . '</a>
			';// ELSE
} else {
echo '
			<a onclick="javascript:ItemInfos(\'' . ((isset($this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['MEMBERS.'][$_MEMBERS_i]['MEMBERITEMS_NEED.'][$_MEMBERITEMS_NEED_i]['id'])) ? $this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['MEMBERS.'][$_MEMBERS_i]['MEMBERITEMS_NEED.'][$_MEMBERITEMS_NEED_i]['id'] : '') . '\')" style="cursor:pointer;">' . ((isset($this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['MEMBERS.'][$_MEMBERS_i]['MEMBERITEMS_NEED.'][$_MEMBERITEMS_NEED_i]['item_image'])) ? $this->_tpldata['TIERS_PAGE.'][$_TIERS_PAGE_i]['MEMBERS.'][$_MEMBERS_i]['MEMBERITEMS_NEED.'][$_MEMBERITEMS_NEED_i]['item_image'] : '') . '</a>
			';// ENDIF
}
echo '
		</td>
		';}}
// END MEMBERITEMS_NEED
echo '
	</tr>
	';}}
// END MEMBERS
echo '
</table>
</div><br />
';}}
// END TIERS_PAGE
echo '
<br /><center><span class="copyis"><a onclick="javascript:AboutDialog()" style="cursor:pointer;" onmouseover="style.textDecoration=\'underline\';" onmouseout="style.textDecoration=\'none\';"><img src="images/info.png" alt="Credits" border="0" /> Credits</a></span>
<br />' . ((isset($this->_tpldata['.'][0]['IS_COPYRIGHT'])) ? $this->_tpldata['.'][0]['IS_COPYRIGHT'] : '') . '</center>';
}
?>