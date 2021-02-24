<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Kalkulator</title>
</head>

<body>
    <h1>KALKULATOR</h1>
    <form action="/hitung">
        <input type="number" name="angka1" @if (Session::get('angka1')) value="{{ Session::get('angka1') }}" @endif placeholder="Masukkan Angka 1">

        <select name="operator">
            <option @if (Session::get('operator') && Session::get('operator') == 'tambah') selected @endif value="tambah">+</option>
            <option @if (Session::get('operator') && Session::get('operator') == 'kurang') selected @endif value="kurang">-</option>
            <option @if (Session::get('operator') && Session::get('operator') == 'kali') selected @endif value="kali">x</option>
            <option @if (Session::get('operator') && Session::get('operator') == 'bagi') selected @endif value="bagi">:</option>
        </select>
        <input type="number" name="angka2" @if (Session::get('angka2')) value="{{ Session::get('angka2') }}" @endif placeholder="Masukkan Angka 2">
        <input type="submit" value="Hitung">
    </form>
    @if (Session::get('hasil'))
        Hasil : <strong>{{ Session::get('hasil') }}</strong>
    @endif
</body>

</html>