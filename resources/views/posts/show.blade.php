@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <x-card :title="$post->title">
        <p class="text-muted small">Dibuat: {{ $post->created_at->format('d M Y H:i') }}</p>
        <p>{{ $post->content }}</p>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary btn-sm">← Kembali</a>
    </x-card>
@endsection