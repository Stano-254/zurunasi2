@extends('layouts.backend.app')

@section('title','Edit page')

@section('content')
    <div class="row p-5 justify-content-center  ">

        <form action="/intro/store" method="POST" class="border-1">
            <fieldset>
                <legend> Introduction for pages</legend>


                <div class="form-group">
                    <label class="pt-2" for="feature">Feature</label>
                    <i class="alert-danger">{{$errors->first('feature')}}</i>
                    <input type="text" id="feature" name="feature" class="form-control col-3 "
                           value="{{old('feature')}}" placeholder="enter feature here">
                </div>

                <div class="form-group">
                    <label class="pt-2" for="title">Title</label>
                    <i class="alert-danger">{{$errors->first('title')}}</i>
                    <input type="text" id="title" name="title" class="form-control col-12 " value="{{old('title')}}"
                           placeholder="enter page title here">
                </div>
                <div class="form-group">
                    <label class="pt-2" for="pageUrl">Page URl</label>
                    <i class="alert-danger">{{$errors->first('pageUrl')}}</i>
                    <input type="text" id="pageUrl" name="pageUrl" class="form-control col-3 "
                           value="{{old('pageUrl')}}" placeholder="enter page name here">
                </div>
                <div class="form-group">
                    <label class="pt-2" for="desc">Description</label>
                    <i class="alert-danger">{{$errors->first('desc')}}</i>
                    <textarea cols="100" rows="6" id="desc" name="desc" class="input-group form-control"
                              value="{{old('desc')}}" placeholder="enter description here"></textarea>
                </div>
                <div class="form-group">
                    <label for="feature_img"> feature image</label>
                    <i class="alert-danger">{{$errors->first('feature_img')}}</i>
                    <input type="file" name="feature_img" id="feature_img" value="{{old('desc')}}">
                </div>
                <div class="pt-3">

                    <button type="submit" class="btn btn-lg btn-info ">Save</button>
                </div>
                @csrf
            </fieldset>
        </form>

    </div>
@endsection

