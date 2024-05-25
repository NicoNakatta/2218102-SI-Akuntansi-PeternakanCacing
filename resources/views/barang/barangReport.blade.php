<table border="1" class="table table-hover">
                        <thead>
                          <tr>
                            <th>Kode barang</th>
                            <th>Nama barang</th>
                            <th>Bobot</th>
                            <th>Harga</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($barang as $barang)
                          <tr>
                            <td>{{$barang->kode_barang}}</td>
                            <td>{{$barang->nm_barang}}</td>
                            <td>{{$barang->satuan->nama_satuan}}</td>
                            <td>{{$barang->harga}}</td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>