@extends('layouts.profile')

@section('title','プロフィール')

@section('content')
     <div class="container">
       <div class="row">
         <div class="col-md-8 mx-auto">
           <h2>プロフィール</h2>
           <form action="{{ action('Admin\ProfileController@create') }}" method="post"enctype="multipart/form-data">

             @if (count($errors) > 0)
                 <ul>
                   @foreach($errors->all() as $e)
                       <li>{{ $e }}</li>
                   @endforeach
                </ul>
            @endif
            <div class="form-group row">
              <label class="col-md-2" for="name">名前</label>
              <div class="col-md-10">
                <input type="text" class="form-control" name="name" value={{ old('name') }}>
              </div>
            </div>
          <div class="form-group row">
              <label class="col-md-2" for="gender">性別</label>
            <label>
              <input type="checkbox" name="gender" value="men">男
            </label>
            <label>
              <input type="checkbox" name="gender" value="women">女
            </label>
            <label>
              <input type="checkbox" name="gender" value="others">その他
            </label>
          </div>
          <div class="form-group row">
            <label class="col-md-2" for="hobby">趣味</label>
            <div class="col-md-10">
            <textarea class="form-control" name="hobby" rows="1">{{ old('hobby') }}</textarea>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-2" for="introduction">自己紹介欄</label>
            <div class="col-md-10">
            <textarea class="form-control" name="introduction" rows="20">{{ old('introduction')}}</textarea>
            </div>
          </div>
          {{ csrf_field() }}
          <input type="submit" class="btn btn-primary" value="更新">
        </form>
       </div>
     </div>
   </div>
@endsection
