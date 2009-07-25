<?php
if ($this->security()) {
echo '<!--[if IE ]>
<style type="text/css">.bar-container{position: absolute;} </script>
<![endif]-->
<style type="text/css">
	/* About iframe thing*/
#AboutUs_content {
	border:0px;
}	
</style>
<script language="JavaScript" type="text/javascript">
function AboutDialog() {
  ' . ((isset($this->_tpldata['.'][0]['JS_ABOUT'])) ? $this->_tpldata['.'][0]['JS_ABOUT'] : '') . '
}
</script>

<table width="100%" border="0" cellspacing="1" cellpadding="1" class=borderless>
<tr>
	<td valign=\'top\' width="30%">
	<table width="98%" cellspacing="0" cellpadding="0">
		<tr>
			<td class="uc_logo_' . ((isset($this->_tpldata['.'][0]['FACTION'])) ? $this->_tpldata['.'][0]['FACTION'] : '') . '" width="50px" height="50px"></td>
			<td class="uc_nametd" align="left">
				<div class="uc_name">' . ((isset($this->_tpldata['.'][0]['NAME'])) ? $this->_tpldata['.'][0]['NAME'] : '') . '</div>
				<div class="uc_subname">' . ((isset($this->_tpldata['.'][0]['L_LEVEL'])) ? $this->_tpldata['.'][0]['L_LEVEL'] : ((isset($user->lang['LEVEL'])) ? $user->lang['LEVEL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LEVEL'))) . ' 	}')) . ' ' . ((isset($this->_tpldata['.'][0]['LEVEL'])) ? $this->_tpldata['.'][0]['LEVEL'] : '') . ' ' . ((isset($this->_tpldata['.'][0]['RACENAME'])) ? $this->_tpldata['.'][0]['RACENAME'] : '') . ' ' . ((isset($this->_tpldata['.'][0]['CLASSNAME'])) ? $this->_tpldata['.'][0]['CLASSNAME'] : '') . '</div>
			</td>
			<td width="24px" class="uc_nametd">
			';// IF SHOW_ARMLINK
