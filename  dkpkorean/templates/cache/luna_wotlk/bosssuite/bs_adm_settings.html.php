<?php
if ($this->security()) {
echo '' . ((isset($this->_tpldata['.'][0]['JQUERY_INCLUDES'])) ? $this->_tpldata['.'][0]['JQUERY_INCLUDES'] : '') . '
' . ((isset($this->_tpldata['.'][0]['UPDATER'])) ? $this->_tpldata['.'][0]['UPDATER'] : '') . '
' . ((isset($this->_tpldata['.'][0]['UPDCHECK_BOX'])) ? $this->_tpldata['.'][0]['UPDCHECK_BOX'] : '') . '
' . ((isset($this->_tpldata['.'][0]['TABOUT'])) ? $this->_tpldata['.'][0]['TABOUT'] : '') . '
<form method="post" action="' . ((isset($this->_tpldata['.'][0]['F_CONFIG'])) ? $this->_tpldata['.'][0]['F_CONFIG'] : '') . '" name="post">
<div id="bs_adm_tabs">
<ul>
    <li><a href="#fragment-1"><span>' . ((isset($this->_tpldata['.'][0]['L_GENERAL'])) ? $this->_tpldata['.'][0]['L_GENERAL'] : ((isset($user->lang['GENERAL'])) ? $user->lang['GENERAL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'GENERAL'))) . ' 	}')) . '</span></a></li>
    <li><a href="#fragment-2"><span>' . ((isset($this->_tpldata['.'][0]['L_BOSSBASE'])) ? $this->_tpldata['.'][0]['L_BOSSBASE'] : ((isset($user->lang['BOSSBASE'])) ? $user->lang['BOSSBASE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BOSSBASE'))) . ' 	}')) . '</span></a></li>
    <li><a href="#fragment-3"><span>' . ((isset($this->_tpldata['.'][0]['L_BOSSLOOT'])) ? $this->_tpldata['.'][0]['L_BOSSLOOT'] : ((isset($user->lang['BOSSLOOT'])) ? $user->lang['BOSSLOOT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BOSSLOOT'))) . ' 	}')) . '</span></a></li>
    <li><a href="#fragment-4"><span>' . ((isset($this->_tpldata['.'][0]['L_BOSSPROGRESS'])) ? $this->_tpldata['.'][0]['L_BOSSPROGRESS'] : ((isset($user->lang['BOSSPROGRESS'])) ? $user->lang['BOSSPROGRESS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BOSSPROGRESS'))) . ' 	}')) . '</span></a></li>
    <li><a href="#fragment-5"><span>' . ((isset($this->_tpldata['.'][0]['L_BOSSCOUNTER'])) ? $this->_tpldata['.'][0]['L_BOSSCOUNTER'] : ((isset($user->lang['BOSSCOUNTER'])) ? $user->lang['BOSSCOUNTER'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BOSSCOUNTER'))) . ' 	}')) . '</span></a></li>
</ul>

<div id="fragment-1">
<table border="0" width="100%" cellspacing="1" cellpadding="2">
            <tr>
                 <th align="center" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_GENERAL'])) ? $this->_tpldata['.'][0]['L_GENERAL'] : ((isset($user->lang['GENERAL'])) ? $user->lang['GENERAL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'GENERAL'))) . ' 	}')) . '</th>
            </tr>
            <tr>
                <td width="70%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_EBC'])) ? $this->_tpldata['.'][0]['L_EBC'] : ((isset($user->lang['EBC'])) ? $user->lang['EBC'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EBC'))) . ' 	}')) . '</td>
                <td width="30%" class="row1"><input type="checkbox" name="ebc" value="1" ' . ((isset($this->_tpldata['.'][0]['BS_EBC'])) ? $this->_tpldata['.'][0]['BS_EBC'] : '') . ' /></td>
            </tr>
            <tr>
                <td class="row2">' . ((isset($this->_tpldata['.'][0]['L_EN2L'])) ? $this->_tpldata['.'][0]['L_EN2L'] : ((isset($user->lang['EN2L'])) ? $user->lang['EN2L'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EN2L'))) . ' 	}')) . '</td>
                <td class="row1"><input type="checkbox" name="en2l" value="1" ' . ((isset($this->_tpldata['.'][0]['BS_EN2L'])) ? $this->_tpldata['.'][0]['BS_EN2L'] : '') . ' /></td>
            </tr>
            <tr>
                <td class="row2">' . ((isset($this->_tpldata['.'][0]['L_ENUPDCHECK'])) ? $this->_tpldata['.'][0]['L_ENUPDCHECK'] : ((isset($user->lang['ENUPDCHECK'])) ? $user->lang['ENUPDCHECK'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ENUPDCHECK'))) . ' 	}')) . '</td>
                <td class="row1"><input type="checkbox" name="enupdcheck" value="1" ' . ((isset($this->_tpldata['.'][0]['BS_ENUPDCHECK'])) ? $this->_tpldata['.'][0]['BS_ENUPDCHECK'] : '') . ' /></td>
            </tr>           
            <tr>
                <td class="row2">' . ((isset($this->_tpldata['.'][0]['L_ENAUTOCLOSE'])) ? $this->_tpldata['.'][0]['L_ENAUTOCLOSE'] : ((isset($user->lang['ENAUTOCLOSE'])) ? $user->lang['ENAUTOCLOSE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ENAUTOCLOSE'))) . ' 	}')) . '</td>
                <td class="row1"><input type="checkbox" name="enautoclose" value="1" ' . ((isset($this->_tpldata['.'][0]['BS_ENAUTOCLOSE'])) ? $this->_tpldata['.'][0]['BS_ENAUTOCLOSE'] : '') . ' /></td>
            </tr>
