am4core.useTheme(am4themes_animated);

var chart = am4core.create("chartdiv", am4charts.XYChart3D);



chart.data = [

    {
    "country": "Enero",
    "visits": 3025
}, {
    "country": "Febrero",
    "visits": 1882
}, {
    "country": "Marzo",
    "visits": 1809
}, {
    "country": "Abril",
    "visits": 1322
}, {
    "country": "Mayo",
    "visits": 1122
}, {
    "country": "Junio",
    "visits": 2114
}, {
    "country": "Julio",
    "visits": 984
}, {
    "country": "Agosto",
    "visits": 711
}, {
    "country": "Septiembre",
    "visits": 665
}, {
    "country": "Octubre",
    "visits": 580
}, {
    "country": "Noviembre",
    "visits": 443
}, {
    "country": "Diciembre",
    "visits": 441
}



];

var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
categoryAxis.renderer.grid.template.location = 0;
categoryAxis.dataFields.category = "country";
categoryAxis.renderer.minGridDistance = 60;
categoryAxis.renderer.grid.template.disabled = true;
categoryAxis.renderer.baseGrid.disabled = true;
categoryAxis.renderer.labels.template.dy = 20;

var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
valueAxis.renderer.grid.template.disabled = true;
valueAxis.renderer.baseGrid.disabled = true;
valueAxis.renderer.labels.template.disabled = true;
valueAxis.renderer.minWidth = 0;

var series = chart.series.push(new am4charts.ConeSeries());
series.dataFields.categoryX = "country";
series.dataFields.valueY = "visits";
series.columns.template.tooltipText = "{valueY.value}";
series.columns.template.tooltipY = 0;
series.columns.template.strokeOpacity = 1;

// as by default columns of the same series are of the same color, we add adapter which takes colors from chart.colors color set
series.columns.template.adapter.add("fill", function (fill, target) {
    return chart.colors.getIndex(target.dataItem.index);
});

series.columns.template.adapter.add("stroke", function (stroke, target) {
    return chart.colors.getIndex(target.dataItem.index);
});