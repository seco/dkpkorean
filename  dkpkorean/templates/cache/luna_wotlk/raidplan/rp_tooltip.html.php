<?php
if ($this->security()) {
echo '<style type="text/css">
/******************************
 * Styles for EQdkp RaidPlan
 * PopUp Style 
 * (c) 2007 by Wallenium 
 * ---------------------------
 * $Id: tooltip.css 606 2007-08-06 10:36:21Z wallenium $
 ******************************/

.rptooldiv  {
	display: block;
	font-size: 12px;
	padding: 5px;
	margin: 0px;
}

/* Warn */
.rp_tt_warn{
  width: 200px;
  min-height:100px;
	background:#fff url(../images/tooltip/bg_warn.jpg) bottom right no-repeat;
  border:1px solid #c5a524;
}

/* Help */
.rp_tt_help{
  width: 200px;
  min-height:100px;
	background:#fff url(../images/tooltip/bg_help.jpg) bottom right no-repeat;
  border:1px solid #4f6d81;
}

/* Info */
.rp_tt_info{
  width: 200px;
  min-height:100px;
	background:#fff url(images/tooltip/bg_info.jpg) bottom right no-repeat;
  border:1px solid #4f6d81;
}

/* Roll */
.rp_tt_roll{
  width: 200px;
  min-height:100px;
	background:#fff url(images/tooltip/bg_dice.jpg) bottom right no-repeat;
  border:1px solid #4f6d81;
}

/* time */
.rp_tt_time{
  width: 200px;
  min-height:100px;
	background:#fff url(images/tooltip/bg_time.jpg) bottom right no-repeat;
  border:1px solid #357AE6;
}

/* Personal */
.rp_tt_perso, .rp_tt_persob{
  width: 200px;
  min-height:100px;
	background:#fff url(images/tooltip/bg_personal.jpg) bottom right no-repeat;
  border:1px solid #115aaf;
}

.rp_tt_persob {
  background:#fff url(../images/tooltip/bg_personal.jpg) bottom right no-repeat;
}

/* Stats */
.rp_tt_stats{
  width: 200px;
  min-height:100px;
	background:#fff url(images/tooltip/bg_stats.jpg) bottom right no-repeat;
  border:1px solid #115aaf;
}

/* Stats */
.rp_tt_updated{
  width: 200px;
  min-height:100px;
	background:#fff url(images/tooltip/bg_updated.jpg) bottom right no-repeat;
  border:1px solid #115aaf;
}

/* Stats */
.rp_tt_note{
  width: 200px;
  min-height:100px;
	background:#fff url(images/tooltip/bg_note.jpg) bottom right no-repeat;
  border:1px solid #d27d23;
}

/* Ruler */
.rp_tt_ruler{
  width: 200px;
  min-height:100px;
	background:#fff url(images/tooltip/bg_ruler.jpg) bottom right no-repeat;
  border:1px solid #d27d23;
}

.rp_tt_help td, .rp_tt_warn td, .rp_tt_info td,
.rp_tt_roll td, .rp_tt_note td, .rp_tt_time td,
.rp_tt_perso td, .rp_tt_stats td, .rp_tt_persob td,
.rp_tt_updated td, .rp_tt_note td, .rp_tt_lr td,
.rp_tt_ruler td{
	color: black;
	font-family: Verdana, Tahoma, Arial;
	font-size: 11px;
}

.rp_tt_lr{
  width: 250px;
	background-color: #AED3FF;
	text-align: left;
	border:1px ridge #357AE6;
	padding: 3px;
}
</style>';
}
?>