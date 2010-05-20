<?php include 'inc/doctype.inc.php'; ?>

	<title>Typekit Loader | Demo 1</title>
	<style>
		#spinner{position:fixed;top:20px;left:20px;height:44px;width:200px;background: url(spinners/typekit-spinner-1.gif) no-repeat 0 0; }
		html.wf-active #spinner { background-position: -200px 0; }
		html .container, html.wf-loading .container { display: block; opacity: .15; }
		html.wf-active .container { display: block; opacity: 1; }
	</style>

	<?php include 'inc/ressources.inc.php'; ?>
	
	<script>
		WebFont.load({
			typekit: {
				id: 'yfi4tji'
			},
			active: function() {
				$('#spinner').fadeOut(1200);
		  }
		});
	</script>
</head>
<body>
	<div id="spinner"></div>

	<?php include 'inc/content.inc.php'; ?>