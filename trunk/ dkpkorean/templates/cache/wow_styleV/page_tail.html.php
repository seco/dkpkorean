<?php
if ($this->security()) {
echo '</td>
		<td style="background:url(' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/data_border/right.gif); background-repeat:repeat-y; "><img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/therest/spacer.gif" width="12" /></td>
	</tr>
	<tr>
		<td style="background:url(' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/data_border/bottom_left.gif); background-repeat:no-repeat; background-position:right;"><img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/therest/spacer.gif" width="12"/></td>
		<td style="background:url(' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/data_border/bottom.gif); background-repeat:repeat-x;"><img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/therest/spacer.gif" height="12"/></td>
		<td style="background:url(' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/data_border/bottom_right.gif); background-repeat:no-repeat;"><img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/therest/spacer.gif" width="12"/></td>
	</tr>
	</table>
<script>
                      ';// BEGIN msystem
$_msystem_count = (isset($this->_tpldata['msystem.'])) ?  sizeof($this->_tpldata['msystem.']) : 0;
if ($_msystem_count) {
for ($_msystem_i = 0; $_msystem_i < $_msystem_count; $_msystem_i++)
{
echo '
                        ' . ((isset($this->_tpldata['msystem.'][$_msystem_i]['MESSAGE'])) ? $this->_tpldata['msystem.'][$_msystem_i]['MESSAGE'] : '') . '
                      ';}}
// END msystem
echo '
                    </script>
';// IF S_IN_ADMIN
if ($this->_tpldata['.'][0]['S_IN_ADMIN']) { 
echo '
    </td>
  </tr>
</table>
';// ENDIF
}
// IF THIRD_C
if ($this->_tpldata['.'][0]['THIRD_C']) { 
echo '<!-- dritte Spalte -->';echo '
<td valign="top" width="160">
	<table width="160" border="0" cellspacing="0" cellpadding="0" class="borderless">
	<tr valign="top">
		<td style="background:url(' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/data_border/top_left.gif); background-repeat:no-repeat; background-position:right;"><img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/therest/spacer.gif" width="12"/></td>
		<td style="background:url(' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/data_border/top.gif); background-repeat:repeat-x;"><img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/therest/spacer.gif" height="12"/></td>
		<td style="background:url(' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/data_border/top_right.gif); background-repeat:no-repeat;"><img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/therest/spacer.gif" width="12"/></td>
	</tr>
	<tr>
		<td style="background:url(' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/data_border/left.gif); background-repeat:repeat-y; background-position:right;"><img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/therest/spacer.gif" width="12" /></td>
		<td style="background:url(' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/data_border/back.jpg); background-repeat:repeat">
										' . ((isset($this->_tpldata['.'][0]['PORTAL_RIGHT'])) ? $this->_tpldata['.'][0]['PORTAL_RIGHT'] : '') . '
		</td>
		<td style="background:url(' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/data_border/right.gif); background-repeat:repeat-y; "><img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/therest/spacer.gif" width="12" /></td>
	</tr>
	<tr>
		<td style="background:url(' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/data_border/bottom_left.gif); background-repeat:no-repeat; background-position:right;"><img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/therest/spacer.gif" width="12"/></td>
		<td style="background:url(' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/data_border/bottom.gif); background-repeat:repeat-x;"><img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/therest/spacer.gif" height="12"/></td>
		<td style="background:url(' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/data_border/bottom_right.gif); background-repeat:no-repeat;"><img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/therest/spacer.gif" width="12"/></td>
	</tr>
	</table>
</td>
</tr>
</table>

';// ENDIF
}
// IF S_NORMAL_FOOTER
if ($this->_tpldata['.'][0]['S_NORMAL_FOOTER']) { 
// IF S_SHOW_QUERIES
if ($this->_tpldata['.'][0]['S_SHOW_QUERIES']) { 
echo '
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center">Queries</th>
  </tr>
  ';// BEGIN query_row
$_query_row_count = (isset($this->_tpldata['query_row.'])) ?  sizeof($this->_tpldata['query_row.']) : 0;
if ($_query_row_count) {
for ($_query_row_i = 0; $_query_row_i < $_query_row_count; $_query_row_i++)
{
echo '
  <tr class="' . ((isset($this->_tpldata['query_row.'][$_query_row_i]['ROW_CLASS'])) ? $this->_tpldata['query_row.'][$_query_row_i]['ROW_CLASS'] : '') . '">
    <td width="100%">' . ((isset($this->_tpldata['query_row.'][$_query_row_i]['QUERY'])) ? $this->_tpldata['query_row.'][$_query_row_i]['QUERY'] : '') . '</td>
  </tr>
  ';}}
// END query_row
echo '
</table>

';// ENDIF
}
echo '
<!--
    If you use this software and find it to be useful, we ask that you
    retain the copyright notice below.  While not required for free use,
    it will help build interest in the EQdkp project.
//-->


		';// IF S_SHOW_DEBUG
if ($this->_tpldata['.'][0]['S_SHOW_DEBUG']) { 
echo '
<center><span class="copy">' . ((isset($this->_tpldata['.'][0]['EQDKP_RENDERTIME'])) ? $this->_tpldata['.'][0]['EQDKP_RENDERTIME'] : '') . ' | ' . ((isset($this->_tpldata['.'][0]['EQDKP_QUERYCOUNT'])) ? $this->_tpldata['.'][0]['EQDKP_QUERYCOUNT'] : '') . ' | <a href="http://validator.w3.org/check/referer" target="_top" class="copy">XHTML Validate</a></span></center>
';// ENDIF
}
// ENDIF
}
echo '
<br>
		<table class="borderless" align="center">
			<tr>
				<td>
' . ((isset($this->_tpldata['.'][0]['EQDKP_PLUS_COPYRIGHT'])) ? $this->_tpldata['.'][0]['EQDKP_PLUS_COPYRIGHT'] : '') . '
				</td>
			</tr>
			';echo '<!-- here was some debbug stuff, i deleted it ;) because i did\'nt need it :P-->';echo '
		</table>

				<table width="100%" align="center" cellpadding="0" cellspacing="0" class="borderless">
		<tr style="background:url(' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/bottom/bottom-bg.gif); background-position:bottom; background-repeat:repeat-x">
			<td align="center" valign="bottom">
				<img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/bottom/bottom-blizzlogo.gif" />
			</td>
		</tr>
		</table>

' . ((isset($this->_tpldata['.'][0]['H'])) ? $this->_tpldata['.'][0]['H'] : '') . '
' . ((isset($this->_tpldata['.'][0]['G'])) ? $this->_tpldata['.'][0]['G'] : '') . '
</body>
</html>';
}
?>