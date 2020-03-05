Raphael.fn.drawGrid = function (x, y, w, h, wv, hv, color) {
    color = color || "#000";
    var path = ["M", Math.round(x) + .5, Math.round(y) + .5, "L", Math.round(x + w) + .5, Math.round(y) + .5, Math.round(x + w) + .5, Math.round(y + h) + .5, Math.round(x) + .5, Math.round(y + h) + .5, Math.round(x) + .5, Math.round(y) + .5],
        rowHeight = h / hv,
        columnWidth = w / wv;
    for (var i = 1; i < hv; i++) {
        path = path.concat(["M", Math.round(x) + .5, Math.round(y + i * rowHeight) + .5, "H", Math.round(x + w) + .5]);
    }
    for (i = 1; i < wv; i++) {
        path = path.concat(["M", Math.round(x + i * columnWidth) + .5, Math.round(y) + .5, "V", Math.round(y + h) + .5]);
    }
    return this.path(path.join(",")).attr({stroke: color, fill: "#FFF6F6"});
};

function getAnchors(p1x, p1y, p2x, p2y, p3x, p3y) {
	var l1 = (p2x - p1x) / 2,
		l2 = (p3x - p2x) / 2,
		a = Math.atan((p2x - p1x) / Math.abs(p2y - p1y)),
		b = Math.atan((p3x - p2x) / Math.abs(p2y - p3y));
	a = p1y < p2y ? Math.PI - a : a;
	b = p3y < p2y ? Math.PI - b : b;
	var alpha = Math.PI / 2 - ((a + b) % (Math.PI * 2)) / 2,
		dx1 = l1 * Math.sin(alpha + a),
		dy1 = l1 * Math.cos(alpha + a),
		dx2 = l2 * Math.sin(alpha + b),
		dy2 = l2 * Math.cos(alpha + b);
	return {
		x1: p2x - dx1,
		y1: p2y + dy1,
		x2: p2x + dx2,
		y2: p2y + dy2
	};
}
// Grab the data
var labels = [],
	lists = [],
	data = [];
$("#data tfoot th").each(function () {
	lists.push($(this).html());
});
$("#data tbody td").each(function () {
	labels.push($(this).attr("data-total"));
	data.push($(this).html());
});

// Draw
var width = 845,
	height = 335,
	leftgutter = 0,
	bottomgutter = 40,
	topgutter = 20,
	colorhue = .6 || Math.random(),
	color = "#FF4A4A",
	r = Raphael("holder", width, height),
	txt = {font: '16px Open Sans', "font-weight":300, fill: "#000000"},
	txt2 = {font: '18px Open Sans', fill: "#FFFFFF"},
	X = (width - leftgutter) / labels.length,
	max = Math.max.apply(Math, data),
	Y = (height - bottomgutter - topgutter) / max;
r.drawGrid(leftgutter + X * .5 + .5, topgutter + .5, width - leftgutter - X, height - topgutter - bottomgutter, 12, 3, "#DDDDDD");
var path = r.path().attr({stroke: color, "stroke-width": 3, "stroke-linejoin": "round"}),
	bgp = r.path().attr({stroke: "none", opacity: .3, fill: "none"}),
	label = r.set(),
	lx = 0, ly = 0,
	is_label_visible = false,
	leave_timer,
	blanket = r.set();
label.push(r.text(60, 27, "total").attr(txt2));
label.hide();
var frame = r.popup(100, 100, label, "right").attr({fill: "#FF4A4A", stroke: "none", "stroke-width": 1}).hide();

var p, bgpp;
for (var i = 0, ii = labels.length; i < ii; i++) {
	var y = Math.round(height - bottomgutter - Y * data[i]),
		x = Math.round(leftgutter + X * (i + .5)),
		t = r.text(x, 160, lists[i]).attr(txt).toBack();
	if (!i) {
		p = ["M", x, y, "C", x, y];
		bgpp = ["M", leftgutter + X * .5, height - bottomgutter, "L", x, y, "C", x, y];
	}
	if (i && i < ii - 1) {
		var Y0 = Math.round(height - bottomgutter - Y * data[i - 1]),
			X0 = Math.round(leftgutter + X * (i - .5)),
			Y2 = Math.round(height - bottomgutter - Y * data[i + 1]),
			X2 = Math.round(leftgutter + X * (i + 1.5));
		var a = getAnchors(X0, Y0, x, y, X2, Y2);
		p = p.concat([a.x1, a.y1, x, y, a.x2, a.y2]);
		bgpp = bgpp.concat([a.x1, a.y1, x, y, a.x2, a.y2]);
	}
	var dot = r.circle(x, y, 6).attr({fill: "#333", stroke: color, "stroke-width": 2});
	blanket.push(r.rect(leftgutter + X * i, 0, X, height - bottomgutter).attr({stroke: "none", fill: "#fff", opacity: 0}));
	var rect = blanket[blanket.length - 1];
	(function (x, y, data, lbl, dot) {
		var timer, i = 0;
		rect.hover(function () {
			clearTimeout(leave_timer);
			var side = "right";
			if (x + frame.getBBox().width > width) {
				side = "left";
			}
			var ppp = r.popup(x, y, label, side, 1),
				anim = Raphael.animation({
					path: ppp.path,
					transform: ["t", ppp.dx, ppp.dy]
				}, 200 * is_label_visible);
			lx = label[0].transform()[0][1] + ppp.dx;
			ly = label[0].transform()[0][2] + ppp.dy;
			frame.show().stop().animate(anim);
			label[0].attr({text: data + " " + (data == 1 ? "" : "")}).show().stop().animateWith(frame, anim, {transform: ["t", lx, ly]}, 200 * is_label_visible);
			dot.attr("r", 8);
			is_label_visible = true;
		}, function () {
			dot.attr("r", 6);
			leave_timer = setTimeout(function () {
				frame.hide();
				label[0].hide();
				is_label_visible = false;
			}, 1);
		});
	})(x, y, data[i], labels[i], dot);
}

p = p.concat([x, y, x, y]);
bgpp = bgpp.concat([x, y, x, y, "L", x, height - bottomgutter, "z"]);
path.attr({path: p});
bgp.attr({path: bgpp});
frame.toFront();
label[0].toFront();
blanket.toFront();