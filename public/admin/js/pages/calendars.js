"use strict";
var CalendarList = [];

function CalendarInfo() {
    this.id = null, this.name = null, this.checked = !0, this.color = null, this.bgColor = null, this.borderColor = null, this.dragBgColor = null
}

function addCalendar(r) {
    CalendarList.push(r)
}

function findCalendar(a) {
    var o;
    return CalendarList.forEach(function(r) {
        r.id === a && (o = r)
    }), o || CalendarList[0]
}

function hexToRGBA(r) {
    return "rgba(" + parseInt(r.slice(1, 3), 16) + ", " + parseInt(r.slice(3, 5), 16) + ", " + parseInt(r.slice(5, 7), 16) + ", " + (parseInt(r.slice(7, 9), 16) / 255 || 1) + ")"
}! function() {
    var r = new CalendarInfo;
    r.id = String(1), r.name = "Atendidas", r.color = "#ffffff", r.bgColor = "#b5e550", r.dragBgColor = "#b5e550", r.borderColor = "#b5e550", addCalendar(r), (r = new CalendarInfo).id = String(2), r.name = "Não Atendidas", r.color = "#ffffff", r.bgColor = "#ff0000", r.dragBgColor = "#ff0000", r.borderColor = "#ff0000", addCalendar(r)
}();