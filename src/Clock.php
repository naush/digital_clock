<?php

class Clock
{
  const CHARACTER_TO_COMPONENTS = [
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

  private static function getComponent($key, $size): array
  {
    $components = [
      'middle'          => fn($size) => [implode('', [' ', str_repeat('--', $size), ' '])],
      'left_and_right'  => fn($size) => array_fill(0, $size, implode('', ['|', str_repeat('  ', $size), '|'])),
      'right'           => fn($size) => array_fill(0, $size, implode('', [' ', str_repeat('  ', $size), '|'])),
      'left'            => fn($size) => array_fill(0, $size, implode('', ['|', str_repeat('  ', $size), ' '])),
      'blank'           => fn($size) => [implode('', [' ', str_repeat('  ', $size), ' '])],
      'separator_blank' => fn($size) => [implode('', [str_repeat(' ', $size), ' ', str_repeat(' ', $size)])],
      'separator'       => fn($size) => array_fill(0, $size, implode('', [str_repeat(' ', $size), '.', str_repeat(' ', $size)])),
    ];

    return $components[$key]($size);
  }

  private static function convert($character, $size): array
  {
    return array_merge(...array_map(fn($key) => Clock::getComponent($key, $size), Clock::CHARACTER_TO_COMPONENTS[$character]));
  }

  public static function display(string $time, int $size = 1): string
  {
    $lines = array_map(fn($character) => Clock::convert($character, $size), str_split($time));
    $zipped = array_map(null, ...$lines);

    if (strlen($time) > 1) {
      return implode("\n", array_map(fn($lines) => implode(' ', $lines), $zipped));
    }

    return implode("\n", $zipped);
  }
}
