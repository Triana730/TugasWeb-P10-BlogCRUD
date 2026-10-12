@extends('layouts.app')

@section('title', 'Daftar Postingan')

@section('content')
    <h3 class="mb-3">Daftar Postingan</h3>

    @forelse ($posts as $post)
        <x-card :title="$post->title">
            <p class="text-muted">{{ Str::limit($post->content, 120) }}</p>

            <a href="{{ route('posts.show', $post) }}" class="btn btn-info btn-sm">Lihat</a>
            <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning btn-sm">Edit</a>

            <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline"
                  onsubmit="return confirm('Yakin hapus postingan ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
            </form>
        </x-card>
    @empty
        <x-alert type="warning">Belum ada postingan. Silakan tambah dulu.</x-alert>
    @endforelse

    {{ $posts->links() }}
@endsection