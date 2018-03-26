<?php

    namespace AppBundle\Entity; 
    use Doctrine\ORM\Mapping as ORM; //imports the ORM annotations prefix.
    use ApiPlatform\Core\Annotation\ApiResource;
    
/**
 * @ApiResource
 * @ORM\Entity 
 * @ORM\Table(name="experience")
**/
    
class Experience {

    /** @ORM\Id 
    * @ORM\Column(type="integer") 
    * @ORM\GeneratedValue **/
    private $id;
    
    /** 
    * @ORM\Column(type="string") 
    **/
    private $name;
    
    /** 
    * @ORM\Column(type="string") 
    **/
    private $dateDebut;
    
    /** 
    * @ORM\Column(type="string") 
    **/
    private $dateFin;
    
    /** 
    * @ORM\Column(type="string") 
    **/
    private $lieu;
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getname()
    {
        return $this->name;
    }
    
    public function getdateDebut()
    {
        return $this->dateDebut;
    }
    
    public function getdateFin()
    {
        return $this->dateFin;
    }
    
    public function getlieu()
    {
        return $this->lieu;
    }
    
    public function setId($id){
        $this->id = $id;       //nouvel id stocké dans $id
    }
    
    public function setName($name){
        $this->name = $name;
    }
    
    public function setdateDebut($dateDebut){
        $this->dateDebut = $dateDebut;
    }
    
    public function setdateFin($dateFin){
        $this->dateFin = $dateFin;
    }
    
    public function setlieu($lieu){
        $this->lieu = $lieu;
    }

}