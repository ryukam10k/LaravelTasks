@extends('layouts.helloapp')

@section('title', 'Person.index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <div><a href="/person/add">Add</a></div>
    <table>
        <tr>
            <th>Data</th>
            <th></th>
        </tr>
        @foreach ($items as $item)
        <tr>
            <td>{{$item->getData()}}</td>
            <td>
                <a href="/person/edit?id={{$item->id}}">edit | </a>
                <a href="/person/del?id={{$item->id}}">del</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection

@section('footer')
copyright 2018 ryukam10k.
@endsection