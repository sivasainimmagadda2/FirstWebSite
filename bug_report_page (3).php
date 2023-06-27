<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="robots" content="noindex,follow" />
	<title>Report Issue - MantisBT</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<link rel="stylesheet" type="text/css" href="https://workapps.cloudangles.com/mantisbt/css/default.css" />
	<link rel="stylesheet" type="text/css" href="https://workapps.cloudangles.com/mantisbt/css/status_config.php?cache_key=a4174138e020063878565a331c87d957" />
	<link rel="stylesheet" type="text/css" href="https://workapps.cloudangles.com/mantisbt/css/dropzone-5.5.0.min.css" />
	<link rel="stylesheet" type="text/css" href="https://workapps.cloudangles.com/mantisbt/css/bootstrap-3.4.1.min.css" />
	<link rel="stylesheet" type="text/css" href="https://workapps.cloudangles.com/mantisbt/css/font-awesome-4.7.0.min.css" />
	<link rel="stylesheet" type="text/css" href="https://workapps.cloudangles.com/mantisbt/css/fonts.css" />
	<link rel="stylesheet" type="text/css" href="https://workapps.cloudangles.com/mantisbt/css/bootstrap-datetimepicker-4.17.47.min.css" />
	<link rel="stylesheet" type="text/css" href="https://workapps.cloudangles.com/mantisbt/css/ace.min.css" />
	<link rel="stylesheet" type="text/css" href="https://workapps.cloudangles.com/mantisbt/css/ace-mantis.css" />
	<link rel="stylesheet" type="text/css" href="https://workapps.cloudangles.com/mantisbt/css/ace-skins.min.css" />

	<link rel="shortcut icon" href="/mantisbt/images/favicon.ico" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: full-text search" href="https://workapps.cloudangles.com/mantisbt/browser_search_plugin.php?type=text"/>
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: search by Issue Id" href="https://workapps.cloudangles.com/mantisbt/browser_search_plugin.php?type=id"/>
	<script type="text/javascript" src="/mantisbt/javascript_config.php?cache_key=a4174138e020063878565a331c87d957"></script>
	<script type="text/javascript" src="/mantisbt/javascript_translations.php?cache_key=a6671261ff2a081e4b8c9e61524af5c6"></script>
	<script type="text/javascript" src="/mantisbt/js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="/mantisbt/js/dropzone-5.5.0.min.js"></script>
	<script type="text/javascript" src="/mantisbt/js/common.js"></script>
