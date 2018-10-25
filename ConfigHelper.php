<?php

namespace Helper;

class ConfigHelper extends \Codeception\Module
{
    /**
     * @param string $key
     * @return null|string
     */
    public function getConfig(string $key): ?string
    {
        return $this->config[$key] ?? null;
    }
}