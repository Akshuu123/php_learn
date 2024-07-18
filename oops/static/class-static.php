<?php

class Profile
{
    public static $profile = 'Wordpress Developer';
    protected $employee_name;
    protected $experience;
    protected $age;

    public function __construct(string $employee_name, int|float $experience, int $age)
    {
        $this->employee_name = $employee_name;
        $this->age = $age;
        $this->experience = $experience;
    }

    public function get_designation_profile()
    {
        return self::$profile;
    }
}






