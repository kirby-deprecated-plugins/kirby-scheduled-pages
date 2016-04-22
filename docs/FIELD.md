# Field

No installation of the field is required, only the blueprint setup.

![](https://github.com/jenstornell/kirby-scheduled-pages/blob/master/docs/scheduled.gif)

## Schedule datetime

Use the built in datetime field. Both fieldname and type are important. Fieldname can be changed in the options.

```md
fields:
  schedule:
    label: Schedule page
    type: datetime
```

## Scheduled indicator

If you want some indicator if a page is still scheduled or not you can add an indicator field. The type is important, the fieldname is not. See animated gif.

```md
fields:
  scheduled:
    type: datetime
  indicator:
    type: scheduled
```


## When scheduled value is missing

If the scheduled value is missing the page is not scheduled. That means that your old pages will still be unscheduled like they are normally.