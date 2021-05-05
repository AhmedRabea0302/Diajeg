@extends('admin.layouts.master')
@section('content')
    <!-- Main content -->
    <section class="content">

        <section class="content-header">
            <h1>
                Dashboard
                <small>Messages</small>
            </h1>
        </section>

        @if(count($errors) > 0)
            <div class="alert alert-danger" style="margin-top: 15px;">
                <ul class="list-unstyled">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(Session::has('message'))
            <div class="alert alert-success" style="margin-top: 15px;">
                <p>{{ Session::get('message') }}</p>
            </div>
        @endif
        

        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Messages</h3>
            </div>

            <div class="box-body">
                <table class="table table-hover table-bordered">
                    <thead>
                        <th>#</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                    </thead>

                    <tbody>
                        @if($messages)
                            @foreach ($messages as $index => $message)
                                <tr>
                                    <th>{{ $index+1 }}</th>
                                    <td>{{ $message->email }}</td>
                                    <td>{{ $message->subject }}</td>
                                    <td>{{ $message->message }}</td>
                                </tr>
                            @endforeach
                        @else
                            <p class="lead text-center">No messages</p>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>

    </section><!-- /.content -->

@stop