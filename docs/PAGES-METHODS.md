# Pages Methods

You don't need to use the pages methods. They are pure helper functions.

## $pages->scheduled()

Filter the result to only contain `scheduled` pages.

```php
foreach( $pages->scheduled() as $item ) {
  echo $item->title() . ' ' . $item->getScheduled('date') . '<br>';
}
```

## $pages->unscheduled()

Filter the result to only contain `unscheduled` pages.

```php
foreach( $pages->unscheduled() as $item ) {
  echo $item->title() . ' ' . $item->getScheduled('date') . '<br>';
}
```

## Loop only if logged in

```php
$collection = ( ! site()->user() ) ? $pages->unscheduled() : $pages();

foreach( $collection as $item ) {
  echo $item->title() . ' ' . $item->getScheduled('date') . '<br>';
}
```