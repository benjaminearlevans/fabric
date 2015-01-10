<!DOCTYPE html>
<html lang="en-us">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>fabric.css</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<!-- Mobile meta -->
		<!-- standard viewport tag to set the viewport to the device's width, Android 2.3 devices need this so 100% width works properly and	doesn't allow children to blow up the viewport width-->
		<meta name="viewport" content="initial-scale=1,user-scalable=yes,maximum-scale=2,width=device-width">
		<!-- width=device-width causes the iPhone 5 to letterbox the app, so we want to exclude it for iPhone 5 to allow full screen apps -->
		<meta name="viewport" content="initial-scale=1,user-scalable=yes,maximum-scale=2" media="(device-height: 568px)">

		<!-- Stylesheets -->
		<link rel="stylesheet" href="../dist/css/fabric.css">
		<link rel="stylesheet" href="../dist/css/docs.css">

		<!-- Modernizr -->
		<script src="../dist/js/modernizr.js"></script>
	</head>
	<body>
		<!-- SVG defs -->
		<div style="display:none"><?php include_once(getcwd() . "/../dist/icons/symbol/svg/sprite.symbol.svg"); ?></div>

		<header class="header">
			<div class="container">
				<h1 class="turbo">Fabric.css</h1>
				<p>Yet another simple, lightweight CSS framework.</p>
				<div class="actions">
					<a href="#" class="btn btn--primary">Download v0.1</a>
					<a href="#main" class="btn js-smooth-scroll">More info</a>
				</div>
			</div>
		</header>
		<main id="main" class="container main">
			<article id="grid" class="example row">
				<header class="col3">
					<h1>Grid</h1>
					<p>A simple, fluid 12 column grid</p>
				</header>
				<section class="col9">
					<div class="row example__grid" role="presentation">
						<div class="col1">1</div>
						<div class="col1">1</div>
						<div class="col1">1</div>
						<div class="col1">1</div>
						<div class="col1">1</div>
						<div class="col1">1</div>
						<div class="col1">1</div>
						<div class="col1">1</div>
						<div class="col1">1</div>
						<div class="col1">1</div>
						<div class="col1">1</div>
						<div class="col1">1</div>
					</div>
					<div class="row example__grid" role="presentation">
						<div class="col2">2</div>
						<div class="col2">2</div>
						<div class="col2">2</div>
						<div class="col2">2</div>
						<div class="col2">2</div>
						<div class="col2">2</div>
					</div>
					<div class="row example__grid" role="presentation">
						<div class="col3">3</div>
						<div class="col3">3</div>
						<div class="col3">3</div>
						<div class="col3">3</div>
					</div>
					<div class="row example__grid" role="presentation">
						<div class="col4">4</div>
						<div class="col4">4</div>
						<div class="col4">4</div>
					</div>
					<div class="row example__grid" role="presentation">
						<div class="col5">5</div>
						<div class="col5">5</div>
						<div class="col2">2</div>
					</div>
					<div class="row example__grid" role="presentation">
						<div class="col6">6</div>
						<div class="col6">6</div>
					</div>
					<div class="row example__grid" role="presentation">
						<div class="col7">7</div>
						<div class="col5">5</div>
					</div>
					<div class="row example__grid" role="presentation">
						<div class="col8">8</div>
						<div class="col4">4</div>
					</div>
					<div class="row example__grid" role="presentation">
						<div class="col9">9</div>
						<div class="col3">3</div>
					</div>
					<div class="row example__grid" role="presentation">
						<div class="col10">10</div>
						<div class="col2">2</div>
					</div>
					<div class="row example__grid" role="presentation">
						<div class="col11">11</div>
						<div class="col1">1</div>
					</div>
				</section>
			</article>
			<article id="type" class="example row">
				<header class="col3">
					<h1>Type</h1>
					<p>Headings, paragraphs, lists, quotes</p>
				</header>
				<section class="col9">
					<h1>h1</h1>
					<h2>h2</h2>
					<h3>h3</h3>
					<h4>h4</h4>
					<h5>h5</h5>
					<h6>h6</h6>

					<p class="lead">This is a <strong>.lead</strong> paragraph. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porta neque libero, at accumsan felis lacinia at. Duis sit amet ultrices ante, vitae rhoncus turpis. Curabitur at nunc vel justo porttitor bibendum quis in tortor. Praesent suscipit tristique purus quis dictum.</p>

					<p>This is a <em>default</em> paragraph. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porta neque libero, at accumsan felis lacinia at. Duis sit amet ultrices ante, vitae rhoncus turpis. Curabitur at nunc vel justo porttitor bibendum quis in tortor. Praesent suscipit tristique purus quis dictum.</p>

					<ul>
						<li>List item 1</li>
						<li>List item 2</li>
						<li>List item 3</li>
					</ul>
					<ol>
						<li>List item 1</li>
						<li>List item 2</li>
						<li>List item 3</li>
					</ol>

					<ul class="fancy">
						<li>List item 1</li>
						<li>List item 2</li>
						<li>List item 3</li>
					</ul>					
					<ol class="fancy">
						<li>List item 1</li>
						<li>List item 2</li>
						<li>List item 3</li>
					</ol>
				</section>
			</article>
			<article id="icons" class="example row">
				<header class="col3">
					<h1>Icons</h1>
					<p>All icons are inline SVG as recommended by <a href="http://css-tricks.com/svg-sprites-use-better-icon-fonts/" target="_blank">Chris Coyier</a></p>
				</header>
				<section class="col9">
					<h5>Standard Icons</h5>
					<ul class="list--icons">
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#air-play"></use></svg><span class="tooltip__tip">#air-play</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#align-center"></use></svg><span class="tooltip__tip">#align-center</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#align-justify"></use></svg><span class="tooltip__tip">#align-justify</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#align-left"></use></svg><span class="tooltip__tip">#align-left</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#align-right"></use></svg><span class="tooltip__tip">#align-right</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#alt"></use></svg><span class="tooltip__tip">#alt</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#anchor"></use></svg><span class="tooltip__tip">#anchor</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#archive"></use></svg><span class="tooltip__tip">#archive</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#arrow-down"></use></svg><span class="tooltip__tip">#arrow-down</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#arrow-left"></use></svg><span class="tooltip__tip">#arrow-left</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#arrow-right"></use></svg><span class="tooltip__tip">#arrow-right</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#arrow-up"></use></svg><span class="tooltip__tip">#arrow-up</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#bag"></use></svg><span class="tooltip__tip">#bag</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#ban"></use></svg><span class="tooltip__tip">#ban</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#bar-graph-2"></use></svg><span class="tooltip__tip">#bar-graph-2</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#bar-graph"></use></svg><span class="tooltip__tip">#bar-graph</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#battery"></use></svg><span class="tooltip__tip">#battery</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#bell"></use></svg><span class="tooltip__tip">#bell</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#book"></use></svg><span class="tooltip__tip">#book</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#box"></use></svg><span class="tooltip__tip">#box</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#briefcase"></use></svg><span class="tooltip__tip">#briefcase</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#camera"></use></svg><span class="tooltip__tip">#camera</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#check"></use></svg><span class="tooltip__tip">#check</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#circle-check"></use></svg><span class="tooltip__tip">#circle-check</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#circle-cross"></use></svg><span class="tooltip__tip">#circle-cross</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#circle-minus"></use></svg><span class="tooltip__tip">#circle-minus</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#circle-plus"></use></svg><span class="tooltip__tip">#circle-plus</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#clipboard"></use></svg><span class="tooltip__tip">#clipboard</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#clock"></use></svg><span class="tooltip__tip">#clock</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#cloud-download"></use></svg><span class="tooltip__tip">#cloud-download</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#cloud-upload"></use></svg><span class="tooltip__tip">#cloud-upload</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#cloud"></use></svg><span class="tooltip__tip">#cloud</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#cog"></use></svg><span class="tooltip__tip">#cog</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#columns"></use></svg><span class="tooltip__tip">#columns</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#command"></use></svg><span class="tooltip__tip">#command</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#content-left"></use></svg><span class="tooltip__tip">#content-left</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#content-right"></use></svg><span class="tooltip__tip">#content-right</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#contract"></use></svg><span class="tooltip__tip">#contract</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#cross"></use></svg><span class="tooltip__tip">#cross</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#delete"></use></svg><span class="tooltip__tip">#delete</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#disc"></use></svg><span class="tooltip__tip">#disc</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#download"></use></svg><span class="tooltip__tip">#download</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#drop"></use></svg><span class="tooltip__tip">#drop</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#ellipsis"></use></svg><span class="tooltip__tip">#ellipsis</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#esc"></use></svg><span class="tooltip__tip">#esc</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#expand"></use></svg><span class="tooltip__tip">#expand</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#eye"></use></svg><span class="tooltip__tip">#eye</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#fast-forward"></use></svg><span class="tooltip__tip">#fast-forward</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#file-add"></use></svg><span class="tooltip__tip">#file-add</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#file-subtract"></use></svg><span class="tooltip__tip">#file-subtract</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#file"></use></svg><span class="tooltip__tip">#file</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#flag"></use></svg><span class="tooltip__tip">#flag</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#folder"></use></svg><span class="tooltip__tip">#folder</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#globe"></use></svg><span class="tooltip__tip">#globe</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#grid-2"></use></svg><span class="tooltip__tip">#grid-2</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#grid"></use></svg><span class="tooltip__tip">#grid</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#head"></use></svg><span class="tooltip__tip">#head</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#heart"></use></svg><span class="tooltip__tip">#heart</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#help"></use></svg><span class="tooltip__tip">#help</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#image"></use></svg><span class="tooltip__tip">#image</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#inbox"></use></svg><span class="tooltip__tip">#inbox</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#layers"></use></svg><span class="tooltip__tip">#layers</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#layout"></use></svg><span class="tooltip__tip">#layout</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#link"></use></svg><span class="tooltip__tip">#link</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#loader"></use></svg><span class="tooltip__tip">#loader</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#location-2"></use></svg><span class="tooltip__tip">#location-2</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#location"></use></svg><span class="tooltip__tip">#location</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#lock"></use></svg><span class="tooltip__tip">#lock</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#mail"></use></svg><span class="tooltip__tip">#mail</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#map"></use></svg><span class="tooltip__tip">#map</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#marquee-minus"></use></svg><span class="tooltip__tip">#marquee-minus</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#marquee-plus"></use></svg><span class="tooltip__tip">#marquee-plus</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#marquee"></use></svg><span class="tooltip__tip">#marquee</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#maximize"></use></svg><span class="tooltip__tip">#maximize</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#menu"></use></svg><span class="tooltip__tip">#menu</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#microphone"></use></svg><span class="tooltip__tip">#microphone</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#minimize"></use></svg><span class="tooltip__tip">#minimize</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#minus"></use></svg><span class="tooltip__tip">#minus</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#monitor"></use></svg><span class="tooltip__tip">#monitor</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#moon"></use></svg><span class="tooltip__tip">#moon</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#move"></use></svg><span class="tooltip__tip">#move</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#mute"></use></svg><span class="tooltip__tip">#mute</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#open"></use></svg><span class="tooltip__tip">#open</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#outbox"></use></svg><span class="tooltip__tip">#outbox</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#paper-clip"></use></svg><span class="tooltip__tip">#paper-clip</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#paper-stack"></use></svg><span class="tooltip__tip">#paper-stack</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#paper"></use></svg><span class="tooltip__tip">#paper</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#paragraph"></use></svg><span class="tooltip__tip">#paragraph</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#pause"></use></svg><span class="tooltip__tip">#pause</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#pie-graph"></use></svg><span class="tooltip__tip">#pie-graph</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#play"></use></svg><span class="tooltip__tip">#play</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#plus"></use></svg><span class="tooltip__tip">#plus</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#power"></use></svg><span class="tooltip__tip">#power</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#printer"></use></svg><span class="tooltip__tip">#printer</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#record"></use></svg><span class="tooltip__tip">#record</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#reload"></use></svg><span class="tooltip__tip">#reload</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#repeat"></use></svg><span class="tooltip__tip">#repeat</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#reply"></use></svg><span class="tooltip__tip">#reply</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#rewind"></use></svg><span class="tooltip__tip">#rewind</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#ribbon"></use></svg><span class="tooltip__tip">#ribbon</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#search"></use></svg><span class="tooltip__tip">#search</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#server"></use></svg><span class="tooltip__tip">#server</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#share"></use></svg><span class="tooltip__tip">#share</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#shuffle"></use></svg><span class="tooltip__tip">#shuffle</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#signal"></use></svg><span class="tooltip__tip">#signal</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#skip-back"></use></svg><span class="tooltip__tip">#skip-back</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#skip-forward"></use></svg><span class="tooltip__tip">#skip-forward</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#speech-bubble"></use></svg><span class="tooltip__tip">#speech-bubble</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#square-check"></use></svg><span class="tooltip__tip">#square-check</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#square-cross"></use></svg><span class="tooltip__tip">#square-cross</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#square-minus"></use></svg><span class="tooltip__tip">#square-minus</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#square-plus"></use></svg><span class="tooltip__tip">#square-plus</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#stack-2"></use></svg><span class="tooltip__tip">#stack-2</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#stack"></use></svg><span class="tooltip__tip">#stack</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#star"></use></svg><span class="tooltip__tip">#star</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#stop"></use></svg><span class="tooltip__tip">#stop</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#sun"></use></svg><span class="tooltip__tip">#sun</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#tag"></use></svg><span class="tooltip__tip">#tag</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#target"></use></svg><span class="tooltip__tip">#target</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#thermometer"></use></svg><span class="tooltip__tip">#thermometer</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#toggle"></use></svg><span class="tooltip__tip">#toggle</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#trash"></use></svg><span class="tooltip__tip">#trash</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#umbrella"></use></svg><span class="tooltip__tip">#umbrella</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#unlock"></use></svg><span class="tooltip__tip">#unlock</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#upload"></use></svg><span class="tooltip__tip">#upload</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#video"></use></svg><span class="tooltip__tip">#video</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#volume"></use></svg><span class="tooltip__tip">#volume</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#watch"></use></svg><span class="tooltip__tip">#watch</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#zoom-in"></use></svg><span class="tooltip__tip">#zoom-in</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#zoom-out"></use></svg><span class="tooltip__tip">#zoom-out</span></li>
					</ul>
					<h5>Social Icons</h5>
					<ul class="list--icons">
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#facebook"></use></svg><span class="tooltip__tip">#facebook</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#twitter"></use></svg><span class="tooltip__tip">#twitter</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#pinterest"></use></svg><span class="tooltip__tip">#pinterest</span></li>
						<li class="tooltip tooltip--hover"><svg class="icon"><use xlink:href="#googleplus"></use></svg><span class="tooltip__tip">#googleplus</span></li>
					</ul>
				</section>
			</article>
			<article id="alerts" class="example row">
				<header class="col3">
					<h1>Alerts</h1>
					<p>Warnings, errors, success and info alert messages</p>
				</header>
				<section class="col9">
					<div class="alert" role="alert"><svg class="icon"><use xlink:href="#cross"></use></svg>This is a default warning alert</div>
					<div class="alert alert-error" role="alert"><svg class="icon"><use xlink:href="#cross"></use></svg>This is an error alert</div>
					<div class="alert alert-success" role="alert"><svg class="icon"><use xlink:href="#check"></use></svg>This is a success alert</div>
					<div class="alert alert-info" role="alert"><svg class="icon"><use xlink:href="#help"></use></svg>This is an info alert</div>
				</section>
			</article>
			<article id="buttons" class="example row">
				<header class="col3">
					<h1>Buttons &amp; Anchors</h1>
					<p>For triggering actions or missile launches</p>
				</header>
				<section class="col9">
					<h5>Choose the right element</h5>
					<p>Anchor elements (&lt;a&gt;) should be used for linking to actual pages or content. Button elements (&lt;button&gt;) should be used when you're triggering an action such as a form submit. You can use an anchor and then bind JavaScript to it and prevent the default behaviour (following the link). This would be useful for something such as an image lightbox where the user might want to open in a new tab.</p>

					<h5>Text</h5>
					<p>Here's an example of a <a href="#">real anchor</a> and here's an example of a <button type="button" class="faux-anchor">faux anchor</button> (a &lt;button&gt; styled as an anchor).</p>

					<h5>Icons</h5>
					<p>
						<a href="#"><svg class="icon"><use xlink:href="#cog"></use></svg></a> 
						<button type="button" class="faux-anchor"><svg class="icon"><use xlink:href="#cog"></use></svg></button>
						<a href="#"><svg class="icon"><use xlink:href="#archive"></use></svg></a> 
						<button type="button" class="faux-anchor"><svg class="icon"><use xlink:href="#archive"></use></svg></button>
						<a href="#"><svg class="icon"><use xlink:href="#circle-check"></use></svg></a> 
						<button type="button" class="faux-anchor"><svg class="icon"><use xlink:href="#circle-check"></use></svg></button>
					</p>

					<h5>Buttons</h5>
					<p>You can use a &lt;button&gt; element&hellip;</p>
					<div class="actions example__actions">					
						<button type="button" class="btn btn--primary">Primary</button>
						<button type="button" class="btn btn--secondary">Secondary</button>
						<button type="button" class="btn">Default</button>
					</div>

					<p>&hellip; or an &lt;a&gt; element</p>
					<div class="actions example__actions">	
						<a href="#" class="btn btn--primary">Primary</a>
						<a href="#" class="btn btn--secondary">Secondary</a>
						<a href="#" class="btn">Default</a>
					</div>

					<p>With icons</p>
					<div class="actions example__actions">					
						<button type="button" class="btn"><svg class="icon icon--first"><use xlink:href="#speech-bubble"></use></svg>Comment</button>
						<button type="button" class="btn">Go<svg class="icon icon--last"><use xlink:href="#arrow-right"></use></svg></button>
						<button type="button" class="btn btn--primary"><svg class="icon"><use xlink:href="#check"></use></svg></button>
					</div>

					<p>Small version</p>
					<div class="actions example__actions">
						<button type="button" class="btn btn--primary btn--small">Primary</button>
						<button type="button" class="btn btn--secondary btn--small">Secondary</button>
						<button type="button" class="btn btn--small">Default</button>
					</div>

					<p>With icons</p>
					<div class="actions example__actions">					
						<button type="button" class="btn btn--small"><svg class="icon icon--first"><use xlink:href="#speech-bubble"></use></svg>Comment</button>
						<button type="button" class="btn btn--small">Go<svg class="icon icon--last"><use xlink:href="#arrow-right"></use></svg></button>
						<button type="button" class="btn btn--primary btn--small"><svg class="icon"><use xlink:href="#check"></use></svg></button>
					</div>

					<p>States</p>
					<div class="actions example__actions">
						<button type="button" class="btn hover">:hover</button>
						<button type="button" class="btn focus">:focus</button>
						<button type="button" class="btn active">:active</button>
						<button type="button" class="btn disabled" disabled>:disabled</button>
						<button type="button" class="btn loading">Loading&hellip;</button>
					</div>

					<p>There's some social ones too</p>
					<div class="actions example__actions">
						<button type="button" class="btn btn--facebook"><svg class="icon icon--first"><use xlink:href="#facebook"></use></svg>Facebook</button>
						<button type="button" class="btn btn--twitter"><svg class="icon icon--first"><use xlink:href="#twitter"></use></svg>Twitter</button>
						<button type="button" class="btn btn--pinterest"><svg class="icon icon--first"><use xlink:href="#pinterest"></use></svg>Pinterest</button>
						<button type="button" class="btn btn--google-plus"><svg class="icon icon--first"><use xlink:href="#googleplus"></use></svg>Google&plus;</button>
					</div>

					<p>Counters</p>
					<div class="example__actions">
						<button type="button" class="btn btn--facebook btn--small"><svg class="icon icon--first"><use xlink:href="#facebook"></use></svg>Share</button>
						<span class="counter">88</span>
						<button type="button" class="btn btn--twitter btn--small"><svg class="icon icon--first"><use xlink:href="#twitter"></use></svg>Tweet</button>
						<span class="counter">88</span>
					</div>
					<div class="example__actions">
						<button type="button" class="btn btn--facebook"><svg class="icon icon--first"><use xlink:href="#facebook"></use></svg>Share</button>
						<span class="counter">88</span>
						<button type="button" class="btn btn--twitter"><svg class="icon icon--first"><use xlink:href="#twitter"></use></svg>Tweet</button>
						<span class="counter">88</span>
					</div>

					<p>Pagination</p>
					<div class="pagination example__actions">
						<a href="#page1" class="btn previous">Previous</a>
						<a href="#page3" class="btn btn--primary">Next</a>
					</div>
				</section>
			</article>
			<article id="forms" class="example row">
				<header class="col3">
					<h1>Forms</h1>
					<p>Collection information from users</p>
				</header>
				<section class="col9">
					<form method="post" action="#form" id="form">
						<fieldset>
							<legend class="h5">Vertical Layout (default)</legend>
							<div class="control-group">
								<div class="control-label">
									<label for="control-text">Text</label>
									<small class="control-help">Label help</small>
								</div>
								<div class="controls">
									<input type="text" id="control-text" placeholder="e.g. I love fabric">
									<small class="control-help">This is some form help</small>
								</div>
							</div>
							<div class="control-group">
								<div class="control-label">
									<label for="control-text-addon">Text</label>
									<small class="control-help">Label help</small>
								</div>
								<div class="controls">
									<div class="input-group">
										<div class="add-on">UA-</div>
										<input type="text" id="control-text=addon" placeholder="e.g. F89T67P09">
									</div>
									<small class="control-help">This is some form help</small>
								</div>
							</div>
							<div class="control-group">
								<div class="control-label">
									<label for="control-textarea">Textarea</label>
									<small class="control-help">Label help</small>
								</div>
								<div class="controls">
									<textarea id="control-textarea" placeholder="e.g. A long message"></textarea>
									<small class="control-help">This is some form help</small>
								</div>
							</div>
							<div class="control-group">
								<div class="control-label">
									<label for="control-select">Select</label>
									<small class="control-help">Label help</small>
								</div>
								<div class="controls">
									<select id="control-select">
										<option>Option 1</option>
										<option>Option 2</option>
									</select>
									<small class="control-help">This is some form help</small>
								</div>
							</div>
							<div class="actions actions--form">
								<button type="submit" class="btn btn--primary">Save</button>
								<button type="reset" class="btn">Cancel</button>
							</div>
						</fieldset>
					</form>
					<form method="post" action="#form--horizontal" class="form--horizontal" id="form--horizontal">
						<fieldset>
							<legend class="h5">Horizontal Layout</legend>
							<p>This layout will only be used for <code>@screen-md</code> and larger screen sizes.</p>
							<div class="control-group">
								<div class="control-label">
									<label for="control-text-2">Text</label>
									<small class="control-help">Label help</small>
								</div>
								<div class="controls">
									<input type="text" id="control-text-2" placeholder="e.g. I love fabric">
									<small class="control-help">This is some form help</small>
								</div>
							</div>
							<div class="control-group">
								<div class="control-label">
									<label for="control-textarea-2">Textarea</label>
									<small class="control-help">Label help</small>
								</div>
								<div class="controls">
									<textarea id="control-textarea-2" placeholder="e.g. A long message"></textarea>
									<small class="control-help">This is some form help</small>
								</div>
							</div>
							<div class="control-group">
								<div class="control-label">
									<label for="control-select-2">Select</label>
									<small class="control-help">Label help</small>
								</div>
								<div class="controls">
									<select id="control-select-2">
										<option>Option 1</option>
										<option>Option 2</option>
									</select>
									<small class="control-help">This is some form help</small>
								</div>
							</div>
							<div class="control-group">
								<div class="control-label">
									<label for="control-select">Radios</label>
									<small class="control-help">Label help</small>
								</div>
								<div class="controls">
									<div class="radio">
										<input type="radio" id="control-radio1" name="control-radio">
										<label for="control-radio1" name="control-radio">Radio 1</label>
									</div>
									<div class="radio">
										<input type="radio" id="control-radio2" name="control-radio" checked>
										<label for="control-radio2">Radio 2</label>
									</div>
									<div class="radio">
										<input type="radio" id="control-radio3" name="control-radio">
										<label for="control-radio3">Radio 3</label>
									</div>
								</div>
							</div>
							<div class="control-group">
								<div class="control-label">
									<label for="control-select">Checkboxes</label>
									<small class="control-help">Label help</small>
								</div>
								<div class="controls">
									<div class="checkbox">
										<input type="checkbox" id="control-checkbox1" name="control-checkbox" checked>
										<label for="control-checkbox1" name="control-radio">Checkbox 1</label>
									</div>
									<div class="checkbox">
										<input type="checkbox" id="control-checkbox2" name="control-checkbox">
										<label for="control-checkbox2">Checkbox 2</label>
									</div>
									<div class="checkbox">
										<input type="checkbox" id="control-checkbox3" name="control-checkbox">
										<label for="control-checkbox3">Checkbox 3</label>
									</div>
								</div>
							</div>
							<div class="actions actions--form">
								<button type="submit" class="btn btn--primary">Save</button>
								<button type="reset" class="btn">Cancel</button>
							</div>
						</fieldset>
					</form>
					<form method="post" action="#form--combo" id="form--combo">
						<fieldset>
							<legend class="h5">Combo Input</legend>
							<div class="control-combo">
								<div class="control">
									<label for="combo-text-1" class="sr-only">Text 1</label>
									<input type="text" id="combo-text-1" placeholder="e.g. Dave Smith">
								</div>
								<div class="control">
									<label for="combo-text-2" class="sr-only">Text 2</label>
									<input type="email" id="combo-text-2" placeholder="e.g. dave@smith.com">
								</div>
								<div class="control">
									<label for="combo-text-2" class="sr-only">Text 2</label>
									<div class="input-group">
										<div class="add-on">UA-</div>
										<input type="email" id="combo-text-2" placeholder="e.g. X34F68FG">
									</div>
								</div>
								<div class="control">
									<label for="combo-select" class="sr-only">Select</label>
									<select id="combo-select">
										<option>Option 1</option>
										<option>Option 2</option>
									</select>
								</div>
							</div>
							<div class="actions actions--form">
								<button type="submit" class="btn btn--primary">Save</button>
								<button type="reset" class="btn">Cancel</button>
							</div>
						</fieldset>
					</form>
				</section>
			</article>
			<article id="nav" class="example row">
				<header class="col3">
					<h1>Navigation</h1>
					<p>Getting around</p>
				</header>
				<section class="col9">
					<h5>Navigation bar</h5>
					<nav class="nav-bar">
						<div class="logo">Logo</div>
						<ul>
							<li>
								<a href="#nav-item-1">Home</a>
							</li>
							<li class="active">
								<a href="#nav-item-2">Products</a>
							</li>
							<li class="js-test">
								<a href="#nav-item-3">Contact</a>
							</li>
							<li>
								<a href="#nav-item-4">About</a>
							</li>
							<li class="dropdown">
								<button class="faux-anchor dropdown__toggle dropdown__toggle--caret-after" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="false">Dropdown</button>
								<ul class="dropdown__menu" role="menu" aria-labelledby="dropdownMenu1">
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
								</ul>
							</li>
							<li class="dropdown dropdown--user">
								<button class="faux-anchor dropdown__toggle dropdown__toggle--caret-after" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="false">
									<img src="https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/48.jpg" class="avatar">
								</button>
								<ul class="dropdown__menu" role="menu" aria-labelledby="dropdownMenu2">
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
								</ul>
							</li>
						</ul>
					</nav>

					<h5>Tabs</h5>
					<nav class="nav-tabs">
						<ul>
							<li>
								<a href="#tab-item-1" data-toggle="tab">Home</a>
							</li>
							<li class="active">
								<a href="#tab-item-2" data-toggle="tab">Products</a>
							</li>
							<li>
								<a href="#tab-item-3" data-toggle="tab">Contact</a>
							</li>
							<li>
								<a href="#tab-item-4" data-toggle="tab">About</a>
							</li>
						</ul>
					</nav>
					<div class="tab-pane fade" id="tab-item-1">
						<p>Home content</p>
					</div>
					<div class="tab-pane fade active in" id="tab-item-2">
						<p>Products content</p>
					</div>
					<div class="tab-pane fade" id="tab-item-3">
						<p>Contact content</p>
					</div>
					<div class="tab-pane fade" id="tab-item-4">
						<p>About content</p>
					</div>

					<h5>Dropdowns</h5>
					<div class="dropdown">
						<button class="faux-anchor dropdown__toggle dropdown__toggle--caret-after" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-expanded="false">Dropdown</button>
						<ul class="dropdown__menu" role="menu" aria-labelledby="dropdownMenu3">
							<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
						</ul>
					</div>

					<div class="dropdown">
						<button class="btn dropdown__toggle dropdown__toggle--caret-before" type="button" id="dropdownMenu4" data-toggle="dropdown" aria-expanded="false">Dropdown</button>
						<ul class="dropdown__menu" role="menu" aria-labelledby="dropdownMenu4">
							<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
						</ul>
					</div>
				</section>
			</article>
			<article id="nav" class="example row">
				<header class="col3">
					<h1>Tables</h1>
					<p>Displaying tabular data nicely</p>
				</header>
				<section class="col9">
					<h5>Basic table</h5>
					<div class="scroll-horizontal-sm">
						<table class="table">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">First Name</th>
									<th scope="col">Second Name</th>
									<th scope="col">Username</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th>1</th>
									<td>Sam</td>
									<td>Potts</td>
									<td>@Sam_Potts</td>
								</tr>
								<tr>
									<th>2</th>
									<td>Mathieu</td>
									<td>Kempe</td>
									<td>@MathieuKempe</td>
								</tr>	
								<tr>
									<th>3</th>
									<td>Steve</td>
									<td>Marsh</td>
									<td>@SteMarsh</td>
								</tr>
							</tbody>
						</table>
					</div>

					<h5>Striped table</h5>
					<div class="scroll-horizontal-sm">
						<table class="table table--striped">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">First Name</th>
									<th scope="col">Second Name</th>
									<th scope="col">Username</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th>1</th>
									<td>Sam</td>
									<td>Potts</td>
									<td>@Sam_Potts</td>
								</tr>
								<tr>
									<th>2</th>
									<td>Mathieu</td>
									<td>Kempe</td>
									<td>@MathieuKempe</td>
								</tr>	
								<tr>
									<th>3</th>
									<td>Steve</td>
									<td>Marsh</td>
									<td>@SteMarsh</td>
								</tr>
							</tbody>
						</table>
					</div>

					<h5>Condensed table</h5>
					<div class="scroll-horizontal-sm">
						<table class="table table--condensed">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">First Name</th>
									<th scope="col">Second Name</th>
									<th scope="col">Username</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th>1</th>
									<td>Sam</td>
									<td>Potts</td>
									<td>@Sam_Potts</td>
								</tr>
								<tr>
									<th>2</th>
									<td>Mathieu</td>
									<td>Kempe</td>
									<td>@MathieuKempe</td>
								</tr>	
								<tr>
									<th>3</th>
									<td>Steve</td>
									<td>Marsh</td>
									<td>@SteMarsh</td>
								</tr>
							</tbody>
						</table>
					</div>

					<h5>Linked rows table</h5>
					<div class="scroll-horizontal-sm">
						<table class="table table--striped">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">First Name</th>
									<th scope="col">Second Name</th>
									<th scope="col">Username</th>
								</tr>
							</thead>
							<tbody>
								<tr data-row-href="#table-row-0" id="table-row-0">
									<th>1</th>
									<td>Sam</td>
									<td>Potts</td>
									<td>@Sam_Potts</td>
								</tr>
								<tr data-row-href="#table-row-1" id="table-row-1">
									<th>2</th>
									<td>Mathieu</td>
									<td>Kempe</td>
									<td>@MathieuKempe</td>
								</tr>	
								<tr data-row-href="#table-row-2" id="table-row-2">
									<th>3</th>
									<td>Steve</td>
									<td>Marsh</td>
									<td>@SteMarsh</td>
								</tr>
							</tbody>
						</table>
					</div>
				</section>
			</article>
			<article id="tooltips" class="example row">
				<header class="col3">
					<h1>Tooltips</h1>
					<p>Little helpers</p>
				</header>
				<section class="col9">
					<p>Here's an example <span class="tooltip">tooltip <span class="tooltip__tip tooltip__tip--above">Above</span></span> to show how it looks.</p>
					<p>Here's an example <span class="tooltip">tooltip <span class="tooltip__tip tooltip__tip--left">Left</span></span> to show how it looks.</p>
					<p>Here's an example <span class="tooltip">tooltip <span class="tooltip__tip tooltip__tip--right">Right</span></span> to show how it looks.</p>
					<p>Here's an example <span class="tooltip">tooltip <span class="tooltip__tip">Below (default)</span></span> to show how it looks.</p>
					<p>You can also set them to display <button type="button" class="faux-anchor tooltip tooltip--hover">on hover or focus <span class="tooltip__tip">Awesome</span></button> as well.</p>
				</section>
			</article>
		</main>
		<footer class="container">
			<p>&copy; Sam Potts</p>
		</footer>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="../dist/js/fabric.js"></script>
	</body>
</html>