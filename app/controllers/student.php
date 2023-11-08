<?php
class Student extends Controller
{
    public function index()
    {
        echo 'list student';
    }

    public function showStudent()
    {
        $student = $this->model('StudentModel');
        $data = $student->getStudentList();

        print_r($data);
    }
}
