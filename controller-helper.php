<?php
class scheduled {
	// Redirect if scheduled
	public static function redirect( $page ) {
		if( $page->isScheduled() ) {
			self::go( $page );
		}
	}
	// Run redirect if not on error page
	public static function go( $page ) {
		$errorPage = site()->errorPage();
		if( $page->id() != $errorPage->id() ) {
			go( $errorPage );
		}
	}
}