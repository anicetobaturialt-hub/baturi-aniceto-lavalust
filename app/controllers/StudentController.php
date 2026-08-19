<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
    {
        $data['title'] = 'Student Home - [Your Name]';
        $this->call->view('student_home', $data);
    }

    public function profile()
    {
        $student = [
            'student_id' => 'MCC2024-00033',
            'name'       => 'Aniceto S. Baturi',
            'course'     => 'BS Information Technology',
            'year'       => '3rd Year',
            'section'    => 'F1',
            'email'      => 'anicetobaturi@gmail.com'
        ];

        $this->call->view('student_profile', $student);
    }
}