if ($this->_tpldata['.'][0]['SHOW_ARMLINK']) { 
echo '
			<script>
				linkset[1]=\'<div class="menuitems"><a href="' . ((isset($this->_tpldata['.'][0]['ARMORY_LINK1'])) ? $this->_tpldata['.'][0]['ARMORY_LINK1'] : '') . '" target="_blank">' . ((isset($this->_tpldata['.'][0]['L_ARMORY_LINK1'])) ? $this->_tpldata['.'][0]['L_ARMORY_LINK1'] : ((isset($user->lang['ARMORY_LINK1'])) ? $user->lang['ARMORY_LINK1'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ARMORY_LINK1'))) . ' 	}')) . '</a></div>\'
				linkset[1]+=\'<div class="menuitems"><a href="' . ((isset($this->_tpldata['.'][0]['ARMORY_LINK2'])) ? $this->_tpldata['.'][0]['ARMORY_LINK2'] : '') . '" target="_blank">' . ((isset($this->_tpldata['.'][0]['L_ARMORY_LINK2'])) ? $this->_tpldata['.'][0]['L_ARMORY_LINK2'] : ((isset($user->lang['ARMORY_LINK2'])) ? $user->lang['ARMORY_LINK2'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ARMORY_LINK2'))) . ' 	}')) . '</a></div>\'
				';// IF ARMORY_LINK3
if ($this->_tpldata['.'][0]['ARMORY_LINK3']) { 
echo '
				linkset[1]+=\'<div class="menuitems"><a href="' . ((isset($this->_tpldata['.'][0]['ARMORY_LINK3'])) ? $this->_tpldata['.'][0]['ARMORY_LINK3'] : '') . '" target="_blank">' . ((isset($this->_tpldata['.'][0]['L_ARMORY_LINK3'])) ? $this->_tpldata['.'][0]['L_ARMORY_LINK3'] : ((isset($user->lang['ARMORY_LINK3'])) ? $user->lang['ARMORY_LINK3'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ARMORY_LINK3'))) . ' 	}')) . '</a></div>\'
				';// ENDIF
}
echo '
				</script>
			<span class="uc_profmenu"><img src="images/power.png" onmouseover="showmenu(event,linkset[1])"></img></span>
			';// ENDIF
}
echo '
		</td>
		</tr>
		<tr >
    	<td align="center" height="160px" colspan=3><img src="' . ((isset($this->_tpldata['.'][0]['PROFILE_PICTURE'])) ? $this->_tpldata['.'][0]['PROFILE_PICTURE'] : '') . '" border=0/></td>
		</tr>
		<tr class="row1">
		<td align="right" colspan=3>' . ((isset($this->_tpldata['.'][0]['L_LAST_UPDATE'])) ? $this->_tpldata['.'][0]['L_LAST_UPDATE'] : ((isset($user->lang['LAST_UPDATE'])) ? $user->lang['LAST_UPDATE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LAST_UPDATE'))) . ' 	}')) . ': ';// IF LAST_UPDATE
if ($this->_tpldata['.'][0]['LAST_UPDATE']) { 
echo '' . ((isset($this->_tpldata['.'][0]['LAST_UPDATE'])) ? $this->_tpldata['.'][0]['LAST_UPDATE'] : '') . '';// ELSE
} else {
echo '[' . ((isset($this->_tpldata['.'][0]['L_UNKNOWN'])) ? $this->_tpldata['.'][0]['L_UNKNOWN'] : ((isset($user->lang['UNKNOWN'])) ? $user->lang['UNKNOWN'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'UNKNOWN'))) . ' 	}')) . ']';// ENDIF
}
echo '</td>
		</tr>
	</table>
</td>
<td valign="top" width="70%">
' . ((isset($this->_tpldata['.'][0]['TAB_PANE1_START'])) ? $this->_tpldata['.'][0]['TAB_PANE1_START'] : '') . '
' . ((isset($this->_tpldata['.'][0]['TAB_M11_START'])) ? $this->_tpldata['.'][0]['TAB_M11_START'] : '') . '
<div class="tab-content">
<table class=borderless width="100%" border="0" cellspacing="0" cellpadding="1">
<tr><td width="70%">
	<table class=borderless width="100%" border="0" cellspacing="0" cellpadding="1">
	<tr class="row1"><td align="left" width="40%" nowrap="nowrap"><b>' . ((isset($this->_tpldata['.'][0]['L_GUILD'])) ? $this->_tpldata['.'][0]['L_GUILD'] : ((isset($user->lang['GUILD'])) ? $user->lang['GUILD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'GUILD'))) . ' 	}')) . '</b></td><td align="left" width="60%" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['GUILD'])) ? $this->_tpldata['.'][0]['GUILD'] : '') . '</td></tr>
  <tr class="row2"><td align="left" width="40%" nowrap="nowrap"><b>' . ((isset($this->_tpldata['.'][0]['L_EXT_PROFILE'])) ? $this->_tpldata['.'][0]['L_EXT_PROFILE'] : ((isset($user->lang['EXT_PROFILE'])) ? $user->lang['EXT_PROFILE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EXT_PROFILE'))) . ' 	}')) . '</b></td><td align="left" width="60%" nowrap="nowrap">
    			';// IF SHOW_BLASC
