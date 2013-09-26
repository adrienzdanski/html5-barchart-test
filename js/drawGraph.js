/*
    Copyright © 2011 Adrien Zdanski
    http://www.pixelsmithy.de
*/
var iniCanvas = function (nr) {
    var c = document.createElement("canvas");
    var div = document.createElement("div");
    c.width = 500;
    c.height = 100;
    c.id = "c" + nr;

    div.appendChild(c);

    $('#wrapper').append(div);
}

var draw = function (nr, values, labels) {
    var c = document.getElementById('c' + nr);
    var ctx = c.getContext("2d");

    for(var i = 0; i < values.length; i++) {
        ctx.fillStyle = "rgb(125,125,125)";
        ctx.fillRect (10, 20 * i, values[i], 10);

        ctx.font = "9pt Arial";
        ctx.fillText(labels[i], 20 + values [i], 20 * i + 9);
    }
}