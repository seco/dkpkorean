<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
echo '
<script language="JavaScript" type="text/javascript">
<!--
function preview(preview, new_value)
{
    preview.style.backgroundColor = new_value;
}
//-->
</script>
<form method="post" action="' . ((isset($this->_tpldata['.'][0]['F_ADD_STYLE'])) ? $this->_tpldata['.'][0]['F_ADD_STYLE'] : '') . '" name="post">
<input type="hidden" name="styleid" value="' . ((isset($this->_tpldata['.'][0]['STYLE_ID'])) ? $this->_tpldata['.'][0]['STYLE_ID'] : '') . '" />
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_STYLE_SETTINGS'])) ? $this->_tpldata['.'][0]['L_STYLE_SETTINGS'] : ((isset($user->lang['STYLE_SETTINGS'])) ? $user->lang['STYLE_SETTINGS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'STYLE_SETTINGS'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_STYLE_NAME'])) ? $this->_tpldata['.'][0]['L_STYLE_NAME'] : ((isset($user->lang['STYLE_NAME'])) ? $user->lang['STYLE_NAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'STYLE_NAME'))) . ' 	}')) . '</td>
    <td width="40%" class="row1"><input type="text" name="style_name" size="35" maxlength="100" value="' . ((isset($this->_tpldata['.'][0]['STYLE_NAME'])) ? $this->_tpldata['.'][0]['STYLE_NAME'] : '') . '" class="input" /></td>
  </tr>
  <tr>
    <td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_TEMPLATE'])) ? $this->_tpldata['.'][0]['L_TEMPLATE'] : ((isset($user->lang['TEMPLATE'])) ? $user->lang['TEMPLATE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TEMPLATE'))) . ' 	}')) . '</td>
    <td width="40%" class="row1">
      <select name="template_path" class="input">
        ';// BEGIN template_row