if ($this->_tpldata['.'][0]['SHOW_BLASC']) { 
echo '
    			<a target="_blank" href="http://www.buffed.de/?c=' . ((isset($this->_tpldata['.'][0]['BLASC_ID'])) ? $this->_tpldata['.'][0]['BLASC_ID'] : '') . '"><img src="images/profilers/blasc_icon.png" width=16 height=16 border=0 alt="' . ((isset($this->_tpldata['.'][0]['L_BUFFED'])) ? $this->_tpldata['.'][0]['L_BUFFED'] : ((isset($user->lang['BUFFED'])) ? $user->lang['BUFFED'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BUFFED'))) . ' 	}')) . '" /></a>
    		';// ENDIF
}
// IF SHOW_CTPROFILE
if ($this->_tpldata['.'][0]['SHOW_CTPROFILE']) { 
echo '
    			<a target="_blank" href="http://ctprofiles.net/' . ((isset($this->_tpldata['.'][0]['CTPROFILE_ID'])) ? $this->_tpldata['.'][0]['CTPROFILE_ID'] : '') . '"><img src="images/profilers/ctprofile_icon.png" border=0 alt="' . ((isset($this->_tpldata['.'][0]['L_CTPROFILES'])) ? $this->_tpldata['.'][0]['L_CTPROFILES'] : ((isset($user->lang['CTPROFILES'])) ? $user->lang['CTPROFILES'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CTPROFILES'))) . ' 	}')) . '" /></a>
    		';// ENDIF
}
// IF SHOW_ALLA
if ($this->_tpldata['.'][0]['SHOW_ALLA']) { 
echo '
    			<a target="_blank" href="http://wow.allakhazam.com/profile.html?' . ((isset($this->_tpldata['.'][0]['ALLA_ID'])) ? $this->_tpldata['.'][0]['ALLA_ID'] : '') . '"><img src="images/profilers/alla_icon.png" width=16 height=16 border=0 alt="' . ((isset($this->_tpldata['.'][0]['L_ALLAKHAZAM'])) ? $this->_tpldata['.'][0]['L_ALLAKHAZAM'] : ((isset($user->lang['ALLAKHAZAM'])) ? $user->lang['ALLAKHAZAM'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ALLAKHAZAM'))) . ' 	}')) . '" /></a>
    		';// ENDIF
}
// IF SHOW_CURSE
if ($this->_tpldata['.'][0]['SHOW_CURSE']) { 
echo '
    			<a target="_blank" href="' . ((isset($this->_tpldata['.'][0]['CURSE_ID'])) ? $this->_tpldata['.'][0]['CURSE_ID'] : '') . '"><img src="images/profilers/curse_icon.png" width=16 height=16 border=0 alt="' . ((isset($this->_tpldata['.'][0]['L_CURSEPROFILES'])) ? $this->_tpldata['.'][0]['L_CURSEPROFILES'] : ((isset($user->lang['CURSEPROFILES'])) ? $user->lang['CURSEPROFILES'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CURSEPROFILES'))) . ' 	}')) . '" /></a>
    		';// ENDIF
}
// IF SHOW_TALENT
if ($this->_tpldata['.'][0]['SHOW_TALENT']) { 
echo '
    			<a target="_blank" href="' . ((isset($this->_tpldata['.'][0]['TALENT_URL'])) ? $this->_tpldata['.'][0]['TALENT_URL'] : '') . '"><img src="images/profilers/talent.jpg" width=16 height=16 border=0 alt="' . ((isset($this->_tpldata['.'][0]['L_TALENTPLANER'])) ? $this->_tpldata['.'][0]['L_TALENTPLANER'] : ((isset($user->lang['TALENTPLANER'])) ? $user->lang['TALENTPLANER'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TALENTPLANER'))) . ' 	}')) . '" /></a>
    		';// ENDIF
}
echo '
    		</td></tr>
    		';// IF IS_WOW
