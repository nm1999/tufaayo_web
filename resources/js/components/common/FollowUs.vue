<template>
    <div class="">
        <h5 class="text-primary">
            <span class="tufaayo-color">Follow</span> Us
        </h5>
        <ul style="list-style: none">
            <li>
                <SocialMedia link="tufaayo foundation" icon="fa-twitter" />
            </li>
            <li>
                <SocialMedia link="tufaayo foundation" icon="fa-facebook" />
            </li>
            <li>
                <SocialMedia link="tufaayo foundation" icon="fa-linkedin" />
            </li>
            <li>
                <SocialMedia link="tufaayo foundation" icon="fa-youtube" color="tufaayo-color" />
            </li>
        </ul>
    </div>
</template>

<script>
import SocialMedia from "./SocialMedia.vue";
export default {
    name: "FollowUs",
    components: {
        SocialMedia,
    },
};
</script>
