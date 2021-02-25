<?php

namespace Scripts\InputValues;

class Origin
{
    private string $folder;
    private string $allHtml;

    public function __construct(string $folder) {
        $this->folder = $folder;
    }

    public function getAllHtml(): string
    {
        $files = glob($this->folder.'*.html');
        $allHtml = '';

        $i = 0;
        while ($i < count($files)) {
            $allHtml .= file_get_contents($files[$i]);
            $i++;
        }

        return $allHtml;
    }

}
