<?php

namespace App\Http\Livewire;

use App\Mail\ContactMail;
use App\Models\Contact;
use App\Models\Discuss;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactLivewire extends Component
{
    public $discuss;
    public $fname;
    public $lname;
    public $age;
    public $gender;
    public $phone;
    public $whatsapp;
    public $telegram;
    public $course;
    public $email;
    public $message;

    public function mount()
    {
        $this->discuss = Discuss::first();
    }

    protected $rules = [
        'fname' => 'required|string|min:2|max:50',
        'lname' => 'required|string|min:2|max:50',
        'age' => 'required|integer|min:1|max:100',
        'gender' => 'required|in:male,female,other',
        'phone' => 'required|string|min:5|max:15',
        'whatsapp' => 'nullable|string|min:5|max:15',
        'telegram' => 'nullable|string|min:5|max:50',
        'course' => 'required|string|max:100',
        'email' => 'required|email|max:100',
        'message' => 'nullable|string|max:500',
    ];

    protected $messages = [
        'fname.required' => 'First name is required.',
        'lname.required' => 'Last name is required.',
        'age.required' => 'Age is required.',
        'gender.required' => 'Gender is required.',
        'phone.required' => 'Phone number is required.',
        'email.required' => 'Email address is required.',
        'course.required' => 'Please select a course.',
    ];

    public function save()
    {
         $this->validate();

       $data =  Contact::create([
            'lname' => $this->lname,
            'fname' => $this->fname,
            'email' => $this->email,
            'course'=>$this->course,
            'gender'=>$this->gender,
            'phone'=>$this->phone,
            'age'=>$this->age,
            'whatsapp'=>$this->whatsapp,
            'telegram'=>$this->telegram,
            'message'=>$this->message
        ]);

        Mail::to('Abjedacademy@gmail.com')->send(new ContactMail($data));
        $this->reset([
            'fname', 'lname', 'age', 'gender', 'phone',
            'whatsapp', 'telegram', 'course', 'email', 'message',
        ]);

        session()->flash('success', 'Your Application have been saved successfully.');
    }

    public function render()
    {
        return view('livewire.contact-livewire');
    }
}
