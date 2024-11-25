@extends('app')
@section('content')
<div class="container">
    <br>
    <hr>
    <h6 style="color:#fd27dd">{{ session('message') }}</h6>
    <form action="{{ route('save.settings') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6 col-sm-12 col-lg-6">
                <h4>Home Page</h4>
                <div class="form-group">
                    <label for="">Home page Background Image</label><br>
                    <input type="file" name="home_background_image">
                </div>
                
                <div class="form-group">
                    <label for="">Title</label><br>
                    <input type="text" name="title" value="{{ $setting->title }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Schools visited</label><br>
                    <input type="number" name="school_visited" value="{{ $setting->school_visited }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Communities visited</label><br>
                    <input type="number" name="communities_visited" value="{{ $setting->communities_visited }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Number of members</label><br>
                    <input type="number" name="number_of_members"  value="{{ $setting->number_of_members }}" class="form-control">
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
                    <input type="text" name="location"  value="{{ $setting->location }}" class="form-control">
                </div>
                
                <div class="formgroup">
                    <label for="">Our phone number</label>
                    <input type="phone" name="phone_number"  value="{{ $setting->phone_number }}" class="form-control">
                </div>
                
                <div class="formgroup">
                    <label for="">Our Email address</label>
                    <input type="phone" name="email_address"  value="{{ $setting->email_address }}" class="form-control">
                </div>
    
                <div class="formgroup">
                    <label for="">
                        Why you should trust us
                    </label>
                    <textarea name="why_trust_us"  value="{{ $setting->why_trust_us }}" class="form-control"></textarea>
                </div>
            </div>
    
            <div class="col-sm-12 col-md-12 col-sm-12">
                <br>
                <button class="btn btn-primary w-100 py-3" type="submit">Save Changes</button>
            </div>
        </div>
    </form>
<br>
    <form action="{{ route('save.blog') }}" method="post" enctype="multipart/form-data">
        @csrf
        <h4>Blog form</h4>
        <div class="formgroup">
            <label for="">title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
       
        <div class="formgroup">
            <label for="">Description</label>
            <input type="text" name="description" class="form-control" required>
        </div>

        <div class="formgroup">
            <label for="">Blog photo</label>
            <input type="file" name="blog_image" class="form-control" required>
        </div>
            <br>
        <input type="submit" class="btn btn-primary w-100 py-3">
    </form>
</div>
@endsection('content')