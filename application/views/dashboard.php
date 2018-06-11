<style type="text/css">body {background-color: white;}</style>


<body >
<div class="row">
  <div class="col-md-2 col-md-offset-5">
    <div id="container-speed" style=" height: 200px; float: left"></div>
    <div id="container-rpm" style=" height: 200px; float: left"></div>
</div>
</div>
<div class="row">
<div class="col-md-2">
        <input  type="hidden"/>
    
    </div>
    <div class="col-md-5">
        <div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
    </div>
    <div class="col-md-5">
        <div id="container3"></div>
    </div>
    
</div>
    
<div class="row">
<div class="col-md-3">
        <input  type="hidden"/>
    
    </div>
<div class="col-md-6">
        <div id="container2" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
    
    </div>
       
</div>
    
    
 
   <?php // print_r($ienero) ?>
    <?php //$var=2222; ?>
</body>
    <script src="assets2/vendor/jquery/jquery.min.js"></script>
    <script src="assets2/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets2/vendor/metisMenu/metisMenu.min.js"></script>
    <script src="assets2/vendor/raphael/raphael.min.js"></script>
    <script src="assets2/vendor/morrisjs/morris.min.js"></script>
    <script src="assets2/data/morris-data.js"></script>
    <script src="assets2/dist/js/sb-admin-2.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-more.js"></script>
    <script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
    <script type="text/javascript">
        
        var c="<?php echo $resultado->contador; ?>";
        var r=parseInt(c);

        var c1="<?php echo $resultado1->contador2; ?>";
        var r2=parseInt(c1);

        var a1="<?php echo $ienero->contador3; ?>";
        var i1=parseInt(a1);
    var b1="<?php echo $ifebrero->contador4; ?>";
        var i2=parseInt(b1);
            var d1="<?php echo $imarzo->contador5; ?>";
        var i3=parseInt(d1);
            var e1="<?php echo $iabril->contador6; ?>";
        var i4=parseInt(e1);
            var f1="<?php echo $imayo->contador7; ?>";
        var i5=parseInt(f1);
            var g1="<?php echo $ijunio->contador8; ?>";
        var i6=parseInt(g1);
            var h1="<?php echo $ijulio->contador9; ?>";
        var i7=parseInt(h1);
    var n1="<?php echo $iagosto->contador10; ?>";
        var i8=parseInt(n1);
            var j1="<?php echo $iseptiembre->contador11; ?>";
        var i9=parseInt(j1);
            var k1="<?php echo $ioctubre->contador12; ?>";
        var i10=parseInt(k1);
            var l1="<?php echo $inoviembre->contador13; ?>";
        var i11=parseInt(l1);
            var m1="<?php echo $idiciembre->contador14; ?>";
        var i12=parseInt(m1);
       // alert(r2);
       ////////////////////////////////////////


        var q1="<?php echo $ienero2->contador3; ?>";
        var z1=parseInt(q1);

         var q2="<?php echo $ifebrero2->contador4; ?>";
        var z2=parseInt(q2);

            var q3="<?php echo $imarzo2->contador5; ?>";
        var z3=parseInt(q3);

            var q4="<?php echo $iabril2->contador6; ?>";
        var z4=parseInt(q4);

            var q5="<?php echo $imayo2->contador7; ?>";
        var z5=parseInt(q5);

            var q6="<?php echo $ijunio2->contador8; ?>";
        var z6=parseInt(q6);

            var q7="<?php echo $ijulio2->contador9; ?>";
        var z7=parseInt(q7);

        var q8="<?php echo $iagosto2->contador10; ?>";
        var z8=parseInt(q8);

            var q9="<?php echo $iseptiembre2->contador11; ?>";
        var z9=parseInt(q9);

            var q10="<?php echo $ioctubre2->contador12; ?>";
        var z10=parseInt(q10);

            var q11="<?php echo $inoviembre2->contador13; ?>";
        var z11=parseInt(q11);

            var q12="<?php echo $idiciembre2->contador14; ?>";
        var z12=parseInt(q12);
       // alert(r2);

    </script>


    <script>
   

Highcharts.chart('container2', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Movimientos de Ingresos y Egresos'
    },
    xAxis: {
        categories: [
            'Enero',
            'Febrero',
            'Marzo',
            'Abril',
            'Mayo',
            'Junio',
            'Julio',
            'Augosto',
            'Septiembre',
            'Octubre',
            'Noviembre',
            'Diciembre'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'En cientos (Bs)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} Bs</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Ingresos',
        data: [i1, i2, i3, i4, i5, i6, i7, i8, i9, i10, i11, i12]

    }, {
        name: 'Egresos',
        data: [z1, z2,z3,z4, z5, z6, z7, z8, z9, z10, z11,z12]

    }]
});




    Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Forma de Pago'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Forma de Pago',
        colorByPoint: true,
        data: [{
            name: 'Efectivo',
            y: 56.33
        }, {
            name: 'Cheque',
            y: 24.03
        }]
    }]
});


    var gaugeOptions = {

    chart: {
        type: 'solidgauge'
    },

    title: null,

    pane: {
        center: ['50%', '85%'],
        size: '140%',
        startAngle: -90,
        endAngle: 90,
        background: {
            backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#EEE',
            innerRadius: '60%',
            outerRadius: '100%',
            shape: 'arc'
        }
    },

    tooltip: {
        enabled: false
    },

    // the value axis
    yAxis: {
        stops: [
            [0.1, '#55BF3B'], // green
            [0.5, '#DDDF0D'], // yellow
            [0.9, '#DF5353'] // red
        ],
        lineWidth: 0,
        minorTickInterval: null,
        tickAmount: 2,
        title: {
            y: -70
        },
        labels: {
            y: 16
        }
    },

    plotOptions: {
        solidgauge: {
            dataLabels: {
                y: 5,
                borderWidth: 0,
                useHTML: true
            }
        }
    }
};

// The speed gauge
var chartSpeed = Highcharts.chart('container-speed', Highcharts.merge(gaugeOptions, {
    yAxis: {
        min: 0,
        max: 7000,
        title: {
            text: 'Monto Total  de Ingresos'
        }
    },

    credits: {
        enabled: false
    },

    series: [{
        name: 'Ingresos (Bs)',
        data: [r],
        dataLabels: {
            format: '<div style="text-align:center"><span style="font-size:25px;color:' +
                ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y:.1f}</span><br/>' +
                   '<span style="font-size:12px;color:silver">Bolivianos</span></div>'
        },
        tooltip: {
            valueSuffix: ' Bolivianos'
        }
    }]

}));

// The RPM gauge
var chartRpm = Highcharts.chart('container-rpm', Highcharts.merge(gaugeOptions, {
    yAxis: {
        min: 0,
        max: 5000,
        title: {
            text: 'Monto Total de  Egresos'
        }
    },
  
    series: [{
        name: 'Egresos (Bs)',
        data: [r2],
        dataLabels: {
            format: '<div style="text-align:center"><span style="font-size:25px;color:' +
                ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y:.1f}</span><br/>' +
                   '<span style="font-size:12px;color:silver">Bolivianos</span></div>'
        },
        tooltip: {
            valueSuffix: ' Bolivianos'
        }
    }]

}));


    </script>


