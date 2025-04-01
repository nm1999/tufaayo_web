<template>
    <div class="row mt-2">
        <div
            class="text-center col-sm-6"
            style="border:1px solid blue;border-radius: 50%;width:40px;height:40px;">
            <i :class="color+' fab text-primary '+icon" style="font-size:26px;margin-left:-5px;margin-top:4px;"></i>
        </div>
        <div class="col-sm-6">
            <div class="mt-2">
                {{ link }}
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:"SocialMedia",
    props:{
        link:{
            type:String,
            required:true
        },
        icon:{
            type:String,
            requierd:true
        },
        color:{
            type:String,
            required: false
        }
    }
}
</script>