<!doctype html>
<html lang="zh_tw" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	
  	
	<title>大登旅遊 - 遊台灣</title>
	<style>
		#logo{
			cursor:pointer;
		}
		.link_martin{
			color:#001960;
		}
	</style>
</head>
<body>

	<header class="cd-header">
		<div id="logo"><span></span></div>
	</header>

	<main class="cd-main-content">
		<div class="cd-tab-filter-wrapper">
			<div class="cd-tab-filter">
				<ul class="cd-filters">
					<li class="placeholder"> 
						<a data-type="all" href="#0">All</a> <!-- selected option on mobile -->
					</li> 
					<li class="filter"><a id='all_product' class="selected" href="#0" data-type="all">All</a></li>
					<!--<li class="filter" data-filter=".pro"><a href="#0" data-type="pro">旅展好康</a></li>-->
					<li class="filter" data-filter=".2d"><a href="#0" data-type="group">兩天一夜</a></li>
					<li class="filter" data-filter=".3d"><a href="#0" data-type="eufit">三天兩夜</a></li>
					<li class="filter" data-filter=".4d"><a href="#0" data-type="sinfit">四天三夜</a></li>
					<li class="filter" data-filter=".5d"><a href="#0" data-type="resort">五天四夜</a></li>
					<li class="filter" data-filter=".6d"><a href="#0" data-type="cruise">六天五夜</a></li>
					<li class="filter" data-filter=".allisland"><a href="#0" data-type="bank">環島行程</a></li>
					<li class="filter" data-filter=".customized"><a href="#0" data-type="bank">客製化行程</a></li>
				</ul> <!-- cd-filters -->
			</div> <!-- cd-tab-filter -->
		</div> <!-- cd-tab-filter-wrapper -->

		<section class="cd-gallery">
			<ul>
			<?php
				/*require_once('product.php');
				foreach($product_title as $key=>$val){
					echo ' <li class="mix '.str_replace('、',' ',$product_keyword[$key]).'">
					
					<img src="img/'.$product_img[$key].'.jpg" alt="'.$val.'">
					<h2>'.$val.'</h2>
					<p>'.$product_content[$key].'
					</p>
						<h3 class="price">'.$product_price[$key].'</h3>
					
					<div class="hoverdes">
						<div class="hoverdeswrapper">
						<h2>旅展優惠</h2>
						<h4 class="describe">
							'.$product_pro[$key].'
						</h4>
						<h2>出發日期</h2>
						<h4 class="date">
							'.$product_date[$key].'
						</h4>
						<button class="link_btn button button--isi button--border-thick button--round-l button--size-s" alt="'.$product_link[$key].'"><i class="button__icon icon icon-forward"></i><span>詳細介紹</span></button>
						</div>
					</div>

				</li>';
				}*/


			?>	
			</ul>
			<div class="cd-fail-message">抱歉，搜尋不到您想要的行程，請洽詢我們的業務專員。</div>
		</section> <!-- cd-gallery -->

		<div class="cd-filter">
			<form>