</table>
</div>
<div id="fragment-2">
<table border="0" width="100%" cellspacing="1" cellpadding="2">
            <tr>
                 <th align="center" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_GENERAL'])) ? $this->_tpldata['.'][0]['L_GENERAL'] : ((isset($user->lang['GENERAL'])) ? $user->lang['GENERAL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'GENERAL'))) . ' 	}')) . ': BossBase</th>
            </tr>
            <tr>
                <td class="row2">' . ((isset($this->_tpldata['.'][0]['L_SOURCE'])) ? $this->_tpldata['.'][0]['L_SOURCE'] : ((isset($user->lang['SOURCE'])) ? $user->lang['SOURCE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SOURCE'))) . ' 	}')) . '</td>
                <td class="row1">
                    <select name="source" class="input">
                    ';// BEGIN source_row
$_source_row_count = (isset($this->_tpldata['source_row.'])) ?  sizeof($this->_tpldata['source_row.']) : 0;
if ($_source_row_count) {
for ($_source_row_i = 0; $_source_row_i < $_source_row_count; $_source_row_i++)
{
echo '
                        <option value="' . ((isset($this->_tpldata['source_row.'][$_source_row_i]['VALUE'])) ? $this->_tpldata['source_row.'][$_source_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['source_row.'][$_source_row_i]['SELECTED'])) ? $this->_tpldata['source_row.'][$_source_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['source_row.'][$_source_row_i]['OPTION'])) ? $this->_tpldata['source_row.'][$_source_row_i]['OPTION'] : '') . '</option>
                    ';}}
// END source_row
echo '
                    </select>
                </td>
            </tr>
            <tr>
                <td width="70%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_ZONEINFO'])) ? $this->_tpldata['.'][0]['L_ZONEINFO'] : ((isset($user->lang['ZONEINFO'])) ? $user->lang['ZONEINFO'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ZONEINFO'))) . ' 	}')) . '</td>
                <td width="30%" class="row1">
                    <select size="1" name="zoneInfo">
                        <option value="rname" ' . ((isset($this->_tpldata['.'][0]['ZONEINFO_SEL_RNAME'])) ? $this->_tpldata['.'][0]['ZONEINFO_SEL_RNAME'] : '') . '>' . ((isset($this->_tpldata['.'][0]['L_RNAME'])) ? $this->_tpldata['.'][0]['L_RNAME'] : ((isset($user->lang['RNAME'])) ? $user->lang['RNAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RNAME'))) . ' 	}')) . '</option>
                        <option value="rnote" ' . ((isset($this->_tpldata['.'][0]['ZONEINFO_SEL_RNOTE'])) ? $this->_tpldata['.'][0]['ZONEINFO_SEL_RNOTE'] : '') . '>' . ((isset($this->_tpldata['.'][0]['L_RNOTE'])) ? $this->_tpldata['.'][0]['L_RNOTE'] : ((isset($user->lang['RNOTE'])) ? $user->lang['RNOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RNOTE'))) . ' 	}')) . '</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="row2">' . ((isset($this->_tpldata['.'][0]['L_BOSSINFO'])) ? $this->_tpldata['.'][0]['L_BOSSINFO'] : ((isset($user->lang['BOSSINFO'])) ? $user->lang['BOSSINFO'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BOSSINFO'))) . ' 	}')) . '</td>
                <td class="row1">
                    <select size="1" name="bossInfo">
                        <option value="rname" ' . ((isset($this->_tpldata['.'][0]['BOSSINFO_SEL_RNAME'])) ? $this->_tpldata['.'][0]['BOSSINFO_SEL_RNAME'] : '') . '>' . ((isset($this->_tpldata['.'][0]['L_RNAME'])) ? $this->_tpldata['.'][0]['L_RNAME'] : ((isset($user->lang['RNAME'])) ? $user->lang['RNAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RNAME'))) . ' 	}')) . '</option>
                        <option value="rnote" ' . ((isset($this->_tpldata['.'][0]['BOSSINFO_SEL_RNOTE'])) ? $this->_tpldata['.'][0]['BOSSINFO_SEL_RNOTE'] : '') . '>' . ((isset($this->_tpldata['.'][0]['L_RNOTE'])) ? $this->_tpldata['.'][0]['L_RNOTE'] : ((isset($user->lang['RNOTE'])) ? $user->lang['RNOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RNOTE'))) . ' 	}')) . '</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="row2">' . ((isset($this->_tpldata['.'][0]['L_BS_DEPMATCH'])) ? $this->_tpldata['.'][0]['L_BS_DEPMATCH'] : ((isset($user->lang['BS_DEPMATCH'])) ? $user->lang['BS_DEPMATCH'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BS_DEPMATCH'))) . ' 	}')) . '</td>
                <td class="row1"><input type="checkbox" name="bs_depmatch" value="1" ' . ((isset($this->_tpldata['.'][0]['BS_DEPMATCH'])) ? $this->_tpldata['.'][0]['BS_DEPMATCH'] : '') . ' /></td>
            </tr>
            <tr>
                <td class="row2">' . ((isset($this->_tpldata['.'][0]['L_NOTEDELIM'])) ? $this->_tpldata['.'][0]['L_NOTEDELIM'] : ((isset($user->lang['NOTEDELIM'])) ? $user->lang['NOTEDELIM'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NOTEDELIM'))) . ' 	}')) . '</td>
                <td class="row1"><input type="text" name="notedelim" size="32" value="' . ((isset($this->_tpldata['.'][0]['BP_NOTEDELIM'])) ? $this->_tpldata['.'][0]['BP_NOTEDELIM'] : '') . '" class="input" /></td>
            </tr>
            <tr>
                <td class="row2">' . ((isset($this->_tpldata['.'][0]['L_NAMEDELIM'])) ? $this->_tpldata['.'][0]['L_NAMEDELIM'] : ((isset($user->lang['NAMEDELIM'])) ? $user->lang['NAMEDELIM'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NAMEDELIM'))) . ' 	}')) . '</td>
                <td class="row1"><input type="text" name="namedelim" size="32" value="' . ((isset($this->_tpldata['.'][0]['BP_NAMEDELIM'])) ? $this->_tpldata['.'][0]['BP_NAMEDELIM'] : '') . '" class="input" /></td>
            </tr>
            <tr>
                <td class="row2">' . ((isset($this->_tpldata['.'][0]['L_TABLES'])) ? $this->_tpldata['.'][0]['L_TABLES'] : ((isset($user->lang['TABLES'])) ? $user->lang['TABLES'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TABLES'))) . ' 	}')) . '</td>
                <td class="row1"><input type="text" name="tables" size="32" value="' . ((isset($this->_tpldata['.'][0]['BP_TABLES'])) ? $this->_tpldata['.'][0]['BP_TABLES'] : '') . '" class="input" /></td>
            </tr>
