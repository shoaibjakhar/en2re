
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['Year', 'Sales', 'Expenses'],
    ['2013',  1000,      400],
    ['2014',  1170,      460],
    ['2015',  660,       1120],
    ['2016',  1030,      540]
  ]);

  var options = {
    hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}, textPosition: 'none' },
    vAxis: {minValue: 0},
    legend: {position: 'top', maxLines: 3},
    
  };

  var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
  chart.draw(data, options);
};

// Geo Chart
google.charts.load('current', {
  'packages':['geochart'],
});
google.charts.setOnLoadCallback(drawRegionsMap);

function drawRegionsMap() {
  var data = google.visualization.arrayToDataTable([
    ['Country', 'Popularity'],
    ['Germany', 200],
    ['United States', 300],
    ['Brazil', 400],
    ['Canada', 500],
    ['France', 600],
    ['RU', 700]
  ]);

  var options = {};

  var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

  chart.draw(data, options);
};
// Timeline Chart
google.charts.load('current', {'packages':['timeline']});
google.charts.setOnLoadCallback(drawChart2);
function drawChart2() {
  var container = document.getElementById('timeline');
  var chart = new google.visualization.Timeline(container);
  var dataTable = new google.visualization.DataTable();

  dataTable.addColumn({ type: 'string', id: 'President' });
  dataTable.addColumn({ type: 'date', id: 'Start' });
  dataTable.addColumn({ type: 'date', id: 'End' });
  dataTable.addRows([
    [ 'Washington', new Date(1789, 3, 30), new Date(1797, 2, 4) ],
    [ 'Adams',      new Date(1797, 2, 4),  new Date(1801, 2, 4) ],
    [ 'Jefferson',  new Date(1801, 2, 4),  new Date(1809, 2, 4) ]]);

  chart.draw(dataTable);
};
// gauge
google.charts.load('current', {'packages':['gauge']});
google.charts.setOnLoadCallback(drawChart3);

function drawChart3() {

  var data = google.visualization.arrayToDataTable([
    ['Label', 'Value'],
    ['Memory', 80],
    ['CPU', 55],

  ]);

  var options = {
    width: 400, height: 120,
    redFrom: 90, redTo: 100,
    yellowFrom:75, yellowTo: 90,
    minorTicks: 5
  };

  var chart = new google.visualization.Gauge(document.getElementById('gauge'));

  chart.draw(data, options);

  setInterval(function() {
    data.setValue(0, 1, 40 + Math.round(60 * Math.random()));
    chart.draw(data, options);
  }, 13000);
  setInterval(function() {
    data.setValue(1, 1, 40 + Math.round(60 * Math.random()));
    chart.draw(data, options);
  }, 5000);
  setInterval(function() {
    data.setValue(2, 1, 60 + Math.round(20 * Math.random()));
    chart.draw(data, options);
  }, 26000);
};

// share
google.charts.load('current', {'packages':['treemap']});
google.charts.setOnLoadCallback(drawChart4);
function drawChart4() {
  var data4 = google.visualization.arrayToDataTable([
    ['Location', 'Parent', 'Market trade volume (size)', 'Market increase/decrease (color)'],
    ['Global',    null,                 0,                               0],
    ['Sold Share',      'Global',             0,                               0],
    ['Available',    'Global',             0,                               0],
    ['China',     'Sold Share',               36,                              4],
    ['Japan',     'Sold Share',               20,                              -12],
    ['India',     'Sold Share',               40,                              63],
    ['Laos',      'Sold Share',               4,                               34],
    ['Mongolia',  'Sold Share',               1,                               -5],
    ['Israel',    'Sold Share',               12,                              24],
    ['Iran',      'Sold Share',               18,                              13],
    ['Pakistan',  'Sold Share',               11,                              -52],
    ['Egypt',     'Available',             21,                              0],
    ['S. Available', 'Available',             30,                              43],
    ['Sudan',     'Available',             12,                              2],
    ['Congo',     'Available',             10,                              12],
    ['Zaire',     'Available',             8,                               10]
  ]);

  tree = new google.visualization.TreeMap(document.getElementById('chart_div3'));

  tree.draw(data4, {
    minColor: '#f00',
    midColor: '#ddd',
    maxColor: '#0d0',
    headerHeight: 15,
    fontColor: 'black',
    showScale: true
  });

};
// chart

google.charts.load("current", {packages:["corechart"]});
google.charts.setOnLoadCallback(drawChart5);
function drawChart5() {
  var data = google.visualization.arrayToDataTable([
    ['Monthly Generation', 'Length'],
    ['Acrocanthosaurus (top-spined lizard)', 12.2],
    ['Albertosaurus (Alberta lizard)', 9.1],
    ['Allosaurus (other lizard)', 12.2],
    ['Apatosaurus (deceptive lizard)', 22.9],
    ['Archaeopteryx (ancient wing)', 0.9],
    ['Argentinosaurus (Argentina lizard)', 36.6],
    ['Baryonyx (heavy claws)', 9.1],
    ['Brachiosaurus (arm lizard)', 30.5],
    ['Ceratosaurus (horned lizard)', 6.1],
    ['Coelophysis (hollow form)', 2.7],
    ['Compsognathus (elegant jaw)', 0.9],
    ['Deinonychus (terrible claw)', 2.7],
    ['Diplodocus (double beam)', 27.1],
    ['Dromicelomimus (emu mimic)', 3.4],
    ['Gallimimus (fowl mimic)', 5.5],
    ['Mamenchisaurus (Mamenchi lizard)', 21.0],
    ['Megalosaurus (big lizard)', 7.9],
    ['Microvenator (small hunter)', 1.2],
    ['Ornithomimus (bird mimic)', 4.6],
    ['Oviraptor (egg robber)', 1.5],
    ['Plateosaurus (flat lizard)', 7.9],
    ['Sauronithoides (narrow-clawed lizard)', 2.0],
    ['Seismosaurus (tremor lizard)', 45.7],
    ['Spinosaurus (spiny lizard)', 12.2],
    ['Supersaurus (super lizard)', 30.5],
    ['Tyrannosaurus (tyrant lizard)', 15.2],
    ['Ultrasaurus (ultra lizard)', 30.5],
    ['Velociraptor (swift robber)', 1.8]]);

  var options = {
    title: 'Monthly Generation Vs Solar Generation',
    legend: { position: 'none' },
  };

  var chart = new google.visualization.Histogram(document.getElementById('chart_div4'));
  chart.draw(data, options);
}

