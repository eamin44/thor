@extends('Admin.layout.template')
@section('body')

<div class="col-md-8 mx-auto grid-margin stretch-card ">
                <div class="card ">
                  <div class="card-body mt-5">
                    <h4 class="card-title">Service section Form</h4>
                    <!-- <p class="card-description"> Horizontal form layout </p> -->
                    <form class="forms-sample" method="POST" action="{{ route('service.store') }}" enctype="multipart/form-data">
                      @csrf
                      <!-- Service Name -->
                      <div class="form-group row">
                          <label for="ser_name" class="col-sm-3 col-form-label">Service Name</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" name="ser_name" id="ser_name" placeholder="Service Name">
                          </div>
                      </div>
                  
                      <!-- Service Title -->
                      <div class="form-group row">
                          <label for="ser_title" class="col-sm-3 col-form-label">Service Title</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" name="ser_title" id="ser_title" placeholder="Service Title">
                          </div>
                      </div>
                  
                      <!-- Service Image -->
                      <div class="form-group row">
                          <label for="image" class="col-sm-3 col-form-label">Image</label>
                          <div class="col-sm-9">
                              <input type="file" name="image" class="form-control" id="image">
                          </div>
                      </div>
                  
                      <!-- Service Card Title -->
                      <div class="form-group row">
                          <label for="ser_card_title" class="col-sm-3 col-form-label">Service Card Title</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" name="ser_card_title" id="ser_card_title" placeholder="Service Card Title">
                          </div>
                      </div>
                  
                      <!-- Service Description -->
                      <div class="form-group row">
                          <label for="ser_card_des" class="col-sm-3 col-form-label">Service Description</label>
                          <div class="col-sm-9">
                              <textarea class="form-control" name="ser_card_des" id="ser_card_des" rows="4" placeholder="Service Card Description"></textarea>
                          </div>
                      </div>
                  
                      <!-- Submit Button -->
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                  </form>
                  
                  </div>
                </div>
</div>
@endsection