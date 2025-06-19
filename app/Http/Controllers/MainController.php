<?php

namespace App\Http\Controllers;

use App\Rules\ValidPassword;
use App\Rules\ValidPhoneFormat;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MainController extends Controller
{
    public function index()
    {
        $title = 'Home';

        return view("index", compact("title"));
    }

    public function contacts()
    {
        return view("contacts");
    }

    public function sendFeedback(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'phone' => ['required', new ValidPhoneFormat]
        ]);

        return redirect()->back()->with('success', 'Feedback successfully sent!');
    }
    public function students()
    {
        $genders = [
            'Male',
            'Female',
            'Other'
        ];
        $departments = [
            'CSE',
            'IT',
            'ECE',
            'Civil',
            'Mech'
        ];
        $courses = [
            'Web Technologies',
            'Data Structures',
            'Digital Electronics',
            'Structural Analysis',
            'Thermodynamics',
            'Embedded Systems',
            'Data Mining',
            'Cybersecurity'
        ];
        return view("students", compact('departments', 'courses', 'genders'));
    }

    public function registerStudent(Request $request)
    {
        $request->validate([
            'last-name' => 'required|string|max:36',
            'first-name' => 'required|string|max:36',
            'fathers-name' => 'required|string|max:36',
            'date-of-birth' => [
                'required',
                'date',
                'before:-18 years'
            ],
            'email' => 'required|email',
            'phone-number' => [
                'required',
                new ValidPhoneFormat
            ],
            'password' => [
                'required',
                'string',
                'min:8',
                new ValidPassword,
            ],
            'student-gender' => 'required',
            'student-department' => 'required',
            'student-course' => 'required',
            'student-photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'city' => 'required|string|max:50',
            'address' => 'required|string|max:100'
        ]);

        return redirect()->back()->with('success', value: 'Students successfully registered!');
    }
}
