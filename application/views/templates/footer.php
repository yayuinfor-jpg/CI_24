</div>
</div>
</div>

<script src="<?= base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
<script src="<?= base_url('assets/vendor/bootsrap.bundle.min.js');?>"></script>
<script src="<?= base_url('assets/vendor/datatables/jquery.dataTables.min.js');?>"></script>
<script src="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js');?>"></script>
<script src="<?= base_url('assets/vendor/chart.js/Chart.min.js');?>"></script>
<script src="<?= base_url('assets/js/sb-admin-2.min.js');?>"></script>

<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            "language":{
            "search": "Cari:",
            "lengthMenu": "Tampilkan_MENU_data",
            "info": "Menampilkan_START_sampai_END_dati_TOTAL_data",
            "paginate":{
                "previous":"Sebelumnya",
                "next": "Berikutnya"
            }
        }

    });
    });
</script>
<script>
    var ctx= document.getElementById("chartDashboard");
    var chart= new Chart(ctx,{
        type: 'bar',
        data: {
            labels:['kategori','Anggota'],
            datasets:[{
                labels:'Jumlah Data',
                data:[
                <?=$total_kategori;?>,
                <?=$total_anggota;?>
                ],
                backgroundColor:[
                    '#f40fce',
                    '#5d05ea'                
                ]
            }]
        },
        options:{
            responsive: true,
            scales:{
                yAxes:[{
                    ticks:{
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
</body>
</html>