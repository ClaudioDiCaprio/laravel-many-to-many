@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{route("tags.index")}}"><button type="button" class="btn btn-primary my-3">BackTo Index</button></a>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>{{$tag->title}}</h2>
                </div>

                    <div class="card-body">
                        <div class="mb-3 ">
                            <a href="{{route("tags.edit",$tag->id)}}"><button type="button" class="btn btn-warning">Modify</button></a>
                                <form action="{{route('tags.destroy', $tag->id)}}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-danger my-3">Delete</button>
                                </form>
                        </div>
                        <div class="mb-3">
                            Slug: {{$tag->slug}}
                        </div>
                        @if (count($tag->posts) > 0 )
                            <div class="mb-3">
                                <h3>Post's associated List</h3>
                                    <ul>
                                        @foreach ($tag->posts as $post)
                                            <li>{{$post->title}}</li>
                                        @endforeach
                                    </ul>
                            </div>
                        @endif
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
