@extends('layouts.app')

@section('title', 'Tambah Postingan')

@section('content')
    <h3 class="mb-3">Tambah Postingan</h3>

    <x-card>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            @include('posts._form')
        </form>
    </x-card>
@endsection