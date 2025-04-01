<template>
  <div class="pt-5">
    <div class="container pt-5">
          <h4 class="pt-5">Recent posts</h4>
          <div 
              v-if="blogs.length > 0"
              class="row"
          >
            <BlogPost 
              v-for="blog in blogs"
              class="col-sm-12 col-md-3 col-lg-4 mt-4"
              :title="blog.title"
              :date="blog.created_at"
            >
              <template #image>
                  <img :src="blog.image" class="img-fluid" alt="">
              </template>
            </BlogPost>            
          </div>
          <div v-else>
              <p class="text-center">No blogs found</p>
          </div>
    </div>
  </div>
</template>

<script>
import BlogPost from './BlogPost.vue';
export default {
    name:"Blogs",
    components:{
      BlogPost
    },
    props:{
        blogs: {
            type: Array,
            required: false,
            default:[]
        }
    },
    computed:{
      
    }
}
</script>