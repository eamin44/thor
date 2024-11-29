@extends('Admin.layout.template')
@section('body')

<div class="col-md-8 mx-auto grid-margin stretch-card ">
                <div class="card ">
                  <div class="card-body mt-5">
                    <h4 class="card-title">booking section Form</h4>
                    <!-- <p class="card-description"> Horizontal form layout </p> -->
                    <form class="forms-sample" method="POST" action="{{ route('booking.store') }}" enctype="multipart/form-data">
                      @csrf
                      <!-- booking Name -->
                      <div class="form-group row">
                          <label for="ser_name" class="col-sm-3 col-form-label">Sub Title</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" name="book_sub_title" id="book_sub_title" placeholder="Sub Title">
                          </div>
                      </div>
                  
                      <!-- booking Title -->
                      <div class="form-group row">
                          <label for="ser_title" class="col-sm-3 col-form-label">Head Title</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" name="book_head_title" id="book_head_title" placeholder="Head Title">
                          </div>
                      </div>
                  
                      <!-- booking Image -->
                      <div class="form-group row">
                          <label for="image" class="col-sm-3 col-form-label">Image</label>
                          <div class="col-sm-9">
                              <input type="file" name="image" class="form-control" id="image">
                          </div>
                      </div>
                  
                      <!-- booking Card Title -->
                      <div class="form-group row">
                          <label for="ser_card_title" class="col-sm-3 col-form-label">Book Title</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" name="book_title" id="book_title" placeholder="booking Card Title">
                          </div>
                      </div>
                      <div class="form-group row">
                        <label for="ser_card_des" class="col-sm-3 col-form-label">Book Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="book_des" id="book_des" rows="4" placeholder="Book Description"></textarea>
                        </div>
                    </div>
                  
                      <div class="form-group row">
                          <label for="ser_card_title" class="col-sm-3 col-form-label">Card Title</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" name="card_title" id="card_title" placeholder="Price">
                          </div>
                      </div>
                      
                  
                      <div class="form-group row">
                          <label for="ser_card_title" class="col-sm-3 col-form-label">All People</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" name="all_people" id="all_people" placeholder="All People">
                          </div>
                      </div>

                      <div class="form-group row">
                        <label for="ser_card_des" class="col-sm-3 col-form-label">Cart Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="cart_des" id="cart_des" rows="4" placeholder="Cart Description"></textarea>
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