</table>
</div>
<div id="fragment-3">
<table border="0" width="100%" cellspacing="1" cellpadding="2">
			<tr>
   				 <th align="center" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_GENERAL'])) ? $this->_tpldata['.'][0]['L_GENERAL'] : ((isset($user->lang['GENERAL'])) ? $user->lang['GENERAL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'GENERAL'))) . ' 	}')) . ': BossLoot</th>
			</tr>
			      <tr>
                <td class="row2">' . ((isset($this->_tpldata['.'][0]['L_BL_EYECANDY'])) ? $this->_tpldata['.'][0]['L_BL_EYECANDY'] : ((isset($user->lang['BL_EYECANDY'])) ? $user->lang['BL_EYECANDY'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BL_EYECANDY'))) . ' 	}')) . '</td>
                <td class="row1"><input type="checkbox" name="bl_eyecandy" value="1" ' . ((isset($this->_tpldata['.'][0]['BL_EYECANDY'])) ? $this->_tpldata['.'][0]['BL_EYECANDY'] : '') . ' /></td>
            </tr>
            ' . ((isset($this->_tpldata['.'][0]['BL_MODELVIEWER'])) ? $this->_tpldata['.'][0]['BL_MODELVIEWER'] : '') . '
            <tr>
                 <td width="70%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_ITEMLANG'])) ? $this->_tpldata['.'][0]['L_ITEMLANG'] : ((isset($user->lang['ITEMLANG'])) ? $user->lang['ITEMLANG'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ITEMLANG'))) . ' 	}')) . '</td>
                 <td width="30%" class="row1">
                    <select name="itemlang" class="input">
                    ';// BEGIN itemlang_row
