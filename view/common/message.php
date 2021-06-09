<!-- <div class = "alert error-alert" id="message-container">
    <span class = "close-btn" onClick="cancelBtn()">&times;</span>
    <div id="message"></div>
</div> -->
<div class = "alert success-alert" id="message-container">
    <span class = "close-btn" onClick="this.parentElement.style.display='none'; ">&times;</span>
    <div id="message"><?php displayMessage() ?></div>
</div>
<script>
    let message = document.getElementById("message");
    let messageContainer = document.getElementById("message-container");
    let messageStatus = function(message, messageContainer){
        if(message.innerText == ""){
        messageContainer.style.display = "none";
        }
        else{
        messageContainer.style.display = "block";
        }
    }
    messageStatus(message, messageContainer);
   function cancelBtn(){
        messageContainer.style.display = "none";
        message.innerText = "";        
    }
</script>