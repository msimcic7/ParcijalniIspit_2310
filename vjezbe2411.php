<?php

class Person
{
    /*protected string $name;

    protected int $years;*/

    //konstruktor:
    public function __construct(protected string $name, protected int $years)
    {
    }

    public function __destruct()
    {
        echo 'Objekt je uništen \n' ;
    }

    public function setName(string $name) 
    {
        $this->name = $name;
    }

    public function getName() 
    {
        return $this->name;
    }

    public function setYears(int $years) 
    {
        $this->years = $years;
    }

    public function getYears() 
    {
        return $this->years;
    }
}

class Teacher extends Person
{

    public function __construct(string $name, int $years=18, private string $title)
    {
        parent::__construct($name,$years);
        $this->title = $title;
    }
    
    public function setTitle(string $title) 
    {
        $this->title = $title;
    }

    public function getNaslov() 
    {
        return $this->title;
    }
}

class Student extends Person
{
    public function printInfo() 
    {
        echo "Ime: {$this->name}, godine: {$this->years} \n";
    }
}

class Group
{
    private const MAX_NUMBER_OF_STUDENTS = 5;

    private string $name;
    private array $students = [];
    private Teacher $teacher;

    public function __construct(Teacher $teacher = new Teacher('Ana Anic',28,'programer'))
    {
        $this->teacher = $teacher;
    }

    public function printInfo() 
    {
        echo "Ime grupe: $this->name \n";
        echo "Polaznici: \n";
        foreach ($this->students as $student) {
            $student->printInfo();
        }
        echo "Broj polaznika: {$this->getNumberOfStudents()} \n";
        echo "Predavac: {$this->teacher->getName()} \n";
        echo "Titula: {$this->teacher->getNaslov()} \n";
        echo "Broj godina: {$this->teacher->getYears()} \n";
    }

    public function setName(string $name) 
    {
        $this->name = $name;
    }

    public function setTeacher(Teacher $teacher) 
    {
        $this->teacher = $teacher;
    }

    public function addStudent(Student $student) 
    {
        if ($this->getNumberOfStudents() >= self::MAX_NUMBER_OF_STUDENTS) {
            return;
        }

        $this->students[] = $student;
    }

    public function getNumberOfStudents() 
    {
        return count($this->students);
    }
}

$group = new Group();
$group->setName('OL-OBE_DEV_H-04/23');

$teacher = new Teacher('Marko Markovic',30,'titula1'); //ovo je sad direktni poziv konstruktora - moramo mu proslijediti parametre
//$teacher->setName('Marko Markovic');
$teacher->setTitle('Senior Developer');
//$teacher->setYears(30);

//$group->setTeacher($teacher);

$marko = new Student('Marko Markovic',25);
//$marko->setName('Marko Markovic');
//$marko->setYears(25);

$ivan = new Student('Ivan Ivic',23);
//$ivan->setName('Ivan Ivic');
//$ivan->setYears(23);

$petar = new Student('Petar Peric',24);
//$petar->setName('Petar Peric');
//$petar->setYears(24);

$group->addStudent($marko);
$group->addStudent($ivan);
$group->addStudent($petar);

$group->printInfo();