$_itemlang_row_count = (isset($this->_tpldata['itemlang_row.'])) ?  sizeof($this->_tpldata['itemlang_row.']) : 0;
if ($_itemlang_row_count) {
for ($_itemlang_row_i = 0; $_itemlang_row_i < $_itemlang_row_count; $_itemlang_row_i++)
{
echo '
                        <option value="' . ((isset($this->_tpldata['itemlang_row.'][$_itemlang_row_i]['VALUE'])) ? $this->_tpldata['itemlang_row.'][$_itemlang_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['itemlang_row.'][$_itemlang_row_i]['SELECTED'])) ? $this->_tpldata['itemlang_row.'][$_itemlang_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['itemlang_row.'][$_itemlang_row_i]['OPTION'])) ? $this->_tpldata['itemlang_row.'][$_itemlang_row_i]['OPTION'] : '') . '</option>
                    ';}}
// END itemlang_row
echo '
                    </select>
                </td>
            </tr>
            <tr>
              <th colspan="2">
                  ' . ((isset($this->_tpldata['.'][0]['L_LOOTLIST_OPTS'])) ? $this->_tpldata['.'][0]['L_LOOTLIST_OPTS'] : ((isset($user->lang['LOOTLIST_OPTS'])) ? $user->lang['LOOTLIST_OPTS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LOOTLIST_OPTS'))) . ' 	}')) . '
              </th>
            </tr>
            <tr>
                 <td class="row2">' . ((isset($this->_tpldata['.'][0]['L_ITEMQUAL'])) ? $this->_tpldata['.'][0]['L_ITEMQUAL'] : ((isset($user->lang['ITEMQUAL'])) ? $user->lang['ITEMQUAL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ITEMQUAL'))) . ' 	}')) . '</td>
                 <td class="row1">
                    <select name="itemqual" class="input">
                    ';// BEGIN itemqual_row
$_itemqual_row_count = (isset($this->_tpldata['itemqual_row.'])) ?  sizeof($this->_tpldata['itemqual_row.']) : 0;
if ($_itemqual_row_count) {
for ($_itemqual_row_i = 0; $_itemqual_row_i < $_itemqual_row_count; $_itemqual_row_i++)
{
echo '
                        <option value="' . ((isset($this->_tpldata['itemqual_row.'][$_itemqual_row_i]['VALUE'])) ? $this->_tpldata['itemqual_row.'][$_itemqual_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['itemqual_row.'][$_itemqual_row_i]['SELECTED'])) ? $this->_tpldata['itemqual_row.'][$_itemqual_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['itemqual_row.'][$_itemqual_row_i]['OPTION'])) ? $this->_tpldata['itemqual_row.'][$_itemqual_row_i]['OPTION'] : '') . '</option>
                    ';}}
// END itemqual_row
echo '
                    </select>
                </td>
            </tr>
            <tr>
                <td class="row2">' . ((isset($this->_tpldata['.'][0]['L_NDL'])) ? $this->_tpldata['.'][0]['L_NDL'] : ((isset($user->lang['NDL'])) ? $user->lang['NDL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NDL'))) . ' 	}')) . '</td>
                <td class="row1"><input type="checkbox" name="ndl" value="1" ' . ((isset($this->_tpldata['.'][0]['BL_NDL'])) ? $this->_tpldata['.'][0]['BL_NDL'] : '') . ' /></td>
            </tr>
            <tr>
                <td class="row2">' . ((isset($this->_tpldata['.'][0]['L_WL'])) ? $this->_tpldata['.'][0]['L_WL'] : ((isset($user->lang['WL'])) ? $user->lang['WL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'WL'))) . ' 	}')) . '</td>
                <td class="row1"><input type="checkbox" name="wl" value="1" ' . ((isset($this->_tpldata['.'][0]['BL_WL'])) ? $this->_tpldata['.'][0]['BL_WL'] : '') . ' /></td>
            </tr>
            <tr>
                <td class="row2">' . ((isset($this->_tpldata['.'][0]['L_IS'])) ? $this->_tpldata['.'][0]['L_IS'] : ((isset($user->lang['IS'])) ? $user->lang['IS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'IS'))) . ' 	}')) . '</td>
                <td class="row1"><input type="checkbox" name="is" value="1" ' . ((isset($this->_tpldata['.'][0]['BL_IS'])) ? $this->_tpldata['.'][0]['BL_IS'] : '') . ' /></td>
            </tr>
