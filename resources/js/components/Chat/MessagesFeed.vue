<template>
    <div class="feed" ref="feed">
        <ul v-if="contact">
            <li v-for="message in messages" :class="`message${message.to === contact.id ? ' sent' : ' received'}`" :key="message.id">
                <div class="text">
                    {{message.message}}
                </div>
            </li>
        </ul>
    </div>
</template>
<script>
    export default{
        props:{
            contact:{
                type: Object
            },
            messages:{
                type: Array,
                required: true
            }
        },
        methods:{
            scrollToBottom(){
                setTimeout(()=>{
                    this.$refs.feed.scrollTop = this.$refs.feed.scrollHeight - this.$refs.feed.clientHeight;
                }, 50);
            }
        },
        watch:{
            contact(contact){
                this.scrollToBottom();
            },
            messages(messages){
                this.scrollToBottom();
            }
        }
    }
</script>
<style lang="css" scoped>
    .feed{
        max-height: 280px;
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
        width: 5px;
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
        width:700px;
        min-width: 700px;
    }
    .text{
        display: inline-block;
        max-width: 70%;
        padding: 10px;
        border-radius: 5px;
        overflow-wrap: break-word;
    }
    .received{
        text-align: left;
    }
    .received .text{
        background: lightblue;
    }
    .sent{
        text-align: right;
    }
    .sent .text{
        background: lightgreen;
    }
</style>