<?php return array (
  'fideloper/proxy' => 
  array (
    'providers' => 
    array (
      0 => 'Fideloper\\Proxy\\TrustedProxyServiceProvider',
    ),
  ),
  'laravel/tinker' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Tinker\\TinkerServiceProvider',
    ),
  ),
  'laravelcollective/html' => 
  array (
    'providers' => 
    array (
      0 => 'Collective\\Html\\HtmlServiceProvider',
    ),
    'aliases' => 
    array (
      'Form' => 'Collective\\Html\\FormFacade',
      'Html' => 'Collective\\Html\\HtmlFacade',
    ),
  ),
  'spatie/laravel-google-calendar' => 
  array (
    'providers' => 
    array (
      0 => 'Spatie\\GoogleCalendar\\GoogleCalendarServiceProvider',
    ),
    'aliases' => 
    array (
      'GoogleCalendar' => 'Spatie\\GoogleCalendar\\GoogleCalendarFacade',
    ),
  ),
  'maddhatter/laravel-fullcalendar' => 
  array (
    'providers' => 
    array (
      0 => 'MaddHatter\\LaravelFullcalendar\\ServiceProvider',
    ),
    'aliases' => 
    array (
      'Calendar' => 'MaddHatter\\LaravelFullcalendar\\Facades\\Calendar',
    ),
  ),
);