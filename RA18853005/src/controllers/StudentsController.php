<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Course;
use \src\models\Student;

class StudentsController extends Controller {

    public function students() {
        $students = Student::select(['students.id', 'students.name','students.password','students.email','students.phone','courses.nameCourse','students.status','students.created_at','students.updated_at'])
        ->join('courses', 'students.course', '=', 'courses.id')
        ->get();

        $this->render('students',[
             'students' => $students
        ]);
    }

    public function studentsAdd() {
        $courses = Course::select()->where('status', 'ATIVO')->get();
        $this->render('studentsadd',[
            'courses' => $courses
        ]);
    }

    public function studentsAddAction() {
        
        $st = new Student();
        $st->setName(filter_input(INPUT_POST,'name'));
        $st->setEmail(filter_input(INPUT_POST,'email'));
        $st->setPassword(filter_input(INPUT_POST,'password'));
        $st->setPhone(filter_input(INPUT_POST,'phone'));
        $st->setCourse(filter_input(INPUT_POST,'course'));
        $st->setStatus(trim(filter_input(INPUT_POST,'status')));
        $st->setCreated_at(date('Y-m-d H:i:s'));
        $st->setUpdate_at(date('Y-m-d H:i:s'));        
    $st->addStudent();
    $this->redirect('/students');
    }

    public function studentEdit($args) {

        $students = Student::select(['students.id', 'students.name','students.password','students.email','students.phone','courses.id as idCourse','courses.nameCourse','students.status','students.created_at','students.updated_at'])
        ->join('courses', 'students.course', '=', 'courses.id')
        ->where('students.id','=',$args['id'])
        ->one();  

        $courses = Course::select()->where('status', 'ATIVO')->get();        

        $this->render('studentedit', ['students' => $students,'courses' => $courses]);
    }   

    public function studentEditAction($students) {

        $st = new Student();
        $st->setName(filter_input(INPUT_POST,'name'));
        $st->setEmail(filter_input(INPUT_POST,'email'));
        $st->setPassword(filter_input(INPUT_POST,'password'));
        $st->setPhone(filter_input(INPUT_POST,'phone'));
        $st->setCourse(filter_input(INPUT_POST,'course'));
        $st->setStatus(trim(filter_input(INPUT_POST,'status')));
        $st->setUpdate_at(date('Y-m-d H:i:s')); 
        $st->setId($students['id']);       
    $st->editStudent();
    $this->redirect('/students');
    }

    public function studentDelAction($student) {   
            $st = new Student();
            $st->setId($student['id']);
        $st->delStudent();
        $this->redirect('/students'); 
    }
    
}