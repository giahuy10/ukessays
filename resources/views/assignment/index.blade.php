@extends('layouts.app')

@section('content')
<div class="container">
    <div class="recent-jobs">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="db-table">
                    <div class="db-info-head">
                        <h4>Available Assignments</h4>
                       
                    </div>
                    <div class="db-info-details table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Assignment</th>
                                <th scope="col">Deadline</th>
                                <th scope="col">Budget</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($assignments as $assignment)    
                            <tr>
                                <td><a href="{{route('assignment.show', ['id' => $assignment->id])}}">{{$assignment->name}} </a></td>
                                <td>{{$assignment->deadline}}</td>
                                <td>${{Auth::user()->user_type == 2 ? $assignment->price*0.4 : $assignment->price}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $assignments->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection
