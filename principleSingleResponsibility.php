<?php

class UserJson {
    public static function from($data) {
        return json_encode($data);
    }
}

class Validation {

    protected static $rules = [
        'name' => 'string',
        'age' => 'integer'
    ];

    public static function validate($data) {
        foreach(static::$rules as $property => $type) {
            if(gettype($data[$property]) !== $type) {
                throw new Exception("User Property {$property} must Be type of {$type}");
            }
        }
    }
}

class User {

    public function __construct($data) {
        $this->name = $data['name'];
        $this->age = $data['age'];
    }

}

$data = array('name'=>'john doe', 'age'=>15);

Validation::validate($data);
$user = new User($data);
$userJson = UserJson::from($user);

print_r($userJson); 