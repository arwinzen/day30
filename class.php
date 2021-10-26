<?php

// What is class and instance
class Person {
    // we can specify data types starting from PHP 7
    public string $name;
    public string $hobby;
    public string $dob;
    // adding a '?' before the type allows for null values to be assigned
    // private ?int $age;
    protected ?int $age;
    public static int $counter = 0;

    public function __construct($name, $hobby, $dob)
    {
        $this->name = $name;
        $this->hobby = $hobby;
        $this->dob = $dob;
        $this->age = null;
        self::$counter++;
    }

    public function setAge()
    {
        $this->age = floor((time() - strtotime($this->dob)) / 31556926);
    }

    public function getAge()
    {
        return $this->age;
    }

    public static function getCounter()
    {
        return self::$counter;
    }
}