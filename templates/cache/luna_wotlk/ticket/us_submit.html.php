<?php
if ($this->security()) {
echo '<script language="JavaScript" type="text/javascript">
<!--
b_help = "' . ((isset($this->_tpldata['.'][0]['L_B_HELP'])) ? $this->_tpldata['.'][0]['L_B_HELP'] : ((isset($user->lang['B_HELP'])) ? $user->lang['B_HELP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'B_HELP'))) . ' 	}')) . '";
i_help = "' . ((isset($this->_tpldata['.'][0]['L_I_HELP'])) ? $this->_tpldata['.'][0]['L_I_HELP'] : ((isset($user->lang['I_HELP'])) ? $user->lang['I_HELP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'I_HELP'))) . ' 	}')) . '";
u_help = "' . ((isset($this->_tpldata['.'][0]['L_U_HELP'])) ? $this->_tpldata['.'][0]['L_U_HELP'] : ((isset($user->lang['U_HELP'])) ? $user->lang['U_HELP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'U_HELP'))) . ' 	}')) . '";
q_help = "' . ((isset($this->_tpldata['.'][0]['L_Q_HELP'])) ? $this->_tpldata['.'][0]['L_Q_HELP'] : ((isset($user->lang['Q_HELP'])) ? $user->lang['Q_HELP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'Q_HELP'))) . ' 	}')) . '";
c_help = "' . ((isset($this->_tpldata['.'][0]['L_C_HELP'])) ? $this->_tpldata['.'][0]['L_C_HELP'] : ((isset($user->lang['C_HELP'])) ? $user->lang['C_HELP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'C_HELP'))) . ' 	}')) . '";
p_help = "' . ((isset($this->_tpldata['.'][0]['L_P_HELP'])) ? $this->_tpldata['.'][0]['L_P_HELP'] : ((isset($user->lang['P_HELP'])) ? $user->lang['P_HELP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'P_HELP'))) . ' 	}')) . '";
w_help = "' . ((isset($this->_tpldata['.'][0]['L_W_HELP'])) ? $this->_tpldata['.'][0]['L_W_HELP'] : ((isset($user->lang['W_HELP'])) ? $user->lang['W_HELP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'W_HELP'))) . ' 	}')) . '";

var theSelection = false;
bbcode = new Array();
bbtags = new Array(\'[b]\',\'[/b]\',\'[i]\',\'[/i]\',\'[u]\',\'[/u]\',\'[quote]\',\'[/quote]\',\'[img]http://\',\'[/img]\',\'[url]http://\',\'[/url]\',\'[center]\',\'[/center]\');

function helpline(help)
{
    document.post.helpbox.value = eval(help + "_help");
}

function check_form()
{
    if (document.post.new_ticket_message.value.length < 2)
    {
        //alert(\'' . ((isset($this->_tpldata['.'][0]['MSG_MESSAGE_EMPTY'])) ? $this->_tpldata['.'][0]['MSG_MESSAGE_EMPTY'] : '') . '\');
	    alert(\'Fehler in Ticket\');
        return false;
    }
    return true;
}

function bbstyle(bbnumber)
{
    // Insert opening/closing tags
    document.post.new_ticket_message.value += bbtags[bbnumber] + bbtags[bbnumber+1];
    document.post.new_ticket_message.focus();
    return;

}
function check_form1()
{
	if (document.post1.replyticket_message.value.length < 2)
	{
        //alert(\'' . ((isset($this->_tpldata['.'][0]['MSG_MESSAGE_EMPTY'])) ? $this->_tpldata['.'][0]['MSG_MESSAGE_EMPTY'] : '') . '\');
		alert(\'Fehler in Replyticket\');
		return false;
	}
	return true;
}
function bbstyle1(bbnumber)
{
    // Insert opening/closing tags
	document.post1.replyticket_message.value += bbtags[bbnumber] + bbtags[bbnumber+1];
	document.post1.replyticket_message.focus();
	return;

}
//-->
</script>
<table width="100%" border="0" cellspacing="1" cellpadding="2">
<tr>
<td>
';// IF S_NOREPLYOPEN
if ($this->_tpldata['.'][0]['S_NOREPLYOPEN']) { 
echo '
<form method="post" action="' . ((isset($this->_tpldata['.'][0]['F_SUBMIT_TICKET'])) ? $this->_tpldata['.'][0]['F_SUBMIT_TICKET'] : '') . '" name="post" onsubmit="return check_form(this)">
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" colspan="2" >' . ((isset($this->_tpldata['.'][0]['L_SUBMIT_TICKET'])) ? $this->_tpldata['.'][0]['L_SUBMIT_TICKET'] : ((isset($user->lang['SUBMIT_TICKET'])) ? $user->lang['SUBMIT_TICKET'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SUBMIT_TICKET'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <td width="200" class="row1" nowrap="nowrap"><b>' . ((isset($this->_tpldata['.'][0]['L_MESSAGE_BODY'])) ? $this->_tpldata['.'][0]['L_MESSAGE_BODY'] : ((isset($user->lang['MESSAGE_BODY'])) ? $user->lang['MESSAGE_BODY'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MESSAGE_BODY'))) . ' 	}')) . ':</b></td>
    <td width="100%" class="row2">
      <table border="0" cellspacing="0" cellpadding="2" class="borderless">
        <tr>
          <td><input type="button" accesskey="b" name="addcode0" value=" B " style="font-weight: bold; width: 30px" onmouseover="helpline(\'b\')" onclick="bbstyle(0)" class="input" /></td>
          <td><input type="button" accesskey="i" name="addcode2" value=" i " style="font-style: italic; width: 30px" onmouseover="helpline(\'i\')" onclick="bbstyle(2)" class="input" /></td>
          <td><input type="button" accesskey="u" name="addcode4" value=" u " style="text-decoration: underline; width: 30px" onmouseover="helpline(\'u\')" onclick="bbstyle(4)" class="input" /></td>
          <td><input type="button" accesskey="q" name="addcode6" value=" Quote " style="width: 50px" onmouseover="helpline(\'q\')" onclick="bbstyle(6)" class="input" /></td>
          <td><input type="button" accesskey="c" name="addcode12" value=" Center " style="width: 50px" onmouseover="helpline(\'c\')" onclick="bbstyle(12)" class="input" /></td>
          <td><input type="button" accesskey="p" name="addcode8" value=" IMG " style="width: 50px" onmouseover="helpline(\'p\')" onclick="bbstyle(8)" class="input" /></td>
          <td><input type="button" accesskey="w" name="addcode10" value=" URL " style="width: 50px" onmouseover="helpline(\'w\')" onclick="bbstyle(10)" class="input" /></td>
        </tr>
      </table>
      <table border="0" cellspacing="0" cellpadding="2" class="borderless">
        <tr>
          <td><input type="text" name="helpbox" size="45" maxlength="100" style="width: 450px; font-size: 10px;" class="helpline2" value="" /></td>
        </tr>
        <tr>
          <td><textarea name="new_ticket_message" rows="15" cols="60" style="width: 450px" class="input"></textarea>' . ((isset($this->_tpldata['.'][0]['FV_MESSAGE'])) ? $this->_tpldata['.'][0]['FV_MESSAGE'] : '') . '</td>
        </tr>
      </table>
    </td>
  </tr>

  <tr>
    <th align="center" colspan="2">
    ';// IF S_SUBMIT
if ($this->_tpldata['.'][0]['S_SUBMIT']) { 
echo '
    <input type="submit" name="submit" value="' . ((isset($this->_tpldata['.'][0]['L_SUBMIT_TICKET'])) ? $this->_tpldata['.'][0]['L_SUBMIT_TICKET'] : ((isset($user->lang['SUBMIT_TICKET'])) ? $user->lang['SUBMIT_TICKET'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SUBMIT_TICKET'))) . ' 	}')) . '" class="mainoption" /> <input type="reset" name="reset" value="' . ((isset($this->_tpldata['.'][0]['L_RESET'])) ? $this->_tpldata['.'][0]['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RESET'))) . ' 	}')) . '" class="liteoption" />
    ';// ELSE
} else {
echo '
    <input type="submit" name="update" value="' . ((isset($this->_tpldata['.'][0]['L_UPDATE_TICKET'])) ? $this->_tpldata['.'][0]['L_UPDATE_TICKET'] : ((isset($user->lang['UPDATE_TICKET'])) ? $user->lang['UPDATE_TICKET'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'UPDATE_TICKET'))) . ' 	}')) . '" class="mainoption" /> <input type="submit"  name="delete" value="' . ((isset($this->_tpldata['.'][0]['L_DELETE_TICKET'])) ? $this->_tpldata['.'][0]['L_DELETE_TICKET'] : ((isset($user->lang['DELETE_TICKET'])) ? $user->lang['DELETE_TICKET'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DELETE_TICKET'))) . ' 	}')) . '" class="liteoption" />
    ';// ENDIF
}
echo '
    </th>
  </tr>
</table>
</form>
<br />
';// ENDIF
}
// BEGIN ticket_row
$_ticket_row_count = (isset($this->_tpldata['ticket_row.'])) ?  sizeof($this->_tpldata['ticket_row.']) : 0;
if ($_ticket_row_count) {
for ($_ticket_row_i = 0; $_ticket_row_i < $_ticket_row_count; $_ticket_row_i++)
{
echo '
<table width="100%" border="0" cellspacing="1" cellpadding="2">
<tr>
    <th align="left" width="100">' . ((isset($this->_tpldata['.'][0]['L_MESSAGE_DATE'])) ? $this->_tpldata['.'][0]['L_MESSAGE_DATE'] : ((isset($user->lang['MESSAGE_DATE'])) ? $user->lang['MESSAGE_DATE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MESSAGE_DATE'))) . ' 	}')) . '</th>
    <th>' . ((isset($this->_tpldata['.'][0]['L_MESSAGE_BODY'])) ? $this->_tpldata['.'][0]['L_MESSAGE_BODY'] : ((isset($user->lang['MESSAGE_BODY'])) ? $user->lang['MESSAGE_BODY'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MESSAGE_BODY'))) . ' 	}')) . '</th>
    <th align="center" width="20">' . ((isset($this->_tpldata['.'][0]['L_DELETE'])) ? $this->_tpldata['.'][0]['L_DELETE'] : ((isset($user->lang['DELETE'])) ? $user->lang['DELETE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DELETE'))) . ' 	}')) . '</th>
