@extends('admin.layouts.master')
@section('content')
    <!-- Main content -->
    <section class="content">

        <section class="content-header">
            <h1>
                Dashboard
                <small>Principle Of Temperature Detection Part</small>
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
                <h3 class="box-title">Principle Of Temperature Detection Part</h3>
            </div>

            <div class="box-body">

               <form action="{{ route('update-principle') }}"  method="POST">
                    {{ csrf_field() }}
                    <div class="row">  
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">First Title In Arabic</label>
                                <textarea name="fr_par_ar" id="editor1" rows="1" cols="60">{!! $head->fr_par_ar !!}</textarea>                            
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">First Title In English</label>
                                <textarea name="fr_par_en" id="editor2" rows="1" cols="60">{{ $head->fr_par_en }}</textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Second Title In Arabic</label>
                                <textarea name="se_par_ar" id="editor3" rows="1" cols="60">{{ $head->se_par_ar }}</textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Second Title In English</label>
                                <textarea name="se_par_en" id="editor4" rows="1" cols="60">{{ $head->se_par_en }}</textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Content In Arabic</label>
                                <textarea name="body_ar" id="editor5" cols="30" rows="4" class="form-control">{{ $head->body_ar }}</textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Content In English</label>
                                <textarea name="body_en" id="editor6" cols="30" rows="4" class="form-control">{{ $head->body_en }}</textarea>
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

    </section><!-- /.content -->

    @section('scripts')
        <script>
            // Replace the <textarea id="editor1"> with a CKEditor 4
            // instance, using default configuration.
            CKEDITOR.replace('editor1');
            CKEDITOR.replace('editor2');
            CKEDITOR.replace('editor3');
            CKEDITOR.replace('editor4');
            CKEDITOR.replace('editor5');
            CKEDITOR.replace('editor6');
        </script>
    @stop
@stop