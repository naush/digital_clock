<?php

require 'Clock.php';
date_default_timezone_set('America/New_York');

while (true) {
  echo Clock::display(date("h:i:s", time()), 3);
  echo shell_exec('clear');
}