</table>
</div>
<div id="fragment-4">
<table border="0" width="100%" cellspacing="1" cellpadding="2">
			<tr>
   				 <th align="center" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_GENERAL'])) ? $this->_tpldata['.'][0]['L_GENERAL'] : ((isset($user->lang['GENERAL'])) ? $user->lang['GENERAL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'GENERAL'))) . ' 	}')) . ': BossProgress</th>
			</tr>
						<tr>
				<td class="row2">' . ((isset($this->_tpldata['.'][0]['L_BP_DYNLOC'])) ? $this->_tpldata['.'][0]['L_BP_DYNLOC'] : ((isset($user->lang['BP_DYNLOC'])) ? $user->lang['BP_DYNLOC'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BP_DYNLOC'))) . ' 	}')) . '</td>
				<td class="row1"><input type="checkbox" name="bp_dynloc" value="1" ' . ((isset($this->_tpldata['.'][0]['BP_DYNLOC'])) ? $this->_tpldata['.'][0]['BP_DYNLOC'] : '') . ' /></td>
			</tr>
			<tr>
				<td class="row2">' . ((isset($this->_tpldata['.'][0]['L_BP_DYNBOSS'])) ? $this->_tpldata['.'][0]['L_BP_DYNBOSS'] : ((isset($user->lang['BP_DYNBOSS'])) ? $user->lang['BP_DYNBOSS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BP_DYNBOSS'))) . ' 	}')) . '</td>
				<td class="row1"><input type="checkbox" name="bp_dynboss" value="1" ' . ((isset($this->_tpldata['.'][0]['BP_DYNBOSS'])) ? $this->_tpldata['.'][0]['BP_DYNBOSS'] : '') . ' /></td>
			</tr>
			<tr>
				<td class="row2">' . ((isset($this->_tpldata['.'][0]['L_BP_LINK'])) ? $this->_tpldata['.'][0]['L_BP_LINK'] : ((isset($user->lang['BP_LINK'])) ? $user->lang['BP_LINK'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BP_LINK'))) . ' 	}')) . '</td>
				<td class="row1">
         	<select name="bp_linkurl" class="input">
					';// BEGIN bp_linkurl_row
