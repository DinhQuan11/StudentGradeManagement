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

        $this->data['sub_content']['showStudent'] = $dataStudent;
        $this->data['sub_content']['page_title'] = $title;
        $this->data['content'] = 'student/add';
        $this->data['page_title'] = $title;

        $this->render('students/list', $this->data);
    }

    public function addStudent($id = 0)
    {
        $student = $this->model('StudentModel');
        $this->data['sub_content']['info'] = $student->getStudent($id);
        $this->data['sub_content']['info'] = $student->getStudent($id);
        $this->data['content'] = 'student/add';
        $this->render('layouts/client', $this->data);
    }
}
