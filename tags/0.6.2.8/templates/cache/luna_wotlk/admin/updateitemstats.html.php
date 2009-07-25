<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
echo '

<script language="JavaScript" type="text/javascript">

' . ((isset($this->_tpldata['.'][0]['JS_CLOSE_CODE'])) ? $this->_tpldata['.'][0]['JS_CLOSE_CODE'] : '') . '

function UpdateItemstats(step){
  ' . ((isset($this->_tpldata['.'][0]['JS_IS_UPDATEWINDOW'])) ? $this->_tpldata['.'][0]['JS_IS_UPDATEWINDOW'] : '') . '
}
</script>

<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" width="100%" colspan="2">' . ((isset($this->_tpldata['.'][0]['UPDI_HEADER2'])) ? $this->_tpldata['.'][0]['UPDI_HEADER2'] : '') . '
    </th>
  </tr>
  <tr class=row1 onmouseover="this.className=\'rowHover\';" onmouseout="this.className=\'row1\';">
  	<td nowrap="nowrap" width="20%">' . ((isset($this->_tpldata['.'][0]['UPDI_ITEMS'])) ? $this->_tpldata['.'][0]['UPDI_ITEMS'] : '') . '</td><td>' . ((isset($this->_tpldata['.'][0]['ITEMS'])) ? $this->_tpldata['.'][0]['ITEMS'] : '') . ' ' . ((isset($this->_tpldata['.'][0]['UPDI_ITEMS_DUPLICATE'])) ? $this->_tpldata['.'][0]['UPDI_ITEMS_DUPLICATE'] : '') . '</td>
  </tr>
  <tr class=row2 onmouseover="this.className=\'rowHover\';" onmouseout="this.className=\'row2\';">
  	<td nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['UPDI_ITEMSCOUNT'])) ? $this->_tpldata['.'][0]['UPDI_ITEMSCOUNT'] : '') . '</td><td>' . ((isset($this->_tpldata['.'][0]['ALL_COUNT'])) ? $this->_tpldata['.'][0]['ALL_COUNT'] : '') . ' </td>
  </tr>
  <tr class=row1 onmouseover="this.className=\'rowHover\';" onmouseout="this.className=\'row1\';">
  	<td nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['UPDI_BADITEMSCOUNT'])) ? $this->_tpldata['.'][0]['UPDI_BADITEMSCOUNT'] : '') . '</td><td>' . ((isset($this->_tpldata['.'][0]['BAD_COUNT'])) ? $this->_tpldata['.'][0]['BAD_COUNT'] : '') . ' </td>
  </tr>
  <tr class=row2 onmouseover="this.className=\'rowHover\';" onmouseout="this.className=\'row2\';">
  	<td nowrap="nowrap">cUrl:</td><td>' . ((isset($this->_tpldata['.'][0]['CURL'])) ? $this->_tpldata['.'][0]['CURL'] : '') . '</td>
  </tr>
  <tr class=row1 onmouseover="this.className=\'rowHover\';" onmouseout="this.className=\'row1\';">
  	<td nowrap="nowrap">fopen:</td><td>' . ((isset($this->_tpldata['.'][0]['FOPEN'])) ? $this->_tpldata['.'][0]['FOPEN'] : '') . '</td>
  </tr>
  <!--
  <tr class=row2 onmouseover="this.className=\'rowHover\';" onmouseout="this.className=\'row2\';">
  	<td nowrap="nowrap">Debug:</td><td>' . ((isset($this->_tpldata['.'][0]['DEBUG_STATE'])) ? $this->_tpldata['.'][0]['DEBUG_STATE'] : '') . '</td>
  </tr>
  <tr class=row1 onmouseover="this.className=\'rowHover\';" onmouseout="this.className=\'row1\';">
  	<td nowrap="nowrap">Debug File:</td><td>' . ((isset($this->_tpldata['.'][0]['DEBUG_FILE'])) ? $this->_tpldata['.'][0]['DEBUG_FILE'] : '') . '</td>
  </tr>
  -->
  <tr class=row1 onmouseover="this.className=\'rowHover\';" onmouseout="this.className=\'row1\';">
  	<td nowrap="nowrap">WebDB:</td><td>' . ((isset($this->_tpldata['.'][0]['WEB_DB_STATE'])) ? $this->_tpldata['.'][0]['WEB_DB_STATE'] : '') . '</td>
  </tr>


</table>

