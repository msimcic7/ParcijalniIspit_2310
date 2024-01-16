<?php
/*prvi dioo - stari:
//sva neka svojstva nase grupe - ime, polaznici, broj polaznika, predavac...
$imeGrupe = 'OL-OBE_DEV_H-04/23';
$polaznici = ['Ana Anic', 'Ivo Ivic', 'Marko Maric'];
$brojPolaznika = count($polaznici);
$predavac = 'Ivan Ivanic';

//fja koja ce ispisati info o grupi:
function InfoGrupa()
{
        global $imeGrupe, $polaznici, $brojPolaznika, $predavac;
        echo "Ime grupe: $imeGrupe \n";
        echo "Polaznici: \n";
        foreach ($polaznici as $polaznik){
            echo "$polaznik \n";
        }
        echo "Broj polaznika: $brojPolaznika: \n";
        echo "Predavac: $predavac \n";
}

InfoGrupa();

*/

//oop:

/*
class Group //imamo objekt i metode pa mozemo reusati klasu
{
    public string $name; //public/private/protected je slično kao private
    public array $students;
    public int $numberOfStudents;
    public string $teacher;

    public function printInfo()
    {
        echo "Ime grupe: $this->name \n";         //$this - označava da koristimo svojstva i metode iz ovog objekta
        echo "Polaznici: \n";
        foreach ($this->students as $student){
            echo "$student \n";
        }
        //echo "Broj polaznika: $this->numberOfStudents: \n"; //ovdje mogu zapisati echo "Broj polaznika: {$this->getNumberOfStudents()}: \n"; i onda ga u new ne upisujem, nego ga metoda sama izračuna
        echo "Broj polaznika: {$this->getNumberOfStudents()} \n";
        echo "Predavac: $this->teacher \n";       
    }

    private function getNumberOfStudents ()//private metoda- moze se koristiti samo ovdje, npr. njome mozemo zamijeniti numberOfStudents
    {
        return count($this->students);
    }
}

$group = new Group();
$group->name = 'OL-OBE_DEV_H-04/23';
$group->students = ['Ana Anic', 'Ivo Ivic', 'Marko Maric'];
//dodali smo getNUmberOfStudents pa nam ovo ne treba $group->numberOfStudents = 3;
$group->teacher = 'Ivan Ivanic';


$group->printInfo();

$newgroup = new Group();
$newgroup->name = 'druga grupa';
$newgroup->students = ['Ana Anic', 'Ivo Ivic', 'Marko Maric'];
//dodali smo getNUmberOfStudents pa nam ovo ne treba$newgroup->numberOfStudents = 5;
$newgroup->teacher = 'Marko Ivanic';

echo "\n";

$newgroup->printInfo();

*/
//protected znaci da naslijedjene klase imaju pristup tim svojstvima, a private ne da naslijedjenim klasam da ih koriste
//sad cemo nasu klasu pretvoriti u private, a dati joj public sučelje:
class Teacher{
    private string $name;
    private string $title;
    private int $years;
    //seteri:
    public function setName(string $name) 
    {
        $this->name = $name;
    }
    public function setTitle(string $title) 
    {
        $this->title = $title;
    }
    public function setYears(int $years) 
    {
        $this->title = $years;
    }
    //geteri:
    public function getName() 
    {
        return $this->name ;
    }
    public function getTitle() 
    {
        return $this->title ;
    }
    public function getYears() 
    {
        return $this->title;
    }
}
class Group //imamo objekt i metode pa mozemo reusati klasu
{
    private string $name; //public/private/protected je slično kao private
    private array $students;
    //private int $numberOfStudents;
    private Teacher $teacher;

    public function printInfo()
    {
        echo "Ime grupe: $this->name \n";         //$this - označava da koristimo svojstva i metode iz ovog objekta
        echo "Polaznici: \n";
        foreach ($this->students as $student){
            echo "$student \n";
        }
        //echo "Broj polaznika: $this->numberOfStudents: \n"; //ovdje mogu zapisati echo "Broj polaznika: {$this->getNumberOfStudents()}: \n"; i onda ga u new ne upisujem, nego ga metoda sama izračuna
        echo "Broj polaznika: {$this->getNumberOfStudents()} \n";
        echo "Predavac: {$this->teacher->getName()} \n";  
        echo "Titula: {$this->teacher->getTitle()} \n";
        echo "Broj godina: {$this->teacher->getYears()} \n";

    }

    public function setName(string $name) //public metoda za setiranje imena
    {
        $this->name = $name;
    }
    public function setStudents(array $students) //public metoda za setiranje polaznika
    {
        $this->students = $students;
    }
    public function addStudent(string $students) //public metoda za dodavanje studenta u array
    {
        $this->students[] = $students;
    }
    public function setTeacher(Teacher $teacher) //public metoda za setiranje predavaca
    {
        $this->teacher = $teacher;
    }
    protected function getNumberOfStudents ()//private metoda- moze se koristiti samo ovdje, npr. njome mozemo zamijeniti numberOfStudents
    {
        return count($this->students);
    }
}

$group = new Group();
$group->setName('OL-OBE_DEV_H-04/23');
$group->setStudents(['Ana Anic', 'Ivo Ivic', 'Marko Maric']);
//dodali smo getNUmberOfStudents pa nam ovo ne treba $group->numberOfStudents = 3;
$teacher = new Teacher();
$teacher->setName('Morena');
$teacher->setTitle('neki title');
$teacher->setYears(20);
$group->setTeacher ($teacher);
$group->addStudent ('Morena Morena');


$group->printInfo();

