<div {{ $attributes->merge(['class' => 'card']) }}>
    {{ $slot }}
</div>

<style>
    .card {
        background: #62605b;
        border: 1px solid #1c1c1a;
        max-width: 400px;
        margin: 5px auto;
    }

    .border-red {
        border: 1px solid red;
    }
</style>
