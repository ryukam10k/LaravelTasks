@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
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