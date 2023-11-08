<?php
class Student extends Controller
{
    public $data = [];
    public function index()
    {
        echo 'list student';
    }

    public function showStudent()
    {
        $student = $this->model('StudentModel');
        $dataStudent = $student->getStudentList();

        $title = 'dshs';

        $this->data['showStudent'] = $dataStudent;
        $this->data['pageTitle'] = $title;

        $this->render('students/list', $this->data);
    }

    public function addStudent($id = 0)
    {
        $student = $this->model('StudentModel');
        $this->data['info'] = $student->getStudent($id);
        $this->render('students/add', $this->data);
    }
}
