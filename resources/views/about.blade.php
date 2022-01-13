@extends('layouts.main')

@section('content')
<h1>About</h1>
<ul>
    <li>{{ $name }}</li>
    <li>{{ $email }}</li>
    <li>{{ $site }}</li>
</ul>
@endsection
