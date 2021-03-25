@extends('posts.layout')

@section('content')

    <div class="row mt-5">
        <div class="col-md-12">
            <h2>ระบบสมัครนักศึกษาใหม่</h2> <br>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong>
            There were some problems with your input. <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{ route('posts.store') }" method="post">
        @csrf

        <div class="row">
            <div class="col-md-12">
                <h5>1. ประวัติส่วนตัว</h5>
            </div>
            <div class="row align-items-start">          
                <div class="col-md-2">
                    <strong>ชื่อจริง</strong>
                    <input type="text" name="name" class="form-control" placeholder="ใส่ชื่อ">
                </div>
                <div class="col-md-2">
                    <strong>นามสกุล</strong>
                    <input type="text" name="subname" class="form-control" placeholder="ใส่นามสกุล">
                </div>                      
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>title1</strong>
                    <input type="text" name="title1" class="form-control" placeholder="Enter title1">
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>


@endsection
