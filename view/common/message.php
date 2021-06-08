<div class = "alert error-alert" id="message-container">
    <span class = "close-btn" onClick="this.parentElement.style.display='none';">&times;</span>
    <div id="message">This is an message</div>
</div>
<!-- <div class = "alert success-alert" id="alert">
    <span class = "close-btn" onClick="this.parentElement.style.display='none';">&times;</span>
    This is an message
</div> -->
<script>
    let message = document.getElementById("message");
    let messageContainer = document.getElementById("message-container");
    if(message.innerText == ""){
        messageContainer.style.display = "none";
    }
    else{
        messageContainer.style.display = "block";
    }
</script>