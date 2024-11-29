@extends('Admin.layout.template')
@section('body')

<div class="col-md-8 mx-auto grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Service</h4>
            <form action="{{ route('service.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                
                <div class="form-group row">
                    <label for="ser_name" class="col-sm-3 col-form-label">Service Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="ser_name" value="{{ $service->ser_name }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ser_title" class="col-sm-3 col-form-label">Service Title</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="ser_title" value="{{ $service->ser_title }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="image" class="col-sm-3 col-form-label">Image</label>
                    <div class="col-sm-9">
                        <input type="file" name="image" class="form-control" id="image">
                        @if($service->ser_img)
                            <img src="{{ asset($service->ser_img) }}" alt="service image" width="100" class="mt-2">
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ser_card_title" class="col-sm-3 col-form-label">Service Card Title</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="ser_card_title" value="{{ $service->ser_card_title }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ser_card_des" class="col-sm-3 col-form-label">Service Description</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="ser_card_des" rows="4" required>{{ $service->ser_card_des }}</textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Update</button>
                <a href="{{ route('service.manage') }}" class="btn btn-dark">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection