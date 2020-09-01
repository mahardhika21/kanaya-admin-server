<html>

<head>
    <meta charset="utf-8">
    <title><?= $title; ?></title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table,
        th,
        td {
            border: 1px solid slategray;
            margin: 5px;
        }

        .signature {
            display: inline;
            width: 30%
        }
    </style>
</head>

<body>
    <h1 style=""><center>Laporan Penjualan Global</center></h1>
    <h2><center><?= $title; ?></center></h2>
    <center><hr></center>
    <!--     
        <p>Name : {{Form.Name}}</p>
        <p>Department : {{Form.Department}}</p>
        <p>Business Purpose : {{Form.Purpose}}</p>
        <p>From : {{Form.From : d}} To : {{Form.To:d}} 
        </p>
    -->
    <!--
     -->
    <h3>List Data</h3>
    <center>
    <table style="width: 520px;">
        <tr style="background-color: orange">
            <th>No</th>
            <th>Bagian</th>
            <th>Jumlah</th>
        </tr>
        <?php $i = 1;
            $jumlah = 0;
        foreach($data as $sales) { 
            $jumlah = $jumlah + $sales['nominal'];
            ?>
        <tr>
            <td style="width: 3px;"><center><?= $i; ?></center></td>
            <td><center><?= $sales['marketing']; ?></center> </td>
            <td><?= 'Rp. '. number_format($sales['nominal'],2); ?></td>
        </tr>
    <?php 
            $i++;
    } ?>
        <tr>
            <td colspan="2"><center>Jumlah</center></td>
            <td><?= 'Rp. '. number_format($jumlah, 2); ?> </td>
        </tr>

    </table>
    </center>
   <!--  <h3 style="">Total: {{Form.Total}}</h3>
    <div class="signature">
        <h4>Signature:</h4><img src="{{Form.Signature}}">
    </div> -->
    <script type="text/javascript">
    	window.onload = function() { window.print(); }
    </script>
</body>
</html>