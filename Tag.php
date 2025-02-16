<?php
abstract class Tag implements TagInterface
{
    private string $name;

    private array $attributes = [];

    private array $children = [];

    private string $text = '';


// region Getter Setter Name
    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
// endregion

// region Attribute
public function getAttributes(): array{
        return $this->attributes;
}
public function addAttribute(string $name, string $value): void{
        $this->attributes[$name] = $value;
}
public function removeAttribute(string $name): void{
        unset($this->attributes[$name]);
}
// endregion


}