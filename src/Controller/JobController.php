<?php

namespace App\Controller;

use App\Entity\Job;
use App\Entity\Property;
use App\Repository\JobRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JobController extends AbstractController
{
    /**
     * @Route("/job", name="app_job")
     */
    public function index(JobRepository $jobRepository): Response
    {
        $jobs = $jobRepository->findAll();
        return $this->json([
            'data' => $jobs
        ]);
    }

    /**
     * @Route("/add_job", name="job_add")
     */
    public function add_job(EntityManagerInterface $entityManager,JobRepository $jobRepository, Request $request): Response
    {
        $job = new Job();
        $parameter = json_decode($request->getContent(), true);
        $job->setSummary($parameter['summary']);
        $job->setDescription($parameter['description']);
        $job->setStatus($parameter['status']);
        $job->setFirstName($parameter['firstName']);
        $job->setLastName($parameter['lastName']);

        $property = new Property();
        $property->setName($parameter['propertyName']);
        $job->setProperty($property);

        $entityManager->persist($job);
        $entityManager->persist($property);
        $entityManager->flush();

            $jobRepository->add($job);


        return $this->json([
            'job' => 'Saved'
        ]);
    }
}
