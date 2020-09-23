<template>
    <div class="feed" ref="feed">
        <ul>
            <li v-for="message in messages" :class="`message${message.to === receiver.id ? ' sent' : ' received'}`" :key="message.id">
                <div class="text">
                    {{message.message}}
                </div>
            </li>
        </ul>
    </div>
</template>
<script>
    export default{
        created(){
            this.scrollToBottom();
        },
        props:{
            receiver:{
                type: Object,
                required: true
            },
            messages:{
                type: Array,
                required: true
            },
        },
        methods:{
            scrollToBottom(){
                setTimeout(()=>{
                    this.$refs.feed.scrollTop = this.$refs.feed.scrollHeight - this.$refs.feed.clientHeight;
                }, 50);
            }
        },
        watch:{
            messages(messages){
                this.scrollToBottom();
            }
        }
    }
</script>
<style lang="css" scoped>
    .feed{
        height: 100%;
        overflow: scroll;
        overflow-x:hidden;
    }
    .feed::-webkit-scrollbar-track
    {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        background-color: #F5F5F5;
        border-radius: 10px;
    }

    .feed::-webkit-scrollbar
    {
        width: 1px;
        background-color: #F5F5F5;
    }

    .feed::-webkit-scrollbar-thumb
    {
        border-radius: 10px;
        background-image: -webkit-gradient(linear,
                                        left bottom,
                                        left top,
                                        color-stop(0.44, rgb(180, 128, 240)),
                                        color-stop(0.72, rgb(158, 98, 226)),
                                        color-stop(0.86, rgb(135, 49, 232)));
    }
    ul{
        padding: 0 15px 0 10px;
    }
    .message{
        margin: 10px auto;
        width: 100%;
    }
    .text{
        display: inline-block;
        max-width: 70%;
        padding: 10px;
        overflow-wrap: break-word;
    }
    .received{
        text-align: right;
    }
    .received .text{
        background: #FFEBF5;
        border-radius: 5px 5px 0px 5px;
        -moz-border-radius: 5px 5px 0px 5px;
        -webkit-border-radius: 5px 5px 0px 5px;
        border: 0px solid #000000;
    }
    .sent{
        text-align: left;
    }
    .sent .text{
        background: rgb(180, 128, 240);
        border-radius: 5px 5px 5px 0px;
        -moz-border-radius: 5px 5px 5px 0px;
        -webkit-border-radius: 5px 5px 5px 0px;
        border: 0px solid #000000;
    }
</style>