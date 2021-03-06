<?php

namespace Jne\Contracts;

use Symfony\Component\DomCrawler\Crawler;

interface HtmlMapperInterface
{
    /**
     * Map HTML DOM data to instance of object.
     *
     * @param \Symfony\Component\DomCrawler\Crawler $node
     *
     * @return mixed
     */
    public function map(Crawler $node);
}
