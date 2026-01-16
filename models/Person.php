<?php
abstract class Person{

    //	name	email	phone	years_of_experiences
    protected int $id ;
    protected string $nom;
    protected string  $email;
    protected string $phone;
   

    public function  __construct(string $nom, string $email,string $phone)
    {
         $this->nom = $nom;
        $this->email = $email;
        $this->phone =$phone;
       
    }
   // Getters
    public function getId(): int {
         return $this->id; }
    public function getNom(): string {
         return $this->nom; }
    public function getEmail(): string { 
        return $this->email; }
      public function getphone(): string { 
        return $this->phone; }
       
  // seters
  public function setNom(string $nom): void { 
    $this->nom = $nom; }
  public function setEmail(string $email): void {
     $this->email = $email; }
  public function setphone(string $phone): void { 
    $this->phone = $phone; }
  
 
}