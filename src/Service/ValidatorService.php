<?php

namespace App\Service;

use Symfony\Component\Validator\Validator\ValidatorInterface;

class ValidatorService
{
    private $validator;
    public function __construct(ValidatorInterface $validator)
    {
        $this->validator = $validator;
    }
    public function verify(object $entity)
    {
        $errors = $this->validator->validate($entity);
        $violation = [];
        foreach ($errors as $error) {
            $violation[] = $error->getMessage();
        }
        if (count($violation) > 0) {
            return $violation;
        }
        return [];
    }
}
