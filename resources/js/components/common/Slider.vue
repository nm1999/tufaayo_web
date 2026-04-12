<template>
  <div class="hero-slider">
    <!-- Slides -->
    <div
      v-for="(image, index) in slides"
      :key="index"
      class="slide"
      :class="{ active: index === currentIndex }"
      :style="{ backgroundImage: 'url(' + (images[index] || '') + ')' }"
    >
      <div class="slide-overlay"></div>
      <div class="slide-content">
        <span class="slide-tag">{{ image.tag }}</span>
        <h1 class="slide-title">{{ image.title }}</h1>
        <p class="slide-subtitle">{{ image.subtitle }}</p>
        <div class="slide-btn">
          <a href="#programs" class="btn btn-primary rounded-pill px-4 py-2">Our Programs</a>
          <a href="/about-us" class="btn btn-outline-light rounded-pill px-4 py-2">Learn More</a>
        </div>
      </div>
    </div>

    <!-- Prev / Next arrows -->
    <div class="arrow arrow-left" @click="prev">
      <i class="fa fa-chevron-left"></i>
    </div>
    <div class="arrow arrow-right" @click="next">
      <i class="fa fa-chevron-right"></i>
    </div>

    <!-- Dot navigation -->
    <div class="slide-nav">
      <span
        v-for="(_, i) in slides"
        :key="i"
        class="dot"
        :class="{ active: i === currentIndex }"
        @click="goTo(i)"
      ></span>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue';

defineProps({
  images: {
    type: Array,
    required: true,
  },
});

const slides = [
  {
    tag: 'Empowering Youth',
    title: 'Restoring Dignity &\nChanging Lives',
    subtitle: 'Tufaayo Foundation equips young girls in Lira with sanitary pads, career guidance, and life skills so no girl is left behind.',
  },
  {
    tag: 'Community Outreach',
    title: 'Breaking Barriers,\nBuilding Futures',
    subtitle: 'Through drama and interactive programs we raise awareness and protect young people from exploitation.',
  },
  {
    tag: 'Education & Health',
    title: 'Every Girl Deserves\na Chance to Learn',
    subtitle: 'We train girls to make reusable pads and provide mama kits to pregnant teenagers across communities.',
  },
  {
    tag: 'Join the Movement',
    title: 'Together We Can\nTransform Communities',
    subtitle: 'Volunteer, donate, or partner with us. Your support keeps girls in school and builds brighter tomorrows.',
  },
];

const currentIndex = ref(0);
let timerId = null;

const next = () => {
  currentIndex.value = (currentIndex.value + 1) % slides.length;
};
const prev = () => {
  currentIndex.value = (currentIndex.value - 1 + slides.length) % slides.length;
};
const goTo = (i) => {
  currentIndex.value = i;
};

onMounted(() => {
  timerId = setInterval(next, 5500);
});
onUnmounted(() => {
  clearInterval(timerId);
});
</script>

<style scoped>
.slide-title {
  white-space: pre-line;
}
</style>
