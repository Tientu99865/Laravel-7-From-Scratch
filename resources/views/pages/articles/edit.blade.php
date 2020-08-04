@extends('layout/master')

@section('content')
    <section>
        <div id="wrapper">
            <div id="page" class="container">
                <div id="content">
                    <div class="title">
                        <h2>Edit Articel</h2>
                    </div>
                    <form action="articles/{{$article->id}}/update" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="content">
                            <div>
                                <label for="">Title: </label>
                                <input type="text" value="{{$article->title}}" style="width: 100%;height: 40px;margin-top: 15px" name="title">
                                @error('title')
                                    <div class="alert alert-danger" style="color: red">{{ $message }}</div>
                                @enderror
                            </div>
                            <div style="margin-top: 10px">
                                <label for="">Excerpt: </label>
                                <input type="text" value="{{$article->excerpt}}" style="width: 100%;height: 40px;margin-top: 15px" name="excerpt">
                                @error('excerpt')
                                <div class="alert alert-danger" style="color: red">{{ $message }}</div>
                                @enderror
                            </div>
                            <div style="margin-top: 10px">
                                <label for="">Body: </label>
                                <input type="text" value="{{$article->body}}" style="width: 100%;height: 40px;margin-top: 15px" name="body">
                                @error('body')
                                <div class="alert alert-danger" style="color: red">{{ $message }}</div>
                                @enderror
                            </div>
                            <input style="margin-top: 15px" type="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection