<?php

/*   
TELEGRAM @H4x0rxploit
JOIN US AT TELEGRAM GROUP : https://t.me/H4x0rxploits
*/

namespace Jaybizzle\CrawlerDetect\Fixtures;

abstract class AbstractProvider
{
    /**
     * The data set.
     *
     * @var array
     */
    protected $data;

    /**
     * Return the data set.
     *
     * @return array
     */
    public function getAll()
    {
        return $this->data;
    }
}