$_bp_linkurl_row_count = (isset($this->_tpldata['bp_linkurl_row.'])) ?  sizeof($this->_tpldata['bp_linkurl_row.']) : 0;
if ($_bp_linkurl_row_count) {
for ($_bp_linkurl_row_i = 0; $_bp_linkurl_row_i < $_bp_linkurl_row_count; $_bp_linkurl_row_i++)
{
echo '
						<option value="' . ((isset($this->_tpldata['bp_linkurl_row.'][$_bp_linkurl_row_i]['VALUE'])) ? $this->_tpldata['bp_linkurl_row.'][$_bp_linkurl_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['bp_linkurl_row.'][$_bp_linkurl_row_i]['SELECTED'])) ? $this->_tpldata['bp_linkurl_row.'][$_bp_linkurl_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['bp_linkurl_row.'][$_bp_linkurl_row_i]['OPTION'])) ? $this->_tpldata['bp_linkurl_row.'][$_bp_linkurl_row_i]['OPTION'] : '') . '</option>
					';}}
// END bp_linkurl_row
echo '
					</select>
        	<select name="bp_linklength" class="input">
					';// BEGIN bp_linklength_row
$_bp_linklength_row_count = (isset($this->_tpldata['bp_linklength_row.'])) ?  sizeof($this->_tpldata['bp_linklength_row.']) : 0;
if ($_bp_linklength_row_count) {
for ($_bp_linklength_row_i = 0; $_bp_linklength_row_i < $_bp_linklength_row_count; $_bp_linklength_row_i++)
{
echo '
						<option value="' . ((isset($this->_tpldata['bp_linklength_row.'][$_bp_linklength_row_i]['VALUE'])) ? $this->_tpldata['bp_linklength_row.'][$_bp_linklength_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['bp_linklength_row.'][$_bp_linklength_row_i]['SELECTED'])) ? $this->_tpldata['bp_linklength_row.'][$_bp_linklength_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['bp_linklength_row.'][$_bp_linklength_row_i]['OPTION'])) ? $this->_tpldata['bp_linklength_row.'][$_bp_linklength_row_i]['OPTION'] : '') . '</option>
					';}}
// END bp_linklength_row
echo '
					</select>
        </td>
			</tr>
				<tr>
				 <td class="row2">' . ((isset($this->_tpldata['.'][0]['L_BP_STYLE'])) ? $this->_tpldata['.'][0]['L_BP_STYLE'] : ((isset($user->lang['BP_STYLE'])) ? $user->lang['BP_STYLE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BP_STYLE'))) . ' 	}')) . '</td>
				 <td class="row1">
				 	<select name="bp_style" class="input">
					';// BEGIN bp_style_row
$_bp_style_row_count = (isset($this->_tpldata['bp_style_row.'])) ?  sizeof($this->_tpldata['bp_style_row.']) : 0;
if ($_bp_style_row_count) {
for ($_bp_style_row_i = 0; $_bp_style_row_i < $_bp_style_row_count; $_bp_style_row_i++)
{
echo '
						<option value="' . ((isset($this->_tpldata['bp_style_row.'][$_bp_style_row_i]['VALUE'])) ? $this->_tpldata['bp_style_row.'][$_bp_style_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['bp_style_row.'][$_bp_style_row_i]['SELECTED'])) ? $this->_tpldata['bp_style_row.'][$_bp_style_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['bp_style_row.'][$_bp_style_row_i]['OPTION'])) ? $this->_tpldata['bp_style_row.'][$_bp_style_row_i]['OPTION'] : '') . '</option>
					';}}
// END bp_style_row
echo '
					</select>
				</td>
			</tr>
			
			<tr>
   				 <th align="center" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_BP_STYLE_OPTS'])) ? $this->_tpldata['.'][0]['L_BP_STYLE_OPTS'] : ((isset($user->lang['BP_STYLE_OPTS'])) ? $user->lang['BP_STYLE_OPTS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BP_STYLE_OPTS'))) . ' 	}')) . '</th>
			</tr>
		 	<tr>
				<td width="70%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_BP_SI_STYLE'])) ? $this->_tpldata['.'][0]['L_BP_SI_STYLE'] : ((isset($user->lang['BP_SI_STYLE'])) ? $user->lang['BP_SI_STYLE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BP_SI_STYLE'))) . ' 	}')) . '</td>
        <td class="row1">
				 	<select name="bp_si_style" class="input">
					';// BEGIN bp_si_style_row
$_bp_si_style_row_count = (isset($this->_tpldata['bp_si_style_row.'])) ?  sizeof($this->_tpldata['bp_si_style_row.']) : 0;
if ($_bp_si_style_row_count) {
for ($_bp_si_style_row_i = 0; $_bp_si_style_row_i < $_bp_si_style_row_count; $_bp_si_style_row_i++)
{
echo '
						<option value="' . ((isset($this->_tpldata['bp_si_style_row.'][$_bp_si_style_row_i]['VALUE'])) ? $this->_tpldata['bp_si_style_row.'][$_bp_si_style_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['bp_si_style_row.'][$_bp_si_style_row_i]['SELECTED'])) ? $this->_tpldata['bp_si_style_row.'][$_bp_si_style_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['bp_si_style_row.'][$_bp_si_style_row_i]['OPTION'])) ? $this->_tpldata['bp_si_style_row.'][$_bp_si_style_row_i]['OPTION'] : '') . '</option>
					';}}
// END bp_si_style_row
echo '
					</select>
				</td>
			</tr>
			<tr>
			  <td width="70%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_BP_EI_STYLE'])) ? $this->_tpldata['.'][0]['L_BP_EI_STYLE'] : ((isset($user->lang['BP_EI_STYLE'])) ? $user->lang['BP_EI_STYLE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BP_EI_STYLE'))) . ' 	}')) . '</td>
		  	<td class="row1">
				 	<select name="bp_ei_style" class="input">
					';// BEGIN bp_ei_style_row
$_bp_ei_style_row_count = (isset($this->_tpldata['bp_ei_style_row.'])) ?  sizeof($this->_tpldata['bp_ei_style_row.']) : 0;
if ($_bp_ei_style_row_count) {
for ($_bp_ei_style_row_i = 0; $_bp_ei_style_row_i < $_bp_ei_style_row_count; $_bp_ei_style_row_i++)
{
echo '
						<option value="' . ((isset($this->_tpldata['bp_ei_style_row.'][$_bp_ei_style_row_i]['VALUE'])) ? $this->_tpldata['bp_ei_style_row.'][$_bp_ei_style_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['bp_ei_style_row.'][$_bp_ei_style_row_i]['SELECTED'])) ? $this->_tpldata['bp_ei_style_row.'][$_bp_ei_style_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['bp_ei_style_row.'][$_bp_ei_style_row_i]['OPTION'])) ? $this->_tpldata['bp_ei_style_row.'][$_bp_ei_style_row_i]['OPTION'] : '') . '</option>
					';}}
// END bp_ei_style_row
echo '
					</select>
				</td>
			</tr>
			<tr>
			  <td width="70%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_BP_ZTEXT'])) ? $this->_tpldata['.'][0]['L_BP_ZTEXT'] : ((isset($user->lang['BP_ZTEXT'])) ? $user->lang['BP_ZTEXT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BP_ZTEXT'))) . ' 	}')) . '</td>
		  	<td class="row1">
				 	<select name="bp_ztext_style" class="input">
					';// BEGIN bp_ztext_style_row
$_bp_ztext_style_row_count = (isset($this->_tpldata['bp_ztext_style_row.'])) ?  sizeof($this->_tpldata['bp_ztext_style_row.']) : 0;
if ($_bp_ztext_style_row_count) {
for ($_bp_ztext_style_row_i = 0; $_bp_ztext_style_row_i < $_bp_ztext_style_row_count; $_bp_ztext_style_row_i++)
{
echo '
						<option value="' . ((isset($this->_tpldata['bp_ztext_style_row.'][$_bp_ztext_style_row_i]['VALUE'])) ? $this->_tpldata['bp_ztext_style_row.'][$_bp_ztext_style_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['bp_ztext_style_row.'][$_bp_ztext_style_row_i]['SELECTED'])) ? $this->_tpldata['bp_ztext_style_row.'][$_bp_ztext_style_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['bp_ztext_style_row.'][$_bp_ztext_style_row_i]['OPTION'])) ? $this->_tpldata['bp_ztext_style_row.'][$_bp_ztext_style_row_i]['OPTION'] : '') . '</option>
					';}}
// END bp_ztext_style_row
echo '
					</select>
				</td>
			</tr>
			<tr>
				<td class="row2">' . ((isset($this->_tpldata['.'][0]['L_BP_SHOWSB'])) ? $this->_tpldata['.'][0]['L_BP_SHOWSB'] : ((isset($user->lang['BP_SHOWSB'])) ? $user->lang['BP_SHOWSB'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BP_SHOWSB'))) . ' 	}')) . '</td>
				<td class="row1"><input type="checkbox" name="bp_showSB" value="1" ' . ((isset($this->_tpldata['.'][0]['BP_SHOWSB'])) ? $this->_tpldata['.'][0]['BP_SHOWSB'] : '') . ' /></td>
			</tr>
</table>
</div>
<div id="fragment-5">
<table border="0" width="100%" cellspacing="1" cellpadding="2">
			<tr>
   				 <th align="center" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_GENERAL'])) ? $this->_tpldata['.'][0]['L_GENERAL'] : ((isset($user->lang['GENERAL'])) ? $user->lang['GENERAL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'GENERAL'))) . ' 	}')) . ': BossCounter</th>
			</tr>
      <tr>
          <td class="row2">' . ((isset($this->_tpldata['.'][0]['L_BC_EYECANDY'])) ? $this->_tpldata['.'][0]['L_BC_EYECANDY'] : ((isset($user->lang['BC_EYECANDY'])) ? $user->lang['BC_EYECANDY'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BC_EYECANDY'))) . ' 	}')) . '</td>
          <td class="row1"><input type="checkbox" name="bc_eyecandy" value="1" ' . ((isset($this->_tpldata['.'][0]['BC_EYECANDY'])) ? $this->_tpldata['.'][0]['BC_EYECANDY'] : '') . ' /></td>
      </tr>
			<tr>
				<td width="70%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_BC_DYNLOC'])) ? $this->_tpldata['.'][0]['L_BC_DYNLOC'] : ((isset($user->lang['BC_DYNLOC'])) ? $user->lang['BC_DYNLOC'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BC_DYNLOC'))) . ' 	}')) . '</td>
				<td width="30%" class="row1"><input type="checkbox" name="bc_dynloc" value="1" ' . ((isset($this->_tpldata['.'][0]['BC_DYNLOC'])) ? $this->_tpldata['.'][0]['BC_DYNLOC'] : '') . ' /></td>
			</tr>
			<tr>
				<td class="row2">' . ((isset($this->_tpldata['.'][0]['L_BC_DYNBOSS'])) ? $this->_tpldata['.'][0]['L_BC_DYNBOSS'] : ((isset($user->lang['BC_DYNBOSS'])) ? $user->lang['BC_DYNBOSS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BC_DYNBOSS'))) . ' 	}')) . '</td>
				<td class="row1"><input type="checkbox" name="bc_dynboss" value="1" ' . ((isset($this->_tpldata['.'][0]['BC_DYNBOSS'])) ? $this->_tpldata['.'][0]['BC_DYNBOSS'] : '') . ' /></td>
			</tr>
			<tr>
				<td class="row2">' . ((isset($this->_tpldata['.'][0]['L_BC_ZONELENGTH'])) ? $this->_tpldata['.'][0]['L_BC_ZONELENGTH'] : ((isset($user->lang['BC_ZONELENGTH'])) ? $user->lang['BC_ZONELENGTH'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BC_ZONELENGTH'))) . ' 	}')) . '</td>
				<td class="row1">
         	<select name="bc_zonelength" class="input">
					';// BEGIN bc_zonelength_row
