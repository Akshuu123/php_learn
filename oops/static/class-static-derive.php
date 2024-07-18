<?php
include './class-static.php';

class Employee extends Profile
{
    private $gender;
    public function __construct(string $employee_name, float|int $experience, int $age, string $gender)
    {
        Parent::__construct($employee_name, $experience, $age);
        $this->gender = $gender;
    }


    /**
     * Summary of get_gender
     * @return string
     */
    public function get_gender()
    {
        return self::$gender;
    }

    /**
     * Set Gender of Employee
     * @param string $gender
     * @return void
     */
    public function set_gender(string $gender)
    {
        $this->gender = $gender;
    }


    /**
     * Retrieve the name of Employee
     * @return string
     */
    public function get_full_name()
    {
        return ucfirst($this->employee_name);
    }

    /**
     * Set Name of Employee
     * @param string $employee_name
     */
    public function set_full_name(string $employee_name)
    {
        $this->$employee_name = $employee_name;
    }


    /**
     * Get Experience of Employee
     * @return float|int
     */
    public function get_experience()
    {
        return $this->experience;
    }


    /**
     * Set Experience of Employee
     * @param int|float $experience
     * @return void
     */
    public function set_experience(int|float $experience)
    {
        $this->experience = $experience;
    }


    /**
     * Function is use to Check is senior Developer
     * @return string
     */
    function is_senior_dev()
    {
        if ($this->experience >= 6) {
            return 'Senior Developer';
        } elseif ($this->experience >= 2.5) {
            return 'Mid Level Developer';
        } elseif ($this->experience > 1) {
            return 'Junior Level developer';
        } else {
            return 'Fresher Deverloper';
        }
    }
}

$employee1 = new Employee('akshay', 1.5, 28, 'male');

print_r($employee1->is_senior_dev());
