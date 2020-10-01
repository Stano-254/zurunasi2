@extends('layouts.backend.app')

@section('title','Edit website details')

@section('content')
    <div class="row p-5 justify-content-center  ">

        <form action="/admin/store" method="POST" class="border-1">
            <fieldset>
                <legend> Introduction for pages</legend>

                <div class="form-group">
                    <label class="pt-2" for="page_name">Page Name</label>
                    <i class="alert-danger">{{$errors->first('pageName')}}</i>
                    <input type="text" id="page-name" name="page_name" class="form-control col-3 "
                           value="{{old('pageName')}}" placeholder="enter page name here">
                </div>

                <div class="form-group">
                    <label class="pt-2" for="title">Title</label>
                    <i class="alert-danger">{{$errors->first('title')}}</i>
                    <input type="text" id="title" name="title" class="form-control col-12 " value="{{old('title')}}"
                           placeholder="enter page title here">
                </div>

                <div class="form-group">
                    <label class="pt-2" for="desc">Description</label>
                    <i class="alert-danger">{{$errors->first('desc')}}</i>
                    <textarea cols="100" rows="6" id="desc" name="desc" class="input-group form-control"
                              value="{{old('desc')}}" placeholder="enter description here"></textarea>
                </div>

                <div class="form-group">
                    <label for="feature_img"> feature image</label>
                    <input type="file" name="feature_img" id="feature_img">
                </div>

                <div class="pt-3">

                    <button type="submit" class="btn btn-lg btn-info ">Save</button>
                </div>
                @csrf
            </fieldset>
        </form>

    </div>
@endsection
