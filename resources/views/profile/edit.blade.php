@extends('layouts.app')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Profile</h1>
                    </div>
                </div>
            </div>
        </section>


        <section class="content">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-body">
                            <form action="{{route('profile.update', $profile->id) }}" method="post"
                                  enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input name="_method" type="hidden" value="PUT">
                                <div class="form-group">
                                    <label for="inputName">University Name</label>
                                    <input type="text" id="inputName" class="form-control" name="uni_name"
                                           value="{{$profile->uni_name  }}">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Department Name</label>
                                    <input type="text" id="inputName" class="form-control" name="dept_name"
                                           value="{{$profile->dept_name  }}">

                                </div>
                                <div class="form-group">
                                    <label for="inputName">Start Year</label>
                                    <input type="text" id="inputName" class="form-control" name="start_year"
                                           value="{{$profile->start_year  }}">

                                </div>
                                <div class="form-group">
                                    <label for="inputName">Pass Year</label>
                                    <input type="text" id="inputName" class="form-control" name="pass_year"
                                           value="{{$profile->pass_year  }}">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Organization Name</label>
                                    <input type="text" id="inputName" class="form-control" name="org_name"
                                           value="{{$profile->org_name  }}">

                                </div>
                                <div class="form-group">
                                    <label for="inputName">Designation</label>
                                    <input type="text" id="inputName" class="form-control" name="designation"
                                           value="{{$profile->designation  }}">

                                </div>
                                <div class="form-group">
                                    <label for="inputName">Contact Number</label>
                                    <input type="text" id="inputName" class="form-control" name="contact_number"
                                           value="{{$profile->contact_number  }}">

                                </div>
                                <div class="form-group">
                                    <label for="inputName">Address</label>
                                    <input type="text" id="inputName" class="form-control" name="address"
                                           value="{{$profile->address  }}">

                                </div>
                                <div class="form-group">
                                    <label for="inputName">Duration</label>
                                    <input type="text" id="inputName" class="form-control" name="duration"
                                           value="{{$profile->duration  }}">

                                </div>
                                <div class="form-group">
                                    <label for="inputName">Responsibilities</label>
                                    <input type="text" id="inputName" class="form-control" name="responsibilities"
                                           value="{{$profile->responsibilities  }}">

                                </div>
                                <div class="form-group">
                                    <label for="inputName">Exam Title</label>
                                    <input type="text" id="inputName" class="form-control" name="exam_title"
                                           value="{{$profile->exam_title  }}">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Major</label>
                                    <input type="text" id="inputName" class="form-control" name="major"
                                           value="{{$profile->major  }}">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Result</label>
                                    <input type="text" id="inputName" class="form-control" name="result"
                                           value="{{$profile->result  }}">
                                </div>
                                <a href="" class="btn btn-secondary">Cancel</a>
                                <input type="submit" value="Save" class="btn btn-success float-right">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
