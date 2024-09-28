<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot UI</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        
        .chat-container {
            width: 400px;
            max-width: 100%;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            height: 80vh;
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
        }
        .chat-footer {
            padding: 15px;
            background-color: #fff;
            border-top: 1px solid #eee;
            display: flex;
            align-items: center;
        }
        .chat-footer input {
            flex: 1;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 20px;
            outline: none;
            margin-right: 10px;
        }
        .chat-footer button {
            background-color: #4a90e2;
            border: none;
            padding: 10px;
            border-radius: 50%;
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
            color: #fff;
            background-color: #4a90e2;
            text-align: left;
        }
        .chat-message.user .message-content {
            background-color: #34c759;
            text-align: right;
        }
        .chat-message.bot .message-content {
            background-color: #4a90e2;
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
</head>
<body>

    <div class="chat-container">
        <!-- Chat Header -->
        <div class="chat-header">
            Chatbot Assistant
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
                    I need help with my order.
                </div>
            </div>
        </div>

        <!-- Chat Footer -->
        <div class="chat-footer">
            <input type="text" id="messageInput" placeholder="Type a message...">
            <button id="sendButton"><i class="fas fa-paper-plane"></i></button>
        </div>
    </div>

    <!-- Script for sending messages -->
    <script>
        const chatBody = document.getElementById('chat-body');
        const messageInput = document.getElementById('messageInput');
        const sendButton = document.getElementById('sendButton');

        // Function to add a message to the chat
        function addMessage(content, sender) {
            const messageDiv = document.createElement('div');
            messageDiv.classList.add('chat-message', sender);

            const messageContent = document.createElement('div');
            messageContent.classList.add('message-content');
            messageContent.innerText = content;

            messageDiv.appendChild(messageContent);
            chatBody.appendChild(messageDiv);

            // Scroll to the bottom
            chatBody.scrollTop = chatBody.scrollHeight;
        }

        // Send button event listener
        sendButton.addEventListener('click', function () {
            const messageText = messageInput.value.trim();
            if (messageText !== "") {
                // Add user message
                addMessage(messageText, 'user');
                messageInput.value = '';

                // Simulate bot response
                setTimeout(() => {
                    addMessage("Thank you for your message. I'm here to help.", 'bot');
                }, 1000);
            }
        });

        // Enter key to send message
        messageInput.addEventListener('keypress', function (e) {
            if (e.key === 'Enter') {
                sendButton.click();
            }
        });
    </script>

</body>
</html>
