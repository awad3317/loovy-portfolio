<?php

namespace App\Livewire;

use Livewire\Component;

class Contactform extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;
    
    public $successMessage = '';
    public $errorMessage = '';

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'subject' => 'required|min:5',
        'message' => 'required|min:10',
    ];

    protected $messages = [
        'name.required' => 'حقل الاسم مطلوب.',
        'name.min' => 'يجب أن يكون الاسم على الأقل 3 أحرف.',
        'email.required' => 'حقل البريد الإلكتروني مطلوب.',
        'email.email' => 'يجب إدخال بريد إلكتروني صالح.',
        'subject.required' => 'حقل الموضوع مطلوب.',
        'subject.min' => 'يجب أن يكون الموضوع على الأقل 5 أحرف.',
        'message.required' => 'حقل الرسالة مطلوب.',
        'message.min' => 'يجب أن تكون الرسالة على الأقل 10 أحرف.',
    ];

    public function submitForm()
    {
        $this->validate();

        try {
            // إرسال البريد الإلكتروني
            // Mail::to('your-email@example.com')->send(new ContactFormSubmitted(
            //     $this->name,
            //     $this->email,
            //     $this->subject,
            //     $this->message
            // ));

            $this->successMessage = 'تم إرسال رسالتك بنجاح! شكراً لتواصلك معنا.';
            
            // إعادة تعيين الحقول بعد الإرسال الناجح
            $this->reset(['name', 'email', 'subject', 'message']);
            
        } catch (\Exception $e) {
            $this->errorMessage = 'حدث خطأ أثناء إرسال الرسالة. يرجى المحاولة مرة أخرى لاحقاً.';
        }
    }

    public function render()
    {
        return view('livewire.contactform');
    }
}
