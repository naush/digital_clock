<?php

class Clock
{
  const COMPONENTS = [
    '0' => ['middle', 'sides',     'blank',  'sides',     'middle'],
    '1' => ['blank',  'right',     'blank',  'right',     'blank'],
    '2' => ['middle', 'right',     'middle', 'left',      'middle'],
    '3' => ['middle', 'right',     'middle', 'right',     'middle'],
    '4' => ['blank',  'sides',     'middle', 'right',     'blank'],
    '5' => ['middle', 'left',      'middle', 'right',     'middle'],
    '6' => ['middle', 'left',      'middle', 'sides',     'middle'],
    '7' => ['middle', 'right',     'blank',  'right',     'blank'],
    '8' => ['middle', 'sides',     'middle', 'sides',     'middle'],
    '9' => ['middle', 'sides',     'middle', 'right',     'middle'],
    ':' => ['blank',  'separator', 'blank',  'separator', 'blank'],
  ];

  public static function display(string $time, int $scale = 1): string
  {
    $chars = str_split($time);
    $figures = array_map(fn($char) => self::convert($char, $scale), $chars);
    $zipped = array_map(null, ...$figures);
    $joined = array_map(fn($pair) => self::joinOrNothing($pair), $zipped);
    return join("\n", $joined);
  }

  private static function convert(string $char, int $scale): array
  {
    $vertical = fn($line, $multiplier) => array_fill(0, $multiplier, $line);
    $flatmap = fn($fn, $components) => array_merge(...array_map($fn, $components));

    $text = [
      'blank'     => $vertical(' ' . str_repeat('  ', $scale) . ' ', 1),
      'right'     => $vertical(' ' . str_repeat('  ', $scale) . '|', $scale),
      'left'      => $vertical('|' . str_repeat('  ', $scale) . ' ', $scale),
      'middle'    => $vertical(' ' . str_repeat('--', $scale) . ' ', 1),
      'sides'     => $vertical('|' . str_repeat('  ', $scale) . '|', $scale),
      'separator' => $vertical(' ' . str_repeat('..', $scale) . ' ', $scale),
    ];

    return $flatmap(fn($component) => $text[$component], self::COMPONENTS[$char]);
  }

  private static function joinOrNothing($lines): string
  {
    return join(' ', is_array($lines) ? $lines : [$lines]);
  }
}
