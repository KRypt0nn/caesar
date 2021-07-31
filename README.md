# Caesar

PHP 7+ implementation of the Caesar's cipher

## Installation

```
composer require krypt0nn/caesar
```

## Using

```php
<?php

require 'vendor/autoload.php';

use function Caesar\caesar;

# And this will print "Hello, World!", of course
echo caesar (caesar ('Hello, World!', 1234), -1234);
```

Function `Caesar\caesar` has two arguments: required `string $text` and optional *(and technically also required)* `int $offset = 0`. The second parameter defines the step of characters in the alphabet's encoding. If you want to decode some encoded text - you should use the opposite offset parameter you've used in the encoding. As in the example above we encoded text with offset `1234` and decoded it using its opposite value - `-1234`. Also we could encode our text with offset `-1234` and decode it with `1234`

Author: [Nikita Podvirnyy](https://vk.com/technomindlp)