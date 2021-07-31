<?php

/**
 * caesar
 * Copyright © 2021 Podvirnyy Nikita (Observer KRypt0n_)
 * This program comes with ABSOLUTELY NO WARRANTY;
 * This is free software, and you are welcome to redistribute it under certain conditions; lookup LICENSE for details.
 */

namespace Caesar;

function caesar (string $text, int $offset = 0): string
{
    return join (array_map (fn ($char) => chr ((ord ($char) + $offset) % 256), str_split ($text)));
}
