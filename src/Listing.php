<?php

namespace Scripts\InputValues;

class Listing
{
    private string $html;
    private string $inputName;
    private string $list;

    public function __construct(string $html) {
        $this->html = $html;
    }

    public function setInputsName(string $inputName): void
    {
        $this->inputName = $inputName;
    }

    public function createList(): void
    {
        $doc = new \DOMDocument();
        libxml_use_internal_errors(true);
        $doc->loadHTML('<meta charset="UTF-8">' . $this->html);
        libxml_clear_errors();
        $doc->saveHTML();
    
        $xpath = new \DOMXpath($doc);
        $elements = $xpath->query("//*[@name='{$this->inputName}']");
        $list = '';

        $i = 0;
        while ($i < count($elements)) {
            $list .= $elements{$i}->getAttribute('value') . PHP_EOL;
            $i++;
        }

        $this->list = $list;
    }

    public function makeFile(): void
    {
        $file = fopen($this->inputName.'.txt', 'w');
        fwrite($file, $this->list);
        fclose($file);
    }
}
