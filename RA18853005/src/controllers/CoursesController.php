<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Course;

class CoursesController extends Controller {

    public function courses() {
        $courses = Course::select()->get();
        $this->render('courses',[
            'courses' => $courses
        ]);
    }

    public function coursesAdd() {
        $this->render('coursesadd');
    }

    public function coursesAddAction() {    
       
        $cs = new Course();
            $cs->setNameCourse(filter_input(INPUT_POST,'nameCourse'));
            $cs->setDescription(filter_input(INPUT_POST,'description'));
            $cs->setDateStart(filter_input(INPUT_POST,'dateStart'));
            $cs->setDateFinish(filter_input(INPUT_POST,'dateFinish'));
            $cs->setStatus(trim(filter_input(INPUT_POST,'status')));
            $cs->setDateFinish(filter_input(INPUT_POST,'dateFinish'));
            $cs->setCreated_at(date('Y-m-d H:i:s'));
            $cs->setUpdate_at(date('Y-m-d H:i:s'));        
        $cs->addCourse();
        $this->redirect('/courses');
    }
    
    public function courseEdit($args) {

        $course = Course::select()->find($args['id']);

        $this->render('courseedit', ['course' => $course]);
    }

    public function courseEditAction($course) {

            $cs = new Course();
            $cs->setNameCourse(filter_input(INPUT_POST,'nameCourse'));
            $cs->setDescription(filter_input(INPUT_POST,'description'));
            $cs->setDateStart(filter_input(INPUT_POST,'dateStart'));
            $cs->setDateFinish(filter_input(INPUT_POST,'dateFinish'));
            $cs->setStatus(trim(filter_input(INPUT_POST,'status')));
            $cs->setDateFinish(filter_input(INPUT_POST,'dateFinish'));
            $cs->setUpdate_at(date('Y-m-d H:i:s')); 
            $cs->setId($course['id']);
        $cs->editCourse();
        $this->redirect('/courses');     
    }

    public function courseDelAction($course) {   
            $cs = new Course();
            $cs->setId($course['id']);
        $cs->delCourse();
        $this->redirect('/courses'); 
    }
}