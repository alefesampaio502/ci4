<!--   <link rel="stylesheet" href="<?php echo base_url('assets/bundles/datatables/datatables.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css');?>"> -->


  <!--Data tables-->
  <!-- <script src="<?php echo base_url('assets/bundles/datatables/datatables.min.js');?>"></script>
  <script src="<?php echo base_url('assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js');?>"></script>
  <script src="<?php echo base_url('assets/bundles/datatables/export-tables/dataTables.buttons.min.js');?>"></script>
  <script src="<?php echo base_url('assets/bundles/datatables/export-tables/buttons.flash.min.js');?>"></script>
  <script src="<?php echo base_url('assets/bundles/datatables/export-tables/jszip.min.js');?>"></script>
  <script src="<?php echo base_url('assets/bundles/datatables/export-tables/pdfmake.min.js')?>"></script>
  <script src="<?php echo base_url('assets/bundles/datatables/export-tables/vfs_fonts.js');?>"></script>
  <script src="<?php echo base_url('assets/bundles/datatables/export-tables/buttons.print.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/page/datatables.js')?>"></script>
 -->

 <script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Clientes', 'Funcionario', 'Produtos', 'Usuários', 'Fornecedor', 'Vendas'],
        datasets: [{
            label: 'Total',
            data: [<?= $total_de_clientes ?>, <?= $total_de_funcionario ?>,<?= $total_de_produto ?>, <?= $total_de_usuarios ?>, 2],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});


</script>

<script>
function chart7() {
    var options = {
        chart: {
            width: 360,
            type: 'pie',
        },
        labels: ['Clientes', 'Funcionario', 'Produtos', 'Usuários', 'Fornecedor'],
        series: [<?= $total_de_clientes ?>, <?= $total_de_funcionario ?>, <?= $total_de_produto ?>, <?= $total_de_usuarios ?>, 2],
        responsive: [{
            breakpoint: 480,
            options: {
                chart: {
                    width: 200
                },
                legend: {
                    position: 'bottom'
                }
            }
        }]
    }

    var chart = new ApexCharts(
        document.querySelector("#chart7"),
        options
    );

    chart.render();
}


</script>