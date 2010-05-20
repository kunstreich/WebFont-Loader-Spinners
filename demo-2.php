<?php include 'inc/doctype.inc.php'; ?>

	<title>Typekit Loader | Demo 2</title>
	<style>
	#spinner{ z-index:100;position:fixed;bottom:0;right:0;height:25px;width:80px;background: url(spinners/typekit-spinner-2.gif) no-repeat 0 0; }
	html.wf-active #spinner { background-position: -80px 0; }
	html .container, html.wf-loading .container { display: block; opacity: .15; }
	html.wf-active .container { display: block; opacity: 1; }
	html.wf-active img.typekit-badge {display:none; }
	</style>

	<?php include 'inc/ressources.inc.php'; ?>

	<script>
		WebFont.load({
			typekit: {
				id: 'yfi4tji'
			},
			active: function() {
				$('#spinner').fadeOut(1000);
				$('img.typekit-badge').fadeIn(2500);
		  }
		});
	</script>
</head>
<body>
	<div id="spinner"></div>
	
	<?php include 'inc/typekit-badge.inc.php'; ?>
	<?php include 'inc/content.inc.php'; ?>