@extends('layouts.app')

@section('content')
<div class="container">
    <p></p>
    <p></p>
     <a href="{{route('student.dashboard')}}" class="btn btn-success">Orders</a> 
     <a href="{{route('student.purchased')}}"class="btn btn-info">Purchased</a> 
     <a href="{{route('assignment.edit',['id'=>0])}}"class="btn btn-info">Create order</a> 
     <p></p>
     <p></p>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">Project Name</th>
                <th scope="col">Deadline Name</th>
                <th scope="col">Budget</th>
                <th scope="col">Status</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($assignments as $assignment)
                    <tr>
                        <td><a href="{{route('assignment.show',['id'=>$assignment->id])}}">{{$assignment->name}}</a></td>
                        <td>{{$assignment->deadline}}</td>
                        <td>${{$assignment->price}}</td>
                        <td>{{$assignment->statustext}}</td>
                    </tr>
                @endforeach  
                  
            </tbody>
        </table>
        {{ $assignments->links() }}
<br>
    
    
</div>
@endsection

@section('script')

@endsection
