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

        $this->data['sub_content']['show_student'] = $dataStudent;
        $this->data['sub_content']['page_title'] = $title;
        $this->data['page_title'] = $title;
        $this->data['content'] = 'students/list';

        $this->render('layouts/client', $this->data);
    }

    public function addStudent($id = 0)
    {
        $student = $this->model('StudentModel');
        $this->data['sub_content']['info'] = $student->getStudent($id);
        $this->data['sub_content']['title'] = 'them hs ne';
        $this->data['page_title'] = 'them hs ne';
        $this->data['content'] = 'students/add';
        $this->render('layouts/client', $this->data);
    }
}
