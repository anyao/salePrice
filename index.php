<?php  

?>
<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="中普宽厚板价格计算">
	<meta name="author" content="安瑶">
	<link rel="icon" href="./bs/img/favicon.ico">
    <title>宽厚板产品价格计算</title>
	<style type="text/css">
		.row{
			background: rgba(0, 0, 0, 0.6) none repeat scroll 0 0 !important;
			padding-top: 80px;
			padding-bottom: 80px;
  			filter:progid:DXImageTransform.Microsoft.gradient(startcolorstr=#7F000000,endcolorstr=#7F000000);
		}

		.form-group{
			margin-bottom: 0px !important
		}

		.foothome{
		  position:fixed; 
		  bottom:10px; 
		  width:100%;
		  text-align: center;
		}
	</style>
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="./bs/css/fileinput.css">
    <link href="./bs/css/bootstrap.css" rel="stylesheet">
	<!--[if lt IE 9]>
	  <script src="./bs/js/html5shiv.js"></script>
	  <script src="./bs/js/respond.js"></script>
	<![endif]-->
  </head>
  <body>
	<img src="./bgp.JPG" style="width:100%;position: absolute;left:0px;top:0px;z-index: -999;height: 100%">
	<div class="container">
		<form action="controller.php" method="post" enctype="multipart/form-data">
			<div class="row" style="margin-top: ">
				<div class="col-md-offset-2 col-md-8">
				  <input type="file" name="file"   class="file-loading" data-show-preview="false">
				</div>
			</div>
		</form>
	</div>
	<div class="foothome" style="color: #f0f0f0">© 河北普阳钢铁有限公司　2017-<?php echo date("Y")?></div>
    <script src="./bs/js/jquery.min.js"></script>
    <script src="./bs/js/bootstrap.min.js"></script>
    <script src="./bs/js/fileinput.js"></script>
    <script src="bs/js/zh.js"></script>
    <script type="text/javascript">
    	$(function(){
    		// 获取界面高度
	    	var viewHeight = $(window).height();
	    	var inputHeight = viewHeight * 0.3;
	    	$(".row").css('margin-top',inputHeight+"px");

	    	$("input[type=file]").fileinput({
		        showUpload: true,
		        maxFileCount: 10,
		        allowedFileExtensions : ['csv'],
		        mainClass: "input-group-lg",
		        language: 'zh',
		        uploadIcon: '<i class="glyphicon glyphicon-play-circle text-info"></i>',
		    });
    	});

    	// 计算按钮
    	// $("input[name=submit]").click()

    </script>
  </body>
</html>
