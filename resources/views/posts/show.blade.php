

@extends('posts.layouts.head')
@section('title')
Posts
@endsection
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">S No.</th>
      <th scope="col">Post Title</th>
      <th scope="col">Post Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	<a href="{{ route('posts.create') }}" class="btn btn-primary">Add New Post</a>
  	@foreach($posts as $post)
    <tr scope="row">
      <td>{{ $loop->index + 1 }}</td>
      <td>{{ $post->name }}</td>
      <td>{{ $post->description }}</td>
      <td>
      	<a class="btn btn-info" href="{{ route('posts.edit', $post->id) }}">Edit</a>
      	
      	<form id="deletedata-{{ $post->id }}" method="POST" action="{{route('posts.destroy', $post->id) }}" style="display: none"/>
      		@csrf
      		{{ method_field('DELETE') }}

      	</form>
      <a class="btn btn-danger" onclick="if(confirm('Are you want delete')){
      	event.preventDefault();
      	document.getElementById('deletedata-{{ $post->id}}').submit();
      }">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>