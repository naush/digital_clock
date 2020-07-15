## Goal: Write a program that displays a LCD style digital clock.

### Part 1

Write a program that given a number (with arbitrary number of digits) or a separator, converts it into LCD style numbers using the following format:

```sh
 --       --   --        --   --   --   --   --     
|  |   |    |    | |  | |    |       | |  | |  |  . 
          --   --   --   --   --        --   --     
|  |   | |       |    |    | |  |    | |  |    |  . 
 --       --   --        --   --        --   --     
```

### Part 2

Change your program to support variable scale of the digits. For example,

```sh
scale = 2

 ---- 
     |
     |
 ---- 
|     
|     
 ---- 
```

### Digital Clock

Run `composer run-script time` to display a digital clock in your terminal.

#### Inspired By

https://gist.github.com/arikfr/11362378#file-gistfile1-txt
https://github.com/coreyhaines/kata-number-to-led
http://rubyquiz.com/quiz14.html
