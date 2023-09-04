<?php namespace ShabiValidation;

class Validation{

    public function has(array $data , string $field)
    {
        return isset($data[$field]);
    }
}