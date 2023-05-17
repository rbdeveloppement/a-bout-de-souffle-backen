<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/api/product/{id}', name: 'app_product_details')]
    public function getProduct($id, ProductRepository $productRepo): JsonResponse
    {
        return $this->json($productRepo->findById($id), 200, [], ['groups' => 'details']);
    }
}
