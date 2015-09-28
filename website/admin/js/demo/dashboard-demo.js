$(function() {

    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '2010 Q1',
            question: 2666,
            answer: null,
            review: 2647
        }, {
            period: '2010 Q2',
            question: 2778,
            answer: 2294,
            review: 2441
        }, {
            period: '2010 Q3',
            question: 4912,
            answer: 1969,
            review: 2501
        }, {
            period: '2010 Q4',
            question: 3767,
            answer: 3597,
            review: 5689
        }, {
            period: '2011 Q1',
            question: 6810,
            answer: 1914,
            review: 2293
        }, {
            period: '2011 Q2',
            question: 5670,
            answer: 4293,
            review: 1881
        }, {
            period: '2011 Q3',
            question: 4820,
            answer: 3795,
            review: 1588
        }, {
            period: '2011 Q4',
            question: 15073,
            answer: 5967,
            review: 5175
        }, {
            period: '2012 Q1',
            question: 10687,
            answer: 4460,
            review: 2028
        }, {
            period: '2012 Q2',
            question: 8432,
            answer: 5713,
            review: 1791
        }],
        xkey: 'period',
        ykeys: ['question', 'answer', 'review'],
        labels: ['question', 'answer', 'review'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });

    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Governance review",
            value: 12
        }, {
            label: "Constituency review",
            value: 30
        }, {
            label: "Subordinate review",
            value: 20
        }],
        resize: true
    });

    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            y: '2006',
            a: 100,
            b: 90
        }, {
            y: '2007',
            a: 75,
            b: 65
        }, {
            y: '2008',
            a: 50,
            b: 40
        }, {
            y: '2009',
            a: 75,
            b: 65
        }, {
            y: '2010',
            a: 50,
            b: 40
        }, {
            y: '2011',
            a: 75,
            b: 65
        }, {
            y: '2012',
            a: 100,
            b: 90
        }],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B'],
        hideHover: 'auto',
        resize: true
    });



});

//Flot Pie Chart
$(function() {

    var data = [{
        label: "Series 0",
        data: 1
    }, {
        label: "Series 1",
        data: 3
    }, {
        label: "Series 2",
        data: 9
    }, {
        label: "Series 3",
        data: 20
    }];

    var plotObj = $.plot($("#flot-pie-chart"), data, {
        series: {
            pie: {
                show: true
            }
        },
        grid: {
            hoverable: true
        },
        tooltip: true,
        tooltipOpts: {
            content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
            shifts: {
                x: 20,
                y: 0
            },
            defaultTheme: false
        }
    });

});

