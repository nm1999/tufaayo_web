<template>
    <div class="pt-5">
        <div class="container pt-5">
            <h4 class="pt-5">Our Gallery</h4>
            <div 
                v-if="imagesData.length > 0"
                class="row">
                <div
                    v-for="(image,index) in imagesData"
                    :key="index"
                    class="col-sm-12 col-md-4 col-lg-4 p-2 animate-on-scroll"
                >
                    <div
                        @click.prevent="openImage(image)"
                        class="card-content"
                        :style="{
                            backgroundImage:'url('+image+')',
                            backgroundSize:'cover',
                            backgroundRepeat:'no-repeat'
                        }"
                    >
                    </div>
                </div>
            </div>
            <div v-else class="w3-center">
                <img src="../../../public/images/loading.gif" style="width:200px;height:200px;" alt="">
            </div>
        </div>
        <div v-if="selectedImage" class="fade">
            <div class="">
                <div class="">
                    <span class="close-button">&times;</span>
                    <div class="" :style="{
                        backgroundImage:'url('+selectedImage+')',
                        backgroundSize:'cover',
                        }">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    name:"Gallery",
    data() {
        return {
            imagesData: [],
            isModalOpen: false,
            selectedImage: null
        }
    },
    mounted(){
        this.myGalleryImages();
        this.setupIntersectionObserver();
    },
    methods:{
        async myGalleryImages() {
            await axios.get('/api/our/images').then((res)=>{
                this.imagesData = res.data.images;
            });
        },
        openImage(img){
            console.log(img);
            this.isModalOpen = true;
            this.selectedImage = img
        },
        closeModal(){
            this.isModalOpen= false;
        },
        setupIntersectionObserver() {
            const animatedElements =
                document.querySelectorAll(".animate-on-scroll");

            const observer = new IntersectionObserver(
                (entries, observer) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add("w3-animate-bottom");
                            observer.unobserve(entry.target);
                        }
                    });
                },
                {
                    threshold: 0.1,
                }
            );

            animatedElements.forEach((element) => {
                observer.observe(element);
            });
        },
        
    }
}
</script>

<style scoped>

.card-content{
    width:100%;
    height:400px;
}
</style>