<?php
Kirby::plugin('jenstornell/scheduled', [
    'hooks' => [
        'route:after' => function ($route, $path, $method, $result) {
            if(!isset($result) || !property_exists($result, 'content')) return;

            $timestamp = strtotime($result->content()->scheduled());
            if($timestamp != 0 && $timestamp > time()) {
                header('HTTP/1.0 404 Not Found');
                echo page((string)site()->errorPage())->render();
                die;
            }
        }
    ],
    'pageMethods' => [
        'scheduled' => function() {
            $timestamp = strtotime($this->content()->scheduled());
            if($timestamp !=0 && $timestamp > time())
                return true;
            return false;
        }
    ],
    'pagesMethods' => [
        'scheduled' => function($match = true) {
            if($match)
                return $this->filterBy('scheduled', true);
            return $this->filterBy('scheduled', '!=', true);
        }
    ],
]);