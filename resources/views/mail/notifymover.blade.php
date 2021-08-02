@component('mail::message')
# Your bid was accepted by {{ $name }}. We have sent your information to the respective customer. Please get in touch soon !!

Name : {{ $name }}    <br>
Email : {{ $email }}   <br>
Phone : {{ $phone }}   <br>


Thanks,<br>
Deem
@endcomponent