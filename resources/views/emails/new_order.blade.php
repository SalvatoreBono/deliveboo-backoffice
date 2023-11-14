<x-mail::message>
    <h1>Gentile {{ $formData['customer_name'] }}, Riceverai il tuo ordine a breve</h1>
    <h3>Riepilogo ordine:</h3>
    <ul>
        @for ($i = 0; $i < count($formData['product_name']); $i++)
            <li>{{ $formData['quantities'][$i] }} - {{ $formData['product_name'][$i] }}</li>
        @endfor
    </ul>
    <div>Totale: {{ $formData['total_price'] }}€</div>

</x-mail::message>
