<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Selection Sort</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <?php
    function selectionSortNumber($nmbr) {

for ($i = 0; $i <= $nmbrlength-1; $i++) {
    $indexSmallestNumber = $i;
    for ($j = $i + 1; $j <= $nmbrlength; $j++) {
        if ($nmbr[$j] < $nmbr[$indexSmallestNumber]) {
            $indexSmallestNumber = $j;
        }
    }
    if ($indexSmallestNumber != $i) {
        $temp = $nmbr[$i];
        $nmbr[$i] = $nmbr[$indexSmallestNumber];
        $nmbr[$indexSmallestNumber] = $temp;
    }
}
return $nmbr;
}
?>

<!-- function selectionSortNumber(nmbr) {

for (var i = 0; i <= nmbr.length - 1; i++) {
    var indexSmallestNumber = i;
    for (var j = i + 1; j <= nmbr.length; j++) {
        if (nmbr[j] < nmbr[indexSmallestNumber]) {
            var indexSmallestNumber = j;
        }


    }
    if (indexSmallestNumber != i) {
        var temp = nmbr[i];
        nmbr[i] = nmbr[indexSmallestNumber];
        nmbr[indexSmallestNumber] = temp;
    }

}
return nmbr;

} -->

</head>

<body>


    <div class="container">
    <h2>Selection Sort</h2>
        <form method="GET">
            <div class="form-group">
                <label for="coba">Silahkan masukkan angka</label>
                <!--input harus pakai [] dan comma separated-->
                <input type="text" class="form-control" id="coba" name="coba" placeholder="Contoh : [1,2,3,4,...]">
            </div>
            <button type="submit" id="hasil2" class="btn btn-danger" name="rs">Urutkan!</button>

            <p><?php
            if(isset(($_POST['rs']))){
                function result(){
                    $nomor = $_POST['coba'];
                    $nmbr = array($nomor);
                    selectionSortNumber($nmbr);
                    echo "Urutan dari terkecil hingga terbesar adalah" . $nmbr;
                }

            }
            ?></p>

        <!-- function hasil() {
            var nmbr = document.getElementById("coba").value;
            alert("Urutan dari terkecil hingga terbesar adalah " + selectionSortNumber(angka))

        } -->




        </form>
    </div>
</body>

</html>
