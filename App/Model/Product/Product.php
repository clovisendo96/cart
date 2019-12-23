<?php

namespace App\Model\Product;

class Product
{
    private $id;
    private $image;
    private $name;
    private $price;

    public function setId($id)
    {
        if (!is_int($id)) {
            throw new \InvalidArgumentException("Id precisa ser inteiro");
        }
        $this->id = $id;
    }

    public function setName($name)
    {
        if (empty($name)) {
            throw new \InvalidArgumentException("È obrigatório ter o nome");
        }
        $this->name = $name;
    }

    public function setImage($image)
    {
        if (empty($image)) {
            throw new \InvalidArgumentException("È obrigatório uma imagem");
        }
        $this->image = $image;
    }

    public function setPrice($price)
    {
        if (!is_float($price)) {
            throw new \InvalidArgumentException("Preço precisar ser um float");
        }
        $this->price = $price;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
