<template>
    <div class="email">
        <form name="contact_form" method="post" action="functions.php">
            <input type="text" id="fname" name="full_name" placeholder="Imię i nazwisko" required />
            <input type="number" id="pnumber" name="phone_number" placeholder="Numer telefonu" required />
            <input type="email" id="emailid" name="email_address" placeholder="Adres email" required />
            <textarea placeholder="Wiadomość" name="message" required></textarea>
            <input type="submit" name="sendmessage" class="multiple-send-message" value="Wyślij wiadomość" />
        </form>
    </div>
</template>
<script>
    export default{
        
    }
</script>