<!--  
				<div class="cd-filter-block">
					<h4>Check </h4>

					<ul class="cd-filter-content cd-filters list">
						<li>
							<input class="filter" data-filter=".check1" type="checkbox" id="checkbox1">
			    			<label class="checkbox-label" for="checkbox1">Option 1</label>
						</li>

						<li>
							<input class="filter" data-filter=".check2" type="checkbox" id="checkbox2">
							<label class="checkbox-label" for="checkbox2">Option 2</label>
						</li>

						<li>
							<input class="filter" data-filter=".check3" type="checkbox" id="checkbox3">
							<label class="checkbox-label" for="checkbox3">Option 3</label>
						</li>
					</ul> cd-filter-content 
				</div> cd-filter-block 
				 -->
				<div class="cd-filter-block">
					<h4>地點選擇</h4>
					
					<div class="cd-filter-content">
						<div class="cd-select cd-filters">
							<select class="filter" name="selectThis" id="selectThis">
								<option value="">請選擇地點</option>
								<option value=".eu">歐洲</option>
								<option value=".sa">南亞</option>
								<option value=".esa">東南亞</option>
							</select>
						</div> <!-- cd-select -->
					</div> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

				<div class="cd-filter-block">
					<h4>預算</h4>

					<ul class="cd-filter-content cd-filters list">
						<li>
							<input class="filter" data-filter="" type="radio" name="radioButton" id="radio1" checked>
							<label class="radio-label" for="radio1">All</label>
						</li>

						<li>
							<input class="filter" data-filter=".under3" type="radio" name="radioButton" id="under3">
							<label class="radio-label" for="under3">三萬以下</label>
						</li>

						<li>
							<input class="filter" data-filter=".under6" type="radio" name="radioButton" id="under6">
							<label class="radio-label" for="under6">三~六萬</label>
						</li>
						<li>
							<input class="filter" data-filter=".under9" type="radio" name="radioButton" id="under9">
							<label class="radio-label" for="under9">六~九萬</label>
						</li>
						<li>
							<input class="filter" data-filter=".up9" type="radio" name="radioButton" id="up9">
							<label class="radio-label" for="up9">九萬以上</label>
						</li>
					</ul> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->
			</form>

			<a href="#0" class="cd-close">Close</a>
		</div> <!-- cd-filter -->




		<a href="#0" class="cd-filter-trigger">進階選項</a>
	<footer id="footer"><p><span class="agency">新航假期總代理 <a class='link_martin' href='http://www.martin.com.tw'><span class="margin">大登旅行社</span></a></span><span class="locate">台北</span>02-5582-5528 <span class="locate">台中</span>04-3500-2285 <span class="locate">高雄</span>07-9511-858 </p></footer>
	</main> <!-- cd-main-content -->
</body>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
<script src="js/modernizr.js"></script> <!-- Modernizr -->
<script>
	$url = "http://www.martin.com.tw/inbound/getProduct.php?callback=?";
	$.getJSON($url, {keyword: '新航假期'},
		function(product_data) {
			var content_text = '';
			$.each(product_data, function(key, val) {
				var str = val.pdt_keyword;
				content_text += ' <li class="mix '+ str.replace(/,/g, " ") +'">';
				content_text += ' <img src="http://www.martin.com.tw/'+ val.pdt_img +'" alt="'+ val.pdt_title +'">';
				content_text += ' <h2>'+ val.pdt_subject +'</h2>';
				content_text += ' <p>'+ val.pdt_title +'</p>';
				content_text += ' <h3 class="price">'+ val.pdt_price +'</h3>';
				content_text += ' <div class="hoverdes">';
				content_text += ' <div class="hoverdeswrapper">';
				content_text += ' <h2>旅展優惠</h2>';
				content_text += ' <h4 class="describe">幽會幽會優惠喔</h4>';
				content_text += ' <h2>出發日期</h2>';
				content_text += ' <h4 class="date">10/7</h4>';
				content_text += ' <button class="link_btn button button--isi button--border-thick button--round-l button--size-s" alt="http://www.martin.com.tw/product/'+ val.pdt_num +'/info/"><i class="button__icon icon icon-forward"></i><span>詳細介紹</span></button>';
				content_text += ' </div>';
				content_text += ' </div>';
				content_text += ' </li>';

             content_text += '';
		});
		 
		 $('.cd-gallery ul').append(content_text);
		 for(i=0;i<=2;i++){
			$('.cd-gallery ul').append('<li class="gap"></li>');
		 }
		 $('#all_product').trigger('click');
    });

	/*$('#logo').bind('click',function(){
		document.location.href="http://www.siaholidays.com.tw/";
		return false;
	});*/
	$('ul').on('click','.link_btn',function(){
		var href = $(this).attr('alt');
		window.open(href);
		return false;
	});
</script>
</html>