$_template_row_count = (isset($this->_tpldata['template_row.'])) ?  sizeof($this->_tpldata['template_row.']) : 0;
if ($_template_row_count) {
for ($_template_row_i = 0; $_template_row_i < $_template_row_count; $_template_row_i++)
{
echo '
        <option value="' . ((isset($this->_tpldata['template_row.'][$_template_row_i]['VALUE'])) ? $this->_tpldata['template_row.'][$_template_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['template_row.'][$_template_row_i]['SELECTED'])) ? $this->_tpldata['template_row.'][$_template_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['template_row.'][$_template_row_i]['OPTION'])) ? $this->_tpldata['template_row.'][$_template_row_i]['OPTION'] : '') . '</option>
        ';}}
// END template_row
echo '
      </select>
    </td>
  </tr>
</table>
<br />
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" width="60%">' . ((isset($this->_tpldata['.'][0]['L_ELEMENT'])) ? $this->_tpldata['.'][0]['L_ELEMENT'] : ((isset($user->lang['ELEMENT'])) ? $user->lang['ELEMENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ELEMENT'))) . ' 	}')) . '</th>
    <th align="center" width="40%">' . ((isset($this->_tpldata['.'][0]['L_VALUE'])) ? $this->_tpldata['.'][0]['L_VALUE'] : ((isset($user->lang['VALUE'])) ? $user->lang['VALUE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'VALUE'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_BACKGROUND_COLOR'])) ? $this->_tpldata['.'][0]['L_BACKGROUND_COLOR'] : ((isset($user->lang['BACKGROUND_COLOR'])) ? $user->lang['BACKGROUND_COLOR'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BACKGROUND_COLOR'))) . ' 	}')) . '</td>
    <td width="40%" class="row1">
      <input type="text" name="body_background" size="8" maxlength="6" value="' . ((isset($this->_tpldata['.'][0]['BODY_BACKGROUND'])) ? $this->_tpldata['.'][0]['BODY_BACKGROUND'] : '') . '" class="input" onchange="preview(this.form.body_background_preview, this.value)" />
      <input type="button" name="body_background_preview" value="       " disabled="disabled" class="input" style="background-color: #' . ((isset($this->_tpldata['.'][0]['BODY_BACKGROUND'])) ? $this->_tpldata['.'][0]['BODY_BACKGROUND'] : '') . '" />
    </td>
  </tr>
  <tr>
    <td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_FONTFACE1'])) ? $this->_tpldata['.'][0]['L_FONTFACE1'] : ((isset($user->lang['FONTFACE1'])) ? $user->lang['FONTFACE1'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FONTFACE1'))) . ' 	}')) . '<br /><span class="small">' . ((isset($this->_tpldata['.'][0]['L_FONTFACE1_NOTE'])) ? $this->_tpldata['.'][0]['L_FONTFACE1_NOTE'] : ((isset($user->lang['FONTFACE1_NOTE'])) ? $user->lang['FONTFACE1_NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FONTFACE1_NOTE'))) . ' 	}')) . '</span></td>
    <td width="40%" class="row1"><input type="text" name="fontface1" size="35" maxlength="60" value="' . ((isset($this->_tpldata['.'][0]['FONTFACE1'])) ? $this->_tpldata['.'][0]['FONTFACE1'] : '') . '" class="input" /></td>
  </tr>
  <tr>
    <td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_FONTFACE2'])) ? $this->_tpldata['.'][0]['L_FONTFACE2'] : ((isset($user->lang['FONTFACE2'])) ? $user->lang['FONTFACE2'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FONTFACE2'))) . ' 	}')) . '<br /><span class="small">' . ((isset($this->_tpldata['.'][0]['L_FONTFACE2_NOTE'])) ? $this->_tpldata['.'][0]['L_FONTFACE2_NOTE'] : ((isset($user->lang['FONTFACE2_NOTE'])) ? $user->lang['FONTFACE2_NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FONTFACE2_NOTE'))) . ' 	}')) . '</span></td>
    <td width="40%" class="row1"><input type="text" name="fontface2" size="35" maxlength="60" value="' . ((isset($this->_tpldata['.'][0]['FONTFACE2'])) ? $this->_tpldata['.'][0]['FONTFACE2'] : '') . '" class="input" /></td>
  </tr>
  <tr>
    <td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_FONTFACE3'])) ? $this->_tpldata['.'][0]['L_FONTFACE3'] : ((isset($user->lang['FONTFACE3'])) ? $user->lang['FONTFACE3'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FONTFACE3'))) . ' 	}')) . '<br /><span class="small">' . ((isset($this->_tpldata['.'][0]['L_FONTFACE3_NOTE'])) ? $this->_tpldata['.'][0]['L_FONTFACE3_NOTE'] : ((isset($user->lang['FONTFACE3_NOTE'])) ? $user->lang['FONTFACE3_NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FONTFACE3_NOTE'))) . ' 	}')) . '</span></td>
    <td width="40%" class="row1"><input type="text" name="fontface3" size="35" maxlength="60" value="' . ((isset($this->_tpldata['.'][0]['FONTFACE3'])) ? $this->_tpldata['.'][0]['FONTFACE3'] : '') . '" class="input" /></td>
  </tr>
  <tr>
    <td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_FONTSIZE1'])) ? $this->_tpldata['.'][0]['L_FONTSIZE1'] : ((isset($user->lang['FONTSIZE1'])) ? $user->lang['FONTSIZE1'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FONTSIZE1'))) . ' 	}')) . '<br /><span class="small">' . ((isset($this->_tpldata['.'][0]['L_FONTSIZE1_NOTE'])) ? $this->_tpldata['.'][0]['L_FONTSIZE1_NOTE'] : ((isset($user->lang['FONTSIZE1_NOTE'])) ? $user->lang['FONTSIZE1_NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FONTSIZE1_NOTE'))) . ' 	}')) . '</span></td>
    <td width="40%" class="row1"><input type="text" name="fontsize1" size="3" maxlength="4" value="' . ((isset($this->_tpldata['.'][0]['FONTSIZE1'])) ? $this->_tpldata['.'][0]['FONTSIZE1'] : '') . '" class="input" /> px</td>
  </tr>
  <tr>
    <td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_FONTSIZE2'])) ? $this->_tpldata['.'][0]['L_FONTSIZE2'] : ((isset($user->lang['FONTSIZE2'])) ? $user->lang['FONTSIZE2'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FONTSIZE2'))) . ' 	}')) . '<br /><span class="small">' . ((isset($this->_tpldata['.'][0]['L_FONTSIZE2_NOTE'])) ? $this->_tpldata['.'][0]['L_FONTSIZE2_NOTE'] : ((isset($user->lang['FONTSIZE2_NOTE'])) ? $user->lang['FONTSIZE2_NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FONTSIZE2_NOTE'))) . ' 	}')) . '</span></td>
    <td width="40%" class="row1"><input type="text" name="fontsize2" size="3" maxlength="4" value="' . ((isset($this->_tpldata['.'][0]['FONTSIZE2'])) ? $this->_tpldata['.'][0]['FONTSIZE2'] : '') . '" class="input" /> px</td>
  </tr>
  <tr>
    <td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_FONTSIZE3'])) ? $this->_tpldata['.'][0]['L_FONTSIZE3'] : ((isset($user->lang['FONTSIZE3'])) ? $user->lang['FONTSIZE3'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FONTSIZE3'))) . ' 	}')) . '<br /><span class="small">' . ((isset($this->_tpldata['.'][0]['L_FONTSIZE3_NOTE'])) ? $this->_tpldata['.'][0]['L_FONTSIZE3_NOTE'] : ((isset($user->lang['FONTSIZE3_NOTE'])) ? $user->lang['FONTSIZE3_NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FONTSIZE3_NOTE'))) . ' 	}')) . '</span></td>
    <td width="40%" class="row1"><input type="text" name="fontsize3" size="3" maxlength="4" value="' . ((isset($this->_tpldata['.'][0]['FONTSIZE3'])) ? $this->_tpldata['.'][0]['FONTSIZE3'] : '') . '" class="input" /> px</td>
  </tr>
  <tr>
    <td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_FONTCOLOR1'])) ? $this->_tpldata['.'][0]['L_FONTCOLOR1'] : ((isset($user->lang['FONTCOLOR1'])) ? $user->lang['FONTCOLOR1'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FONTCOLOR1'))) . ' 	}')) . '<br /><span class="small">' . ((isset($this->_tpldata['.'][0]['L_FONTCOLOR1_NOTE'])) ? $this->_tpldata['.'][0]['L_FONTCOLOR1_NOTE'] : ((isset($user->lang['FONTCOLOR1_NOTE'])) ? $user->lang['FONTCOLOR1_NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FONTCOLOR1_NOTE'))) . ' 	}')) . '</span></td>
    <td width="40%" class="row1">
      <input type="text" name="fontcolor1" size="8" maxlength="6" value="' . ((isset($this->_tpldata['.'][0]['FONTCOLOR1'])) ? $this->_tpldata['.'][0]['FONTCOLOR1'] : '') . '" class="input" onchange="preview(this.form.fontcolor1_preview, this.value)" />
      <input type="button" name="fontcolor1_preview" value="       " disabled="disabled" class="input" style="background-color: #' . ((isset($this->_tpldata['.'][0]['FONTCOLOR1'])) ? $this->_tpldata['.'][0]['FONTCOLOR1'] : '') . '" />
    </td>
  </tr>
  <tr>
    <td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_FONTCOLOR2'])) ? $this->_tpldata['.'][0]['L_FONTCOLOR2'] : ((isset($user->lang['FONTCOLOR2'])) ? $user->lang['FONTCOLOR2'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FONTCOLOR2'))) . ' 	}')) . '<br /><span class="small">' . ((isset($this->_tpldata['.'][0]['L_FONTCOLOR2_NOTE'])) ? $this->_tpldata['.'][0]['L_FONTCOLOR2_NOTE'] : ((isset($user->lang['FONTCOLOR2_NOTE'])) ? $user->lang['FONTCOLOR2_NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FONTCOLOR2_NOTE'))) . ' 	}')) . '</span></td>
    <td width="40%" class="row1">
      <input type="text" name="fontcolor2" size="8" maxlength="6" value="' . ((isset($this->_tpldata['.'][0]['FONTCOLOR2'])) ? $this->_tpldata['.'][0]['FONTCOLOR2'] : '') . '" class="input" onchange="preview(this.form.fontcolor2_preview, this.value)" />
      <input type="button" name="fontcolor2_preview" value="       " disabled="disabled" class="input" style="background-color: #' . ((isset($this->_tpldata['.'][0]['FONTCOLOR2'])) ? $this->_tpldata['.'][0]['FONTCOLOR2'] : '') . '" />
    </td>
  </tr>
  <tr>
    <td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_FONTCOLOR3'])) ? $this->_tpldata['.'][0]['L_FONTCOLOR3'] : ((isset($user->lang['FONTCOLOR3'])) ? $user->lang['FONTCOLOR3'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FONTCOLOR3'))) . ' 	}')) . '<br /><span class="small">' . ((isset($this->_tpldata['.'][0]['L_FONTCOLOR3_NOTE'])) ? $this->_tpldata['.'][0]['L_FONTCOLOR3_NOTE'] : ((isset($user->lang['FONTCOLOR3_NOTE'])) ? $user->lang['FONTCOLOR3_NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FONTCOLOR3_NOTE'))) . ' 	}')) . '</span></td>
    <td width="40%" class="row1">
      <input type="text" name="fontcolor3" size="8" maxlength="6" value="' . ((isset($this->_tpldata['.'][0]['FONTCOLOR3'])) ? $this->_tpldata['.'][0]['FONTCOLOR3'] : '') . '" class="input" onchange="preview(this.form.fontcolor3_preview, this.value)" />
      <input type="button" name="fontcolor3_preview" value="       " disabled="disabled" class="input" style="background-color: #' . ((isset($this->_tpldata['.'][0]['FONTCOLOR3'])) ? $this->_tpldata['.'][0]['FONTCOLOR3'] : '') . '" />
    </td>
  </tr>
  <tr>
    <td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_FONTCOLOR_NEG'])) ? $this->_tpldata['.'][0]['L_FONTCOLOR_NEG'] : ((isset($user->lang['FONTCOLOR_NEG'])) ? $user->lang['FONTCOLOR_NEG'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FONTCOLOR_NEG'))) . ' 	}')) . '<br /><span class="small">' . ((isset($this->_tpldata['.'][0]['L_FONTCOLOR_NEG_NOTE'])) ? $this->_tpldata['.'][0]['L_FONTCOLOR_NEG_NOTE'] : ((isset($user->lang['FONTCOLOR_NEG_NOTE'])) ? $user->lang['FONTCOLOR_NEG_NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FONTCOLOR_NEG_NOTE'))) . ' 	}')) . '</span></td>
    <td width="40%" class="row1">
      <input type="text" name="fontcolor_neg" size="8" maxlength="6" value="' . ((isset($this->_tpldata['.'][0]['FONTCOLOR_NEG'])) ? $this->_tpldata['.'][0]['FONTCOLOR_NEG'] : '') . '" class="input" onchange="preview(this.form.fontcolor_neg_preview, this.value)" />
      <input type="button" name="fontcolor_neg_preview" value="       " disabled="disabled" class="input" style="background-color: #' . ((isset($this->_tpldata['.'][0]['FONTCOLOR_NEG'])) ? $this->_tpldata['.'][0]['FONTCOLOR_NEG'] : '') . '" />
    </td>
  </tr>
  <tr>
    <td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_FONTCOLOR_POS'])) ? $this->_tpldata['.'][0]['L_FONTCOLOR_POS'] : ((isset($user->lang['FONTCOLOR_POS'])) ? $user->lang['FONTCOLOR_POS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FONTCOLOR_POS'))) . ' 	}')) . '<br /><span class="small">' . ((isset($this->_tpldata['.'][0]['L_FONTCOLOR_POS_NOTE'])) ? $this->_tpldata['.'][0]['L_FONTCOLOR_POS_NOTE'] : ((isset($user->lang['FONTCOLOR_POS_NOTE'])) ? $user->lang['FONTCOLOR_POS_NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FONTCOLOR_POS_NOTE'))) . ' 	}')) . '</span></td>
    <td width="40%" class="row1">
      <input type="text" name="fontcolor_pos" size="8" maxlength="6" value="' . ((isset($this->_tpldata['.'][0]['FONTCOLOR_POS'])) ? $this->_tpldata['.'][0]['FONTCOLOR_POS'] : '') . '" class="input" onchange="preview(this.form.fontcolor_pos_preview, this.value)" />
      <input type="button" name="fontcolor_pos_preview" value="       " disabled="disabled" class="input" style="background-color: #' . ((isset($this->_tpldata['.'][0]['FONTCOLOR_POS'])) ? $this->_tpldata['.'][0]['FONTCOLOR_POS'] : '') . '" />
    </td>
  </tr>
  <tr>
    <td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_BODY_LINK'])) ? $this->_tpldata['.'][0]['L_BODY_LINK'] : ((isset($user->lang['BODY_LINK'])) ? $user->lang['BODY_LINK'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BODY_LINK'))) . ' 	}')) . '</td>
    <td width="40%" class="row1">
      <input type="text" name="body_link" size="8" maxlength="6" value="' . ((isset($this->_tpldata['.'][0]['BODY_LINK'])) ? $this->_tpldata['.'][0]['BODY_LINK'] : '') . '" class="input" onchange="preview(this.form.body_link_preview, this.value)" />
      <input type="button" name="body_link_preview" value="       " disabled="disabled" class="input" style="background-color: #' . ((isset($this->_tpldata['.'][0]['BODY_LINK'])) ? $this->_tpldata['.'][0]['BODY_LINK'] : '') . '" />
    </td>
  </tr>
  <tr>
    <td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_BODY_LINK_STYLE'])) ? $this->_tpldata['.'][0]['L_BODY_LINK_STYLE'] : ((isset($user->lang['BODY_LINK_STYLE'])) ? $user->lang['BODY_LINK_STYLE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BODY_LINK_STYLE'))) . ' 	}')) . '</td>
    <td width="40%" class="row1">
      <select name="body_link_style" class="input">
        ';// BEGIN body_link_style_row