</tr>
<tr class="row2">
    <td align="left" width="100">' . ((isset($this->_tpldata['ticket_row.'][$_ticket_row_i]['MESSAGE_DATE'])) ? $this->_tpldata['ticket_row.'][$_ticket_row_i]['MESSAGE_DATE'] : '') . '</td>
    <td>' . ((isset($this->_tpldata['ticket_row.'][$_ticket_row_i]['MESSAGE_BODY'])) ? $this->_tpldata['ticket_row.'][$_ticket_row_i]['MESSAGE_BODY'] : '') . '</td>
    <td align="center" width="20">
    <a href="' . ((isset($this->_tpldata['ticket_row.'][$_ticket_row_i]['DELETE'])) ? $this->_tpldata['ticket_row.'][$_ticket_row_i]['DELETE'] : '') . '"><img border="0" src="images/delete.gif" width="18" height="17">
    </td>
</tr>
';// IF ticket_row.S_REPLIES
if ($this->_tpldata['ticket_row.'][$_ticket_row_i]['S_REPLIES']) { 
echo '
<tr>
  <td></td>
    <td colspan="2">
      <table width="100%" border="0" cellspacing="1" cellpadding="2">
       <tr>
        <th align="left" width="50">' . ((isset($this->_tpldata['.'][0]['L_FROM_ADMIN'])) ? $this->_tpldata['.'][0]['L_FROM_ADMIN'] : ((isset($user->lang['FROM_ADMIN'])) ? $user->lang['FROM_ADMIN'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FROM_ADMIN'))) . ' 	}')) . '</th>
        <th align="left" width="100">' . ((isset($this->_tpldata['.'][0]['L_REPLY_DATE'])) ? $this->_tpldata['.'][0]['L_REPLY_DATE'] : ((isset($user->lang['REPLY_DATE'])) ? $user->lang['REPLY_DATE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'REPLY_DATE'))) . ' 	}')) . '</th>
        <th>' . ((isset($this->_tpldata['.'][0]['L_REPLY_BODY'])) ? $this->_tpldata['.'][0]['L_REPLY_BODY'] : ((isset($user->lang['REPLY_BODY'])) ? $user->lang['REPLY_BODY'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'REPLY_BODY'))) . ' 	}')) . '</th>
        <th align="center" width="20">' . ((isset($this->_tpldata['.'][0]['L_READ'])) ? $this->_tpldata['.'][0]['L_READ'] : ((isset($user->lang['READ'])) ? $user->lang['READ'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'READ'))) . ' 	}')) . '</th>
       </tr>
       ';// BEGIN reply_row
