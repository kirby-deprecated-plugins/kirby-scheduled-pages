# Page Methods

You don't need to use the page methods. They are pure helper functions.

## $page->isScheduled()

Return `true` if the page is `scheduled`, else `false`.

```php
if( $page->isScheduled() ) {
  echo 'This page is scheduled';
}
```

## $page->isUnscheduled()

Return `true` if the page is `unscheduled`, else `false`.

```php
if( $page->isUnscheduled() ) {
  echo 'This page is unscheduled';
}
```

## $page->getScheduled()

Return the scheduled as timestamp.

```php
echo 'Scheduled: ' . $page->getScheduled();
```

### $page->getScheduled('date')

Return the scheduled as date string.

```php
echo 'Scheduled: ' . $page->getScheduled('date');
```

### $page->getScheduled('time')

Return the scheduled as time string.

```php
echo 'Scheduled: ' . $page->getScheduled('time');
```