<template>
    <div class="">
        <h5 class="text-primary"> <span class="tufaayo-color">Follow</span> Us</h5>
        <ul style="list-style: none">
            <li>
                <i class="fab fa-twitter"></i> tufaayo
                foundation
            </li>
            <li>
                <i class="fab fa-facebook"></i> tufaayo
                foundation
            </li>
            <li>
                <SocialMedia />
            </li>
            <li>
                <i class="fab fa-youtube"></i> tufaayo
                foundation
            </li>
        </ul>
    </div>
</template>

<script>
import SocialMedia from './SocialMedia.vue';
export default {
    name:"FollowUs",
    components:{
        SocialMedia
    }
}
</script>