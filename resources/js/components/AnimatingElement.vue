<template>
    <div class="page-container">
        <header class="header-sticky p-4 flex justify-center items-center">
            <h1 class="text-3xl font-bold text-gray-900">Scroll to Animate</h1>
        </header>

        <main class="container mx-auto mt-8">
            <div class="content-section fade-in-up">
                <div>
                    <h2 class="text-4xl text-gray-800 mb-4">
                        Welcome to Our Website!
                    </h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        This is the first section. Scroll down to see the next
                        sections animate and fade into view.
                    </p>
                </div>
            </div>

            <div class="content-section dark-section fade-in-up">
                <div>
                    <h2 class="text-4xl mb-4">Discover Amazing Features</h2>
                    <p class="text-lg text-gray-300 max-w-2xl mx-auto">
                        This element slides in from the bottom. It's a great way
                        to engage your visitors and make your website feel more
                        dynamic and professional.
                    </p>
                </div>
            </div>

            <div class="content-section fade-in-up">
                <div>
                    <h2 class="text-4xl text-gray-800 mb-4">
                        A Seamless Experience
                    </h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        The animation uses a modern technique called the
                        `IntersectionObserver` API, which is highly performant.
                    </p>
                </div>
            </div>

            <div class="content-section dark-section fade-in-up">
                <div>
                    <h2 class="text-4xl mb-4">Ready to Get Started?</h2>
                    <p class="text-lg text-gray-300 max-w-2xl mx-auto">
                        All you need to do is apply the `fade-in-up` class to
                        any element you want to animate.
                    </p>
                </div>
            </div>
        </main>
    </div>
</template>

<script>
export default {
   name:"AnimatingElement"
};
</script>

