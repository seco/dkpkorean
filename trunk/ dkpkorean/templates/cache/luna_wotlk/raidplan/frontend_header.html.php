<?php
if ($this->security()) {
echo '<!--  Overlib OnNeed Loader -->';echo '
<script>
	if(typeof(window.overlib) == "undefined") {
   document.write("<scr" + "ipt language=\'JavaScript\' type=\'text\\/javascript\' src=\'includes\\/javascripts\\/overlib\\/overlib.js\'><\\/scr" + "ipt>");
	}
</script>

<script language="JavaScript" type="text/javascript" src="includes/javascripts/switchcontent.js"></script>
<script language="JavaScript" type="text/javascript" src="includes/javascripts/switchicon.js"></script>

<script language="JavaScript" type="text/javascript" src="includes/javascripts/dropdowntabs.js"></script>

';echo '<!-- JQUERY -->';echo '
' . ((isset($this->_tpldata['.'][0]['JQUERY_INCLUDES'])) ? $this->_tpldata['.'][0]['JQUERY_INCLUDES'] : '') . '';
}
?>