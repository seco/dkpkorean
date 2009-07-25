<?php
if ($this->security()) {
// INCLUDE ../css/rp_tooltip.html
$this->assign_from_include('../css/rp_tooltip.html');
// INCLUDE ../css/rp_global.html
$this->assign_from_include('../css/rp_global.html');
echo '

<style>
';// BEGIN classcss
$_classcss_count = (isset($this->_tpldata['classcss.'])) ?  sizeof($this->_tpldata['classcss.']) : 0;
if ($_classcss_count) {
for ($_classcss_i = 0; $_classcss_i < $_classcss_count; $_classcss_i++)
{
echo '
  .tableheader_' . ((isset($this->_tpldata['classcss.'][$_classcss_i]['NAME'])) ? $this->_tpldata['classcss.'][$_classcss_i]['NAME'] : '') . ' {
  	color	: ' . ((isset($this->_tpldata['classcss.'][$_classcss_i]['COLOR'])) ? $this->_tpldata['classcss.'][$_classcss_i]['COLOR'] : '') . ';
  	align	: right;
  }
';}}
// END classcss
echo '
</style>

';// IF RPTEMPL_ADMIN
if ($this->_tpldata['.'][0]['RPTEMPL_ADMIN']) { 
// ELSE
} else {
// INCLUDE ../css/rp_status.html
$this->assign_from_include('../css/rp_status.html');
// ENDIF
}

}
?>