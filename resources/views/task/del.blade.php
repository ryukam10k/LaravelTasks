@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Task - Delete') }}</div>

                <div class="card-body">
                    <p>Are you sure you want to delete it?</p>
                    <form action="/task/del" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$form->id}}">
                        <table class="table">
                            <tr>
                                <th>title: </th>
                                <td>{{$form->title}}</td>
                            </tr>
                            <tr>
                                <th>content: </th>
                                <td>{{$form->content}}</td>
                            </tr>
                            <tr>
                                <th></th>
                                <td><input type="submit" value="send"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection