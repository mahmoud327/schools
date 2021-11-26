@extends('front.layouts.master')
@section('content')


  <section id="add-work" >
  @include('front.layouts.nav')



    <div class="add-work-container ">
        <div class="container">
            <h3> rooms </h3>
            <div class="row">
           
                <div class="col-md-9 my-2">
                  <div class="tab-content" id="v-pills-tabContent">
                     <!-- add jobs section  -->
                    <div class="tab-pane fade show active" id="v-pills-add-jobs" role="tabpanel" aria-labelledby="v-pills-add-jobs-tab">
                        <div class="add-jobs">
                        @include('flash::message')

                            <div class="header">

                                <h5> حجز غرفه</h5>
                            </div>
                            <form action="{{route('booking_user')}}" method="POST" enctype="multipart/form-data">
                              @csrf
                            
                      
                                <div class="input-container">
                                    <label for="job-description"> from_date </label>
                                    <input type="date" class=" @error('from_date') is-invalid @enderror" name="from_date">
                                    @error('from_date')
                                            <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="input-container">
                                    <label for="job-description"> to_date </label>
                                    <input type="date" class=" @error('to_date') is-invalid @enderror" name="to_date">
                                    @error('to_date')
                                            <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <br>
                             
                                <br>
                                <button type="submit"class="text-center">حجز </button>

                            </form>

                        </div>
                    </div>
        

                  </div>
                </div>
              </div>
        </div>
    </div>


</div>



</section>


@endsection





