<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
echo '
<form method="post" action="' . ((isset($this->_tpldata['.'][0]['F_ADD_NEWS'])) ? $this->_tpldata['.'][0]['F_ADD_NEWS'] : '') . '" name="post" onsubmit="return check_form(this)">
<input type="hidden" name="' . ((isset($this->_tpldata['.'][0]['URI_NEWS'])) ? $this->_tpldata['.'][0]['URI_NEWS'] : '') . '" value="' . ((isset($this->_tpldata['.'][0]['NEWS_ID'])) ? $this->_tpldata['.'][0]['NEWS_ID'] : '') . '" />
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" colspan="2" >' . ((isset($this->_tpldata['.'][0]['L_ADD_NEWS'])) ? $this->_tpldata['.'][0]['L_ADD_NEWS'] : ((isset($user->lang['ADD_NEWS'])) ? $user->lang['ADD_NEWS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADD_NEWS'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <td width="200" class="row1" nowrap="nowrap"><b>' . ((isset($this->_tpldata['.'][0]['L_HEADLINE'])) ? $this->_tpldata['.'][0]['L_HEADLINE'] : ((isset($user->lang['HEADLINE'])) ? $user->lang['HEADLINE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'HEADLINE'))) . ' 	}')) . ':</b></td>
    <td width="100%" class="row2"><input type="text" name="news_headline" size="40" maxlength="255" value="' . ((isset($this->_tpldata['.'][0]['HEADLINE'])) ? $this->_tpldata['.'][0]['HEADLINE'] : '') . '" style="width: 450px" class="input" />' . ((isset($this->_tpldata['.'][0]['FV_HEADLINE'])) ? $this->_tpldata['.'][0]['FV_HEADLINE'] : '') . '</td>
  </tr>

  <tr>
    <td width="200" class="row1" nowrap="nowrap"><b>' . ((isset($this->_tpldata['.'][0]['L_MESSAGE_BODY'])) ? $this->_tpldata['.'][0]['L_MESSAGE_BODY'] : ((isset($user->lang['MESSAGE_BODY'])) ? $user->lang['MESSAGE_BODY'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MESSAGE_BODY'))) . ' 	}')) . ':</b></td>
    <td width="100%" class="row2">
      <table border="0" cellspacing="0" cellpadding="2" class="borderless">
        <tr>
          <td><span class="small">' . ((isset($this->_tpldata['.'][0]['L_VIDEO_HELP'])) ? $this->_tpldata['.'][0]['L_VIDEO_HELP'] : ((isset($user->lang['VIDEO_HELP'])) ? $user->lang['VIDEO_HELP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'VIDEO_HELP'))) . ' 	}')) . ' </span></td>
        </tr>
        <tr><td> </td></tr>
        <tr>
          <td>' . ((isset($this->_tpldata['.'][0]['L_NEWS_MSG'])) ? $this->_tpldata['.'][0]['L_NEWS_MSG'] : ((isset($user->lang['NEWS_MSG'])) ? $user->lang['NEWS_MSG'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NEWS_MSG'))) . ' 	}')) . '<br>
          ' . ((isset($this->_tpldata['.'][0]['WYSIWYG_SHORT'])) ? $this->_tpldata['.'][0]['WYSIWYG_SHORT'] : '') . '
          <textarea name="news_message" id="shortinput" rows="20" cols="40" style="width: 650px; height:300px;" class="jTagEditor">' . ((isset($this->_tpldata['.'][0]['MESSAGE'])) ? $this->_tpldata['.'][0]['MESSAGE'] : '') . '</textarea>' . ((isset($this->_tpldata['.'][0]['FV_MESSAGE'])) ? $this->_tpldata['.'][0]['FV_MESSAGE'] : '') . '
        ' . ((isset($this->_tpldata['.'][0]['L_READMORE_HLP'])) ? $this->_tpldata['.'][0]['L_READMORE_HLP'] : ((isset($user->lang['READMORE_HLP'])) ? $user->lang['READMORE_HLP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'READMORE_HLP'))) . ' 	}')) . '<br/><input type="button" id="blubberblabber" value="' . ((isset($this->_tpldata['.'][0]['L_READMORE'])) ? $this->_tpldata['.'][0]['L_READMORE'] : ((isset($user->lang['READMORE'])) ? $user->lang['READMORE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'READMORE'))) . ' 	}')) . '" class="mainoption" onclick="$.markItUp({ target:\'#shortinput\', openWith:\'[READ MORE]\', closeWith:\'\'});document.getElementById(\'blubberblabber\').disabled = true;"/>
        </td>
        </tr>
       </table>
    </td>
  </tr>

    <tr>
      <td width="200" class="row1" nowrap="nowrap"><b>' . ((isset($this->_tpldata['.'][0]['L_MESSAGE_SHOW_LOOT_RAID'])) ? $this->_tpldata['.'][0]['L_MESSAGE_SHOW_LOOT_RAID'] : ((isset($user->lang['MESSAGE_SHOW_LOOT_RAID'])) ? $user->lang['MESSAGE_SHOW_LOOT_RAID'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MESSAGE_SHOW_LOOT_RAID'))) . ' 	}')) . '</b></td>
      <td width="100%" class="row2">

         <select name="raid_id[]" size="10" multiple="multiple" class="input">
	          <option value=""></option>
	          ';// BEGIN raids_row
