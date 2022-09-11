@component('mail::message')
# Dear Donors

# Someone Has Submitted a Request

# So, We Suggest To Visit "Patients Cases Page"

# Sometimes a Drop of Blood Equals a Human Soul

اعزائي المتبرعين

شخص ما قدم طلب

"لذا نقترح زيارة "صفحة حالات المرضى

احيانا قطرة دم تعادل روح الانسان

@component('mail::button', ['url' => 'http://127.0.0.1:8000/patients_cases'])
Viste Page
@endcomponent

Thanks,<br>
وشكرا,<br>

{{-- {{ config('app.name') }} --}}
@endcomponent
