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
            <th>Person</th>
            <th>Board</th>
            <th></th>
        </tr>
        @foreach ($hasItems as $item)
            <tr>
                <td>{{$item->getData()}}</td>
                <td>
                    <table widht="100%">
                    @foreach ($item->boards as $obj)
                        <tr><td>{{$obj->getData()}}</td></tr>
                    @endforeach
                    </table>
                </td>
                <td>
                    <a href="/person/edit">edit | </a>
                    <a href="/person/del">del</a>
                </td>
            </tr>
        @endforeach
    </table>
    <div style="margin:10px;"></div>
    <table>
        <tr>
            <th>Person</th>
        </tr>
        @foreach ($noItems as $item)
            <tr>
                <td>{{$item->getData()}}</td>
            </tr>
        @endforeach
    </table>
    <div><a href="/board">go to board</a></div>
@endsection

@section('footer')
copyright 2018 ryukam10k.
@endsection