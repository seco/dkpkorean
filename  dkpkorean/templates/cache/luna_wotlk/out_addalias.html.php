<?php
if ($this->security()) {
echo '<form method="post" action="' . ((isset($this->_tpldata['.'][0]['F_PARSE_LOG'])) ? $this->_tpldata['.'][0]['F_PARSE_LOG'] : '') . '" name="alias">
    <table width="100%" border="0" cellspacing="1" cellpadding="2">
      <tr>
      	<th colspan="2">' . ((isset($this->_tpldata['.'][0]['RLI_ADDALIAS'])) ? $this->_tpldata['.'][0]['RLI_ADDALIAS'] : '') . '</th>
      </tr>
      <tr class="row1">
      	<td><label for="alias">Name: </label><input type="text" name="alias_name" id="alias" class="input" /></td>
      	<td>' . ((isset($this->_tpldata['.'][0]['RLI_REPLACE'])) ? $this->_tpldata['.'][0]['RLI_REPLACE'] : '') . '</td>
      </tr>
      <tr class="row2">
      	<td><label for="member">Member:</label>
      		<select name="member_id" class="input" id="member">
      			';// BEGIN members_row
$_members_row_count = (isset($this->_tpldata['members_row.'])) ?  sizeof($this->_tpldata['members_row.']) : 0;
if ($_members_row_count) {
for ($_members_row_i = 0; $_members_row_i < $_members_row_count; $_members_row_i++)
{
echo '
      			<option value="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['VALUE'])) ? $this->_tpldata['members_row.'][$_members_row_i]['VALUE'] : '') . '">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['OPTION'])) ? $this->_tpldata['members_row.'][$_members_row_i]['OPTION'] : '') . '</option>
        		';}}
// END members_row
echo '
        	</select></td>
      	<td>' . ((isset($this->_tpldata['.'][0]['RLI_EARNER'])) ? $this->_tpldata['.'][0]['RLI_EARNER'] : '') . '</td>
      <tr>
      	<th align="center" colspan="2"><input type="submit" name="submit" value="' . ((isset($this->_tpldata['.'][0]['RLI_ADDALIAS'])) ? $this->_tpldata['.'][0]['RLI_ADDALIAS'] : '') . '" class="mainoption" /></th>
      </tr>
    </table>
</form>';
}
?>