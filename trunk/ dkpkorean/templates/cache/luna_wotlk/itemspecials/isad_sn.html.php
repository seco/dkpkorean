<?php
if ($this->security()) {
echo '<script language="JavaScript" type="text/javascript">
' . ((isset($this->_tpldata['.'][0]['CSS_AJAX'])) ? $this->_tpldata['.'][0]['CSS_AJAX'] : '') . '

function confirmm(z){
  window.status = \'Sajax version updated\';
}

function onDrop() {
  var data = DragDrop.serData(\'g2\'); 
  x_sajax_update(data, confirmm);
}

window.onload = function() {
	var list = document.getElementById("itempool");
                DragDrop.makeListContainer( list, \'g2\' );
                list.onDragOver = function() { this.style["background"] = "#EEF"; };
                list.onDragOut = function() {this.style["background"] = "none"; };
                list.onDragDrop = function() {onDrop(); };
                
                list = document.getElementById("itemshow");
                DragDrop.makeListContainer( list, \'g2\' );
                list.onDragOver = function() { this.style["background"] = "#EEF"; };
                list.onDragOut = function() {this.style["background"] = "none"; };
                list.onDragDrop = function() {onDrop(); };
};
        
function getSort(){
  order = document.getElementById("order");
  order.value = DragDrop.serData(\'g1\', null);
}
        
function showValue(){
  order = document.getElementById("order");
  alert(order.value);
}

function LoadCache(){
 ' . ((isset($this->_tpldata['.'][0]['JS_LOADCACHE'])) ? $this->_tpldata['.'][0]['JS_LOADCACHE'] : '') . '
}

' . ((isset($this->_tpldata['.'][0]['JS_CONFIRM_RESET'])) ? $this->_tpldata['.'][0]['JS_CONFIRM_RESET'] : '') . '
' . ((isset($this->_tpldata['.'][0]['JS_CONFIRM_DEL'])) ? $this->_tpldata['.'][0]['JS_CONFIRM_DEL'] : '') . '
	 
function AddItemDialog() {
  ' . ((isset($this->_tpldata['.'][0]['JS_ADDITEM'])) ? $this->_tpldata['.'][0]['JS_ADDITEM'] : '') . '
}
	
function ManageItemDialog() {
  ' . ((isset($this->_tpldata['.'][0]['JS_DELETEITEM'])) ? $this->_tpldata['.'][0]['JS_DELETEITEM'] : '') . '
}

' . ((isset($this->_tpldata['.'][0]['JS_SAVE_MSG'])) ? $this->_tpldata['.'][0]['JS_SAVE_MSG'] : '') . '
</script>
<style type="text/css">

#itempool {
    width: 180px;
    float: left;
    margin-left: 5px;
}

#itemshow {
    width: 180px;
    float: left;
    margin-left: 5px;
}

form {
  clear: left;
}

h2 {
	color: #7DA721;
	font-weight: normal;
	font-size: 14px;
	margin: 20px 0 0 0;
}

br {
  clear: left;
}

#myDialogId .myButtonClass {
  padding:3px;
  font-size:18px;
  width:100px;
}

#myDialogId .ok_button {
  color:#2F2;
}

#myDialogId .cancel_button {
  color:#F88;
}

