@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Task') }}</div>

                <div class="card-body">

                    <div><a href="/task/add">add item</a></div>
                    <table class="table">
                        <tr>
                            <th><a href="/task?sort=title">Title</a></th>
                            <th><a href="/task?sort=content">Content</a></th>
                            <th></th>
                        </tr>
                        @foreach ($items as $item)
                        <tr>
                            <td>{{$item->title}}</td>
                            <td>{{$item->content}}</td>
                            <td>
                                <a href="/task/show?id={{$item->id}}">show</a> | 
                                <a href="/task/edit?id={{$item->id}}">edit</a> | 
                                <a href="/task/del?id={{$item->id}}">del</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {{ $items->appends(['sort' => $sort])->links() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection