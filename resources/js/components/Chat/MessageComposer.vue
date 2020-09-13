<template>
    <div class="composer">
        <textarea v-model="message" @keydown.enter="send" placeholder="Message..."></textarea>
    </div>
</template>
<script>
    export default{
        data(){
            return{
                message: ''
            };
        },
        methods:{
            send(e){
                e.preventDefault();
                if(this.message===''){
                    return;
                }
                this.$emit('send', this.message);
                this.message = '';
            }
        }
    }
</script>
<style lang="css" scoped>
    .composer textarea{
        width: 96%;
        height: 50px;
        margin: 10px;
        resize: none;
        border-radius: 3px;
        padding: 5px;
    }
</style>