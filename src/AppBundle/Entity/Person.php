<?php

namespace AppBundle\Entity;


use JMS\Serializer\Annotation as Serializer;

class Person
{
    /**
     * @var int
     * @Serializer\Type("int")
     */
    public $id;

    /**
     * @var \DateTime
     * @Serializer\Type("DateTime<'d/m/Y'>")
     */
    public $birthdate;

    public function __construct($id, $birthdate)
    {
        $this->id = $id;
        $this->birthdate = $birthdate;
    }
}
