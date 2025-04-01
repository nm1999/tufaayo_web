<template>
    <div class="">
        <TopBar PhoneNumber="+256 782 232 232" location="Lira city"/>
        <div class="body">
            <router-view
                :blogs="blogs"
                :PhoneNumber="PhoneNumber"
                :location="location"
                :emailAddress="emailAddress"
                :imagePath="imagePath"
            />
        </div>
       
        <div>
            <WebFooter
                :location="location"
                :PhoneNumber="PhoneNumber"
                :emailAddress="emailAddress"
            />
        </div>
    </div>
</template>

<script>
import TopBar from "./TopBar.vue";
import WebFooter from "./WebFooter.vue";
export default {
    name: "index",
    components: {
        TopBar,
        WebFooter,
    },
    props: {
        blogs: {
            type: Array,
            required: true,
        },
        PhoneNumber: {
            type: String,
            required: true,
        },
        location: {
            type: String,
            required: true,
        },
        emailAddress: {
            type: String,
            required: true,
        },
        imagePath:{
            type:String,
            required:true
        }
    },
};
</script>