$_bc_zonelength_row_count = (isset($this->_tpldata['bc_zonelength_row.'])) ?  sizeof($this->_tpldata['bc_zonelength_row.']) : 0;
if ($_bc_zonelength_row_count) {
for ($_bc_zonelength_row_i = 0; $_bc_zonelength_row_i < $_bc_zonelength_row_count; $_bc_zonelength_row_i++)
{
echo '
						<option value="' . ((isset($this->_tpldata['bc_zonelength_row.'][$_bc_zonelength_row_i]['VALUE'])) ? $this->_tpldata['bc_zonelength_row.'][$_bc_zonelength_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['bc_zonelength_row.'][$_bc_zonelength_row_i]['SELECTED'])) ? $this->_tpldata['bc_zonelength_row.'][$_bc_zonelength_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['bc_zonelength_row.'][$_bc_zonelength_row_i]['OPTION'])) ? $this->_tpldata['bc_zonelength_row.'][$_bc_zonelength_row_i]['OPTION'] : '') . '</option>
					';}}
// END bc_zonelength_row
echo '
					</select>
        </td>
			</tr>
			<tr>
				<td class="row2">' . ((isset($this->_tpldata['.'][0]['L_BC_LINK'])) ? $this->_tpldata['.'][0]['L_BC_LINK'] : ((isset($user->lang['BC_LINK'])) ? $user->lang['BC_LINK'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BC_LINK'))) . ' 	}')) . '</td>
				<td class="row1">
         	<select name="bc_linkurl" class="input">
					';// BEGIN bc_linkurl_row