</head>
<body class="skin-3">
<style>
* { font-family: "Open Sans"; } 
h1, h2, h3, h4, h5 { font-family: "Open Sans"; } 
</style>
<div id="navbar" class="navbar navbar-default navbar-collapse navbar-fixed-top noprint"><div id="navbar-container" class="navbar-container"><button id="menu-toggler" type="button" class="navbar-toggle menu-toggler pull-left hidden-lg hidden-md" data-target="#sidebar"><span class="sr-only">Toggle sidebar</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><div class="navbar-header"><a href="/mantisbt/my_view_page.php" class="navbar-brand"><span class="smaller-75"> MantisBT </span></a><button type="button" class="navbar-toggle navbar-toggle collapsed pull-right hidden-sm hidden-md hidden-lg" data-toggle="collapse" data-target=".navbar-buttons,.navbar-menu"><span class="sr-only">Toggle user menu</span><i class="fa fa-user ace-icon fa-2x white" ></i> </button></div><div class="navbar-buttons navbar-header navbar-collapse collapse"><ul class="nav ace-nav">
<li class="grey" id="dropdown_projects_menu">
<a data-toggle="dropdown" href="#" class="dropdown-toggle">
&#160;SmartOfficeNxt&#160;
<i class="fa fa-angle-down ace-icon bigger-110" ></i>
</a>
<ul id="projects-list" class=" dropdown-menu dropdown-menu-right dropdown-yellow dropdown-caret dropdown-close">
<li><div class="projects-searchbox"><input class="search form-control input-md" placeholder="Search" /></div></li>
<li class="divider"></li>
<li><div class="scrollable-menu">
<ul class="list dropdown-yellow no-margin">
<li><a class="project-link" href="/mantisbt/set_project.php?project_id=0">All Projects</a></li>
<li class="divider"></li>
<li class="active"><a class="project-link" href="/mantisbt/set_project.php?project_id=3">SmartOfficeNxt</a></li>
<li><a class="project-link" href="/mantisbt/set_project.php?project_id=1">Sundaram Finance SmartApproval Support</a></li>
</ul>
</div>
</li>
</ul>
</li>
<li class="grey"><a data-toggle="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-user ace-icon fa-2x white" ></i> <span class="user-info">sivasai.nimmagadda@cloudangles.com</span><i class="fa fa-angle-down ace-icon" ></i></a><ul class="user-menu dropdown-menu dropdown-menu-right dropdown-yellow dropdown-caret dropdown-close"><li><a href="/mantisbt/account_page.php"><i class="fa fa-user ace-icon" ></i> My Account</a></li><li><a href="https://workapps.cloudangles.com/mantisbt/issues_rss.php?username=sivasai.nimmagadda@cloudangles.com&amp;key=QBqnOZ6LXkOL_RZrd0coLKC8SWJ6Z0W7a5NCVJhZ7_iPX-if1yXKv-tlI4ybVFlbzPHI7n-HCPnSXFIUCoa7&amp;project_id=3"><i class="fa fa-rss-square orange ace-icon" ></i> RSS</a></li><li class="divider"></li><li><a href="/mantisbt/logout_page.php"><i class="fa fa-sign-out ace-icon" ></i> Logout</a></li></ul></li></ul></div></div></div><div class="main-container" id="main-container">
<div id="sidebar" class="sidebar sidebar-fixed responsive compact "><ul class="nav nav-list"><li>
<a href="/mantisbt/my_view_page.php">
<i class="fa fa-dashboard menu-icon" ></i>
<span class="menu-text"> My View </span>
</a>
<b class="arrow"></b>
</li>
<li>
<a href="/mantisbt/view_all_bug_page.php">
<i class="fa fa-list-alt menu-icon" ></i>
<span class="menu-text"> View Issues </span>
</a>
<b class="arrow"></b>
</li>
<li class="active">
<a href="/mantisbt/bug_report_page.php">
<i class="fa fa-edit menu-icon" ></i>
<span class="menu-text"> Report Issue </span>
</a>
<b class="arrow"></b>
</li>
<li>
<a href="/mantisbt/changelog_page.php">
<i class="fa fa-retweet menu-icon" ></i>
<span class="menu-text"> Change Log </span>
</a>
<b class="arrow"></b>
</li>
<li>
<a href="/mantisbt/roadmap_page.php">
<i class="fa fa-road menu-icon" ></i>
<span class="menu-text"> Roadmap </span>
</a>
<b class="arrow"></b>
</li>
</ul><div id="sidebar-btn" class="sidebar-toggle sidebar-collapse"><i data-icon2="ace-icon fa fa-angle-double-right" data-icon1="ace-icon fa fa-angle-double-left"
		class="ace-icon fa fa-angle-double-left"></i></div></div><div class="main-content">
<div id="breadcrumbs" class="breadcrumbs noprint">
<ul class="breadcrumb">
  <li><i class="fa fa-user home-icon active" ></i>  <a href="/mantisbt/account_page.php">sivasai.nimmagadda@cloudangles.com ( Siva sai Nimmagadda ) </a>
  <span class="label hidden-xs label-default arrowed">reporter</span></li>
