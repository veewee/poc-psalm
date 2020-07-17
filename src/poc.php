<?php

/**
 * @param array<string,string> $data
 *
 * @return list<string>
 */
function x($data): array {
    return array_keys($data);
}

x(['string' => 'string']);