if ($this->_tpldata['.'][0]['IS_WOW']) { 
echo '
    		<tr class="row1"><td align="left" width="40%" nowrap="nowrap"><b>' . ((isset($this->_tpldata['.'][0]['L_SKILL'])) ? $this->_tpldata['.'][0]['L_SKILL'] : ((isset($user->lang['SKILL'])) ? $user->lang['SKILL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SKILL'))) . ' 	}')) . '</b></td><td align="left" width="60%" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['SKILL'])) ? $this->_tpldata['.'][0]['SKILL'] : '') . ' (' . ((isset($this->_tpldata['.'][0]['SKILLNAMES'])) ? $this->_tpldata['.'][0]['SKILLNAMES'] : '') . ')</td></tr>
				';// ENDIF
}
// IF HEALTHBAR
if ($this->_tpldata['.'][0]['HEALTHBAR']) { 
echo '
    <tr  class="row2" height="28px">
    	<td>' . ((isset($this->_tpldata['.'][0]['L_HEALTHBAR'])) ? $this->_tpldata['.'][0]['L_HEALTHBAR'] : ((isset($user->lang['HEALTHBAR'])) ? $user->lang['HEALTHBAR'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'HEALTHBAR'))) . ' 	}')) . '</td>
    	<td><div class="health-stat"><p><span>' . ((isset($this->_tpldata['.'][0]['HEALTHBAR'])) ? $this->_tpldata['.'][0]['HEALTHBAR'] : '') . '</span></p></div></td>
    </tr>
    ';// ENDIF
}
// IF SECONDBAR
if ($this->_tpldata['.'][0]['SECONDBAR']) { 
echo '
    <tr  class="row2" height="28px">
    	<td>' . ((isset($this->_tpldata['.'][0]['L_SECOND_BAR'])) ? $this->_tpldata['.'][0]['L_SECOND_BAR'] : ((isset($user->lang['SECOND_BAR'])) ? $user->lang['SECOND_BAR'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SECOND_BAR'))) . ' 	}')) . '</td>
    	<td><div class="' . ((isset($this->_tpldata['.'][0]['CSSSECONDBAR'])) ? $this->_tpldata['.'][0]['CSSSECONDBAR'] : '') . '-stat"><p><span>' . ((isset($this->_tpldata['.'][0]['SECONDBAR'])) ? $this->_tpldata['.'][0]['SECONDBAR'] : '') . '</span></p></div></td>
    </tr>
    ';// ENDIF
}
// IF SHOW_PROFESSIONS
if ($this->_tpldata['.'][0]['SHOW_PROFESSIONS']) { 
echo '
    <tr>
    		<td align="left" class="row2"><b>' . ((isset($this->_tpldata['.'][0]['L_RECEIVES'])) ? $this->_tpldata['.'][0]['L_RECEIVES'] : ((isset($user->lang['RECEIVES'])) ? $user->lang['RECEIVES'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RECEIVES'))) . ' 	}')) . '</b></td>
    		<td align="left" width="60%" class="row2">
					<table class=borderless width="100%" border="0" cellspacing="0" cellpadding="1">
						<tr>
							<td width="34px"><img src="images/professions/' . ((isset($this->_tpldata['.'][0]['PROF_FIRST_I'])) ? $this->_tpldata['.'][0]['PROF_FIRST_I'] : '') . '-sm.png"  alt="' . ((isset($this->_tpldata['.'][0]['PROF_SECOND_N'])) ? $this->_tpldata['.'][0]['PROF_SECOND_N'] : '') . '"/></td>
							<td width="165px"><div class="bar-container"><img class="ieimg" src="images/pixel.gif" height="1" width="1" /><b style="width: ' . ((isset($this->_tpldata['.'][0]['PROF_FIRST_PERC'])) ? $this->_tpldata['.'][0]['PROF_FIRST_PERC'] : '') . '%;"></b><span>' . ((isset($this->_tpldata['.'][0]['PROF_FIRST_V'])) ? $this->_tpldata['.'][0]['PROF_FIRST_V'] : '') . ' / ' . ((isset($this->_tpldata['.'][0]['PROF_FIRST_VMAX'])) ? $this->_tpldata['.'][0]['PROF_FIRST_VMAX'] : '') . '</span></div></td>
							<td>' . ((isset($this->_tpldata['.'][0]['PROF_FIRST_N'])) ? $this->_tpldata['.'][0]['PROF_FIRST_N'] : '') . '</td>
						</tr>
						<tr>
							<td width="34px"><img src="images/professions/' . ((isset($this->_tpldata['.'][0]['PROF_SECOND_I'])) ? $this->_tpldata['.'][0]['PROF_SECOND_I'] : '') . '-sm.png" alt="' . ((isset($this->_tpldata['.'][0]['PROF_SECOND_N'])) ? $this->_tpldata['.'][0]['PROF_SECOND_N'] : '') . '"/></td>
							<td width="165px"><div class="bar-container"><img class="ieimg" src="images/pixel.gif" height="1" width="1" /><b style="width: ' . ((isset($this->_tpldata['.'][0]['PROF_SECOND_PERC'])) ? $this->_tpldata['.'][0]['PROF_SECOND_PERC'] : '') . '%;"></b><span>' . ((isset($this->_tpldata['.'][0]['PROF_SECOND_V'])) ? $this->_tpldata['.'][0]['PROF_SECOND_V'] : '') . ' / ' . ((isset($this->_tpldata['.'][0]['PROF_SECOND_VMAX'])) ? $this->_tpldata['.'][0]['PROF_SECOND_VMAX'] : '') . '</span></div></td>
							<td>' . ((isset($this->_tpldata['.'][0]['PROF_SECOND_N'])) ? $this->_tpldata['.'][0]['PROF_SECOND_N'] : '') . '</td>
						</tr>
					</table>
    		</td>
    </tr>
    ';// ENDIF
}
echo '
   </table>
