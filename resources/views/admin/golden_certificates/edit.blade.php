@extends('layouts.admin')
@section('content')



<form class="form-inline d-flex justify-content-around" action="{{route('golden-certificates.update',$edit->id)}}" method="POST">
    @csrf
    @method('put')

    <!-- <div class="form-group m-4"><label class="m-1" for="">العنوان الرئيسي:</label>
        <input type="text" name="main_title" value="{{$edit->main_title}}" class="form-control">
    </div>
    <div class="form-group m-4"><label class="m-1" for="">اللقب:</label>
        <input type="text" name="epithet" value="{{$edit->epithet}}" class="form-control">
    </div> -->
    <div class="form-group m-4"><label class="m-1" for="">الاسم:</label>
        <input type="text" name="name" value="{{$edit->name}}" class="form-control">
    </div>
    <div class="form-group m-4"><label class="m-1" for="">الرسالة:</label>
        <textarea type="text" name="message" class="form-control">{{$edit->message}}</textarea>
    </div>
    <input type="submit" value="حفظ" class="btn btn-primary">
</form>
@endsection