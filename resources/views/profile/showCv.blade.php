@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">CV Format <a class="btn btn-success"
                                                          href="{{route('download')}}">Download</a></div>
                    <div class="card-body">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="form-control">Basic Information :</div>
                                <div class="card-body">
                                    <div class="post">
                                        <div class="posttext pull-left">
                                            <div class="posttext pull-left">
                                                <p><font color="black">Name : </font>{{$profile->user->name  }}</p>
                                                <p><font color="black"> Address : </font>{{$profile->address  }}</p>
                                                <p><font color="black"> Contact Number
                                                        : </font> {{$profile->contact_number  }}</p>
                                                <p><font color="black"> Email : </font>{{$profile->user->email  }} </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="form-control">Professional Experience</div>
                                <div class="card-body">
                                    <div class="post">
                                        <div class="posttext pull-left">
                                            <div class="posttext pull-left">
                                                <p><font color="black">Designation : </font>{{$profile->designation  }}
                                                </p>
                                                <p><font color="black"> Company Name : </font>{{$profile->org_name  }}
                                                </p>
                                                <p><font color="black"> Duration : </font>{{$profile->duration  }} </p>
                                                <p><font color="black"> Responsibilities
                                                        : </font> {{$profile->responsibilities  }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="form-control">Academic Qualification</div>
                                <div class="card-body">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Exam Title</th>
                                            <th>Major</th>
                                            <th>Institute</th>
                                            <th>Result</th>
                                            <th>Start Year</th>
                                            <th>Pass Year</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>{{$profile->exam_title  }}</td>
                                            <td>{{$profile->major  }}</td>
                                            <td>{{$profile->uni_name  }}</td>
                                            <td>{{$profile->result  }}</td>
                                            <td>{{$profile->start_year  }}</td>
                                            <td>{{$profile->pass_year  }}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
