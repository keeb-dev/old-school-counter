# OLD-SCHOOL-COUNTER

Remeber the days of GeoCities? Black backgrounds. Animated gifs everywhere. Maybe some animated stars. Definitely blazing or egregious use of separators?

Site always under construction.

Dialog box on entering - shouting out to the homies?

Some silly midi or even fancier a dumbass mp3 playing?

What's missing? The counter. 

This project gives you one. A simple one. Not the gaudy dumbass image one with a weird note on it. Just a number. Put it where you want.

## Usage

* Set up a PHP server
* Put the counter.php and counter.txt on the PHP server
* Make sure the counter.txt is writable by the PHP server
* Configure the PHP server to serve 
* Curl the PHP Server

You'll know it's working if it looks like this

```
keeb@edgelord ~ $ curl edgelord:8000/src/counter.php
{"counter":"000055"}keeb@edgelord ~ $
```

## Requirements

* PHP (of course)

## How it works

The code is simple. There's a `counter.txt`. Put any number you want on there.

By default, the counter will go to ~1 million views or `999999`. All unused digits will be replaced by 0's. So 1 view translates into `000001`

If you want to increase the number of 0's, change `$NUM_ZERO` in the code. I should probably make that an environment variable.

## Debugging

One of the annoying things about the built in php server is you can't print to stdout. `echo` goes to the webpage and if you're responding with json then echo'ing really messes shit up. So I hijacked the stdout stream. Turn it on by setting the `$COUNTER_LOGS_DEV` env var.






