var x;
function dis(val) {
    document.getElementById("demo1").value += val;
}
function output() {
    var x = document.getElementById("demo1").value;
    var y = eval(x);
    document.getElementById("demo1").value = y;
}
function clr() {
    document.getElementById("demo1").value = "";
}
function back() {
    x = document.getElementById("demo1").value.slice(0, -1);
    document.getElementById("demo1").value = x;
}
