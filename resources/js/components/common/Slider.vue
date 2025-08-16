<template>
  <div class="">
      <img
        :src="images[currentImageIndex]"
        :alt="`Slider image ${currentImageIndex + 1}`"
        class="w-full h-auto object-cover transition-opacity duration-500 ease-in-out rounded-2xl"
        style="width:100%"
      />
  </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue';

const props = defineProps({
  images: {
    type: Array,
    required: false,
    default: () => [
      "https://placehold.co/1200x600/6366f1/ffffff?text=Image+1",
      "https://placehold.co/1200x600/f87171/ffffff?text=Image+2",
      "https://placehold.co/1200x600/4ade80/ffffff?text=Image+3",
      "https://placehold.co/1200x600/a855f7/ffffff?text=Image+4",
    ]
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
