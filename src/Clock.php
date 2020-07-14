<?php

class Clock
{
  const CoMPoNENTS = [
    'middle'          => ' -- ',
    'left_and_right'  => '|  |',
    'right'           => '   |',
    'left'            => '|   ',
    'blank'           => '    ',
    'separator_blank' => ' ',
    'separator'       => 'o',
  ];

  const DIGIT_To_CoMPoNENTS = [
    '0' => ['middle', 'left_and_right', 'blank', 'left_and_right', 'middle'],
    '1' => ['blank', 'right', 'blank', 'right', 'blank'],
    '2' => ['middle', 'right', 'middle', 'left', 'middle'],
    '3' => ['middle', 'right', 'middle', 'right', 'middle'],
    '4' => ['blank', 'left_and_right', 'middle', 'right', 'blank'],
    '5' => ['middle', 'left', 'middle', 'right', 'middle'],
    '6' => ['middle', 'left', 'middle', 'left_and_right', 'middle'],
    '7' => ['middle', 'right', 'blank', 'right', 'blank'],
    '8' => ['middle', 'left_and_right', 'middle', 'left_and_right', 'middle'],
    '9' => ['middle', 'left_and_right', 'middle', 'right', 'middle'],
    ':' => ['separator_blank', 'separator', 'separator_blank', 'separator', 'separator_blank'],
  ];

  private static function getDigitComponents($character): array
  {
    $getComponent = fn($name) => Clock::CoMPoNENTS[$name];
    return array_map($getComponent, Clock::DIGIT_To_CoMPoNENTS[$character]);
  }

  public static function display(string $time): string
  {
    $arrays = array_map("Clock::getDigitComponents", str_split($time));
    $zipped = array_map(null, ...$arrays);

    if (strlen($time) > 1) {
      return implode("\n", array_map(fn($items) => implode(" ", $items), $zipped));
    }

    return implode("\n", $zipped);
  }
}
