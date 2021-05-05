@extends('admin.layouts.master')
@section('content')
<section class="content">

    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Add Advantage</h3>
        </div>

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

        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('post-add-advantage') }}"  method="POST">
                        {{ csrf_field() }}
                        <div class="row">  
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">Advantage Title In Arabic</label>
                                    <textarea name="ar_title" id="editor1" rows="1" cols="60"></textarea>                            
                                </div>
                            </div>
    
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">Advantage In English</label>
                                    <textarea name="en_title" id="editor2" rows="1" cols="60"></textarea>
                                </div>
                            </div>
    
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">Advantage Paragraph In Arabic</label>
                                    <textarea name="ar_par" id="editor3" cols="30" rows="4" class="form-control"></textarea>
                                </div>
                            </div>
    
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">Advantage Paragraph In English</label>
                                    <textarea name="en_par" id="editor4" cols="30" rows="4" class="form-control"></textarea>
                                </div>
                            </div>
    
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary"> <i class="fa fa-plus"></i> Add</button>
                                </div>
                            </div>
                        </div>
    
                   </form>
                </div>
            </div>
        </div>
    </div>

    @section('scripts')
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor 4
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
        CKEDITOR.replace('editor2');
        CKEDITOR.replace('editor3');
        CKEDITOR.replace('editor4');
    </script>
@stop

@stop