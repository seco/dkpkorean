<?php
if ($this->security()) {
echo '<form method="post" action="' . ((isset($this->_tpldata['.'][0]['F_PARSE_LOG'])) ? $this->_tpldata['.'][0]['F_PARSE_LOG'] : '') . '" name="post">
    <table width="100%" border="0" cellspacing="1" cellpadding="2" id="raid">
      <tr>
        <th colspan="2">' . ((isset($this->_tpldata['.'][0]['L_RAIDS'])) ? $this->_tpldata['.'][0]['L_RAIDS'] : ((isset($user->lang['RAIDS'])) ? $user->lang['RAIDS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAIDS'))) . ' 	}')) . '</th>
      </tr>
      ';// BEGIN raids
$_raids_count = (isset($this->_tpldata['raids.'])) ?  sizeof($this->_tpldata['raids.']) : 0;
if ($_raids_count) {
for ($_raids_i = 0; $_raids_i < $_raids_count; $_raids_i++)
{
echo '
      <tr>
      	<th colspan="2"> ' . ((isset($this->_tpldata['raids.'][$_raids_i]['COUNT'])) ? $this->_tpldata['raids.'][$_raids_i]['COUNT'] : '') . '. ' . ((isset($this->_tpldata['.'][0]['L_RAID'])) ? $this->_tpldata['.'][0]['L_RAID'] : ((isset($user->lang['RAID'])) ? $user->lang['RAID'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAID'))) . ' 	}')) . ':&nbsp;&nbsp;&nbsp;
      		<img src="./../../../images/global/delete.png" alt="' . ((isset($this->_tpldata['.'][0]['L_DELETE'])) ? $this->_tpldata['.'][0]['L_DELETE'] : ((isset($user->lang['DELETE'])) ? $user->lang['DELETE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DELETE'))) . ' 	}')) . '"><input type="checkbox" name="raids[' . ((isset($this->_tpldata['raids.'][$_raids_i]['COUNT'])) ? $this->_tpldata['raids.'][$_raids_i]['COUNT'] : '') . '][delete]" value="true" title="' . ((isset($this->_tpldata['.'][0]['L_DELETE'])) ? $this->_tpldata['.'][0]['L_DELETE'] : ((isset($user->lang['DELETE'])) ? $user->lang['DELETE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DELETE'))) . ' 	}')) . '" />
      	</th>
      </tr>
      <tr class="row1">
      	<td>' . ((isset($this->_tpldata['.'][0]['L_START'])) ? $this->_tpldata['.'][0]['L_START'] : ((isset($user->lang['START'])) ? $user->lang['START'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'START'))) . ' 	}')) . ': <input type="text" name="raids[' . ((isset($this->_tpldata['raids.'][$_raids_i]['COUNT'])) ? $this->_tpldata['raids.'][$_raids_i]['COUNT'] : '') . '][start_date]" id="raid_start_date_' . ((isset($this->_tpldata['raids.'][$_raids_i]['COUNT'])) ? $this->_tpldata['raids.'][$_raids_i]['COUNT'] : '') . '" value="' . ((isset($this->_tpldata['raids.'][$_raids_i]['START_DATE'])) ? $this->_tpldata['raids.'][$_raids_i]['START_DATE'] : '') . '" class="maininput" size="9" />
      			<script>
                jQuery(function($){
                          $(\'#raid_start_date_' . ((isset($this->_tpldata['raids.'][$_raids_i]['COUNT'])) ? $this->_tpldata['raids.'][$_raids_i]['COUNT'] : '') . '\').datepicker({showOn: \'button\', buttonImage: \'./../../../libraries/jquery/images/calendar.png\', buttonImageOnly: true, dateFormat: \'dd.mm.y\'});
                });
                </script>
                <input type="text" name="raids[' . ((isset($this->_tpldata['raids.'][$_raids_i]['COUNT'])) ? $this->_tpldata['raids.'][$_raids_i]['COUNT'] : '') . '][start_time]" value="' . ((isset($this->_tpldata['raids.'][$_raids_i]['START_TIME'])) ? $this->_tpldata['raids.'][$_raids_i]['START_TIME'] : '') . '" class="maininput" size="9" />
        </td>

        <td>' . ((isset($this->_tpldata['.'][0]['L_EVENT'])) ? $this->_tpldata['.'][0]['L_EVENT'] : ((isset($user->lang['EVENT'])) ? $user->lang['EVENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EVENT'))) . ' 	}')) . ': ' . ((isset($this->_tpldata['raids.'][$_raids_i]['EVENT'])) ? $this->_tpldata['raids.'][$_raids_i]['EVENT'] : '') . '
        	';// IF USE_TIMEDKP
