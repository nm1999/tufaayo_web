<template>
     <div class="container">
    <br>
    <h4>Recent posts</h4>
    <div 
        v-if="blogs.length > 0"
        class="row"
    >
      <div 
        v-for="blog in blogs"
        class="col-md-4 col-sm-12 col-lg-4">
        <div class="wow fadeInUp p-2" data-wow-duration="1s" data-wow-delay="0.25s">
          <p style="font-weight:500;" class="text-primary">{{ blog.title }} {{ blog.blog_image }}</p>
          <div class="image-size" style="
            background-image:url('../../../public/blogs/6744b0183e801.jpg');
            background-size:cover;
            background-repeat:no-repeat;   
            height:250px
          ">          
        </div>
        <br>
          <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-6">
              <button class="btn btn-primary">Awareness</button>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6">
              <span style="font-size:12px;float:right">{{ blog.created_at }}</span>
            </div>
          </div>  
          <p>{{ blog.description }}</p>
        </div>
      </div>             
    </div>
    <div v-else>
        <p class="text-center">No blogs found</p>
    </div>
  </div>
</template>

<script>
export default {
    name:"Blogs",
    props:{
        blogs: {
            type: Array,
            required: false,
            default:[]
        }
    }
}
</script>