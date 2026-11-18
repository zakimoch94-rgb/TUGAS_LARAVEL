<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Luas Segitiga</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="box">
        <h1>Kalkulator Luas Segitiga</h1>
        <form action="/kalkulator/segitiga/proses" method="POST">
            @csrf
            <label>Alas</label>
            <input type="number" step="any" name="alas" value="{{ old('alas') }}">
            @error('alas') <div class="error">{{ $message }}</div> @enderror

            <label>Tinggi</label>
            <input type="number" step="any" name="tinggi" value="{{ old('tinggi') }}">
            @error('tinggi') <div class="error">{{ $message }}</div> @enderror

            <button type="submit">Hitung</button>
        </form>

        @if ($luas !== null)
            <div class="hasil">Luas segitiga = <strong>{{ $luas }}</strong></div>
        @endif
    </div>
</body>
</html>
