<?php
if ($this->security()) {
echo '<table width="5%" border="0" cellspacing="1" cellpadding="2" class="forumline">
  <tr>
    <th align="center" class="smalltitle">
      Shoutbox
    </th>
  </tr>
  <tr class="' . ((isset($this->_tpldata['.'][0]['ROW_CLASS'])) ? $this->_tpldata['.'][0]['ROW_CLASS'] : '') . '">
    <td align="center">
      ' . ((isset($this->_tpldata['.'][0]['CONTENT'])) ? $this->_tpldata['.'][0]['CONTENT'] : '') . '
    </td>
  </tr>
</table>
<br/>';
}
?>