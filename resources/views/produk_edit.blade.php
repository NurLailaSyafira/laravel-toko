<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
</head>
<body>

    <h1>Edit Produk</h1>

    <a href="/produk">Kembali ke Data Produk</a>
    <br><br>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/produk/{{ $produk->id_produk }}" method="POST">
        @csrf
        @method('PUT')

        <table>
            <tr>
                <td><label for="nama_produk">Nama Produk:</label></td>
                <td>
                    <input type="text" name="nama_produk" id="nama_produk"
                           value="{{ old('nama_produk', $produk->nama_produk) }}" required>
                </td>
            </tr>
        </table>
        <tr>
    <td><label for="kategori">Kategori:</label></td>
    <td>
        <input type="text" name="kategori" id="kategori"
               value="{{ old('kategori', $produk->kategori) }}"
               required>
    </td>
    </tr>

    <tr>
     <td><label for="harga_satuan">Harga Satuan:</label></td>
        <td>
        <input type="number" name="harga_satuan" id="harga_satuan"
               step="0.01" min="0"
               value="{{ old('harga_satuan', $produk->harga_satuan) }}"
               required>
    </td>
    </tr>

    <tr>
    <td><label for="stok">Stok:</label></td>
    <td>
        <input type="number" name="stok" id="stok"
               min="0"
               value="{{ old('stok', $produk->stok) }}"
               required>
    </td>
    </tr>
    <tr>
    <td><label for="satuan">Satuan:</label></td>
    <td>
        <input type="text" name="satuan" id="satuan"
               value="{{ old('satuan', $produk->satuan) }}"
               required>
    </td>
    </tr>
    <tr>
        <td colspan="2">
          <button type="submit">Update</button>
        </td>
    </tr>
</table>
</form>
</body>
</html>