if ($this->_tpldata['.'][0]['USE_TIMEDKP']) { 
echo ' &nbsp;&nbsp;&nbsp; DKP/h: <input type="text" name="raids[' . ((isset($this->_tpldata['raids.'][$_raids_i]['COUNT'])) ? $this->_tpldata['raids.'][$_raids_i]['COUNT'] : '') . '][timebonus]" value="' . ((isset($this->_tpldata['raids.'][$_raids_i]['TIMEBONUS'])) ? $this->_tpldata['raids.'][$_raids_i]['TIMEBONUS'] : '') . '" class="maininput" size="5" />';// ENDIF
}
echo '
        </td>
      </tr>
      <tr class="row2">
        <td>' . ((isset($this->_tpldata['.'][0]['L_END'])) ? $this->_tpldata['.'][0]['L_END'] : ((isset($user->lang['END'])) ? $user->lang['END'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'END'))) . ' 	}')) . ': <input type="text" name="raids[' . ((isset($this->_tpldata['raids.'][$_raids_i]['COUNT'])) ? $this->_tpldata['raids.'][$_raids_i]['COUNT'] : '') . '][end_date]" id="raid_end_date_' . ((isset($this->_tpldata['raids.'][$_raids_i]['COUNT'])) ? $this->_tpldata['raids.'][$_raids_i]['COUNT'] : '') . '" value="' . ((isset($this->_tpldata['raids.'][$_raids_i]['END_DATE'])) ? $this->_tpldata['raids.'][$_raids_i]['END_DATE'] : '') . '" class="maininput" size="9" />
        		<script>
                jQuery(function($){
                          $(\'#raid_end_date_' . ((isset($this->_tpldata['raids.'][$_raids_i]['COUNT'])) ? $this->_tpldata['raids.'][$_raids_i]['COUNT'] : '') . '\').datepicker({showOn: \'button\', buttonImage: \'./../../../libraries/jquery/images/calendar.png\', buttonImageOnly: true, dateFormat: \'dd.mm.y\'});
                });
                </script>
                <input type="text" name="raids[' . ((isset($this->_tpldata['raids.'][$_raids_i]['COUNT'])) ? $this->_tpldata['raids.'][$_raids_i]['COUNT'] : '') . '][end_time]" value="' . ((isset($this->_tpldata['raids.'][$_raids_i]['END_TIME'])) ? $this->_tpldata['raids.'][$_raids_i]['END_TIME'] : '') . '" class="maininput" size="9" />
        </td>
        <td>' . ((isset($this->_tpldata['.'][0]['L_VALUE'])) ? $this->_tpldata['.'][0]['L_VALUE'] : ((isset($user->lang['VALUE'])) ? $user->lang['VALUE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'VALUE'))) . ' 	}')) . ': ';// IF S_NULL_SUM
