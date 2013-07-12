<?php require('incs/settings.inc.php'); ?>
<?php include('incs/routes.inc.php'); ?>
<? $page = getPage(); ?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?= $page['title'] . ' | ' . $siteName?></title>
        <meta name="description" content="<?= $metaDescription?>" />
        <meta name="keywords" content="<?= $metaKeywords?>" />

        <link rel="stylesheet" href="<?=$basePath?>resources/css/main.css">
        <?php
        	$addCSS = $page['addCSS'];
        	$addJS = $page['addJS'];

        	foreach ($addCSS as $style) {
        		if(file_exists('resources/css/'.$style))
        			echo "<link rel=\"stylesheet\" href=\"".$basePath."resources/css/$style\" />\n";
        	}
        	foreach ($addJS as $js) {
        		if(file_exists('resources/js/'.$js))
        			echo "<script src=\"".$basePath."resources/js/$js\"></script>\n";
        	}
        ?>
    </head>
    <body>
	    <div id="wrapper">

			<?php include('templates/header.tpl.php'); ?>
	        

	        <div id="content">
	            <?php include('pages/'.$page['content']) ?>
	        </div><!-- #content-->

			<?php include('templates/footer.tpl.php'); ?>
			
	    </div><!-- #wrapper -->
    </body>
</html>