$_body_link_style_row_count = (isset($this->_tpldata['body_link_style_row.'])) ?  sizeof($this->_tpldata['body_link_style_row.']) : 0;
if ($_body_link_style_row_count) {
for ($_body_link_style_row_i = 0; $_body_link_style_row_i < $_body_link_style_row_count; $_body_link_style_row_i++)
{
echo '
        <option value="' . ((isset($this->_tpldata['body_link_style_row.'][$_body_link_style_row_i]['VALUE'])) ? $this->_tpldata['body_link_style_row.'][$_body_link_style_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['body_link_style_row.'][$_body_link_style_row_i]['SELECTED'])) ? $this->_tpldata['body_link_style_row.'][$_body_link_style_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['body_link_style_row.'][$_body_link_style_row_i]['OPTION'])) ? $this->_tpldata['body_link_style_row.'][$_body_link_style_row_i]['OPTION'] : '') . '</option>
        ';}}
// END body_link_style_row
echo '
      </select>
    </td>
  </tr>
  <tr>
    <td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_BODY_HLINK'])) ? $this->_tpldata['.'][0]['L_BODY_HLINK'] : ((isset($user->lang['BODY_HLINK'])) ? $user->lang['BODY_HLINK'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BODY_HLINK'))) . ' 	}')) . '</td>
    <td width="40%" class="row1">
      <input type="text" name="body_hlink" size="8" maxlength="6" value="' . ((isset($this->_tpldata['.'][0]['BODY_HLINK'])) ? $this->_tpldata['.'][0]['BODY_HLINK'] : '') . '" class="input" onchange="preview(this.form.body_hlink_preview, this.value)" />
      <input type="button" name="body_hlink_preview" value="       " disabled="disabled" class="input" style="background-color: #' . ((isset($this->_tpldata['.'][0]['BODY_HLINK'])) ? $this->_tpldata['.'][0]['BODY_HLINK'] : '') . '" />
    </td>
  </tr>
  <tr>
    <td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_BODY_HLINK_STYLE'])) ? $this->_tpldata['.'][0]['L_BODY_HLINK_STYLE'] : ((isset($user->lang['BODY_HLINK_STYLE'])) ? $user->lang['BODY_HLINK_STYLE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BODY_HLINK_STYLE'))) . ' 	}')) . '</td>
    <td width="40%" class="row1">
      <select name="body_hlink_style" class="input">
        ';// BEGIN body_hlink_style_row
