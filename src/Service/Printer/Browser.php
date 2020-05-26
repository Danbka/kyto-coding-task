<?php


namespace Danbka\Kyto\Service\Printer;


class Browser implements PrinterInterface
{
    public function print(array $shape2D): void
    {
        $tag = $this->getMonospaceTag();

        $html = "<".$tag.">";

        foreach ($shape2D as $key => $row) {
            array_walk($row, function($symbol) use (&$html) {
                $html .= $symbol;
            });

            if ($key !== array_key_last($shape2D)) {
                $html .= "<br />";
            }
        }

        $html .= "</".$tag.">";

        print $html;
    }

    private function getMonospaceTag()
    {
        return "pre";
    }
}