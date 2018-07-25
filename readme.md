# Kirby Scheduled

**Requirement:** Kirby 3

## Tiny docs

### Blueprint

Use a `date` or a `datetime` field. It's required to use `scheduled` as key.

```yaml
scheduled:
  label: Publish in the future
  type: date
  time: false
  default: now
```

That's it! When you visit a scheduled page, you will see the error page with a 404 respose.

### Page methods

In a collection loop you can se if the page is scheduled or not.

```php
foreach($collection as $item) {
  if($item->scheduled())
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