
var data = [];
const daftar = document.getElementById('daftar_barang');
const nama = document.getElementById('nama_barang');

function tambahData() {
    if (nama.value.length > 0) {
        data.push(nama.value);
        ngeluarindaftar();
    }
    nama.value = '';      
}

function editData(item) {
    const indexItem = data.indexOf(item);
    const newName = prompt('Nama Baru');
    if(newName.length > 0) {
        data[indexItem] = newName;
    } else {
        alert('gak boleh kosong');
    }
    ngeluarindaftar();
}

function hapusData(item) {
    const indexItem = data.indexOf(item);
    data.splice(indexItem, 1);
    ngeluarindaftar();
}

function ngeluarindaftar() {
    var daftarnama = '<ul>';
    data.forEach(datas => {
        daftarnama +=   `<div>
                        <li>
                      ${datas}[
                        <a href="#" onclick="return editData('${datas}')">Edit</a>
                        |
                        <a href="#" onclick="return hapusData('${datas}')">Hapus</a>
                        ]
                        </li>
                    </div>`;
    });

    daftar.innerHTML = daftarnama;
}