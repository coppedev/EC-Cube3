<?php
/**
 * This file is part of EC-CUBE
 */

namespace Plugin\CpdTest006\Entity;

class CpdTest006 extends \Eccube\Entity\AbstractEntity
{

    private $id;
    private $name;
    private $data;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

}