<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentMiddleware extends Middleware
{
    public function handle()
    {
        session_start();

        if (!isset($_SESSION['student_access']) || $_SESSION['student_access'] !== true) {
            // Set your own custom condition/message here for uniqueness
            $_SESSION['student_access'] = true; // simple auto-grant for demo; customize as needed
            // Example alternative: redirect if not allowed
            // redirect('student');
            // return;
        }
    }
}