<?php
class StudentModel
{
    public function getStudentList()
    {
        return [
            'hs1',
            'hs2',
            'hs3'
        ];
    }
    public function getStudent($id)
    {
        $data = [
            'hs1',
            'hs2',
            'hs3'
        ];
        return $data[$id];
    }
}
