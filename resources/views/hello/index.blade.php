@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Hello') }}</div>

                <div class="card-body">

                    @if (Auth::check())
                    <p>USER: {{$user->name . ' (' . $user->email . ')'}}</p>
                    @else
                    <p>※ログインしていません。(<a href="/login">ログイン</a>|<a href="/register">登録</a>)</p>
                    @endif
                    <div><a href="/hello/add">add item</a></div>
                    <table class="table">
                        <tr>
                            <th><a href="/hello?sort=name">Name</a></th>
                            <th><a href="/hello?sort=mail">Mail</a></th>
                            <th><a href="/hello?sort=age">Age</a></th>
                            <th></th>
                        </tr>
                        @foreach ($items as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->mail}}</td>
                            <td>{{$item->age}}</td>
                            <td>
                                <a href="/hello/show?id={{$item->id}}">show</a> | 
                                <a href="/hello/edit?id={{$item->id}}">edit</a> | 
                                <a href="/hello/del?id={{$item->id}}">del</a>
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