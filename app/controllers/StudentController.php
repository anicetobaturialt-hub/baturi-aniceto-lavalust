<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
    {
        session_start();
        $data['title'] = 'Student Profile Hub ';
        $data['logged_in'] = isset($_SESSION['student_access']) && $_SESSION['student_access'] === true;
        $this->call->view('student_home', $data);
    }

    public function toggle()
    {
        session_start();
        $_SESSION['student_access'] = !(isset($_SESSION['student_access']) && $_SESSION['student_access'] === true);
        redirect('student');
    }

    public function profile()
    {
        $student = [
            'student_id' => 'MCC2024-00033',
            'name'       => 'ANICETO S. BATURI',
            'course'     => 'BS Information Technology',
            'year'       => '3rd Year',
            'section'    => 'F1',
            'email'      => 'anicetobaturi@gmail.com'
        ];

        $this->call->view('student_profile', $student);
    }
}