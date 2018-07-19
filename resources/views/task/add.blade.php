@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Task') }}</div>

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
                    
                    <form action="/task/add" method="post">
                        {{ csrf_field() }}
                        <table class="table">
                            <tr>
                                <th>title: </th>
                                <td><input type="text" name="title" value="{{old('title')}}"></td>
                            </tr>
                            <tr>
                                <th>content: </th>
                                <td><input type="text" name="content" vaule="{{old('content')}}"></td>
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