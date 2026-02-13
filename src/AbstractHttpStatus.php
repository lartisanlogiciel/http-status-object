<?php

namespace HttpStatusObject;

abstract class AbstractHttpStatus
{
    public int $code;
    public string $type;
    public string $name;
    public string $definition;
    public bool $official;

    /**
     * @param int $code
     * @param string $type
     * @param string $name
     * @param string $definition
     * @param bool $official
     */
    protected function __construct(int $code, string $type, string $name, string $definition, bool $official = true)
    {
        $this->code = $code;
        $this->type = $type;
        $this->name = $name;
        $this->definition = $definition;
        $this->official = $official;
    }

}