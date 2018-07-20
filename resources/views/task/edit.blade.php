@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Task - Edit') }}</div>

                <div class="card-body">

                    @if (count($errors) > 0)
                    <div>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    
                    <form action="/task/edit" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$form->id}}">
                        <table class="table">
                            <tr>
                                <th>title: </th>
                                <td><input type="text" name="title" value="{{$form->title}}"></td>
                            </tr>
                            <tr>
                                <th>content: </th>
                                <td><input type="text" name="content" value="{{$form->content}}"></td>
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