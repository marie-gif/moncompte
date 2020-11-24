<?php
class Devenir
{
  private $_id;
  private $_motdePasse;
  private $_confirmMot;
  private $_votreNom;
  private $_votrePrenom;
  private $_tel;
  private $_mail;
  private $_message;
  private $_error;

  
  public function __construct(array $donnees)
  {
    $this->_error=array();
    $this->hydrate($donnees);
  }
   
  public function hydrate(array $donnees)
  {
    foreach ($donnees as $key => $value)
    {
      $method = 'set'.ucfirst($key);
      
      if (method_exists($this, $method))
      {
        $this->$method($value);
      }
    }
  }
  
 
  public function id()
  {
    return $this->_id;
  }
  
  public function motdePasse()
  {
    return $this->_motdePasse;
  }
  
  public function confirmMot()
  {
    return $this->_confirmMot;
  }
  public function votreNom()
  {
    return $this->_votreNom;
  }
  
  public function votrePrenom()
  {
    return $this->_votrePrenom;
  }
  
  public function tel()
  {
    return $this->_tel;
  }
  public function mail()
  {
    return $this->_mail;
  }
  
  public function message()
  {
    return $this->_message;
  }
  public function error() 
  { 
    return $this->_error; 
  }   
  
  public function setId($id)
  {
    $id = (int) $id;
    
    if ($id > 0)
    {
      $this->_id = $id;
    }
  }
  
  public function setMotdePasse($motdePasse)
  {
    if (!empty($motdePasse))
    {
      $this->_motdePasse = $motdePasse;
    }
    else
    {
        $mess = 'mot de passe vide';
        array_push($this->_error,$mess);
    }
  }
  public function setConfirmMot($confirmMot)
  {
    if (!empty($confirmMot))
    {
      $this->_confirmMot = $confirmMot;
    }
    else
    {
        $mess = 'merci de remplir';
        array_push($this->_error,$mess);
    }
  }
  public function setVotreNom($votreNom)
  {
    $votreNom = htmlspecialchars($votreNom);
    if (!empty($votreNom))
    {
      $votreNom = strtolower($votreNom);
      $votreNom = ucfirst($votreNom);  
      $this->_votreNom = $votreNom;
    }
    else
    {
        $mess = 'nom incorrect';
        array_push($this->_error,$mess);
    }
  }
  public function setVotrePrenom($votrePrenom)
  {
    if (is_string($votrePrenom))
    {
      $this->_votrePrenom = $votrePrenom;
    }
    else 
    {
        $mess = 'prenom incorrect';
        array_push($this->_error,$mess);

    }      
  }
  public function setTel($tel)
    {
        $tel = (int) htmlspecialchars($tel);
        if (!empty($tel))
        {        
            $this->_tel = (string) $tel;
        }        
        else 
        {
            $mess = 'telephone incorrect';
            array_push($this->_error,$mess);      
        }      
    }    
 public function setMail($mail)
    {
        $mail = htmlspecialchars($mail);
        if (filter_var($mail, FILTER_VALIDATE_EMAIL ) )
        {        
            $this->_mail = $mail;
        }        
        else 
        {
            $mess = 'mail incorrect';
            array_push($this->_error,$mess);
        }      
    }                     
    public function setMessage($message)
    {
        $this->_message = htmlspecialchars($message);
    }   
    
    public function getData()  
    { 
        $data = array(
            'id' => $this->id(),
            'motdePasse' => $this->motdePasse(),
            'confirmMot' => $this->confirmMot(),
            'votreNom' => $this->votreNom(),
            'votrePrenom' => $this->votrePrenom(),
            'tel' => $this->tel(),                                                                                                    
            'mail' => $this->mail(),                                    
            'message' => $this->message(),                                    
                                    
        );
        
        return $data;  

}
}