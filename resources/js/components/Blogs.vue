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
                <div
                  class="fixed-image-size"
                  :style="{
                    backgroundImage:'url('+blog.image+')',
                    backgroundSize:'cover',
                  }"
                >
                </div>
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
import axios from 'axios';
export default {
    name:"Blogs",
    components:{
      BlogPost
    },
    data() {
      return {
        blogs: []
      }
    },
    mounted() {
      this.getBlogs();
    },
    methods:{
      async getBlogs(){
        await axios.get('/api/blogs').then((results)=>{
          this.blogs =  results.data.blogs
        })
      }
    }
}
</script>

<style scoped>
.fixed-image-size{
  width:100%;
  height:250px;
}
</style>