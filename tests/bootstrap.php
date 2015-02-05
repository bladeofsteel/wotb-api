<?php

if (false === @include_once(__DIR__ . '/../vendor/autoload.php')) {
    throw new \RuntimeException("Not found composer autoload");
}

\VCR\VCR::configure()->setCassettePath(__DIR__ . '/fixtures');