$_bc_linkurl_row_count = (isset($this->_tpldata['bc_linkurl_row.'])) ?  sizeof($this->_tpldata['bc_linkurl_row.']) : 0;
if ($_bc_linkurl_row_count) {
for ($_bc_linkurl_row_i = 0; $_bc_linkurl_row_i < $_bc_linkurl_row_count; $_bc_linkurl_row_i++)
{
echo '
						<option value="' . ((isset($this->_tpldata['bc_linkurl_row.'][$_bc_linkurl_row_i]['VALUE'])) ? $this->_tpldata['bc_linkurl_row.'][$_bc_linkurl_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['bc_linkurl_row.'][$_bc_linkurl_row_i]['SELECTED'])) ? $this->_tpldata['bc_linkurl_row.'][$_bc_linkurl_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['bc_linkurl_row.'][$_bc_linkurl_row_i]['OPTION'])) ? $this->_tpldata['bc_linkurl_row.'][$_bc_linkurl_row_i]['OPTION'] : '') . '</option>
					';}}
// END bc_linkurl_row
echo '
					</select>
        	<select name="bc_linklength" class="input">
					';// BEGIN bc_linklength_row
$_bc_linklength_row_count = (isset($this->_tpldata['bc_linklength_row.'])) ?  sizeof($this->_tpldata['bc_linklength_row.']) : 0;
if ($_bc_linklength_row_count) {
for ($_bc_linklength_row_i = 0; $_bc_linklength_row_i < $_bc_linklength_row_count; $_bc_linklength_row_i++)
{
echo '
						<option value="' . ((isset($this->_tpldata['bc_linklength_row.'][$_bc_linklength_row_i]['VALUE'])) ? $this->_tpldata['bc_linklength_row.'][$_bc_linklength_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['bc_linklength_row.'][$_bc_linklength_row_i]['SELECTED'])) ? $this->_tpldata['bc_linklength_row.'][$_bc_linklength_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['bc_linklength_row.'][$_bc_linklength_row_i]['OPTION'])) ? $this->_tpldata['bc_linklength_row.'][$_bc_linklength_row_i]['OPTION'] : '') . '</option>
					';}}
// END bc_linklength_row
echo '
					</select>
        </td>
			</tr>
</table>
</div>
</div>
<table width="100%" border="0" cellspacing="1" cellpadding="2">
 <tr><th align="center" colspan="2"><input type="submit" name="bpsavebu" value="' . ((isset($this->_tpldata['.'][0]['L_SUBMIT'])) ? $this->_tpldata['.'][0]['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SUBMIT'))) . ' 	}')) . '" class="mainoption" /></th></tr>
</table>
</form>
<br />';
}
?>