$_raids_row_count = (isset($this->_tpldata['raids_row.'])) ?  sizeof($this->_tpldata['raids_row.']) : 0;
if ($_raids_row_count) {
for ($_raids_row_i = 0; $_raids_row_i < $_raids_row_count; $_raids_row_i++)
{
echo '
	          <option value="' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['VALUE'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['SELECTED'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['OPTION'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['OPTION'] : '') . '</option>
	          ';}}
// END raids_row
echo '
    </select>

      </td>
  </tr>
  <tr>
      <td width="200" class="row1" nowrap="nowrap"><b>' . ((isset($this->_tpldata['.'][0]['L_NEWS_NOCOMMENTS'])) ? $this->_tpldata['.'][0]['L_NEWS_NOCOMMENTS'] : ((isset($user->lang['NEWS_NOCOMMENTS'])) ? $user->lang['NEWS_NOCOMMENTS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NEWS_NOCOMMENTS'))) . ' 	}')) . '</b></td>
      <td width="100%" class="row2"><input type="checkbox" name="nocomments" value="1" ' . ((isset($this->_tpldata['.'][0]['NOCOMMENTS_CHECKED'])) ? $this->_tpldata['.'][0]['NOCOMMENTS_CHECKED'] : '') . '> </td>
  </tr>
  <tr>
      <td width="200" class="row1" nowrap="nowrap"><b>' . ((isset($this->_tpldata['.'][0]['L_PERMISSIONS'])) ? $this->_tpldata['.'][0]['L_PERMISSIONS'] : ((isset($user->lang['PERMISSIONS'])) ? $user->lang['PERMISSIONS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'PERMISSIONS'))) . ' 	}')) . '</b></td>
      <td width="100%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_PERMISSIONS_HELP'])) ? $this->_tpldata['.'][0]['L_PERMISSIONS_HELP'] : ((isset($user->lang['PERMISSIONS_HELP'])) ? $user->lang['PERMISSIONS_HELP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'PERMISSIONS_HELP'))) . ' 	}')) . '<br>

      <input type="radio" name="news_permissions" value="0" ' . ((isset($this->_tpldata['.'][0]['PERM0CHECKED'])) ? $this->_tpldata['.'][0]['PERM0CHECKED'] : '') . '> ' . ((isset($this->_tpldata['.'][0]['L_PERMISSIONS_ALL'])) ? $this->_tpldata['.'][0]['L_PERMISSIONS_ALL'] : ((isset($user->lang['PERMISSIONS_ALL'])) ? $user->lang['PERMISSIONS_ALL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'PERMISSIONS_ALL'))) . ' 	}')) . ' <br>
      <input type="radio" name="news_permissions" value="1" ' . ((isset($this->_tpldata['.'][0]['PERM1CHECKED'])) ? $this->_tpldata['.'][0]['PERM1CHECKED'] : '') . '> ' . ((isset($this->_tpldata['.'][0]['L_PERMISSIONS_GUEST'])) ? $this->_tpldata['.'][0]['L_PERMISSIONS_GUEST'] : ((isset($user->lang['PERMISSIONS_GUEST'])) ? $user->lang['PERMISSIONS_GUEST'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'PERMISSIONS_GUEST'))) . ' 	}')) . ' <br>
      <input type="radio" name="news_permissions" value="2" ' . ((isset($this->_tpldata['.'][0]['PERM2CHECKED'])) ? $this->_tpldata['.'][0]['PERM2CHECKED'] : '') . '> ' . ((isset($this->_tpldata['.'][0]['L_PERMISSIONS_MEMBER'])) ? $this->_tpldata['.'][0]['L_PERMISSIONS_MEMBER'] : ((isset($user->lang['PERMISSIONS_MEMBER'])) ? $user->lang['PERMISSIONS_MEMBER'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'PERMISSIONS_MEMBER'))) . ' 	}')) . ' <br>
      </td>
  </tr>
  <tr>
      <td width="200" class="row1" nowrap="nowrap"><b>' . ((isset($this->_tpldata['.'][0]['L_STICKY_NEWS'])) ? $this->_tpldata['.'][0]['L_STICKY_NEWS'] : ((isset($user->lang['STICKY_NEWS'])) ? $user->lang['STICKY_NEWS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'STICKY_NEWS'))) . ' 	}')) . '</b></td>
      <td width="100%" class="row2"><input type="checkbox" name="news_flags" value="1" ' . ((isset($this->_tpldata['.'][0]['STICKY_CHECKED'])) ? $this->_tpldata['.'][0]['STICKY_CHECKED'] : '') . '> </td>
  </tr>
  ';// IF S_UPDATE
