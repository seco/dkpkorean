<?php
if ($this->security()) {
echo '<style type="text/css">
		ul.demo {
			padding: 0;
			margin: 0;
			border: solid 1px #cc9;
		}

		/* REQUIRED * the "slidingPanelsActivated" class added to container by the plug-in, allows for different presentation if JavaScript is disabled */
		ul.slidingPanelsActivated {
			display:block;
			position:relative;
			overflow:hidden;

			/* edit "padding" and "margin" with care, as they can mess things up across browser */
			padding: 0;
			margin: 0;

			/* adjust "height" as needed, em recommended */
			height: ' . ((isset($this->_tpldata['.'][0]['MAX_HIGH'])) ? $this->_tpldata['.'][0]['MAX_HIGH'] : '') . 'em;
		}

		ul.demo li {
			display: block;
			padding:0;
			margin:0;
		}

		/* REQUIRED * the "slidingPanelsActivated" class added to container by the plug-in, allows for different presentation if JavaScript is disabled */
		ul.slidingPanelsActivated li {
			display:block;
			position:absolute;
			overflow:hidden;
			/* "left" and "width" properties set automatically */
			top: 0;

			/* edit "padding" and "margin" with care, as they can mess things up across browser */
			padding: 3;
			margin: 3;

			/* "height" of 100% recommended to keep panels all the same height as the container */
			height:100%;
		}

	</style>

		<script type="text/javascript" charset="utf-8">
		$(document).ready(function(){
			$("#leaderboard").slidingPanels();
		});

	</script>

';// IF SHOW_MULTI
if ($this->_tpldata['.'][0]['SHOW_MULTI']) { 
echo '
	<form method="get" action="' . ((isset($this->_tpldata['.'][0]['F_MEMBERS'])) ? $this->_tpldata['.'][0]['F_MEMBERS'] : '') . '">
	<input type="hidden" name="' . ((isset($this->_tpldata['.'][0]['URI_SESSION'])) ? $this->_tpldata['.'][0]['URI_SESSION'] : '') . '" value="' . ((isset($this->_tpldata['.'][0]['V_SID'])) ? $this->_tpldata['.'][0]['V_SID'] : '') . '" />
	<input type="hidden" name="filter" value="' . ((isset($this->_tpldata['.'][0]['GIVEN_FILTER'])) ? $this->_tpldata['.'][0]['GIVEN_FILTER'] : '') . '" />
	 <table width="100%" border="0" cellspacing="1" cellpadding="2" class="forumline" style="border-bottom: none">
	  <tr>
	    <th align="right" width="120" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_FILTER'])) ? $this->_tpldata['.'][0]['L_FILTER'] : ((isset($user->lang['FILTER'])) ? $user->lang['FILTER'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FILTER'))) . ' 	}')) . ':
	    	<select name="multifilter" class="input" onchange="javascript:form.submit();">
	        ';// BEGIN multi_row
