<html>
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php foreach ($news as $news_item) { ?>	
	
	<!-- <h1><a href="<?php echo site_url('news/'.$news_item['laporan']); ?>"><?php echo $news_item['laporan']; ?></a></h1> -->

	<p><?php echo substr($news_item['laporan'], 0, 2); ?></p>
	<p><a href="<?php echo site_url('news/'.$news_item['laporan']); ?>">Read More</a></p>

<?php } ?>	
</body>
</html>