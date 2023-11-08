<?php
class Home
{
    public function index()
    {
        echo 'Trang chu';
    }

    public function detail()
    {
    }

    public function search()
    {
        $keyword = $_GET['keyword'];
        echo $keyword;
    }
}
