<template>
    <div class="agent-contact-form-sidebar">
        <ChatInterface @changeComponent="changeVisibleComponent" :auth="auth"/>
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
                componentVisible: 'Email',
            }
        },
        computed:{
            auth(){
                if(this.user===undefined) return false;
                return true;
            }
        },
        props:{
            receiver:{
                type: Object,
                required: true
            },
            user:{
                type: Object,
                required: false
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