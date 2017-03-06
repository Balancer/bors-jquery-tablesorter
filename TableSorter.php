<?php

namespace B2\jQuery;

class TableSorter extends \B2\jQuery\Plugin
{
/*
	<!-- choose a theme file -->
	<link rel="stylesheet" href="/path/to/theme.default.css">

<!--
	https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.28.5/css/theme.blackice.min.css
	https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.28.5/css/theme.blue.min.css
	https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.28.5/css/theme.bootstrap_2.min.css
	https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.28.5/css/theme.bootstrap_3.min.css
	https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.28.5/css/theme.bootstrap_4.min.css
	https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.28.5/css/theme.bootstrap.min.css
	https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.28.5/css/theme.dark.min.css
	https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.28.5/css/theme.default.min.css
	https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.28.5/css/theme.dropbox.min.css
	https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.28.5/css/theme.green.min.css
	https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.28.5/css/theme.grey.min.css
	https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.28.5/css/theme.ice.min.css
	https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.28.5/css/theme.jui.min.css
	https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.28.5/css/theme.materialize.min.css
	https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.28.5/css/theme.metro-dark.min.css
-->

	<script type="text/javascript" src="/path/to/jquery.tablesorter.js"></script>

	<!-- tablesorter widgets (optional) -->
	<script type="text/javascript" src="/path/to/jquery.tablesorter.widgets.js"></script>

	https://mottie.github.io/tablesorter/docs/example-option-theme-bootstrap-v3.html
*/
	static function apply($element=NULL)
	{
		if(!$element)
			$element = "'.tablesorter'";

		\B2\jQuery::load();
//		bors_use('https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.28.5/css/theme.blue.min.css');
//		bors_use('https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.28.5/css/theme.default.min.css');
		bors_use('https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.28.5/css/theme.bootstrap_3.min.css');
		\B2\jQuery::plugin('https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.28.5/js/jquery.tablesorter.js');
		\B2\jQuery::plugin('https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.28.5/js/jquery.tablesorter.widgets.js');
		\B2\jQuery::on_ready("
	\$.tablesorter.themes.bootstrap = {
		table		: 'table table-bordered table-striped',
		caption	  : 'caption',
		header	   : 'bootstrap-header',
		sortNone	 : '',
		sortAsc	  : '',
		sortDesc	 : '',
		active	   : '',
		hover		: '',
		icons		: '',
		iconSortNone : 'bootstrap-icon-unsorted',
		iconSortAsc  : 'glyphicon glyphicon-chevron-up',
		iconSortDesc : 'glyphicon glyphicon-chevron-down',
		filterRow	: '',
		footerRow	: '',
		footerCells  : '',
		even		 : '',
		odd		  : '' 
	};

	\$({$element}).tablesorter({
		theme : 'bootstrap',
		headerTemplate : '{content} {icon}',
		widgets : [ 'uitheme'],
	});
");
	}
}
