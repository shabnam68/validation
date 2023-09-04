<?php namespace ShabiValidation;

class Validation{

    public function require(array $data , string $field)
    {
        return isset($data[$field]);
    }
}