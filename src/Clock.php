<?php

class Clock
{
  public static function display(string $hours, string $minutes, string $seconds): string
  {
    $components = [
      'middle' => ' -- ',
      'left_and_right' => '|  |',
      'right' => '   |',
      'left' => '|   ',
      'blank' => '    ',
    ];

    $digitToComponents = [
      '0' => ['middle', 'left_and_right', 'blank', 'left_and_right', 'middle'],
    ];

    $getComponent = function($name) {
      return $components[$name];
    };

    if ($seconds === '0') {
      print_r($getComponent['middle']);
      return implode("\n", array_map($getComponent, $digitToComponents[$seconds]));
    } elseif ($seconds === '1') {
      return <<<DISPLAY
{$components['blank']}
{$components['right']}
{$components['blank']}
{$components['right']}
{$components['blank']}
DISPLAY;
    } else {
      return <<<DISPLAY
{$components['middle']}
{$components['right']}
{$components['middle']}
{$components['left']}
{$components['middle']}
DISPLAY;
    }
  }
}
