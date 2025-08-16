<template>
  <div>
      <div
        class="w-full object-cover transition-opacity duration-500 ease-in-out rounded-2xl img-fluid"
        :style="{
          backgroundImage: 'url('+images[currentImageIndex]+')',
          backgroundSize:'cover',
          width:'100%',
          height: '550px'
        }"
      >
        <h2 class="w3-animate-zoom img-description">Here goes the image description </h2>
      </div>
  </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue';

const props = defineProps({
  images: {
    type: Array,
    required: true,
  },
});

const currentImageIndex = ref(0);

let timerId = null;

const nextImage = () => {
  currentImageIndex.value = (currentImageIndex.value === props.images.length - 1) ? 0 : currentImageIndex.value + 1;
};

onMounted(() => {
  timerId = setInterval(nextImage, 5000); // 5000 milliseconds = 5 seconds
});

onUnmounted(() => {
  clearInterval(timerId);
});
</script>

<style scoped>
.img-description{
  font-size:40px;
  font-weight: 600;
  color: white;
  padding-top:260px;
}
</style>
