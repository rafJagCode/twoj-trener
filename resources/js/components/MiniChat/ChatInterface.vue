<template>
    <div class="chat-interface">
        <h4 class="chat-interface__btn-container" @click="showEmail"><i class="chat-interface__email-btn fas fa-at pr-2"></i>Email</h4>
        <h4 class="chat-interface__btn-container" @click="showMessanger">
            <span class="chat-interface__btn-tooltip" v-show="show">Zaloguj się aby skorzystać z czatu!</span>
            <i class="chat-interface__chat-btn fas fa-comments pr-2"></i>
            Czat
        </h4>
    </div>
</template>
<script>
    export default{
        data(){
            return{
                show: false,
            }
        },
        props:{
            auth:{
                type: Boolean,
                required: true
            }
        },
        methods:{
            showEmail(){
                this.$emit('changeComponent', 'Email');
            },
            showMessanger(){
                if(!this.auth){
                    this.showTooltip();
                    return;
                }
                this.$emit('changeComponent', 'Messanger');
            },
            showTooltip(){
                this.show = true;
                setTimeout(()=>{
                    this.show = false;
                }, 1500);
            }
        }
    }
</script>
<style lang="css" scoped>
    .chat-interface{
        display:flex;
        justify-content: space-evenly;
    }
    .chat-interface__btn-container{
        display: flex;
        align-items: center;
        position: relative;
        cursor:pointer;
        padding:10px;
        -webkit-box-shadow: 0px 0px 5px 1px #8731E8;
        -moz-box-shadow: 0px 0px 5px 1px #8731E8;
        box-shadow: 0px 0px 5px 1px #8731E8;
        border-radius: 5%;
        color: #8731E8;
    }
    .chat-interface__btn-tooltip{
        position: absolute;
        width: max-content;
        font-size:10px;
        left: -50%;
        bottom: 115%;
    }
    .chat-interface__email-btn{
        color: #8731E8;
    }
    .chat-interface__chat-btn{
        color: #8731E8;
    }
</style>