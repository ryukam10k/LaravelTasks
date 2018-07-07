@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <div><a href="/hello/add">add item</a></div>
    <table>
        <tr><th>Name</th><th>Mail</th><th>Age</th><th></th></tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->mail}}</td>
                <td>{{$item->age}}</td>
                <td><a href="/hello/edit?id={{$item->id}}">edit</a></td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
copyright 2017 ryuya.
@endsection