if ($this->_tpldata['.'][0]['S_NULL_SUM']) { 
echo '' . ((isset($this->_tpldata['.'][0]['L_RV_NS'])) ? $this->_tpldata['.'][0]['L_RV_NS'] : ((isset($user->lang['RV_NS'])) ? $user->lang['RV_NS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RV_NS'))) . ' 	}')) . '';// ELSE
} else {
echo '<input type="text" name="raids[' . ((isset($this->_tpldata['raids.'][$_raids_i]['COUNT'])) ? $this->_tpldata['raids.'][$_raids_i]['COUNT'] : '') . '][value]" value="' . ((isset($this->_tpldata['raids.'][$_raids_i]['VALUE'])) ? $this->_tpldata['raids.'][$_raids_i]['VALUE'] : '') . '" class="maininput" />';// ENDIF
}
echo '</td>
      </tr>
      <tr class="row1">
        <td colspan="2">' . ((isset($this->_tpldata['.'][0]['L_NOTE'])) ? $this->_tpldata['.'][0]['L_NOTE'] : ((isset($user->lang['NOTE'])) ? $user->lang['NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NOTE'))) . ' 	}')) . ': <input type="text" name="raids[' . ((isset($this->_tpldata['raids.'][$_raids_i]['COUNT'])) ? $this->_tpldata['raids.'][$_raids_i]['COUNT'] : '') . '][note]" value="' . ((isset($this->_tpldata['raids.'][$_raids_i]['NOTE'])) ? $this->_tpldata['raids.'][$_raids_i]['NOTE'] : '') . '" class="maininput" size="90" /></td>
      </tr>
      <tr class="row2">
		<td colspan="2">' . ((isset($this->_tpldata['.'][0]['L_BOSSKILLS'])) ? $this->_tpldata['.'][0]['L_BOSSKILLS'] : ((isset($user->lang['BOSSKILLS'])) ? $user->lang['BOSSKILLS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BOSSKILLS'))) . ' 	}')) . ':</td>
	  </tr>
	  <tr class="row1">
		<td colspan="2">
		';// BEGIN bosskills
$_bosskills_count = (isset($this->_tpldata['raids.'][$_raids_i]['bosskills.'])) ? sizeof($this->_tpldata['raids.'][$_raids_i]['bosskills.']) : 0;
if ($_bosskills_count) {
for ($_bosskills_i = 0; $_bosskills_i < $_bosskills_count; $_bosskills_i++)
{
echo '
			' . ((isset($this->_tpldata['raids.'][$_raids_i]['bosskills.'][$_bosskills_i]['BK_SELECT'])) ? $this->_tpldata['raids.'][$_raids_i]['bosskills.'][$_bosskills_i]['BK_SELECT'] : '') . '
			&nbsp;&nbsp;&nbsp;&nbsp;' . ((isset($this->_tpldata['.'][0]['L_TIME'])) ? $this->_tpldata['.'][0]['L_TIME'] : ((isset($user->lang['TIME'])) ? $user->lang['TIME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TIME'))) . ' 	}')) . ': <input type="text" name="raids[' . ((isset($this->_tpldata['raids.'][$_raids_i]['COUNT'])) ? $this->_tpldata['raids.'][$_raids_i]['COUNT'] : '') . '][bosskills][' . ((isset($this->_tpldata['raids.'][$_raids_i]['bosskills.'][$_bosskills_i]['BK_KEY'])) ? $this->_tpldata['raids.'][$_raids_i]['bosskills.'][$_bosskills_i]['BK_KEY'] : '') . '][time]" value="' . ((isset($this->_tpldata['raids.'][$_raids_i]['bosskills.'][$_bosskills_i]['BK_TIME'])) ? $this->_tpldata['raids.'][$_raids_i]['bosskills.'][$_bosskills_i]['BK_TIME'] : '') . '" size="9" />
			&nbsp;&nbsp;&nbsp;&nbsp;' . ((isset($this->_tpldata['.'][0]['L_DATE'])) ? $this->_tpldata['.'][0]['L_DATE'] : ((isset($user->lang['DATE'])) ? $user->lang['DATE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DATE'))) . ' 	}')) . ': <input type="text" name="raids[' . ((isset($this->_tpldata['raids.'][$_raids_i]['COUNT'])) ? $this->_tpldata['raids.'][$_raids_i]['COUNT'] : '') . '][bosskills][' . ((isset($this->_tpldata['raids.'][$_raids_i]['bosskills.'][$_bosskills_i]['BK_KEY'])) ? $this->_tpldata['raids.'][$_raids_i]['bosskills.'][$_bosskills_i]['BK_KEY'] : '') . '][date]" value="' . ((isset($this->_tpldata['raids.'][$_raids_i]['bosskills.'][$_bosskills_i]['BK_DATE'])) ? $this->_tpldata['raids.'][$_raids_i]['bosskills.'][$_bosskills_i]['BK_DATE'] : '') . '" size="9" />
			';// IF USE_BOSSDKP
