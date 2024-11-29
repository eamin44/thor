@extends('Admin.layout.template')
@section('body')

<div class="col-md-8 mx-auto grid-margin stretch-card">
    <div class="card">
        <div class="card-body mt-5">
            <h4 class="card-title">Edit Destination Section Form</h4>
            <form class="forms-sample" method="POST" action="{{ route('destination.update', $destination->id) }}" enctype="multipart/form-data">
                @csrf

                <!-- Sub Title -->
                <div class="form-group row">
                    <label for="des_sub_title" class="col-sm-3 col-form-label">Sub Title</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="des_sub_title" id="des_sub_title" placeholder="Sub Title" value="{{ $destination->des_sub_title }}">
                    </div>
                </div>

                <!-- Head Title -->
                <div class="form-group row">
                    <label for="des_head_title" class="col-sm-3 col-form-label">Head Title</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="des_head_title" id="des_head_title" placeholder="Head Title" value="{{ $destination->des_head_title }}">
                    </div>
                </div>

                <!-- Image -->
                <div class="form-group row">
                    <label for="image" class="col-sm-3 col-form-label">Image</label>
                    <div class="col-sm-9">
                        <input type="file" name="image" class="form-control" id="image">
                        @if($destination->image)
                            <img src="{{ asset($destination->image) }}" alt="destination image" width="100" class="mt-2">
                        @endif
                    </div>
                </div>

                <!-- Card Title -->
                <div class="form-group row">
                    <label for="des_card_title" class="col-sm-3 col-form-label">Card Title</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="des_card_title" id="des_card_title" placeholder="Card Title" value="{{ $destination->des_card_title }}">
                    </div>
                </div>

                <!-- Price -->
                <div class="form-group row">
                    <label for="price" class="col-sm-3 col-form-label">Price</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" name="price" id="price" placeholder="Price" value="{{ $destination->price }}">
                    </div>
                </div>

                <!-- Days Trip -->
                <div class="form-group row">
                    <label for="days_trip" class="col-sm-3 col-form-label">Days Trip</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="days_trip" id="days_trip" placeholder="Days Trip" value="{{ $destination->days_trip }}">
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary mr-2">Update</button>
                <a href="{{ route('destination.manage') }}" class="btn btn-dark">Cancel</a>
            </form>
        </div>
    </div>
</div>

@endsection
