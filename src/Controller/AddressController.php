<?php

namespace App\Controller;

use App\Entity\Address;
use App\Repository\UsersRepository;
use App\Service\ValidatorService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Exception\NotEncodableValueException;
use Symfony\Component\Serializer\SerializerInterface;

class AddressController extends AbstractController
{
    #[Route('api/address/{email}', name: 'app_address', methods: ['GET'])]
    public function getAddress(string $email, UsersRepository $repo): JsonResponse
    {
        $user = $repo->findOneByEmail($email);
        if (count($user->getAddresses()) > 0) {
            return $this->json($user->getAddresses(), 200, [], ['groups' => 'address']);
        } else {
            return $this->json(["addressError" => "No address"], 200);
        }
    }

    #[Route('api/address/add/{email}', name: 'app_new_address')]
    public function newAddress(string $email, UsersRepository $repo, Request $request, SerializerInterface $serializer, ValidatorService $validator, EntityManagerInterface $manager): JsonResponse
    {
        $form = $request->getContent();
        $user = $repo->findOneByEmail($email);
        try {
            $address = $serializer->deserialize($form, Address::class, "json");
            $violation = $validator->verify($address);
            if (count($violation) > 0) {
                return $this->json($violation, 400);
            }
            $address->setIsActive(true)
                ->setUsers($user);
            $manager->persist($address);
            $manager->flush();
            return $this->json($address, 201, [], ['groups' => 'address']);
        } catch (NotEncodableValueException $e) {
            return $this->json(["message" => $e->getMessage()], 400);
        }
    }
}
