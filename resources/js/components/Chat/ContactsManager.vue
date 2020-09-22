<template>
    <div class="contacts-manager">
        <div class="contacts-manager__interface-container">
            <i class="contacts-manager__option-btn fas fa-address-book" @click="changeComponent"></i>
            <input class="contacts-manager__search-contact-input" type="text" v-model="searchedTerm" placeholder="Wyszukaj użytkownika" aria-label="Wyszukaj użytkownika">
        </div>
        <ul class="contacts-manager__contacts-list">
            <li class="contacts-manager__contact-item" v-for="contact in searchedContacts" :key="contact.id">
                <div class="contacts-manager__contact-avatar">
                    <img class="contacts-manager__contact-avatar-img" :src="/images/ + contact.profilePicture" :alt="contact.name">
                </div>
                <div class="contacts-manager__contact-details">
                    <p class="contacts-manager__contact-name">{{contact.firstName}} {{contact.secondName}}</p>
                    <p class="contacts-manager__contact-email">{{contact.email}}</p>
                </div>
                <div class="contacts-manager__contact-btn-container" @click="addOrRemoveContact(contact)">
                    <i class="contacts-manager__remove-contact-btn fas fa-user-minus" v-if="isContactAlreadyAdded(contact)"></i>
                    <i class="contacts-manager__add-contact-btn fas fa-user-plus" v-else></i>
                </div>
            </li>
        </ul>
    </div>
</template>
<script>
    export default{
        data(){
            return{
                searchedTerm: '',
                searchedContacts: [],
            }
        },
        props: {
            contacts: {
                type: Array,
                default: []
            }
        },
        computed:{
            addedContactsIds(){
                return this.contacts.map((contact)=>{
                    return contact.id;
                });
            }
        },
        watch:{
            searchedTerm(searchedTerm){
                axios.get(`conversation/searchNewContact/${searchedTerm}`)
                    .then((response)=>{
                        this.searchedContacts = response.data;
                    })
            }
        },
        methods:{
            isContactAlreadyAdded(contact){
                if(this.addedContactsIds.includes(contact.id)) return true;
                return false;
            },
            addOrRemoveContact(contact){
                if(this.isContactAlreadyAdded(contact)){
                    this.removeContact(contact);
                    return;
                }
                this.addContact(contact);
            },
            addContact(contact){
                axios.post('/conversation/addContact', {
                    contact_id: contact.id,
                }).then((response)=>{
                    if(response.data.already_added){
                        return;
                    };
                    this.$emit('contactAdded', response.data);
                })
            },
            removeContact(contact){
                axios.delete('/conversation/removeContact', { 
                    data: { contact_id: contact.id }
                    }).then((response)=>{
                        this.$emit('contactRemoved', response.data);
                    });
            },
            changeComponent(){
                this.$emit('changeComponent', 'ContactsList');
            }
        }
    }
</script>
<style lang="css" scoped>
    .contacts-manager{
        display:flex;
        flex:2;
        flex-direction: column;
    }
    .contacts-manager__interface-container{
        display:flex;
        width: 94%;
        align-items: center;
        margin: 0 auto;
    }
    .contacts-manager__option-btn{
        color: #8731E8;
        cursor: pointer;
        border: 1px solid #8731E8;
        padding: 5px;
        font-size: 20px;
        border-radius: 20%;
        margin: auto;
    }
    .contacts-manager__search-contact-input{
        margin: 10px 0 10px auto;
        width:85%;
        border:none;
        border-bottom: 1px solid #8731E8;
    }
    .contacts-manager__search-contact-input:focus{
        outline:none;
        border:none;
        border-bottom: 1px solid #8731E8;
    }
    .contacts-manager__contacts-list{
        padding:0;
        overflow: scroll;
        overflow-x: hidden;
    }
    .contacts-manager__contacts-list::-webkit-scrollbar-track
    {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        background-color: #F5F5F5;
        border-radius: 10px;
    }

    .contacts-manager__contacts-list::-webkit-scrollbar
    {
        width: 5px;
        background-color: #F5F5F5;
    }

    .contacts-manager__contacts-list::-webkit-scrollbar-thumb
    {
        border-radius: 10px;
        background-image: -webkit-gradient(linear,
                                        left bottom,
                                        left top,
                                        color-stop(0.44, rgb(180, 128, 240)),
                                        color-stop(0.72, rgb(158, 98, 226)),
                                        color-stop(0.86, rgb(135, 49, 232)));
    }
    .contacts-manager__contact-item{
        height: 50px;
        -webkit-box-shadow: 0px 0px 5px 1px rgb(180, 128, 240);
        -moz-box-shadow: 0px 0px 5px 1px rgb(180, 128, 240);
        box-shadow: 0px 0px 5px 1px rgb(180, 128, 240);
        border-radius: 0px 15px 15px 0px;
        -moz-border-radius: 0px 15px 15px 0px;
        -webkit-border-radius: 0px 15px 15px 0px;
        border: 0px solid #000000;
        padding: 10px;
        width: 94%;
        display: flex;
        flex-direction: row;
        align-items: center;
        margin: 7px auto;
    }
    .contacts-manager__contact-avatar{
        flex:1;
    }
    .contacts-manager__contact-avatar-img{
        height:35px;
        border-radius:50%;
    }
    .contacts-manager__contact-details{
        font-size:10px;
        flex:4;
    }
    .contacts-manager__contact-name{
        font-weight: bold;
        margin:0;
        line-height: 11px;
    }
    .contacts-manager__contact-email{
        margin:0;
        line-height: 11px;
    }
    .contacts-manager__contact-btn-container{
        cursor: pointer;
    }
    .contacts-manager__add-contact-btn{
        color: lightgreen;
    }
    .contacts-manager__remove-contact-btn{
        color: lightcoral;
    }

</style>