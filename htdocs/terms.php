<?php
include '../cfg/cfg.php';

$content = Content::getRecord('terms');
$page_title = $content['title'];

include 'includes/head.php';
?>
<div class="page_title">
	<div class="container">
		<div class="title"><h1><?= $page_title ?></h1></div>
        <div class="pagenation">&nbsp;<a href="index.php"><?= Lang::string('home') ?></a> <i>/</i> <a href="terms.php"><?= Lang::string('terms') ?></a></div>
	</div>
</div>
<div class="container">
	<? include 'includes/sidebar_topics.php'; ?>
	<div class="content_right">
    <div class="text"><?= $content['content'] ?></div>
    </div>
	<div class="clearfix mar_top8"></div>
</div>
<? include 'includes/foot.php'; ?>