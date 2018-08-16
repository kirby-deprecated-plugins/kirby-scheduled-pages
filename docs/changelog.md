# Changelog

### 0.7 beta

- Added improved UI to to page status in the bar.
- Changed the field icon to now longer be red/green. Instead I removed the check and only kept the clock. That way, the status in the bar handles the color and the field looks like all other fields.
- Better check for route environment.
- Fixed some bugs in the methods.

### 0.6 beta

- Prepared for plugin name change from `Kirby Scheduled Pages` to `Kirby Schedule`.

### 0.5 beta

- Added Composer support. Hope it works.
- Added better dependency to the date field.
- Added option `jenstornell.scheduled-pages.active`. When it's set to `false`, the hook is not triggered so you can set your own.

### 0.4 beta

- Removed red border as it looked like something was wrong with the input.
- Added icon switch to indicate if the page is scheduled or not.
- Added icon color to make it even more visible if the page is scheduled or not.
- Fixed so that label now work.

### 0.3 beta

- Changed `$page->scheduled()` to `$page->isScheduled()`, suggested by [@distantnative](https://github.com/distantnative).
- Changed the blueprint required key from `scheduled` to `schedule_until`, because of a possible future feature (unschedule_from).
- Added the field `schedule_until` mainly built by [@wottpal](https://github.com/wottpal).
- Changed the docs to reflect the changes.

### 0.2 beta

- Added collection

### 0.1 beta

- Init release