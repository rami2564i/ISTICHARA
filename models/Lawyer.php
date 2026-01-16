<?php 
require_once "Person.php";
class  lawyer extends  Person{



// years_of_experiences INT,
// hourly_rate DECIMAL (10,2),
// specialization ENUM('Droit pénal', 'Civil', 'Famille', 'Affaires') NOT NULL,
// consultation_online bool,
    private int  $years_of_exprience;
    private  float $hourly_rate;
    private  string $specialization;
    private   bool $consultation_online;
    public function __construct(string $nom, string $email,string $phone,int $years_of_exprience,float $hourly_rate,string $specialization, bool $consultation_online)
    {
      parent::__construct($nom, $email, $phone);
      $this->years_of_exprience=$years_of_exprience;
      $this->hourly_rate=$hourly_rate;
      $this->specialization=$specialization;
      $this->consultation_online=$consultation_online;

    }
     public function getYears_of_exprience():int{ 
        return $this->years_of_exprience;
     }
     public function getHourly_rate():float{
        return $this->hourly_rate;
     }
     public function getSpecialization():string{
        return $this->specialization;
     }
     public  function getConsulation_online():bool{
        return $this->consultation_online;
     }


    public function setgetYears_of_exprience(int $years_of_exprience):void{
        $this->years_of_exprience=$years_of_exprience;
    }
    public function setgetHourly_rate(float $hourly_rate):void{
        $this->hourly_rate=$hourly_rate;
    }
    public function setSpecialization(string $specialization){
        $this->specialization=$specialization;

    }
    public function setConsulation_online(bool $consultation_online):void{
        $this->consultation_online=$consultation_online;
    }
}