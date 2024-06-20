<!DOCTYPE html>
<html>
<head>
  <title>Chat Bot</title>
 
  <style>
    * {
  margin: 0;
}

body {
  background-image: url(img.avif);
  background-repeat: repeat;
  background-size: cover;
}

.chat-header {
  text-align: center;
  background-position: 0px;
  border: 5px solid rgb(230, 17, 17);
  background-repeat: no-repeat;
  background-size: cover;
  text-align: center;
  color: #ffffff;
}

#ds {
  width: 200px;
  height: 200px;
  border-radius: 100%;
  border: 3px solid black;
  position: relative;
  top: 11px;
}

.user-message {
  box-shadow:-14px 4px 29px 18px bisque;
  background-color: gold;
  color: white;
  border: 2px solid white;
  padding: 5px 1px 12px 5px;
  width: 10%;
  text-align: center;
  border-radius: 23px 23px 34px 34px;
  margin: 23px;
}

.chatbot-message {
  box-shadow:30px 6px 9px 11px gainsboro;
  display: inline-block;
  background-color: blue;
  border: 2px solid rgb(162, 244, 46);
  padding: 8px 17px 23px 31px;
  text-align: center;
  border-radius: 23px 23px 34px 34px;
  color:white;
}

h2 {
  font-size: 2.5rem;
  font-weight: bold;
}

.user-input {
  display: flex;
  justify-content: center;
}

#userInput {
  background-color: white;
  font-size: 1rem;
  height: 7vh;
  width: 45%;
  position: absolute;
  left: 3px;
}

#userInput:hover {
  background-color: black;
  color: whitesmoke;
  border: 3px solid black;
  border-color: #a6f0f0;
  font-size: 1.5rem;
}

#sendButton {
  background-color: green;
  font-size: 1.5rem;
  border: 3px solid red;
}

#sendButton:hover {
  background-color: red;
  color: #ebb0b3;
  border: 3px solid red;
  border-color: rgb(29, 241, 64);
  font-size: 1.9rem;
  padding-left:12px ;
}

.auto-type {
  transform: translate(-80%, -60%);
  width: 40%;
  text-align: center;
  font-family: poppkin;
  margin: 0;
  padding: 0;
  color: rgb(255, 161, 47);
  background-color: #a6f0f0;
  font-size: 2.5em;
}

  </style>
</head>
<body>
  <div class="chat-container">
    <div class="chat-header">
      <img id="ds" src="photo-1485827404703-89b55fcc595e.avif" alt="">
      
      <h2>Chat Bot</h2>
      <div class="d"
        <h7> <span class="auto-type"></span></h7><br>
        </div>
    
        <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
        <script>
            var typed =new Typed(".auto-type", {
            strings: ["Advice", "information", "conversation", "Help"],
            typespeed: 150,
            backtype: 150,
            loop: true
            })
          </script>
      
        </div>
    <div id="chatArea" class="chat-area"></div><br>
    <div class="user-input"><br>
      <input type="text" id="userInput" placeholder="Type your message..." autofocus><br>
      <button id="sendButton">Send</button>
    </div>
  </div>

 <script>
  // Get required elements from the DOM
const chatArea = document.getElementById('chatArea');
const userInput = document.getElementById('userInput');
const sendButton = document.getElementById('sendButton');

// Function to append a message to the chat area
function appendMessage(sender, message) {
  const messageElement = document.createElement('div');
  messageElement.classList.add('message', sender === 'user' ? 'user-message' : 'chatbot-message');
  messageElement.textContent = message;
  chatArea.appendChild(messageElement);
}

// Function to generate a response based on the user's message
function generateResponse(message) {
  // Add your logic here to generate appropriate responses
  // You can use if-else statements, switch statements, or even external APIs or machine learning models

  // Here's a simple example that just echoes the user's message
  return "You said: " + message;
}

// Function to handle sending a message
function sendMessage() {
  const message = userInput.value;

  if (message.trim() !== '') {
    // Append user's message to the chat area
    appendMessage('user', message);

    // Process user's message and generate a response
    const response = generateResponse(message);

    // Append chatbot's response to the chat area
    appendMessage('chatbot', response);

    // Clear user's input
    userInput.value = '';

    // Scroll to the bottom of the chat area
    chatArea.scrollTop = chatArea.scrollHeight;
  }
}

// Event listener for the send button
sendButton.addEventListener('click', sendMessage);

// Event listener for the Enter key
userInput.addEventListener('keydown', (event) => {
  if (event.key === 'Enter') {
    sendMessage();
  }
});