if ($this->_tpldata['.'][0]['USE_BOSSDKP']) { 
echo '
				&nbsp;&nbsp;&nbsp;&nbsp;' . ((isset($this->_tpldata['.'][0]['L_VALUE'])) ? $this->_tpldata['.'][0]['L_VALUE'] : ((isset($user->lang['VALUE'])) ? $user->lang['VALUE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'VALUE'))) . ' 	}')) . ': <input type="text" name="raids[' . ((isset($this->_tpldata['raids.'][$_raids_i]['COUNT'])) ? $this->_tpldata['raids.'][$_raids_i]['COUNT'] : '') . '][bosskills][' . ((isset($this->_tpldata['raids.'][$_raids_i]['bosskills.'][$_bosskills_i]['BK_KEY'])) ? $this->_tpldata['raids.'][$_raids_i]['bosskills.'][$_bosskills_i]['BK_KEY'] : '') . '][bonus]" value="' . ((isset($this->_tpldata['raids.'][$_raids_i]['bosskills.'][$_bosskills_i]['BK_VALUE'])) ? $this->_tpldata['raids.'][$_raids_i]['bosskills.'][$_bosskills_i]['BK_VALUE'] : '') . '" size="5" />
			';// ENDIF
}
echo '
			&nbsp;&nbsp;&nbsp;&nbsp;<img src="./../../../images/global/delete.png" alt="' . ((isset($this->_tpldata['.'][0]['L_DELETE'])) ? $this->_tpldata['.'][0]['L_DELETE'] : ((isset($user->lang['DELETE'])) ? $user->lang['DELETE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DELETE'))) . ' 	}')) . '">
				<input type="checkbox" name="raids[' . ((isset($this->_tpldata['raids.'][$_raids_i]['COUNT'])) ? $this->_tpldata['raids.'][$_raids_i]['COUNT'] : '') . ']][bosskills][' . ((isset($this->_tpldata['raids.'][$_raids_i]['bosskills.'][$_bosskills_i]['BK_KEY'])) ? $this->_tpldata['raids.'][$_raids_i]['bosskills.'][$_bosskills_i]['BK_KEY'] : '') . '][delete]" value="true" title="' . ((isset($this->_tpldata['.'][0]['L_DELETE'])) ? $this->_tpldata['.'][0]['L_DELETE'] : ((isset($user->lang['DELETE'])) ? $user->lang['DELETE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DELETE'))) . ' 	}')) . '" /><br />
		';}}
// END bosskills
echo '
		</td>
	  </tr>
	  <tr class="row2">
	  	<td colspan="2">
	  		<select name="raids[' . ((isset($this->_tpldata['raids.'][$_raids_i]['COUNT'])) ? $this->_tpldata['raids.'][$_raids_i]['COUNT'] : '') . '][bosskill_add]">
	  		  <option value="0">0..' . ((isset($this->_tpldata['.'][0]['L_BKS_ADD'])) ? $this->_tpldata['.'][0]['L_BKS_ADD'] : ((isset($user->lang['BKS_ADD'])) ? $user->lang['BKS_ADD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BKS_ADD'))) . ' 	}')) . '</option>
	  		  <option value="1">1..' . ((isset($this->_tpldata['.'][0]['L_BK_ADD'])) ? $this->_tpldata['.'][0]['L_BK_ADD'] : ((isset($user->lang['BK_ADD'])) ? $user->lang['BK_ADD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BK_ADD'))) . ' 	}')) . '</option>
	  		  <option value="2">2..' . ((isset($this->_tpldata['.'][0]['L_BKS_ADD'])) ? $this->_tpldata['.'][0]['L_BKS_ADD'] : ((isset($user->lang['BKS_ADD'])) ? $user->lang['BKS_ADD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BKS_ADD'))) . ' 	}')) . '</option>
	  		  <option value="3">3..' . ((isset($this->_tpldata['.'][0]['L_BKS_ADD'])) ? $this->_tpldata['.'][0]['L_BKS_ADD'] : ((isset($user->lang['BKS_ADD'])) ? $user->lang['BKS_ADD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BKS_ADD'))) . ' 	}')) . '</option>
	  		  <option value="4">4..' . ((isset($this->_tpldata['.'][0]['L_BKS_ADD'])) ? $this->_tpldata['.'][0]['L_BKS_ADD'] : ((isset($user->lang['BKS_ADD'])) ? $user->lang['BKS_ADD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BKS_ADD'))) . ' 	}')) . '</option>
	  		  <option value="5">5..' . ((isset($this->_tpldata['.'][0]['L_BKS_ADD'])) ? $this->_tpldata['.'][0]['L_BKS_ADD'] : ((isset($user->lang['BKS_ADD'])) ? $user->lang['BKS_ADD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BKS_ADD'))) . ' 	}')) . '</option>
	  		</select>
	  	</td>
	  </tr>
	  ';}}
