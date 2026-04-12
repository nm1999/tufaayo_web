<template>
    <div class="h-100">
        <div class="w3-card-4 w3-round w3-white outreach-card h-100">
            <div class="card-content">
                <slot name="image"></slot>
            </div>
            <div class="card-footer px-3 py-3">
                <p class="title text-primary mb-2">{{ title }}</p>
                <div>
                    <i class="fa fa-clock tufaayo-color"></i><span style="font-size:12px;margin-left:8px;">{{ date }}</span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:"BlogPost",
    props:{
        title:{
            type:String,
            required: true
        },
        date:{
            type: String,
            required:false
        }
    }
}
</script>

<style scoped>
.title{
    font-weight: 600;
    line-height: 1.4;
}
.card-footer{
    min-height: 100px;
}
</style>