// Function to generate a response based on the user's message
function generateResponse(message) {
    const lowerCaseMessage = message.toLowerCase();
if (lowerCaseMessage === 'hello') {
    return 'Hello! How may I assist you today?';
  } else if (lowerCaseMessage.includes('help')) 
    return 'Sure, I can help you. What do you need assistance with?';

if (lowerCaseMessage.includes('weather')) {
    return 'The weather is sunny and warm today.';
  } else if (lowerCaseMessage.includes('time')) {
    const currentTime = new Date().toLocaleTimeString();
    return 'The current time is ' + currentTime + '.';
  } else if (lowerCaseMessage.includes('thank you')) {
    return "You're welcome! Feel free to ask if you have any more questions.";
  } else if (lowerCaseMessage.includes('bye') || lowerCaseMessage.includes('goodbye')) {
    return 'Goodbye! Have a great day!';
 }
  if (lowerCaseMessage.includes('goodbye')) {
    return 'Goodbye! Have a nice day!';
  } else if (lowerCaseMessage.includes('help')) {
    return 'Sure! I am here to assist you. How can I help you?';
  } else if (lowerCaseMessage.includes('thank you')) {
    return "You're welcome!";
  }

  else if (lowerCaseMessage.includes('thanks')) {
    return "You're welcome!";
  }

  else if (lowerCaseMessage.includes("how are you")){
  return "i am good";
  }

  else if (lowerCaseMessage.includes("tell me your name")){
      return "i am chat bot";
  }

  else if (lowerCaseMessage.includes("joke")){
    return "Why don’t scientists trust atoms Because they make up everything";
  }

{
  
    if (lowerCaseMessage === 'hello') {
      return 'Namaste! Aapko kaise madad kar sakta hoon?';
    }
    
    else if (lowerCaseMessage.includes('madad')) {
      return 'Jarur, main aapki madad kar sakta hoon. Aapko kis baare mein madad chahiye?';
    } 
    
    else if (lowerCaseMessage.includes('ajj ka mausham')) {
      return 'Aaj ka mausam garam aur dhup bhara hai.';
    } 
    
    else if (lowerCaseMessage.includes('abhi ka samay kya hai')) {
      const currentTime = new Date().toLocaleTimeString();
      return 'Vartaman samay ' + currentTime + ' hai.';
    }
    
    else if (lowerCaseMessage.includes('dhanyavad')) {
      return 'Swagat hai! Aur kuch sawaal ho toh poochhna mat bhooliyega.';
    }
    
    else if (lowerCaseMessage.includes('phir milate hai') || lowerCaseMessage.includes('goodbye')) {
      return 'Alvida! Ek achchhe din ki shubhakamnayein!';
    }

     else if (lowerCaseMessage.includes('tum kaishe ho bot')) {
      return 'Main achha hoon. Dhanyavaad!';
    } 
    
    else if (lowerCaseMessage.includes('tumko kaise bulau')) {
      return 'Main ek chat bot hoon.';
    }

     else if (lowerCaseMessage.includes('next')) {
      return 'Santa: Bhai, Mujhe samajh nahi aa raha hai ki apna surname kya rakhu? Mere padosi keh rahe hai ki apne surname mein Singh rakho. Lekin mere father keh rahe hai ki Pepsi rakho. Banta: Pepsi kyun? Santa: Kyunki Pepsi peete hi swagatam karti hai "Yeh Rishta Kya Kehlata Hai';
    } 
    if (lowerCaseMessage.includes('good')) {
    return 'yes , all good! and you!';
  }
  if (lowerCaseMessage.includes('tum kaun ho')) {
    return 'mai chat bot hu ';
  }
  if (lowerCaseMessage.includes('good morning bot')) {
    return 'same to you, any help';
  }

const qaPairs = [
    { question: 'hello', answer: 'Hello! How may I assist you today?' },
    { question: 'help', answer: 'Sure, I can help you. What do you need assistance with?' },
    { question: 'weather', answer: 'The weather is sunny and warm today.' },
    { question: 'time', answer: 'The current time is ' + new Date().toLocaleTimeString() + '.' },
    { question: 'thank you', answer: "You're welcome! Feel free to ask if you have any more questions." },
    { question: 'bye', answer: 'Goodbye! Have a great day!' },
    { question: 'good morning bot', answer: 'Same to you! Any help?' },
    { question: 'how are you', answer: 'I am doing well, thank you!' },
    { question: 'what is your purpose', answer: 'I am here to assist and provide information.' },
    { question: 'tell me a joke', answer: 'Why don’t scientists trust atoms? Because they make up everything.' },
    { question: 'who created you', answer: 'I was created by sachin.' },
    { question: 'favorite color', answer: 'I don’t have a favorite color. I’m just a program!' },
    { question: 'where are you from', answer: 'I exist in the digital realm, so I don’t have a physical location.' },
    // Additional question-answer pairs
    { question: 'what is your name', answer: 'I am a chatbot, I don’t have a personal name.' },
    { question: 'can you speak other languages', answer: 'I primarily communicate in English, but I can try to understand other languages too.' },
    { question: 'how does the internet work', answer: 'The internet is a global network of interconnected computers that communicate using standardized protocols.' },
    { question: 'do you have siblings', answer: 'No, I don’t have siblings. I’m a standalone program.' },
    { question: 'what is the meaning of life', answer: 'The meaning of life is a philosophical question. My purpose is to assist and provide information.' },
    { question: 'are you a human', answer: 'No, I am not a human. I am a computer program.' },
    
    { question: 'what is bhakti', answer: 'Bhakti is the path of devotion in Hinduism, emphasizing love and devotion to a personal god.' },
    { question: 'how to practice bhakti', answer: 'Practicing bhakti involves expressing love and devotion to a chosen deity through prayer, rituals, and surrender.' },
    { question: 'who is your favorite deity', answer: 'As a chatbot, I don’t have personal preferences, but I can provide information about various deities.' },
    { question: 'tell me a bhakti mantra', answer: 'One popular bhakti mantra is the Maha Mantra: Hare Krishna Hare Krishna, Krishna Krishna Hare Hare, Hare Rama Hare Rama, Rama Rama Hare Hare.' },
    { question: 'importance of bhakti in spirituality', answer: 'Bhakti is considered a powerful path to spiritual realization, emphasizing a personal and loving connection with the divine.' },
    { question: 'how to deepen bhakti', answer: 'Deepening bhakti involves regular worship, prayer, chanting, and cultivating a sincere and loving relationship with the divine.' },
    // Additional bhakti-related question-answer pairs
    { question: 'tell me a bhajan', answer: 'One popular bhajan is "Vaishnav Jan To Tene Kahiye Je," a devotional song expressing virtuous qualities.' },
    { question: 'can you recommend a book on bhakti', answer: 'A classic book on bhakti is "Bhagavad Gita," which discusses the path of devotion among other spiritual teachings.' },
    { question: 'what are the nine forms of bhakti', answer: 'The nine forms of bhakti are: (1) Śravaṇa (listening to the divine stories), (2) Kīrtana (singing the praises), (3) Smaraṇa (remembering the divine), (4) Pāda-sevana (serving the deity’s feet), (5) Arcana (worshipping), (6) Vandanam (praying), (7) Dāsyam (servitude), (8) Sākhyam (friendship), and (9) Ātma-nivedanam (complete surrender).' },

    { question: 'what are the benefits of practicing bhakti', answer: 'Practicing bhakti can bring inner peace, spiritual fulfillment, and a sense of connection with the divine. It helps cultivate love, compassion, and devotion.' },
    { question: 'tell me a story of devotion', answer: 'One inspiring story is that of Prahlada, a devotee of Lord Vishnu, who remained steadfast in his devotion despite facing challenges from his father, the demon king Hiranyakashipu.' },
    { question: 'how to overcome obstacles in bhakti', answer: 'Facing obstacles in bhakti is natural. Overcoming them involves perseverance, seeking guidance from spiritual teachers, and deepening one’s faith and devotion.' },
    { question: 'can you explain the concept of Ishta Devata', answer: 'Ishta Devata refers to a devotee’s chosen deity, a personal form of the divine to whom one feels a special connection. It can be any god or goddess based on personal affinity.' },
    { question: 'what is the significance of pilgrimage in bhakti', answer: 'Pilgrimages hold spiritual significance in bhakti, providing devotees with the opportunity to visit sacred places, perform rituals, and deepen their connection with the divine.' },
    
    { question: 'how to cultivate devotion in daily life', answer: 'Cultivating devotion in daily life involves incorporating prayer, meditation, and acts of kindness into your routine, and maintaining a mindful awareness of the divine presence.' },
    { question: 'tell me about famous bhakti saints', answer: 'Famous bhakti saints include Mirabai, Tulsidas, Sant Tukaram, and Saint Kabir, who devoted their lives to expressing love and devotion to the divine.' },
    { question: 'what is the role of music in bhakti', answer: 'Music, especially devotional songs (bhajans and kirtans), plays a significant role in bhakti by creating a conducive atmosphere for connecting with the divine and expressing deep emotions.' },

    { question: 'what is Namasankirtan', answer: 'Namasankirtan is the congregational chanting of the holy names of God. It is a powerful practice in bhakti that helps in purifying the mind and invoking divine grace.' },
    { question: 'how does bhakti differ from other spiritual paths', answer: 'While other spiritual paths may emphasize knowledge (jnana), meditation (dhyana), or selfless action (karma), bhakti focuses on cultivating love and devotion as the primary means to attain spiritual realization.' },
    { question: 'tell me about the significance of Aarti', answer: 'Aarti is a devotional ritual involving the waving of lighted wicks before an image of a deity. It symbolizes offering one’s gratitude, love, and devotion to the divine.' },
    { question: 'what is the importance of Guru in bhakti', answer: 'The Guru in bhakti is a spiritual guide who imparts knowledge, provides guidance on the path of devotion, and helps the devotee establish a connection with the divine.' },
    { question: 'how can one surrender in bhakti', answer: 'Surrender in bhakti involves offering one’s ego, desires, and actions to the divine with complete trust and devotion. It is a key aspect of deepening the relationship with the divine.' },
    // Additional bhakti-related question-answer pairs
    { question: 'what are the different forms of bhakti', answer: 'Bhakti can take various forms, including Saguna Bhakti (devotion to a deity with form) and Nirguna Bhakti (formless devotion to the absolute, unmanifested Brahman).' },
    { question: 'how to choose a personal deity', answer: 'Choosing a personal deity is a personal preference. It may be based on cultural background, family tradition, or personal resonance. Many people feel drawn to a specific deity naturally.' },
    { question: 'tell me a bhakti quote', answer: 'A famous bhakti quote is from Sant Tulsidas: "जो रघुकुलरीति सदा चली आई, प्राणजाइ पर वचन न आवै।" (The way of life that belonged to the Raghu dynasty, it should continue to exist forever; let my life go, but let my words not fail.)' },

    { question: 'what is Bhakti Yoga', answer: 'Bhakti Yoga is the path of devotion and love towards a personal god. It is one of the traditional paths of yoga, emphasizing surrender, love, and devotion as a means to attain spiritual realization.' },
    { question: 'tell me about famous bhakti festivals', answer: 'Some famous bhakti festivals include Krishna Janmashtami, Ratha Yatra, Diwali, and Navaratri. These festivals are celebrated with devotion, prayer, and various rituals.' },
    { question: 'how to deal with doubts in bhakti', answer: 'Doubts are natural in any spiritual practice. In bhakti, seeking guidance from a knowledgeable source, studying scriptures, and cultivating a sincere heart can help address and overcome doubts.' },
    { question: 'tell me a story of divine love', answer: 'One beautiful story is that of Radha and Krishna, symbolizing the pure and divine love between the devotee (Radha) and the divine (Krishna). Their love is often celebrated in poetry, music, and art.' },
    { question: 'can one practice bhakti in daily activities', answer: 'Yes, bhakti can be practiced in daily life through conscious living, offering every action to the divine, and maintaining a loving and devotional attitude in all activities.' },
    { question: 'what is the role of compassion in bhakti', answer: 'Compassion is a key aspect of bhakti. As one deepens in devotion, a natural extension is the development of compassion and love for all living beings, recognizing the divine in everyone.' },
    { question: 'tell me about the significance of prasadam', answer: 'Prasadam is food offered to the deity and then distributed to devotees. Consuming prasadam is considered spiritually purifying and is a way to receive the divine blessings.' },

    { question: 'how to stay motivated', answer: 'Staying motivated involves setting clear goals, breaking them into smaller tasks, and celebrating small victories along the way. Surround yourself with positive influences and focus on the benefits of achieving your goals.' },
    { question: 'tell me a motivational quote', answer: 'Heres one: The only way to do great work is to love what you do." - Steve Jobs' },
    { question: 'how to overcome challenges', answer: 'Overcoming challenges requires a positive mindset. Break challenges into manageable steps, seek support when needed, and view obstacles as opportunities for growth.' },
    { question: 'how to find passion in life', answer: 'Finding passion involves exploring different activities, reflecting on what brings you joy and fulfillment, and aligning your actions with your values and interests.' },
    { question: 'tell me a success story', answer: 'One inspiring success story is that of J.K. Rowling, who faced rejection but persevered to become a best-selling author of the Harry Potter series.' },
    // Additional motivational question-answer pairs
    { question: 'how to overcome self-doubt', answer: 'Overcoming self-doubt involves recognizing negative thoughts, reframing them with positive affirmations, and focusing on your strengths and achievements.' },
    { question: 'what habits lead to success', answer: 'Habits that contribute to success include setting goals, prioritizing tasks, maintaining a strong work ethic, continuous learning, and cultivating a positive and resilient mindset.' },
    { question: 'how to stay positive in tough times', answer: 'Staying positive during tough times involves practicing gratitude, surrounding yourself with supportive people, and focusing on solutions rather than problems.' },

    { question: 'how to maintain focus', answer: 'Maintaining focus involves eliminating distractions, prioritizing tasks, and breaking work into smaller, manageable steps. Regular breaks and staying organized can also contribute to sustained focus.' },
    { question: 'tell me about the power of positive thinking', answer: 'Positive thinking has the power to influence your mindset, behavior, and outcomes. It can enhance resilience, improve problem-solving abilities, and contribute to overall well-being.' },
    { question: 'how to set and achieve goals', answer: 'Setting and achieving goals involves making them specific, measurable, achievable, relevant, and time-bound (SMART). Break larger goals into smaller tasks, track progress, and celebrate milestones.' },
    { question: 'what motivates successful people', answer: 'Successful people are often motivated by a combination of passion, purpose, and a strong desire to make a positive impact. They maintain a growth mindset and are resilient in the face of challenges.' },
    { question: 'how to turn failures into opportunities', answer: 'Turning failures into opportunities involves learning from mistakes, adapting strategies, and viewing setbacks as valuable lessons. Resilience and a positive attitude are crucial in this process.' },
    { question: 'how to stay motivated during difficult projects', answer: 'Staying motivated during difficult projects requires breaking them into smaller tasks, finding inspiration in the overall purpose, and seeking support from colleagues or mentors.' },
    { question: 'tell me about the importance of perseverance', answer: 'Perseverance is crucial for success. It involves persistence in the face of challenges, the ability to learn from setbacks, and the determination to keep moving forward despite obstacles.' },
    { question: 'how to build self-confidence', answer: 'Building self-confidence involves setting and achieving small goals, acknowledging accomplishments, and adopting positive self-talk. Continuous learning and improvement also contribute to increased self-confidence.' },

    { question: 'tell me about the rules of basketball', answer: 'Basketball is played between two teams of five players each. The objective is to score points by shooting the ball through the opponent’s basket. Each basket counts for two or three points, depending on the player’s position on the court.' },
    { question: 'who is considered the greatest soccer player of all time', answer: 'The title of the greatest soccer player is subjective and varies among fans. Some commonly mentioned players in this discussion include Pele, Diego Maradona, Lionel Messi, and Cristiano Ronaldo.' },
    { question: 'what are the basic rules of cricket', answer: 'Cricket is played between two teams. Each team takes turns to bat and bowl. The batting team aims to score runs, while the bowling team tries to dismiss the batsmen. The team with the most runs at the end wins.' },
    { question: 'tell me about the history of the Olympics', answer: 'The Olympic Games have ancient origins in Greece and were revived in the modern era in 1896. The games occur every four years and feature various sports, with athletes from around the world competing for gold, silver, and bronze medals.' },
    { question: 'who holds the record for the fastest 100m sprint', answer: 'As of my last knowledge update in January 2022, Usain Bolt from Jamaica holds the record for the fastest 100m sprint, with a time of 9.58 seconds set in 2009.' },
    { question: 'tell me about the basics of tennis', answer: 'Tennis is played between two players (singles) or two teams of two players each (doubles). The objective is to score points by hitting the ball over the net and into the opponent’s court. The scoring system includes love, 15, 30, 40, and game.' },
    { question: 'who won the last FIFA World Cup', answer: 'As of my last knowledge update in January 2022, the most recent FIFA World Cup was held in 2018, and the winner was France. They defeated Croatia in the final to secure their second World Cup title.' },
    { question: 'tell me about the basic rules of baseball', answer: 'Baseball is played between two teams. The batting team aims to score runs by hitting the ball and running around bases, while the fielding team tries to get the batters out. The game consists of innings, and the team with the most runs at the end wins.' },

    { question: 'tell me about the scoring system in golf', answer: 'In golf, players aim to complete each hole in as few strokes as possible. The player with the lowest total number of strokes at the end of the round or tournament is the winner. Each hole has a designated par score based on its difficulty.' },
    { question: 'who is the all-time leading scorer in the NBA', answer: 'As of my last knowledge update in January 2022, Kareem Abdul-Jabbar holds the record for the all-time leading scorer in the NBA, with 38,387 points scored during his career.' },
    { question: 'what is the offside rule in soccer', answer: 'In soccer, a player is considered offside if they are nearer to the opponent’s goal line than both the ball and the second-to-last defender when the ball is played to them. However, certain exceptions and conditions apply.' },
    { question: 'tell me about the Grand Slam tournaments in tennis', answer: 'The Grand Slam tournaments in tennis are the Australian Open, French Open, Wimbledon, and the US Open. Winning all four tournaments in a calendar year is referred to as a Grand Slam. Each tournament is played on a different surface.' },
    { question: 'who is the most decorated Olympian of all time', answer: 'As of my last knowledge update in January 2022, Michael Phelps holds the title of the most decorated Olympian of all time. He won a total of 23 gold medals, 3 silver medals, and 2 bronze medals in swimming.' },
    // Additional sports-related question-answer pairs
    { question: 'tell me about the basics of American football', answer: 'American football is played between two teams. The objective is to score points by advancing the ball into the opponent’s end zone. The game consists of four quarters, and each team has offense and defense units.' },
    { question: 'who won the last Super Bowl', answer: 'As of my last knowledge update in January 2022, the most recent Super Bowl was Super Bowl LV (2021), and the Tampa Bay Buccaneers won the championship by defeating the Kansas City Chiefs.' },
    { question: 'what is a hat-trick in cricket', answer: 'In cricket, a hat-trick occurs when a bowler dismisses three batsmen with three consecutive deliveries in the same match. It is a rare and significant achievement.' },
    // Add more sports-related question-answer pairs here

    { question: 'tell me about the history of the FIFA World Cup', answer: 'The FIFA World Cup is the premier international football (soccer) tournament. It was first held in 1930, and the inaugural tournament took place in Uruguay. The World Cup is held every four years and attracts teams from around the world.' },
    { question: 'what is the format of the UEFA Champions League', answer: 'The UEFA Champions League is an annual football club competition organized by the Union of European Football Associations (UEFA). The tournament involves the top club teams from European leagues, and the format includes group stages followed by knockout rounds.' },
    { question: 'tell me about the history of the Wimbledon tennis tournament', answer: 'Wimbledon is the oldest tennis tournament in the world, dating back to 1877. It is one of the four Grand Slam tournaments and is played on grass courts. Wimbledon is known for its traditions, including the strict dress code and the consumption of strawberries and cream.' },
    { question: 'who is the fastest bowler in cricket history', answer: 'The title of the fastest bowler in cricket history is often debated. Bowlers like Shoaib Akhtar, Brett Lee, and Jeff Thomson are frequently mentioned for their exceptional pace. Speeds can vary, and technology is used to measure ball velocity.' },
    { question: 'tell me about the Tour de France', answer: 'The Tour de France is an annual men\'s multiple-stage bicycle race primarily held in France. It is one of the most prestigious events in professional cycling and covers a grueling course that includes mountain stages, time trials, and flat stages.' },
    // Additional sports-related question-answer pairs
    { question: 'what is the significance of the Green Jacket in golf', answer: 'The Green Jacket is awarded to the winner of the Masters Tournament, one of golf\'s major championships. The tradition began in 1949, and the jacket symbolizes membership in the exclusive Augusta National Golf Club, the venue for the Masters.' },
    { question: 'tell me about the basics of rugby', answer: 'Rugby is a team sport that can be played with either 15 or 7 players per team. The objective is to score points by carrying, passing, or kicking the ball over the opponent\'s goal line. Rugby includes scrums, lineouts, and tries as scoring methods.' },
    { question: 'who is the all-time leading goal scorer in the NHL', answer: 'As of my last knowledge update in January 2022, Wayne Gretzky holds the record for the all-time leading goal scorer in the National Hockey League (NHL), with 894 career goals.' },
    // Add more sports-related question-answer pairs here
];

// Check if the user's message matches any predefined question
for (const pair of qaPairs) {
    if (lowerCaseMessage.includes(pair.question)) {
        return pair.answer;
    }
}

// Default response for unmatched questions
return "I didn't understand the question. Can you ask something else?";



  }

  }
 </script>
</body>
</html>