</td><td width="30%">
';// IF IS_WOW
if ($this->_tpldata['.'][0]['IS_WOW']) { 
echo '
   <table width="100%" class=borderless border="0" cellspacing="0" cellpadding="1">
		<tr>
			<td align="right">' . ((isset($this->_tpldata['.'][0]['L_ARCANE'])) ? $this->_tpldata['.'][0]['L_ARCANE'] : ((isset($user->lang['ARCANE'])) ? $user->lang['ARCANE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ARCANE'))) . ' 	}')) . '</td>
			<td width="10px">&nbsp;</td>
			<td BACKGROUND="images/resistence/arcane_resistance.gif" width="26px" height="27px"><span class="resists"><center>' . ((isset($this->_tpldata['.'][0]['ARCANE'])) ? $this->_tpldata['.'][0]['ARCANE'] : '') . '</center></span></td>
    </tr><tr>
			<td align="right">' . ((isset($this->_tpldata['.'][0]['L_FIRE'])) ? $this->_tpldata['.'][0]['L_FIRE'] : ((isset($user->lang['FIRE'])) ? $user->lang['FIRE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FIRE'))) . ' 	}')) . '</td>
			<td width="10px">&nbsp;</td>
			<td BACKGROUND="images/resistence/fire_resistance.gif" width="26px" height="27px"><span class="resists"><center>' . ((isset($this->_tpldata['.'][0]['FIRE'])) ? $this->_tpldata['.'][0]['FIRE'] : '') . '</center></span></td>
    </tr><tr>
			<td align="right">' . ((isset($this->_tpldata['.'][0]['L_NATURE'])) ? $this->_tpldata['.'][0]['L_NATURE'] : ((isset($user->lang['NATURE'])) ? $user->lang['NATURE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NATURE'))) . ' 	}')) . '</td>
			<td width="10px">&nbsp;</td>
			<td BACKGROUND="images/resistence/nature_resistance.gif" width="26px" height="27px"><span class="resists"><center>' . ((isset($this->_tpldata['.'][0]['NATURE'])) ? $this->_tpldata['.'][0]['NATURE'] : '') . '</center></span></td>
    </tr><tr>
			<td align="right">' . ((isset($this->_tpldata['.'][0]['L_FROST'])) ? $this->_tpldata['.'][0]['L_FROST'] : ((isset($user->lang['FROST'])) ? $user->lang['FROST'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FROST'))) . ' 	}')) . '</td>
			<td width="10px">&nbsp;</td>
			<td BACKGROUND="images/resistence/frost_resistance.gif" width="26px" height="27px"><span class="resists"><center>' . ((isset($this->_tpldata['.'][0]['FROST'])) ? $this->_tpldata['.'][0]['FROST'] : '') . '</center></span></td>
    </tr><tr>
			<td align="right">' . ((isset($this->_tpldata['.'][0]['L_SHADOW'])) ? $this->_tpldata['.'][0]['L_SHADOW'] : ((isset($user->lang['SHADOW'])) ? $user->lang['SHADOW'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SHADOW'))) . ' 	}')) . '</td>
			<td width="10px">&nbsp;</td>
			<td BACKGROUND="images/resistence/shadow_resistance.gif" width="26px" height="27px"><span class="resists"><center>' . ((isset($this->_tpldata['.'][0]['SHADOW'])) ? $this->_tpldata['.'][0]['SHADOW'] : '') . '</center></span></td>
    </tr>
  </table>
  ';// ENDIF
}
echo '
  </td></tr></table>
