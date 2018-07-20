@extends('layouts.admin')

@section('header')
    Writers
@endsection
@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Status</th>
                <th>Rating</th>
                <th>Level</th>
               
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td><a href="{{route('teacher.edit',['id'=>$item->id])}}">{{$item->name}}</a></td>
                    <td>
                        @if ($item->status != 0) 
                            <a title="Disable this account" href="{{route('user.deactive',['id'=>$item->id])}}"><i class="fa fa-toggle-on fa-2x" aria-hidden="true"></i>
                            </a>
                        @else
                            <a title="Enable this account" style="color:red;" href="{{route('user.active',['id'=>$item->id])}}"><i class="fa fa-toggle-off fa-2x" aria-hidden="true"></i>
                            </a>
                        @endif
                    </td>
                    <td>{{$item->rating}}</td>
                    <td>{{isset($item->level->name) ? $item->level->name : "" }}</td>
                    
                    <td>
                        <form onsubmit="return confirm('Do you really want to remove this item?');" action="{{route('teacher.destroy',['teacher'=>$item->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $items->links() }}

@endsection

@section('script')

@endsection