dom = document.getElementById("gauge-chart"), myChart = echarts.init(dom), app = {};
option = null, option = {
    tooltip: { formatter: "{a} <br/>{b} : {c}%" },
    toolbox: { feature: { restore: { title: "Refresh" }, saveAsImage: { title: "Download Image" } } },
    series: [{
        name: "Business indicator",
        type: "gauge",
        detail: { formatter: "{value}%" },
        axisLine: {
            lineStyle: {
                color: [
                    [.2, "#34c38f"],
                    [.8, "#556ee6"],
                    [1, "#f46a6a"]
                ],
                width: 20
            }
        },
        splitLine: {
            distance: -30,
            length: 20,
            lineStyle: {
                color: '#fff',
                width: 4
            }
        },
        data: [{ value: 50, name: "" }]
    }]
}, option && "object" == typeof option && myChart.setOption(option, !0);