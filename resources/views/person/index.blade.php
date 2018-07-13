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
        @foreach ($items as $item)
        <tr>
            <td>{{$item->getData()}}</td>
            <td>
            @if ($item->boards != null)
                <table widht="100%">
                @foreach ($item->boards as $obj)
                    <tr><td>{{$obj->getData()}}</td></tr>
                @endforeach
                </table>
            @endif
            </td>
            <td>
                <a href="/person/edit?id={{$item->id}}">edit | </a>
                <a href="/person/del?id={{$item->id}}">del</a>
            </td>
        </tr>
        @endforeach
    </table>
    <div><a href="/board">go to board</a></div>
@endsection

@section('footer')
copyright 2018 ryukam10k.
@endsection