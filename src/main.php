<?php

require 'Clock.php';

while (true) {
  echo Clock::display(date("h:i:s", time()));
  echo shell_exec('clear');
}
