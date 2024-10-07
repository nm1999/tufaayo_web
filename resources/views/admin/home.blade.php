@extends('app')
@section('content')
<div class="container">
    <br>
    <hr>
    <h2> <span class="tufaayo-color">Edit</span> content</h2>
    <br>
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <form method="post" action="{{ route('save.settings') }}">
                @csrf
                <div class="row g-3"> 
                    @foreach($setting as $set)
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-3">                                    
                                    <label for="key">{{ $set->key }}</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="{{ $set->key }}" class="form-control" value="{{ $set->value }}">
                                    <!-- <textarea class="form-control" placeholder="{{ $set->value }}" style="height: 100px"></textarea> -->
                                </div>
                            </div>                       
                        </div>
                    @endforeach
                    <div class="col-12">
                        <button class="btn btn-primary w-100 py-3" type="submit">Save Changes</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">

        </div>
    </div>
</div>
@endsection('content')