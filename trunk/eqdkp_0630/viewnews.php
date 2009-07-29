<?php
/******************************
 * EQdkp
 * Copyright 2002-2003
 * Licensed under the GNU GPL.  See COPYING for full terms.
 * ------------------
 * viewnews.php
 * Began: Sat April 5 2003
 *
 * $Id: viewnews.php 5152 2009-07-03 13:50:19Z ghoschdi $
 *
 ******************************/

define('EQDKP_INC', true);
$eqdkp_root_path = './';
include_once($eqdkp_root_path . 'common.php');

if ($conf_plus['pk_itemstats'] == 1)
{
	include_once($eqdkp_root_path . 'itemstats/eqdkp_itemstats.php');
}

	$start = $in->get('start', 0);
	$newsid = $in->get('id', 0);

	$news_array = $pdc->get('news.'.$start.$newsid.$user->data['user_nlimit'],false,true);
	
	#ToDo: check why single news dont worked cached....
	if( (!$news_array)) 
	{
		$total_news = $db->query_first('SELECT count(*) FROM ' . NEWS_TABLE);
		
		if ($newsid)
		{
			$sql = 'SELECT n.*, u.username
			        FROM ' . NEWS_TABLE . ' n, ' . USERS_TABLE . ' u
			        WHERE n.user_id = u.user_id
			        AND news_id='.$db->sql_escape($newsid);
	
			$result = $db->query($sql);
		}else
		{
			$previous_date = null;
			$sql = 'SELECT n.*, u.username
			        FROM ' . NEWS_TABLE . ' n, ' . USERS_TABLE . ' u
			        WHERE (n.user_id = u.user_id)
			        ORDER BY news_flags DESC, news_date DESC';
			$result = $db->query($sql);
	
			if ( $db->num_rows($result) == 0 )
			{
				$sql = 'SELECT n.news_id, n.news_date, n.news_headline, n.news_message, u.username
			        FROM ' . NEWS_TABLE . ' n, ' . USERS_TABLE . ' u
			        WHERE (n.user_id = u.user_id)
			        ORDER BY news_date DESC';
				$result = $db->query($sql);
				if ( $db->num_rows($result) == 0 )
				{
				    message_die($user->lang['no_news']);
				 }
			}
		}
	
		$cur_hash = hash_filename("viewnews.php");
	  	$cur_news_number = 0;
	  	$sticky_news = 0;
	  	$news_array = array();
	  	  	   
		while ( $news = $db->fetch_record($result) )
		{	
		    $message = $news['news_message'];
	
		    //Details views
		    if(($newsid) and (strlen($news['extended_message'])>1))
		    {
				$message .= "[br][br]".$news['extended_message'];
		    }else
		    { //listview
		    	if (strlen($news['extended_message'])>1)
		    	{
		    		$message .= '[right][url=viewnews.php?id='.$news['news_id'].']'.$user->lang['news_readmore']."[/url][/right]";
		    	}
		    }
	
		    // Parse the news
	      	news_parse($message);
	
		    //Newsloot
		    $message .= $html->newsloot($news['showRaids_id']);
	
			$SHOWCOMMENT = false;
	  	   	if (!$news['nocomments']==1)
	  	   	{
				// get the count of comments per news:
				$comm_settings = array('attach_id'=>$news['news_id'], 'page'=>'news');
				$pcomments->SetVars($comm_settings);
			    $comcount = $pcomments->Count();
	  	   		$COMMENTS_COUNTER = ($comcount == 1 ) ? $comcount.' '.$user->lang['news_comment'] : $comcount.' '.$user->lang['news_comments'] ;
	  	   		$COMMENT = $pcomments->Show() ;
	  	   		$SHOWCOMMENT = true;
	  	   	}
	  	   
	      	$news_array[] = array(
				'ROW_CLASS' => $eqdkp->switch_row_class(),
	      		'HEADLINE' => stripslashes($news['news_headline']),
		        'AUTHOR' => $news['username'],
		        'TIME' => date($user->style['time'], $news['news_date']),
		        'SUBMITTER' => $user->lang['news_submitter'] ,
		        'SUBMITAT' => $user->lang['news_submitat'] ,
		        'ID' => $news['news_id'],
		        'DETAIL' => ($newsid > 0 ) ? true : false,
		        'SHOWCOMMENT' => $SHOWCOMMENT,
		        'COMMENTS_COUNTER' => $COMMENTS_COUNTER,
		        'COMMENT'  => $COMMENT,
		        'MESSAGE' => $message,
	      		'news' => $news);
		       	
		}#end news while			
		
		//Save Newsarray into cache
		$pdc->put('news.'.$start.$newsid.$user->data['user_nlimit'],$news_array,3600,false,true);
		
		//Save Newspagnation into cache
		$news_pagnation = array('NEWS_PAGINATION' => generate_pagination('viewnews.php' . $SID, $total_news-$sticky_news, $user->data['user_nlimit'], $start));
		$pdc->put('news.pagination.'.$start.$newsid.$user->data['user_nlimit'],$news_pagnation,3600);
		
		$db->free_result($result);	
	}	
	
	//ok now lets check the cached array
	foreach ($news_array as $news)
	{
		
		$shownews = true ;
		switch ($news['news']['news_permissions'])
		{
			case 0: $shownews = true ; break ;
			case 1: if ($user->data['user_id'] == ANONYMOUS ){$shownews = false ; } break ;
			case 2: if (!$user->check_auth('a_', false) ) {$shownews = false ; } break ;
		}
		
		//what ever??!?
		if(!$shownews){ continue;}		
    	if(!$news['news']['news_flags'])
    	{
      		if(($cur_news_number < $start))
      		{
        		$cur_news_number++;
        		continue;
      		}else if($cur_news_number >= $start+$user->data['user_nlimit'])
      		{
        		break;
      		}else
      		{
        		$cur_news_number++;
      		}
    	}else
    	{
      		$news['news']['news_headline'] = $user->lang['sticky_news_prefix'].' '.$news['news']['news_headline'];
      		$sticky_news++;
    	}

		// Show a new date row if it's not the same as the last			
	    if ( date($user->style['date_notime_long'], $news['news']['news_date']) != date($user->style['date_notime_long'], $previous_date) )
	    {
	        $tpl->assign_block_vars('date_row', array(
	            'DATE' => strftime($user->style['strtime_date'],$news['news']['news_date'])));
	        $previous_date = $news['news']['news_date'];
	    }		
	    		
	    $tpl->assign_block_vars('date_row.news_row', 
	    array(
				'ROW_CLASS' => $news['ROW_CLASS'],
	      		'HEADLINE' => $news['news']['news_headline'],
		        'AUTHOR' => $news['AUTHOR'],
		        'TIME' => $news['TIME'],
		        'SUBMITTER' => $news['SUBMITTER'] ,
		        'SUBMITAT' => $news['SUBMITAT'] ,
		        'ID' => $news['ID'],
		        'DETAIL' => $news['DETAIL'],
		        'SHOWCOMMENT' => $news['SHOWCOMMENT'],
		        'COMMENTS_COUNTER' => $news['COMMENTS_COUNTER'],
		        'COMMENT'  => $news['COMMENT'],
		        'MESSAGE' => $news['MESSAGE']
	      		)
	    )	;			
	}
	
	if (!$newsid)
	{
		$news_pagnation = $pdc->get('news.pagination.'.$start.$newsid.$user->data['user_nlimit']);
		if (!$news_pagnation) 
		{
			$news_pagnation = array('NEWS_PAGINATION' => generate_pagination('viewnews.php' . $SID, $total_news-$sticky_news, $user->data['user_nlimit'], $start));
		}
			
		$tpl->assign_vars($news_pagnation);
	}
	
	
	// RSS Feed
	include_once($eqdkp_root_path."libraries/UniversalFeedCreator/UniversalFeedCreator.class.php");
	$rss = new UniversalFeedCreator();
	
	$rss->title           = "Last News";
	$rss->description     = $eqdkp->config['main_title']." EQdkp-Plus - Last News" ;
	$rss->link            = $pcache->BuildLink();
	$rss->syndicationURL  = $pcache->BuildLink().$_SERVER['PHP_SELF'];

	$file = $pcache->FilePath('last_news.xml', 'eqdkp',false);

	//Create only every Hour, or if the XML Feed isnt created
	if (!file_exists($file) || (time()-filemtime($file)>=3600))
  	{  		  		  		
		//RSS News
		$previous_date = null;
		$sql = 'SELECT n.*, u.username
		        FROM ' . NEWS_TABLE . ' n, ' . USERS_TABLE . ' u
		        WHERE (n.user_id = u.user_id)
		        ORDER BY news_date DESC LIMIT 10';
		$result = $db->query($sql);
	
		if ( $db->num_rows($result) == 0 )
		{
			$sql = 'SELECT n.news_id, n.news_date, n.news_headline, n.news_message, n.news_flags, u.username
		        FROM ' . NEWS_TABLE . ' n, ' . USERS_TABLE . ' u
		        WHERE (n.user_id = u.user_id)
		        ORDER BY news_date DESC LIMIT 10';
			$result = $db->query($sql);
			if ( $db->num_rows($result) == 0 )
			{
			    message_die($user->lang['no_news']);
			 }
		}
		
		$i = 0;
		while ( $news = $db->fetch_record($result) )
		{
	    //Create RSS
	    if (($i < 10))
	    {
	          $rssitem = new FeedItem();
	          $rssitem->title        = stripslashes($news['news_headline']);
	          $rssitem->link         = $pcache->BuildLink().'viewnews.php?id='.$news['news_id'];
	          $rssitem->description  = substr($bbcode->toHTML($news['news_message'], true),0,250);
	          $rssitem->date         = $news['news_date'];
	          $rssitem->source       = $rss->link;
	          $rssitem->author       = $news['username'];
	          
	          $additionals = array('comments_counter'  => $comcount,
	          					           'comments_active'  => $SHOWCOMMENT,      					 	       
	          );
	          $rssitem->additionalElements = $additionals;
	          $rss->addItem($rssitem);    
	  		$i++;    	
	    }
	  }
	  $rss->saveFeed("RSS2.0", $file,false);
  	}
  	  
	
	
	$db->free_result($result);

 	$tpl->assign_vars(array(
 		'S_IMG_RESIZE_ENABLE'          => ($conf_plus['pk_air_enable']) ? true : false,
 		'S_MAX_POST_IMG_RESIZE_WIDTH'  => ($conf_plus['pk_air_max_resize_width']) ? $conf_plus['pk_air_max_resize_width'] : 400,
 		'S_IMG_RESIZE_WARNING'         => ($user->lang['air_img_resize_warning']) ? $user->lang['air_img_resize_warning'] : '', 
 		'S_IMG_WARNING_ACTIVE'         => ($conf_plus['pk_air_show_warning']) ? 'true' : false, 
 		'S_LYTEBOX_THEME'              => ($conf_plus['pk_air_lytebox_theme']) ? $conf_plus['pk_air_lytebox_theme'] : 'grey',
 		'S_LYTEBOX_AUTO_RESIZE'        => ($conf_plus['pk_air_lytebox_auto_resize']) ? 1 : 0,
 		'S_LYTEBOX_ANIMATION'          => ($conf_plus['pk_air_lytebox_animation']) ? 1 : 0, 
 		'RSS_FEED'        			   => '<link rel="alternate" type="application/rss+xml" title="EQDkp-Plus News XML" href="'.$pcache->BuildLink().$pcache->FileLink('last_news.xml', 'eqdkp').'" />' ,
 		));	
 		

$eqdkp->set_vars(array(
    'page_title'    => $eqdkp->config['guildtag'],
    'template_file' => 'viewnews.html',
    'display'       => true)
);
?>