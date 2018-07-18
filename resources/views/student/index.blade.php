@extends('layouts.app')

@section('content')
<div class="container">
        
        <div>
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#inprogress" aria-controls="inprogress" role="tab" data-toggle="tab">Inprogress</a>
                </li>
                <li role="presentation">
                    <a href="#open" aria-controls="open" role="tab" data-toggle="tab">Open</a>
                </li>
                <li role="presentation">
                    <a href="#finished" aria-controls="finished" role="tab" data-toggle="tab">Finished</a>
                </li>
                <li role="presentation">
                    <a href="#purchased" aria-controls="purchased" role="tab" data-toggle="tab">Purchased</a>
                </li>
                <li role="presentation">
                    <a href="#inrevision" aria-controls="inrevision" role="tab" data-toggle="tab">Inrevision</a>
                </li>
                <li role="presentation">
                    <a href="#completed" aria-controls="completed" role="tab" data-toggle="tab">Completed</a>
                </li>
            </ul>
            
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="inprogress">
                    <div class="db-table">
                        <div class="db-info-head">
                            <h4>In Progress</h4>
                            <h6><a href="{{route('student.inprogress')}}">View All In Progress Assignments</a></h6>
                        </div>
                        <div class="db-info-details table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Project Name</th>
                                    <th scope="col">Deadline Name</th>
                                    <th scope="col">Budget</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>UX Design for an...</td>
                                    <td>1 Day 4 Hours</td>
                                    <td>$3500</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="open">
                    <div class="db-table">
                        <div class="db-info-head">
                            <h4>Open</h4>
                            <h6><a href="{{route('student.available')}}">View All Open Assignments</a></h6>
                        </div>
                        <div class="db-info-details table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Project Name</th>
                                    <th scope="col">Deadline Name</th>
                                    <th scope="col">Budget</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>UX Design for an...</td>
                                    <td>1 Day 4 Hours</td>
                                    <td>$3500</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="finished">
                    <div class="db-table">
                        <div class="db-info-head">
                            <h4>Finished</h4>
                            <h6><a href="{{route('student.finished')}}">View All Finished Assignments</a></h6>
                        </div>
                        <div class="db-info-details table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Project Name</th>
                                    <th scope="col">Deadline Name</th>
                                    <th scope="col">Budget</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>UX Design for an...</td>
                                    <td>1 Day 4 Hours</td>
                                    <td>$3500</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="purchased">
                    <div class="db-table">
                        <div class="db-info-head">
                            <h4>Purchased</h4>
                            <h6><a href="{{route('student.purchased')}}">View All Purchased Assignments</a></h6>
                        </div>
                        <div class="db-info-details table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Project Name</th>
                                    <th scope="col">Deadline Name</th>
                                    <th scope="col">Budget</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>UX Design for an...</td>
                                    <td>1 Day 4 Hours</td>
                                    <td>$3500</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="inrevision">
                    <div class="db-table">
                        <div class="db-info-head">
                            <h4>In revision</h4>
                            <h6><a href="{{route('student.inrevision')}}">View All In Revision Assignments</a></h6>
                        </div>
                        <div class="db-info-details table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Project Name</th>
                                    <th scope="col">Deadline Name</th>
                                    <th scope="col">Budget</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>UX Design for an...</td>
                                    <td>1 Day 4 Hours</td>
                                    <td>$3500</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="completed">
                    <div class="db-table">
                        <div class="db-info-head">
                            <h4>Completed</h4>
                            <h6><a href="{{route('student.completed')}}">View All Completed Assignments</a></h6>
                        </div>
                        <div class="db-info-details table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Project Name</th>
                                    <th scope="col">Deadline Name</th>
                                    <th scope="col">Budget</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>UX Design for an...</td>
                                    <td>1 Day 4 Hours</td>
                                    <td>$3500</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    
    
</div>
@endsection

@section('script')

@endsection
