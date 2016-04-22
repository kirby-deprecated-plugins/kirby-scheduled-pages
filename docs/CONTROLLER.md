# Controller

You don't need to use the controller helper function. It's just a help function.

**On top of your `header.php` add this:**

```php
<?php echo scheduled::redirect(); ?>
```

It will redirect to the error page, if the current page is `scheduled`.

## Alternatives

The above solution may not seem so nice to everyone. If you want, you can put the helper function inside a controller.