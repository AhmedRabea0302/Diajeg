@extends('admin.layouts.master')
@section('content')
<section class="content">

    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Update Advantage</h3>
        </div>

        <div class="row">
           <div class="col-md-12" style="margin: 0 15px">
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
           </div>
        </div>

        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('post-update-adv', ['id'=>$adv->id]) }}"  method="POST">
                        {{ csrf_field() }}
                        <div class="row">  
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">Advantage Title In Arabic</label>
                                    <textarea name="ar_title" id="editor1" rows="1" cols="60">{{ $adv->par_ar }}</textarea>                            
                                </div>
                            </div>
    
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">Advantage In English</label>
                                    <textarea name="en_title" id="editor2" rows="1" cols="60">{{ $adv->par_en }}</textarea>
                                </div>
                            </div>
    
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">Advantage Paragraph In Arabic</label>
                                    <textarea name="ar_par" id="editor3" cols="30" rows="4" class="form-control">{{ $adv->body_ar }}</textarea>
                                </div>
                            </div>
    
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">Advantage Paragraph In English</label>
                                    <textarea name="en_par" id="editor4" cols="30" rows="4" class="form-control">{{ $adv->body_en }}</textarea>
                                </div>
                            </div>
    
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary"> <i class="fa fa-edit"></i> Update</button>
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