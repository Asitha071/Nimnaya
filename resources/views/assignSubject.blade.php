@foreach($user as $users)
{{$users->name}} {{$users->email}} {{$users->dob}} {{$users->usertype}}<br/><br>
@endforeach