$_body_hlink_style_row_count = (isset($this->_tpldata['body_hlink_style_row.'])) ?  sizeof($this->_tpldata['body_hlink_style_row.']) : 0;
if ($_body_hlink_style_row_count) {
for ($_body_hlink_style_row_i = 0; $_body_hlink_style_row_i < $_body_hlink_style_row_count; $_body_hlink_style_row_i++)
{
echo '
        <option value="' . ((isset($this->_tpldata['body_hlink_style_row.'][$_body_hlink_style_row_i]['VALUE'])) ? $this->_tpldata['body_hlink_style_row.'][$_body_hlink_style_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['body_hlink_style_row.'][$_body_hlink_style_row_i]['SELECTED'])) ? $this->_tpldata['body_hlink_style_row.'][$_body_hlink_style_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['body_hlink_style_row.'][$_body_hlink_style_row_i]['OPTION'])) ? $this->_tpldata['body_hlink_style_row.'][$_body_hlink_style_row_i]['OPTION'] : '') . '</option>
        ';}}
// END body_hlink_style_row
echo '
      </select>
    </td>
  </tr>
  <tr>
    <td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_HEADER_LINK'])) ? $this->_tpldata['.'][0]['L_HEADER_LINK'] : ((isset($user->lang['HEADER_LINK'])) ? $user->lang['HEADER_LINK'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'HEADER_LINK'))) . ' 	}')) . '</td>
    <td width="40%" class="row1">
      <input type="text" name="header_link" size="8" maxlength="6" value="' . ((isset($this->_tpldata['.'][0]['HEADER_LINK'])) ? $this->_tpldata['.'][0]['HEADER_LINK'] : '') . '" class="input" onchange="preview(this.form.header_link_preview, this.value)" />
      <input type="button" name="header_link_preview" value="       " disabled="disabled" class="input" style="background-color: #' . ((isset($this->_tpldata['.'][0]['HEADER_LINK'])) ? $this->_tpldata['.'][0]['HEADER_LINK'] : '') . '" />
    </td>
  </tr>
  <tr>
    <td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_HEADER_LINK_STYLE'])) ? $this->_tpldata['.'][0]['L_HEADER_LINK_STYLE'] : ((isset($user->lang['HEADER_LINK_STYLE'])) ? $user->lang['HEADER_LINK_STYLE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'HEADER_LINK_STYLE'))) . ' 	}')) . '</td>
    <td width="40%" class="row1">
      <select name="header_link_style" class="input">
        ';// BEGIN header_link_style_row
