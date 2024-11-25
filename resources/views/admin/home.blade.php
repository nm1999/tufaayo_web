@extends('app')
@section('content')
<div class="container">
    <br>
    <hr>
    <form action="{{ route('save.settings') }}" method="post">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-lg-6">
                <h4>Home Page</h4>
                <div class="form-group">
                    <label for="">Home page Background Image</label><br>
                    <input type="file" name="background_image">
                </div>
                
                <div class="form-group">
                    <label for="">Title</label><br>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Schools visited</label><br>
                    <input type="number" name="school_visited" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Communities visited</label><br>
                    <input type="number" name="communities_visited" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Number of members</label><br>
                    <input type="number" name="number_of_members" class="form-control">
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h4>About us Page</h4>
    
                <div class="form-group">
                    <label for="">About us page Background Image</label><br>
                    <input type="file" name="aboutus_background_image">
                </div>
    
                <div class="formgroup">
                    <label for="">Our location</label>
                    <input type="text" name="location" class="form-control">
                </div>
                
                <div class="formgroup">
                    <label for="">Our phone number</label>
                    <input type="phone" name="phone_number" class="form-control">
                </div>
                
                <div class="formgroup">
                    <label for="">Our Email address</label>
                    <input type="phone" name="email_address" class="form-control">
                </div>
    
                <div class="formgroup">
                    <label for="">
                        Why you should trust us
                    </label>
                    <textarea name="why_trust_us" class="form-control"></textarea>
                </div>
            </div>
    
            <div class="col-sm-12 col-md-12 col-sm-12">
                <br>
                <button class="btn btn-primary w-100 py-3" type="submit">Save Changes</button>
            </div>
        </div>
    </form>
</div>
@endsection('content')