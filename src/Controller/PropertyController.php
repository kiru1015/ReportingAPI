<?php

namespace App\Controller;

use App\Entity\Job;
use App\Entity\Property;
use App\Entity\User;
use App\Repository\JobRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class PropertyController extends AbstractController
{
    private $em;
    private $serializer;

    public function __construct(EntityManagerInterface $em, SerializerInterface $serializer){
        $this->em = $em;
        $this->serializer = $serializer;
    }
    /**
     * @Route("/property", name="app_reporting")
     */
    public function index(): Response
    {
        $propertyRepository = $this->em->getRepository(Property::class);
//        dd($repository);
//        $properties = $this->serializer->deserialize($repository->findAll());
        $properties = $propertyRepository->findAll();
     //   dd($jobsReported);
        return $this->json([
            'data' => $properties
        ]);
    }


}
