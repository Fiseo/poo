<?php
interface TagInterface
{
    public function display(): void;

    public function setName(string $name): void;

    public function getName(): string;

    public function addAttribute(string $name, string $value): void;

    public function removeAttribute(string $name): void;

    public function getAttributes(): array;

    public function isSelfClosing(): bool;

    public function getChildren(): array;
}