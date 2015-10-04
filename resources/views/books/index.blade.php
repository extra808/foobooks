@extends('layouts.master')

@section('content')
<ul>
    <li>First book
    @if ($title)
        {{-- Output the $title variable. --}}
        <li>{{ $title }}
    @endif
</ul>
@endsection

@section('equalSide')
<ol>
    <li>No Author
    <li>Herman Melville
</ol>
@endsection