if ($this->_tpldata['.'][0]['S_UPDATE']) { 
echo '
  <tr>
    <td width="200" class="row1" nowrap="nowrap"><b>' . ((isset($this->_tpldata['.'][0]['L_UPDATE_DATE_TO'])) ? $this->_tpldata['.'][0]['L_UPDATE_DATE_TO'] : ((isset($user->lang['UPDATE_DATE_TO'])) ? $user->lang['UPDATE_DATE_TO'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'UPDATE_DATE_TO'))) . ' 	}')) . '</b></td>
    <td width="100%" class="row2"><input type="checkbox" name="update_date" value="1" /></td>
  </tr>
  ';// ENDIF
}
echo '
  <tr>
    <th align="center" colspan="2">
    ';// IF S_ADD
if ($this->_tpldata['.'][0]['S_ADD']) { 
echo '
    <input type="submit" name="add" value="' . ((isset($this->_tpldata['.'][0]['L_ADD_NEWS'])) ? $this->_tpldata['.'][0]['L_ADD_NEWS'] : ((isset($user->lang['ADD_NEWS'])) ? $user->lang['ADD_NEWS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADD_NEWS'))) . ' 	}')) . '" class="mainoption" /> <input type="reset" name="reset" value="' . ((isset($this->_tpldata['.'][0]['L_RESET'])) ? $this->_tpldata['.'][0]['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RESET'))) . ' 	}')) . '" class="liteoption" />
    ';// ELSE
} else {
echo '
    <input type="submit" name="update" value="' . ((isset($this->_tpldata['.'][0]['L_UPDATE_NEWS'])) ? $this->_tpldata['.'][0]['L_UPDATE_NEWS'] : ((isset($user->lang['UPDATE_NEWS'])) ? $user->lang['UPDATE_NEWS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'UPDATE_NEWS'))) . ' 	}')) . '" class="mainoption" /> <input type="submit"  name="delete" value="' . ((isset($this->_tpldata['.'][0]['L_DELETE_NEWS'])) ? $this->_tpldata['.'][0]['L_DELETE_NEWS'] : ((isset($user->lang['DELETE_NEWS'])) ? $user->lang['DELETE_NEWS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DELETE_NEWS'))) . ' 	}')) . '" class="liteoption" />
    ';// ENDIF
}
echo '
    </th>
  </tr>
</table>
</form>
';// INCLUDE page_tail.html
$this->assign_from_include('page_tail.html');

}
?>