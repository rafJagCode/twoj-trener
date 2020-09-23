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
        border: 1px solid #8731E8;
        border-radius: 3px;
        padding: 5px;
        overflow:scroll;
        overflow-x:hidden;
    }
    .composer textarea:focus{
        outline: none;
        border: 1px solid #8731E8;
        -webkit-box-shadow: 0px 0px 5px 1px rgb(180, 128, 240);
        -moz-box-shadow: 0px 0px 5px 1px rgb(180, 128, 240);
        box-shadow: 0px 0px 5px 1px rgb(180, 128, 240);
    }
    .composer textarea::-webkit-scrollbar-track
    {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        background-color: #F5F5F5;
        border-radius: 10px;
    }

    .composer textarea::-webkit-scrollbar
    {
        width: 0px;
        background-color: #F5F5F5;
    }

    .composer textarea::-webkit-scrollbar-thumb
    {
        border-radius: 10px;
        background-image: -webkit-gradient(linear,
                                        left bottom,
                                        left top,
                                        color-stop(0.44, rgb(180, 128, 240)),
                                        color-stop(0.72, rgb(158, 98, 226)),
                                        color-stop(0.86, rgb(135, 49, 232)));
    }
</style>