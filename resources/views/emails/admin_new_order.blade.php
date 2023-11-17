<x-mail::message>
    <h1>Nuovo ordine aggiunto nel DB</h1>
    <ul>
        <li>Nome: {{ $formData['customer_name'] }}</li>
        <li>Cognome: {{ $formData['customer_surname'] }}</li>
        <li>Email: {{ $formData['customer_email'] }}</li>
        <li>Numero: {{ $formData['customer_phone'] }}</li>
        <li>Via: {{ $formData['customer_address'] }}</li>
        <li>Note: {{ $formData['notes'] }}</li>
        <li>Totale: {{ $formData['total_price'] }}€</li>
    </ul>
</x-mail::message>