</ul>
<div class="nav-recent hidden-xs">Recently Visited: <a href="/mantisbt/view.php?id=352" title="[new] Resubmit button.">0000352</a>, <a href="/mantisbt/view.php?id=351" title="[new] Return back functionality">0000351</a>, <a href="/mantisbt/view.php?id=350" title="[new] changed any values.">0000350</a>, <a href="/mantisbt/view.php?id=349" title="[new] Resubmit button.">0000349</a>, <a href="/mantisbt/view.php?id=348" title="[new] call-back">0000348</a></div><div id="nav-search" class="nav-search"><form class="form-search" method="post" action="/mantisbt/jump_to_bug.php"><span class="input-icon"><input type="text" name="bug_id" autocomplete="off" class="nav-search-input" placeholder="Issue #"><i class="fa fa-search ace-icon nav-search-icon" ></i></span></form></div>
</div>
  <div class="page-content">
<div class="row">
<div class="col-md-12 col-xs-12">
<form id="report_bug_form"
	method="post" enctype="multipart/form-data"	action="bug_report.php">
<input type="hidden" name="bug_report_token" value="20230623Ghy4t5inheB448wjFDrFCZYZcTxc8eDX"/><input type="hidden" name="m_id" value="0" />
<input type="hidden" name="project_id" value="3" />
<div class="widget-box widget-color-blue2">
	<div class="widget-header widget-header-small">
		<h4 class="widget-title lighter">
				<i class="fa fa-edit ace-icon" ></i>				Enter Issue Details		</h4>
	</div>
<div class="widget-body dz-clickable">
<div class="widget-main no-padding">
<div class="table-responsive">
<table class="table table-bordered table-condensed">
	<tr>
		<th class="category" width="30%">
			<span class="required">*</span> <label for="category_id">Category</label>		</th>
		<td width="70%">
						<select id="category_id" name="category_id" class="autofocus input-sm" tabindex="1" required>
				<option value="0" disabled hidden selected="selected">(select)</option>
<option value="3">[All Projects] Application Support &amp; Maintenence</option>
<option value="2">[All Projects] CloudAngles IP</option>
<option value="1">[All Projects] General</option>
			</select>
		</td>
	</tr>

	<tr>
		<th class="category">
			<label for="reproducibility">Reproducibility</label>
		</th>
		<td>
			<select tabindex="2" id="reproducibility" name="reproducibility" class="input-sm">
				<option value="10">always</option><option value="30">sometimes</option><option value="50">random</option><option value="70" selected="selected">have not tried</option><option value="90">unable to reproduce</option><option value="100">N/A</option>			</select>
		</td>
	</tr>
	<tr>
		<th class="category">
			<label for="severity">Severity</label>
		</th>
		<td>
			<select tabindex="3" id="severity" name="severity" class="input-sm">
				<option value="10">feature</option><option value="20">trivial</option><option value="30">text</option><option value="40">tweak</option><option value="50" selected="selected">minor</option><option value="60">major</option><option value="70">crash</option><option value="80">block</option>			</select>
		</td>
	</tr>
	<tr>
		<th class="category">
			<label for="priority">Priority</label>
		</th>
		<td>
			<select tabindex="4" id="priority" name="priority" class="input-sm">
				<option value="10">none</option><option value="20">low</option><option value="30" selected="selected">normal</option><option value="40">high</option><option value="50">urgent</option><option value="60">immediate</option>			</select>
		</td>
	</tr>
	<tr>
		<th class="category">
			<label for="profile_id">Select Profile</label>
		</th>
		<td>
						
<div id="profile_open" class=" collapse-closed noprint">			Or Fill In&nbsp;&nbsp;<a id="profile_open_link" class="collapse-link noprint"><i class="fa fa-chevron-up bigger-120" title="-"></i></a>			<table class="table-bordered table-condensed">
				<tr>
					<th class="category" width="30%">
						<label for="platform">Platform</label>
					</th>
					<td>
						<input type="text" id="platform" name="platform" class="typeahead input-sm" autocomplete = "off" size="32" maxlength="32" tabindex="5" value="" />					</td>
				</tr>
				<tr>
					<th class="category">
						<label for="os">OS</label>
					</th>
					<td>
						<input type="text" id="os" name="os" class="typeahead input-sm" autocomplete = "off" size="32" maxlength="32" tabindex="6" value="" />					</td>
				</tr>
				<tr>
					<th class="category">
						<label for="os_build">OS Version</label>
					</th>
					<td>
						<input type="text" id="os_build" name="os_build" class="typeahead input-sm" autocomplete = "off" size="16" maxlength="16" tabindex="7" value="" />					</td>
				</tr>
			</table>
			</div>
