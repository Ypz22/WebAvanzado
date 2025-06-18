curl -X POST http://10.40.26.232:8000 \
  -H "Content-Type: text/xml" \
  -d '<?xml version="1.0"?>
<Envelope xmlns="http://schemas.xmlsoap.org/soap/envelope/">
  <Body>
    <calcularIMC>
      <altura>1.75</altura>
      <peso>70</peso>
    </calcularIMC>
  </Body>
</Envelope>'