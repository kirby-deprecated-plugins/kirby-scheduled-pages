# Changelog

### 0.5 beta

- Added Composer support. Hope it works.
- Added better dependency to the date field.

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