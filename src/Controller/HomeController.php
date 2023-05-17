<?php

namespace App\Controller;

use App\Repository\OrderDetailsRepository;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController
{
    #[Route('/api/popular', name: 'app_home')]
    public function getPopularProduct(OrderDetailsRepository $odr, ProductRepository $productRepository): JsonResponse
    {
        $idProduct = $odr->findProductPopular();
        $tabProduct = [];
        foreach ($idProduct as $value) {
            $tabProduct[] = $productRepository->find($value['id']);
        }
        return $this->json($tabProduct, 200, [], ['groups' => 'popular']);
    }
}
