<?php

/** 
 * @generate-function-entries
 * @generate-class-entries

 * */
class CanBus {
    public function __construct(string $interface) {}
    public function init(bool $blocking = true): bool {}
    public function read(): CanFrame|false {}
    public function send(CanFrame $frame): bool {}
    public function generateRandomFrame(): CanFrame {}
    public function __destruct(): void {}
    public function close(): bool {}
}

class CanFrame {
    public function __construct(int $index, array $data) {}
}