$_reply_row_count = (isset($this->_tpldata['ticket_row.'][$_ticket_row_i]['reply_row.'])) ? sizeof($this->_tpldata['ticket_row.'][$_ticket_row_i]['reply_row.']) : 0;
if ($_reply_row_count) {
for ($_reply_row_i = 0; $_reply_row_i < $_reply_row_count; $_reply_row_i++)
{
echo '
       <form method="POST" action="' . ((isset($this->_tpldata['ticket_row.'][$_ticket_row_i]['reply_row.'][$_reply_row_i]['F_MARKREAD'])) ? $this->_tpldata['ticket_row.'][$_ticket_row_i]['reply_row.'][$_reply_row_i]['F_MARKREAD'] : '') . '" name="update">
       <input type="hidden" name="reply_id" value="' . ((isset($this->_tpldata['ticket_row.'][$_ticket_row_i]['reply_row.'][$_reply_row_i]['REPLY_ID'])) ? $this->_tpldata['ticket_row.'][$_ticket_row_i]['reply_row.'][$_reply_row_i]['REPLY_ID'] : '') . '">
       <tr class="' . ((isset($this->_tpldata['ticket_row.'][$_ticket_row_i]['reply_row.'][$_reply_row_i]['ROW_CLASS'])) ? $this->_tpldata['ticket_row.'][$_ticket_row_i]['reply_row.'][$_reply_row_i]['ROW_CLASS'] : '') . '">
        <td align="left" width="50">' . ((isset($this->_tpldata['ticket_row.'][$_ticket_row_i]['reply_row.'][$_reply_row_i]['FROM_ADMIN'])) ? $this->_tpldata['ticket_row.'][$_ticket_row_i]['reply_row.'][$_reply_row_i]['FROM_ADMIN'] : '') . '</td>
        <td align="left" width="100">' . ((isset($this->_tpldata['ticket_row.'][$_ticket_row_i]['reply_row.'][$_reply_row_i]['REPLY_DATE'])) ? $this->_tpldata['ticket_row.'][$_ticket_row_i]['reply_row.'][$_reply_row_i]['REPLY_DATE'] : '') . '</td>
        <td>' . ((isset($this->_tpldata['ticket_row.'][$_ticket_row_i]['reply_row.'][$_reply_row_i]['REPLY_BODY'])) ? $this->_tpldata['ticket_row.'][$_ticket_row_i]['reply_row.'][$_reply_row_i]['REPLY_BODY'] : '') . '</td>
        <td align="center" width="20">
        <input type="checkbox" name="markread" value="dummy" class="input" onClick="submit()" ' . ((isset($this->_tpldata['ticket_row.'][$_ticket_row_i]['reply_row.'][$_reply_row_i]['READ'])) ? $this->_tpldata['ticket_row.'][$_ticket_row_i]['reply_row.'][$_reply_row_i]['READ'] : '') . '>
        </td>
       </tr>
       </form>
       ';}}
// END reply_row
echo '
      </table>
   </td>
</tr>
';// ENDIF
}
// BEGIN replyticket_row
$_replyticket_row_count = (isset($this->_tpldata['ticket_row.'][$_ticket_row_i]['replyticket_row.'])) ? sizeof($this->_tpldata['ticket_row.'][$_ticket_row_i]['replyticket_row.']) : 0;
if ($_replyticket_row_count) {
for ($_replyticket_row_i = 0; $_replyticket_row_i < $_replyticket_row_count; $_replyticket_row_i++)
{
echo '
<tr class="' . ((isset($this->_tpldata['ticket_row.'][$_ticket_row_i]['replyticket_row.'][$_replyticket_row_i]['ROW_CLASS'])) ? $this->_tpldata['ticket_row.'][$_ticket_row_i]['replyticket_row.'][$_replyticket_row_i]['ROW_CLASS'] : '') . '" >
	<td align="left" width="100">' . ((isset($this->_tpldata['ticket_row.'][$_ticket_row_i]['replyticket_row.'][$_replyticket_row_i]['MESSAGE_DATE'])) ? $this->_tpldata['ticket_row.'][$_ticket_row_i]['replyticket_row.'][$_replyticket_row_i]['MESSAGE_DATE'] : '') . '</td>
		<td colspan="2">' . ((isset($this->_tpldata['ticket_row.'][$_ticket_row_i]['replyticket_row.'][$_replyticket_row_i]['MESSAGE_BODY'])) ? $this->_tpldata['ticket_row.'][$_ticket_row_i]['replyticket_row.'][$_replyticket_row_i]['MESSAGE_BODY'] : '') . '</td>
</tr>
	';// IF ticket_row.replyticket_row.S_REPLIES
if ($this->_tpldata['ticket_row.'][$_ticket_row_i]['replyticket_row.'][$_replyticket_row_i]['S_REPLIES']) { 
echo '
	<tr>
		<td></td>
		<td colspan="2">
		 <table width="100%" border="0" cellspacing="1" cellpadding="2">
	';// IF ticket_row.replyticket_row.S_REPLYHEADER
if ($this->_tpldata['ticket_row.'][$_ticket_row_i]['replyticket_row.'][$_replyticket_row_i]['S_REPLYHEADER']) { 
echo '
	<tr>
        <th align="left" width="50">' . ((isset($this->_tpldata['.'][0]['L_FROM_ADMIN'])) ? $this->_tpldata['.'][0]['L_FROM_ADMIN'] : ((isset($user->lang['FROM_ADMIN'])) ? $user->lang['FROM_ADMIN'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FROM_ADMIN'))) . ' 	}')) . '</th>
        <th align="left" width="100">' . ((isset($this->_tpldata['.'][0]['L_REPLY_DATE'])) ? $this->_tpldata['.'][0]['L_REPLY_DATE'] : ((isset($user->lang['REPLY_DATE'])) ? $user->lang['REPLY_DATE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'REPLY_DATE'))) . ' 	}')) . '</th>
        <th>' . ((isset($this->_tpldata['.'][0]['L_REPLY_BODY'])) ? $this->_tpldata['.'][0]['L_REPLY_BODY'] : ((isset($user->lang['REPLY_BODY'])) ? $user->lang['REPLY_BODY'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'REPLY_BODY'))) . ' 	}')) . '</th>
        <th align="center" width="20">' . ((isset($this->_tpldata['.'][0]['L_READ'])) ? $this->_tpldata['.'][0]['L_READ'] : ((isset($user->lang['READ'])) ? $user->lang['READ'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'READ'))) . ' 	}')) . '</th>
        </tr>	 
	';// ENDIF
}
// BEGIN reply_row
$_reply_row_count = (isset($this->_tpldata['ticket_row.'][$_ticket_row_i]['replyticket_row.'][$_replyticket_row_i]['reply_row.'])) ? sizeof($this->_tpldata['ticket_row.'][$_ticket_row_i]['replyticket_row.'][$_replyticket_row_i]['reply_row.']) : 0;
if ($_reply_row_count) {
for ($_reply_row_i = 0; $_reply_row_i < $_reply_row_count; $_reply_row_i++)
{
echo '
		 <form method="POST" action="' . ((isset($this->_tpldata['ticket_row.'][$_ticket_row_i]['replyticket_row.'][$_replyticket_row_i]['reply_row.'][$_reply_row_i]['F_MARKREAD'])) ? $this->_tpldata['ticket_row.'][$_ticket_row_i]['replyticket_row.'][$_replyticket_row_i]['reply_row.'][$_reply_row_i]['F_MARKREAD'] : '') . '" name="update">
		 <input type="hidden" name="reply_id" value="' . ((isset($this->_tpldata['ticket_row.'][$_ticket_row_i]['replyticket_row.'][$_replyticket_row_i]['reply_row.'][$_reply_row_i]['REPLY_ID'])) ? $this->_tpldata['ticket_row.'][$_ticket_row_i]['replyticket_row.'][$_replyticket_row_i]['reply_row.'][$_reply_row_i]['REPLY_ID'] : '') . '">
		 <tr class="' . ((isset($this->_tpldata['ticket_row.'][$_ticket_row_i]['replyticket_row.'][$_replyticket_row_i]['reply_row.'][$_reply_row_i]['ROW_CLASS'])) ? $this->_tpldata['ticket_row.'][$_ticket_row_i]['replyticket_row.'][$_replyticket_row_i]['reply_row.'][$_reply_row_i]['ROW_CLASS'] : '') . '">
		  <td align="left" width="50">' . ((isset($this->_tpldata['ticket_row.'][$_ticket_row_i]['replyticket_row.'][$_replyticket_row_i]['reply_row.'][$_reply_row_i]['FROM_ADMIN'])) ? $this->_tpldata['ticket_row.'][$_ticket_row_i]['replyticket_row.'][$_replyticket_row_i]['reply_row.'][$_reply_row_i]['FROM_ADMIN'] : '') . '</td>
		  <td align="left" width="100">' . ((isset($this->_tpldata['ticket_row.'][$_ticket_row_i]['replyticket_row.'][$_replyticket_row_i]['reply_row.'][$_reply_row_i]['REPLY_DATE'])) ? $this->_tpldata['ticket_row.'][$_ticket_row_i]['replyticket_row.'][$_replyticket_row_i]['reply_row.'][$_reply_row_i]['REPLY_DATE'] : '') . '</td>
		  <td>' . ((isset($this->_tpldata['ticket_row.'][$_ticket_row_i]['replyticket_row.'][$_replyticket_row_i]['reply_row.'][$_reply_row_i]['REPLY_BODY'])) ? $this->_tpldata['ticket_row.'][$_ticket_row_i]['replyticket_row.'][$_replyticket_row_i]['reply_row.'][$_reply_row_i]['REPLY_BODY'] : '') . '</td>
		  <td align="center" width="20">
		   <input type="checkbox" name="markread" value="dummy" class="input" onClick="submit()" ' . ((isset($this->_tpldata['ticket_row.'][$_ticket_row_i]['replyticket_row.'][$_replyticket_row_i]['reply_row.'][$_reply_row_i]['READ'])) ? $this->_tpldata['ticket_row.'][$_ticket_row_i]['replyticket_row.'][$_replyticket_row_i]['reply_row.'][$_reply_row_i]['READ'] : '') . '>
		  </td>
		 </tr>
		 </form>
		';}}
// END reply_row
echo '
		 </table>
		</td>
	</tr>
	';// ENDIF
}
}}
// END replyticket_row
// IF ticket_row.S_REPLYTICKET
if ($this->_tpldata['ticket_row.'][$_ticket_row_i]['S_REPLYTICKET']) { 
echo '
<tr class="' . ((isset($this->_tpldata['ticket_row.'][$_ticket_row_i]['ROW_CLASS'])) ? $this->_tpldata['ticket_row.'][$_ticket_row_i]['ROW_CLASS'] : '') . '" colspan="3">
	<form method="post" action="' . ((isset($this->_tpldata['ticket_row.'][$_ticket_row_i]['F_SUBMIT_REPLYTICKET'])) ? $this->_tpldata['ticket_row.'][$_ticket_row_i]['F_SUBMIT_REPLYTICKET'] : '') . '" name="post1" onsubmit="return check_form1(this)">
	<input type="hidden" name="session_id" value="' . ((isset($this->_tpldata['ticket_row.'][$_ticket_row_i]['TICKET_ID'])) ? $this->_tpldata['ticket_row.'][$_ticket_row_i]['TICKET_ID'] : '') . '">
		<table width="100%" border="0" cellspacing="1" cellpadding="2">
		<tr>
		 <th align="center" colspan="2" >' . ((isset($this->_tpldata['.'][0]['L_SUBMIT_REPLYTICKET'])) ? $this->_tpldata['.'][0]['L_SUBMIT_REPLYTICKET'] : ((isset($user->lang['SUBMIT_REPLYTICKET'])) ? $user->lang['SUBMIT_REPLYTICKET'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SUBMIT_REPLYTICKET'))) . ' 	}')) . '</th>
		</tr>
		<tr>
		 <td width="200" class="row1" nowrap="nowrap"><b>' . ((isset($this->_tpldata['.'][0]['L_MESSAGE_BODY'])) ? $this->_tpldata['.'][0]['L_MESSAGE_BODY'] : ((isset($user->lang['MESSAGE_BODY'])) ? $user->lang['MESSAGE_BODY'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MESSAGE_BODY'))) . ' 	}')) . ':</b></td>
		 <td width="100%" class="row2">
		  <table border="0" cellspacing="0" cellpadding="2" class="borderless">
		  <tr>
		   <td><input type="button" accesskey="b" name="addcode0" value=" B " style="font-weight: bold; width: 30px" onmouseover="helpline(\'b\')" onclick="bbstyle1(0)" class="input" /></td>
		   <td><input type="button" accesskey="i" name="addcode2" value=" i " style="font-style: italic; width: 30px" onmouseover="helpline(\'i\')" onclick="bbstyle1(2)" class="input" /></td>
		   <td><input type="button" accesskey="u" name="addcode4" value=" u " style="text-decoration: underline; width: 30px" onmouseover="helpline(\'u\')" onclick="bbstyle1(4)" class="input" /></td>
		   <td><input type="button" accesskey="q" name="addcode6" value=" Quote " style="width: 50px" onmouseover="helpline(\'q\')" onclick="bbstyle1(6)" class="input" /></td>
		   <td><input type="button" accesskey="c" name="addcode12" value=" Center " style="width: 50px" onmouseover="helpline(\'c\')" onclick="bbstyle1(12)" class="input" /></td>
		   <td><input type="button" accesskey="p" name="addcode8" value=" IMG " style="width: 50px" onmouseover="helpline(\'p\')" onclick="bbstyle1(8)" class="input" /></td>
		   <td><input type="button" accesskey="w" name="addcode10" value=" URL " style="width: 50px" onmouseover="helpline(\'w\')" onclick="bbstyle1(10)" class="input" /></td>
		  </tr>
		  </table>
		  <table border="0" cellspacing="0" cellpadding="2" class="borderless">
		  <tr>
		   <td><input type="text" name="helpbox" size="45" maxlength="100" style="width: 450px; font-size: 10px;" class="helpline2" value="" /></td>
		  </tr>
		  <tr>
		   <td><textarea name="replyticket_message" rows="15" cols="60" style="width: 450px" class="input"></textarea>' . ((isset($this->_tpldata['.'][0]['FV_MESSAGE'])) ? $this->_tpldata['.'][0]['FV_MESSAGE'] : '') . '</td>
		  </tr>
		  </table>
		 </td>
		</tr>

		<tr>
		 <th align="center" colspan="2">
		 <input type="submit" name="submit1" value="' . ((isset($this->_tpldata['.'][0]['L_SUBMIT_TICKET'])) ? $this->_tpldata['.'][0]['L_SUBMIT_TICKET'] : ((isset($user->lang['SUBMIT_TICKET'])) ? $user->lang['SUBMIT_TICKET'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SUBMIT_TICKET'))) . ' 	}')) . '" class="mainoption" /> <input type="reset" name="reset" value="' . ((isset($this->_tpldata['.'][0]['L_RESET'])) ? $this->_tpldata['.'][0]['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RESET'))) . ' 	}')) . '" class="liteoption" />

		 </th>
		</tr>
		</table>
	</form>
</tr>
	';// ELSE
} else {
echo '
	<tr>
		<th colspan="3" align="center">
		<a href="' . ((isset($this->_tpldata['ticket_row.'][$_ticket_row_i]['REPLYTICKET'])) ? $this->_tpldata['ticket_row.'][$_ticket_row_i]['REPLYTICKET'] : '') . '"><img border="0" src="images/replyticket.gif" width="25" height="25"> ' . ((isset($this->_tpldata['.'][0]['L_REPLYTICKET'])) ? $this->_tpldata['.'][0]['L_REPLYTICKET'] : ((isset($user->lang['REPLYTICKET'])) ? $user->lang['REPLYTICKET'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'REPLYTICKET'))) . ' 	}')) . '</a>
		</th>
	</tr>
		
';// ENDIF
}
echo '

</table>
<br />
';}}
// END ticket_row
echo '
</td>
</tr>
</table>';
}
?>