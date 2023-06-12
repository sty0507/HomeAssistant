// #include <WiFi.h>
// #include "DHT.h"
// #include <WebServer.h>
// const char* ssid = "bssm_free";
// const char* password = "bssm_free";
// const char* ip = "10.150.149.60";
// #define DHTPIN 15 // 온습도
// #define DHTTYPE DHT11
// DHT dht(DHTPIN, DHTTYPE);
// WiFiClient client;
// WebServer server(80);
// void setup() {
//   pinMode(2,OUTPUT);//led
//   Serial.begin(115200); //결과를 PC에서보겠다!
//  WiFi.mode(WIFI_STA);
//  WiFi.begin(ssid, password);
//  while (WiFi.status() != WL_CONNECTED) {
//    delay(500);
//    Serial.print(".");
//  }
//  Serial.println("");
//  Serial.println("WiFi connected");
//  Serial.println("IP address: ");
//  Serial.println(WiFi.localIP());


//  server.on("/click", []() {
//     String param = server.arg("param");
//     int state = turnon(digitalRead(2));
//     String url = "/project/onoff.php?state="+String(state);
//     client.print(String("GET ") + url + " HTTP/1.1\r\n" +
//                "Host: "+ip+"\r\n" +
//                "Connection: close\r\n\r\n");
//     // 요청 처리 코드 작성
//     server.send(200, "text/plain", "OK");
//   });

//   server.begin();
//   Serial.println("HTTP server started");
// }

// void loop() {
//   int readValue = analogRead(A0);
//   float humi = dht.readHumidity();
//   Serial.println(humi);
//   if (!client.connect(ip, 80)) {
//     Serial.println("connection failed");
//     return;
//   }
//   Serial.println("서버와 연결되었습니다!");
//   String url = "/project/action.php?ldata="+String(readValue)+"&hdata="+String(humi);
//   client.print(String("GET ") + url + " HTTP/1.1\r\n" +
//                "Host: "+ip+"\r\n" +
//                "Connection: close\r\n\r\n");
//   unsigned long t = millis(); //생존시간
//   while(1){
//     if(client.available()) break;
//     //if(millis() - t > 10000) break;
//     server.handleClient();
//   }
//   Serial.println("응답이 도착했습니다");
//   while(client.available()){
    
//     String line = client.readStringUntil('\n');
//           Serial.println(line);
//   }
//   Serial.println("연결이 해제되었습니다!");
  
//   delay(2500);
// }

// int turnon(int val){
//   int state = val == 0 ? 1 : 0;
//   digitalWrite(2, state);
//   return state;
// }
