<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml" >
<head >
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
<title ><? echo $title_for_layout; ?></title>

<!--JAVASCRIPT-- >

<!--jQuery-- >
<script src="<?= $html->url("/js/jquery-1.3.2.min.js")?>"       type="text/javascript"></script>

<script src="<?= $html->url("/js/jquery.uploadify_source.js")?>" type="text/javascript"></script>

<!--CSS-->
<link rel="stylesheet" href="url("/css/main.css")?>"         type="text/css" media="screen"/>
<link rel="stylesheet" href="url("/css/uploadify.css")?>"    type="text/css" media="screen"/>
<link rel="stylesheet" href="url("/css/cake.generic.css")?>" type="text/css" media="screen"/>
</head>
    <body>
        <div id="wrapper">
            <div id="content">
                <? echo $content_for_layout; ?>
            </div>
        </div>
        <?php echo $cakeDebug; ?>
    </body>
</html>