<div id="profile_closed" class="collapse-section-closed  collapse-open">			Or Fill In&nbsp;&nbsp;<a id="profile_closed_link" class="collapse-link noprint"><i class="fa fa-chevron-down bigger-120" title="+"></i></a>			</div>		</td>
	</tr>





	<tr>
		<th class="category">
			<span class="required">*</span><label for="summary">Summary</label>
		</th>
		<td>
			<input tabindex="8" type="text" id="summary" name="summary" size="105" maxlength="128" value="" required />
		</td>
	</tr>
	<tr>
		<th class="category">
			<span class="required">*</span><label for="description">Description</label>
		</th>
		<td>
						<textarea class="form-control" tabindex="9" id="description" name="description" cols="80" rows="10" required>
</textarea>
		</td>
	</tr>

		<tr>
			<th class="category">
				<label for="steps_to_reproduce">Steps To Reproduce</label>
			</th>
			<td>
								<textarea class="form-control" tabindex="10" id="steps_to_reproduce" name="steps_to_reproduce" cols="80" rows="10">
</textarea>
			</td>
		</tr>

	<tr>
		<th class="category">
			<label for="additional_info">Additional Information</label>
		</th>
		<td>
						<textarea class="form-control" tabindex="11" id="additional_info" name="additional_info" cols="80" rows="10">
</textarea>
		</td>
	</tr>
	<tr>
		<th class="category">
			<label for="attach_tag">Attach Tags</label>
		</th>
		<td>
				<label class="inline small">
		(Separate by ",")	</label>
	<input type="hidden" id="tag_separator" value="," />
	<input type="text" name="tag_string" id="tag_string"
		   class="input-sm" size="40" tabindex="12"		   value="" />
	<select class="input-sm" tabindex="13" name="tag_select" id="tag_select">
		<option value="0">Existing tags</option>	</select>
		</td>
	</tr>
	<tr>
		<th class="category">
			<label for="ufile[]">Upload Files</label>
			<br />
			<span class="small" title="Maximum size: 50,000,000 bytes">Maximum size: 48,828 KiB</span>		</th>
		<td>
				<div id="dropzone-preview-template" class="hidden">
		<div class="dz-preview dz-file-preview">
			<div class="dz-filename"><span data-dz-name></span></div>
			<div><img data-dz-thumbnail /></div>
			<div class="dz-size" data-dz-size></div>
			<div class="progress progress-small progress-striped active">
				<div class="progress-bar progress-bar-success" data-dz-uploadprogress></div>
			</div>
			<div class="dz-success-mark"><span></span></div>
			<div class="dz-error-mark"><span></span></div>
			<div class="dz-error-message"><span data-dz-errormessage></span></div>
		</div>
	</div>
				<input type="hidden" name="max_file_size" value="50000000" />
			<div class="dropzone center" data-force-fallback="false"
	data-max-filesize-bytes="50000000"
	data-max-filename-length="250"
	data-accepted-files=""
	data-default-message="Attach files by dragging &amp; dropping, selecting or pasting them."
	data-fallback-message="Your browser does not support drag&#039;n&#039;drop file uploads."
	data-fallback-text=""
	data-file-too-big="File is too big ({{filesize}} MiB). Maximum size: {{maxFilesize}} MiB."
	data-invalid-file-type="You cannot upload files of this type."
	data-response-error="Server responded with {{statusCode}} code."
	data-cancel-upload="Cancel upload"
	data-cancel-upload-confirmation="Are you sure you want to cancel this upload?"
	data-remove-file="Remove file"
	data-remove-file-confirmation=""
	data-max-files-exceeded="You cannot upload any more files."
	data-dropzone-not-supported="Dropzone.js does not support older browsers!"	data-dropzone_multiple_files_too_big="The following files exceed the maximum allowed file size ({{maxFilesize}} MiB):{{files}}"	data-dropzone_multiple_filenames_too_long="The following filenames are too long (max {{maxFilenameLength}} characters):{{files}}">
				<i class="fa fa-cloud-upload upload-icon ace-icon blue fa-3x" ></i>				<br>
				<span class="bigger-150 grey">Attach files by dragging & dropping, selecting or pasting them.</span>
				<div id="dropzone-previews-box" class="dropzone-previews dz-max-files-reached"></div>
			</div>
			<div class="fallback">
				<div class="dz-message" data-dz-message></div>
				<input tabindex="14" id="ufile[]" name="ufile[]" type="file" size="60" />
			</div>
		</td>
	</tr>

	<tr>
		<th class="category">
			View Status		</th>
		<td>
			<label>
				<input tabindex="15" type="radio" class="ace" name="view_state" value="10"  checked="checked" />
				<span class="lbl padding-6">public</span>
			</label>
			&#160;&#160;&#160;&#160;
			<label>
				<input tabindex="16" type="radio" class="ace" name="view_state" value="50"  />
				<span class="lbl padding-6">private</span>
			</label>
		</td>
	</tr>
	<tr>
		<th class="category">
			Report Stay		</th>
		<td>
			<label>
				<input tabindex="17" type="checkbox" class="ace" id="report_stay" name="report_stay"  />
				<span class="lbl padding-6">check to report more issues</span>
			</label>
		</td>
	</tr>