// END raids
echo '
	  <tr class="row1">
	  	<td><select name="raid_add">
	  		  <option value="0">0..' . ((isset($this->_tpldata['.'][0]['L_RAIDS_ADD'])) ? $this->_tpldata['.'][0]['L_RAIDS_ADD'] : ((isset($user->lang['RAIDS_ADD'])) ? $user->lang['RAIDS_ADD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAIDS_ADD'))) . ' 	}')) . '</option>
	  		  <option value="1">1..' . ((isset($this->_tpldata['.'][0]['L_RAID_ADD'])) ? $this->_tpldata['.'][0]['L_RAID_ADD'] : ((isset($user->lang['RAID_ADD'])) ? $user->lang['RAID_ADD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAID_ADD'))) . ' 	}')) . '</option>
	  		  <option value="2">2..' . ((isset($this->_tpldata['.'][0]['L_RAIDS_ADD'])) ? $this->_tpldata['.'][0]['L_RAIDS_ADD'] : ((isset($user->lang['RAIDS_ADD'])) ? $user->lang['RAIDS_ADD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAIDS_ADD'))) . ' 	}')) . '</option>
	  		  <option value="3">3..' . ((isset($this->_tpldata['.'][0]['L_RAIDS_ADD'])) ? $this->_tpldata['.'][0]['L_RAIDS_ADD'] : ((isset($user->lang['RAIDS_ADD'])) ? $user->lang['RAIDS_ADD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAIDS_ADD'))) . ' 	}')) . '</option>
	  		  <option value="4">4..' . ((isset($this->_tpldata['.'][0]['L_RAIDS_ADD'])) ? $this->_tpldata['.'][0]['L_RAIDS_ADD'] : ((isset($user->lang['RAIDS_ADD'])) ? $user->lang['RAIDS_ADD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAIDS_ADD'))) . ' 	}')) . '</option>
	  		  <option value="5">5..' . ((isset($this->_tpldata['.'][0]['L_RAIDS_ADD'])) ? $this->_tpldata['.'][0]['L_RAIDS_ADD'] : ((isset($user->lang['RAIDS_ADD'])) ? $user->lang['RAIDS_ADD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAIDS_ADD'))) . ' 	}')) . '</option>
	  		</select>
	  	</td>
	  	<td class="row1">&nbsp;</td>
	  </tr>
	  <tr>
	   	<th colspan="2"><input type="hidden" name="rest" value="' . ((isset($this->_tpldata['.'][0]['DATA'])) ? $this->_tpldata['.'][0]['DATA'] : '') . '" />
	   					<input type="submit" name="checkmem" value="' . ((isset($this->_tpldata['.'][0]['L_CHECKMEM'])) ? $this->_tpldata['.'][0]['L_CHECKMEM'] : ((isset($user->lang['CHECKMEM'])) ? $user->lang['CHECKMEM'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CHECKMEM'))) . ' 	}')) . '" class="mainoption" />
            			<input type="submit" name="checkraid" value="' . ((isset($this->_tpldata['.'][0]['L_UPD'])) ? $this->_tpldata['.'][0]['L_UPD'] : ((isset($user->lang['UPD'])) ? $user->lang['UPD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'UPD'))) . ' 	}')) . '" class="mainoption" />
            			<input type="submit" name="checkraid" value="' . ((isset($this->_tpldata['.'][0]['L_RECALC_RAID'])) ? $this->_tpldata['.'][0]['L_RECALC_RAID'] : ((isset($user->lang['RECALC_RAID'])) ? $user->lang['RECALC_RAID'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RECALC_RAID'))) . ' 	}')) . '" class="mainoption" /></th>
	</table>
</form>';
}
?>