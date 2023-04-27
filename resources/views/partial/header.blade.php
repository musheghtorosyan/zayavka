<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<?php if(file_exists("css/".$page.".css")){ ?>
    <link rel="stylesheet" type="text/css" href='{{asset("css/$page.css")}}'>
	<?php } ?>
	<link rel="stylesheet" type="text/css" href='{{asset("css/style.css")}}'>
	<link rel="icon" type="icon" href='{{asset("images/favicon.ico")}}'>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<title>Zayavka-rossia.ru</title>
	<?php if($page=="catalogue_single"){ ?>
	<meta property="og:image" content="/storage/{{$product['pic1']}}">
    <link rel="image_src" href="/storage/{{$product['pic1']}}" />
    <meta property="og:title" content="{{$product[$l.'_title']}}" />
    <meta property="og:site_name" content="Zayavka-rossia.ru" />
    <meta name="description" content="{!!strip_tags($product[$l.'_desc'])!!}">  
    <meta property="og:type" content="website" />
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="200">
    <meta property="og:image:height" content="200">
	<?php }	?>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-RZD5L83X55"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', 'G-RZD5L83X55');
	</script>
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
	(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
	m[i].l=1*new Date();
	for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
	k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

	ym(92037123, "init", {
			clickmap:true,
			trackLinks:true,
			accurateTrackBounce:true,
			webvisor:true
	});
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/92037123" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
</head>
<body class="initial-view">

	<header class="trigger_menu">
		<div class="header_container trigger_menu">
			<div class ="inner_header">
				<div class="header_left_side">
					<!-- <a href="/"><img height="52px" src="/images/logo.png"></a> -->
					<a href="/" class='logoa'>Zayavka-Rossia.Ru</a>
				</div>
				<div class="header_right_side">
					<ul class ="header_menu">
						<li><a href="{{route('companies',['locale' => app()->getLocale()])}}" class ="header_submenu">Заявки</a></li>
						<li><a href="{{route('companies',['locale' => app()->getLocale()])}}" class ="header_submenu">Производители</a></li>
						<li><a href="{{route('products',['locale' => app()->getLocale()])}}" class ="header_submenu">Товары</a></li>
						<li><a href="{{route('catalogue',['locale' => app()->getLocale()])}}" class ="header_submenu">Новости</a></li>
						<li><a href="{{route('stock',['locale' => app()->getLocale()])}}" class ="header_submenu">Акции</a></li>
						<li><a href="{{route('faq',['locale' => app()->getLocale()])}}" class ="header_submenu">{{  __('messages.footer1') }}</a></li>
						<li><a href="{{route('about_us',['locale' => app()->getLocale()])}}" class ="header_submenu">{{  __('messages.menu3') }}</a></li>
						<li><a href="{{route('contacts',['locale' => app()->getLocale()])}}" class ="header_submenu">{{  __('messages.menu4') }}</a></li>
					</ul>

					<?php if(isset($_COOKIE['ardiuser'])) { ?>
					<div class="shop_side">
						<ul class="header_icons">
							<li>
								<a href="{{route('favourite',['locale' => app()->getLocale()])}}">
									<img height="26px" src="/logos/bell.png">
								</a>
							</li>
						
							<li class="profile_icon prof_icon_hover">
							<a href="{{route('profile_console',['locale' => app()->getLocale()])}}">
								<img src="/logos/profile1.svg" class="prof_icon">
							</a>
							</li>
						</ul>
					</div>
					<?php } else { ?>
						<div class="shop_side">
						<ul class="header_icons">
							<li class="profile_icon prof_icon_hover">
								<a href="{{route('sign_in',['locale' => app()->getLocale()])}}">
									<img src="/logos/profile1.svg" class="prof_icon">
								</a>
							</li>
						</ul>
					</div>
					<?php } ?>
					



					<div class="hamburger">
						<img class="hamburger_img" src="/logos/burger_menu.png" alt="">
					</div>	
					
				</div>
			</div>
		</div>
	</header>
	<div class="popups">	
		<div class="popup"></div>
		<div class="burger_menu">
		<div class="close">
			<img src="/logos/cancel.svg" alt="">
		</div>
		<div class="burger_nav">
			<ul>
				<li><a href="{{route('catalogue',['locale' => app()->getLocale()])}}"> {{  __('messages.menu1') }}</a></li>
				<li><a href="{{route('about_us',['locale' => app()->getLocale()])}}"> {{  __('messages.menu3') }}</a></li>
				<li><a href="{{route('contacts',['locale' => app()->getLocale()])}}"> {{  __('messages.menu4') }}</a></li>
			</ul>
		</div>
		<div class="burger_lang">
			<form action="">
				<div class="mob_language_block">
				<?php if(app()->getLocale() != 'ru') { ?>
					<div class="mob_language active_header">
						<a href="/lang/ru">
							<img src="/logos/ru.png" alt="">
							<span>RU</span>
						</a>
					</div>
					<?php } ?>
					<?php if(app()->getLocale() != 'hy') { ?>
					<div class="mob_language">
						<a href="/lang/hy">
							<img src="/logos/am.png" alt="">
							<span>AM</span>
						</a>
					</div>
					<?php } ?>
					<?php if(app()->getLocale() != 'en') { ?>
					<div class="mob_language">
						<a href="/lang/en">
							<img src="/logos/en.png" alt="">
							<span>EN</span>
						</a>
					</div>
					<?php } ?>
				</div>
			</form>
		</div>
		</div>
	</div>
	