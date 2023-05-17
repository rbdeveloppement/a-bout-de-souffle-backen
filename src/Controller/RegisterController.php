<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Users;
use App\Service\ValidatorService;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\Exception\NotEncodableValueException;
use Symfony\Component\Serializer\SerializerInterface;

class RegisterController extends AbstractController
{
    #[Route('/api/register', name: 'app_register', methods: ['POST'])]
    public function register(Request $request, UserPasswordHasherInterface $hash, EntityManagerInterface $manager, SerializerInterface $serializer, ValidatorService $validator): JsonResponse
    {
        $form = $request->getContent();
        try {
            $user = $serializer->deserialize($form, Users::class, "json");
            $violation = $validator->verify($user);
            if (count($violation) > 0) {
                return $this->json($violation, 400);
            }
            $searchEmail = $manager->getRepository(Users::class)->findOneByEmail($user->getEmail());
            $hashPassword = $hash->hashPassword($user, $user->getPassword());
            $user->setIsActive(true)
                ->setCreatedAt(new \DateTimeImmutable)
                ->setPassword($hashPassword)
                ->setRoles(['ROLE_USER']);
            if (!$searchEmail) {
                $manager->persist($user);
                $manager->flush();
                return $this->json($user, 201, [], ['groups' => 'register']);
            } elseif ($searchEmail) {
                return $this->json(["emailError" => "e-mail déjà existant"], 400);
            }
        } catch (NotEncodableValueException $e) {
            return $this->json(["message" => $e->getMessage()], 400);
        };
    }
}
