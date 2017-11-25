 var chrt = document.getElementById("mycanvas").getContext("2d");
var myarr = [65, 59, 80, 81, 56, 55, 40];
var data = {
    labels: ["January", "February", "March", "April", "May", "June", "July"], //x-axis
    datasets: [
        {
            label: "My First dataset", //optional
            fillColor: "rgba(220,220,220,0.8)",
            strokeColor: "rgba(220,220,220,0.8)",
            highlightFill: "rgba(220,220,220,0.75)",
            highlightStroke: "rgba(220,220,220,1)",
            data: [65, 59, 80, 81, 56, 55, 40] // y-axis
        },
		{
            label: "My Second dataset", //optional
            fillColor: "rgba(220,120,220,0.8)",
            strokeColor: "rgba(220,120,220,0.8)",
            highlightFill: "rgba(220,220,220,0.75)",
            highlightStroke: "rgba(220,220,220,1)",
            data: myarr
        }
    ]
};

var myFirstChart = new Chart(chrt).Bar(data);