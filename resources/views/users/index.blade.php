@foreach ($users as $user)
<div>
    {{ $loop->iteration }}. {{ $user->name }}
</div>
@endforeach