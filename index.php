<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mod</title>
</head>

<body class="relative">
    <style>
        .mod {
            display: none;
            position: fixed !important;
            bottom: 50px;
            z-index: 99999999999999;
            right: 84px;
            max-width: 380px;
            height: 508px;
            padding: 25px 25px 59px 25px;
            border-radius: 50px;
            position: relative;
            transition: transform 1s;
            /* Изменено на transform */
            transform: translate(700px);
            background: #fff;
            box-shadow: 0 0 20px 0px #00000017;
        }

        @media screen and (max-width: 767px) {

            .mod {
                display: none;
                position: fixed !important;
                bottom: 0px;
                z-index: 99999999999999;
                right: 0PX;
                max-width: 100%;
                height: 508px;
                padding: 25px 25px 59px 25px;
                border-radius: 50px 50px 0px 0px;
                position: relative;
                transition: transform 1s;
                /* Изменено на transform */
                transform: translateY(700px);
                background: #fff;
                box-shadow: 0 0 20px 0px #00000017;
            }
        }

        .even_mod {
            text-align: left;
            margin: 0px 0;
            background: #EEEEEE;
            /* height: 100%; */
            /* margin-top: 20px; */
            /* margin-bottom: 20px; */
            border-radius: 20px;
            padding: 10px;
        }

        .even_mod p:hover {
            color: #9e9e9e;
            margin: 0 0 5px 0;
            font-weight: 600;
        }

        li.pd10.flex-between.even_mod p {
            color: #9e9e9e;
            margin: 0 0 5px 0;
            font-weight: 600;
        }

        li.pd10.flex-between.odd_mod p {
            color: #9e9e9e;
            margin: 0 0 5px 0;
            font-weight: 600;
        }

        .odd_mod {
            text-align: right;
            margin: 0px 0;
            background: #01ACFF;
            border-radius: 20px;
            padding: 10px;
            color: #fff;
        }

        ul#list {
            height: 100%;
            display: flex;
            width: 100%;
            flex-direction: row-reverse;
            flex-wrap: wrap;
        }

        .flexCenter {
            overflow: scroll;
            /* overflow: hidden; */
            max-height: 400px;
        }

        .flexCenter::-webkit-scrollbar {
            display: none;
        }

        .input_chat_mr {
            /* margin-top: 20px; */
            /* position: absolute; */
            bottom: 14px;
        }

        .mod_logo {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            justify-content: flex-start;
            align-content: center;
        }

        .mod_body {
            position: relative;
            height: 100%;
            display: flex;
            width: 380px;
            flex-direction: column;
        }

        .div_logo_modes {
            margin-right: 7px;
        }

        .block_name_logo_mod p {
            margin: 0;
            padding: 0;
            font-weight: 700;
        }

        .block_name_logo_mod span {
            margin: 0;
            padding: 0;
        }

        .MDR {
            MARGIN-TOP: 20PX;
            margin-bottom: 20px;
        }

        .close_mod {
            border: none;
            background: none;
            position: absolute;
            top: 16px;
            right: 13px;
            padding: 0;
        }

        .relative {
            position: relative;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            align-content: center;
        }

        .wd100 {
            width: 100%;
        }

        .input_mod {
            border-radius: 25px;
            padding: 17px 38px 17px 21px;
            border: 1px solid #01ACFF;
        }

        .close_modes_none {
            position: absolute;
            top: 32px;
            right: 37px;
        }

        .close_modes_none button {
            border: none;
            background: none;
            position: relative;
            z-index: 2000;
        }

        .button_modals {
            margin-top: 15PX;
            margin-bottom: 50px;
            display: flex;
            flex-wrap: wrap;
        }

        .button_modals a {
            width: 100%;
            color: #000;
            text-decoration: none;
            padding: 6px 13px;
            display: block;
        }

        .button_modals li {
            border-radius: 9px;
            border: 1px solid #01ACFF;
            margin: 4px;

        }

        .animate-fade-in {
            opacity: 0;
            transform: translateY(50px);
            transition: transform 1s, opacity 3s;
        }

        .animate-fade-in.show {
            opacity: 1;
            transform: translateY(0);
        }

        .nohover {
            font-weight: 500;
        }

        .nohover:hover {
            font-weight: 500;

        }

        .mod_margin-bottom {
            margin-bottom: 20px;
        }

        .button_mod {
            WIDTH: 50PX;
            HEIGHT: 50PX;
            display: flex;
        }

        button#button_id_mod {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            border-radius: 50px;
            justify-content: center;
            align-content: center;
        }

        button#button_id_mod img {
            width: 100%;
        }

        .bot_mod {
            bottom: 14px;
            right: 70px;
        }

        button#close_models {
            display: flex;
            justify-content: flex-end;
            flex-direction: row-reverse;
        }

        .div_ol_big {
            content: "";
            display: flex;
            justify-content: center;
            align-items: center;
            width: 45px;
            background: #01ACFF;
            height: 45px;
            border-radius: 50px;
        }

        .div_ol_smail {
            background: #fff;
            width: 27px;
            height: 27px;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: 1s;
            border-radius: 50px;
            animation: changeSize 1s infinite alternate;
            /* Применяем анимацию с цикличным повторением */
        }

        @keyframes changeSize {
            0% {
                width: 27px;
                /* Начальный размер */
                height: 27px;
            }

            30% {
                width: 30px;
                /* Увеличение размера */
                height: 30px;
            }

            50% {
                width: 32px;
                /* Увеличение размера */
                height: 32px;
            }

            70% {
                width: 30px;
                /* Увеличение размера */
                height: 30px;
            }

            100% {
                width: 27px;
                /* Возвращение к начальному размеру */
                height: 27px;
            }
        }
        .chat-container {

}
.chat-messages {
    display: flex;
    flex-direction: row;
    margin: 0;
    align-content: flex-end;
    gap: 20px;
    padding: 0;
    flex-wrap: wrap;
    justify-content: flex-end;
}
.chat-input {

}
.user-message {
    background: #01ACFF;
    text-align: right;
    min-width: 30%;
    border-radius: 25px;
    font-weight: 600;
    padding: 10px;
    display: flex;
    color: #Fff;
    justify-content: flex-end;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    align-content: center;
}
p.name-bot {
    color: #9e9e9e;
    margin: 0 0 5px 0;
    font-weight: 600;
}
.bot-message {list-style: none;margin: 0;padding: 0;text-align: left;margin: 0px 0;background: #EEEEEE;/* height: 100%; *//* margin-top: 20px; *//* margin-bottom: 20px; */border-radius: 20px;padding: 10px;}
.message-list li {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .message-list li.bot-message {
        background-color: #f1f1f1;
    }

    .message-list li.user-message {
        background-color: #d4edda;
    }

    .message-list li.show {
        opacity: 1;
        transform: translateY(0);
    }

    </style>

<div class="button-fixed bot_mod button_mod" style="display: block;">
    <div class="active btn-ico ">
      <button id="button_id_mod">
        <div class="div_ol_big">
        <div class="div_ol_smail">
          
          </div>
        </div>
      </button>
    </div>
  </div>
<div class="mod" id="mod" style="">
        <div class="close_modes_none">
            <button id="close_models"> <img src="../assets/img/mod/close_modeks.svg" alt=""></button>
        </div>
        <div class="mod_body">
            <div class="mod_logo">
                <div class="div_logo_modes">
                    <img src="../assets/img/mod/logo_modes.svg" alt="123">
                </div>
                <div class="block_name_logo_mod">
                    <p>Экспресс Дизайн</p>
                    <span>На связи 24/7</span>
                </div>
            </div>

            <div class="flex pd flexCenter wd50 mod_margin-bottom">
            <ul id="chat-messages" class="chat-messages"></ul>

            </div>
            <!-- <ul class="button_modals">
            <li ><a href="kwol.ru">Скачать презентацию</a></li>
            <li><a href="kwol.ru">Получить PDF</a></li>
            <li><a href="kwol.ru">Расскажи мне про услуги</a></li>
        </ul> -->
        </div>

        <div class="flex pd  input_chat_mr relative">
            <input id="userMessage" type="text" class="wd100  input_mod" placeholder="Напиши мне.. ">
            <button id="sendMessage" class="pd  close_mod"><img src="../assets/img/mod/close_mod.svg" alt=""></button>
       
    
        </div>
        <div id="buttonFixed">1</div>
    </div>


    <script>
  document.addEventListener('DOMContentLoaded', function() {
    const chatMessages = document.getElementById('chat-messages');
    const userMessageInput = document.getElementById('userMessage');
    const sendMessageButton = document.getElementById('sendMessage');
    const modElement = document.getElementById('mod');
    const modElement2 = document.querySelector('.mod');
    const buttonFixed = document.getElementById('buttonFixed');
    
    const button_id_mod = document.getElementById('button_id_mod');
    const button_mod = document.querySelector('.button_mod');
  
    function sendInitialMessageToBot() {
      const initialMessage = 'Привет'; 
      sendMessageToBot(initialMessage);
    }
    
  
    sendInitialMessageToBot();
    document.addEventListener('click', function(event) {
     
      if (event.target !== button_mod) {
       
        if (modBlock && getComputedStyle(modBlock).display === 'block' && event.target !== modBlock) {
        
        } else {
          nonemd();
        }
      }
    });
  
    close_models.onclick = function() {
      nonemd();
    }
  
    document.addEventListener('keydown', function(event) {
      if (event.key === 'Enter') {
        document.getElementById('sendMessage').click();
      }
    });
  
  
    modElement.style.display = 'none';
  
    function nonemd() {
      button_mod.style.display = 'block';
  
      buttonFixed.style.display = 'block';
      var w = window.innerWidth;
      if (w < 767) {
        modElement.style.display = 'none';
        modElement.style.transition = 'transform 0.8s';
        modElement.style.transform = 'translateY(700px)';
        setTimeout(() => {
          modElement.style.transform = 'translateY(0)';
        }, 100);
      } else {
  
        modElement.style.display = 'none';
        modElement.style.transition = 'transform 0.5s';
        modElement.style.transform = 'translate(700px)';
        setTimeout(() => {
          modElement.style.transform = 'translate(0)';
        }, 100);
      }
    }
    button_id_mod.onclick = function onmod() {
      buttonFixed.style.display = 'none';
      button_mod.style.display = 'none';
      var w = window.innerWidth;
      if (w < 767) {
        modElement.style.display = 'block';
        modElement.style.transition = 'transform 0.8s';
        modElement.style.transform = 'translateY(100%)'; 
        setTimeout(() => {
          modElement.style.transform = 'translateY(0)';
        }, 100);
      } else {
  
        modElement.style.display = 'block';
        modElement.style.transition = 'transform 0.5s';
        modElement.style.transform = 'translate(100%)'; 
        setTimeout(() => {
          modElement.style.transform = 'translate(0)';
        }, 100);
      }
    };
    sendMessageButton.addEventListener('click', function() {
      sendMessageButton.disabled = true; 
      const message = userMessageInput.value.trim();
      if (message !== '') {
        addMessageToChat(message, false);
        sendMessageToBot(message);
        userMessageInput.value = '';
      }
    });
  
    function addMessageToChat(message, isBot) {
      sendMessageButton.disabled = false; 
        const listItem = document.createElement('li');
        listItem.textContent = message;
        listItem.classList.add('message');
        if (isBot) {
          listItem.classList.add('bot-message');
        
  
          const nameBotElement = document.createElement('p');
          nameBotElement.classList.add('name-bot');
          nameBotElement.textContent = 'Тимофей'; 
        
          listItem.insertBefore(nameBotElement, listItem.firstChild);
        } else {
          listItem.classList.add('user-message');
        }
        chatMessages.appendChild(listItem);
     
        void listItem.offsetWidth;
        listItem.classList.add('show');
      
     
        scrollToBottom();
      }
      
      function scrollToBottom() {
        const chatMessages = document.getElementById('chat-messages');
        chatMessages.scrollTop = chatMessages.scrollHeight;
      }
      
    function sendMessageToBot(message) {
      const xhr = new XMLHttpRequest();
      xhr.open('POST', 'api.php', true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
            try {
              const response = JSON.parse(xhr.responseText);
              if (response && response.hasOwnProperty('assistant_response')) {
                addMessageToChat(response.assistant_response, true);
              } else {
                addMessageToChat('Error: Unexpected response from server', true);
              }
            } catch (error) {
              console.error('Error parsing JSON:', error);
              addMessageToChat('Error processing response from server', true);
            }
          } else {
            console.error('Error:', xhr.status);
            addMessageToChat('Error sending request to server', true);
          }
        }
      };
      xhr.send('user_message=' + encodeURIComponent(message));
    }
  });
  
</script>

</body>

</html>