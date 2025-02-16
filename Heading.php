<?php
class Heading extends Tag {
    private int $level;

    public function isSelfClosing(): bool
    {
        return false;
    }

    public function display(): void
    {
        echo "C'est quoi un heading ?";
    }
}