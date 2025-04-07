# Simple chatbot program

def chatbot():
    print(" ChatBot: Hello! I'm a simple chatbot. Type 'exit' to end the chat.")
    
    while True:
        user_input = input("You: ").strip().lower()
        
        # Exit condition
        if user_input == 'exit':
            print(" ChatBot: Goodbye! Have a nice day. 👋")
            break
        
        # Basic responses
        if "hello" in user_input or "hi" in user_input:
            print(" ChatBot: Hello! How can I assist you today?")
        elif "how are you" in user_input:
            print(" ChatBot: I'm just a program, but I'm doing great! How about you?")
        elif "your name" in user_input:
            print(" ChatBot: I'm ChatBot, your virtual assistant.")
        elif "weather" in user_input:
            print(" ChatBot: I can't fetch live weather, but you can check a weather website! 🌤️")
        elif "help" in user_input:
            print(" ChatBot: I can answer basic questions. Try asking about my name, how I am, or say hello!")
        else:
            print(" ChatBot: I'm not sure how to respond to that. Try asking something else!")
        
# Run the chatbot
chatbot()
