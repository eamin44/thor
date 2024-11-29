@extends('Admin.layout.template')
@section('body')

<div class="col-md-8 mx-auto grid-margin stretch-card">
    <div class="card">
        <div class="card-body mt-5">
            <h4 class="card-title">Edit Hero Section</h4>
            <!-- Specify the method and action for the form -->
            <form class="forms-sample" method="POST" action="{{ route('hero.update', $hero->id) }}" enctype="multipart/form-data">
                @csrf

                <!-- Subtitle -->
                <div class="form-group row">
                    <label for="subtitle" class="col-sm-3 col-form-label">Sub Title</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="subtitle" id="subtitle" placeholder="Sub Title" value="{{ $hero->subtitle }}">
                    </div>
                </div>

                <!-- Title -->
                <div class="form-group row">
                    <label for="title" class="col-sm-3 col-form-label">Title</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{ $hero->title }}">
                    </div>
                </div>

                <!-- Image -->
                <div class="form-group row">
                    <label for="image" class="col-sm-3 col-form-label">Image</label>
                    <div class="col-sm-9">
                        <input type="file" name="image" class="form-control" id="image">
                        <small><img src="{{ asset($hero->image) }}" alt="Current Image" style="width: 100px; height: auto;"></small>
                    </div>
                </div>

                <!-- Button Text -->
                <div class="form-group row">
                    <label for="btn_txt" class="col-sm-3 col-form-label">Button Text</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="btn_txt" id="btn_txt" placeholder="Button Text" value="{{ $hero->btn_txt }}">
                    </div>
                </div>

                <!-- Button URL -->
                <div class="form-group row">
                    <label for="btn_url" class="col-sm-3 col-form-label">Button URL</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="btn_url" id="btn_url" placeholder="Button URL" value="{{ $hero->btn_url }}">
                    </div>
                </div>

                <!-- Button Two URL -->
                <div class="form-group row">
                    <label for="btntwo_url" class="col-sm-3 col-form-label">Button Two URL</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="btntwo_url" id="btntwo_url" placeholder="Button Two URL" value="{{ $hero->btntwo_url }}">
                    </div>
                </div>

                <!-- Description -->
                <div class="form-group row">
                    <label for="description" class="col-sm-3 col-form-label">Description</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="description" id="description" rows="4" placeholder="Hero Card Description">{{ $hero->description }}</textarea>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary mr-2">Update</button>
                <a href="{{ route('hero.manage') }}" class="btn btn-dark">Cancel</a>
            </form>
        </div>
    </div>
</div>

@endsection