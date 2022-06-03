@extends('layouts.app')

@section('content')
    <div class="container-fluid w-75 mx-auto">
        <div class="row">
            @if(session('deleted-message'))
                <div class="col-12">
                    <div class="alert alert-warning">
                        {{session('deleted-message')}}
                    </div>
                </div>
            @endif

            @if(session('message'))
                <div class="col-12">
                    <div class="alert alert-success">
                        {{session('message')}}
                    </div>
                </div>
            @endif

           {{--  <div class="col-12">
                <a href="{{route('admin.posts.create')}}" class="btn btn-lg btn-primary">Pubblica un nuovo post</a>
            </div> --}}

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Coach: {{Auth::user()->name}}</th>
                        <th>Categories</th>
                        <th>Comments</th>
                        <th>Created</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pokemons as $pokemon)
                        <tr>
                            <td>
                                <a href="{{route("admin.pokemons.show", $pokemon)}}">
                                    {{ $pokemon->title }}
                                </a>
                            </td>
                            <td>
                                {{ $pokemon->name }}
                            </td>
                            <td>
                                {{-- @foreach ($post->categories as $category)
                                    <span class="badge rounded-pill" style="background-color: {{$category->color}}" >{{$category->name}}</span>
                                @endforeach --}}
                            </td>
                            <td>
                                <img src="{{asset("assets/img") . '/'. $pokemon->name . '.png'}}" class="img-fluid rounded-start" alt="Picture of {{$pokemon->name}}">
                            </td>
                            <td>
                                {{-- {{ $post->created_at }} --}}
                            </td>
                            {{-- <td class="d-flex">
                                <a href="{{ route("admin.posts.edit", $post) }}" class="btn btn-success btn-sm me-2" >Edit</a> --}}


                                {{-- <form action="{{route('admin.posts.destroy', $post)}}" method="POST" class="post-form-destroyer" post-title="{{$post->title}}">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"  class="btn btn-danger btn-sm ">Delete</a>
                                </form> --}}
                            {{-- </td> --}}
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">There are no posts to show</td>
                        </tr>
                    @endforelse

                </tbody>
                <div class="col-8">
                    {{ $pokemons->links() }}
                </div>
            </table>
        </div>
    </div>
@endsection
