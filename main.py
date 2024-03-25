import requests
import sys
import json

def get_assistant_response(user_message):
    if not user_message.strip():  
        return {"error": "Пустое сообщение"}

    with open('body.json', 'r', encoding='utf-8') as f:
        model_data = json.load(f)

    model_data["messages"][1]["text"] = user_message

    url = "https://llm.api.cloud.yandex.net/foundationModels/v1/completion"

    headers = {
        'Authorization': 'Api-Key AQVN2RvfN5os8VmFhCoYbvfx3IkPRIwAPdFPj2OY',
        'Content-Type': 'application/json'
    }

    response = requests.post(url, headers=headers, json=model_data)

    if response.status_code == 200:
        data = response.json()
        alternatives = data.get("result", {}).get("alternatives", [])
        if alternatives:
            assistant_response = alternatives[0]["message"]["text"]
            return {"assistant_response": assistant_response}
        else:
            return {"error": "Пустой ответ от ассистента"}
    else:
        error_message = {
            "error": f"Ошибка при получении ответа от ассистента: {response.status_code} {response.text}"
        }
        return error_message

if __name__ == "__main__":
    user_message = sys.argv[1] if len(sys.argv) > 1 else ""
    assistant_response = get_assistant_response(user_message)
    print(json.dumps(assistant_response))
