<?php


if(strlen($_POST['id']) == 13)
	$_POST['id'] = '0'.$_POST['id'];

//echo $_POST['id'].'\n';
//echo getcwd();
$targetPath =  '../../img/pictures';

$targetPath .= '/'.$_POST['id'];
//echo $targetPath;
//echo realpath($targetPath);


//echo realpath($targetPath);
//echo chdir($targetPath);
$files1 = scandir($targetPath);
$targetPath .= '/';
unset($files1[0]);
unset($files1[1]);
sort($files1);
echo '<pre>';
print_r($files1);
echo '</pre>';
echo '<img src="'.$targetPath.$files1[0].'"/>';
?>

<link type="text/css" href="css/pikachoose/bottom.css" rel="stylesheet" />
<!-- <script type="text/javascript" src=" https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> -->
<script type="text/javascript" src="js/pikachoose/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="js/pikachoose/jquery.pikachoose.min.js"></script>
<script language="javascript">
	$(document).ready(
		function (){
			$("#pikame").PikaChoose({carousel:true, text: {previous: "", next: "" }, hoverPause:true, transition:[0], showCaption:false});
		});
</script>

<style type="text/css">
.pikachoose {
	width: 100%;
}
.pikachoose .pika-stage {
	width: 90%;
}
.pikachoose .pika-stage img {

}

</style>
<center>
<div class="pikachoose">
	<ul id="pikame" class="jcarousel-skin-pika">
		<?php
			foreach ($files1 as $key => $value) {
				echo '<li><img src="'.$targetPath.$value.'"/></li>';
			}
		?>
	</ul>
</div>
<center>