#drag_info {
	font-size: 13px;
	font-family: Arial, sans-serif;
  border: 1px solid red;
  width:380px;
  padding: 8px;
}  
</style>
<script language="JavaScript" type="text/javascript" src="../include/javascripts/admin.js"></script>
' . ((isset($this->_tpldata['.'][0]['UPDCHECK_BOX'])) ? $this->_tpldata['.'][0]['UPDCHECK_BOX'] : '') . '
' . ((isset($this->_tpldata['.'][0]['UPDATE_BOX'])) ? $this->_tpldata['.'][0]['UPDATE_BOX'] : '') . '
<form method="post" action="' . ((isset($this->_tpldata['.'][0]['F_CUSTOM'])) ? $this->_tpldata['.'][0]['F_CUSTOM'] : '') . '" name="sett_customs">
<input type=\'hidden\' name=\'task\' value=\'\'>
</form>
<form method="post" action="' . ((isset($this->_tpldata['.'][0]['F_CONFIG'])) ? $this->_tpldata['.'][0]['F_CONFIG'] : '') . '" name="data">
<input type=\'hidden\' name=\'langval\' value=\'\'>
</form>
<form method="post" action="' . ((isset($this->_tpldata['.'][0]['F_CONFIG'])) ? $this->_tpldata['.'][0]['F_CONFIG'] : '') . '" name="settings">
<table border="0" width="100%" cellspacing="1" cellpadding="2">
	<tr>
    <th align="left" align="center">
    	<span style="cursor: pointer;"><a href="javascript:expand();"><img src="../images/descending.gif" alt="" title="' . ((isset($this->_tpldata['.'][0]['L_ALLEXPAND'])) ? $this->_tpldata['.'][0]['L_ALLEXPAND'] : ((isset($user->lang['ALLEXPAND'])) ? $user->lang['ALLEXPAND'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ALLEXPAND'))) . ' 	}')) . '" border="0" height="9" width="9"> ' . ((isset($this->_tpldata['.'][0]['L_ALLEXPAND'])) ? $this->_tpldata['.'][0]['L_ALLEXPAND'] : ((isset($user->lang['ALLEXPAND'])) ? $user->lang['ALLEXPAND'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ALLEXPAND'))) . ' 	}')) . '</a></span>
    </th>
	</tr>
	<tr>
    <th align="left" onclick="show_section(\'section0\')">
    	<span style="cursor: pointer;"><img src="../images/descending.gif" alt="" title="' . ((isset($this->_tpldata['.'][0]['L_HEADER_HELP'])) ? $this->_tpldata['.'][0]['L_HEADER_HELP'] : ((isset($user->lang['HEADER_HELP'])) ? $user->lang['HEADER_HELP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'HEADER_HELP'))) . ' 	}')) . '" border="0" height="9" width="9"> ' . ((isset($this->_tpldata['.'][0]['L_GENERAL'])) ? $this->_tpldata['.'][0]['L_GENERAL'] : ((isset($user->lang['GENERAL'])) ? $user->lang['GENERAL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'GENERAL'))) . ' 	}')) . '</span>
    	</th>
	</tr>
	<tr>
		<td>
			<div style="display: block;" id="section0" >
			<table align="center" border="0" cellpadding="0" cellspacing="1" width="100%"> 
				<tr>
					<td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_LANGUAGE'])) ? $this->_tpldata['.'][0]['L_LANGUAGE'] : ((isset($user->lang['LANGUAGE'])) ? $user->lang['LANGUAGE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LANGUAGE'))) . ' 	}')) . '</td>
					<td width="40%" class="row1">' . ((isset($this->_tpldata['.'][0]['DRPDN_ST_LANG'])) ? $this->_tpldata['.'][0]['DRPDN_ST_LANG'] : '') . '</td>
				</tr>
				<tr>
					<td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_UPDATECHECK'])) ? $this->_tpldata['.'][0]['L_UPDATECHECK'] : ((isset($user->lang['UPDATECHECK'])) ? $user->lang['UPDATECHECK'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'UPDATECHECK'))) . ' 	}')) . ' ' . ((isset($this->_tpldata['.'][0]['L_HELP_UPDATECH'])) ? $this->_tpldata['.'][0]['L_HELP_UPDATECH'] : ((isset($user->lang['HELP_UPDATECH'])) ? $user->lang['HELP_UPDATECH'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'HELP_UPDATECH'))) . ' 	}')) . '</td>
					<td width="40%" class="row1"><input type="checkbox" name="is_updatecheck" value="1" ' . ((isset($this->_tpldata['.'][0]['UPDATE_CHECK'])) ? $this->_tpldata['.'][0]['UPDATE_CHECK'] : '') . ' />
					</td>
				</tr>
				<tr>
					<td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_HIDE_VERSION'])) ? $this->_tpldata['.'][0]['L_HIDE_VERSION'] : ((isset($user->lang['HIDE_VERSION'])) ? $user->lang['HIDE_VERSION'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'HIDE_VERSION'))) . ' 	}')) . '</td>
					<td width="40%" class="row1"><input type="checkbox" name="is_hideversion" value="1" ' . ((isset($this->_tpldata['.'][0]['HIDE_VERSION'])) ? $this->_tpldata['.'][0]['HIDE_VERSION'] : '') . ' /></td>
				</tr>
				<tr>
					<td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_HIDE_INACT'])) ? $this->_tpldata['.'][0]['L_HIDE_INACT'] : ((isset($user->lang['HIDE_INACT'])) ? $user->lang['HIDE_INACT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'HIDE_INACT'))) . ' 	}')) . '</td>
					<td width="40%" class="row1"><input type="checkbox" name="hide_inactives" value="1" ' . ((isset($this->_tpldata['.'][0]['HIDE_INACTIVE'])) ? $this->_tpldata['.'][0]['HIDE_INACTIVE'] : '') . ' /></td>
				</tr>
				<tr>
					<td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_HIDEN_GRP'])) ? $this->_tpldata['.'][0]['L_HIDEN_GRP'] : ((isset($user->lang['HIDEN_GRP'])) ? $user->lang['HIDEN_GRP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'HIDEN_GRP'))) . ' 	}')) . '</td>
					<td width="40%" class="row1"><input type="checkbox" name="hidden_groups" value="1" ' . ((isset($this->_tpldata['.'][0]['HIDDEN_GRP'])) ? $this->_tpldata['.'][0]['HIDDEN_GRP'] : '') . ' /></td>
				</tr>
				<tr>
					<td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_COLORD_CLS'])) ? $this->_tpldata['.'][0]['L_COLORD_CLS'] : ((isset($user->lang['COLORD_CLS'])) ? $user->lang['COLORD_CLS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'COLORD_CLS'))) . ' 	}')) . '</td>
					<td width="40%" class="row1"><input type="checkbox" name="colouredcls" value="1" ' . ((isset($this->_tpldata['.'][0]['COLOREDCLS'])) ? $this->_tpldata['.'][0]['COLOREDCLS'] : '') . ' /></td>
				</tr>
				<tr>
					<td width="60%" class="row2">&nbsp;</td>
					<td width="40%" class="row1">&nbsp;</td>
				</tr>
				<tr>
					<td width="100%" class="row2" colspan="2">
						<table border="0" width="100%" class="borderless">
							<tr>
								<td>&nbsp;</td>
								<td>' . ((isset($this->_tpldata['.'][0]['L_SHOW_POINTS'])) ? $this->_tpldata['.'][0]['L_SHOW_POINTS'] : ((isset($user->lang['SHOW_POINTS'])) ? $user->lang['SHOW_POINTS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SHOW_POINTS'))) . ' 	}')) . '</td>
								<td>' . ((isset($this->_tpldata['.'][0]['L_SHOW_TOTAL'])) ? $this->_tpldata['.'][0]['L_SHOW_TOTAL'] : ((isset($user->lang['SHOW_TOTAL'])) ? $user->lang['SHOW_TOTAL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SHOW_TOTAL'))) . ' 	}')) . '</td>
								<td>' . ((isset($this->_tpldata['.'][0]['L_SHOW_LEVEL'])) ? $this->_tpldata['.'][0]['L_SHOW_LEVEL'] : ((isset($user->lang['SHOW_LEVEL'])) ? $user->lang['SHOW_LEVEL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SHOW_LEVEL'))) . ' 	}')) . '</td>
								<td>' . ((isset($this->_tpldata['.'][0]['L_SHOW_RANK'])) ? $this->_tpldata['.'][0]['L_SHOW_RANK'] : ((isset($user->lang['SHOW_RANK'])) ? $user->lang['SHOW_RANK'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SHOW_RANK'))) . ' 	}')) . '</td>
								<td>' . ((isset($this->_tpldata['.'][0]['L_SHOW_CLS'])) ? $this->_tpldata['.'][0]['L_SHOW_CLS'] : ((isset($user->lang['SHOW_CLS'])) ? $user->lang['SHOW_CLS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SHOW_CLS'))) . ' 	}')) . '</td>
								<td>' . ((isset($this->_tpldata['.'][0]['L_SHOW_CLS_IMG'])) ? $this->_tpldata['.'][0]['L_SHOW_CLS_IMG'] : ((isset($user->lang['SHOW_CLS_IMG'])) ? $user->lang['SHOW_CLS_IMG'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SHOW_CLS_IMG'))) . ' 	}')) . '</td>
							</tr>
							<tr>
								<td>' . ((isset($this->_tpldata['.'][0]['L_SPECIALIT'])) ? $this->_tpldata['.'][0]['L_SPECIALIT'] : ((isset($user->lang['SPECIALIT'])) ? $user->lang['SPECIALIT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SPECIALIT'))) . ' 	}')) . '</td>
								<td align="center"><input type="checkbox" name="si_points" value="1" ' . ((isset($this->_tpldata['.'][0]['SI_POINTS'])) ? $this->_tpldata['.'][0]['SI_POINTS'] : '') . ' /></td>
								<td align="center"><input type="checkbox" name="si_total" value="1" ' . ((isset($this->_tpldata['.'][0]['SI_TOTAL'])) ? $this->_tpldata['.'][0]['SI_TOTAL'] : '') . ' /></td>
								<td align="center">&nbsp;</td>
								<td align="center"><input type="checkbox" name="si_rank" value="1" ' . ((isset($this->_tpldata['.'][0]['SI_RANK'])) ? $this->_tpldata['.'][0]['SI_RANK'] : '') . ' /></td>
								<td align="center"><input type="checkbox" name="si_class" value="1" ' . ((isset($this->_tpldata['.'][0]['SI_CLASS'])) ? $this->_tpldata['.'][0]['SI_CLASS'] : '') . ' /></td>
								<td align="center"><input type="checkbox" name="si_cls_icon" value="1" ' . ((isset($this->_tpldata['.'][0]['SI_CLS_ICON'])) ? $this->_tpldata['.'][0]['SI_CLS_ICON'] : '') . ' /></td>
							</tr>
							<tr>
								<td>' . ((isset($this->_tpldata['.'][0]['L_SETITEM'])) ? $this->_tpldata['.'][0]['L_SETITEM'] : ((isset($user->lang['SETITEM'])) ? $user->lang['SETITEM'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SETITEM'))) . ' 	}')) . '</td>
								<td align="center"><input type="checkbox" name="set_points" value="1" ' . ((isset($this->_tpldata['.'][0]['SET_POINTS'])) ? $this->_tpldata['.'][0]['SET_POINTS'] : '') . ' /></td>
								<td align="center"><input type="checkbox" name="set_total" value="1" ' . ((isset($this->_tpldata['.'][0]['SET_TOTAL'])) ? $this->_tpldata['.'][0]['SET_TOTAL'] : '') . ' /></td>
								<td align="center">&nbsp;</td>
								<td align="center"><input type="checkbox" name="set_rank" value="1" ' . ((isset($this->_tpldata['.'][0]['SET_RANK'])) ? $this->_tpldata['.'][0]['SET_RANK'] : '') . ' /></td>
								<td align="center"><input type="checkbox" name="set_class" value="1" ' . ((isset($this->_tpldata['.'][0]['SET_CLASS'])) ? $this->_tpldata['.'][0]['SET_CLASS'] : '') . ' /></td>
								<td align="center"><input type="checkbox" name="set_cls_icon" value="1" ' . ((isset($this->_tpldata['.'][0]['SET_CLS_ICON'])) ? $this->_tpldata['.'][0]['SET_CLS_ICON'] : '') . ' /></td>
							</tr>
							<tr>
								<td>' . ((isset($this->_tpldata['.'][0]['L_SHOWSUMMARY'])) ? $this->_tpldata['.'][0]['L_SHOWSUMMARY'] : ((isset($user->lang['SHOWSUMMARY'])) ? $user->lang['SHOWSUMMARY'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SHOWSUMMARY'))) . ' 	}')) . '</td>
								<td align="center"><input type="checkbox" name="set_op_points" value="1" ' . ((isset($this->_tpldata['.'][0]['SET_OP_POINTS'])) ? $this->_tpldata['.'][0]['SET_OP_POINTS'] : '') . ' /></td>
								<td align="center"><input type="checkbox" name="set_op_total" value="1" ' . ((isset($this->_tpldata['.'][0]['SET_OP_TOTAL'])) ? $this->_tpldata['.'][0]['SET_OP_TOTAL'] : '') . ' /></td>
								<td align="center">&nbsp;</td>
								<td align="center"><input type="checkbox" name="set_op_rank" value="1" ' . ((isset($this->_tpldata['.'][0]['SET_OP_RANK'])) ? $this->_tpldata['.'][0]['SET_OP_RANK'] : '') . ' /></td>
								<td align="center"><input type="checkbox" name="set_op_class" value="1" ' . ((isset($this->_tpldata['.'][0]['SET_OP_CLASS'])) ? $this->_tpldata['.'][0]['SET_OP_CLASS'] : '') . ' /></td>
								<td align="center"><input type="checkbox" name="set_op_cls_icon" value="1" ' . ((isset($this->_tpldata['.'][0]['SET_OP_CLS_ICON'])) ? $this->_tpldata['.'][0]['SET_OP_CLS_ICON'] : '') . ' /></td>
							</tr>
							<tr>
								<td>' . ((isset($this->_tpldata['.'][0]['L_SETRIGHT'])) ? $this->_tpldata['.'][0]['L_SETRIGHT'] : ((isset($user->lang['SETRIGHT'])) ? $user->lang['SETRIGHT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SETRIGHT'))) . ' 	}')) . '</td>
								<td align="center">&nbsp;</td>
								<td align="center">&nbsp;</td>
								<td align="center"><input type="checkbox" name="sr_level" value="1" ' . ((isset($this->_tpldata['.'][0]['SR_LEVEL'])) ? $this->_tpldata['.'][0]['SR_LEVEL'] : '') . ' /></td>
								<td align="center"><input type="checkbox" name="sr_rank" value="1" ' . ((isset($this->_tpldata['.'][0]['SR_RANK'])) ? $this->_tpldata['.'][0]['SR_RANK'] : '') . ' /></td>
								<td align="center"><input type="checkbox" name="sr_class" value="1" ' . ((isset($this->_tpldata['.'][0]['SR_CLASS'])) ? $this->_tpldata['.'][0]['SR_CLASS'] : '') . ' /></td>
								<td align="center"><input type="checkbox" name="sr_cls_icon" value="1" ' . ((isset($this->_tpldata['.'][0]['SR_CLS_ICON'])) ? $this->_tpldata['.'][0]['SR_CLS_ICON'] : '') . ' /></td>
							</tr>
						</table>
					</td>
				</tr>
			</table></div>
		</td></tr>
	<tr>
		<th align="left" onclick="show_section(\'section1\')">
		<span style="cursor: pointer;"><img src="../images/descending.gif" alt="" title="' . ((isset($this->_tpldata['.'][0]['L_HEADER_HELP'])) ? $this->_tpldata['.'][0]['L_HEADER_HELP'] : ((isset($user->lang['HEADER_HELP'])) ? $user->lang['HEADER_HELP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'HEADER_HELP'))) . ' 	}')) . '" border="0" height="9" width="9"> ' . ((isset($this->_tpldata['.'][0]['L_HEADER_DBS'])) ? $this->_tpldata['.'][0]['L_HEADER_DBS'] : ((isset($user->lang['HEADER_DBS'])) ? $user->lang['HEADER_DBS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'HEADER_DBS'))) . ' 	}')) . '</span>
			</th>
	</tr>
	<tr><td>
		<div  style="display: none;" id="section1">
		<table class="borderless" align="center" border="0" cellpadding="0" cellspacing="1" width="100%"> 
			<tr>
					<td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_USE_SETDB'])) ? $this->_tpldata['.'][0]['L_USE_SETDB'] : ((isset($user->lang['USE_SETDB'])) ? $user->lang['USE_SETDB'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'USE_SETDB'))) . ' 	}')) . '</td>
					<td width="40%" class="row1"><input type="checkbox" name="nonset_set" value="1" ' . ((isset($this->_tpldata['.'][0]['NONSET_SET'])) ? $this->_tpldata['.'][0]['NONSET_SET'] : '') . ' />
					</td>
				</tr>
				<tr>
					<td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_IS_NONSET'])) ? $this->_tpldata['.'][0]['L_IS_NONSET'] : ((isset($user->lang['IS_NONSET'])) ? $user->lang['IS_NONSET'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'IS_NONSET'))) . ' 	}')) . ' ' . ((isset($this->_tpldata['.'][0]['L_HELP_NONSET'])) ? $this->_tpldata['.'][0]['L_HELP_NONSET'] : ((isset($user->lang['HELP_NONSET'])) ? $user->lang['HELP_NONSET'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'HELP_NONSET'))) . ' 	}')) . '</td>
					<td width="40%" class="row1"><input type="text" name="nonsettable" size="32" value="' . ((isset($this->_tpldata['.'][0]['NONSETTABLE'])) ? $this->_tpldata['.'][0]['NONSETTABLE'] : '') . '" class="input" /></td>
				</tr>
				<tr>
					<td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_IS_SET'])) ? $this->_tpldata['.'][0]['L_IS_SET'] : ((isset($user->lang['IS_SET'])) ? $user->lang['IS_SET'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'IS_SET'))) . ' 	}')) . '</td>
					<td width="40%" class="row1"><input type="text" name="settable" size="32" value="' . ((isset($this->_tpldata['.'][0]['SETTABLE'])) ? $this->_tpldata['.'][0]['SETTABLE'] : '') . '" class="input" /></td>
				</tr>
		</table></div></td></tr>
		</td></tr>
	<tr>
		<th align="left" onclick="show_section(\'section2\')">
		<span style="cursor: pointer;"><img src="../images/descending.gif" alt="" title="' . ((isset($this->_tpldata['.'][0]['L_HEADER_HELP'])) ? $this->_tpldata['.'][0]['L_HEADER_HELP'] : ((isset($user->lang['HEADER_HELP'])) ? $user->lang['HEADER_HELP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'HEADER_HELP'))) . ' 	}')) . '" border="0" height="9" width="9"> ' . ((isset($this->_tpldata['.'][0]['L_ISTT_HEADER'])) ? $this->_tpldata['.'][0]['L_ISTT_HEADER'] : ((isset($user->lang['ISTT_HEADER'])) ? $user->lang['ISTT_HEADER'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ISTT_HEADER'))) . ' 	}')) . '</span>
			</th>
	</tr>
	<tr><td>
		<div  style="display: none;" id="section2">
		<table class="borderless" align="center" border="0" cellpadding="0" cellspacing="1" width="100%"> 
			<tr>
				<td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_ITEMSTATS'])) ? $this->_tpldata['.'][0]['L_ITEMSTATS'] : ((isset($user->lang['ITEMSTATS'])) ? $user->lang['ITEMSTATS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ITEMSTATS'))) . ' 	}')) . '</td>
				<td  class="row1"><input type="checkbox" name="itemstats" value="1" ' . ((isset($this->_tpldata['.'][0]['ITEMSTATS'])) ? $this->_tpldata['.'][0]['ITEMSTATS'] : '') . ' /></td>
			</tr>
			<tr>
				<td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_ITEMSTATS'])) ? $this->_tpldata['.'][0]['L_ITEMSTATS'] : ((isset($user->lang['ITEMSTATS'])) ? $user->lang['ITEMSTATS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ITEMSTATS'))) . ' 	}')) . '<br /> </td>
				<td class="row1">' . ((isset($this->_tpldata['.'][0]['SETITEM_TEMP'])) ? $this->_tpldata['.'][0]['SETITEM_TEMP'] : '') . '</td>
			</tr>
			<tr>
				<td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_ICONS'])) ? $this->_tpldata['.'][0]['L_ICONS'] : ((isset($user->lang['ICONS'])) ? $user->lang['ICONS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ICONS'))) . ' 	}')) . '</td>
				<td width="40%" class="row1"><input type="text" name="imgwidth" size="9" value="' . ((isset($this->_tpldata['.'][0]['IMGWIDTH'])) ? $this->_tpldata['.'][0]['IMGWIDTH'] : '') . '" class="input" /> x
				<input type="text" name="imgheight" size="9" value="' . ((isset($this->_tpldata['.'][0]['IMGHEIGHT'])) ? $this->_tpldata['.'][0]['IMGHEIGHT'] : '') . '" class="input"> ' . ((isset($this->_tpldata['.'][0]['L_ICONS_HLP'])) ? $this->_tpldata['.'][0]['L_ICONS_HLP'] : ((isset($user->lang['ICONS_HLP'])) ? $user->lang['ICONS_HLP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ICONS_HLP'))) . ' 	}')) . '</td>
			</tr>
			<tr>
				<td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_NAME_CORRECT'])) ? $this->_tpldata['.'][0]['L_NAME_CORRECT'] : ((isset($user->lang['NAME_CORRECT'])) ? $user->lang['NAME_CORRECT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NAME_CORRECT'))) . ' 	}')) . ' ' . ((isset($this->_tpldata['.'][0]['L_HELP_CORR_EX'])) ? $this->_tpldata['.'][0]['L_HELP_CORR_EX'] : ((isset($user->lang['HELP_CORR_EX'])) ? $user->lang['HELP_CORR_EX'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'HELP_CORR_EX'))) . ' 	}')) . '</td>
				<td width="40%" class="row1"><input type="checkbox" name="is_correctmode" value="1" ' . ((isset($this->_tpldata['.'][0]['IS_NAME_CORRECT'])) ? $this->_tpldata['.'][0]['IS_NAME_CORRECT'] : '') . ' /></td>
			</tr>
			<tr>
				<td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_IS_REPLACE'])) ? $this->_tpldata['.'][0]['L_IS_REPLACE'] : ((isset($user->lang['IS_REPLACE'])) ? $user->lang['IS_REPLACE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'IS_REPLACE'))) . ' 	}')) . ' ' . ((isset($this->_tpldata['.'][0]['L_HELP_REPLACE'])) ? $this->_tpldata['.'][0]['L_HELP_REPLACE'] : ((isset($user->lang['HELP_REPLACE'])) ? $user->lang['HELP_REPLACE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'HELP_REPLACE'))) . ' 	}')) . '</td>
				<td width="40%" class="row1"><input type="text" name="is_replace" size="32" value="' . ((isset($this->_tpldata['.'][0]['IS_REPLACE'])) ? $this->_tpldata['.'][0]['IS_REPLACE'] : '') . '" class="input" /></td>
			</tr>
			<tr>
				<td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_IS_PATH'])) ? $this->_tpldata['.'][0]['L_IS_PATH'] : ((isset($user->lang['IS_PATH'])) ? $user->lang['IS_PATH'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'IS_PATH'))) . ' 	}')) . ' ' . ((isset($this->_tpldata['.'][0]['L_HELP_PATH'])) ? $this->_tpldata['.'][0]['L_HELP_PATH'] : ((isset($user->lang['HELP_PATH'])) ? $user->lang['HELP_PATH'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'HELP_PATH'))) . ' 	}')) . '</td>
				<td width="40%" class="row1"><input type="text" name="is_ispath" size="32" value="' . ((isset($this->_tpldata['.'][0]['IS_ISPATH'])) ? $this->_tpldata['.'][0]['IS_ISPATH'] : '') . '" class="input" />
					';// IF IS_ISREADABLE
