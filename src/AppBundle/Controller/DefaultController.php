<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Person;
use JMS\Serializer\SerializerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(SerializerInterface $serializer)
    {
        $person = $serializer->deserialize('{"id": 1, "birthdate": ""}', Person::class, 'json');
        return new Response(dump($person));
    }
}
