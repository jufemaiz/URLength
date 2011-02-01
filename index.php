<?php
	echo '<?xml version="1.0" encoding="UTF-8"?>';
	$limit = 2083;
	
	if($_GET['limit'] != null) {
		$limit = 1 * $_GET['limit'];
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<title>URLength Test</title>

		<link rel="stylesheet" type="text/css" media="screen" charset="utf-8" href="./css/blueprint/screen.css" />
		<link rel="stylesheet" type="text/css" media="screen" charset="utf-8" href="./css/styles.css" />
		<style type="text/css" media="screen">
			div#branding							{ margin-top: 20px; }
			div#content								{}
			div#footer								{}

			div#urlength							{ position: relative; border: 2px solid #ccc; padding: 5px 10px; margin-bottom: 20px; -moz-border-radius: 10px; -webkit-border-radius: 10px; border-radius: 10px; font-size: 20px; }
			div#urlength span.number				{ opacity: 0.5; }
			div#urlength.finished span.number		{ opacity: 1; }
			div#urlength span.loading-bar			{ position: absolute; z-index: -1; top: 2px; left: 2px; display: block; background: #ccccff; height: 36px; -moz-border-radius: 8px; -webkit-border-radius: 8px; border-radius: 8px; }
			
		</style>

		<script type="text/javascript" charset="utf-8">
			var MAXIMUM_URL_LENGTH = <?php echo $limit; ?>;
		</script>

		<script type="text/javascript" charset="utf-8" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="js/site.js"></script>
	</head>
	<body>
		<div id="branding">
			<div class="container">
				<h1>URLength Test</h1>
			</div>
		</div>
		<div id="content">
			<div class="container">
				<div class="column span-16">
					<h2>Length</h2>
					<div id="urlength"><span class="number">loading...</span> out of <span class="maximum">loading...</span> characters tested<span class="loading-bar"></span></div>
					<h2>Findings</h2>
					<dl>
						<dt>Australia</dt>
						<dd>Telstra - iPhone 3GS - mobile safari - no limit</dd>
						<dd>3 (VodaHutch) - iPhone 3GS - mobile safari - no limit</dd>
						<dd>3 (VodaHutch) - Blackberry Bold - native browser - no limit</dd>
						<dd>? - ? - ? - 1937</dd>
						<dt>Canada</dt>
						<dd>Fido (Rogers) - iPhone 4G - mobile safari - no limit</dd>
						<dd>Rogers - ? - tethered - no limit</dd>
						<dd>Bell - "wireless router" - ? - 1999</dd>
						<dd>Telus - iPhone - tehtered - 1999 (?)</dd>
						<dt>USA</dt>
						<dd>AT&amp;T - Microcell 3G - ? - no limit</dd>
						<dd>AT&amp;T - iPhone 4G - mobile safari - no limit</dd>
					</dl>
					<h2>Flickr References</h2>
					<dl>
						<dt>Help Forum</dt>
						<dd><a href="http://www.flickr.com/help/forum/en-us/72157625915300616/">Can't view my own photos in lightbox or 'all sizes'.</a></dd>
						<dd><a href="http://www.flickr.com/help/forum/en-us/72157625908018926/">Can't Edit</a></dd>
						<dd><a href="http://www.flickr.com/help/forum/72157624524146019/?search=url+length">[Official Topic] New Photo Page BUGS</a></dd>
						<dd><a href="http://www.flickr.com/help/forum/72157625917241296/?search=url+length">action and share buttons broken again?</a></dd>
					</dl>
				</div>
				<div class="column span-8 last">
					<h2>Details</h2>
					<p>The <acronym title="HyperText Transfer Protocol">HTTP</acronym> specification, available at <a href="http://www.w3.org/Protocols/rfc2616/rfc2616.html">w3.org/Protocols/rfc2616/rfc2616.html</a>, does not specify a maximum URL Character Length, but rather states that the server is required to meet the requirements of the data served. As a result equipment used as proxies and firewalls, along with routers and switches, may not support an unlimited character length. With compression methods for Javascript libraries being used more commonly the use of very long URLs has increased.</p>
					<p>This mini-application is designed to test this.</p>
					<p>The catalyst has been the use of concatentation techniques to reduce the number of HTTP requests made when loading javascript intensive pages, which Flickr has been doing recently. Outside of the edge cases that this mini-app is designed to pickup, this leads to a far better use experience.
					<p class="note">Note: Internet Explorer is limited to a URL Character Length of 2083 characters.</p>
				</div>
			</div>
		</div>
		<div id="footer">
			<div class="container">
				<p class="copyright"><a href="http://euphemize.net/">&copy; 2011 Joel Courtney</a>.</p>
			</div>
		</div>
	</body>
</html>