</div>
' . ((isset($this->_tpldata['.'][0]['TAB_MX_END'])) ? $this->_tpldata['.'][0]['TAB_MX_END'] : '') . '
' . ((isset($this->_tpldata['.'][0]['TAB_M12_START'])) ? $this->_tpldata['.'][0]['TAB_M12_START'] : '') . '
<div class="tab-content">
<table width="100%" border="0" cellspacing="0" cellpadding="1">
    		<th colspan=2>' . ((isset($this->_tpldata['.'][0]['L_RAID_INFOS'])) ? $this->_tpldata['.'][0]['L_RAID_INFOS'] : ((isset($user->lang['RAID_INFOS'])) ? $user->lang['RAID_INFOS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAID_INFOS'))) . ' 	}')) . '</th>
        <tr class="row1" ><td align="left" width="40%" nowrap="nowrap"><b>' . ((isset($this->_tpldata['.'][0]['L_EARNED'])) ? $this->_tpldata['.'][0]['L_EARNED'] : ((isset($user->lang['EARNED'])) ? $user->lang['EARNED'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EARNED'))) . ' 	}')) . '</b></td><td align="left" width="60%" nowrap="nowrap"><span class="positive">' . ((isset($this->_tpldata['.'][0]['EARNED'])) ? $this->_tpldata['.'][0]['EARNED'] : '') . '</span></td></tr>
        <tr class="row2" ><td align="left" width="40%" nowrap="nowrap"><b>' . ((isset($this->_tpldata['.'][0]['L_SPENT'])) ? $this->_tpldata['.'][0]['L_SPENT'] : ((isset($user->lang['SPENT'])) ? $user->lang['SPENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SPENT'))) . ' 	}')) . '</b></td><td align="left" width="60%" nowrap="nowrap"><span class="negative">' . ((isset($this->_tpldata['.'][0]['SPENT'])) ? $this->_tpldata['.'][0]['SPENT'] : '') . '</span></td></tr>
        <tr class="row1" ><td align="left" width="40%" nowrap="nowrap"><b>' . ((isset($this->_tpldata['.'][0]['L_ADJUSTMENT'])) ? $this->_tpldata['.'][0]['L_ADJUSTMENT'] : ((isset($user->lang['ADJUSTMENT'])) ? $user->lang['ADJUSTMENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADJUSTMENT'))) . ' 	}')) . '</b></td><td align="left" width="60%" nowrap="nowrap"><span class="' . ((isset($this->_tpldata['.'][0]['C_ADJUSTMENT'])) ? $this->_tpldata['.'][0]['C_ADJUSTMENT'] : '') . '">' . ((isset($this->_tpldata['.'][0]['ADJUSTMENT'])) ? $this->_tpldata['.'][0]['ADJUSTMENT'] : '') . '</span></td></tr>
        <tr class="row2" ><td align="left" width="40%" nowrap="nowrap"><b>' . ((isset($this->_tpldata['.'][0]['L_CURRENT'])) ? $this->_tpldata['.'][0]['L_CURRENT'] : ((isset($user->lang['CURRENT'])) ? $user->lang['CURRENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CURRENT'))) . ' 	}')) . '</b></td><td align="left" width="60%" nowrap="nowrap"><span class="' . ((isset($this->_tpldata['.'][0]['C_CURRENT'])) ? $this->_tpldata['.'][0]['C_CURRENT'] : '') . '">' . ((isset($this->_tpldata['.'][0]['CURRENT'])) ? $this->_tpldata['.'][0]['CURRENT'] : '') . '</span></td></tr>
        <tr class="row1" ><td align="left" width="40%" nowrap="nowrap"><b>' . ((isset($this->_tpldata['.'][0]['L_RAIDS_30_DAYS'])) ? $this->_tpldata['.'][0]['L_RAIDS_30_DAYS'] : ((isset($user->lang['RAIDS_30_DAYS'])) ? $user->lang['RAIDS_30_DAYS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAIDS_30_DAYS'))) . ' 	}')) . '</b></td><td align="left" width="60%" nowrap="nowrap"><span class="' . ((isset($this->_tpldata['.'][0]['C_RAIDS_30_DAYS'])) ? $this->_tpldata['.'][0]['C_RAIDS_30_DAYS'] : '') . '">' . ((isset($this->_tpldata['.'][0]['RAIDS_30_DAYS'])) ? $this->_tpldata['.'][0]['RAIDS_30_DAYS'] : '') . '</span></td></tr>
        <tr class="row2" ><td align="left" width="40%" nowrap="nowrap"><b>' . ((isset($this->_tpldata['.'][0]['L_RAIDS_60_DAYS'])) ? $this->_tpldata['.'][0]['L_RAIDS_60_DAYS'] : ((isset($user->lang['RAIDS_60_DAYS'])) ? $user->lang['RAIDS_60_DAYS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAIDS_60_DAYS'))) . ' 	}')) . '</b></td><td align="left" width="60%" nowrap="nowrap"><span class="' . ((isset($this->_tpldata['.'][0]['C_RAIDS_30_DAYS'])) ? $this->_tpldata['.'][0]['C_RAIDS_30_DAYS'] : '') . '">' . ((isset($this->_tpldata['.'][0]['RAIDS_60_DAYS'])) ? $this->_tpldata['.'][0]['RAIDS_60_DAYS'] : '') . '</span></td></tr>
        <tr class="row1" ><td align="left" width="40%" nowrap="nowrap"><b>' . ((isset($this->_tpldata['.'][0]['L_RAIDS_90_DAYS'])) ? $this->_tpldata['.'][0]['L_RAIDS_90_DAYS'] : ((isset($user->lang['RAIDS_90_DAYS'])) ? $user->lang['RAIDS_90_DAYS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAIDS_90_DAYS'))) . ' 	}')) . '</b></td><td align="left" width="60%" nowrap="nowrap"><span class="' . ((isset($this->_tpldata['.'][0]['C_RAIDS_90_DAYS'])) ? $this->_tpldata['.'][0]['C_RAIDS_90_DAYS'] : '') . '">' . ((isset($this->_tpldata['.'][0]['RAIDS_90_DAYS'])) ? $this->_tpldata['.'][0]['RAIDS_90_DAYS'] : '') . '</span></td>
        <tr class="row2" ><td align="left" width="40%" nowrap="nowrap"><b>' . ((isset($this->_tpldata['.'][0]['L_RAIDS_LIFETIME'])) ? $this->_tpldata['.'][0]['L_RAIDS_LIFETIME'] : ((isset($user->lang['RAIDS_LIFETIME'])) ? $user->lang['RAIDS_LIFETIME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAIDS_LIFETIME'))) . ' 	}')) . '</b></td><td align="left" width="60%" nowrap="nowrap"><span class="' . ((isset($this->_tpldata['.'][0]['C_RAIDS_LIFETIME'])) ? $this->_tpldata['.'][0]['C_RAIDS_LIFETIME'] : '') . '">' . ((isset($this->_tpldata['.'][0]['RAIDS_LIFETIME'])) ? $this->_tpldata['.'][0]['RAIDS_LIFETIME'] : '') . '</span></td></tr>
	</table> 
