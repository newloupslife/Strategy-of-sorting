<?php
namespace App;


class StategySorting
{
    private $sortingDATA = [];
    private $sortingSTRATEGY = "up";

    public function __construct($data)
    {
        if (!\is_array($data)){
            throw new \LogicException("Input data not an array. Please enter an array of numbers or strings ");
        }

        $this->sortingDATA = $data;
    }

    public function sortDATA()
    {
        switch ($this->sortingSTRATEGY)
            {
            case "up":
                asort($this->sortingDATA);
            break;

            case "down":
                arsort($this->sortingDATA);
            break;
            }

    }

    public function sortStrategy($strategy)
    {
        if ($strategy != "up" && $strategy != "down")
        {
            throw new \LogicException("Wrong strategy, please choose between 'up' and 'down' sort strategy");
        }

        if ($strategy == "down")
        {
            return $this->sortingSTRATEGY = $strategy;
        }
    }

    public function getData()
    {
        return $this->sortingDATA;
    }

}