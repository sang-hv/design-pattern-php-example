<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Command;

/**
 * Invoker is using the Command given to it.
 * Example : an Application in SF2.
 */
class Invoker
{
    private Command $command;

    /**
     * in the invoker we find this kind of method for subscribing the Command
     * There can be also a stack, a list, a fixed set ...
     */
    public function setCommand(Command $cmd)
    {
        $this->command = $cmd;
    }

    /**
     * executes the Command; the invoker is the same whatever is the Command
     */
    public function run()
    {
        $this->command->execute();
    }
}
