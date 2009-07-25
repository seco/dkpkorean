<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
echo '
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <th align="center">' . ((isset($this->_tpldata['.'][0]['CONTENT_TITLE'])) ? $this->_tpldata['.'][0]['CONTENT_TITLE'] : '') . '</th>
  </tr>
  <tr>
  	<td class="row2" align="left">
  	<table width="100%" border="0">
  		<tr>
  			<td>
			' . ((isset($this->_tpldata['.'][0]['L_CHOOSE'])) ? $this->_tpldata['.'][0]['L_CHOOSE'] : ((isset($user->lang['CHOOSE'])) ? $user->lang['CHOOSE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CHOOSE'))) . ' 	}')) . '<br><br>
		  	<form method="get">
		  	     <select name="id" class="input" onchange="javascript:form.submit();">
		        ';// BEGIN members_row
$_members_row_count = (isset($this->_tpldata['members_row.'])) ?  sizeof($this->_tpldata['members_row.']) : 0;
if ($_members_row_count) {
for ($_members_row_i = 0; $_members_row_i < $_members_row_count; $_members_row_i++)
{
echo '
		        <option value="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['VALUE'])) ? $this->_tpldata['members_row.'][$_members_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['SELECTED'])) ? $this->_tpldata['members_row.'][$_members_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['OPTION'])) ? $this->_tpldata['members_row.'][$_members_row_i]['OPTION'] : '') . '</option>
		        ';}}
// END members_row
echo '
		      	</select>
		    </form>
  			</td>
  			<td>
  			' . ((isset($this->_tpldata['.'][0]['L_SHIRT4'])) ? $this->_tpldata['.'][0]['L_SHIRT4'] : ((isset($user->lang['SHIRT4'])) ? $user->lang['SHIRT4'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SHIRT4'))) . ' 	}')) . '
  			</td>

  		</tr>
  	</table>
  	</td>
  </tr>

  <tr>
    <td class="row1" align="center">
    <br>
    <iframe src="' . ((isset($this->_tpldata['.'][0]['SHOP_URL'])) ? $this->_tpldata['.'][0]['SHOP_URL'] : '') . '" width="750" height="1200" id="shirtshop" frameborder="0">
	    ' . ((isset($this->_tpldata['.'][0]['L_ERROR_IFRAME'])) ? $this->_tpldata['.'][0]['L_ERROR_IFRAME'] : ((isset($user->lang['ERROR_IFRAME'])) ? $user->lang['ERROR_IFRAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ERROR_IFRAME'))) . ' 	}')) . '
	</iframe>
	<br>
	<a href="' . ((isset($this->_tpldata['.'][0]['SHOP_URL'])) ? $this->_tpldata['.'][0]['SHOP_URL'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_NEW_WINDOW'])) ? $this->_tpldata['.'][0]['L_NEW_WINDOW'] : ((isset($user->lang['NEW_WINDOW'])) ? $user->lang['NEW_WINDOW'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NEW_WINDOW'))) . ' 	}')) . '</a>

    </td>
  </tr>
</table>
';// INCLUDE page_tail.html
$this->assign_from_include('page_tail.html');

}
?>