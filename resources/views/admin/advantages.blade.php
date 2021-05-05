@extends('admin.layouts.master')
@section('content')
<style>
    .one-adv {
        border: 3px solid #314584;
        padding: 15px;
        border-radius: 5px;
        margin-bottom: 15px;
        text-align: center;
    }

    .one-adv h4 {
        font-weight: bold
    }

    .one-adv .cont {
        font-size: 16px;
    }
</style>
<section class="content">

    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Advantages Part</h3>
            <div style="margin: 10px 10px 0 0;">
                <a  href="{{ route('add-advantage') }}" class="btn btn-primary pull-right" style=" color: #fff">Add advantage <i class="fa fa-plus"></i></a>
            </div>
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

        @if(count($errors) > 0)
            <div class="alert alert-danger" style="margin-top: 15px;">
                <ul class="list-unstyled">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    @if(count($advs))
                        @foreach ($advs as $adv)
                        <div class="col-md-4">
                            <div class="one-adv">
                                <h4>{!! $adv->par_en !!}</h4>
                                <p class="cont">
                                    {!! $adv->body_en !!}
                                </p>
                            </div>
                            <a href="{{ route('update-adv', ['id' => $adv->id]) }}" class="btn btn-primary btn-sm">Update <i class="fa fa-update"></i></a>
                            <a href="{{ route('delete-adv') }}" data-id="{{ $adv->id }}" class="btn btn-danger btn-sm delete-image">Delete <i class="fa fa-trash-o"></i></a>
                        </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>

     <!-- Delete Image -->
     <script type="text/javascript">
        let deleteBtns = document.querySelectorAll('.delete-image');
        console.log(deleteBtns);
        deleteBtns.forEach(btn => {
            btn.addEventListener('click', function(e) {
                let advID = e.target.getAttribute('data-id');
                console.log('ADV: ', advID);
                if(confirm("Are You Sure You Want To Delete This Advantage!")) {
                    $.ajax({
                        type: "GET",
                        url: '{{route("delete-adv")}}',
                        data: {advID: advID},

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