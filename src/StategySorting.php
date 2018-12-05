<?php
/**
 * Created by PhpStorm.
 * User: newloupslife
 * Date: 12/5/18
 * Time: 7:55 PM
 */

namespace App;


class StategySorting
{
    private $sortingDATA = [];
    private $sortingSTRATEGY = "up";

    public function __construct($data)
    {
        if (!\is_array($data)){
            throw new \LogicException(" %s not an array. Please enter an array of numbers or strings ");
        }

        $this->sortingDATA = $data;
    }
}