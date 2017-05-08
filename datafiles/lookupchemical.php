<!--Code for QR code reader, pass image into function then redirects to chemical page-->

<img id='uploadedimage' src='../<?php echo $_GET['file']; ?>'>

<script src="../qcode-decoder/build/qcode-decoder.min.js"></script>
<script>

var image = document.getElementById("uploadedimage");

QCodeDecoder()
  .decodeFromImage(image,function(er,res){
    document.write(res);
    window.location.href = "../chemical.php?id=" + res;
  });

</script>