$_multi_row_count = (isset($this->_tpldata['multi_row.'])) ?  sizeof($this->_tpldata['multi_row.']) : 0;
if ($_multi_row_count) {
for ($_multi_row_i = 0; $_multi_row_i < $_multi_row_count; $_multi_row_i++)
{
echo '
	        <option value="' . ((isset($this->_tpldata['multi_row.'][$_multi_row_i]['VALUE'])) ? $this->_tpldata['multi_row.'][$_multi_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['multi_row.'][$_multi_row_i]['SELECTED'])) ? $this->_tpldata['multi_row.'][$_multi_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['multi_row.'][$_multi_row_i]['OPTION'])) ? $this->_tpldata['multi_row.'][$_multi_row_i]['OPTION'] : '') . '</option>
	        ';}}
// END multi_row
echo '
	      </select>
	    	</th>
	    <th align="center">MultiDKP Leaderboard ' . ((isset($this->_tpldata['.'][0]['SHOW_MULTI_FILTER'])) ? $this->_tpldata['.'][0]['SHOW_MULTI_FILTER'] : '') . '</th>
	  </tr>
	</table>
	</form>
';// ENDIF
}
// IF NORMAL_LEADERBOARD
if ($this->_tpldata['.'][0]['NORMAL_LEADERBOARD']) { 
echo '
	<table width="100%" border="0" cellspacing="1" cellpadding="1" class="forumline">
	<tr>
		';// BEGIN classheader_row
$_classheader_row_count = (isset($this->_tpldata['classheader_row.'])) ?  sizeof($this->_tpldata['classheader_row.']) : 0;
if ($_classheader_row_count) {
for ($_classheader_row_i = 0; $_classheader_row_i < $_classheader_row_count; $_classheader_row_i++)
{
echo '
		<td align="center" nowrap="nowrap" valign="top" class="' . ((isset($this->_tpldata['classheader_row.'][$_classheader_row_i]['ROW_CLASS'])) ? $this->_tpldata['classheader_row.'][$_classheader_row_i]['ROW_CLASS'] : '') . '">
		 <table width="100%" class="borderless" border="0" cellspacing="0" cellpadding="2">
		   <tr>
		     <th colspan="2"><a href=\'listmembers.php?s=&filter=' . ((isset($this->_tpldata['classheader_row.'][$_classheader_row_i]['NAME'])) ? $this->_tpldata['classheader_row.'][$_classheader_row_i]['NAME'] : '') . '\' class="' . ((isset($this->_tpldata['classheader_row.'][$_classheader_row_i]['NAME_ENG'])) ? $this->_tpldata['classheader_row.'][$_classheader_row_i]['NAME_ENG'] : '') . '" >' . ((isset($this->_tpldata['classheader_row.'][$_classheader_row_i]['ICON'])) ? $this->_tpldata['classheader_row.'][$_classheader_row_i]['ICON'] : '') . ' ' . ((isset($this->_tpldata['classheader_row.'][$_classheader_row_i]['NAME'])) ? $this->_tpldata['classheader_row.'][$_classheader_row_i]['NAME'] : '') . ' </a></th>
		   </tr>
		  ';// BEGIN classlist_row
$_classlist_row_count = (isset($this->_tpldata['classheader_row.'][$_classheader_row_i]['classlist_row.'])) ? sizeof($this->_tpldata['classheader_row.'][$_classheader_row_i]['classlist_row.']) : 0;
if ($_classlist_row_count) {
for ($_classlist_row_i = 0; $_classlist_row_i < $_classlist_row_count; $_classlist_row_i++)
{
echo '
	      	<tr onmouseover="this.className=\'rowHover\';" onmouseout="this.className=\'' . ((isset($this->_tpldata['classheader_row.'][$_classheader_row_i]['classlist_row.'][$_classlist_row_i]['NAME_ENG'])) ? $this->_tpldata['classheader_row.'][$_classheader_row_i]['classlist_row.'][$_classlist_row_i]['NAME_ENG'] : '') . '\';">
		      	<td align="left"><a href="' . ((isset($this->_tpldata['classlist_row.'][$_classlist_row_i]['U_VIEW_MEMBER'])) ? $this->_tpldata['classlist_row.'][$_classlist_row_i]['U_VIEW_MEMBER'] : '') . '">' . ((isset($this->_tpldata['classheader_row.'][$_classheader_row_i]['classlist_row.'][$_classlist_row_i]['NAME'])) ? $this->_tpldata['classheader_row.'][$_classheader_row_i]['classlist_row.'][$_classlist_row_i]['NAME'] : '') . '</a></td>
		      	<td class="' . ((isset($this->_tpldata['classheader_row.'][$_classheader_row_i]['classlist_row.'][$_classlist_row_i]['C_CURRENT'])) ? $this->_tpldata['classheader_row.'][$_classheader_row_i]['classlist_row.'][$_classlist_row_i]['C_CURRENT'] : '') . '" align="right">' . ((isset($this->_tpldata['classheader_row.'][$_classheader_row_i]['classlist_row.'][$_classlist_row_i]['CURRENT'])) ? $this->_tpldata['classheader_row.'][$_classheader_row_i]['classlist_row.'][$_classlist_row_i]['CURRENT'] : '') . '</td>
	      </tr>
	    ';}}
// END classlist_row
echo '
	    </table>
	    </td>
		';}}
// END classheader_row
echo '
	</tr>
	</table>
';// ELSE
} else {
echo '
	<ul id="leaderboard" class="demo slidingPanelsActivated">
		';// BEGIN classheader_row
$_classheader_row_count = (isset($this->_tpldata['classheader_row.'])) ?  sizeof($this->_tpldata['classheader_row.']) : 0;
if ($_classheader_row_count) {
for ($_classheader_row_i = 0; $_classheader_row_i < $_classheader_row_count; $_classheader_row_i++)
{
echo '
		 <li class="' . ((isset($this->_tpldata['classheader_row.'][$_classheader_row_i]['ROW'])) ? $this->_tpldata['classheader_row.'][$_classheader_row_i]['ROW'] : '') . '" slidingpanelstate="Default" />
			<table  width="100%" class="borderless" border="0" cellspacing="0" cellpadding="3">
		   		<tr width="100%">
		     		<th colspan="2" width="100%"><a href=\'listmembers.php?s=&filter=' . ((isset($this->_tpldata['classheader_row.'][$_classheader_row_i]['NAME'])) ? $this->_tpldata['classheader_row.'][$_classheader_row_i]['NAME'] : '') . '\' class="' . ((isset($this->_tpldata['classheader_row.'][$_classheader_row_i]['NAME_ENG'])) ? $this->_tpldata['classheader_row.'][$_classheader_row_i]['NAME_ENG'] : '') . '" >' . ((isset($this->_tpldata['classheader_row.'][$_classheader_row_i]['ICON'])) ? $this->_tpldata['classheader_row.'][$_classheader_row_i]['ICON'] : '') . ' ' . ((isset($this->_tpldata['classheader_row.'][$_classheader_row_i]['NAME'])) ? $this->_tpldata['classheader_row.'][$_classheader_row_i]['NAME'] : '') . ' </a></th>
		   		</tr>
		  		';// BEGIN classlist_row
$_classlist_row_count = (isset($this->_tpldata['classheader_row.'][$_classheader_row_i]['classlist_row.'])) ? sizeof($this->_tpldata['classheader_row.'][$_classheader_row_i]['classlist_row.']) : 0;
if ($_classlist_row_count) {
for ($_classlist_row_i = 0; $_classlist_row_i < $_classlist_row_count; $_classlist_row_i++)
{
echo '
	      			<tr onmouseover="this.className=\'rowHover\';" onmouseout="this.className=\'' . ((isset($this->_tpldata['classheader_row.'][$_classheader_row_i]['classlist_row.'][$_classlist_row_i]['NAME_ENG'])) ? $this->_tpldata['classheader_row.'][$_classheader_row_i]['classlist_row.'][$_classlist_row_i]['NAME_ENG'] : '') . '\';">
		      			<td align="left" width="10%"><a href="' . ((isset($this->_tpldata['classlist_row.'][$_classlist_row_i]['U_VIEW_MEMBER'])) ? $this->_tpldata['classlist_row.'][$_classlist_row_i]['U_VIEW_MEMBER'] : '') . '">' . ((isset($this->_tpldata['classheader_row.'][$_classheader_row_i]['classlist_row.'][$_classlist_row_i]['NAME'])) ? $this->_tpldata['classheader_row.'][$_classheader_row_i]['classlist_row.'][$_classlist_row_i]['NAME'] : '') . '</a></td>
		      			<td class="' . ((isset($this->_tpldata['classheader_row.'][$_classheader_row_i]['classlist_row.'][$_classlist_row_i]['C_CURRENT'])) ? $this->_tpldata['classheader_row.'][$_classheader_row_i]['classlist_row.'][$_classlist_row_i]['C_CURRENT'] : '') . '" align="left"  width="90%">' . ((isset($this->_tpldata['classheader_row.'][$_classheader_row_i]['classlist_row.'][$_classlist_row_i]['CURRENT'])) ? $this->_tpldata['classheader_row.'][$_classheader_row_i]['classlist_row.'][$_classlist_row_i]['CURRENT'] : '') . '</td>
	      			</tr>
	    		';}}
// END classlist_row
echo '
	    	</table>
	     </li>
		 ';}}
// END classheader_row
echo '
	</ul>
';// ENDIF
}

}
?>