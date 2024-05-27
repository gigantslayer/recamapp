<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<script>
    var options = {
        annotations: {
            position: 'back'
        },
        dataLabels: {
            enabled: false
        },
        chart: {
            type: 'bar',
            height: 300
        },
        fill: {
            opacity: 1
        },
        plotOptions: {},
        series: [{
            name: 'Grafik Penjualan Minggu ini',
            data: [
                '<?= $minggu['jumlah'] ?>',
                '<?= $senin['jumlah'] ?>',
                '<?= $selasa['jumlah'] ?>',
                '<?= $rabu['jumlah'] ?>',
                '<?= $kamis['jumlah'] ?>',
                '<?= $jumat['jumlah'] ?>',
                '<?= $sabtu['jumlah'] ?>',
            ]
        }],
        colors: '#435ebe',
        xaxis: {
            categories: ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"],
        },
    }

    var chart = new ApexCharts(document.querySelector("#chart-minggu-ini"), options);

    chart.render();
</script>

<script>
    var options2 = {
        annotations: {
            position: 'back'
        },
        dataLabels: {
            enabled: false
        },
        chart: {
            type: 'bar',
            height: 300
        },
        fill: {
            opacity: 1
        },
        plotOptions: {},
        series: [{
            name: 'Grafik Penjualan Bulan ini',
            data: [
                '<?= $januari['jumlah'] ?>',
                '<?= $februari['jumlah'] ?>',
                '<?= $maret['jumlah'] ?>',
                '<?= $april['jumlah'] ?>',
                '<?= $mei['jumlah'] ?>',
                '<?= $juni['jumlah'] ?>',
                '<?= $juli['jumlah'] ?>',
                '<?= $agustus['jumlah'] ?>',
                '<?= $september['jumlah'] ?>',
                '<?= $oktober['jumlah'] ?>',
                '<?= $november['jumlah'] ?>',
                '<?= $desember['jumlah'] ?>',
            ]
        }],
        colors: '#435ebe',
        xaxis: {
            categories: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
        },
    }

    var chart = new ApexCharts(document.querySelector("#chart-bulan-ini"), options2);

    chart.render();
</script>

<script>
    function ubahGrafikMinggu() {
        let sel = $("#minggu-select").val()
        if (sel == "bulan") {
            $('#minggu-select').prop('selectedIndex', 0);
            $("#chart-minggu").hide();
            $("#chart-bulan").show();
        }
    }

    function ubahGrafikBulan() {
        let sel2 = $("#bulan-select").val()
        if (sel2 == "minggu") {
            $('#bulan-select').prop('selectedIndex', 1);
            $("#chart-minggu").show();
            $("#chart-bulan").hide();
        }
    }
</script>