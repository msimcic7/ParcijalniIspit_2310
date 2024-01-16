<?php

class Person
abstract class Person implements OnlineRoomConnectable
{
    public function __construct(
        protected string $name, 
        protected int $years = 18
        ) 
    {}

    public function __destruct()
    {
        echo "Objekt je unisten \n";
    }

    public function setName(string $name) 
    {
        $this->name = $name;
    }

    public function getName() 
    public function getName(): string
    {
        return $this->name;
    }

    public function setYears(int $years) 
    {
        $this->years = $years;
    }

    public function getYears() 
    public function getYears(): int
    {
        return $this->years;
    }

    abstract public function sayHello(): void;
}

class Teacher extends Person
@@ -43,23 +30,48 @@ public function __construct(
        parent::__construct($name, $years);
    }

    public function setTitle(string $title) 
    public function getTitle(): string
    {
        $this->title = $title;
        return $this->title;
    }

    public function getTitle() 
    public function sayHello(): void
    {
        return $this->title;
        echo "Predavac: {$this->getName()} \n";
        echo "Titula: {$this->getTitle()} \n";
        echo "Broj godina: {$this->getYears()} \n";
    }

    public function getRole(): string
    {
        return 'teacher';
    }
}

class Student extends Person
{
    public function printInfo() 
    public function sayHello(): void
    {
        echo "Ime: {$this->name}, godine: {$this->years} \n";
    }

    public function getRole(): string
    {
        return 'student';
    }
}

class Admin extends Person
{
    public function sayHello(): void
    {
        echo "Ja sam administrator \n";
    }

    public function getRole(): string
    {
        return 'admin';
    }
}

class Group
@@ -70,7 +82,8 @@ class Group
    private array $students = [];

    public function __construct(
        private Teacher $teacher = new Teacher('Ana Anic', 28, 'Senior Developer')
        private Teacher $teacher = new Teacher('Ana Anic', 28, 'Senior Developer'),
        private Admin $admin = new Admin('Admin98 98', 30)
        )
    {}

@@ -79,12 +92,16 @@ public function printInfo()
        echo "Ime grupe: $this->name \n";
        echo "Polaznici: \n";
        foreach ($this->students as $student) {
            $student->printInfo();
            $this->sayHello($student);
        }
        echo "Broj polaznika: {$this->getNumberOfStudents()} \n";
        echo "Predavac: {$this->teacher->getName()} \n";
        echo "Titula: {$this->teacher->getTitle()} \n";
        echo "Broj godina: {$this->teacher->getYears()} \n";
        $this->sayHello($this->teacher);
        $this->sayHello($this->admin);
    }

    private function sayHello(Person $person): void
    {
        $person->sayHello();
    }

    public function setName(string $name) 
@@ -97,6 +114,16 @@ public function setTeacher(Teacher $teacher)
        $this->teacher = $teacher;
    }

    public function getTeacher(): Teacher
    {
        return $this->teacher;
    }

    public function getAdmin(): Admin
    {
        return $this->admin;
    }

    public function addStudent(Student $student) 
    {
        if ($this->getNumberOfStudents() >= self::MAX_NUMBER_OF_STUDENTS) {
@@ -112,6 +139,53 @@ public function getNumberOfStudents()
    }
}

class OnlineRoom
{
    public function __construct(private Group $group)
    {}

    public function connect(OnlineRoomConnectable $onlineRoomConnectable)
    {
        if (!in_array($onlineRoomConnectable->getRole(), ['admin', 'teacher', 'tool'])){
            echo "Osoba {$onlineRoomConnectable->getName()} nije spojen/a! \n";
            return;
        }

        echo "{$onlineRoomConnectable->getName()} je spojen/a! \n";
    }
}

interface OnlineRoomConnectable
{
    const ROLE_ADMIN = 'admin';

    const ROLE_TEACHER = 'teacher';

    const ROLE_STUDENT = 'student';

    const ROLE_TOOL = 'tool';

    public function getRole(): string;

    public function getName(): string;
}

class OnlineRoomTool implements OnlineRoomConnectable
{
    public function __construct(private string $name)
    {}

    public function getRole(): string
    {
        return 'tool';
    }

    public function getName(): string
    {
        return $this->name;
    }
}

$group = new Group();
$group->setName('OL-OBE_DEV_H-04/23');

@@ -123,4 +197,14 @@ public function getNumberOfStudents()
$group->addStudent($ivan);
$group->addStudent($petar);

$group->printInfo();
// $group->printInfo();

$chatGPT = new OnlineRoomTool('ChatGPT');

$onlineRoom = new OnlineRoom($group);
$onlineRoom->connect($group->getTeacher());
$onlineRoom->connect($group->getAdmin());
$onlineRoom->connect($marko);
$onlineRoom->connect($ivan);
$onlineRoom->connect($petar);
$onlineRoom->connect($chatGPT);