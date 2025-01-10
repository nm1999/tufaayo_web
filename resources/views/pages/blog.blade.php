@extends('app')
@section('content')
  <div class="container">
    <br>
    <h4>Recent posts</h4>
    <div class="row">
      @foreach($blogs as $blog)
      <div class="col-md-4 col-sm-12 col-lg-4">
        <div class="wow fadeInUp p-2" data-wow-duration="1s" data-wow-delay="0.25s">
          <p style="font-weight:500;" class="text-primary">{{ $blog->title }}</p>
          <div class="image-size" style="
            background-image:url({{ asset('blogs').'/'.$blog->blog_image }});
            background-size:cover;
            background-repeat:no-repeat;   
            height:250px;
          ">          
        </div>
        <br>
          <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-6">
              <button class="btn btn-primary">Awareness</button>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6">
              <span style="font-size:12px;float:right">{{ $blog->created_at }}</span>
            </div>
          </div>  
          <p>{{ $blog->description }}</p>
        </div>
      </div>
      @endforeach                
    </div>
  </div>
@endsection('content')