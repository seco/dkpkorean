<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
echo '
' . ((isset($this->_tpldata['.'][0]['RSS_FEED'])) ? $this->_tpldata['.'][0]['RSS_FEED'] : '') . '
<table width="100%" border="0" cellspacing="1" cellpadding="2" class="border01">
  ';// BEGIN date_row
$_date_row_count = (isset($this->_tpldata['date_row.'])) ?  sizeof($this->_tpldata['date_row.']) : 0;
if ($_date_row_count) {
for ($_date_row_i = 0; $_date_row_i < $_date_row_count; $_date_row_i++)
{
echo '<!-- Removed by Maëvah -->';// BEGIN news_row
$_news_row_count = (isset($this->_tpldata['date_row.'][$_date_row_i]['news_row.'])) ? sizeof($this->_tpldata['date_row.'][$_date_row_i]['news_row.']) : 0;
if ($_news_row_count) {
for ($_news_row_i = 0; $_news_row_i < $_news_row_count; $_news_row_i++)
{
echo '
  <tr>
    <th align="left"><b style="font-size:13px">' . ((isset($this->_tpldata['date_row.'][$_date_row_i]['news_row.'][$_news_row_i]['HEADLINE'])) ? $this->_tpldata['date_row.'][$_date_row_i]['news_row.'][$_news_row_i]['HEADLINE'] : '') . '</b></th>
  </tr>
  <tr class=row1>
    <td class="' . ((isset($this->_tpldata['date_row.'][$_date_row_i]['news_row.'][$_news_row_i]['ROW_CLASS'])) ? $this->_tpldata['date_row.'][$_date_row_i]['news_row.'][$_news_row_i]['ROW_CLASS'] : '') . 'viewnews">
   	<span style="float:left">' . ((isset($this->_tpldata['date_row.'][$_date_row_i]['DATE'])) ? $this->_tpldata['date_row.'][$_date_row_i]['DATE'] : '') . ' - ' . ((isset($this->_tpldata['date_row.'][$_date_row_i]['news_row.'][$_news_row_i]['SUBMITTER'])) ? $this->_tpldata['date_row.'][$_date_row_i]['news_row.'][$_news_row_i]['SUBMITTER'] : '') . ' ' . ((isset($this->_tpldata['date_row.'][$_date_row_i]['news_row.'][$_news_row_i]['AUTHOR'])) ? $this->_tpldata['date_row.'][$_date_row_i]['news_row.'][$_news_row_i]['AUTHOR'] : '') . ' ' . ((isset($this->_tpldata['date_row.'][$_date_row_i]['news_row.'][$_news_row_i]['SUBMITAT'])) ? $this->_tpldata['date_row.'][$_date_row_i]['news_row.'][$_news_row_i]['SUBMITAT'] : '') . ' ' . ((isset($this->_tpldata['date_row.'][$_date_row_i]['news_row.'][$_news_row_i]['TIME'])) ? $this->_tpldata['date_row.'][$_date_row_i]['news_row.'][$_news_row_i]['TIME'] : '') . '</span>
    ';// IF date_row.news_row.SHOWCOMMENT
if ($this->_tpldata['date_row.'][$_date_row_i]['news_row.'][$_news_row_i]['SHOWCOMMENT']) { 
echo '
		 <span style="float:right"><a href=\'viewnews.php?id=' . ((isset($this->_tpldata['date_row.'][$_date_row_i]['news_row.'][$_news_row_i]['ID'])) ? $this->_tpldata['date_row.'][$_date_row_i]['news_row.'][$_news_row_i]['ID'] : '') . '\'>' . ((isset($this->_tpldata['date_row.'][$_date_row_i]['news_row.'][$_news_row_i]['COMMENTS_COUNTER'])) ? $this->_tpldata['date_row.'][$_date_row_i]['news_row.'][$_news_row_i]['COMMENTS_COUNTER'] : '') . '</a></span>
   	';// ENDIF
}
echo ' 
   	<br><hr noshade>

    <div class="newscontainer">' . ((isset($this->_tpldata['date_row.'][$_date_row_i]['news_row.'][$_news_row_i]['MESSAGE'])) ? $this->_tpldata['date_row.'][$_date_row_i]['news_row.'][$_news_row_i]['MESSAGE'] : '') . '</div>

    ';// IF date_row.news_row.DETAIL
if ($this->_tpldata['date_row.'][$_date_row_i]['news_row.'][$_news_row_i]['DETAIL']) { 
echo '
     		<hr noshade>
    		' . ((isset($this->_tpldata['date_row.'][$_date_row_i]['news_row.'][$_news_row_i]['COMMENT'])) ? $this->_tpldata['date_row.'][$_date_row_i]['news_row.'][$_news_row_i]['COMMENT'] : '') . '
   ';// ENDIF
}
echo '
    </td>
  </tr>
  ';}}
// END news_row
}}
// END date_row
echo '
  <tr>
    <th class="footer">&nbsp;</th>
  </tr>
</table>
<table width="100%" border="0" cellspacing="1" cellpadding="2" class="borderless">
  <tr>
    <td align="center" class="menu">' . ((isset($this->_tpldata['.'][0]['NEWS_PAGINATION'])) ? $this->_tpldata['.'][0]['NEWS_PAGINATION'] : '') . '</td>
  </tr>
</table>
';// INCLUDE page_tail.html
$this->assign_from_include('page_tail.html');

}
?>