<?php
namespace src\models;
use \core\Model;

class Student extends Model {
    
    private int $id;
    private $name;
    private $password;
    private $email;
    private $phone;
    private $course;
    private $status;
    private $created_at;
    private $update_at;

    public function setId($n) {
        $this->id = $n;
    }

    public function getId() {
        return $this->id ?? '';
    }       

    public function setName($n) {
        $this->name = $n;
    }

    public function getName() {
        return $this->name ?? '';
    } 

    public function setEmail($n) {
        $this->email = $n;
    }

    public function getEmail() {
        return $this->email ?? '';
    } 

    public function setPassword($n) {
        $this->password = $n;
    }

    public function getPassword() {
        return $this->password ?? '';
    } 

    public function setPhone($n) {
        $this->phone = $n;
    }

    public function getPhone() {
        return $this->phone ?? '';
    } 

    public function setCourse($n) {
        $this->course = $n;
    }

    public function getCourse() {
        return $this->course ?? '';
    } 

    public function setStatus($n) {
        $this->status = $n;
    }

    public function getStatus() {
        return $this->status ?? '';
    } 

    public function setCreated_at($n) {
        $this->created_at = $n;
    }

    public function getCreated_at() {
        return $this->created_at ?? '';
    } 

    public function setUpdate_at($n) {
        $this->update_at = $n;
    }

    public function getUpdate_at() {
        return $this->update_at ?? '';
    } 

    public function addStudent() {
        Student::insert([
            'name'       => $this->getName(),
            'email'      => $this->getEmail(),
            'password'   => $this->getPassword(),
            'phone'      => $this->getPhone(),
            'course'     => $this->getCourse(),
            'status'     => $this->getStatus(),
            'created_at' => $this->getCreated_at(),
            'updated_at' => $this->getUpdate_at()
        ])->execute();
    }

    public function editStudent() {
        Student::update()
            ->set('name',       $this->getName())
            ->set('email',      $this->getEmail())
            ->set('password',   $this->getPassword())
            ->set('phone',      $this->getPhone())
            ->set('course',     $this->getCourse())
            ->set('status',     $this->getStatus())
            ->set('updated_at', $this->getUpdate_at())
            ->where('id',       $this->getId())
        ->execute();
    }

    public function delStudent() {        
        Student::delete()->where('id', $this->getId())->execute();
    }

}