$_header_link_style_row_count = (isset($this->_tpldata['header_link_style_row.'])) ?  sizeof($this->_tpldata['header_link_style_row.']) : 0;
if ($_header_link_style_row_count) {
for ($_header_link_style_row_i = 0; $_header_link_style_row_i < $_header_link_style_row_count; $_header_link_style_row_i++)
{
echo '
        <option value="' . ((isset($this->_tpldata['header_link_style_row.'][$_header_link_style_row_i]['VALUE'])) ? $this->_tpldata['header_link_style_row.'][$_header_link_style_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['header_link_style_row.'][$_header_link_style_row_i]['SELECTED'])) ? $this->_tpldata['header_link_style_row.'][$_header_link_style_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['header_link_style_row.'][$_header_link_style_row_i]['OPTION'])) ? $this->_tpldata['header_link_style_row.'][$_header_link_style_row_i]['OPTION'] : '') . '</option>
        ';}}
// END header_link_style_row
echo '
      </select>
    </td>
  </tr>
  <tr>
    <td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_HEADER_HLINK'])) ? $this->_tpldata['.'][0]['L_HEADER_HLINK'] : ((isset($user->lang['HEADER_HLINK'])) ? $user->lang['HEADER_HLINK'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'HEADER_HLINK'))) . ' 	}')) . '</td>
    <td width="40%" class="row1">
      <input type="text" name="header_hlink" size="8" maxlength="6" value="' . ((isset($this->_tpldata['.'][0]['HEADER_HLINK'])) ? $this->_tpldata['.'][0]['HEADER_HLINK'] : '') . '" class="input" onchange="preview(this.form.header_hlink_preview, this.value)" />
      <input type="button" name="header_hlink_preview" value="       " disabled="disabled" class="input" style="background-color: #' . ((isset($this->_tpldata['.'][0]['HEADER_HLINK'])) ? $this->_tpldata['.'][0]['HEADER_HLINK'] : '') . '" />
    </td>
  </tr>
  <tr>
    <td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_HEADER_HLINK_STYLE'])) ? $this->_tpldata['.'][0]['L_HEADER_HLINK_STYLE'] : ((isset($user->lang['HEADER_HLINK_STYLE'])) ? $user->lang['HEADER_HLINK_STYLE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'HEADER_HLINK_STYLE'))) . ' 	}')) . '</td>
    <td width="40%" class="row1">
      <select name="header_hlink_style" class="input">
        ';// BEGIN header_hlink_style_row
$_header_hlink_style_row_count = (isset($this->_tpldata['header_hlink_style_row.'])) ?  sizeof($this->_tpldata['header_hlink_style_row.']) : 0;
if ($_header_hlink_style_row_count) {
for ($_header_hlink_style_row_i = 0; $_header_hlink_style_row_i < $_header_hlink_style_row_count; $_header_hlink_style_row_i++)
{
echo '
        <option value="' . ((isset($this->_tpldata['header_hlink_style_row.'][$_header_hlink_style_row_i]['VALUE'])) ? $this->_tpldata['header_hlink_style_row.'][$_header_hlink_style_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['header_hlink_style_row.'][$_header_hlink_style_row_i]['SELECTED'])) ? $this->_tpldata['header_hlink_style_row.'][$_header_hlink_style_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['header_hlink_style_row.'][$_header_hlink_style_row_i]['OPTION'])) ? $this->_tpldata['header_hlink_style_row.'][$_header_hlink_style_row_i]['OPTION'] : '') . '</option>
        ';}}
// END header_hlink_style_row
echo '
      </select>
    </td>
  </tr>
  <tr>
    <td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_TR_COLOR1'])) ? $this->_tpldata['.'][0]['L_TR_COLOR1'] : ((isset($user->lang['TR_COLOR1'])) ? $user->lang['TR_COLOR1'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TR_COLOR1'))) . ' 	}')) . '</td>
    <td width="40%" class="row1">
      <input type="text" name="tr_color1" size="8" maxlength="6" value="' . ((isset($this->_tpldata['.'][0]['TR_COLOR1'])) ? $this->_tpldata['.'][0]['TR_COLOR1'] : '') . '" class="input" onchange="preview(this.form.tr_color1_preview, this.value)" />
      <input type="button" name="tr_color1_preview" value="       " disabled="disabled" class="input" style="background-color: #' . ((isset($this->_tpldata['.'][0]['TR_COLOR1'])) ? $this->_tpldata['.'][0]['TR_COLOR1'] : '') . '" />
    </td>
  </tr>
  <tr>
    <td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_TR_COLOR2'])) ? $this->_tpldata['.'][0]['L_TR_COLOR2'] : ((isset($user->lang['TR_COLOR2'])) ? $user->lang['TR_COLOR2'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TR_COLOR2'))) . ' 	}')) . '</td>
    <td width="40%" class="row1">
      <input type="text" name="tr_color2" size="8" maxlength="6" value="' . ((isset($this->_tpldata['.'][0]['TR_COLOR2'])) ? $this->_tpldata['.'][0]['TR_COLOR2'] : '') . '" class="input" onchange="preview(this.form.tr_color2_preview, this.value)" />
      <input type="button" name="tr_color2_preview" value="       " disabled="disabled" class="input" style="background-color: #' . ((isset($this->_tpldata['.'][0]['TR_COLOR2'])) ? $this->_tpldata['.'][0]['TR_COLOR2'] : '') . '" />
    </td>
  </tr>
  <tr>
    <td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_TH_COLOR1'])) ? $this->_tpldata['.'][0]['L_TH_COLOR1'] : ((isset($user->lang['TH_COLOR1'])) ? $user->lang['TH_COLOR1'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TH_COLOR1'))) . ' 	}')) . '</td>
    <td width="40%" class="row1">
      <input type="text" name="th_color1" size="8" maxlength="6" value="' . ((isset($this->_tpldata['.'][0]['TH_COLOR1'])) ? $this->_tpldata['.'][0]['TH_COLOR1'] : '') . '" class="input" onchange="preview(this.form.th_color1_preview, this.value)" />
      <input type="button" name="th_color1_preview" value="       " disabled="disabled" class="input" style="background-color: #' . ((isset($this->_tpldata['.'][0]['TH_COLOR1'])) ? $this->_tpldata['.'][0]['TH_COLOR1'] : '') . '" />
    </td>
  </tr>
  <tr>
    <td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_TABLE_BORDER_WIDTH'])) ? $this->_tpldata['.'][0]['L_TABLE_BORDER_WIDTH'] : ((isset($user->lang['TABLE_BORDER_WIDTH'])) ? $user->lang['TABLE_BORDER_WIDTH'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TABLE_BORDER_WIDTH'))) . ' 	}')) . '</td>
    <td width="40%" class="row1"><input type="text" name="table_border_width" size="2" maxlength="3" value="' . ((isset($this->_tpldata['.'][0]['TABLE_BORDER_WIDTH'])) ? $this->_tpldata['.'][0]['TABLE_BORDER_WIDTH'] : '') . '" class="input" /> px</td>
  </tr>
  <tr>
    <td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_TABLE_BORDER_COLOR'])) ? $this->_tpldata['.'][0]['L_TABLE_BORDER_COLOR'] : ((isset($user->lang['TABLE_BORDER_COLOR'])) ? $user->lang['TABLE_BORDER_COLOR'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TABLE_BORDER_COLOR'))) . ' 	}')) . '</td>
    <td width="40%" class="row1">
      <input type="text" name="table_border_color" size="8" maxlength="6" value="' . ((isset($this->_tpldata['.'][0]['TABLE_BORDER_COLOR'])) ? $this->_tpldata['.'][0]['TABLE_BORDER_COLOR'] : '') . '" class="input" onchange="preview(this.form.table_border_color_preview, this.value)" />
      <input type="button" name="table_border_color_preview" value="       " disabled="disabled" class="input" style="background-color: #' . ((isset($this->_tpldata['.'][0]['TABLE_BORDER_COLOR'])) ? $this->_tpldata['.'][0]['TABLE_BORDER_COLOR'] : '') . '" />
    </td>
  </tr>
  <tr>
    <td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_TABLE_BORDER_STYLE'])) ? $this->_tpldata['.'][0]['L_TABLE_BORDER_STYLE'] : ((isset($user->lang['TABLE_BORDER_STYLE'])) ? $user->lang['TABLE_BORDER_STYLE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TABLE_BORDER_STYLE'))) . ' 	}')) . '</td>
    <td width="40%" class="row1">
      <select name="table_border_style" class="input">
        ';// BEGIN table_border_style_row
