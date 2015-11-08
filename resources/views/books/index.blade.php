@extends('layouts.master')

@section('content')
<table>
<tr>
    <th>Delete</th>
    <th>Title</th>
    <th>Author</th>
    <th>Published</th>
    <th>Pages</th>
    <th>Cover</th>
</tr>

    @forelse($books as $book)
    <tr>
        <td>
        <form method="POST" action="/deleteBook">
        {!! csrf_field() !!}
        <label for="book{{ $book->id }}" class="sr-only">Delete {{ $book->title }}</label>
        <input type="submit" name="Delete" value="Delete" id="book{{ $book->id }}">
        </form>
        </td>
        <td><a href="{{ $book->purchase_link }}">{{ $book->title }}</a></td>
        <td>{{ $book->author }}</td>
        <td>{{ $book->published }}</td>
        <td>{{ $book->page_count }}</td>
        <td><img src="{{ $book->cover }}"></td>
    </tr>
    @empty
    <tr>
        <td>
        <form method="POST" action="/deleteBook">
        {!! csrf_field() !!}
        <label for="book{{ $book->id }}" class="sr-only">Delete {{ $book->title }}</label>
        <input type="submit" name="Delete" value="Delete" id="book{{ $book->id }}">
        </form>
        </td>
        <td><a href="{{ $book->purchase_link }}">{{ $book->title }}</a></td>
        <td>{{ $book->author }}</td>
        <td>{{ $book->published }}</td>
        <td>{{ $book->page_count }}</td>
        <td><img src="{{ $book->cover }}"></td>
    </tr>
    @endforelse
</table>
@endsection

@section('equalSide')

@endsection