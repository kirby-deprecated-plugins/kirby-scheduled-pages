# Kirby Scheduled

- **Version:** 0.4 beta
- **Requirement:** Kirby 3
- **Changelog:** [Changelog](docs/changelog.md)
- [Disclaimer](https://devonera.se/docs/disclaimer/?user=jenstornell&plugin=kirby-scheduled-pages)
- [Donate](https://devonera.se/docs/donate/?user=jenstornell&plugin=kirby-scheduled-pages)

## Tiny docs

### Blueprint

Use a `date` or a `schedule_until` field. It's required to use `schedule_until` as key.

```yaml
schedule_until:
  label: Schedule until
  type: schedule_until
  time: false
  default: now
```

That's it!

When you visit a scheduled page (a future scheduled date), you will see the error page with a 404 respose.

### Page methods

In a collection loop you can se if the page is scheduled or not.

```php
foreach($collection as $item) {
  if($item->isScheduled())
    echo 'Scheduled page';
}
```

### Pages methods

Filter a collection by scheduled pages.

```php
$collection = page('blog')->children()->scheduled();
foreach($collection as $item) {
  echo $item->title();
}
```

You can also filter the collection by non scheduled pages. Just send `false` as an argument.

```php
$collection = page('blog')->children()->scheduled(false);
```

### Collection

Get all pages on the site that is scheduled.

```php
$collection = $kirby->collection('scheduled');
print_r($collection);
```