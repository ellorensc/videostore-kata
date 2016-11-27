<?php

namespace src;

/**
 * Class NewReleaseMovie
 */
class NewReleaseMovie extends Movie
{
    /**
     * NewReleaseMovie constructor.
     * @param $title
     */
    public function __construct($title)
    {
        parent::__construct($title);
    }

    /**
     * @param $daysRented
     * @return float
     */
    public function determineAmount($daysRented) : float
    {
        return $daysRented * 3.0;
    }

    /**
     * @param $daysRented
     * @return int
     */
    public function determineFrequentRenterPoints($daysRented) : int
    {
        return ($daysRented > 1) ? 2 : 1;
    }
}
