<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Chatbot</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f9f9f9;
            font-family: Arial, sans-serif;
        }
        .chat-message {
            max-width: 70%;
            padding: 10px 15px;
            border-radius: 15px;
            font-size: 15px;
        }
        .chat-user {
            background: #d1f7c4;
            align-self: flex-end;
            margin-left: auto;
        }
        .chat-bot {
            background: #fff;
            border: 1px solid #ddd;
            margin-right: auto;
        }
    </style>
</head>
<body>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-success text-white text-center fw-bold">
                    🤖 AI Chatbot
                </div>
                <div class="card-body p-3" style="height: 450px; overflow-y: auto; background: #f5f5f5;" id="chat-box">
                    <div class="d-flex mb-3">
                        <div class="chat-message chat-bot shadow-sm">
                            <b>Bot:</b> Hello! How can I help you today?
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white">
                    <form id="chat-form" class="d-flex">
                        @csrf
                        <input type="text" name="message" id="message" class="form-control me-2"
                               placeholder="Type your question..." required>
                        <button type="submit" class="btn btn-success px-4">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('chat-form').addEventListener('submit', async function(e){
    e.preventDefault();

    let message = document.getElementById('message').value;
    let chatBox = document.getElementById('chat-box');

    // Show user message
    chatBox.innerHTML += `
        <div class="d-flex mb-2 justify-content-end">
            <div class="chat-message chat-user shadow-sm">
                <b>You:</b> ${message}
            </div>
        </div>
    `;

    // Send request to backend
    let response = await fetch("{{ route('chatbot.message') }}", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": "{{ csrf_token() }}"
        },
        body: JSON.stringify({ message: message })
    });

    let data = await response.json();

    // Show bot reply
    chatBox.innerHTML += `
        <div class="d-flex mb-2">
            <div class="chat-message chat-bot shadow-sm">
                <b>Bot:</b> ${data.reply}</div>
        </div>
    `;

    // Clear input
    document.getElementById('message').value = "";

    // Scroll to bottom
    chatBox.scrollTo({ top: chatBox.scrollHeight, behavior: 'smooth' });
});
</script>
</body>
</html>
