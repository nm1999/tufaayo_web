<template>
    <div class="">
        <TopBar PhoneNumber="+256 758 115 817" location="Lira City"/>
        <div class="body">
           
            <router-view
                PhoneNumber="+256 758 115 817"
                location="Lira City"
                emailAddress="tufaayofoundation@gmail.com"
                :why_trust_us="''"
                :number_of_members="323"
                :communities_visited="323"
                :school_visited="42"
            />
        </div>
        <div>
            <WebFooter
                location="Lira City"
                PhoneNumber="+256 758 115 817"
                emailAddress="tufaayofoundation@gmail.com"
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
        settings:{
            type:Object,
            required:true
        }
    },
};
</script>
