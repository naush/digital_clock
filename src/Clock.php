<?php

class Clock
{
  const COMPONENTS = [
    'middle'         => ' -- ',
    'left_and_right' => '|  |',
    'right'          => '   |',
    'left'           => '|   ',
    'blank'          => '    ',
  ];

  public static function display(string $time): string
  {
    $digitToComponents = [
      '0' => ['middle', 'left_and_right', 'blank', 'left_and_right', 'middle'],
      '1' => ['blank', 'right', 'blank', 'right', 'blank'],
      '2' => ['middle', 'right', 'middle', 'left', 'middle'],
      '3' => ['middle', 'right', 'middle', 'right', 'middle'],
    ];

    $getComponent = fn($name) => Clock::COMPONENTS[$name];

    return implode("\n", array_map($getComponent, $digitToComponents[$time]));
  }
}
