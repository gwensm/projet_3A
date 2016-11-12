<?php
class Load
{
	function view($module,$view,$data = null)
	{
		if(!is_null($data) && is_array($data)){
			foreach ($data as $key => $value) {
				$$key = $value;
			}
		}
		include 'app/view/' . $module . '/' . $view;
	}
}