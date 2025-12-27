<x-mail::message>
hello bạn
@if (!empty($data['name']))
<h3>Name: {{$data['name']}}</h3>
@endif

<h3>Email: {{$data['email']}}</h3>

@if (!empty($data['phone']))
<h3>Phone: {{$data['phone']}}</h3>
@endif

@if (!empty($data['message']))
<h3>Message: {{$data['message']}}</h3>
@endif

Thanks,<br>
RoadPedal
</x-mail::message>
