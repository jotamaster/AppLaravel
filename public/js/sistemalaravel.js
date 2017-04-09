
$(document).ready(function () {

    // Build the chart

    Highcharts.chart('container3', {

        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Documentos'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: [{
            name: 'Doc',
            colorByPoint: true,
            data: [{
                name: 'Decretos',
                y:2
            },
            {
                name: 'Oficios',
                y: 1
            },
            {
                name: 'Solicitudes',
                y: 7
            }]
        }]
    });
    // -----------------------------------------------------
    Highcharts.chart('container2', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Documentos'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: [{
            name: 'Do',
            colorByPoint: true,
            data: [{
                name: 'Decretos',
                y: 20
            },
            {
                name: 'Oficios',
                y: 30
            },
            {
                name: 'Solicitudes',
                y: 50
            }]
        }]
    });

});


Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Documentos por Departamentos'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        type: 'category',
        labels: {
            rotation: -45,
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Documentos'
        }
    },
    legend: {
        enabled: false
    },
    tooltip: {
        pointFormat: 'Documentos: <b>{point.y:.3f} </b>'
    },
    series: [{
        name: 'Population',
        data: [
            ['Administracion y Finanzas', 23.7],
            ['Dirección de Obras', 16.1],
            ['Dirección de Tránsito', 14.2],
            ['DIDECO', 14.0],
            ['Dirección de Obras', 12.5],
            ['Secretaria Municipal', 8.9],
            ['SECPLAN', 8.9]
        ],
        dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            format: '{point.y:.1f}', // one decimal
            y: 10, // 10 pixels down from the top
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    }]
});

new function sumar(){
  
}
