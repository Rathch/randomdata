<?php

declare(strict_types=1);

namespace WIND\Randomdata\Event;


final class RandomdataEvent
{

    /**
     * @var mixed
     */
    private $name;

    private $arguments;

    public function __construct($name, $arguments)
    {
        $this->arguments = $arguments;
        $this->name = $name;
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    public function getArguments()
    {
        return $this->arguments;
    }
}