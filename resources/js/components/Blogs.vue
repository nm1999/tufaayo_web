<template>
  <div>
    <Banner
      class="banner pt-5"
      bannerTitle="Stories & Updates"
      description="Latest insights, milestones, and voices from our community programs."
    />

    <div class="container-xxl py-5">
      <div class="container">
        <sectionHeader section="Newsroom" title="Recent Posts" />

        <div v-if="blogs.length > 0" class="row g-4">
          <div
            v-for="blog in blogs"
                        :key="blog.id || blog.title"
            class="col-sm-6 col-lg-4 anim-fade-up animate-on-scroll"
          >
            <BlogPost :title="blog.title" :date="blog.created_at">
              <template #image>
                <div
                  class="fixed-image-size"
                  :style="{
                    backgroundImage: 'url(' + blog.image + ')',
                    backgroundSize: 'cover',
                    backgroundPosition: 'center',
                  }"
                ></div>
              </template>
            </BlogPost>
          </div>
        </div>

        <div v-else class="w3-center py-5">
          <img v-if="isLoading" src="../../../public/images/loading.gif" style="width:200px;height:200px;" alt="Loading" />
          <p v-else style="font-weight: bold;font-size: 16px;">No Blogs found !</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import BlogPost from "./BlogPost.vue";
import Banner from "./common/Banner.vue";
import sectionHeader from "./common/sectionHeader.vue";
import axios from "axios";

export default {
  name: "Blogs",
  components: {
    BlogPost,
    Banner,
    sectionHeader,
  },
  data() {
    return {
      blogs: [],
      isLoading: true
    };
  },
  mounted() {
    this.getBlogs();
    this.setupIntersectionObserver();
  },
  methods: {
    async getBlogs() {
      await axios.get("/api/blogs").then((results) => {
        this.blogs = results.data.blogs;
        this.isLoading = false;
      });
    },
    setupIntersectionObserver() {
      const animatedElements = document.querySelectorAll(".animate-on-scroll");
      const observer = new IntersectionObserver(
        (entries, obs) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              entry.target.classList.add("anim-visible");
              obs.unobserve(entry.target);
            }
          });
        },
        { threshold: 0.1 }
      );
      animatedElements.forEach((element) => observer.observe(element));
    },
  },
};
</script>

<style scoped>
.banner {
  background-image: url("../../../public/images/5.jpeg");
  background-repeat: no-repeat;
  background-size: cover;
}

.fixed-image-size {
  width: 100%;
  height: 240px;
}
</style>