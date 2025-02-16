<?php

class Image extends Tag {
    private string $url;
    private int $width;
    private int $height;

    public function __construct(string $url, int $width, int $height) {
        $this->url = $url;
        $this->width = $width;
        $this->height = $height;
    }
    public function resize(int $width, int $height): void {
        $this->width = $width;
        $this->height = $height;
    }

    public function display(): void {
        echo '<img src="'.$this->url.'" width="'.$this->width.'" height="'.$this->height.'" />';
    }

    public function isSelfClosing(): bool
    {
        return false;
    }
}