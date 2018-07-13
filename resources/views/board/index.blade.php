@extends('layouts.helloapp')

@section('title', 'Board.index')

@section('menubar')
    @parent
    ボード・ページ
@endsection

@section('content')
    <div><a href="/board/add">Add</a></div>
    <table>
        <tr><th>Data</th></tr>
        @foreach ($items as $item)
        <tr>
            <td>{{$item->getData()}}</td>
        </tr>
        @endforeach
    </table>
@endsection

@section('footer')
copyright 2018 ryukam10k.
@endsection