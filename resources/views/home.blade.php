@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <div class="columns is-centered">
        <div class="column is-two-thirds">
            <div class="notification">
                @if (session('status'))
                    <div class="notification is-success">
                        {{ session('status') }}
                    </div>
                @endif
                <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->created_at->diffForHumans() }}</td>
                                <td>
                                    <span class="buttons is-centered">
                                        <a class="button is-info is-small" href="/post/{{$post->id}}">View</a>
                                        <a class="button is-success is-small" href="/post/{{$post->id}}/edit">Edit</a>
                                        <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button class="button is-danger is-small">Delete Post</button>
                                        </form>
                                    </span>
                                </td>
                            </tr>                                    
                        @empty
                            <tr>
                                <td>---</td>
                                <td>no posts were found</td>
                                <td>---</td>
                                <td>
                                    <span class="buttons">
                                        <div class="button is-info is-small" disabled>View</div>
                                        <div class="button is-success is-small" disabled>Edit</div>
                                        <div class="button is-danger is-small" disabled>Delete</div>
                                    </span>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>
@endsection
