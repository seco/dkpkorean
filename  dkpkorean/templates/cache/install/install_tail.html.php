<?php
if ($this->security()) {
echo '</div>
</div>
<div id="ftr" align="center">
';echo '<!-- 
    If you use this software and find it to be useful, we ask that you
    retain the copyright notice below.  While not required for free use,
    it will help build interest in the EQdkp-Plus project.
//-->';echo '
<div class="copy"><a href=http://www.eqdkp-plus.com target=_new class=copy>EQDKP Plus</a> ' . ((isset($this->_tpldata['.'][0]['EQDKP_VERSION'])) ? $this->_tpldata['.'][0]['EQDKP_VERSION'] : '') . ' &copy; 2003 - ' . ((isset($this->_tpldata['.'][0]['TYEAR'])) ? $this->_tpldata['.'][0]['TYEAR'] : '') . ' by
								EQDKP Dev Team</div>
</div>
</body>
</html>';
}
?>