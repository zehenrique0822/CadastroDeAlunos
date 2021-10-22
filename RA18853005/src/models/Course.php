<?php
namespace src\models;
use \core\Model;

class Course extends Model {
    
    private int $id;
    private $nameCourse;
    private $description;
    private $dateStart;
    private $dateFinish;    
    private $status;
    private $created_at;
    private $update_at;

    public function setId($n) {
        $this->id = $n;
    }
    
    public function getId() {
        return $this->id ?? '';
    }       
    
    public function setNameCourse($n) {
        $this->nameCourse = $n;
    }

    public function getNameCourse() {
        return $this->nameCourse ?? '';
    } 

    public function setDescription($n) {
        $this->description = $n;
    }

    public function getDescription() {
        return $this->description ?? '';
    } 

    public function setDateStart($n) {
        $this->dateStart = $n;
    }

    public function getDateStart() {
        return $this->dateStart ?? '';
    } 

    public function setDateFinish($n) {
        $this->dateFinish = $n;
    }

    public function getDateFinish() {
        return $this->dateFinish ?? '';
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

    public function addCourse() {
        Course::insert([
            'nameCourse'  => $this->getNameCourse(),
            'description' => $this->getDescription(),
            'dateStart'   => $this->getDateStart(),
            'dateFinish'  => $this->getDateFinish(),
            'status'      => $this->getStatus(),
            'created_at'  => $this->getCreated_at(),
            'updated_at'  => $this->getUpdate_at()
        ])->execute();
    }

    public function editCourse() { 
        Course::update()
            ->set('nameCourse', $this->getNameCourse())
            ->set('description',$this->getDescription())
            ->set('dateStart',  $this->getDateStart())
            ->set('dateFinish', $this->getDateFinish())
            ->set('status',     $this->getStatus())
            ->set('updated_at', $this->getUpdate_at())
            ->where('id',       $this->getId())
        ->execute();
    }

    public function delCourse() {        
        Course::delete()->where('id', $this->getId())->execute();
    }

}
