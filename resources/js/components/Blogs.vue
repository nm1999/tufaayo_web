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
            <div class="w3-center">
                <img src="../../../public/images/loading.gif" style="width:200px;height:200px;" alt="">
            </div>
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