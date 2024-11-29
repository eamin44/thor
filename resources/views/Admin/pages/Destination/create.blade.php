@extends('Admin.layout.template')
@section('body')

<div class="col-md-8 mx-auto grid-margin stretch-card ">
                <div class="card ">
                  <div class="card-body mt-5">
                    <h4 class="card-title">Destination section Form</h4>
                    <!-- <p class="card-description"> Horizontal form layout </p> -->
                    <form class="forms-sample" method="POST" action="{{ route('destination.store') }}" enctype="multipart/form-data">
                      @csrf
                      <!-- destination Name -->
                      <div class="form-group row">
                          <label for="ser_name" class="col-sm-3 col-form-label">Sub Title</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" name="des_sub_title" id="des_sub_title" placeholder="Sub Title">
                          </div>
                      </div>
                  
                      <!-- destination Title -->
                      <div class="form-group row">
                          <label for="ser_title" class="col-sm-3 col-form-label">Head Title</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" name="des_head_title" id="des_head_title" placeholder="Head Title">
                          </div>
                      </div>
                  
                      <!-- destination Image -->
                      <div class="form-group row">
                          <label for="image" class="col-sm-3 col-form-label">Image</label>
                          <div class="col-sm-9">
                              <input type="file" name="image" class="form-control" id="image">
                          </div>
                      </div>
                  
                      <!-- destination Card Title -->
                      <div class="form-group row">
                          <label for="ser_card_title" class="col-sm-3 col-form-label">Card Title</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" name="des_card_title" id="des_card_title" placeholder="Destination Card Title">
                          </div>
                      </div>
                  
                      <div class="form-group row">
                          <label for="ser_card_title" class="col-sm-3 col-form-label">Price</label>
                          <div class="col-sm-9">
                              <input type="number" class="form-control" name="price" id="price" placeholder="Price">
                          </div>
                      </div>
                  
                      <div class="form-group row">
                          <label for="ser_card_title" class="col-sm-3 col-form-label">Days Trip</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" name="days_trip" id="days_trip" placeholder="Days Trip">
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