@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Task - Show') }}</div>

                <div class="card-body">
                    
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
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection