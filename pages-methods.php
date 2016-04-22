<?php
// $pages->scheduled()
pages::$methods['scheduled'] = function($pages) {
	return $pages->filterBy('isScheduled', true);
};

// $pages->unscheduled()
pages::$methods['unscheduled'] = function($pages) {
	return $pages->filterBy('isUnscheduled', true);
};