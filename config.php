<?php
Kirby::plugin('jenstornell/schedule', [
  'options' => [
    'active' => true
  ],
  'hooks' => [
    'route:after' => function ($route, $path, $method, $result) {
      if($route->env() != 'site') return;
      if(!option('jenstornell.schedule.active')) return;

      $timestamp = strtotime($result->content()->schedule_until());

      if($timestamp && $timestamp > time()) {
        header('HTTP/1.0 404 Not Found');
        echo page((string)site()->errorPage())->render();
        die;
      }
    }
  ],
  'pageMethods' => [
    'isScheduled' => function() {
      $timestamp = strtotime($this->content()->schedule_until());
      
      if($timestamp && $timestamp > time())
        return true;

      return false;
    }
  ],
  'pagesMethods' => [
    'scheduled' => function($match = true) {
      if($match)
        return $this->filterBy('isScheduled', true);

      return $this->filterBy('isScheduled', '!=', true);
    },
    'listed' => function () {
      $collection = $this->filterBy('isListed', '==', true);
      $collection = $collection->filterBy('isScheduled', '!=', true);
      return $collection;
    },
  ],
  'collections' => [
    'scheduled' => function($site) {
      return $site->index()->scheduled();
    }
  ],
  'fields' => [
    'schedule' => include kirby()->root('kirby') . '/config/fields/date.php'
  ]
]);