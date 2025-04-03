<template>
    <div class="">
        <TopBar :PhoneNumber="settings.phone_number" :location="settings.location"/>
        <div class="body">
           
            <router-view
                :blogs="blogs"
                :PhoneNumber="settings.phone_number"
                :location="settings.location"
                :emailAddress="settings.email_address"
                :why_trust_us="settings.why_trust_us"
                :number_of_members="settings.number_of_members"
                :communities_visited="settings.communities_visited"
                :school_visited="settings.school_visited"
            />
        </div>
        <div>
            <WebFooter
                :location="settings.location"
                :PhoneNumber="settings.phone_number"
                :emailAddress="settings.email_address"
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
        settings:{
            type:Object,
            required:true
        }
    },
    mounted(){
        console.log(this.settings)
    }
};
</script>
