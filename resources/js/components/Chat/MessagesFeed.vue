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
        overflow-y: scroll;
        scrollbar-width: none;
        -ms-overflow-style: none;
    }
    .message{
        margin: 10px 0;
        width: 100%;
    }
    .text{
        display: inline-block;
        max-width: 70%;
        padding: 10px;
        border-radius: 5px;
    }
    .received{
        text-align: right;
    }
    .received .text{
        background: lightblue;
    }
    .sent{
        text-align: left;
    }
    .sent .text{
        background: lightgreen;
    }
</style>