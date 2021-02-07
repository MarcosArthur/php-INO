const int ledPin13 = 13;
const int baudRate = 9600;

void setup() {
  pinMode(ledPin13, OUTPUT); // Defino a porta 13 do arduino como saida;
  Serial.begin(baudRate); // inicia a porta serial, configura a taxa de dados para 9600 bps (bytes po segundo)
}

void loop() {
  char value;
  value = getValueSerial(); // Esta variavel ira quarda os dados capurados pela porta serial;
  if (isValue() && isChar(value)) {
    verificationCondition(value);
  }
}

// função responsavel para retorna valor lido pela porta serial;
char getValueSerial() {
  return Serial.read();
}

// função responsavel por realizar verificação e ligar um led;
void verificationCondition(char value) {
  switch (value) {
    case 'l' :
      digitalWrite(ledPin13, HIGH);
      break;
    case 'd' :
      digitalWrite(ledPin13, LOW);
      break;
  }
}
// função verifica se tem algum dado disponivel na porta serial;
boolean isValue() {
  if (Serial.available()) {
    return true;
  }
  return false;

}

// função responsavel por verificar se dado capturando e um char;
boolean isChar(char caractere) {
  if (isAlpha(caractere)) {
    return true;
  }

  return false;
}