$_table_border_style_row_count = (isset($this->_tpldata['table_border_style_row.'])) ?  sizeof($this->_tpldata['table_border_style_row.']) : 0;
if ($_table_border_style_row_count) {
for ($_table_border_style_row_i = 0; $_table_border_style_row_i < $_table_border_style_row_count; $_table_border_style_row_i++)
{
echo '
        <option value="' . ((isset($this->_tpldata['table_border_style_row.'][$_table_border_style_row_i]['VALUE'])) ? $this->_tpldata['table_border_style_row.'][$_table_border_style_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['table_border_style_row.'][$_table_border_style_row_i]['SELECTED'])) ? $this->_tpldata['table_border_style_row.'][$_table_border_style_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['table_border_style_row.'][$_table_border_style_row_i]['OPTION'])) ? $this->_tpldata['table_border_style_row.'][$_table_border_style_row_i]['OPTION'] : '') . '</option>
        ';}}
// END table_border_style_row
echo '
      </select>
    </td>
  </tr>
  <tr>
    <td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_INPUT_COLOR'])) ? $this->_tpldata['.'][0]['L_INPUT_COLOR'] : ((isset($user->lang['INPUT_COLOR'])) ? $user->lang['INPUT_COLOR'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'INPUT_COLOR'))) . ' 	}')) . '</td>
    <td width="40%" class="row1">
      <input type="text" name="input_color" size="8" maxlength="6" value="' . ((isset($this->_tpldata['.'][0]['INPUT_COLOR'])) ? $this->_tpldata['.'][0]['INPUT_COLOR'] : '') . '" class="input" onchange="preview(this.form.input_color_preview, this.value)" />
      <input type="button" name="input_color_preview" value="       " disabled="disabled" class="input" style="background-color: #' . ((isset($this->_tpldata['.'][0]['INPUT_COLOR'])) ? $this->_tpldata['.'][0]['INPUT_COLOR'] : '') . '" />
    </td>
  </tr>
  <tr>
    <td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_INPUT_BORDER_WIDTH'])) ? $this->_tpldata['.'][0]['L_INPUT_BORDER_WIDTH'] : ((isset($user->lang['INPUT_BORDER_WIDTH'])) ? $user->lang['INPUT_BORDER_WIDTH'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'INPUT_BORDER_WIDTH'))) . ' 	}')) . '</td>
    <td width="40%" class="row1"><input type="text" name="input_border_width" size="2" maxlength="3" value="' . ((isset($this->_tpldata['.'][0]['INPUT_BORDER_WIDTH'])) ? $this->_tpldata['.'][0]['INPUT_BORDER_WIDTH'] : '') . '" class="input" /> px</td>
  </tr>
  <tr>
    <td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_INPUT_BORDER_COLOR'])) ? $this->_tpldata['.'][0]['L_INPUT_BORDER_COLOR'] : ((isset($user->lang['INPUT_BORDER_COLOR'])) ? $user->lang['INPUT_BORDER_COLOR'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'INPUT_BORDER_COLOR'))) . ' 	}')) . '</td>
    <td width="40%" class="row1">
      <input type="text" name="input_border_color" size="8" maxlength="6" value="' . ((isset($this->_tpldata['.'][0]['INPUT_BORDER_COLOR'])) ? $this->_tpldata['.'][0]['INPUT_BORDER_COLOR'] : '') . '" class="input" onchange="preview(this.form.input_border_color_preview, this.value)" />
      <input type="button" name="input_border_color_preview" value="       " disabled="disabled" class="input" style="background-color: #' . ((isset($this->_tpldata['.'][0]['INPUT_BORDER_COLOR'])) ? $this->_tpldata['.'][0]['INPUT_BORDER_COLOR'] : '') . '" />
    </td>
  </tr>
  <tr>
    <td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_INPUT_BORDER_STYLE'])) ? $this->_tpldata['.'][0]['L_INPUT_BORDER_STYLE'] : ((isset($user->lang['INPUT_BORDER_STYLE'])) ? $user->lang['INPUT_BORDER_STYLE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'INPUT_BORDER_STYLE'))) . ' 	}')) . '</td>
    <td width="40%" class="row1">
      <select name="input_border_style" class="input">
        ';// BEGIN input_border_style_row
