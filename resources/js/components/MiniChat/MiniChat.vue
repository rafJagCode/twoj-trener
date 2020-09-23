<template>
    <div class="agent-contact-form-sidebar">
        <ChatInterface @changeComponent="changeVisibleComponent"/>
        <Email v-if="componentVisible==='Email'"/>
        <Messanger :receiver="this.receiver" :user="this.user" v-if="componentVisible==='Messanger'"/>
    </div>
</template>
<script>
    import ChatInterface from './ChatInterface';
    import Email from './Email'
    import Messanger from './Messanger'
    export default{
        data(){
            return{
                componentVisible: 'Email'
            }
        },
        props:{
            receiver:{
                type: Object,
                required: true
            },
            user:{
                type: Object,
                required: true
            }  
        },
        methods:{
            changeVisibleComponent(name){
                this.componentVisible = name;
            }
        },
        components: { ChatInterface, Email, Messanger}
    }
</script>