<template>
    <div>
        <Banner
            class="banner"
            bannerTitle="Our Gallery"
            description="Moments of hope, impact, and transformation across our communities."
        />

        <div class="container-xxl py-5">
            <div class="container">
                <sectionHeader section="In Pictures" title="Stories from the Field" />

                <div v-if="imagesData.length > 0" class="row g-4">
                    <div
                        v-for="(image, index) in imagesData"
                        :key="index"
                        class="col-sm-6 col-lg-4 anim-zoom-in animate-on-scroll"
                    >
                        <div
                            @click.prevent="openImage(image)"
                            class="gallery-tile"
                            :style="{ backgroundImage: 'url(' + image + ')' }"
                        >
                            <div class="gallery-overlay">
                                <i class="fa fa-search-plus"></i>
                                <span>View Photo</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div v-else class="w3-center py-5">
                    <img src="../../../public/images/loading.gif" style="width:200px;height:200px;" alt="Loading" />
                </div>
            </div>
        </div>

        <div v-if="selectedImage" class="gallery-modal" @click="closeModal">
            <button class="close-button" @click.stop="closeModal">&times;</button>
            <img :src="selectedImage" class="modal-image" alt="Selected gallery image" @click.stop />
        </div>
    </div>
</template>

<script>
import axios from "axios";
import Banner from "./common/Banner.vue";
import sectionHeader from "./common/sectionHeader.vue";

export default {
    name: "Gallery",
    components: {
        Banner,
        sectionHeader,
    },
    data() {
        return {
            imagesData: [],
            selectedImage: null,
        };
    },
    mounted() {
        this.myGalleryImages();
        this.setupIntersectionObserver();
    },
    methods: {
        async myGalleryImages() {
            await axios.get("/api/our/images").then((res) => {
                this.imagesData = res.data.images;
            });
        },
        openImage(img) {
            this.selectedImage = img;
            document.body.style.overflow = "hidden";
        },
        closeModal() {
            this.selectedImage = null;
            document.body.style.overflow = "";
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
    beforeUnmount() {
        document.body.style.overflow = "";
    },
};
</script>

<style scoped>
.banner {
    background-image: url("../../../public/images/7.jpeg");
    background-repeat: no-repeat;
    background-size: cover;
}

.gallery-tile {
    width: 100%;
    height: 320px;
    border-radius: 18px;
    overflow: hidden;
    background-size: cover;
    background-position: center;
    position: relative;
    cursor: pointer;
    transition: transform .35s ease, box-shadow .35s ease;
}
.gallery-tile:hover {
    transform: translateY(-6px);
    box-shadow: 0 18px 40px rgba(4, 99, 250, 0.2);
}
.gallery-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(4, 99, 250, 0.7), rgba(4, 99, 250, 0.05));
    color: #fff;
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    padding: 1rem;
    opacity: 0;
    transition: opacity .3s ease;
    font-weight: 700;
}
.gallery-tile:hover .gallery-overlay {
    opacity: 1;
}

.gallery-modal {
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, 0.85);
    z-index: 99999;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 1rem;
}
.modal-image {
    max-width: 95vw;
    max-height: 88vh;
    border-radius: 12px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
}
.close-button {
    position: absolute;
    top: 16px;
    right: 22px;
    border: none;
    background: transparent;
    color: #fff;
    font-size: 2.4rem;
    line-height: 1;
    cursor: pointer;
}
</style>