// esp8266_test.ino
//
// Plot LM35 data on thingspeak.com using an Arduino and an ESP8266 WiFi
// module.
//
// Author: Mahesh Venkitachalam
// Website: electronut.in

#include <SoftwareSerial.h>
#include <stdlib.h>

// temperature variable
int val1 = 0;
int val2 = 0;
// LM35 analog input
int tempPin1 = A1;
int tempPin2 = A2;

// replace with your channel's thingspeak API key
String apiKey = "4JUVSWA8KGG29NWW";

// connect 10 to TX of Serial USB
// connect 11 to RX of serial USB
SoftwareSerial ser(11, 10); // RX, TX

// this runs once
void setup() {                
  // initialize the digital pin as an output.
  pinMode(8, OUTPUT);
  pinMode(9, OUTPUT);  

  // enable debug serial
  Serial.begin(115200);
  // enable software serial
  ser.begin(115200);

  // reset ESP8266
  ser.println("AT+RST");
}


// the loop
void loop() {
  
  // PHYSICAL SYSTEM
  // read the value from LM35.
  // read 10 values for averaging.
  val1 = analogRead(tempPin1);
  val2 = analogRead(tempPin2);   
  
  // convert to temp:
  float mv1 = (val1/1024.0)*5000;
  float mv2 = (val2/1024.0)*5000; 
  float cel1 = mv1/10;
  float cel2 = mv2/10;

  // temperature difference
  float difcel = minus(cel1,cel2);
  float farh = (difcel*9)/5 + 32;

  // motor activation
  float bound = 40;
  if(farh > bound){
    turnonMotor();
  } else {
    turnoffMotor();
  }

  // convert to string
  char buf[16];
  String strTemp = dtostrf(farh, 4, 1, buf);

  Serial.println(strTemp);
  

  // THINGSPEAK CONNECTION
  // TCP connection THINGSPEAK
  String cmd = "AT+CIPSTART=\"TCP\",\"";
  cmd += "184.106.153.149"; // api.thingspeak.com
  cmd += "\",80";
  ser.println(cmd);

  if(ser.find("Error")){
    Serial.println("AT+CIPSTART error");
    return;
  }

  // prepare GET string
  String getStr = "GET /update?api_key=";
  getStr += apiKey;
  getStr +="&field1=";
  getStr += String(strTemp);
  getStr +="&field2=";
  getStr += String(cel1);
  getStr +="&field3=";
  getStr += String(cel2);
  getStr += "\r\n\r\n";

  // send data length
  cmd = "AT+CIPSEND=";
  cmd += String(getStr.length());
  
  ser.println(cmd);

  if(ser.find(">")){
    ser.print(getStr);
  }
  else{
    ser.println("AT+CIPCLOSE");
    // alert user
    Serial.println("AT+CIPCLOSE");
  }

  // thingspeak needs 15 sec delay between updates
  delay(16000);  
}

void turnonMotor(){
  int ind = 0;
  digitalWrite(8,!ind);
  digitalWrite(9,ind);
  delay(500);
  if(ind > 1)
    ind = 1;
}

void turnoffMotor(){
  int ind = 0;
  digitalWrite(8,!ind);
  digitalWrite(9,!ind);
}

float minus(float a,float b){
  if(a>b)
    return (a-b);
  else
    return (b-a); 
}
