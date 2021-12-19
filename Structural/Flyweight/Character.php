<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Flyweight;

/**
 * Implements the Flyweight interface and adds storage for intrinsic State, if any.
 * Instances of concrete flyweights are shared by means of a factory.
 */
class Character implements Text
{
    /**
     * Any State stored by the concrete Flyweight must be independent of its context.
     * For flyweights representing characters, this is usually the corresponding character code.
     */
    public function __construct(private string $name)
    {
    }

    public function render(string $extrinsicState): string
    {
         // Clients supply the context-dependent information that the Flyweight needs to draw itself
         // For flyweights representing characters, extrinsic State usually contains e.g. the font.

        return sprintf('Character %s with font %s', $this->name, $extrinsicState);
    }
}