</div>
' . ((isset($this->_tpldata['.'][0]['TAB_MX_END'])) ? $this->_tpldata['.'][0]['TAB_MX_END'] : '') . '
' . ((isset($this->_tpldata['.'][0]['TAB_M13_START'])) ? $this->_tpldata['.'][0]['TAB_M13_START'] : '') . '
<div class="tab-content">
<table width="100%" border="0" cellspacing="0" cellpadding="1">
    <tr class="row1" >
      <td align="left" width="40%" nowrap="nowrap">
        ' . ((isset($this->_tpldata['.'][0]['NOTES'])) ? $this->_tpldata['.'][0]['NOTES'] : '') . '
      </td>
    </tr>
	</table> 
</div>
' . ((isset($this->_tpldata['.'][0]['TAB_MX_END'])) ? $this->_tpldata['.'][0]['TAB_MX_END'] : '') . '
' . ((isset($this->_tpldata['.'][0]['TAB_PANE1_END'])) ? $this->_tpldata['.'][0]['TAB_PANE1_END'] : '') . '
    </td>
</tr>
</table>
<br />
' . ((isset($this->_tpldata['.'][0]['TAB_PANE2_START'])) ? $this->_tpldata['.'][0]['TAB_PANE2_START'] : '') . '
' . ((isset($this->_tpldata['.'][0]['TAB_M21_START'])) ? $this->_tpldata['.'][0]['TAB_M21_START'] : '') . '
<div class="tab-content">
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" colspan="5">' . ((isset($this->_tpldata['.'][0]['L_LAST_5_RAIDS'])) ? $this->_tpldata['.'][0]['L_LAST_5_RAIDS'] : ((isset($user->lang['LAST_5_RAIDS'])) ? $user->lang['LAST_5_RAIDS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LAST_5_RAIDS'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <th align="left" width="70" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_DATE'])) ? $this->_tpldata['.'][0]['L_DATE'] : ((isset($user->lang['DATE'])) ? $user->lang['DATE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DATE'))) . ' 	}')) . '</th>
    <th align="left" width="35%" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_NAME'])) ? $this->_tpldata['.'][0]['L_NAME'] : ((isset($user->lang['NAME'])) ? $user->lang['NAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NAME'))) . ' 	}')) . '</th>
    <th align="left" width="65%" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_NOTE'])) ? $this->_tpldata['.'][0]['L_NOTE'] : ((isset($user->lang['NOTE'])) ? $user->lang['NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NOTE'))) . ' 	}')) . '</th>
    <th align="left" width="60" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_EARNED'])) ? $this->_tpldata['.'][0]['L_EARNED'] : ((isset($user->lang['EARNED'])) ? $user->lang['EARNED'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EARNED'))) . ' 	}')) . '</th>
  </tr>
  ';// BEGIN raids_row
