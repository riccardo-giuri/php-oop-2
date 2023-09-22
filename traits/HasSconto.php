<?php

trait HasSconto {
    protected $discountPercentage;
    protected $discountedPrice;

    public function getDiscountPercentage()
    {
        return $this->discountPercentage;
    }

    public function setDiscountPercentage($discountPercentage)
    {
        $this->discountPercentage = $discountPercentage;
    }

    public function getDiscountedPrice()
    {
        return $this->discountedPrice;
    }

    public function setDiscountedPrice($discountedPrice)
    {
        $this->discountedPrice = $discountedPrice;
    }

    public function applySconto(float $_originalPrice, float $_discount) {
        if($_discount < 0 || $_discount > 100) {
            throw new Exception("Hai inserito uno sconto non valido!");
        } 
        else {
            $this->discountPercentage = $_discount;

            $discountValue = ($_originalPrice / 100) * $this->discountPercentage;

            $this->discountedPrice = round(($_originalPrice - $discountValue), 2);
        }
    }
}