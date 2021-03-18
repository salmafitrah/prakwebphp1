
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Online Shop</title>
</head>
<body>
    <div class="bg-success p-5">
    <h1 class="text-center text-white">Online Shop</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <form action="belanja.php" method="post" class="mt-3">
            
            <div class="form-group">
                    <label for=""> Customer</label>
                    <input type="text" name="customer" value="" class="form-control">
                </div>
                <div class="form-group">
                <label for="">Item</label><br>
                  <div class="form-check form-check-inline">
                  
                    <input class="form-check-input" type="radio" name="nama_barang" id="inlineRadio1" value="tv">
                    <label class="form-check-label" for="inlineRadio1">TV</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="nama_barang" id="inlineRadio2" value="refrigator">
                    <label class="form-check-label" for="inlineRadio2">Refrigator</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="nama_barang" id="inlineRadio3" value="washing machine">
                    <label class="form-check-label" for="inlineRadio3">Washing Machine</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Total Item</label>
                    <input type="text" name="jumlah_barang" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">Date Shipping</label>
                    <input type="date" name="tanggal" value="" class="form-control">
                </div>

                <label for="">Courier Type</label>
                <select class="form-select form-control" class="form-control" name="pengiriman">
                    <option selected>Choose Courier Type :</option>
                    <option value="tiki">Tiki</option>
                    <option value="si cepat">Si Cepat</option>
                    <option value="pos">Pos</option>
                    <option value="grab">Grab</option>
                    <option value="gojek">Gojek</option>
                </select>
                <div class="form-group">
                    <label for="">Shipping Address</label>
                    <textarea class="form-control" name="alamat" id="" cols="30" rows="5"></textarea>
                </div>

                <div class="form-group">
                    <label for="">Courier Cost</label>
                    <input type="text" name="biaya" value="" class="form-control">
                </div>

                
                <div class="form-group">
                    <label for="">Assurance Cost</label>
                    <input type="text" name="asuransi" value="" class="form-control">
                </div>
                <input type="submit" value="Simpan" name="simpan" class="btn btn-success btn-sm btn-block">

            </form>
            </div>
            <?php
                $customer = $_POST['customer'];
                $nama_barang = $_POST['nama_barang'];
                $jumlah_barang = $_POST['jumlah_barang'];
                $tanggal = $_POST['tanggal'];
                $pengiriman = $_POST['pengiriman'];
                $alamat = $_POST['alamat'];
                $biaya = $_POST['biaya'];
                $asuransi = $_POST['asuransi'];

                
                if($nama_barang == "tv"){
                    $harga_barang = $jumlah_barang * 3000000;
                }elseif($nama_barang == "refrigator"){
                    $harga_barang = $jumlah_barang * 6000000;
                }else{
                    $harga_barang = $jumlah_barang * 4000000;
                }

                $total = $biaya + $asuransi + $harga_barang;

                $simpan = $_POST['simpan'];

                


            ?>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-success text-white">
                    Result
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Customer : <?= $customer?></li>
                    <li class="list-group-item">Item : <?= $nama_barang?></li>
                    <li class="list-group-item">Date Shipping :  <?= $tanggal?></li>
                    <li class="list-group-item">Courier Type : <?= $pengiriman?></li>
                    <li class="list-group-item">Shipping Address : <?= $alamat?></li>
                    <li class="list-group-item">Courier Cost : <?= $biaya?></li>
                    <li class="list-group-item">Assurance Cost :  <?= $asuransi?></li>
                    <li class="list-group-item">Total Cost : <?= $total?></li>
                   
                </ul>
                </div>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-success text-white">
                    Cost List
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">TV : Rp.3000.000</li>
                    <li class="list-group-item">Refrigator : Rp.6000.000</li>
                    <li class="list-group-item">Washing Machine : Rp. 4000.000</li>
                </ul>
                </div>
            </div>
            
        </div>
        
    </div>
</body>
</html>