$_input_border_style_row_count = (isset($this->_tpldata['input_border_style_row.'])) ?  sizeof($this->_tpldata['input_border_style_row.']) : 0;
if ($_input_border_style_row_count) {
for ($_input_border_style_row_i = 0; $_input_border_style_row_i < $_input_border_style_row_count; $_input_border_style_row_i++)
{
echo '
        <option value="' . ((isset($this->_tpldata['input_border_style_row.'][$_input_border_style_row_i]['VALUE'])) ? $this->_tpldata['input_border_style_row.'][$_input_border_style_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['input_border_style_row.'][$_input_border_style_row_i]['SELECTED'])) ? $this->_tpldata['input_border_style_row.'][$_input_border_style_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['input_border_style_row.'][$_input_border_style_row_i]['OPTION'])) ? $this->_tpldata['input_border_style_row.'][$_input_border_style_row_i]['OPTION'] : '') . '</option>
        ';}}
// END input_border_style_row
echo '
      </select>
    </td>
  </tr>
</table>


<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_STYLE_CONFIGURATION'])) ? $this->_tpldata['.'][0]['L_STYLE_CONFIGURATION'] : ((isset($user->lang['STYLE_CONFIGURATION'])) ? $user->lang['STYLE_CONFIGURATION'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'STYLE_CONFIGURATION'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <td colspan="2" class="row1">' . ((isset($this->_tpldata['.'][0]['L_STYLE_DATE_NOTE'])) ? $this->_tpldata['.'][0]['L_STYLE_DATE_NOTE'] : ((isset($user->lang['STYLE_DATE_NOTE'])) ? $user->lang['STYLE_DATE_NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'STYLE_DATE_NOTE'))) . ' 	}')) . '</td>
  </tr>
  <tr>
    <td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_ATTENDEES_COLUMNS'])) ? $this->_tpldata['.'][0]['L_ATTENDEES_COLUMNS'] : ((isset($user->lang['ATTENDEES_COLUMNS'])) ? $user->lang['ATTENDEES_COLUMNS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ATTENDEES_COLUMNS'))) . ' 	}')) . '<br /><span class="small">' . ((isset($this->_tpldata['.'][0]['L_ATTENDEES_COLUMNS_NOTE'])) ? $this->_tpldata['.'][0]['L_ATTENDEES_COLUMNS_NOTE'] : ((isset($user->lang['ATTENDEES_COLUMNS_NOTE'])) ? $user->lang['ATTENDEES_COLUMNS_NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ATTENDEES_COLUMNS_NOTE'))) . ' 	}')) . '</span></td>
    <td width="40%" class="row1">
      <select name="attendees_columns" class="input">
        ';// BEGIN attendees_columns_row
$_attendees_columns_row_count = (isset($this->_tpldata['attendees_columns_row.'])) ?  sizeof($this->_tpldata['attendees_columns_row.']) : 0;
if ($_attendees_columns_row_count) {
for ($_attendees_columns_row_i = 0; $_attendees_columns_row_i < $_attendees_columns_row_count; $_attendees_columns_row_i++)
{
echo '
        <option value="' . ((isset($this->_tpldata['attendees_columns_row.'][$_attendees_columns_row_i]['VALUE'])) ? $this->_tpldata['attendees_columns_row.'][$_attendees_columns_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['attendees_columns_row.'][$_attendees_columns_row_i]['SELECTED'])) ? $this->_tpldata['attendees_columns_row.'][$_attendees_columns_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['attendees_columns_row.'][$_attendees_columns_row_i]['OPTION'])) ? $this->_tpldata['attendees_columns_row.'][$_attendees_columns_row_i]['OPTION'] : '') . '</option>
        ';}}
// END attendees_columns_row
echo '
      </select>
    </td>
  </tr>
  <tr>
    <td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_DATE_NOTIME_LONG'])) ? $this->_tpldata['.'][0]['L_DATE_NOTIME_LONG'] : ((isset($user->lang['DATE_NOTIME_LONG'])) ? $user->lang['DATE_NOTIME_LONG'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DATE_NOTIME_LONG'))) . ' 	}')) . '</td>
    <td width="40%" class="row1"><input type="text" name="date_notime_long" size="15" maxlength="10" value="' . ((isset($this->_tpldata['.'][0]['DATE_NOTIME_LONG'])) ? $this->_tpldata['.'][0]['DATE_NOTIME_LONG'] : '') . '" class="input" /></td>
  </tr>
  <tr>
    <td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_DATE_NOTIME_SHORT'])) ? $this->_tpldata['.'][0]['L_DATE_NOTIME_SHORT'] : ((isset($user->lang['DATE_NOTIME_SHORT'])) ? $user->lang['DATE_NOTIME_SHORT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DATE_NOTIME_SHORT'))) . ' 	}')) . '</td>
    <td width="40%" class="row1"><input type="text" name="date_notime_short" size="15" maxlength="10" value="' . ((isset($this->_tpldata['.'][0]['DATE_NOTIME_SHORT'])) ? $this->_tpldata['.'][0]['DATE_NOTIME_SHORT'] : '') . '" class="input" /></td>
  </tr>
  <tr>
    <td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_DATE_TIME'])) ? $this->_tpldata['.'][0]['L_DATE_TIME'] : ((isset($user->lang['DATE_TIME'])) ? $user->lang['DATE_TIME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DATE_TIME'))) . ' 	}')) . '</td>
    <td width="40%" class="row1"><input type="text" name="date_time" size="20" maxlength="20" value="' . ((isset($this->_tpldata['.'][0]['DATE_TIME'])) ? $this->_tpldata['.'][0]['DATE_TIME'] : '') . '" class="input" /></td>
  </tr>
  <tr>
    <td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_LOGO_PATH'])) ? $this->_tpldata['.'][0]['L_LOGO_PATH'] : ((isset($user->lang['LOGO_PATH'])) ? $user->lang['LOGO_PATH'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LOGO_PATH'))) . ' 	}')) . ' <span class="small">' . ((isset($this->_tpldata['.'][0]['L_LOGO_PATH_NOTE'])) ? $this->_tpldata['.'][0]['L_LOGO_PATH_NOTE'] : ((isset($user->lang['LOGO_PATH_NOTE'])) ? $user->lang['LOGO_PATH_NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LOGO_PATH_NOTE'))) . ' 	}')) . '</span></td>
    <td width="40%" class="row1"><input type="text" name="logo_path" size="25" maxlength="255" value="' . ((isset($this->_tpldata['.'][0]['STYLE_LOGO_PATH'])) ? $this->_tpldata['.'][0]['STYLE_LOGO_PATH'] : '') . '" class="input" /></td>
  </tr>
  <tr>
    <td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_BACKGROUND_IMG'])) ? $this->_tpldata['.'][0]['L_BACKGROUND_IMG'] : ((isset($user->lang['BACKGROUND_IMG'])) ? $user->lang['BACKGROUND_IMG'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BACKGROUND_IMG'))) . ' 	}')) . '</td>
    <td width="40%" class="row1"><input type="text" name="background_img" size="25" maxlength="255" value="' . ((isset($this->_tpldata['.'][0]['BACKGROUND_IMG'])) ? $this->_tpldata['.'][0]['BACKGROUND_IMG'] : '') . '" class="input" /></td>
  </tr>
  <tr>
    <td width="60%" class="row2">' . ((isset($this->_tpldata['.'][0]['L_CSS_FILE'])) ? $this->_tpldata['.'][0]['L_CSS_FILE'] : ((isset($user->lang['CSS_FILE'])) ? $user->lang['CSS_FILE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CSS_FILE'))) . ' 	}')) . '</td>
    <td width="40%" class="row1"><input type="text" name="css_file" size="25" maxlength="255" value="' . ((isset($this->_tpldata['.'][0]['CSS_FILE'])) ? $this->_tpldata['.'][0]['CSS_FILE'] : '') . '" class="input" /></td>
  </tr>
