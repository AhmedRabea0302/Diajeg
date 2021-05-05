@extends('admin.layouts.master')
@section('content')
    <style>
        .imagea {
            margin-bottom: 20px
        }
        .imagea img {
            border-radius: 10px;
            border: 3px solid #314584;
        }
    </style>
    <!-- Main content -->
    <section class="content">

        <section class="content-header">
            <h1>
                Dashboard
                <small>Product Images Part</small>
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
                <h3 class="box-title">Product Images Part</h3>
            </div>

            <div class="box-body">

                <div class="upload">
                    <div class="col-md-12">
                        <h2>Upload More Images?</h2>
                        <form action="{{ route('update-image') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field( ) }}
                            <div class="form-group">
                                <label for="">Choose Images To Upload</label>
                                <input type="file" name="images[]" multiple id="">
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Upload Images" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>

               <form action="{{ route('update-image') }}"  method="POST">
                    {{ csrf_field() }}
                    <div class="row">  
                        @if(count($images))
                            <div class="col-md-12">
                                @foreach ($images as $image)
                                    <div class="col-md-3 imagea">
                                        <i class="fa fa-trash-o delete-image" data-id="{{ $image->id }}" style="cursor: pointer; color: #f12; font-size: 17px; margin-bottom: 10px"></i>
                                        <img src="{{ url($image->image) }}" alt="" class="img-responsive img-center">
                                    </div>
                                @endforeach
                            </div>
                        @else 
                            <div class="col-md-12">
                                <p class="lead text-center">No Added Images Yet.</p>
                            </div>
                        @endif
                    </div>
                    <br><br>
               </form>
            </div>
        </div>

    </section><!-- /.content -->

    <!-- Delete Image -->
    <script type="text/javascript">
        let deleteBtns = document.querySelectorAll('.delete-image');
        console.log(deleteBtns);
        deleteBtns.forEach(btn => {
            btn.addEventListener('click', function(e) {
                let imgID = e.target.getAttribute('data-id');
                if(confirm("Are You Sure You Want To Delete This Image!")) {
                    $.ajax({
                        type: "GET",
                        url: '{{route("delete-image")}}',
                        data: {imgID: imgID},

                        success: function(response) {  
                            $('.alert-danger').css('display', 'block');
                            setTimeout(function() {location.reload()}, 1900);
                        },
                    });
                } else {
                    return false;
                }
            });
        });

    </script>

@stop