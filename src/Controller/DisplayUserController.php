<?php

namespace App\Controller;

use App\Entity\Users;
use App\Service\ValidatorService;
use App\Repository\UsersRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DisplayUserController extends AbstractController {
    #[ Route( '/api/displayUser/{email}', name:'displayUser', methods:[ 'GET' ] ) ]

    function getDisplayUser( string $email, SerializerInterface $serializer, UsersRepository $usersRepo ): JsonResponse {
        $user = $usersRepo->findByEmail( $email );
        if ( $user ) {
            // $jsonUser = $serializer->serialize( $user, 'json', [ 'groups' => 'user' ] );
            // return new JsonResponse( $jsonUser, Response::HTTP_OK, [], true );
            return $this->json( $user[ 0 ], 200, [], [ 'groups' => 'user' ] );
        }
        return new JsonResponse( null, Response::HTTP_NOT_FOUND );

    }

    // #[ Route( '/api/displayUser/{email}', name: 'updateUser', methods: [ 'PUT' ] ) ]

    // public function setDisplayUser( string $email, Request $request, EntityManagerInterface $manager, SerializerInterface $serializer, ValidatorService $validator ): JsonResponse {
    //     $form = $request->getContent();
    //     try {
    //         $user = $this->getDisplayUser( $request, $serializer, $email );
    //         // Contrôle de la validité des données
    //         $validity = $validator->verify( $user );
    //         if ( count( $validity ) > 0 ) {
    //             return $this->json( $validity, 400 );
    //         }

    //         $user->setEmail( $email );
    //         $user->setFirstName( $firstName );
    //         $user->setLastName( $lastName );
    //         $user->setPhone( $phone );

    //         return $this->json( $user, 201, [], [ 'groups' => 'register' ] );
    //     } catch ( NotEncodableValueException $e ) {
    //         return $this->json( [ 'message' => $e->getMessage() ], 400 );
    //     }
    // }

    #[ Route( '/api/displayUser/{email}', name:'updateUser', methods: [ 'PUT' ] ) ]

    public function updateUser( string $email, Request $request, SerializerInterface $serializer, UsersRepository $repository,EntityManagerInterface $managerUser, UrlGeneratorInterface $urlGenerator ): JsonResponse {
    
        $currentUser = $repository->findOneByEmail($email);
        // Récupération du contenu de la requête sous la forme d'un objet Users enregistré dans la variable $currentUser
        // Il est nécessaire de désérialiser les information depuis l'utilisateur actuel représenté par $currentUser
        // pour ce faire nous devons utiliser la classe AbstractNormalizer pour prendre en compte ces informations.
        // $currentUser = new Users;
        $updatedUser = $serializer->deserialize( $request->getContent(), Users::class, 'json', [ AbstractNormalizer::OBJECT_TO_POPULATE=>$currentUser ] );

        // Enregistrement de l'utilisateur
        // $managerUser->persist( $updatedUser );

        // Confirmation de l'enregistrement
        $managerUser->flush();

        return new JsonResponse( null, JsonResponse::HTTP_NO_CONTENT );
    }
}

