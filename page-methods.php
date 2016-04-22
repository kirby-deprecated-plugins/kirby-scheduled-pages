<?php
// $page->isScheduled()
page::$methods['isScheduled'] = function($page) {
	if( (int)time() < (int)$page->getScheduled() ) {
		return true;
	}
	return false;
};

// $page->isUncheduled()
page::$methods['isUnscheduled'] = function($page) {
	if( ! $page->isScheduled() ) {
		return true;
	}
	return false;
};

// $page->getScheduled()
page::$methods['getScheduled'] = function($page, $type = null) {
	$field_key = c::get('plugin.scheduled.pages.field.key', 'schedule');
	if( $page->{$field_key}()->value() != '' ) {
		$timestamp = strtotime( $page->{$field_key}() );
		$result = $timestamp;
		if( $type == 'time' ) {
			$result = date( 'H:i', $timestamp );
		} elseif( $type == 'date' ) {
			$result = date( 'Y-m-d', $timestamp );
		}
		return $result;
	}
	return false;
};