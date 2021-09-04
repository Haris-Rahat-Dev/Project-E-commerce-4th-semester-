<?php
 class users
 {
     private $c_id,$first_name,$last_name,$email,$password,$phoneno,$birth,$gender,$type;

     /**
      * @return mixed
      */
     public function getCId()
     {
         return $this->c_id;
     }

     /**
      * @param mixed $c_id
      */
     public function setCId($c_id): void
     {
         $this->c_id = $c_id;
     }

     /**
      * @return mixed
      */
     public function getFirstName()
     {
         return $this->first_name;
     }

     /**
      * @param mixed $first_name
      */
     public function setFirstName($first_name): void
     {
         $this->first_name = $first_name;
     }

     /**
      * @return mixed
      */
     public function getLastName()
     {
         return $this->last_name;
     }

     /**
      * @param mixed $last_name
      */
     public function setLastName($last_name): void
     {
         $this->last_name = $last_name;
     }

     /**
      * @return mixed
      */
     public function getEmail()
     {
         return $this->email;
     }

     /**
      * @param mixed $email
      */
     public function setEmail($email): void
     {
         $this->email = $email;
     }

     /**
      * @return mixed
      */
     public function getPassword()
     {
         return $this->password;
     }

     /**
      * @param mixed $password
      */
     public function setPassword($password): void
     {
         $this->password = $password;
     }

     /**
      * @return mixed
      */
     public function getPhoneno()
     {
         return $this->phoneno;
     }

     /**
      * @param mixed $phoneno
      */
     public function setPhoneno($phoneno): void
     {
         $this->phoneno = $phoneno;
     }

     /**
      * @return mixed
      */
     public function getBirth()
     {
         return $this->birth;
     }

     /**
      * @param mixed $birth
      */
     public function setBirth($birth): void
     {
         $this->birth = $birth;
     }

     /**
      * @return mixed
      */
     public function getGender()
     {
         return $this->gender;
     }

     /**
      * @param mixed $gender
      */
     public function setGender($gender): void
     {
         $this->gender = $gender;
     }
     /**
      * @return mixed
      */
     public function getType()
     {
         return $this->type;
     }

     /**
      * @param mixed $type
      */
     public function setType($type): void
     {
         $this->type = $type;
     }





 }