</table>
</div>
</div>
<div class="widget-toolbox padding-8 clearfix">
	<span class="required pull-right"> * required</span>
	<input tabindex="18" type="submit" class="btn btn-primary btn-white btn-round" value="Submit Issue" />
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="clearfix"></div>
<div class="space-20"></div>
<div class="footer noprint">
<div class="footer-inner">
<div class="footer-content">
<div class="col-md-6 col-xs-12 no-padding">
<address>
<strong>Powered by <a href="https://www.mantisbt.org" title="bug tracking software">MantisBT </a></strong> <br>
<small>Copyright &copy; 2000 - 2023 MantisBT Team</small><br><small>Contact <a href="mailto:puffullenij@gmail.com" title="Contact the webmaster via e-mail.">administrator</a> for assistance</small><br>
</address>
</div>
<div class="col-md-6 col-xs-12">
<div class="pull-right" id="powered-by-mantisbt-logo">
<a href="https://www.mantisbt.org" title="Mantis Bug Tracker: a free and open source web based bug tracking system."><img src="/mantisbt/images/mantis_logo.png" width="102" height="35" alt="Powered by Mantis Bug Tracker: a free and open source web based bug tracking system." /></a>
</div>
</div>
</div>
</div>
</div>
<a class="btn-scroll-up btn btn-sm btn-inverse display" id="btn-scroll-up" href="#">
<i class="fa fa-angle-double-up ace-icon icon-only bigger-110" ></i>
</a>
</div>
	<script type="text/javascript" src="/mantisbt/js/bootstrap-3.4.1.min.js"></script>
	<script type="text/javascript" src="/mantisbt/js/moment-with-locales-2.29.4.min.js"></script>
	<script type="text/javascript" src="/mantisbt/js/bootstrap-datetimepicker-4.17.47.min.js"></script>
	<script type="text/javascript" src="/mantisbt/js/typeahead.jquery-1.3.0.min.js"></script>
	<script type="text/javascript" src="/mantisbt/js/list-1.5.0.min.js"></script>
	<script type="text/javascript" src="/mantisbt/js/ace.min.js"></script>
</body>
</html>
