@extends('layouts.profile')

@section('title','プロフィールの編集')

@section('content')
     <div class="container">
       <div class="row">
         <div class="col-md-8 mx-auto">
           <h2>プロフィールの編集</h2>
           <form action="{{ action('Admin\ProfileController@update') }}" method="post"enctype="multipart/form-date">

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
                <input type="text" class="form-control" name="name" value={{ old('name', $profile_form->name) }}>
              </div>
            </div>
          <div class="form-group row">
              <label class="col-md-2" for="gender">性別</label>
            <label>
              <input type="checkbox" name="gender" value="men" @if ($profile_form->gender == "men") checked="checked" @endif>男
            </label>
            <label>
              <input type="checkbox" name="gender" value="women" @if ($profile_form->gender == "women") checked="checked" @endif>女
            </label>
            <label>
              <input type="checkbox" name="gender" value="others"@if ($profile_form->gender == "others") checked="checked" @endif>その他
            </label>
          </div>
          <div class="form-group row">
            <label class="col-md-2" for="hobby">趣味</label>
            <div class="col-md-10">
            <textarea class="form-control" name="hobby" rows="1">{{ old('hobby', $profile_form->hobby) }}</textarea>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-2" for="introduction">自己紹介欄</label>
            <div class="col-md-10">
            <textarea class="form-control" name="introduction" rows="20">{{ old('introduction', $profile_form->introduction) }}</textarea>
            </div>
          </div>
          {{ csrf_field() }}
          <input type="hidden" name="id" value="{{ $profile_form->id }}">
          <input type="submit" class="btn btn-primary" value="更新">
        </form>
       </div>
     </div>
   </div>
@endsection
