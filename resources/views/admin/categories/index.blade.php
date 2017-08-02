@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Categories</div>
                <div class="panel-body">
                    <div class="pull-right">
                        <a href="/categories/create" class="btn btn-primary">
                            Create
                        </a>
                    </div>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th> ID </th>
                                <th> Name </th>
                                <th> Description </th>
                                <th> Actions </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($categories->isEmpty())
                                <tr>
                                    <td colspan="10" class="text-center">
                                        No data was found
                                    </td>
                                </tr>
                            @else
                                @foreach($categories as $category)
                                    <tr>
                                        <td> {{$category->id}} </td>
                                        <td> {{$category->name}} </td>
                                        <td> {{$category->description}} </td>
                                        <td>
                                            <a href="/categories/{{ $category->id }}/edit">
                                                Update
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
