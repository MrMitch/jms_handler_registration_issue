<?php

namespace AppBundle\Serialization\SubscribingHandlers;


use JMS\Serializer\Handler\DateHandler;
use JMS\Serializer\JsonDeserializationVisitor;

class TreatEmptyStringAsNullDateTimeHandler extends DateHandler
{
    public function deserializeDateTimeFromJson(JsonDeserializationVisitor $visitor, $serializedDate, array $type)
    {
        dump('Deserializing a DateTime');
        if ($serializedDate === null || trim($serializedDate) === '')
        {
            dump('DateTime being deseriliazed is null or empty string');
            return null;
        }

        return parent::deserializeDateTimeFromJson($visitor, $serializedDate, $type);
    }
}
