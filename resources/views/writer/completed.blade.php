@extends('layouts.app')

@section('content')
<div class="container">
    <div class="recent-jobs">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="db-table">
                    <div class="db-info-head">
                        <h4>Completed Jobs</h4>
                       
                    </div>
                    <div class="db-info-details table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Project Name</th>
                                <th scope="col">Remaining</th>
                                <th scope="col">Budget</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($jobs as $job)
                            <tr>
                                    <td><a href="{{route('assignment.show',['id'=>$job->id])}}">{{$job->name}} </a></td>
                                <td>{{$job->deadline}}</td>
                                <td>${{$job->writer_price}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $jobs->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection('')