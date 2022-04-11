@extends('admin.layouts.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <a href="{{route('admin.post.create')}}" class="btn btn-primary">crea un post</a>

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Contenuto</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Azioni</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($tags as $tag)
                            <tr>
                                <td>{{$tag->id}}</td>
                                <td>{{$tag->name}}</td>
                                <td>{{$tag->slug}}</td>
                                
                                <td class="d-flex">
                                    <a href="{{route('admin.post.show', $tag->id)}}" class="btn btn-primary">vedi</a>
                                    <a href="{{route('admin.post.edit', $tag->id)}}" class="btn btn-secondary">modifica</a>

                                    <form method="POST" action="{{route('admin.post.destroy', $tag->id)}}">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Elimina</button>
                                    </form>
                                
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>

        
            </div>
        </div>
    </div>
@endsection