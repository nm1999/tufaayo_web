<template>
    <div class="">
        <TopBar 
            PhoneNumber="+256 782 232 232"
            location="Lra city"
        />
        <div class="body">
            <router-view></router-view>
        </div>
        <div>
            <footer location="" PhoneNumber="" emailAddress=""></footer>
        </div>
    </div>
</template>

<script>
import TopBar from './TopBar.vue';
import footer from './footer.vue';
export default {
    name:"index",
    components:{
        TopBar,
        footer
    }
}
</script>