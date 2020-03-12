<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }

        table {
            display: table;
            border-spacing: 2px;
        }

        thead {
            display: table-header-group;
            vertical-align: middle;
            border-color: inherit;
        }

        tr {
            display: table-row;
            vertical-align: inherit;
            border-color: inherit;
        }

        th {
            border-collapse: collapse;
            text-align: inherit;

        }

        th {

            display: table-cell;
            font-weight: bold;
        }

        tbody {
            display: table-row-group;
            vertical-align: middle;
            border-color: inherit;
        }

        td {

            display: table-cell;

        }

        ::after, ::before {
            box-sizing: border-box;
        }

        .table td, .table th {
            padding: .75rem;
            vertical-align: top;
            border: 1px solid #dee2e6;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            background-color: transparent;
        }

        .table-bordered, .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }

        header {
            display: block;
        }

        html {
            font-size: 100%;
            overflow-y: scroll;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        body {
            margin: 0;
            font-family: Nunito, sans-serif;
            font-size: .9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            text-align: left;
            background-color: #f8fafc;
        }


        .container {

            max-width: 1100px;
            margin: 0 auto;
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem;
            display: block;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;

        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: .25rem;
        }

        .card-header {
            width: 100%;
            padding: .75rem 1.25rem;
            margin-bottom: 0;
            background-color: rgba(0, 0, 0, .03);
            border-bottom: 1px solid rgba(0, 0, 0, .125);
        }

        .card .card-body {
            padding: 1.25rem;
        }

        .width-60 {
            width: 60%;
        }

        .form-control {
            display: block;
            width: 93.5%;
            height: calc(2.19rem + 2px);
            padding: .375rem .75rem;
            font-size: .9rem;
            line-height: 1.6;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: .25rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="card">
        <div class="card-header">
            CV Format
        </div>
        <div class="card-body">
            <div class="width-100">
                <div class="card">
                    <div class="form-control">
                        Basic Information
                    </div>
                    <div class="card-body">
                        <p><font color="black">Name : </font>{{$profile->user->name  }}</p>
                        <p><font color="black"> Address : </font>{{$profile->address  }}</p>
                        <p><font color="black"> Contact Number : </font> {{$profile->contact_number  }}</p>
                        <p><font color="black"> Email : </font>{{$profile->user->email  }} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-body">
            <div class="width-100">
                <div class="card">
                    <div class="form-control" style="display: table; padding: .75rem 1.25rem;">
                        Professional Experience
                    </div>
                    <div class="card-body">
                        <p><font color="black">Designation : </font>{{$profile->designation  }}</p>
                        <p><font color="black"> Company Name : </font>{{$profile->org_name  }}</p>
                        <p><font color="black"> Duration : </font>{{$profile->duration  }}</p>
                        <p><font color="black"> Responsibilities : </font>{{$profile->responsibilities  }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-body">
            <div class="width-100">
                <div class="card">
                    <div class="form-control" style="display: table; padding: .75rem 1.25rem;">
                        Academic Qualification
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
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


                    </section>
                </div>
            </div>
        </div>
</body>
</html>
