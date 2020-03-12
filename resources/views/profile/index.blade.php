@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Basic Profile Details</div>
                    <div class="card-body">
                        <div class="post">
                            <div class="posttext pull-left">
                                <div class="posttext pull-left">
                                    <p><font color="black">Name : </font>{{$profile->user->name  }}</p>
                                    <p><font color="black"> Email : </font> {{$profile->user->email  }}</p>
                                    <p><font color="black"> User Name : </font> {{$profile->user->username  }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Educational Profile Details <a class="btn btn-success"
                                                                            href="{{ route('profile.edit',$profile->id) }}"
                                                                            title='Update Record'>Edit</a></div>
                    <div class="card-body">
                        <div class="post">
                            <div class="posttext pull-left">
                                <div class="posttext pull-left">
                                    <p><font color="black">University Name : </font>{{$profile->uni_name  }}</p>
                                    <p><font color="black"> Department Name : </font>{{$profile->dept_name  }}</p>
                                    <p><font color="black"> Start Year : </font>{{$profile->start_year  }}</p>
                                    <p><font color="black"> Pass Year : </font>{{$profile->pass_year  }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Work Profile Details</div>
                    <div class="card-body">
                        <div class="post">
                            <div class="posttext pull-left">
                                <div class="posttext pull-left">
                                    <p><font color="black">Organization Name : </font>{{$profile->org_name  }}</p>
                                    <p><font color="black"> Designation : </font>{{$profile->designation  }}</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-header"><a class="btn btn-success" href="{{route('profile.create')}}"
                                            title='CV Create'>Create CV</a></div>
            </div>
        </div>
    </div>
@endsection
