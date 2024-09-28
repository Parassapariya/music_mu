<?php
include "header.php";

?>
<style>
    .chat-container {
        width: 100%;
        max-width: 100%;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        height: 70vh;
        margin-top: 60px;
    }

    .chat-header {
        background-color: #4a90e2;
        color: #fff;
        padding: 15px;
        border-radius: 10px 10px 0 0;
        text-align: center;
        font-weight: bold;
    }

    .chat-body {
        flex: 1;
        padding: 15px;
        overflow-y: auto;
        display: flex;
        flex-direction: column;
        background-color: #1E1E1E;
    }

    .chat-footer {
        padding: 15px;
        background-color: #1E1E1E;
        border-top: 1px solid #eee;
        display: flex;
        align-items: center;
    }

    .chat-footer input {
        flex: 1;
        padding: 10px;
        border-radius: 20px;
        outline: none;
        margin-right: 10px;
        background-color: #2E2E2E;
    }

    .chat-footer button {
        background-color: #4a90e2;
        border: none;
        padding: 10px;
        border-radius: 60%;
        color: #fff;
        cursor: pointer;
    }

    .chat-message {
        margin-bottom: 15px;
        display: flex;
        align-items: flex-end;
        
    }

    .chat-message.bot {
        justify-content: flex-start;
    }

    .chat-message.user {
        justify-content: flex-end;
    }

    .chat-message .message-content {
        max-width: 70%;
        padding: 10px;
        border-radius: 20px;
        color: white;
        background-color: #2A2A2A;
        text-align: left;
    }

    .chat-message.user .message-content {
        background-color: #00F573;
        text-align: right;
    }

    .chat-message.bot .message-content {
        background-color: #2A2A2A;
    }

    .chat-message img {
        border-radius: 50%;
        margin-right: 10px;
    }

    .chat-message.user img {
        margin-left: 10px;
        margin-right: 0;
    }
</style>
<section class="ms-news-area pt-130 mx-10 " data-background="assets/img/bg/sound-bg.png">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12" style=" text-align: center; ">
                <div class="ms-news-wrap mb-70">

                    <article>
                        <div class="chat-container">
                            <!-- Chat Header -->
                            <div class="chat-header">
                                Chatbot Musicly
                            </div>

                            <!-- Chat Body -->
                            <div class="chat-body" id="chat-body">
                                <!-- Bot Message -->
                                <div class="chat-message bot">
                                    <div class="message-content">
                                        Hello! How can I assist you today?
                                    </div>
                                </div>
                                <!-- User Message -->
                                <div class="chat-message user">
                                    <div class="message-content">
                                        Please Suggest 1980's Populer Song
                                    </div>
                                </div>
                                <div class="chat-message bot">
                                    <div class="message-content">
                                        Ohky!! wait 
                                    </div>
                                </div>
                            </div>

                            <!-- Chat Footer -->
                            <div class="chat-footer rounded">
                                <input type="text" id="messageInput" placeholder="Type a message...">
                                <button id="sendButton"><i class="fas fa-paper-plane"></i></button>
                            </div>
                        </div>
                    </article>

                </div>
            </div>

        </div>
    </div>
</section>
<?php
include "footer.php";
?>