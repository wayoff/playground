@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update Category: {{$category->name}} </div>
                <div class="panel-body">
                    <form action="/categories/{{$category->id}}" method="POST" role="form">
                        {!! csrf_field() !!}
                        {!! method_field('PUT') !!}

                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Category name" value="{{ $category->name }}">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea class="form-control" name="description"> {{ $category->description }} </textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Parent Category</label>
                            <select name="parent_id" class="form-control">
                                <option value="0"> -- None -- </option>
                                @foreach($categories as $item)
                                    <option value="{{ $item->id }}" {{ $category->parent_id == $item->id ? 'selected' : '' }}>
                                        {{ $item->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Active</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="active" value="false" checked="checked">
                                    No
                                </label>
                                <label>
                                    <input type="radio" name="active" value="true">
                                    Yes
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