if ($this->_tpldata['.'][0]['IS_ISREADABLE']) { 
echo '
					<br/><font color="red">' . ((isset($this->_tpldata['.'][0]['L_NOT_READABLE'])) ? $this->_tpldata['.'][0]['L_NOT_READABLE'] : ((isset($user->lang['NOT_READABLE'])) ? $user->lang['NOT_READABLE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NOT_READABLE'))) . ' 	}')) . ': ' . ((isset($this->_tpldata['.'][0]['IS_ISPATH'])) ? $this->_tpldata['.'][0]['IS_ISPATH'] : '') . '</font>
    			';// ENDIF
}
echo '
					</td>
			</tr>
		</table></div></td></tr>
	<tr>
		<th align="left" onclick="show_section(\'section3\')">
			<span style="cursor: pointer;"><img src="../images/descending.gif" alt="" title="' . ((isset($this->_tpldata['.'][0]['L_HEADER_HELP'])) ? $this->_tpldata['.'][0]['L_HEADER_HELP'] : ((isset($user->lang['HEADER_HELP'])) ? $user->lang['HEADER_HELP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'HEADER_HELP'))) . ' 	}')) . '" border="0" height="9" width="9"> ' . ((isset($this->_tpldata['.'][0]['L_SPECIALIT'])) ? $this->_tpldata['.'][0]['L_SPECIALIT'] : ((isset($user->lang['SPECIALIT'])) ? $user->lang['SPECIALIT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SPECIALIT'))) . ' 	}')) . '</span>
			</th>
	</tr>
	<tr><td>
		<div style="display: none;" id="section3">
		<table class="borderless" align="center" border="0" cellpadding="0" cellspacing="1" width="100%"> 
			<tr>
				<td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_HEADER_IMG'])) ? $this->_tpldata['.'][0]['L_HEADER_IMG'] : ((isset($user->lang['HEADER_IMG'])) ? $user->lang['HEADER_IMG'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'HEADER_IMG'))) . ' 	}')) . '</td>
				<td width="40%" class="row1"><input type="checkbox" name="header_images" value="1" ' . ((isset($this->_tpldata['.'][0]['HEADER_IMG'])) ? $this->_tpldata['.'][0]['HEADER_IMG'] : '') . ' /></td>
			<tr>
				<td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_SHOW_CROSS'])) ? $this->_tpldata['.'][0]['L_SHOW_CROSS'] : ((isset($user->lang['SHOW_CROSS'])) ? $user->lang['SHOW_CROSS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SHOW_CROSS'))) . ' 	}')) . ' ' . ((isset($this->_tpldata['.'][0]['L_HELP_CROSS'])) ? $this->_tpldata['.'][0]['L_HELP_CROSS'] : ((isset($user->lang['HELP_CROSS'])) ? $user->lang['HELP_CROSS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'HELP_CROSS'))) . ' 	}')) . '</td>
				<td width="40%" class="row1"><input type="checkbox" name="si_only_crosses" value="1" ' . ((isset($this->_tpldata['.'][0]['SI_CROSSES'])) ? $this->_tpldata['.'][0]['SI_CROSSES'] : '') . ' /></td>
			</tr>
			<tr>
				<td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_SHOW_ITEMSTA'])) ? $this->_tpldata['.'][0]['L_SHOW_ITEMSTA'] : ((isset($user->lang['SHOW_ITEMSTA'])) ? $user->lang['SHOW_ITEMSTA'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SHOW_ITEMSTA'))) . ' 	}')) . ' ' . ((isset($this->_tpldata['.'][0]['L_HELP_JJSTATUS'])) ? $this->_tpldata['.'][0]['L_HELP_JJSTATUS'] : ((isset($user->lang['HELP_JJSTATUS'])) ? $user->lang['HELP_JJSTATUS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'HELP_JJSTATUS'))) . ' 	}')) . '</td>
				<td width="40%" class="row1"><input type="checkbox" name="si_itemstatus_show" value="1" ' . ((isset($this->_tpldata['.'][0]['SI_STATUSSHOW'])) ? $this->_tpldata['.'][0]['SI_STATUSSHOW'] : '') . ' /></td>
			</tr>
			<tr>
				<td width="60%" class="row2" colspan=2>
				' . ((isset($this->_tpldata['.'][0]['L_ITEMLIST'])) ? $this->_tpldata['.'][0]['L_ITEMLIST'] : ((isset($user->lang['ITEMLIST'])) ? $user->lang['ITEMLIST'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ITEMLIST'))) . ' 	}')) . ' ' . ((isset($this->_tpldata['.'][0]['L_HELP_DRAGDROP'])) ? $this->_tpldata['.'][0]['L_HELP_DRAGDROP'] : ((isset($user->lang['HELP_DRAGDROP'])) ? $user->lang['HELP_DRAGDROP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'HELP_DRAGDROP'))) . ' 	}')) . '
				<p align="center">
          <ul id="itempool" class="sortable boxy">
          <center>' . ((isset($this->_tpldata['.'][0]['L_AX_UNUSED_I'])) ? $this->_tpldata['.'][0]['L_AX_UNUSED_I'] : ((isset($user->lang['AX_UNUSED_I'])) ? $user->lang['AX_UNUSED_I'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'AX_UNUSED_I'))) . ' 	}')) . '</center>
					';// BEGIN itempool_row
$_itempool_row_count = (isset($this->_tpldata['itempool_row.'])) ?  sizeof($this->_tpldata['itempool_row.']) : 0;
if ($_itempool_row_count) {
for ($_itempool_row_i = 0; $_itempool_row_i < $_itempool_row_count; $_itempool_row_i++)
{
echo '
					<li id="' . ((isset($this->_tpldata['itempool_row.'][$_itempool_row_i]['ID'])) ? $this->_tpldata['itempool_row.'][$_itempool_row_i]['ID'] : '') . '">' . ((isset($this->_tpldata['itempool_row.'][$_itempool_row_i]['NAME'])) ? $this->_tpldata['itempool_row.'][$_itempool_row_i]['NAME'] : '') . '</li>
					';}}
// END itempool_row
echo '
          </ul>
          <ul id="itemshow" class="sortable boxy">
          <center>' . ((isset($this->_tpldata['.'][0]['L_AX_ENABLED_I'])) ? $this->_tpldata['.'][0]['L_AX_ENABLED_I'] : ((isset($user->lang['AX_ENABLED_I'])) ? $user->lang['AX_ENABLED_I'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'AX_ENABLED_I'))) . ' 	}')) . '</center>
					';// BEGIN itemshow_row
$_itemshow_row_count = (isset($this->_tpldata['itemshow_row.'])) ?  sizeof($this->_tpldata['itemshow_row.']) : 0;
if ($_itemshow_row_count) {
for ($_itemshow_row_i = 0; $_itemshow_row_i < $_itemshow_row_count; $_itemshow_row_i++)
{
echo '
					<li id="' . ((isset($this->_tpldata['itemshow_row.'][$_itemshow_row_i]['ID'])) ? $this->_tpldata['itemshow_row.'][$_itemshow_row_i]['ID'] : '') . '">' . ((isset($this->_tpldata['itemshow_row.'][$_itemshow_row_i]['NAME'])) ? $this->_tpldata['itemshow_row.'][$_itemshow_row_i]['NAME'] : '') . '</li>
					';}}
// END itemshow_row
echo '
          </ul><br /><br /><center>
				  <input type="button" name="add" value="' . ((isset($this->_tpldata['.'][0]['L_BUTTON_I_DEL'])) ? $this->_tpldata['.'][0]['L_BUTTON_I_DEL'] : ((isset($user->lang['BUTTON_I_DEL'])) ? $user->lang['BUTTON_I_DEL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BUTTON_I_DEL'))) . ' 	}')) . '" class="mainoption" onclick="javascript:ManageItemDialog()" />
          <input type="button" name="add" value="' . ((isset($this->_tpldata['.'][0]['L_BUTTON_I_ADD'])) ? $this->_tpldata['.'][0]['L_BUTTON_I_ADD'] : ((isset($user->lang['BUTTON_I_ADD'])) ? $user->lang['BUTTON_I_ADD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BUTTON_I_ADD'))) . ' 	}')) . '" class="mainoption" onclick="javascript:AddItemDialog()" />
          </center>
				</td>
	<tr>
				<td width="40%" class="row2" valign="top" colspan=2>
				  <table width="100%" border="0" cellspacing="1" cellpadding="2">
	           <tr>
	           <td><img src="../images/false.png" border=0 alt=\'\'/></td>
				      <td>' . ((isset($this->_tpldata['.'][0]['L_WARNING'])) ? $this->_tpldata['.'][0]['L_WARNING'] : ((isset($user->lang['WARNING'])) ? $user->lang['WARNING'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'WARNING'))) . ' 	}')) . ': ' . ((isset($this->_tpldata['.'][0]['L_WARN_TXT'])) ? $this->_tpldata['.'][0]['L_WARN_TXT'] : ((isset($user->lang['WARN_TXT'])) ? $user->lang['WARN_TXT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'WARN_TXT'))) . ' 	}')) . '<br/>
				      	' . ((isset($this->_tpldata['.'][0]['DRPDN_SI_LANG'])) ? $this->_tpldata['.'][0]['DRPDN_SI_LANG'] : '') . '
	      <input type="button" onClick=\'openConfirmDialog()\' name="populate" value="' . ((isset($this->_tpldata['.'][0]['L_POPULATE'])) ? $this->_tpldata['.'][0]['L_POPULATE'] : ((isset($user->lang['POPULATE'])) ? $user->lang['POPULATE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'POPULATE'))) . ' 	}')) . '" class="mainoption" /></td>
				  </tr>
</table>
				</td>
			</tr>
			</tr>
		</table></div></td></tr>
	<tr>
		<th align="left" onclick="show_section(\'section4\')">
		<span style="cursor: pointer;"><img src="../images/descending.gif" alt="" title="' . ((isset($this->_tpldata['.'][0]['L_HEADER_HELP'])) ? $this->_tpldata['.'][0]['L_HEADER_HELP'] : ((isset($user->lang['HEADER_HELP'])) ? $user->lang['HEADER_HELP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'HEADER_HELP'))) . ' 	}')) . '" border="0" height="9" width="9"> ' . ((isset($this->_tpldata['.'][0]['L_SETITEM'])) ? $this->_tpldata['.'][0]['L_SETITEM'] : ((isset($user->lang['SETITEM'])) ? $user->lang['SETITEM'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SETITEM'))) . ' 	}')) . '</span>
			</th>
	</tr>
	<tr><td>
		<div style="display: none;" id="section4">
		<table class="borderless" align="center" border="0" cellpadding="0" cellspacing="1" width="100%"> 
			<tr>
				<td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_SHOW_DRPDWN'])) ? $this->_tpldata['.'][0]['L_SHOW_DRPDWN'] : ((isset($user->lang['SHOW_DRPDWN'])) ? $user->lang['SHOW_DRPDWN'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SHOW_DRPDWN'))) . ' 	}')) . '</td>
				<td width="40%" class="row1"><input type="checkbox" name="set_drpdwn_cls" value="1" ' . ((isset($this->_tpldata['.'][0]['SET_DROPDOWN'])) ? $this->_tpldata['.'][0]['SET_DROPDOWN'] : '') . ' /></td>
			</tr>
			<tr>
				<td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_SHOW_INDEX'])) ? $this->_tpldata['.'][0]['L_SHOW_INDEX'] : ((isset($user->lang['SHOW_INDEX'])) ? $user->lang['SHOW_INDEX'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SHOW_INDEX'))) . ' 	}')) . '</td>
				<td width="40%" class="row1"><input type="checkbox" name="set_show_index" value="1" ' . ((isset($this->_tpldata['.'][0]['SET_INDEX'])) ? $this->_tpldata['.'][0]['SET_INDEX'] : '') . ' /></td>
			</tr>
			<tr>
				<td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_OLDSTYLE_LINKS'])) ? $this->_tpldata['.'][0]['L_OLDSTYLE_LINKS'] : ((isset($user->lang['OLDSTYLE_LINKS'])) ? $user->lang['OLDSTYLE_LINKS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'OLDSTYLE_LINKS'))) . ' 	}')) . '</td>
				<td width="40%" class="row1"><input type="checkbox" name="set_oldLink" value="1" ' . ((isset($this->_tpldata['.'][0]['SET_OLD_LINKSTY'])) ? $this->_tpldata['.'][0]['SET_OLD_LINKSTY'] : '') . ' /></td>
			</tr>
						<tr>
							<td colspan=2 class="row2">
			<table border="0" width="100%" id="table1">
					<tr>
					  ';// BEGIN setitems_tiers
$_setitems_tiers_count = (isset($this->_tpldata['setitems_tiers.'])) ?  sizeof($this->_tpldata['setitems_tiers.']) : 0;
if ($_setitems_tiers_count) {
for ($_setitems_tiers_i = 0; $_setitems_tiers_i < $_setitems_tiers_count; $_setitems_tiers_i++)
{
echo '
						<td align="center">' . ((isset($this->_tpldata['setitems_tiers.'][$_setitems_tiers_i]['LANG'])) ? $this->_tpldata['setitems_tiers.'][$_setitems_tiers_i]['LANG'] : '') . '</td>
						';}}
// END setitems_tiers
echo '
					</tr>
					<tr>
            ';// BEGIN setitems_tiers
$_setitems_tiers_count = (isset($this->_tpldata['setitems_tiers.'])) ?  sizeof($this->_tpldata['setitems_tiers.']) : 0;
if ($_setitems_tiers_count) {
for ($_setitems_tiers_i = 0; $_setitems_tiers_i < $_setitems_tiers_count; $_setitems_tiers_i++)
{
echo '
            <td align="center"><input type="checkbox" name="' . ((isset($this->_tpldata['setitems_tiers.'][$_setitems_tiers_i]['NAME'])) ? $this->_tpldata['setitems_tiers.'][$_setitems_tiers_i]['NAME'] : '') . '" value="1" ' . ((isset($this->_tpldata['setitems_tiers.'][$_setitems_tiers_i]['VALUE'])) ? $this->_tpldata['setitems_tiers.'][$_setitems_tiers_i]['VALUE'] : '') . ' /></td>
  					';}}
// END setitems_tiers
echo '
					</tr>
				</table>
           </td> </tr>
				</table></div></td></tr>
				<tr>
		<th align="left" onclick="show_section(\'section5\')">
		<span style="cursor: pointer;"><img src="../images/descending.gif" alt="" title="' . ((isset($this->_tpldata['.'][0]['L_HEADER_HELP'])) ? $this->_tpldata['.'][0]['L_HEADER_HELP'] : ((isset($user->lang['HEADER_HELP'])) ? $user->lang['HEADER_HELP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'HEADER_HELP'))) . ' 	}')) . '" border="0" height="9" width="9"> ' . ((isset($this->_tpldata['.'][0]['L_SETRIGHT'])) ? $this->_tpldata['.'][0]['L_SETRIGHT'] : ((isset($user->lang['SETRIGHT'])) ? $user->lang['SETRIGHT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SETRIGHT'))) . ' 	}')) . '</span>
			</th>
	</tr>
	<tr><td>
<div style="display: none;" id="section5">
		<table class="borderless" align="center" border="0" cellpadding="0" cellspacing="1" width="100%"> 
	<tr>
							<td class="row2">' . ((isset($this->_tpldata['.'][0]['SR_USE_EXPL'])) ? $this->_tpldata['.'][0]['SR_USE_EXPL'] : '') . '</td>
	</tr>
	<tr>
							<td class="row2">
			<table border="0" width="100%" id="table33">
					<tr>
						';// BEGIN setright_tiers
$_setright_tiers_count = (isset($this->_tpldata['setright_tiers.'])) ?  sizeof($this->_tpldata['setright_tiers.']) : 0;
if ($_setright_tiers_count) {
for ($_setright_tiers_i = 0; $_setright_tiers_i < $_setright_tiers_count; $_setright_tiers_i++)
{
echo '
						<td align="center">' . ((isset($this->_tpldata['setright_tiers.'][$_setright_tiers_i]['LANG'])) ? $this->_tpldata['setright_tiers.'][$_setright_tiers_i]['LANG'] : '') . '</td>
						';}}
// END setright_tiers
echo '
					</tr>
					<tr>
					 ';// BEGIN setright_tiers
$_setright_tiers_count = (isset($this->_tpldata['setright_tiers.'])) ?  sizeof($this->_tpldata['setright_tiers.']) : 0;
if ($_setright_tiers_count) {
for ($_setright_tiers_i = 0; $_setright_tiers_i < $_setright_tiers_count; $_setright_tiers_i++)
{
echo '
            <td align="center"><input type="checkbox" name="' . ((isset($this->_tpldata['setright_tiers.'][$_setright_tiers_i]['NAME'])) ? $this->_tpldata['setright_tiers.'][$_setright_tiers_i]['NAME'] : '') . '" value="1" ' . ((isset($this->_tpldata['setright_tiers.'][$_setright_tiers_i]['VALUE'])) ? $this->_tpldata['setright_tiers.'][$_setright_tiers_i]['VALUE'] : '') . ' /></td>
  					';}}
// END setright_tiers
echo '
					</tr>
				</table>
           </td> </tr>
				</table></div></td></tr>
		</table>
<br>
<table width="100%" border="0" cellspacing="1" cellpadding="2">
	<tr><th align="center"><input type="submit" name="issavebu" value="' . ((isset($this->_tpldata['.'][0]['L_SUBMIT'])) ? $this->_tpldata['.'][0]['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SUBMIT'))) . ' 	}')) . '" class="mainoption" />
	<input type=\'hidden\' name=\'del\' value=\'\'>
  <input type="button" onClick=\'ResetDialog()\' name="setdefaults" value="' . ((isset($this->_tpldata['.'][0]['L_SETDEFAULTS'])) ? $this->_tpldata['.'][0]['L_SETDEFAULTS'] : ((isset($user->lang['SETDEFAULTS'])) ? $user->lang['SETDEFAULTS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SETDEFAULTS'))) . ' 	}')) . '" class="mainoption" />
  </th></tr>
</table>
</form>';
}
?>