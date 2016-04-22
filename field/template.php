<style>
<?php if( $page->isScheduled() )  : ?>
.field-name-schedule .field-icon {
	background: #b3000a;
}
<?php endif; ?>
<?php if( $page->isUnscheduled() )  : ?>
.field-name-schedule .field-icon {
	background: #8dae28;
}
<?php endif; ?>
.field-name-schedule .field-icon {
    color: #fff;
    border: none !important;
}

.field-name-schedule .field-icon .icon {
	color: #fff;
}
</style>