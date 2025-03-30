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
            <WebFooter location="" PhoneNumber="" emailAddress="" />
        </div>
    </div>
</template>

<script>
import TopBar from './TopBar.vue';
import WebFooter from './WebFooter.vue';
export default {
    name:"index",
    components:{
        TopBar,
        WebFooter
    }
}
</script>