<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" width="100%" colspan="2">' . ((isset($this->_tpldata['.'][0]['UPDI_HEADER'])) ? $this->_tpldata['.'][0]['UPDI_HEADER'] : '') . '
    </th>
  </tr>
  <tr>
  	<th width="20%">' . ((isset($this->_tpldata['.'][0]['UPDI_ACTION'])) ? $this->_tpldata['.'][0]['UPDI_ACTION'] : '') . '</th><th>' . ((isset($this->_tpldata['.'][0]['UPDI_HELP'])) ? $this->_tpldata['.'][0]['UPDI_HELP'] : '') . '</th>
  </tr>
  <tr class=row1 onmouseover="this.className=\'rowHover\';" onmouseout="this.className=\'row1\';">
  	<td nowrap="nowrap">
  		<input type="button" size="20" name="add" value="Update Itemtable" class="mainoption" onclick="javascript:UpdateItemstats(\'items\')" />
  		</td><td>' . ((isset($this->_tpldata['.'][0]['UPDI_HELP_SHOW_ALL'])) ? $this->_tpldata['.'][0]['UPDI_HELP_SHOW_ALL'] : '') . ' <br> <a href="updateitemstats.php?show=yes">' . ((isset($this->_tpldata['.'][0]['UPDI_SHOW_ALL'])) ? $this->_tpldata['.'][0]['UPDI_SHOW_ALL'] : '') . '</a></td>
  </tr>
  <tr class=row2 onmouseover="this.className=\'rowHover\';" onmouseout="this.className=\'row2\';">
  	<td nowrap="nowrap">
  	<!--<a href="updateitemstats.php?delete=yes">' . ((isset($this->_tpldata['.'][0]['UPDI_REFRESH_ALL'])) ? $this->_tpldata['.'][0]['UPDI_REFRESH_ALL'] : '') . '</a>-->
  	<input type="button"  size="20" name="add" value="Clear Cache" class="mainoption" onclick="javascript:UpdateItemstats(\'clear\')" />
  		<br><br>
  	<input type="button"  size="20" name="add" value="Update all Items" class="mainoption" onclick="javascript:UpdateItemstats(\'all\')" />

  		</td><td>' . ((isset($this->_tpldata['.'][0]['UPDI_HELP_REFRESH_ALL'])) ? $this->_tpldata['.'][0]['UPDI_HELP_REFRESH_ALL'] : '') . ' </td>
  </tr>
  <tr class=row1 onmouseover="this.className=\'rowHover\';" onmouseout="this.className=\'row1\';">
  	<td nowrap="nowrap">
  	<!--<a href="updateitemstats.php?refreshbad=yes">' . ((isset($this->_tpldata['.'][0]['UPDI_REFRESH_BAD'])) ? $this->_tpldata['.'][0]['UPDI_REFRESH_BAD'] : '') . '</a>-->
  		<input type="button"  size="20" name="add" value="Update Bad Items" class="mainoption" onclick="javascript:UpdateItemstats(\'bad\')" />
  		</td><td>' . ((isset($this->_tpldata['.'][0]['UPDI_HELP_REFRESH_BAD'])) ? $this->_tpldata['.'][0]['UPDI_HELP_REFRESH_BAD'] : '') . ' </td>
  </tr>
  <tr class=row2 onmouseover="this.className=\'rowHover\';" onmouseout="this.className=\'row2\';">
  	<td nowrap="nowrap">
  	<!--<a href="updateitemstats.php?raidbanker=yes">' . ((isset($this->_tpldata['.'][0]['UPDI_REFRESH_RAIDBANK'])) ? $this->_tpldata['.'][0]['UPDI_REFRESH_RAIDBANK'] : '') . '</a>-->
  		<input type="button"  size="20" name="add" value="Update Raidbank Items" class="mainoption" onclick="javascript:UpdateItemstats(\'bank\')" /> </td><td>' . ((isset($this->_tpldata['.'][0]['UPDI_HELP_REFRESH_RAIDBANK'])) ? $this->_tpldata['.'][0]['UPDI_HELP_REFRESH_RAIDBANK'] : '') . ' </td>
  </tr>
  <tr class=row1 onmouseover="this.className=\'rowHover\';" onmouseout="this.className=\'row1\';">
  	<td nowrap="nowrap">
  	<!--<a href="updateitemstats.php?tradeskill=yes">' . ((isset($this->_tpldata['.'][0]['UPDI_REFRESH_TRADESKILL'])) ? $this->_tpldata['.'][0]['UPDI_REFRESH_TRADESKILL'] : '') . '</a>-->
  		<input type="button"  size="20" name="add" value="Update Tradeskill" class="mainoption" onclick="javascript:UpdateItemstats(\'trade\')" />
  		 </td><td>' . ((isset($this->_tpldata['.'][0]['UPDI_HELP_REFRESH_TRADESKILL'])) ? $this->_tpldata['.'][0]['UPDI_HELP_REFRESH_TRADESKILL'] : '') . ' </td>
  </tr>

  </tr>


  <tr>
    <th colspan="2" class="footer">' . ((isset($this->_tpldata['.'][0]['LISTITEMS_FOOTCOUNT'])) ? $this->_tpldata['.'][0]['LISTITEMS_FOOTCOUNT'] : '') . ' </th>
  </tr>
</table>
<br>


';// IF SHOW
if ($this->_tpldata['.'][0]['SHOW']) { 
echo '
<table width="100%" border="0" cellspacing="1" cellpadding="2">

	<tr>
    <th align="center" width="100%" colspan="2">Items
    </th>
  </tr>
  ';// BEGIN items_row
$_items_row_count = (isset($this->_tpldata['items_row.'])) ?  sizeof($this->_tpldata['items_row.']) : 0;
if ($_items_row_count) {
for ($_items_row_i = 0; $_items_row_i < $_items_row_count; $_items_row_i++)
{
echo '
  <tr class="' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['ROW_CLASS'])) ? $this->_tpldata['items_row.'][$_items_row_i]['ROW_CLASS'] : '') . '">
    <td align=center width="65%">' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['NAME'])) ? $this->_tpldata['items_row.'][$_items_row_i]['NAME'] : '') . '</a></td>
  </tr>
  ';}}
// END items_row
echo '
  <tr>
    <th colspan="5" class="footer">' . ((isset($this->_tpldata['.'][0]['FOOTCOUNT'])) ? $this->_tpldata['.'][0]['FOOTCOUNT'] : '') . '</th>
  </tr>
</table>
';// ENDIF
}
// INCLUDE page_tail.html
$this->assign_from_include('page_tail.html');

}
?>