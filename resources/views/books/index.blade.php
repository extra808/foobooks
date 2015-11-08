@extends('layouts.master')

@section('content')
<table>
<tr>
    <th>Title</th>
    <th>Author</th>
    <th>Published</th>
    <th>Pages</th>
    <th>Cover</th>
</tr>

    @foreach($books as $book)
    <tr>
        <th><a href="{{ $book->purchase_link }}">{{ $book->title }}</a></th>
        <th>{{ $book->author }}</th>
        <th>{{ $book->published }}</th>
        <th>{{ $book->page_count }}</th>
        <th><img src="{{ $book->cover }}"></th>
    </tr>
    @endforeach
</table>
@endsection

@section('equalSide')
<ol>
    <li>No Author
    <li>Herman Melville
</ol>
@endsection