@extends('layouts.app')

@section('title', 'Edit Postingan')

@section('content')
    <h3 class="mb-3">Edit Postingan</h3>

    <x-card>
        <form action="{{ route('posts.update', $post) }}" method="POST">
            @csrf
            @method('PUT')
            @include('posts._form')
        </form>
    </x-card>
@endsection