@extends('Admin.layout.template')
@section('body')

<div class="col-md-8 mx-auto grid-margin stretch-card ">
                <div class="card ">
                  <div class="card-body mt-5">
                    <h4 class="card-title">Hero section Form</h4>
                    <!-- <p class="card-description"> Horizontal form layout </p> -->
                    <form class="forms-sample" method="POST" action="{{ route('hero.store') }}" enctype="multipart/form-data">
                      @csrf
                      <!-- hero Name -->
                      <div class="form-group row">
                          <label for="ser_name" class="col-sm-3 col-form-label">Sub Title</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" name="subtitle" id="subtitle" placeholder="Sub Title">
                          </div>
                      </div>
                  
                      <!-- hero Title -->
                      <div class="form-group row">
                          <label for="ser_title" class="col-sm-3 col-form-label">Title</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                          </div>
                      </div>
                  
                      <!-- hero Image -->
                      <div class="form-group row">
                          <label for="image" class="col-sm-3 col-form-label">Image</label>
                          <div class="col-sm-9">
                              <input type="file" name="image" class="form-control" id="image">
                          </div>
                      </div>
                  
                      <div class="form-group row">
                          <label for="ser_card_title" class="col-sm-3 col-form-label">Button Text</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" name="btn_txt" id="btn_txt" placeholder="button text">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="ser_card_title" class="col-sm-3 col-form-label">Button Url</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" name="btn_url" id="btn_url" placeholder="button url">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="ser_card_title" class="col-sm-3 col-form-label">ButtonTwo Url</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" name="btntwo_url" id="btntwo_url" placeholder="buttontwo url">
                          </div>
                      </div>
                  
                      <!-- hero Description -->
                      <div class="form-group row">
                          <label for="ser_card_des" class="col-sm-3 col-form-label">Description</label>
                          <div class="col-sm-9">
                              <textarea class="form-control" name="description" id="description" rows="4" placeholder="hero Card Description"></textarea>
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