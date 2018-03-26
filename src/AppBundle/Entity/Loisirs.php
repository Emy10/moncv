<?php

    namespace AppBundle\Entity;
    use Doctrine\ORM\Mapping as ORM;
    use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource
 * @ORM\Entity 
 * @ORM\Table(name="loisirs")
**/
    
class Loisirs {

    /** @ORM\Id 
    * @ORM\Column(type="integer") 
    * @ORM\GeneratedValue 
    **/
    private $id;
    
    /** 
    * @ORM\Column(type="string") 
    **/
    private $name;
    
    /** 
    * @ORM\Column(type="string") 
    **/
    private $temps;
    
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
    
    public function gettemps()
    {
        return $this->temps;
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
    
    public function settemps($temps){
        $this->temps = $temps;
    }
    
    public function setlieu($lieu){
        $this->lieu = $lieu;
    }
}