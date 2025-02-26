document.getElementById("send-btn").addEventListener("click", function () {
    const userInput = document.getElementById("user-input").value;
    if (userInput.trim() !== "") {
        addMessage(userInput, "user");
        document.getElementById("user-input").value = ""; // Clear input box
  
        // Bot response (you can customize this)
        setTimeout(function () {
            const botResponse = getBotResponse(userInput);
            addMessage(botResponse, "bot");
        }, 1000); // Delay the bot response
    }
  });
  
  function addMessage(message, sender) {
    const chatBox = document.getElementById("chat-box");
    const messageElement = document.createElement("div");
    messageElement.classList.add("message", sender);
    messageElement.textContent = message;
    chatBox.appendChild(messageElement);
    chatBox.scrollTop = chatBox.scrollHeight; // Scroll to the bottom
  }
  
  function getBotResponse(userInput) {
    // Simple response logic (you can make this more advanced)
    if (userInput.toLowerCase().includes("hello")) {
        return "Hi there! How can I help you today?";
    } else if (userInput.toLowerCase().includes("how are you")) {
        return "I'm just a bot, but I'm doing great! How about you?";
    } else {
        return "Sorry, I didn't understand that. Can you try again?";
    }
  }
  