$_raids_row_count = (isset($this->_tpldata['raids_row.'])) ?  sizeof($this->_tpldata['raids_row.']) : 0;
if ($_raids_row_count) {
for ($_raids_row_i = 0; $_raids_row_i < $_raids_row_count; $_raids_row_i++)
{
echo '
  <tr class="' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['ROW_CLASS'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['ROW_CLASS'] : '') . '">
    <td width="70" nowrap="nowrap">' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['DATE'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['DATE'] : '') . '</td>
    <td width="35%" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['U_VIEW_RAID'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['U_VIEW_RAID'] : '') . '">' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['NAME'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['NAME'] : '') . '</a></td>
    <td width="65%" nowrap="nowrap">' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['NOTE'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['NOTE'] : '') . '</td>
    <td width="60" nowrap="nowrap" class="positive">' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['EARNED'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['EARNED'] : '') . '</td>
  </tr>
  ';}}
// END raids_row
echo '
</table>
</div>
' . ((isset($this->_tpldata['.'][0]['TAB_MX_END'])) ? $this->_tpldata['.'][0]['TAB_MX_END'] : '') . '
' . ((isset($this->_tpldata['.'][0]['TAB_M22_START'])) ? $this->_tpldata['.'][0]['TAB_M22_START'] : '') . '
<div class="tab-content">
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" colspan="5">' . ((isset($this->_tpldata['.'][0]['L_LAST_5_ITEMS'])) ? $this->_tpldata['.'][0]['L_LAST_5_ITEMS'] : ((isset($user->lang['LAST_5_ITEMS'])) ? $user->lang['LAST_5_ITEMS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LAST_5_ITEMS'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <th align="left" width="70" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_DATE'])) ? $this->_tpldata['.'][0]['L_DATE'] : ((isset($user->lang['DATE'])) ? $user->lang['DATE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DATE'))) . ' 	}')) . '</th>
    <th align="left" width="50%">' . ((isset($this->_tpldata['.'][0]['L_NAME'])) ? $this->_tpldata['.'][0]['L_NAME'] : ((isset($user->lang['NAME'])) ? $user->lang['NAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NAME'))) . ' 	}')) . '</th>
    <th align="left" width="60" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_SPENT'])) ? $this->_tpldata['.'][0]['L_SPENT'] : ((isset($user->lang['SPENT'])) ? $user->lang['SPENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SPENT'))) . ' 	}')) . '</th>
  </tr>
  ';// BEGIN items_row
$_items_row_count = (isset($this->_tpldata['items_row.'])) ?  sizeof($this->_tpldata['items_row.']) : 0;
if ($_items_row_count) {
for ($_items_row_i = 0; $_items_row_i < $_items_row_count; $_items_row_i++)
{
echo '
  <tr class="' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['ROW_CLASS'])) ? $this->_tpldata['items_row.'][$_items_row_i]['ROW_CLASS'] : '') . '">
    <td width="70" nowrap="nowrap">' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['DATE'])) ? $this->_tpldata['items_row.'][$_items_row_i]['DATE'] : '') . '</td>
    <td width="50%" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['U_VIEW_ITEM'])) ? $this->_tpldata['items_row.'][$_items_row_i]['U_VIEW_ITEM'] : '') . '">' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['NAME'])) ? $this->_tpldata['items_row.'][$_items_row_i]['NAME'] : '') . '</a></td>
    <td width="60" nowrap="nowrap" class="negative">' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['SPENT'])) ? $this->_tpldata['items_row.'][$_items_row_i]['SPENT'] : '') . '</td>
  </tr>
  ';}}
// END items_row
echo '
</table>
</div>
' . ((isset($this->_tpldata['.'][0]['TAB_MX_END'])) ? $this->_tpldata['.'][0]['TAB_MX_END'] : '') . '
' . ((isset($this->_tpldata['.'][0]['TAB_PANE2_END'])) ? $this->_tpldata['.'][0]['TAB_PANE2_END'] : '') . '
<center><br /><span class="copyis"><a onclick="javascript:AboutDialog()" style="cursor:pointer;" onmouseover="style.textDecoration=\'underline\';" onmouseout="style.textDecoration=\'none\';"><img src="' . ((isset($this->_tpldata['.'][0]['ICON_INFO'])) ? $this->_tpldata['.'][0]['ICON_INFO'] : '') . '" alt="Credits" border="0" /> Credits</a></span>
<br /><span class="copy">' . ((isset($this->_tpldata['.'][0]['L_CREDIT_NAME'])) ? $this->_tpldata['.'][0]['L_CREDIT_NAME'] : ((isset($user->lang['CREDIT_NAME'])) ? $user->lang['CREDIT_NAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CREDIT_NAME'))) . ' 	}')) . ' v' . ((isset($this->_tpldata['.'][0]['L_VERSION'])) ? $this->_tpldata['.'][0]['L_VERSION'] : ((isset($user->lang['VERSION'])) ? $user->lang['VERSION'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'VERSION'))) . ' 	}')) . ' &copy; 2006 - ' . ((isset($this->_tpldata['.'][0]['L_YEAR'])) ? $this->_tpldata['.'][0]['L_YEAR'] : ((isset($user->lang['YEAR'])) ? $user->lang['YEAR'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'YEAR'))) . ' 	}')) . ' by <a href="http://www.wallenium.de" target="blank">Wallenium</a></span></center>';
}
?>