</table>

<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_CLASS_COLORS'])) ? $this->_tpldata['.'][0]['L_CLASS_COLORS'] : ((isset($user->lang['CLASS_COLORS'])) ? $user->lang['CLASS_COLORS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CLASS_COLORS'))) . ' 	}')) . '</th>
  </tr>
  ';// BEGIN classes
$_classes_count = (isset($this->_tpldata['classes.'])) ?  sizeof($this->_tpldata['classes.']) : 0;
if ($_classes_count) {
for ($_classes_i = 0; $_classes_i < $_classes_count; $_classes_i++)
{
echo '
   <tr>
    <td width="60%" class="row2">' . ((isset($this->_tpldata['classes.'][$_classes_i]['NAME'])) ? $this->_tpldata['classes.'][$_classes_i]['NAME'] : '') . '</td>
    <td width="40%" class="row1">' . ((isset($this->_tpldata['classes.'][$_classes_i]['CPICKER'])) ? $this->_tpldata['classes.'][$_classes_i]['CPICKER'] : '') . '</td>
  </tr>
  ';}}
// END classes
echo '
    <tr>
    <th align="center" colspan="2">
    ';// IF S_ADD
if ($this->_tpldata['.'][0]['S_ADD']) { 
echo '
    <input type="submit" name="add" value="' . ((isset($this->_tpldata['.'][0]['L_ADD_STYLE'])) ? $this->_tpldata['.'][0]['L_ADD_STYLE'] : ((isset($user->lang['ADD_STYLE'])) ? $user->lang['ADD_STYLE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADD_STYLE'))) . ' 	}')) . '" class="mainoption" /> <input type="reset" name="reset" value="' . ((isset($this->_tpldata['.'][0]['L_RESET'])) ? $this->_tpldata['.'][0]['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RESET'))) . ' 	}')) . '" class="liteoption" />
    ';// ELSE
} else {
echo '
    <input type="submit" name="update" value="' . ((isset($this->_tpldata['.'][0]['L_UPDATE_STYLE'])) ? $this->_tpldata['.'][0]['L_UPDATE_STYLE'] : ((isset($user->lang['UPDATE_STYLE'])) ? $user->lang['UPDATE_STYLE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'UPDATE_STYLE'))) . ' 	}')) . '" class="mainoption" /> <input type="submit"  name="delete" value="' . ((isset($this->_tpldata['.'][0]['L_DELETE_STYLE'])) ? $this->_tpldata['.'][0]['L_DELETE_STYLE'] : ((isset($user->lang['DELETE_STYLE'])) ? $user->lang['DELETE_STYLE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DELETE_STYLE'))) . ' 	}')) . '" class="liteoption" />
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