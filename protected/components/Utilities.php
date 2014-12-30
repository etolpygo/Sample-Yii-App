<?php

class Utilities {
	public static function pluralize($count, $singular, $plural) {
		switch ($count) {
			case 0:
				return "";
			case 1:
				return "$count $singular";
			default:
				return "$count $plural";
		}
	}
	
}