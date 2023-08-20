@extends('master')

@section('title', 'Content CRUD')

@section('content')


        <h1>First time to my blog content.</h1>

            <div class="mb-2">
                <a target=_blank href="{{ url('content/create') }}" role="button" class="btn btn-sm btn-success">Create</a>
            </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <td >ID</td>
                    <td>Topic</td>
                    <td>Tags</td>
                    <td>links</td>
                    <td>Create Date</td>
                    <td>Actions</td>
                </tr>
            </thead>
        <tbody>
                 @foreach ($contents as $content)
                <tr>
                    <td>{{ $content->id }}</td>
                    <td><a href="#">{{$content->topic }}</a></td>
                    <td>{{ $content->tags }}</td>
                    <td><a target=_blank href="{{ $content->links }}">{{ $content->links }}</a></td>
                    <td>{{ $content->created_at }}</td>

                    <td>
                        <a href="{{ url('content/{$content->id}/edit') }} role="button"
                            class="btn btn-sm btn-warning">Edit</a>
                        </td>

            </tr>
                @endforeach
            </tbody>
        </table>
        @endsection
