<?php

namespace B2\jQuery;

class TableSorter extends \B2\jQuery\Plugin
{
	function apply($element=NULL)
	{
		if(!$element)
			$element = "'.tablesorter'";

		\B2\jQuery::load();
		\B2\jQuery::on_ready("\$({$element}).tablesorter();");
	}
}
